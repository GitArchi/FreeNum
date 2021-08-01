<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\BaseUrl;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\jui\DropDown;
use yii\helpers\Url;

$form = ActiveForm::begin([
//    'action' => Url::to('site/search'),
    'method' => 'get',
]);
?>
<?= $form->errorSummary($formmodel); ?>
    <p>
        Дата с:
        <?= DatePicker::widget([
            'model' => $formmodel,
            'attribute' => 'datefrom',
            'language' => 'ru',
            'dateFormat' => 'php:d.m.Y',
        ]);
        ?>
    </p>
    <p>
        Дата по:
        <?= DatePicker::widget([
            'model' => $formmodel,
            'attribute' => 'dateto',
            'language' => 'ru',
            'dateFormat' => 'php:d.m.Y',
        ]);
        ?>
        <?= $form->field($formmodel, 'telnumber') ?>
        <?= $form->field($formmodel, 'noanswer')->CheckBox(); ?>
        <?= $form->field($formmodel, 'only_in')->RadioList(['in'=>'Входящие','out'=>'Исходящие']); ?>
    </p>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php
ActiveForm::end()
?>