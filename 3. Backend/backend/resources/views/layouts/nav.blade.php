<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/nav_tamplate.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    @yield('css')
</head>

<body>
    <div id="logo"><img src="/img/logo/xpark_logo.png" alt=""></div>
    <div class="wrapper"></div>
    <div id="nav">
        <i class="bars fas fa-bars"></i>
        <ul class="phoneVersion">
            <li>
                <a href="/whats_on">
                    <img class="bubble" src="svg/bubble.gif" alt="">最新消息
                </a>
            </li>
            <li><a href="/tour_0"><img class="bubble" src="svg/bubble.gif" alt="">館內介紹</a></li>
            <li><a href="/life"><img class="bubble" src="svg/bubble.gif" alt="">動物介紹</a></li>
            <li><a href="#"><img class="bubble" src="svg/bubble.gif" alt="">購買票券 </a></li>
            <li><a href="/shopCart"><img class="bubble" src="svg/bubble.gif" alt="">紀念品店</a></li>
            <li><a href="/FAQ"><img class="bubble" src="svg/bubble.gif" alt="">常見問題</a></li>
            <li><a href="#">CH/</a><a href="">EN</a></li>
            <li>
                <a href="https://www.facebook.com/Xparkaquarium/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/xpark_aquarium/"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
    </div>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // phone version navbar
        var bars = document.querySelector(".bars")
        var menu = document.querySelector(".phoneVersion")

        bars.onclick = function () {
            console.log(123)
            bars.classList.toggle("fa-times")
            menu.classList.toggle("active")
        }

        $('.phoneVersion li').mouseleave(function () {
            var url = $(this).children("a").children('.bubble').attr("src");
            // url = url.substring(url.indexOf('url("') + 5, url.indexOf('")'));
            url = url.replace(/\?.*$/, "") + "?x=" + Math.random();
            $(this).children("a").children('.bubble').attr("src", url);
            console.log(url);
        })

    </script>


    @yield('js')

</body>

</html>
