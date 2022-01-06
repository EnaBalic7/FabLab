<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="FabLab - Sarajevo">
    <title>FabLab Sarajevo - Home To Fabulous FabLab in Sarajevo</title>
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" type="image/png" href="../../slike/fav.png">

    <link rel="stylesheet" href="../../styles/icons.css">
    <link rel="stylesheet" href="../../styles/w3.css">
    <link rel="stylesheet" href="../../styles/drugi.css">
    <link rel="stylesheet" href="../../styles/fotorama.css">
    <link rel="stylesheet" href="../../styles/lander.css">
    <link rel="stylesheet" href="../../styles/poppins.css">
    <link rel="stylesheet" href="../../styles/table.css">

    <script src="../../js/script.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/fotorama.js"></script>
    <script src="../../js/fotoramaMin.js"></script>
    <script src="../../js/icons.js"></script>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169288348-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-169288348-1');
    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->


    <!-- Hotjar Tracking Code for www.fablab.ba -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1812854,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <!-- End Hotjar Tracking Code for www.fablab.ba -->


    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1158314620935416');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1158314620935416&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<!-- navigation -->
<div class="navbar navbarAbout navPosition">
    <div class="nav-head">
        <img class="homeeA navLogo" src="../../slike/logo.png">
        <div id="hamburger" onclick="toggleNav()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="nav-content" id="nav-content">
        <a href="?page=pages/bhs/index" class="home">Početna</a>
        <a href="?page=pages/bhs/onama#association">O nama</a>
        <a href="?page=pages/bhs/onama#mission">Misija i vizija</a>
        <a href="?page=pages/bhs/prviFab">Prvi Fab u BiH </a>
        <a href="?page=pages/bhs/fabPovelja">Fab-ova Povelja</a>
        <!-- <a href="?page=pages/en/declarations">Declarations</a> -->
        <span class="lanFlags">
            <a href="changelang.php?lang=bhs" class="noHover">
                <img src="/slike/bosnia-and-herzegovina.png" width="20px" alt="">
            </a>
            <a href="changelang.php?lang=en" class="noHover">
                <img src="/slike/united-states.png" width="20px" alt="">
            </a>
        </span>
    </div>
</div>
<!-- end of nav -->
<span class="lanFlagsDesk">
        <a href="changelang.php?lang=bhs" class="noHover">
            <span <?php if ($language==='bhs' ){?>style="color:#2B2B2B;"
                <?php } ?>>BHS
            </span>
        </a>
        <span style="color:#2B2B2B;">|</span>
        <a href="changelang.php?lang=en" class="noHover">
            <span <?php if ($language!=='en' ){?>style="color:#4D4D4D;opacity:0.5;"
                <?php } ?>>EN
            </span>
	   </a>
    </span>