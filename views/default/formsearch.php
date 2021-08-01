<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\BaseUrl;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\jui\DropDown;
use yii\helpers\Url;

$form = ActiveForm::begin([
    'method' => 'get',
]);
?>
    <div class="form-group">
        <div class="col-lg-1">
            <?= $form->field($formmodel, 'telnumber') ?>
            <?= Html::activeDropDownList($model, 's_id',
                ArrayHelper::map(Standard::find()->all(), 's_id', 'name')) ?>
            <?= Html::submitButton('Поиск свободного номера', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php
ActiveForm::end()
?>