<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserNetwork */

// $this->title = 'Update User Network: ' . $model->id;
$this->title = 'Update profile';
// $this->params['breadcrumbs'][] = ['label' => 'User Networks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Profile', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-network-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
