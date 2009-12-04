<html>
<head>
  <meta charset="UTF8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>"/>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ermile.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0 maximum-scale=1.0, user-scalable=no, minimal-ui"/>
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png"/>

  <meta name="site:root" content="http://noshahr.com/"/>
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:title" content="Noshahr"/>
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>"/>
  <meta name="twitter:image" content="http://ermile.com/static/images/logo.png"/>
  <meta property="og:image" content="http://ermile.com/static/images/logo.png"/>
  <meta property="og:url" content="http://noshahr.com/"/>
  <meta property='og:locale' content='en_US'/>
</head>
<body class="rtl">
<?php
if (!is_home()) {
?>
 <div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
 </div>
<?php } ?>
