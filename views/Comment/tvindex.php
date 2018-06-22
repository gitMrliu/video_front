<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>魔侠传之唐吉可德影评看后感 - A67手机电影</title>
    <meta name="Description" content="A67手机电影网用户对《魔侠传之唐吉可德》的评论。" />
    <link href="css/style.css" type="text/css"  rel="stylesheet"/>
    <link href="css/comment.css" type="text/css"  rel="stylesheet"/>

</head>

<script src="\js\jq.js"></script>
<script>
    function but(form) {
        data = {};
        data.repay_id = <?= Html::encode($_GET['id']) ?>;
        data.film_id =  $('#film_id').val();
        data.user_id= $('#user_id').val();
        data.content = $('#content').val();
        data.title = $('#title').val();
        $.post("<?= Url::to(['comment/tvadd'])?>",data,function (r) {
            console.log(r)
            window.location.reload();
        });
        return false;
    }

</script>


<body>
<div id="header">
    <div id="menu">
        <div class="top">
            <div class="logn">当前位置：<a href="http://www.a67.com/" target="_blank">A67首页</a> > <a href="http://www.a67.com/movie/" target="_blank">手机电影</a> > <a href="http://www.a67.com/list/1/45/" target="_blank">奇幻片</a> > <a href="http://www.a67.com/movie/7878" target="_blank">魔侠传之唐吉可德</a> > 评论</div>
            <div class="txt">
                <ul>
                    <li><a href="#" target="_blank">登录</a> | <a href="#" target="_blank">注册</a> | <a href="#" target="_blank">提提建议</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="main">
    <div class="module">
        <div class="title">《<?= Html::encode($tv->tv_name)?>》的影评</div>
        <div class="comment_list">
            <div class="comment_fb">
                <div class="comment_fb_top"><span></span><b>为减轻审核压力，200字以内的评论不予审核。敬请谅解！</b>
                </div>
                <div class="comment_fb_u">
                    <form method='post' onsubmit="return but(this)"">
                    <input type="text" id="title" value="请输入标题" onfocus="if(this.value!='请输入标题'){this.style.color='#333'}else{this.value='';this.style.color='#333'}" onblur="if(this.value==''){this.value='请输入标题';this.style.color='#333'}" onkeydown="this.style.color='#333'" />
                    <input type='hidden' value='<?= Html::encode($tv['id'])?>' id='film_id' />
                    <input type='hidden' value='<?= Html::encode($tv['id'])?>' id='user_id' />
                    <textarea id="content" name="content"></textarea>
                    <p><span><b><a href="#" target="_blank">登录</a></b> （请登录发表评论，游客不开放）</span> <button name="submitbutton" type="submit" style="border:none"></button></p>
                    </form>
                </div>
            </div>
            <div class="comment_m">
                <div class="comment_m_top">《魔侠传之唐吉可德》共有5条评论
                    <div class="pages">
                        <div><span><a href="#" target="_blank">上一页</a></span> <a href="#" class="on">1</a> <a href="#" target="_blank">2</a> <a href="#" target="_blank">3</a> <a href="#" target="_blank">4</a> <a href="#" target="_blank">5</a> <span><a href="#" target="_blank">下一页</a></span></div>
                    </div>
                </div>
                <!--评论循环开始-->
                <?php foreach ($data as $k=>$v): ?>
                <ul>
                    <li class="pic"><a href="#" target="_blank"><img alt="<?= Html::encode($list[$k]['name'])?>" src="<?= Html::encode($list[$k]['photo'])?>" /></a></li>
                    <li class="txt">
                        <p><a href="#" target="_blank"><?= Html::encode($v['title'])?></a><span><a href="#" target="_blank"><?= Html::encode($list[$k]['name'])?></a> <img src="images/1.jpg" /></span></p>
                        <p style="padding-top:10px;line-height:22px;"><?= Html::encode($v->content)?><a href="#" target="_blank">（查看全文）</a> | <a href="#" target="_blank">5人回应</a> | <a href="<?= Url::to(['reapy/index','id'=>$v['id']])?>" target="_blank">我来回应>></a></p>
                    </li>
                </ul>
                <?php endforeach;?>

            </div>
            <div style="float:left; width:596px;">
                <div class="pages" style="margin:20px 0px;">
                    <div><span><a href="#" target="_blank">上一页</a></span> <a href="#" class="on">1</a> <a href="#" target="_blank">2</a> <a href="#" target="_blank">3</a> <a href="#" target="_blank">4</a> <a href="#" target="_blank">5</a> <span><a href="#" target="_blank">下一页</a></span></div>
                </div>
            </div>
        </div>
        <div class="ziliao">
            <div class="pingfen">
                <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                <img src="images/rank_1.gif" border="0" /><img src="images/rank_4.gif" border="0" />
                <img src="images/rank_3.gif" border="0" /><img src="images/rank_4.gif" border="0" />
                <p><?= Html::encode($tv->score)?>分<span>（8人评价）</span></P>
            </div>
            <div class="zl_info">
                <li class="pic"><a href="#" target="_blank"><img alt="<?= Html::encode($tv->tv_name)?>" src="<?= Html::encode($tv->img_url)?>" /></a>
                    <div class="down"><a href="#" target="_blank">点击下载</a></div>
                </li>
                <li class="wz"><a href="#" target="_blank"><b><?= Html::encode($tv->tv_name)?></b></a></li>
                <li class="ss">年代：<a href="#" target="_blank"><?= Html::encode($year->years)?></a></li>
                <li class="ss">地区：<a href="#" target="_blank"><?= Html::encode($area->area_name)?></a></li>
                <li class="ss">语言：<a href="#"><?= Html::encode($tv->lanaguage_type)?></a></li>
                <li class="ss">格式：3GP MP4</li>
                <li class="ss">导演：<a href="#" target="_blank"><?= Html::encode($dir->name)?></a></li>
                <li class="ss">主演：<a href="#" target="_blank"><?= Html::encode($actor)?></a> </li>
            </div>
            <div class="jieshao">
                <?= Html::encode($data[0]->content)?>
             </div>
        </div>
    </div>
