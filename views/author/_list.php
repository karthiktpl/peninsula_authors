 <?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */?>



  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	<?php $avatar = ($model->avatar!=''?$model->avatar:'no_avatar.png');?>
    	<?= Html::img('@web/uploads/'.$avatar,["width"=>"100px"]);?>
      <div class="caption">
        <h3><?= Html::encode($model->name)?></h3>
        <h5><?= Html::encode($model->position)?></h5>
        <p><?= Html::encode($model->bio)?></p>
        <p>
        	<?=Html::a(Html::encode('View'), ['view', 'id' => $model->id]);?>
      </div>
    </div>
</div>