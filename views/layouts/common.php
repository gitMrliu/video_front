<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div id="header">
    <div id="menu">
        <div class="top">
            <div class="logn">3GP/MP4手机电影第一门户网！<a href="#" target="_blank">请登录</a><a href="#" target="_blank">注册会员</a></div>
            <div class="txt">
                <ul>
                    <li><a href="http://www.a67.com/view/" target="_blank">提提建议</a></li>
                    <li><a href="http://www.a67.com/maps.html" target="_blank">网站地图</a></li>
                    <li><a href="javascript:;"  onclick="return addFavor('A67手机电影', 'http://www.a67.com/movie/')">加入收藏</a></li>
                    <li><a href="javascript:;"  onclick="return setHome(this, 'http://www.a67.com');">设为首页</a></li>>
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
            </ul>
            <div class="morelink"><a href="http://www.a67.com/3gpcoder/" title="3GP格式转换器" target="_blank">3GP转换器</a> | <a href="http://www.2366.com/" target="_blank">网页游戏</a> | <a href="http://db.2u.com.cn/" target="_blank">游戏下载</a></div>
            <div class="ico_new"></div>
        </div>
    </div>
</div>
<div id="main">
    <div class="banner980"><img src="images/banner980.jpg" width="980" height="60" /></div>
    <div class="left">
        <div class="crtegories">
            <div class="crtegories_top"></div>
            <div class="crtegories_u">
                <ul>
                    <li><a href="#" class="on">手机电影</a></li>
                    <li><a href="#" target="_blank">手机电视</a></li>
                    <li><a href="#" target="_blank">手机小说</a></li>
                </ul>
            </div>
        </div>
        <div class="paihang">
            <div class="paihang_top">手机电影下载排行</div>
            <div class="paihang_u">
                <ul>
                    <li class="hover"><span>1</span><a href="/movie/7036" title="金瓶双艳3GP MP4下载" target="_blank">金瓶双艳</a></li>
                    <li><span>4</span><a href="/movie/7634" title="世界大战3GP MP4下载" target="_blank">世界大战</a></li>
                    <li class="none"><a href="#" target="_blank">Top50>></a></li>
                </ul>

            </div>
        </div>
        <div class="paihang">
            <div class="paihang_top">手机电影评分最高</div>
            <div class="paihang_u">
                <ul>
                    <li class="hover"><span>1</span><a href="/movie/7036" title="金瓶双艳3GP MP4下载" target="_blank">金瓶双艳</a></li>
                    <li><span>10</span><a href="/movie/5335" title="海云台3GP MP4下载" target="_blank">海云台</a></li>
                    <li class="none"><a href="#" target="_blank">Top50>></a></li>
                </ul>
            </div>
        </div>
    </div>
<?= $content; ?>

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