<?php require_once 'includes/header.php'; ?>
<?php require_once ''; ?>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- //Add your site or application content here -->
    <header>
        <div class="navbar-fixed">
            <nav class="z-depth-0 primary-dark">
                <div class="nav-wrapper container">
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
                <div id="nav-underline" class="full-width primary-dark" style="height: 0.25vh;">&nbsp;</div>
            </nav>
            <!-- //SideNav -->
            <ul id="slide-out" class="sidenav sidenav-fixed white">
                <li>
                    <div class="user-view center-align">
                        <div id="slide-out-top" class="background primary-light">

                        </div>
                        <a href="#user">
							<a href="index.html" class="brand-logo"><img src="assets/images/logo.png" alt=""></a>
                        </a>
                        <span class="white-text name">HUGO M.</span>
                    </div>
                </li>
                <li><a href="uix.html" class="link black-text waves-effect waves-light">UIX</a></li>
                <li><a href="#" class="link black-text waves-effect waves-light">Process</a></li>
                <li><a href="#" class="link black-text waves-effect waves-light">Blog</a></li>
                <li><a href="#" class="link black-text waves-effect waves-light">Discography</a></li>
                <li><a href="#" class="link black-text waves-effect waves-light">Art</a></li>
                <li><a href="#" class="link black-text waves-effect waves-light">Games</a></li>
                <li><a href="#" class="link black-text waves-effect waves-light">Resume</a></li>
                <li><a href="#" class="link black-text waves-effect waves-light">Contact</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="primary-dark" style="height: 40vh;"></div>
        <div id="slogan" class="row">
            <div class="col s12 center-align">
                <img src="images/slogan.png" alt="" />
            </div>
        </div>
    </main>


    <footer class="page-footer black">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col s12 center-align">&COPY; 2000-2018 HUGO M. / HUGOMASSARRI.COM / All Rights Reserved</div>
                </div>
            </div>
        </div>
    </footer>



<?php require_once 'includes/js.php'; ?>
</body>

</html>
