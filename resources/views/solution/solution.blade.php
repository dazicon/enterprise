@extends('layouts.app')
@section('title','解决方案')

@section('content')
    <div class="page-banner">
        <img src="images/jjfa-banner.jpg">
    </div>

    <div class="page-current">
        <p class="container">
            您当前的位置：<a href="index.html">首页</a> ><a href="solution.html">解决方案</a> > 电力设备
        </p>
    </div>

    <div class="container page-info">
        <h2>解决方案</h2>
        <p align="center">
            经过10余年的快速发展，珍岛深刻理解未来数字营销内容与技术的融合之势，积极引进优秀的互联网技术、营销策略及内容创意专家，先后从IBM、微软、华为等知名IT企业引进大量优秀人才，目前公司逾千人规模，上海作为总部，同步辐射北京、深圳、香港、江浙、内蒙等全国分/子公司，目前已服务企业数量达上万家。
        </p>
    </div>

    <div class="container">
        <p class="list-pro-subnav">
            <a href="" class="cur">电力设备</a>
            <a href="">社会-公共系统</a>
        </p>
    </div>

    <div class="list-news list-solution" style="background-color: #fff; padding-top: 0;">
        <div class="container">
            <dl>
                <dd>
                    <h3><a href="{{ route('solution-show') }}" target="_blank">全景私享会 Bred :数字时代的创意延伸</a></h3>
                    <time>2017-01-20</time>
                    <p>
                        1月5日下午，由中国最大的图片分享网站——全景举办的“发现新视觉”私享会在杭州顺利举办，来自广告、传媒及数字营销行业的多位大咖齐聚共享，互通创意理念。珍岛集团副总裁王博(Bred)受邀与会，并结合珍岛集团的数字创意案例向在座嘉宾分享了“数字时代的创意延伸”。
                    </p>
                    <a href="{{ route('solution-show') }}" class="more" target="_blank">查看详细</a>
                </dd>
                <dt><a href="{{ route('solution-show') }}" target="_blank"><img src="images/news-img.jpg" class="vcenter"></a></dt>
            </dl>

            <dl>
                <dd>
                    <h3><a href="" target="_blank">珍岛受邀参加上海市优秀院士专家工作站荣誉颁奖庆典</a></h3>
                    <time>2017-01-20</time>
                    <p>
                        1月5日下午，由中国最大的图片分享网站——全景举办的“发现新视觉”私享会在杭州顺利举办，来自广告、传媒及数字营销行业的多位大咖齐聚共享，互通创意理念。珍岛集团副总裁王博(Bred)受邀与会，并结合珍岛集团的数字创意案例向在座嘉宾分享了“数字时代的创意延伸”。
                    </p>
                    <a href="" class="more" target="_blank">查看详细</a>
                </dd>
                <dt><a href="" target="_blank"><img src="images/news-img2.jpg" class="vcenter"></a></dt>
            </dl>

            <dl>
                <dd>
                    <h3><a href="" target="_blank">珍岛集团创始人·总裁赵旭隆受邀参加虹口区院士专家工作站座谈会并发表演讲</a></h3>
                    <time>2017-01-20</time>
                    <p>
                        1月5日下午，由中国最大的图片分享网站——全景举办的“发现新视觉”私享会在杭州顺利举办，来自广告、传媒及数字营销行业的多位大咖齐聚共享，互通创意理念。珍岛集团副总裁王博(Bred)受邀与会，并结合珍岛集团的数字创意案例向在座嘉宾分享了“数字时代的创意延伸”。
                    </p>
                    <a href="" class="more" target="_blank">查看详细</a>
                </dd>
                <dt><a href="" target="_blank"><img src="images/news-img3.jpg" class="vcenter"></a></dt>
            </dl>

            <dl>
                <dd>
                    <h3><a href="" target="_blank">全景私享会 Bred :数字时代的创意延伸</a></h3>
                    <time>2017-01-20</time>
                    <p>
                        1月5日下午，由中国最大的图片分享网站——全景举办的“发现新视觉”私享会在杭州顺利举办，来自广告、传媒及数字营销行业的多位大咖齐聚共享，互通创意理念。珍岛集团副总裁王博(Bred)受邀与会，并结合珍岛集团的数字创意案例向在座嘉宾分享了“数字时代的创意延伸”。
                    </p>
                    <a href="" class="more" target="_blank">查看详细</a>
                </dd>
                <dt><a href="" target="_blank"><img src="images/news-img4.jpg" class="vcenter"></a></dt>
            </dl>

            <menu class="asider-page">
                <div class="num-container">
                    <a href=""class="num">首页</a>
                    <a href="">上一页</a>
                    <a href="" class="num active">1</a>
                    <a href="" class="num">2</a>
                    <a href="" class="num">3</a>
                    <a href="" class="num">4</a>
                    <a href="" class="num">5</a>
                    <a href="" >下一页</a>
                    <a href=""class="num">尾页</a>
                </div>
            </menu>

        </div>
    </div>
    <div class="list-related-news clearfix">
        <div class="container">
            <div class="title">
                <p>相关新闻</p>
                <span>Related News</span>
            </div>
            <ul>
                <li>
                    <span>[2017-01-17]</span><a href="">T-Site 5.0 网站内容管理系统始终秉承"精益求精、安全易用"的产品研发理念</a>
                </li>
                <li>
                    <span>[2017-01-17]</span><a href="">可视化模版编辑等众多卓越功能体现了产品区别于其它系统的技术优势将产品与其它厂</a>
                </li>
                <li>
                    <span>[2017-01-17]</span><a href="">访问限制等多项强大功能；同时系统具有灵活的产品架构严密的安全性</a>
                </li>
                <li>
                    <span>[2017-01-17]</span><a href="">适合于各行各类的网站应用平台，是您身边必不可少的企业级智能建站系统</a>
                </li>
                <li>
                    <span>[2017-01-17]</span><a href="">商提供的CMS系统拉开差距同时产品采用HTML5架构注重用户体验，有助于提高工作人员的使用效率</a>
                </li>
            </ul>
        </div>
    </div>
@stop