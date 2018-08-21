<?php include 'includes/header.php'; ?>
<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- //Add your site or application content here -->
   <header>
        <div class="navbar-fixed">

            <nav class="z-depth-0 white">
                <div class="nav-wrapper container">
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
                    <h1 class="black-text"></h1>
                </div>
            </nav>
            <?php include 'includes/sidenav.php'; ?>
        </div>
    </header>
    <main>
        <div style="height: 10vh;"></div>
        <div id="slogan" class="row">
            <div class="col s12 center-align">
                <img class="responsive-img" src="images/slogan.png" alt="" />
            </div>
        </div>
    </main>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/js.php'; ?>
</body>
</html>
