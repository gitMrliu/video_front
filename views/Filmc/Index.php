<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 2018/6/7
 * Time: 19:49
 */
use \yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>魔侠传之唐吉可德下载,3GP MP4高清下载,国语 - A67手机电影</title>
<meta name="Description" content="A67手机电影提供魔侠传之唐吉可德[国语]3GP格式和MP4格式下载，让您在手机上也一样能看高清电影。" />
<link href="css/style.css" type="text/css"  rel="stylesheet"/>
<link href="css/content.css" type="text/css"  rel="stylesheet"/>
<script language="javascript" src="js/global.js"></script>
</head>
<body>
<div id="header">
	<div id="menu">
		<div class="top">
			<div class="logn">3GP/MP4手机电影第一门户网！<a href="#" target="_blank">请登录</a><a href="#" target="_blank">注册会员</a></div>
			<div class="txt">
				<ul>
				<li><a href="http://www.a67.com/view/" target="_blank">提提建议</a></li>
				<li><a href="http://www.a67.com/maps.html" target="_blank">网站地图</a></li>
				<li><a href="javascript:;"  onclick="return addFavor('A67手机电影', 'http://www.a67.com/movie/')">加入收藏</a></li>
				<li><a href="javascript:;"  onclick="return setHome(this, 'http://www.a67.com');">设为首页</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="menu">
		<div class="menu_wrap">
			<div class="logo"><a href="http://www.a67.com/" target="_blank"><img src="images/logo.gif" alt="A67手机电影" border="0" /></a></div>
			<div class="search">
				<div class="searcher_wrap">
					<div class="searcher_tet">
					<form action="http://so.a67.com/so" method="get" name="q" target="_blank" id="search" >
					<input type="text" name="q" class="focus" value="" />
					<input type="image" name="s" class="searchbutton" id="button" src="images/searcher.jpg" align="absmiddle" />
					</form>
					</div>
					<div class="hot_search_box">
					<div class="hotkeywords">
						一周热搜：
						<a href="" target="_blank">一起又看流星雨</a>
						<a href="" target="_blank">泡沫之夏</a>

					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="banner"><img src="images/banner.gif" alt="新红楼梦" border="0" /></div>
		<div class="nav">
			<ul>
                <li><a href="<?= Url::to(['home/index'])?>" target="_self">首页</a></li>
                <li><a href="<?= Url::to(['film/index'])?>" title="手机电影" target="_self">电影</a></li>
                <li><a href="<?= Url::to(['tv/index'])?>" title="手机电视剧" target="_self">电视剧</a></li>
                <li><a href="<?= Url::to(['novel/index'])?>" title="手机小说" target="_self">小说</a></li>
				<li><a href="http://www.a67.com/paihang/" title="电影排行榜" target="_blank">排行</a></li>
				<li><a href="http://www.a67.com/zuixin/" title="最新电影" target="_blank">最新</a></li>
				<li><a href="http://www.a67.com/zhuanti/" target="_blank">专题</a></li>
			</ul>
			<div class="morelink"><a href="http://www.a67.com/3gpcoder/" title="3GP格式转换器" target="_blank">3GP转换器</a> | <a href="http://www.2366.com/" target="_blank">网页游戏</a> | <a href="http://db.2u.com.cn/" target="_blank">游戏下载</a></div>
			<div class="ico_new"></div>
	  </div>
	</div>
