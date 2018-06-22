<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>3GP手机电影,3GP MP4电影下载,免费手机电影下载-3GP.CN/A67.COM</title>
    <meta name="Keywords" content="3GP手机电影,3GP电影下载,MP4电影下载,3GP手机电影免费下" />
    <meta name="Description" content="3GP手机电影网新版上线，从网站功能、界面以及下载流程上进行了全方面的优化，更适合新老3GP.CN用户快捷的免费下载3GP/MP4高清手机电影以及3GP格式转换器。" />
    <link href="css/style.css" type="text/css"  rel="stylesheet"/>
    <link href="css/index.css" type="text/css"  rel="stylesheet"/>
    <script language="javascript" src="js/scrollpic.js"></script>
    <SCRIPT src="js/jquery-1.4.2.min.js" type=text/javascript></SCRIPT>
    <SCRIPT src="js/top.js" type=text/javascript></SCRIPT>
</head>
<body>
<div id="header">
    <div id="menu">
        <div class="top">
            <div class="logn">3GP/MP4手机电影第一门户网！</div>
            <div class="txt">
                <ul>
                    <li><a href="http://www.a67.com/view/" target="_blank">提提建议</a></li>
                    <li><a href="http://www.a67.com/maps.html" target="_blank">网站地图</a></li>
                    <li><a href="javascript:;"  onclick="return addFavor('A67手机电影', 'http://www.a67.com')">加入收藏</a></li>
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
                <li><a href="paihang.html" title="电影排行榜" target="_blank">排行</a></li>
                <li><a href="new.html" title="最新电影" target="_blank">最新</a></li>
                <li><a href="special.html" target="_blank"></a></li>
            </ul>
            <div class="morelink"><a href="http://www.a67.com/3gpcoder/" title="3GP格式转换器" target="_blank">3GP转换器</a> | <a href="http://www.2366.com/" target="_blank">网页游戏</a> | <a href="http://db.2u.com.cn/" target="_blank">游戏下载</a></div>
            <div class="ico_new"></div>
        </div>

    </div>
