<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 2018/6/7
 * Time: 19:49
 */
use \yii\widgets\ActiveForm;
use yii\helpers\Html;
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
						<a href="http://so.a67.com/so?q=%E4%B8%80%E8%B5%B7%E5%8F%88%E7%9C%8B%E6%B5%81%E6%98%9F%E9%9B%A8&t=movie" target="_blank">一起又看流星雨</a> 
						<a href="http://so.a67.com/so?q=%E6%B3%A1%E6%B2%AB%E4%B9%8B%E5%A4%8F&t=movie" target="_blank">泡沫之夏</a> 
						<a href="http://so.a67.com/so?q=%E6%88%90%E9%BE%99&t=movie" target="_blank">成龙</a> 
						<a href="http://so.a67.com/so?q=%E6%B5%B7%E6%B4%BE%E7%94%9C%E5%BF%83&t=movie" target="_blank">海派甜心</a> 
						<a href="http://so.a67.com/so?q=%E5%91%A8%E6%98%9F%E9%A9%B0&t=movie" target="_blank">周星驰</a> 
						<a href="http://so.a67.com/so?q=%E5%98%BB%E6%B8%B8%E8%AE%B0&t=movie" target="_blank">嘻游记</a> 
						<a href="http://so.a67.com/so?q=%E5%94%90%E5%B1%B1%E5%A4%A7%E5%9C%B0%E9%9C%87&t=movie" target="_blank">唐山大地震</a> 
						<a href="http://so.a67.com/so?q=%E6%95%A2%E6%AD%BB%E9%98%9F&t=movie" target="_blank">敢死队</a> 
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
			<li>年代：<a href="http://so.a67.com/so?q=2010" target="_blank"><?= Html::encode($year->years)  ?></a></li>
			<li>导演：<a href="http://so.a67.com/so?q=%E9%98%BF%E7%94%98" target="_blank"><?= Html::encode($dir->name)  ?></a></li>
			<li>主演：<a href="http://so.a67.com/so?q=%E9%83%AD%E6%B6%9B" target="_blank"><?= Html::encode($actor)  ?></a>&nbsp</li>
			</ul> 
			<div class="downtb">
				<a href="#downloadurls"><img src="images/downurls.gif" border="0" /></a>
				<a href="#comment"><img src="images/comment.gif" border="0" /></a> 
				<!-- JiaThis Button BEGIN --> 
				<a href="http://www.jiathis.com/share/?uid=92057" class="jiathis" target="_blank"><img src="images/downsell.gif" width="96" height="28" alt="分享魔侠传之唐吉可德" border="0" id="jiathis_a"/></a> 
				<script type="text/javascript" src="http://www.jiathis.com/code/jia.js?uid=92057" charset="utf-8"></script> 
				<!-- JiaThis Button END --> 
			</div> 
		</div>
		<div class="content250"><iframe src="http://www.a67.com/proxy.html?id=45918" width="250" height="250" scrolling="no" frameborder="0" style="display:block;margin:0"></iframe></div>
		<H2>魔侠传之唐吉可德剧情介绍</H2>
		<div class="jieshao">
			<p>　　《唐吉可德》&mdash;&mdash;侠客传奇，正在进行。<br /> 出身蜀中唐门，姓唐，名吉，字可德，家中行三。唐父育有四子，富、贵、吉、祥。与其他三兄渐成商贾不同，唐吉只梦想游行侠客世界。<br /> 提起祖传冷枪，跨上院中瘦马。唐吉可德一头闯进侠客江湖，义无反顾。<br /> 桑家村里，唐吉可德遇见自己的忠心奴仆桑丘和那头老驴。<br /> 仿佛唐僧在五指山旁看见悟空。<br />但桑家村河边那转瞬即逝的&ldquo;绝世佳人&rdquo;更如梦幻般，一路指引唐吉杀到长.<br /> </p>
		</div>
		<H2 id="downloadurls">魔侠传之唐吉可德3GP下载地址<font class="f1">温馨提示：一键下载功能可一次下载3GP格式所有分节电影！</font><span><a href="javascript:;" onclick="return d3gp()"><img src="images/yijian_3gp.gif" border="0" /></a></span></H2>
		<div class="downurls">
			<ul>
				<li><a href="http://www.a67.com/download/26059-0" title="魔侠传之唐吉可德01 3GP下载" target="_blank" rel="nofollow">魔侠传之唐吉可德01</a> (格式：3GP / 分辨率：176x144)<span><a href="http://www.a67.com/download/26059-0" target="_blank" rel="nofollow">迅雷高速下载</a></span><span><a href="http://www.a67.com/download/26059-0" target="_blank" rel="nofollow">下载到电脑</a></span></li> 
				<li><a href="http://www.a67.com/download/26059-1" title="魔侠传之唐吉可德02 3GP下载" target="_blank" rel="nofollow">魔侠传之唐吉可德02</a> (格式：3GP / 分辨率：176x144)<span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">迅雷高速下载</a></span><span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">下载到电脑</a></span></li>
				<li><a href="http://www.a67.com/download/26059-1" title="魔侠传之唐吉可德02 3GP下载" target="_blank" rel="nofollow">魔侠传之唐吉可德03</a> (格式：3GP / 分辨率：176x144)<span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">迅雷高速下载</a></span><span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">下载到电脑</a></span></li> 
			</ul>
		</div>
		<H2>魔侠传之唐吉可德MP4下载地址<font class="f1">温馨提示：一键下载功能可一次下载MP4格式所有分节电影！</font><span><a href="javascript:;" onclick="return dmp4()"><img src="images/yijian_mp4.gif" border="0" /></a></span></H2>
		<div class="downurls">
			<ul>
				<li><a href="http://www.a67.com/download/26059-0" title="魔侠传之唐吉可德01 MP4下载" target="_blank" rel="nofollow">魔侠传之唐吉可德01</a> (格式：MP4 / 分辨率：320x240)<span><a href="http://www.a67.com/download/26059-0" target="_blank" rel="nofollow">迅雷高速下载</a></span><span><a href="http://www.a67.com/download/26059-0" target="_blank" rel="nofollow">下载到电脑</a></span></li> 
				<li><a href="http://www.a67.com/download/26059-1" title="魔侠传之唐吉可德02 MP4下载" target="_blank" rel="nofollow">魔侠传之唐吉可德02</a> (格式：MP4 / 分辨率：320x240)<span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">迅雷高速下载</a></span><span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">下载到电脑</a></span></li> 
			</ul>
		</div>
        <?php endforeach ?>
		<H2>您可能还会喜欢这些奇幻片</H2>
		<div class="movie_list">
				<li class="d1"><a href="http://www.a67.com/ebook/3163" target="_blank"><img  alt="卫斯理之霸王卸甲3GP MP4下载" src="http://img.a67.com/2010/12/12916884125da0.jpg" /></a><p>国语</p><b><a href="/ebook/3163" target="_blank">卫斯理之霸王卸甲</a><img src="images/1.jpg"><em>9.5分</em></b></li> 
                <li class="d2"><a href="http://www.a67.com/ebook/2800" target="_blank"><img alt="屠龙少年历险记3GP MP4下载"src="http://img.a67.com/2010/11/1290913342afdc.jpg" /></a><p>大字幕</p><b><a href="/ebook/2800"  target="_blank">屠龙少年历险记</a><img src="images/1.jpg"><em>9.5分</em></b></li> 
                <li class="d3"><a href="http://www.a67.com/ebook/6736" target="_blank"><img alt=" 怪物史瑞克4  3GP MP4下载" src="http://img.a67.com/2010/11/129047941756e3.jpg" /></a><p>大字幕</p><b><a href="/ebook/6736" target="_blank"> 怪物史瑞克4</a><img src="images/1.jpg"><em>9.5分</em></b></li> 
               	<li class="d4"><a href="http://www.a67.com/ebook/7748" target="_blank"><img alt="绿野仙踪3GP MP4下载" src="http://img.a67.com/2010/11/1290221774a719.jpg" /></a><p>大字幕</p><b><a href="/ebook/7748" target="_blank">绿野仙踪</a><img src="images/1.jpg"><em>9.5分</em></b></li> 
				<li class="d5"><a href="http://www.a67.com/ebook/2761" target="_blank"><img alt="龙之战争3GP MP4下载" src="http://img.a67.com/2010/11/12893555173444.jpg" /></a><p>国语</p><b><a href="/ebook/2761" target="_blank">龙之战争</a><img src="images/1.jpg"><em>9.5分</em></b></li> 
		</div>
		<H2>其他用户正在下载的电影</H2>
		<div class="movie_list">
				<li class="d1"><a href="http://www.a67.com/ebook/3163" target="_blank"><img  alt="卫斯理之霸王卸甲3GP MP4下载" src="http://img.a67.com/2010/12/12916884125da0.jpg" /></a><p>国语</p><b><a href="/ebook/3163" target="_blank">卫斯理之霸王卸甲</a><img src="images/1.jpg"><em>9.5分</em></b></li> 
                <li class="d2"><a href="http://www.a67.com/ebook/2800" target="_blank"><img alt="屠龙少年历险记3GP MP4下载"src="http://img.a67.com/2010/11/1290913342afdc.jpg" /></a><p>大字幕</p><b><a href="/ebook/2800"  target="_blank">屠龙少年历险记</a><img src="images/1.jpg"><em>9.5分</em></b></li> 
                <li class="d3"><a href="http://www.a67.com/ebook/6736" target="_blank"><img alt=" 怪物史瑞克4  3GP MP4下载" src="http://img.a67.com/2010/11/129047941756e3.jpg" /></a><p>大字幕</p><b><a href="/ebook/6736" target="_blank"> 怪物史瑞克4</a><img src="images/1.jpg"><em>9.5分</em></b></li> 
               	<li class="d4"><a href="http://www.a67.com/ebook/7748" target="_blank"><img alt="绿野仙踪3GP MP4下载" src="http://img.a67.com/2010/11/1290221774a719.jpg" /></a><p>大字幕</p><b><a href="/ebook/7748" target="_blank">绿野仙踪</a><img src="images/1.jpg"><em>9.5分</em></b></li> 
				<li class="d5"><a href="http://www.a67.com/ebook/2761" target="_blank"><img alt="龙之战争3GP MP4下载" src="http://img.a67.com/2010/11/12893555173444.jpg" /></a><p>国语</p><b><a href="/ebook/2761" target="_blank">龙之战争</a><img src="images/1.jpg"><em>9.5分</em></b></li> 
		</div>
		<!--评论开始-->
		<H4 id="comment">魔侠传之唐吉可德的影评<!--判断是否有评论，没有则不显示--><em>（<a href="#" target="_blank">共有32条影评</a>）</em><span><a href="#" target="_blank"><img src="images/write.jpg" border="0" /></a></span></H4>
		<div class="comment">
			<!--判断是否有评论，没有则显示，链接跳转到评论发布页
			<div class="comment_number"><a href="#" target="_blank">暂时还未有该影片的影评，我来写影评</a></div>
			--->
			
			<!--判断是否有评论，没有则不显示--->
			<div class="comment_u">
				<!--评论循环开始-->
				<ul>
					<li class="pic"><a href="#" target="_blank"><img alt="听你唱的幸福的头像" src="http://tp3.sinaimg.cn/1748738062/50/1288878560/0" /></a></li>
					<li class="txt">
						<p><a href="#" target="_blank">精神!.绝对忠实了原著的精神。</a><span><a href="#" target="_blank">听你唱的幸福</a> <img src="images/1.jpg" /></span></p>
						<p style="padding-top:10px;line-height:22px;">不知道为什么会有这么多人说这个片烂。个人觉得这是文化部审批过的尺度最大的一部片子了，难道是鲁迅的课文删减掉了 大家都不上小学了，看不明白了么？在黑暗的铁匣中昏睡的人真的容不下一个醒转之人的一声呐喊么？ 整个影片在电影界也如同男主人公一样挺枪立马，3d又如何 谁说效果烂就不行了，我...<a href="#" target="_blank">（查看全文）</a> | <a href="#" target="_blank">25人回应</a> | <a href="#" target="_blank">我来回应>></a></p>
					</li>
				</ul>
				<ul>
					<li class="pic"><a href="#" target="_blank"><img alt="冰淇淋小七的头像" src="http://tp4.sinaimg.cn/1714975543/50/1291355952/0" /></a></li>
					<li class="txt">
						<p><a href="#" target="_blank">实在是一部好片</a><span><a href="#" target="_blank">冰淇淋小七</a> <img src="images/1.jpg" /></span></p>
						<p style="padding-top:10px;line-height:22px;">看到网上很多差评，我还是要力荐一下的，理由如下。 从视觉效果来看，本片确实很一般。可以看出，本片的大部分场景是电脑制作出来的，基本上演员是在绿色的场景里进行拍摄的，然后将背景换成电脑制作的CG画面，虽然如此，但我觉得这是国产电影的一次大胆尝试，毕竟之前国产电影采用这种方式的片子不...<a href="#" target="_blank">（查看全文）</a> | <a href="#" target="_blank">25人回应</a> | <a href="#" target="_blank">我来回应>></a></p>
					</li>
				</ul>
				<ul>
					<li class="pic"><a href="#" target="_blank"><img alt="七妙的头像" src="http://tp2.sinaimg.cn/1242593801/50/1279876005/1" /></a></li>
					<li class="txt">
						<p><a href="#" target="_blank">请问这是无厘头喜剧还是雷戏？</a><span><a href="#" target="_blank">七妙</a> <img src="images/1.jpg" /></span></p>
						<p style="padding-top:10px;line-height:22px;">喂喂 这是在拍无厘头喜剧吗？ 还性唐名吉字可德江湖人称老唐搞笑给 如果不是我就超想吐槽啦 为什么里面的人装扮都是中国古代的装扮而且老唐不是江湖人士吗那怎么还身着类型古代大将军的衣服呢？ 而且演员演技超差 我看的是有几个都想笑了 唉…… 我看是现在导演平时闲来没事拍雷戏雷人玩啊...<a href="#" target="_blank">（查看全文）</a> | <a href="#" target="_blank">25人回应</a> | <a href="#" target="_blank">我来回应>></a></p>
					</li>
				</ul>
				<ul>
					<li class="pic"><a href="#" target="_blank"><img alt="噬血的幸福的头像" src="http://tp2.sinaimg.cn/1870027885/50/1290353794/0" /></a></li>
					<li class="txt">
						<p><a href="#" target="_blank">对于国产，特效不错,进步了</a><span><a href="#" target="_blank">噬血</a> <img src="images/1.jpg" /></span></p>
						<p style="padding-top:10px;line-height:22px;">虽然跟美国大片比还有距离,但我主观的客观认为...对于国产电影来说,这个特效还是不错的.相对于那些把资金用在邀请明星的电影来说,电影制作人应该考虑国内的特效制作.特效是未来发展的必然.拿三国来说,我还没看到过让我满意的恢弘场面.特效是节省制作费用的最重要手段...<a href="#" target="_blank">（查看全文）</a> | <a href="#" target="_blank">25人回应</a> | <a href="#" target="_blank">我来回应>></a></p>
					</li>
				</ul>
				<ul>
					<li class="pic"><a href="#" target="_blank"><img alt="瘦瘦瘦得很幸福的头像" src="http://tp2.sinaimg.cn/1703147121/50/1291096091/0" /></a></li>
					<li class="txt">
						<p><a href="#" target="_blank">摸瞎专之电影院的呼噜声</a><span><a href="#" target="_blank">瘦瘦瘦得很</a> <img src="images/1.jpg" /></span></p>
						<p style="padding-top:10px;line-height:22px;">怀着对中国的第一部3D电影的支持看这场戏，虽然知道不会有太多的惊喜，但想不到还是遇到惊喜，在电影院里传来呼噜声。整场电影，效果奇差，剧情牵强。如果只是一部喜剧片还算一般，但说是耗资千万的巨片真是垃圾。戴着黑黑的3D眼睛看着这样的剧情真叫人混混欲睡...<a href="#" target="_blank">（查看全文）</a> | <a href="#" target="_blank">25人回应</a> | <a href="#" target="_blank">我来回应>></a></p>
					</li>
				</ul>
			</div>
			<div class="comment_more"><a href="#" target="_blank">查看《魔侠传之唐吉可德》全部影评>></a><span><a href="#" target="_blank">我也要写影评</a></span></div>
		</div>
	</div>	
	<div class="right">
		<div class="suoyin">
			<div class="suoyin_top"><H3>手机电影索引</H3></div>
			<div class="suoyin_u">
				<ul>
                 <li><strong>按类型</strong><br /><a href="#" target="_blank">动作</a> <a href="#" target="_blank">爱情</a> <a href="#" target="_blank">喜剧</a> <a href="#" target="_blank">恐怖</a> <a href="#" target="_blank">惊悚</a> <a href="#" target="_blank">悬疑</a> <a href="#" target="_blank">犯罪</a> <a href="#" target="_blank">战争</a> <a href="#" target="_blank">科幻</a> <a href="#" target="_blank">灾难</a> <a href="#" target="_blank">剧情</a> <a href="#" target="_blank">伦理</a> <a href="#" target="_blank">动画</a> <a href="#" target="_blank">预告片</a></li>
                 <li><strong>按地区</strong><br /><a href="#" target="_blank">大陆</a> <a href="#" target="_blank">港台</a> <a href="#" target="_blank">日韩</a> <a href="#" target="_blank">欧美</a> <a href="#" target="_blank">其他</a></li>
                 <li style="border-bottom:none;"><strong>按年代</strong><br /><a href="#" target="_blank">2010</a> <a href="#" target="_blank">2009</a> <a href="#" target="_blank">2008</a> <a href="#" target="_blank">2007</a> <a href="#" target="_blank">2006</a></li>
            	</ul>
			</div>	
		</div>
		<div class="paihang">
			<div class="paihang_top"><H3>最新更新手机电影</H3></div>
			<div class="paihang_u">
				<ul>
				<li class="hover"><span>1</span><a href="#" target="_blank">黎明之前</a></li>
				<li class="hover"><span>2</span><a href="#" target="_blank">家有四千金</a></li>
				<li class="hover"><span>3</span><a href="#" target="_blank">女王不下班</a></li>
				<li><span>4</span><a href="#" target="_blank">爱无限</a></li>
				<li><span>5</span><a href="#" target="_blank">铁梨花</a></li>
				<li><span>6</span><a href="#" target="_blank">犀利人妻</a></li>
				<li><span>7</span><a href="#" target="_blank">国色天香</a></li>
				<li><span>8</span><a href="#" target="_blank">锄奸</a></li>
				<li><span>9</span><a href="#" target="_blank">刑警2010</a></li>
				<li><span>10</span><a href="#" target="_blank">钟无艳</a></li>
				</ul>
				<span><a href="#" target="_blank">New50>></a></span>
			</div>
		</div>
		<div class="paihang">
			<div class="paihang_top"><H3>手机电影下载排行</H3></div>
			<div class="paihang_u">
				<ul>
				<li class="hover"><span>1</span><a href="#" target="_blank">黎明之前</a></li>
				<li class="hover"><span>2</span><a href="#" target="_blank">家有四千金</a></li>
				<li class="hover"><span>3</span><a href="#" target="_blank">女王不下班</a></li>
				<li><span>4</span><a href="#" target="_blank">爱无限</a></li>
				<li><span>5</span><a href="#" target="_blank">铁梨花</a></li>
				<li><span>6</span><a href="#" target="_blank">犀利人妻</a></li>
				<li><span>7</span><a href="#" target="_blank">国色天香</a></li>
				<li><span>8</span><a href="#" target="_blank">锄奸</a></li>
				<li><span>9</span><a href="#" target="_blank">刑警2010</a></li>
				<li><span>10</span><a href="#" target="_blank">钟无艳</a></li>
				</ul>
				<span><a href="#" target="_blank">Top50>></a></span>
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