</div>
<div id="main">
	<div class="banner980"> <img src="images/banner980.jpg" width="980" height="60" /></div>
    <div class="weizhi">当前位置：<a href="http://www.a67.com/">A67首页</a> > <a href="http://www.a67.com/list/1/">手机电影</a> > <a href="/list/1/45/" title="奇幻片">奇幻片</a> > 魔侠传之唐吉可德</div>
	<div class="left">
		<div class="pic">
            <?php foreach ($data as $v): ?>
                <img alt="<?= Html::encode($v['title'])  ?> 缩略图" src="<?= Html::encode($v['img_url'])  ?>" />

        </div>
		<div class="info">
			<div class="pf">
				<H1><?= Html::encode($v['title'])  ?><b></b></H1>
				<li>用户评分：<font id="rank"><?= Html::encode($v['score'])  ?></font> 分 （共有<font id="rank_num">...</font>人评分）</li>
				<li><span>评分：</span>
				<div id="rank_pic">
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
				</div></li>
			</div>
			<ul>

			<li>地区：<a href="http://so.a67.com/so?q=%E5%A4%A7%E9%99%86" target="_blank"><?= Html::encode($area->area_name)  ?></a></li>

			<li>语言：<?= Html::encode($v['lanaguage_type'])  ?></li>
			<li>年代：<a href="" target="_blank"><?= Html::encode($year->years)  ?></a></li>
			<li>导演：<a href="" target="_blank"><?= Html::encode($dir->name)  ?></a></li>
			<li>主演：<a href="" target="_blank"><?= Html::encode($actor)  ?></a>&nbsp</li>
			</ul>
			<div class="downtb">
				<a href="#downloadurls"><img src="images/downurls.gif" border="0" /></a>
				<a href="#comment"><img src="images/comment.gif" border="0" /></a>
				<!-- JiaThis Button BEGIN -->
				<a href="" class="jiathis" target="_blank"><img src="images/downsell.gif" width="96" height="28" alt="分享魔侠传之唐吉可德" border="0" id="jiathis_a"/></a>
				<script type="text/javascript" src="" charset="utf-8"></script>
				<!-- JiaThis Button END -->
			</div>
		</div>
		<div class="content250"><iframe src="" width="250" height="250" scrolling="no" frameborder="0" style="display:block;margin:0"></iframe></div>

        <H2><?= Html::encode($v['title'])  ?>剧情介绍</H2>
		<div class="jieshao">
			<p>　　<?= Html::encode($v['desc'])  ?> </p>
		</div>

        <?php endforeach ?>




        <H2>您可能还会喜欢这些<?= Html::encode($type['name'])  ?></H2>
        <div class="movie_list">
            <?php foreach ($list as $v): ?>
            <li class="d1">
                <a href="http://www.a67.com/ebook/3163" target="_blank">
                    <img  alt="<?= Html::encode($v->title)?> MP4下载" src="<?= Html::encode($v->img_url)  ?>" />
                </a>
                <p><?= Html::encode($v->lanaguage_type)?></p>
                <b>
                    <a href="/ebook/3163" target="_blank"><?= Html::encode($v->title)?></a>
                    <img src="images/1.jpg"><em><?= Html::encode($v->lanaguage_type)?></em>
                </b>
            </li>
            <?php endforeach ?>

        </div>

        <!--评论开始-->
        <H4 id="comment"><?= Html::encode($data[0]->title)?>的影评<!--判断是否有评论，没有则不显示--><em>（<a href="#" target="_blank">共有2条影评</a>）</em><span><a href="<?= Url::to(['comment/index','id'=>$v['id']])?>" target="_blank"><img src="images/write.jpg" border="0" /></a></span></H4>
        <div class="comment">
            <!--判断是否有评论，没有则显示，链接跳转到评论发布页
            <div class="comment_number"><a href="#" target="_blank">暂时还未有该影片的影评，我来写影评</a></div>
            --->

            <!--判断是否有评论，没有则不显示--->
            <div class="comment_u">
                <!--评论循环开始-->
                <?php foreach ($com as $k=>$v): ?>
                <ul>
                    <li class="pic"><a href="#" target="_blank"><img alt="<?= Html::encode($user[$k]['name'])?>" src="<?= Html::encode($user[$k]['photo'])?>" /></a></li>
                    <li class="txt">
                        <p><a href="#" target="_blank"><?= Html::encode($user[$k]['name'])?></a><span><a href="#" target="_blank"></a> <img src="images/1.jpg" /></span></p>
                        <p style="padding-top:10px;line-height:22px;"><?= Html::encode($v->content)?><a href="#" target="_blank">（查看全文）</a> | <a href="#" target="_blank">5人回应</a> | <a href="<?= Url::to(['reapy/index','id'=>$v['id']])?>" target="_blank">我来回应>></a></p>
                    </li>
                </ul>
                <?php endforeach;?>
            </div>
            <div class="comment_more"><a href="#" target="_blank">查看《<?= Html::encode($data[0]->title)?>》全部影评>></a><span><a href="#" target="_blank">我也要写影评</a></span></div>
        </div>
    </div>
    <div class="right">
        <div class="suoyin">
            <div class="suoyin_top"><H3>手机电影索引</H3></div>
            <div class="suoyin_u">
                <ul>
                    <li><strong>按类型</strong><br />
                        <?php foreach ($typ as $v): ?>
                        <a href="#" target="_blank"><?= Html::encode($v['name'])?></a>
                        <?php endforeach;?>
                    </li>
                    <li><strong>按地区</strong><br />
                        <?php foreach ($are as $v): ?>
                        <a href="#" target="_blank"><?= Html::encode($v['area_name'])?></a>
                        <?php endforeach;?>
                    </li>
                    <li style="border-bottom:none;"><strong>按年代</strong><br />
                        <?php foreach ($yea as $v): ?>
                        <a href="#" target="_blank"><?= Html::encode($v['years'])?></a>
                        <?php endforeach;?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="paihang">
            <div class="paihang_top"><H3>最新更新手机电影</H3></div>
            <div class="paihang_u">
                <ul>
                    <?php foreach ($film as $v): ?>
                    <li class="hover"><span><?= Html::encode($v['id'])?></span><a href="#" target="_blank"><?= Html::encode($v['title'])?></a></li>
                    <?php endforeach;?>
                </ul>
                <span><a href="#" target="_blank">New50>></a></span>
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