</div>
<div id="main">
    <div class="first">
        <div class="jd">
            <?php foreach ($film as $v): ?>
                <ul>
                    <a href="<?= Url::to(['filmc/index','id'=>$v['id']])?>"><LI style="float: left; margin: 18px"><img width="150" height="200px" alt="<?= Html::encode($v->title)?>" src="<?= Html::encode($v->img_url)?>" border="0" /></LI></a>
                </ul>
            <?php endforeach;?>
        </div>
        <div class="artist_r"></div>
        <div class="paihang" style="height: 238px">
            <div class="paihang_top" id="tabs1">
                <ul id="menu1">
                    <li onclick="setTab(1,0)" class="hover">日下载榜</li>
                    <li onclick="setTab(1,1)">周下载榜</li>
                    <li onclick="setTab(1,2)">月下载榜</li>
                </ul>
            </div>
            <div id="main1">
                <div class="paihang_u" >
                    <ul class="block">
                        <?php foreach ($film as $v): ?>
                        <li class="hover"><span>1</span><a href="<?= Url::to(['filmc/index','id'=>$v['id']])?>" title="" target="_blank"><?= Html::encode($v->title)?></a></li>
                        <?php endforeach;?>
                    </ul>
                    <ul>
                        <?php foreach ($film as $v): ?>
                            <li class="hover"><span>1</span><a href="<?= Url::to(['filmc/index','id'=>$v['id']])?>" title="" target="_blank"><?= Html::encode($v->title)?></a></li>
                        <?php endforeach;?>
                    </ul>
                    <ul>
                        <?php foreach ($film as $v): ?>
                            <li class="hover"><span>1</span><a href="<?= Url::to(['filmc/index','id'=>$v['id']])?>" title="" target="_blank"><?= Html::encode($v->title)?></a></li>
                        <?php endforeach;?>
                     </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="banner980"><img src="images/ad/hengfu1.gif" width="980" height="60" /></div>
    <div class="module">
        <div class="movie">
            <div class="movie_l">
                <div class="movie_l_top">
                    <h3><img alt="3GP MP4手机电影" src="images/dy_title.gif" /></h3>
                    <div class="movie_l_top_fl">
                        <?php foreach ($type as $v): ?>
                        <a href="#" target="_blank"><?= Html::encode($v->name)?></a> |
                        <?php endforeach;?>
                        <span><a href="#" target="_blank">更多3GP/MP4电影>></a></span>
                    </div>
                </div>
                <div class="movie_l_u" style="height: 279px">
                    <div class="movie_l_t">
                        <div class="movie_l_u_sy">
                            <div class="jiansuo">
                                <span>地区</span>
                                <ul>
                                    <?php foreach ($area as $v): ?>
                                    <li><a href="#" target="_blank"><?= Html::encode($v->area_name)?></a></li>
                                    <?php endforeach;?>
                                    <li><a href="#" target="_blank">其他</a></li>
                                </ul>
                            </div>
                            <div class="jiansuo">
                                <span>年代</span>
                                <ul>
                                    <?php foreach ($year as $v): ?>
                                    <li><a href="#" target="_blank"><?= Html::encode($v->years)?></a></li>
                                    <?php endforeach;?>
                                    <li><a href="#" target="_blank">更早</a></li>
                                </ul>
                            </div>
                            <div class="jiansuo">
                                <span>导演</span>
                                <ul>
                                    <?php foreach ($dir as $v): ?>
                                    <li><a href="#" target="_blank"><?= Html::encode($v->name)?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                            <div class="jiansuo">
                                <span>主演</span>
                                <ul>
                                    <?php foreach ($act as $v): ?>
                                    <li><a href="#" target="_blank"><?= Html::encode($v->actor_name)?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="movie_new">最新更新手机电影<span><a href="#" target="_blank">更多>></a></span></div>
                    <div class="movie_re">
                        <ul>
                            <?php foreach ($film as $v): ?>
                            <li class="c1"><a href="<?= Url::to(['filmc/index','id'=>$v['id']])?>" target="_blank"><img  src="<?= Html::encode($v->img_url)?>" alt="<?= Html::encode($v->title)?>" /></a><p><?= Html::encode($v->lanaguage_type)?></p><b><a href="http://www.a67.com/movie/8021" target="_blank"><?= Html::encode($v->title)?></a><img src="images/1.jpg"><em><?= Html::encode($v->score)?>分</em></b></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="movie_right">
                <div class="movie_r_ph" style="height: 280px">
                    <div class="movie_r_ph_top" id="tabs2">
                        <ul id="menu2">
                            <li onclick="setTab(2,0)" class="hover">电影下载榜</li>
                            <li onclick="setTab(2,1)">电影评分榜 </li>
                        </ul>
                    </div>
                    <div id="main2">
                        <div class="movie_r_ph_u">
                            <ul class="block">
                                <li class="hover"><span>1</span><a href="/movie/6263" title="河东狮吼3GP MP4下载" target="_blank">河东狮吼</a></li>
                                <li class="hover"><span>2</span><a href="/movie/7036" title="金瓶双艳3GP MP4下载" target="_blank">金瓶双艳</a></li>
                                <li class="hover"><span>3</span><a href="/movie/7566" title="在床上3GP MP4下载" target="_blank">在床上</a></li>
                                <li><span>4</span><a href="/movie/8100" title="恭喜发财3GP MP4下载" target="_blank">恭喜发财</a></li>
                               <li class="none"><span>10</span><a href="/movie/7799" title="失踪少女44 3GP MP4下载" target="_blank">失踪少女44</a></li>
                            </ul>
                            <ul>
                                <li class="hover"><span>1</span><a href="/movie/6263" title="河东狮吼3GP MP4下载" target="_blank">河东狮吼</a><em>9.3分</em></li>
                                <li class="hover"><span>2</span><a href="/movie/7036" title="金瓶双艳3GP MP4下载" target="_blank">金瓶双艳</a><em>9.3分</em></li>
                                <li class="hover"><span>3</span><a href="/movie/7566" title="在床上3GP MP4下载" target="_blank">在床上</a><em>9.3分</em></li>
                                <li><span>4</span><a href="/movie/8100" title="恭喜发财3GP MP4下载" target="_blank">恭喜发财</a><em>9.3分</em></li>
                                <li><span>5</span><a href="/movie/8098" title="床上的故事3GP MP4下载" target="_blank">床上的故事</a><em>9.3分</em></li>
                                <li><span>6</span><a href="/movie/8021" title="性与早餐3GP MP4下载" target="_blank">性与早餐</a><em>9.3分</em></li>
                                <li><span>7</span><a href="/movie/8093" title="密室之不可告人3GP MP4下载" target="_blank">密室之不可告人</a><em>9.3分</em></li>
                                <li><span>8</span><a href="/movie/7583" title="女教师日记3GP MP4下载" target="_blank">女教师日记</a><em>9.3分</em></li>
                                <li><span>9</span><a href="/movie/7676" title="子曰：食色性也3GP MP4下载" target="_blank">子曰：食色性也</a><em>9.3分</em></li>
                                <li class="none"><span>10</span><a href="/movie/7799" title="失踪少女44 3GP MP4下载" target="_blank">失踪少女44</a><em>9.3分</em></li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
    <div class="banner980"><img src="images/ad/hengfu2.jpg" width="980" height="60" /></div>
    <div class="module">
        <div class="movie">
            <div class="movie_l">
                <div class="movie_l_top">
                    <h3><img alt="3GP MP4手机电视剧" src="images/dsj_title.gif" /></h3>
                    <div class="movie_l_top_fl">
                        <?php foreach ($type as $v): ?>
                            <a href="#" target="_blank"><?= Html::encode($v->name)?></a> |
                        <?php endforeach;?>
                        <span><a href="#" target="_blank">更多3GP/MP4电视剧>></a></span>
                    </div>
                </div>
                <div class="movie_l_u" style="height: 279px">
                    <div class="movie_l_t">
                        <div class="movie_l_u_sy">
                            <div class="jiansuo">
                                <span>地区</span>
                                <ul>
                                    <?php foreach ($area as $v): ?>
                                        <li><a href="#" target="_blank"><?= Html::encode($v->area_name)?></a></li>
                                    <?php endforeach;?>
                                    <li><a href="#" target="_blank">其他</a></li>
                                </ul>
                            </div>
                            <div class="jiansuo">
                                <span>年代</span>
                                <ul>
                                    <?php foreach ($year as $v): ?>
                                        <li><a href="#" target="_blank"><?= Html::encode($v->years)?></a></li>
                                    <?php endforeach;?>
                                    <li><a href="#" target="_blank">更早</a></li>
                                </ul>
                            </div>
                            <div class="jiansuo">
                                <span>导演</span>
                                <ul>
                                    <?php foreach ($dir as $v): ?>
                                        <li><a href="#" target="_blank"><?= Html::encode($v->name)?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                            <div class="jiansuo">
                                <span>主演</span>
                                <ul>
                                    <?php foreach ($act as $v): ?>
                                        <li><a href="#" target="_blank"><?= Html::encode($v->actor_name)?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="movie_new">最新更新手机电视剧<span><a href="#" target="_blank">更多>></a></span></div>
                    <div class="movie_re">
                        <ul>
                            <?php foreach ($tv as $v): ?>
                            <li class="c1"><a href="<?= Url::to(['tvc/index','id'=>$v['id']])?>" target="_blank"><img  src="<?= Html::encode($v->img_url)?>" alt="<?= Html::encode($v->tv_name)?> 3GP MP4高清下载" /></a><p><?= Html::encode($v->lanaguage_type)?></p><b><a href="http://www.a67.com/movie/8050" target="_blank"><?= Html::encode($v->tv_name)?></a><img src="images/1.jpg"><em><?= Html::encode($v->score)?>分</em></b></li>
                            <?php endforeach;?>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="movie_right">
                <div class="movie_r_ph" style="height: 280px">
                    <div class="movie_r_ph_top" id="tabs3">
                        <ul id="menu3">
                            <li onclick="setTab(3,0)" class="hover">电视下载榜</li>
                            <li onclick="setTab(3,1)">电视评分榜 </li>
                        </ul>
                    </div>
                    <div id="main3">
                        <div class="movie_r_ph_u">
                            <ul class="block">
                                <li class="hover"><span>1</span><a href="/movie/8116" title="死神少女3GP MP4下载" target="_blank">死神少女</a></li>
                                <li class="hover"><span>2</span><a href="/movie/8073" title="行尸走肉 第一季3GP MP4下载" target="_blank">行尸走肉 第一季</a></li>
                                <li class="hover"><span>3</span><a href="/movie/7995" title="新红楼梦3GP MP4下载" target="_blank">新红楼梦</a></li>
                                <li><span>4</span><a href="/movie/8020" title="刑警20103GP MP4下载" target="_blank">刑警2010</a></li>
                                <li><span>5</span><a href="/movie/7446" title="泡沫之夏3GP MP4下载" target="_blank">泡沫之夏</a></li>
                             <li class="none"><span>10</span><a href="/movie/7168" title="新三国3GP MP4下载" target="_blank">新三国</a></li>
                            </ul>
                            <ul>
                                <li class="hover"><span>1</span><a href="/movie/7168" title="新三国3GP MP4下载" target="_blank">新三国</a><em>9.5分</em></li>
                                <li class="hover"><span>2</span><a href="/movie/7995" title="新红楼梦3GP MP4下载" target="_blank">新红楼梦</a><em>9.3分</em></li>
                                <li class="hover"><span>3</span><a href="/movie/7086" title="一起又看流星雨3GP MP4下载" target="_blank">一起又看流星雨</a><em>9.0分</em></li>
                                <li><span>4</span><a href="/movie/7446" title="泡沫之夏3GP MP4下载" target="_blank">泡沫之夏</a><em>8.6分</em></li>
                                <li><span>5</span><a href="/movie/8094" title="武林外传3GP MP4下载" target="_blank">武林外传</a><em>8.3分</em></li>
                                <li><span>6</span><a href="/movie/8020" title="刑警20103GP MP4下载" target="_blank">刑警2010</a><em>8.1分</em></li>
                                <li><span>7</span><a href="/movie/8094" title="天涯织女3GP MP4下载" target="_blank">天涯织女</a><em>7.8分</em></li>
                                <li><span>8</span><a href="/movie/7086" title="公主嫁到3GP MP4下载" target="_blank">公主嫁到</a><em>7.5分</em></li>
                                <li><span>9</span><a href="/movie/7583" title="铁梨花3GP MP4下载" target="_blank">铁梨花</a><em>7.3分</em></li>
                                <li class="none"><span>10</span><a href="/movie/5335" title="家有四千金3GP MP4下载" target="_blank">家有四千金</a><em>7.2分</em></li>
                            </ul>
                        </div>
                    </div>
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
    <div class="bottom_link">
        <div class="bottom_link_l"><span>友情链接</span>
            <p><a href="#" target="_blank">百度视频</a><a href="#" target="_blank">酷6网</a><a href="#" target="_blank">新浪视频</a><a href="#" target="_blank">搜狐视频</a><a href="#" target="_blank">土豆网</a><a href="#" target="_blank">豆瓣电影</a><a href="#" target="_blank">优酷</a><a href="#" target="_blank">PPTV</a><a href="#" target="_blank">迅雷看看</a><a href="#" target="_blank">QQLIVE</a><a href="#" target="_blank">暴风音影</a><a href="#" target="_blank">网页游戏</a><a href="#" target="_blank">兔友网</a><a href="#" target="_blank">去看书</a><a href="#" target="_blank">小游戏</a><a href="#" target="_blank">中关村下载</a><a href="#" target="_blank">手机中国</a><a href="#" target="_blank">电影天堂</a><a href="http://www.qqshuku.com/" target="_blank">千千书库</a><a href="http://www.a67.com/ebook/" target="_blank">手机小说</a><a href="http://game.3533.com/game/" target="_blank">手机游戏</a><a href="http://www.youba.cn/" target="_blank">手机游戏网</a><a href="http://www.izhuti.com" target="_blank">手机主题</a><a href="http://www.ruan8.com" target="_blank">手机软件</a><a href="http://soft.155.cn/" target="_blank">155手机软件</a><a href="http://namofo.com" target="_blank">手机铃声</a><a href="http://www.3g37.com/" target="_blank">手机主题</a><a href="http://taobao.3gp.cn/" target="_blank">淘宝网女装冬装新款</a><a href="http://www.docin.net/" target="_blank">小说下载</a></p>
        </div>
        <div class="bottom_link_r">
            <span>合作伙伴</span>
            <p><a href="#" target="_blank">狗狗手机视频</a><a href="#" target="_blank">91助手</a><a href="#" target="_blank">豌豆荚</a><a href="#" target="_blank">去看书</a><br /><a href="#" target="_blank">hao123</a><a href="#" target="_blank">1616</a><a href="#" target="_blank">155</a></p>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright © 2010 <a href="http://www.a67.com/">A67.COM</a> <a href="http://www.a67.com/">遛机网</a> All Rights Reserved  鲁ICP备05010054号</p>
        <p>本站所有手机资源均为会员制作上传，本站仅提供存储空间，如侵犯到您的权益，请及时联系本站删除，本站不负任何法律责任！</p>
    </div>
</div>

</body>
</html>