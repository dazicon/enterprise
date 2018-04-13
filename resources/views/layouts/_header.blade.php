<!--header-->
<header class="header container">
    <p class="logo">
        <a href="index.html"><img src="images/logo.png" alt="珍岛集团"></a>
    </p>
    <span class="tigs"><a href="" class="active">CN</a><a href="">EN</a></span>
    <p class="pull-right">
        <a href="javascript:;" id="search-btn"><img src="images/pro-icon.png"></a>
    </p>
    <div class="search" id="search">
        <div class="search-main" id="search-main">
            <img src="images/icon-closed.png" alt="" id="search-closed"/>
            <div class="search-container">
                <div class="search-controller">
                    <input type="search" class="form-control" name="" id="search-text" placeholder="请输入关键字"  value="请输入关键字"/>
                    <input type="button" id="" value=""  class="btn" />
                </div>
            </div>
        </div>
    </div>
    <nav class="nav">
        <ul>
            <li><a href="{{ route('index') }}">首页</a></li>
            <li><a href="{{ route('about') }}">关于我们</a>
                <ul class="subnav">
                    <li><a href="about.html">公司介绍</a></li>
                    <li><a href="qywh.html">企业文化</a></li>
                    <li><a href="honor.html">荣誉资质</a></li>
                </ul>
            </li>
            <li><a href="{{ route('news') }}">新闻资讯 </a>
                <ul class="subnav">
                    <li><a href="news.html">公司新闻</a></li>
                    <li><a href="news.html">行业资讯</a></li>
                </ul>
            </li>
            <li><a href="{{ route('product') }}">产品中心</a>
                <ul class="subnav subnav-two">
                    <li><a href="">电力设备</a></li>
                    <li><a href="">轨道交通车辆用机电产品</a></li>
                    <li><a href="">社会-公共系统</a></li>
                    <li><a href="">电梯/自动扶</a></li>
                    <li><a href="">工业自动化</a></li>
                    <li><a href="">空调冷热系统</a></li>
                    <li><a href="">家电 </a></li>
                    <li><a href="">影像设备 </a></li>
                    <li><a href="">半导体-器件 </a></li>
                </ul>
            </li>
            <li><a href="{{ route('solution') }}">解决方案</a>
                <ul class="subnav">
                    <li><a href="">电力设备</a><li>
                    <li><a href="">社会-公共系统</a><li>
                </ul>
            </li>
            <li><a href="{{ route('contact') }}">联系我们</a></li>
        </ul>
    </nav>
    <a href="#mmenu" class="iconfont phone-nav">&#xe626;</a>

</header>