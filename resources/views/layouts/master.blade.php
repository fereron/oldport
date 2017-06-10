<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</head>
<body>

<header>
    <div class="header_wrapper">


        <div class="logo">

            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Логотип">
            </a>
            <div class="your-loader" style="float: right; width: 20px; height: 20px; margin-top: 8px; margin-left: 10px; color: #2a88bd"></div>
            <div class="hoja"></div>
        </div>

        <ul class="social">
            <li class="social-items">
                <a href="vk.com">
                    <i class="fa fa-vk fa-inverse"></i>
                </a>
            </li>
            <li class="social-items">
                <a href="vk.com">
                    <i class="fa fa-twitter fa-inverse"></i>
                </a>
            </li>
            <li class="social-items">
                <a href="vk.com">
                    <i class="fa fa-facebook-f fa-inverse"></i>
                </a>
            </li>
            <li class="social-items">
                <a href="vk.com">
                    <i class="fa fa-github fa-inverse"></i>
                </a>
            </li>
        </ul>

    </div>
</header>

<section class="main">
    <div class="container">

        <aside class="sidebar">
            <nav class="navigation">
                <ul class="navigation_list">
                    <li {{ (\Request::url() == route('home')) ? 'class=current_item' : 'class=item' }} style="margin-top: -2px">
                        <a href="{{ route('home') }}" class="navigation_link">Обо мне</a>
                    </li>
                    <li {{ (\Request::url() == route('works')) ? 'class=current_item' : 'class=item' }}>
                        <a href="{{ route('works') }}" class="navigation_link">Мои работы</a></li>
                    <li class="item">
                        <a href="contact" class="navigation_link">Связаться со мной</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

    </div>
</section>
<footer>
    <div class="footer-wrapper">
        <div class="admin">
            {{--            <a href="{{ route('login') }}">--}}
            {{--<a href="{{ route('login') }}">--}}
            <label for="modal-login-toggle" class="modal_login"><i class="fa fa-user fa-2x"
                                                                   aria-hidden="true"></i></label>

            {{--</a>--}}
        </div>
        <div class="footer-text">© 2015. Это мой сайт, пожалуйста, не копируйте и не воруйте его</div>
    </div>
</footer>

<div class="modal-login-container">
    <input id="modal-login-toggle" type="checkbox">
    <label class="modal-backdrop" for="modal-login-toggle"></label>

    <div class="modal-content">
        <label class="modal-close-btn" for="modal-login-toggle">
            <svg width="50" height="50">
                <line x1="10" y1="10" x2="40" y2="40"/>
                <line x1="40" y1="10" x2="10" y2="40"/>
            </svg>
        </label>
        <div class="tabs">
            <!--  LOG IN  -->
            <input class="radio" id="tab-1" name="tabs-name" type="radio" checked>
            <label for="tab-1" class="table"><span>Login</span></label>
            <div class="tabs-content">
                {{--<div class="login_socnet">--}}
                {{--<a href="" class="fa fa-vk" aria-hidden="true"></a>--}}
                {{--<a href="" class="fa fa-google-plus" aria-hidden="true"></a>--}}
                {{--<a href="" class="fa fa-facebook" aria-hidden="true"></a>--}}
                {{--</div>--}}
                <form action="" autocomplete="off">
                    {{--<input type="email" placeholder="Email" required>--}}
                    <div class="wrapper">
                        <div class="material-textfield blue">
                            <input type="text" required />
                            <label data-content="email">email</label>
                        </div>
                        <div class="material-textfield red">
                            <input type="password" required/>
                            <label data-content="password">password</label>
                        </div>
                    </div>
                    <input type="submit" value="Log In">
                </form>
                <form class="forgot-password" action="">
                    <input id="forgot-password-toggle" type="checkbox">
                    <label for="forgot-password-toggle">forgot password?</label>
                    <div class="forgot-password-content">
                        <input type="email" placeholder="enter your email" required>
                        <input type="submit" value="go">
                    </div>
                </form>
            </div>
            <!--  SIGN UP  -->
            <input class="radio" id="tab-2" name="tabs-name" type="radio">
            <label for="tab-2" class="table"><span>Sign up</span></label>
            <div class="tabs-content">
                {{--<div class="login_socnet">--}}
                {{--<a href="" class="fa fa-vk" aria-hidden="true"></a>--}}
                {{--<a href="" class="fa fa-google-plus" aria-hidden="true"></a>--}}
                {{--<a href="" class="fa fa-facebook" aria-hidden="true"></a>--}}
                {{--</div>--}}
                <form action="">
                    <div class="wrapper">
                        <div class="material-textfield blue">
                            <input type="text" required/>
                            <label data-content="email">email</label>
                        </div>

                        <div class="material-textfield red">
                            <input type="password" required/>
                            <label data-content="password">password</label>
                        </div>

                        <div class="material-textfield red">
                            <input type="password" required/>
                            <label data-content="Confirm password">Confirm password</label>
                        </div>
                    </div>
                    {{--<input type="email" placeholder="Email" required autofocus>--}}
                    {{--<input type="password" placeholder="Password" required>--}}
                    {{--<input type="password" placeholder="Confirm password" required>--}}
                    <input type="submit" value="Sign Up">
                </form>
            </div>
        </div>
    </div>
</div>

{{--<canvas id="myCanvas" width="600" height="300" style="z-index: -100000; float: left"></canvas>--}}


<script src="{{ asset('js/matrix.js') }}"></script>

</body>
</html>