<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\LinkPager;

$this->title = Yii::$app->params['blogTitle'] . ' - ' . Yii::$app->params['blogTitleSeo'];
$this->params['breadcrumbs'][] = 'Blog';

/*$this->breadcrumbs=[
    //$post->catalog->title => Yii::app()->createUrl('post/catalog', array('id'=>$post->catalog->id, 'surname'=>$post->catalog->surname)),
    '文章',
];*/

?>
<?php if(!empty($_GET['tag'])): ?>
    <h4>TAG: <i><?= Html::encode($_GET['tag']); ?></i></h4>
<?php endif; ?>

<?php if(!empty($_GET['keyword'])): ?>
    <h4>Search: <i><?= Html::encode($_GET['keyword']); ?></i></h4>
<?php endif; ?>

<?php
foreach($posts as $post)
{
    echo $this->render('_brief', [
        'data' => $post,
    ]);
}
?>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
