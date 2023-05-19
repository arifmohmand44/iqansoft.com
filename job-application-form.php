<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- meta robots tag -->
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="career.html">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Apply to best development services - iQansoft ">
    <meta property="og:description"
        content="iQansoft is always looking for experienced professionals in all relevant technologies covering Full Stack, UI/UX Design, VR/ Gaming , and Data Science.">
    <meta property="og:image" content="images/banner.webp">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="iqansoft.com">
    <meta property="twitter:url" content="career.html">
    <meta name="twitter:title" content="Apply to best development services - iQansoft ">
    <meta name="twitter:description"
        content="iQansoft is always looking for experienced professionals in all relevant technologies covering Full Stack, UI/UX Design, VR/ Gaming , and Data Science.">
    <meta name="twitter:image" content="images/banner.webp">

    <meta name="description"
        content="iQansoft is always looking for experienced professionals in all relevant technologies covering Full Stack, UI/UX Design, VR/ Gaming , and Data Science." />
    <meta name="keywords"
        content="Full Stack Developer (Web & Mobile), UI/UX Designer, VR Game Developer and Animator, Data Science Engineer, dockers islamabad, blender jobs in pakistan" />
    <title>Apply to best development services - iQansoft Technologies</title>
    <link rel="icon" href="assets/images/favicon.webp" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/fontawesome/css/brands.min.css" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/cubeportfolio.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="assets/css/line-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/portfolio.css" />
     <!-- Google Tag Manager -->
     <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-52N954B');</script>
            <!-- End Google Tag Manager -->
</head>

<body class="page" data-spy="scroll" data-target=".navbar" data-offset="150" style="backgournd: #ccc">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52N954B"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
 <!-- header -->
 <?php include('components/header.php');?>
     <!-- end header -->

     <section id="home" class="home page-banner" style="background-position: top 40% center">
        <div class="container">
            <div class="row">
                <div class="col-12 align-items-center text-left">
                    <div class="align-items-center">
                        <h1 class="heading mb-1 animated fadeInDownBig text-white"> Application Form</h1>
                        <h2 class="main-heading mb-0 text-warning animated slideInLeft delay-1s">
                             <?=isset($_GET['title'])?$_GET['title']:''?>
                        </h2>
                    </div>
                </div>
            </div>
        </div><svg class="yellow-square animated slideInRight" viewBox="0 0 200 655" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask2">
                <rect x="0" y="32" width="1616" height="1616" rx="28" ry="28" fill="#00b4d8"
                    transform="rotate(-45 200 100)"></rect>
            </mask>
            <image mask="url(#mask2)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/banner4.webp"
                height="410" width="320"></image>
        </svg>
    </section>
    <section id="career" class="career">
    <!-- application form-->
    <div class="container">
    <div class="container_cont">      
        <!-- <h2>Application Form</h2> -->
        <form action="save.php" method='POST' enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="first_name"
                            placeholder="Enter First Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="last_name"
                            placeholder="Enter Last Name" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact" class="form-label">Contact </label>
                        <input type="tel" name="contact" class="form-control" id="contact" placeholder="" required>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="portfolio" class="form-label">Portfolio </label>
                <input type="text" name="portfolio" class="form-control" id="portfolio" placeholder="link" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="salary" class="form-label">Salaray Requirenments</label>
                        <input type="text" name="salary" class="form-control" id="salary" placeholder="" required>
                        <input type="hidden" name="jobtitle" value="<?= $_GET['jobtitle'];?>">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="startup" class="form-label">When you can start</label>
                        <input type="date" name="startup" class="form-control" id="startup" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastcompany" class="form-label">Last Comapny you worked for</label>
                        <input type="text" name="lastcompany" class="form-control" id="lastcompany" placeholder=""
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="file">Resume:</label>
                        <input type="file" id="file" class="form-control" name="file" required>
                    </div>
                </div>
            </div>
            <!-- <div class="cv">
                <label for="file">Resume:</label>
                <input type="file" id="file" name="file" required>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-submit" value="Submit Application">


                        
                    </div>
                </div>
            </div>
            
        </form>


        </div>
    </div>
    </section>
   



    <div class="scroll-top-wrapper"> <a class="scroll-top-inner" title="Scroll to Top"> <i
                class="fa fa-2x fa-arrow-circle-up"></i> </a> </div>
    <script src="assets/js/bootstrap.min.js" defer></script>
    <script src="assets/js/jquery.cubeportfolio.min.js" defer></script>
    <script src="assets/js/parallaxie.min.js" defer></script>
    <script src="assets/js/jquery.fancybox.min.js" defer></script>
    <script src="assets/js/owl.carousel.min.js" defer></script>
    <script src="assets/js/mediaelement-and-player.min.js" defer></script>
    <script src="assets/js/tilt.jquery.js" defer></script>
    <script src="assets/js/slick.js" defer></script>
    <script src="assets/js/aos.js" defer></script>
    <script src="assets/js/script.js" defer></script>
    <!-- Organizational Schema -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Outsourced Software Development, Hire a team – iQansoft ",
        "alternateName": "iQansoft Technologies",
        "url": "https://www.iqansoft.com/contact.php",
        "logo": "https://www.iqansoft.com/images/iQansoft-logo.png",
        "description": "Contact iQansoft Technologies to outsource software development services or hire a team of experienced and professionals of IT Engineers.",
        "sameAs": [
        "https://www.facebook.com/iqansoftpvtltd",
        "https://www.instagram.com/iqansoft/",
        "https://ca.linkedin.com/company/iqansoft?trk=public_post_follow-view-profile",
        "index.php"
                    ]
        }
    </script>
 <!-- header -->
 <?php include('components/footer.php');?>
     <!-- end header -->
</body>
</html>