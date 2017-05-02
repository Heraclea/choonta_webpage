<!-- Basic page needs
============================================ --> 
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Choonta</title>
<!-- Mobile specific metas --> 
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?= base_url() ?>favicon.ico" type="image/x-icon">
<link rel="icon" href="<?= base_url() ?>favicon.ico" type="image/x-icon">

<!-- FONTS -->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,600italic,300italic,700' rel='stylesheet' type='text/css'>

<meta name="description" content="<?= $seo->website_description ?>">
<meta name="keywords" content="<?= $seo->website_keywords ?>">

<?php if(!empty($seo->google_analytics_code)){ ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '<?= $seo->google_analytics_code ?>', 'auto');
    ga('send', 'pageview');

  </script>
<?php } ?>

<!-- font awesome -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/font-awesome.min.css">
<!-- carousel CSS -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/owl.carousel.css">
<!-- carousel Theme CSS -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/owl.my_theme.css">
<!-- carousel transitions CSS -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/owl.transitions.css">
<!-- nivo slider slider css -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/nivo-slider.css">
<!-- animate css -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/animate.css">
<!-- Price jquery-ui  -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/jquery-ui.css">
<!-- fancy-box theme -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/fancy-box/jquery.fancybox.css">
<!-- normalizer -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/normalize.css">
<!-- bootstrap -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
<!-- Mobile menu css -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/meanmenu.min.css">
<!-- main -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/main.css">
<!-- style -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/style.css">
<!-- Responsive css -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/responsive.css">
 <!-- jquery Validator Engine JS -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/js/validator/validationEngine.jquery.css">

<!-- modernizr JS -->
<script src="<?= base_url() ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>