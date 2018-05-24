<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\Course\models\Course */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Course Listesi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',
            'baslangic',
            'bitis',

            [  
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} ',
                        
            ],
        ],
    ]); ?>

        <ul>
        
        <?php foreach ($courses as $course){?>  <li>
        <?php echo $course['isim']; ?>
        </li>
        <?php } ?>
        </ul>

</div>
