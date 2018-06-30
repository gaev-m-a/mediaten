<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text:ntext',
            'category_id',
            /*[
                'attribute' => 'category_name',
                'value' => function($data){
                    return $data->category->name;
                },
            ],*/

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
