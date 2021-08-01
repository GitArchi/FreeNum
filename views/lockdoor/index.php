<?php
use yii\helpers\Html;
use yii\jui\DropDown;
use app\modules\Cds\models\Asterisk;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
$this->title = 'КРО разблокировка двери';
?>


<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Лог', ['log'],['class' => 'btn btn-primary']); ?>
    <?= Html::a('Разблокировать дверь', ['unlockdoor'],['class' => 'btn btn-primary']); ?>
</div>
