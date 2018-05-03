<?php
define("BASE_URL", "http://gli.temp.domains/~pascalcoin/");
define("ADMIN_MAIL", "webizztechnosoft@gmail.com");
?>
<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>

<!-- NavBar-->
<nav class="navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="navbar-brand" href="index"><img src="img/logo.png" alt=""/></a>
        </div>
<?php $current_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="menuItem <?php echo $current_url==BASE_URL ? 'menuItem-active':'';?>"><a href="http://pascalcoin.org">Home</a></li>                
                <li class="menuItem <?php echo strpos($current_url,'whitepapers')!==false ? 'menuItem-active':'';?>"><a href="whitepapers">Whitepapers</a></li>
                <li class="menuItem <?php echo strpos($current_url,'voting')!==false ? 'menuItem-active':'';?>"><a href="voting">Voting</a></li>
                <li class="menuItem <?php echo strpos($current_url,'contact_us')!==false ? 'menuItem-active':'';?>"><a href="contact_us">Contact</a></li>
            </ul>
        </div>

    </div>
</nav>