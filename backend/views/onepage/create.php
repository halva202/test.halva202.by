<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OnePage */

$this->title = 'Create One Page';
$this->params['breadcrumbs'][] = ['label' => 'One Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="one-page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
