<!DOCTYPE html>
<html lang="en">
<head>

        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159036700-7"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-159036700-7');
    </script>
    

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <!-- <meta property="og:url" content="https://campaign.ourdailybread.org/id/kesehatan-mental/index.html" /> -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Proyek Kekuatan Bagi Usia Indah" />
    <meta property="og:description"
        content="Tidak semua orang memperoleh anugerah memasuki masa usia indah. Meski segalanya mungkin dirasa tak lagi seindah dulu, tetapi masa ini tidak harus menjadi periode yang menakutkan. Justru ini menjadi masa merefleksikan perjalanan hidup selama ini: sudahkah hidup kita berbuah menjadi teladan dan panutan? Bagaimana kita bisa tetap menjalani hidup dengan produktif dan antusias? Beragam materi yang kami sajikan di sini kiranya dapat membantu Anda menemukan tujuan di tahapan hidup selanjutnya." />
    <meta property="og:image"
        content="images/image_mini_wa.jpg" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Franklin">


<?php
    $input_text = $_GET['text'];
?>


    <link rel="shortcut icon" href="https://santapanrohani.org/favicon.ico?v=1.1">
    <title>Kekuatan Bagi Usia Indah | Santapan Rohani</title>
    
    <!--Fonts-->
    <!-- <link href='https://fonts.googleapis.com/css?family=Karla:500,500italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@500&display=swap" rel="stylesheet">

    
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="vendors/owl.carousel/owl.carousel.css">
    <!--Magnific Popup-->
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
    
    <!--Theme Styles-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme.css">
    
</head>    
<section class="row latest_news" id="article">
    <div class="container">
        <div class="row sectionTitle text-center">
            <h6 class="label label-default">ARTIKEL</h6>
        <!-- <h3>KESEHATAN MENTAL</h3>-->
            <p class="team_page_para">Simak beragam topik menarik yang dekat dengan keseharian Anda melalui artikel-artikel di bawah ini.</p>
        </div> 
        <div class="row">
            <div class="latest-post col-md-4 col-sm-12">  
                <div class="row m0 featured_cont">
                    <img src="images/warisan iman.jpg" alt="" class="img-responsive">
                    
                </div>
                <h5 class="post-title"><a href="">Warisan Iman</a></h5>
                <!-- <h6 class="post-meta"><a href="#">JOHN DOE</a><a href="#">06 June 2015</a></h6> -->
                <div class="post-excerpts row m0"><em><?php echo $input_text?> 
                </em></div>
                <a href="" class="btn-primary btn-outline">Baca di sini</a>
            </div>
            <div class="latest-post col-md-4 col-sm-12">  
                <div class="row m0 featured_cont">
                    <img src="images/kesaksian-panti-wreda.jpg" alt="" class="img-responsive">
                    <!-- <i class="fa fa-youtube-play"></i> -->
                </div>
                <h5 class="post-title"><a href="">Kesaksian Kunjungan ke Panti Wreda</a></h5>
                <!-- <h6 class="post-meta"><a href="#">JOHN DOE</a><a href="#">06 June 2015</a></h6> -->
                <div class="post-excerpts row m0"><em><?php echo $input_text?> </em></div>
                <a href="" class="btn-primary btn-outline">Baca di sini</a>
            </div>
            <div id="latest-post" class="latest-post col-md-4 col-sm-12">  
                
                <div class="row m0 featured_cont">
                    
                    <img src="images/IndahWaktunya.jpg" alt="" class="img-responsive">
                    
                </div>
                <h5 class="post-title"><a href="">Indah Pada Waktunya</a></h5>
            
                <div class="post-excerpts row m0"><em><?php echo $input_text?></em></div>
                <a href="" class="btn-primary btn-outline">Baca di sini</a>
            </div>
        </div>
    </div>

</section>