</div>
<div id="bottom">
    <div class="bottom_so">
        <div class="bottom_so_wrap">
            <div class="bottom_searcher_tet">
                <form action="http://so.a67.com/so" method="get" name="q" target="_blank" id="search" >
                    <input type="text" name="q" class="bottom_focus" value="" />
                    <input type="image" name="s" class="bottom_searchbutton" id="button" src="images/botto_searcher.gif" align="absmiddle" />
                </form>
            </div>
            <div class="bottom_keywords">
                <a href="http://so.a67.com/so?q=%E5%91%A8%E6%98%9F%E9%A9%B0&t=movie" target="_blank">周星驰</a>
                <a href="http://so.a67.com/so?q=%E5%98%BB%E6%B8%B8%E8%AE%B0&t=movie" target="_blank">嘻游记</a>
                <a href="http://so.a67.com/so?q=%E5%94%90%E5%B1%B1%E5%A4%A7%E5%9C%B0%E9%9C%87&t=movie" target="_blank">唐山大地震</a>
                <a href="http://so.a67.com/so?q=%E6%95%A2%E6%AD%BB%E9%98%9F&t=movie" target="_blank">敢死队</a> |
                <a href="http://www.a67.com/zuixin/" target="_blank">最新电影</a>
                <a href="http://www.a67.com/paihang/" target="_blank">电影排行榜</a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright © 2010 <a href="http://www.a67.com/">A67.COM</a> <a href="http://www.a67.com/">遛机网</a> All Rights Reserved  鲁ICP备05010054号</p>
        <p>本站所有手机资源均为会员制作上传，本站仅提供存储空间，如侵犯到您的权益，请及时联系本站删除，本站不负任何法律责任！</p>
    </div>
</div>
</body>
</html>