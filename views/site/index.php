<?php
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <p><?= Html::a('Category', ['/category/index'], ['class' => 'btn btn-lg btn-success']) ?></p>
        <p><?= Html::a('Post', ['/post/index'], ['class' => 'btn btn-lg btn-success']) ?></p>
    </div>

</div>
