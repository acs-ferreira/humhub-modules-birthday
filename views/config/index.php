<?php

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use humhub\compat\CActiveForm;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?= Yii::t('BirthdayModule.base', 'Birthday Module Configuration'); ?>
    </div>
    
    <div class="panel-body">
        <p><?= Yii::t('BirthdayModule.base', 'You may configure the number of days within the upcoming birthdays are shown.'); ?></p>
        <br>

        <?php $form = CActiveForm::begin(); ?>

        <?= $form->errorSummary($model); ?>

        <div class="form-group">
            <?= $form->labelEx($model, 'shownDays'); ?>
            <?= $form->textField($model, 'shownDays', ['class' => 'form-control']); ?>
            <?= $form->error($model, 'shownDays'); ?>
        </div>

        <div class="form-group">
            <?= $form->labelEx($model, 'excludedGroup'); ?>
            <?= $form->textField($model, 'excludedGroup', ['class' => 'form-control']); ?>
            <?= $form->error($model, 'excludedGroup'); ?>
        </div>

        <hr>
        <?= Html::submitButton(Yii::t('BirthdayModule.base', 'Save'), ['class' => 'btn btn-primary']); ?>
        <a class="btn btn-default" href="<?= Url::to(['/admin/module']); ?>"><?= Yii::t('BirthdayModule.base', 'Back to modules'); ?></a>

        <?php CActiveForm::end(); ?>
    </div>
</div>
