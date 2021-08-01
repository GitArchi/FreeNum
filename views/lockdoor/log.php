<?php

use yii\helpers\Html;
use yii\jui\DropDown;
use app\modules\Cds\models\Asterisk;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
$this->title = 'КРО лог';
?>


<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    $gridColumns = [
        [
            'class' => 'kartik\grid\SerialColumn',
        ],
        [
            'attribute' => 'date',
            'value' => function ($model, $index, $widget) {
                return \Yii::$app->formatter->asDatetime($model->date);
            }
        ],
        'text',
        ];
?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
//        'showPageSummary' => true,
        'hover' => true,
        'columns' => $gridColumns,
    ]); ?>
</div>
