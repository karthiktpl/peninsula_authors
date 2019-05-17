<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuthorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="author-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'id' => 'AlphaFilter',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>
    <ul class="pagination flex-wrap">
        <li class="page-item active"><a class="page-link alphaSort" href="javascript:void(0)" data-page="">all</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="A">A</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="B">B</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="C">C</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="D">D</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="E">E</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="F">F</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="G">G</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="H">H</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="I">I</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="J">J</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="K">K</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="L">L</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="M">M</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="N">N</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="O">O</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="P">P</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="Q">Q</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="R">R</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="S">S</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="T">T</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="U">U</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="V">V</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="W">W</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="X">X</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="Y">Y</a></li>
        <li class="page-item"><a class="page-link alphaSort" href="javascript:void(0)" data-page="Z">Z</a></li>
    </ul>
    <?= $form->field($model, 'name')->hiddenInput()->label(false); ?>
    <?php ActiveForm::end(); ?>

</div>
