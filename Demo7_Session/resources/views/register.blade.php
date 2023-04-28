<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>AKS Machine Test</title>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <!--[if lt IE 9]>
<script type="text/javascript" src="html5.js"></script>
<![endif]-->
    <!--[if lt IE 7.]>
<script defer type="text/javascript" src="pngfix1.js"></script>
<![endif]-->

    <!-- Menu start --------------->
    <link href="{{ url('assets/menu/quickmenu0.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ url('assets/menu/quickmenu0.js') }}"></script>
    <!-- Menu End --------------->
</head>

<body>
    <header>
        <div id="wrap">
            <div class="logo"><img src="{{ url('assets/images/logo.png') }}" border="0"></div>

            <div class="admintxt">Admin panel</div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </header>
    <div class="clear"></div>
    <div class="bodycont">
        <div id="wrap2" style="min-height:530px;">
            <form action="{{route('name_register')}}" method="post">
                <div class="login-cont">
                    <h1 class="loginhd">Register Here</h1>
                    <div class="login-row">
                      @csrf
                        <div class="loginname">Username</div>
                        <div class="admintxtfld-box">
                            <input type="text" name="username">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="login-row">
                        <div class="loginname">Email</div>
                        <div class="admintxtfld-box">
                            <input type="text" name="email">
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!--       <div class="loginreq-field">* This Field Required </div> -->

                    <div class="login-row">
                        <div class="loginname">Password</div>
                        <div class="admintxtfld-box">
                            <input type="password" name="password">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                    <div class="contact-row" style="width:325px;">
                        <div style="background:none; border:none; margin-top:15px;">
                            <a href="admin.html" style="text-decoration:none;">
                                <input type="submit" name="submit" class="btn" value="Login">
                            </a><br>
                        </div>
                    </div>
                    <a href="{{route('name_login')}}">Login</a>
                    <div class="clear"></div>
                </div>
            </form>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <footer>
        <footer class="whitefoter">
            <div class="whitefooter-cont">
                <div style="float:left;">Copyright © AKS Machine Test. All Rights Reserved.</div>
                <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;">
                    <img src="images/akslogo.png" alt="AKS Websoft Consulting Pvt. Ltd."
                        title="AKS Websoft Consulting Pvt. Ltd."></a>

                <div class="clear"></div>
            </div>
        </footer>
    </footer>
</body>

</html>
