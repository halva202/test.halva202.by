<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use skeeks\yii2\ckeditor\CKEditorWidget;
use skeeks\yii2\ckeditor\CKEditorPresets;

/* @var $this yii\web\View */
/* @var $model app\models\OnePage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="one-page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'controller')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'text')->widget(CKEditorWidget::className(), [
        'options' => ['rows' => 6],
        'preset' => CKEditorPresets::FULL
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
