<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Поиск свободного номера';
echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'name',
            ['class'=>'yii\grid\ActionColumn',
            'template' => '{view} {view2} ',
                'buttons' => [
                  'view2' => function($url, $model,$key){

                        return Html::a('Создать SIP Аккаунт', '/astrconf/sipusers/create');
                  }
                ],
            ]
        ],
    ]);
?>


