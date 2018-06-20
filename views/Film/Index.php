<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>最新动作片下载_好看的动作片下载_经典动作片下载 - A67手机电影</title>
    <meta name="Description" content="A67手机电影提供最新动作片下载、好看的动作片下载、经典动作片下载，地域更是辐射至美国动作片、欧美动作片、香港动作片、内地动作片等。让您在手机上也一样能看高清电影。" />
    <link href="css/style.css" type="text/css"  rel="stylesheet"/>
    <link href="css/list.css" type="text/css"  rel="stylesheet"/>
</head>
<body>



    <div class="c_con">
        <div class="bord">
            <div class="r_lis"><span>手机电影</span>  <i>|</i>  <b>检索条件：动作<a href="#" target="_blank"><img src="images/c_close.jpg" /></a> + 华语<a href="#" target="_blank"><img src="images/c_close.jpg" /></a> + 2010<a href="#" target="_blank"><img src="images/c_close.jpg" /></a></b></div>
            <ul class="r_lis_con">
                <li><b>按类型</b><a href="#" target="_blank"  class="all">全部</a>
                    <?php foreach ($type as $v): ?>
                    | <a href="#"><?= Html::encode($v['name'])?></a>
                 <?php endforeach ?>
                </li>
                <li><b>按地区</b>  <a href="#" class="all">全部</a>
                    <?php foreach ($area as $v): ?>
                    | <a href="#" target="_blank"><?= Html::encode($v['area_name'])?></a>
                    <?php endforeach ?>
                </li>
                <li class="masted"><b>按时间</b>  <a href="#" class="all">全部</a>
                    <?php foreach ($year as $v): ?>
                    | <a href="#" target="_blank"><?= Html::encode($v['years'])?></a>
                    <?php endforeach ?>
                    |   <a href="#" target="_blank">更早</a></li>
            </ul>
        </div>
        <ul class="c_con_list">
            <?php foreach ($film as $v): ?>
            <li class="x1">
                <a href="<?= Url::to(['filmc/index','id'=>$v['id']])?>" target="_blank"><img src="<?= Html::encode($v['img_url'])?>" /></a>
                <p><?= Html::encode($v['lanaguage_type'])?></p>
                <div><a href="#" target="_blank"><?= Html::encode($v['title'])?></a> <img src="images/1.jpg" /> <em><?= Html::encode($v['score'])?></em></div>
            </li>
            <?php endforeach ?>
        </ul>
        <!--page-->
        <div class="pages">
            <p>共 7037 部手机电影，共 704 页，当前页为第 1 页</p>
            <div >
                    <?php echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pagination,
                        'firstPageLabel'=>"First",

                        'lastPageLabel'=>'Last',
                    ]);?>

               </div>
        </div>
    </div>
</div>

</body>
</html>