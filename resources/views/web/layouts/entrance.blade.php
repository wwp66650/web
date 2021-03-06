<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>
        
        @yield('title')-朋友惠

    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="/assets/css/amazeui.css"/>
    <link href="/css/web/common.css" rel="stylesheet" type="text/css">
    <link href="/css/web/user/dlstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/web/lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css">

    @section('css')
    @show


</head>

<body>

<div class="login-boxtitle">
    <a href="/"><img alt="logo"  src="/images/web/newLOGO.png"/></a>
    <span>{{$msg}}</span>
</div>

<div class="login-banner">
    <div class="login-main">
        <div class="login-banner-bg">
            <span></span>
        </div>
        <div class="login-box">
            <h3 class="title">
                <a href="{{url('login')}}"><span class="@if($active=='login') avtive @endif">欢迎登录</span></a>&nbsp;&nbsp; &nbsp;
                {{--<table class="line"><tr><td valign="top"></td></tr></table>--}}
                &nbsp; &nbsp;
                {{--<a href="{{url('register')}}"> <span class="@if($active=='register') avtive @endif">免费注册</span></a>--}}
            </h3>
            <div class="clear"></div>

            @section('content')
            @show

        </div>
    </div>
</div>



<div class="footer">
    <!--公共底部 start-->
    <div class="footer-in"></div>
    <div class="footer-bd center-block">
        <p class="mod_copyright_links">
            <em>&copy;2017 四川推客互动有限责任公司 蜀ICP备170234号-1 www.tuike198.com</em>
        </p>
    </div>
    <!--公共底部 end-->
</div>
</body>
<script src="/js/jquery.2.1.4.js"></script>
<script src="/js/layer/layer.js"></script>
{{--<script src="/js/web/common.js"></script>--}}
@section('js')
@show

</html>