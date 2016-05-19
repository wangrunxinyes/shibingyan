<?php
use yii\helpers\Html;
use yii\helpers\StringHelper;
?>


<div class="post">
    <div class="title">
        <?= Html::a(Html::encode($data->title), $data->url); ?>
    </div>
    <div class="nav">
        <i class="icon-date"></i><?= Yii::$app->formatter->asDate($data->created_at); ?>
        <i class="view-icon icon-edit"></i><?= 'By ' . $data->user->username; ?>
        <i class="view-icon icon-cat"></i><?= '<a href="'. Yii::$app->getUrlManager()->createUrl(['/post/catalog/','id'=>$data->catalog->id]) .'">' . $data->catalog->title . '</a>'; ?>
        <i class="view-icon icon-comment"></i><?= $data->click; ?> viewers
        <i class="view-icon icon-views"></i><?= implode(' ', $data->tagLinks); ?>
    </div>
    <div class="content">
        <?php
        $parser = new \cebe\markdown\GithubMarkdown();
        echo $parser->parse($data->content);
        ?>
    </div>
</div>