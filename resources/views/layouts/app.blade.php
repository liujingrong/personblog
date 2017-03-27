<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="utf-8" />
    <title>尚于中行的博客</title>
    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/main.css' ) }}">
    
</head>
<body style="">
    <a name="top" id="top"></a>
    <div class="frame">
        <div class="left">
            <div class="banner">
                <div class="banner-inner">
                    <div class="mylogo">
                        <a href="https://baidu.com">
                        <img src="images/logo.gif" height="36" width="88" alt="">
                        </a>
                    </div>
                    <div class="menu-bar">
                        <ul>
                        <li><a href="#">主页</a></li>
                        <li><a href="#">类别</a></li>
                        <li><a href="#">文章</a></li>
                        <li><a href="#">关于我</a></li>
                        </ul>
                    </div>
                    <div class="site-search">
                        <form class="site-search-form">
                            <input type="text" id="site-search-input" class="site-search-input site-default-search-input">
                        </form>
                    </div>
                </div>
            </div>
            <div class="main-body">
            @yield('content')
               
            </div>
            <div class="sidebar" id="sidebar-to" style="display:none">
                <div class="siderbar-inner">
                    <div class="site-overflow">
                        <div class="site-author">
                            <img  class="site-author-image" src="images/dd.jpg" height="1391" width="1044" alt="" >
                        </div>
                        <div class="site-author-name">
                            岳池
                        </div>
                        <div class="site-descripte">
                            任何的限制，都是从自己的内心开始的
                        </div>
                        <nav class="site-state">
                            <a href="#">
                            <div class="site-state-item">
                                <p>102</p>
                                <p>文章</p>
                            </div>
                            </a>
                            <a href="#">
                            <div class="site-state-item">
                                <p>9</p>
                                <p>类别</p>
                            </div>
                            </a>
                            <a href="#">
                            <div class="site-state-item">
                                <p>9</p>
                                <p>类别</p>
                            </div>
                            </a>
                                
                        </nav>
                        <nav class="link-of-author">
                            <ul>
                                <li>
                                    <a href="#">GitHub</a>
                                </li>
                                <li>
                                    <a href="#">StackOverflow</a>
                                </li>
                                <li>
                                    <a href="#">Weibo</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="message-board">
                            <a href="#">
                                <span>留言板/Message-Board</span>
                            </a>
                        </div>
                    </div>
                </div>
                 
            </div>
            <div class="sidebar-toggle-line-wrap" id="sidebar-toggle">
                <span class="sidebar-toggle-line " id="sidebar-toggle-line-first"style="width: 100%; top: 0px; transform: rotateZ(0deg); opacity: 1; left: 0px;"></span>
                <span class="sidebar-toggle-line " id="sidebar-toggle-line-middle" style="width: 100%; top: 0px; transform: rotateZ(0deg); opacity: 1; left: 0px;"></span>
                <span class="sidebar-toggle-line " id="sidebar-toggle-line-third" style="width: 100%; top: 0px; transform: rotateZ(0deg); opacity: 1; left: 0px;"></span>
            </div>
            <div class="back-to-top" id="to-top" >
            
            </div>
            <footer id="footer" class="footer" style="background: rgb(245, 245, 245);">
                <div class="footer-inner"> 
                    <div class="copyright" style="text-align: center">
                        © &nbsp;  2016 - 2017
                        <span class="with-love">
                            <i class="icon-next-heart"></i>
                        </span>
                    </div>
                    <div class="theme-info" style="text-align: center">
                        Theme by 
                        <a class="theme-link" href="#" style="color: rgb(34, 34, 34);">yue</a>
                        .
                        <a class="theme-link" href="#" style="color: rgb(34, 34, 34);">chi</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
</body>
<script type="text/javascript">
</script>
<script type="text/javascript" src="{{ asset( 'js/main.js')}}"></script>
</html>
