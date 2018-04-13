@extends('layouts.app')
@section('title','联系我们')

@section('content')
    <div class="page-banner">
        <img src="images/contact-banner.jpg">
    </div>
    <div class="page-current">
        <p class="container">
            您当前的位置：<a href="index.html">首页</a> > 联系我们
        </p>
    </div>
    <div class="container page-info">
        <h2>联系方式</h2>
        <p align="center">
            经过10余年的快速发展，珍岛深刻理解未来数字营销内容与技术的融合之势，积极引进优秀的互联网技术、营销策略及内容创意专家，先后从IBM、微软、华为等知名IT企业引进大量优秀人才，目前公司逾千人规模，上海作为总部，同步辐射北京、深圳、香港、江浙、内蒙等全国分/子公司，目前已服务企业数量达上万家。
        </p>
    </div>

    <div class="container list-contact">
        <ul>
            <li class="col-xs-4">
                <p class="title">上海珍岛机械设备有限公司</p>
                <p class="qq">
                    <a href=""><img src="images/qq.png"></a>
                    <a href=""><img src="images/qq.png"></a>
                    <a href=""><img src="images/qq.png"></a>
                </p>
            </li>
            <li class="col-xs-4">
                <p>地址：上海市虹口区水电路682号 天虹商务大厦6F、7F、16F、17F </p>
                <p>邮编：200000</p>
            </li>
            <li class="col-xs-4">
                <p>电话：<a href="tel:021-3126524">021-31265245</a></p>
                <p>邮箱：<a href="mailto:Eason.wang@71360.com">Eason.wang@71360.com</a></p>
            </li>
        </ul>
    </div>

    <div class="list-cmessage">
        <div class="container">
            <ul>
                <li>
                    <p class="col-xs-4"><input type="" name="" id="" value="" placeholder="姓名"/><em>*</em></p>
                    <p class="col-xs-4"><input type="" name="" id="" value="" placeholder="联系电话"/><em>*</em></p>
                    <p class="col-xs-4"><input type="" name="" id="" value="" placeholder="电子邮件"/><em>*</em></p>
                </li>
                <li>
                    <p class="col-xs-12">
                        <textarea name="" rows="" cols="" placeholder="请留下您的留言内容"></textarea>
                    </p>
                </li>
                <li>
                    <p class="col-xs-4"><input type="" name="" id="" value="" placeholder="验证码"/></p>
                    <p class="col-xs-4"><img src="images/code-2.jpg"></p>
                </li>
                <li>
                    <p class="col-xs-12"><input type="button" id="" value="立即提交" /></p>
                </li>
            </ul>
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
