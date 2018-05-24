<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\course\models\course */

$this->title = 'Create course';
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
