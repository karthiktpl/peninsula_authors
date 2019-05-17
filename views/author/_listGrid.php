<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */?>
<div class="row"> 
<?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'item'],
            'layout' => '{summary}{items}{pager}',
            'emptyText' => 'No results.',
            'options' => ['tag' => false],             
			'itemView' => '_list',

            /*'itemView' => function ($model, $key, $index, $widget) {
                return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
            },*/
        ]) ?>
</div>