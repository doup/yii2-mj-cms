<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mobilejazz\yii2\cms\backend\modules\i18n\models\I18nSourceMessage */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="i18n-source-message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'category')
                    ->textInput([ 'maxlength' => 32 ]) ?>

    <?php echo $form->field($model, 'message')
                    ->textarea([ 'rows' => 6 ]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'),
            [ 'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary' ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
