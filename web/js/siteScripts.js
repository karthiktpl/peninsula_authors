$(function(){
	$('.alphaSort').click(function(){
		$( ".alphaSort" ).parent('li').removeClass( "active");
		$(this).parent('li').addClass('active');
		$('#authorsearch-name').val($(this).data('page'));
		$.ajax({
		  method: "POST",
		  url: '/authors/web/author/alpha',
		  data: $('#AlphaFilter').serialize()
		})
		.done(function( html ) {
			$('.ListView').html(html)			
		});	
	});
})