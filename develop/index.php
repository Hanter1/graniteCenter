
<!DOCTYPE html>
<html>
<head>
    <title>Раздел в разработке</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Vendors-->
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/grid.css">
    <!-- App & fonts-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/coming-soon-01.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<div class="page-wrap">
    <!-- Content-->
    <div class="md-content">

        <!-- Section -->
        <section class="awe-section awe-skin-dark display-flex-center" style="background-image:url(&quot;assets/img/bg/coming-soon.jpg&quot;);height:100vh;">
            <div class="awe-overlay"></div>
            <div class="container">

                <!-- comming-soon-01 -->
                <div class="comming-soon-01">
                    <h3 class="comming-soon-01__title">Раздел находится в разработке</h3>
                    <p class="comming-soon-01__desc">Прямо сейчас мы усердно трудимся над созданием данного раздела, поэтому вы читаете этот текст. Не переживайте, мы скоро закончим.</p>

                    <!-- countdown__module hide undefined -->
                    <div class="countdown__module hide undefined" data-date="2023/12/10">
                        <p><span>%D</span> Days</p>
                        <p><span>%H</span> Hours</p>
                        <p><span>%M</span> Minutes</p>
                        <p><span>%S</span> Seconds</p>
                    </div><!-- End / countdown__module hide undefined -->

                </div><!-- End / comming-soon-01 -->


            </div>
        </section>
        <!-- End / Section -->

        <div id="particles-js"></div>

    </div>
    <!-- End / Content-->
</div>
<!-- Vendors-->
<script type="text/javascript" src="assets/vendors/_jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/vendors/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="assets/vendors/particles.js/particles.min.js"></script>
<!-- main script-->
<script type="text/javascript" src="assets/js/main.js"></script>

<script>


    setTimeout(function(){
        $(document).ready(function(){
            window.location.href = '/';
        });
    }, 10000);



</script>

</body>
</html>
