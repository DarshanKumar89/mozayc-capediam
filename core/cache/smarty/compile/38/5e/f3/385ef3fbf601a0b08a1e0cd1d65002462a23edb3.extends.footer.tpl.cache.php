<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-23 16:23:55
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132136483157432e9b6a6059-15631531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b4b4856eee3624f0aa5bc9f295487d65dfb5752' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/footer.tpl',
      1 => 1463429275,
      2 => 'file',
    ),
    '45e7486156f86e1e594434e5679ba4dc4fb51484' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/store/order/delivery_payment.tpl',
      1 => 1464017150,
      2 => 'file',
    ),
    'a5171368106dfd2f635be73517c657a8deb8b87e' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/nav.tpl',
      1 => 1460547475,
      2 => 'file',
    ),
    '221d60ff71cf2015be97e3bca08dab124589df4d' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/header.tpl',
      1 => 1463767193,
      2 => 'file',
    ),
    'fac440ae5f5af1e3c03340cba0f6c8fc28f74311' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/layout.tpl',
      1 => 1463497236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132136483157432e9b6a6059-15631531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lc' => 0,
    'baseUrl' => 0,
    'site_title' => 0,
    'meta_keywords' => 0,
    'meta_description' => 0,
    'meta_robot' => 0,
    'is_canonical' => 0,
    'canonical_link' => 0,
    'theme' => 0,
    'isAdmin' => 0,
    'googleAnalytics' => 0,
    'addOnScripts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57432e9b763a02_97512870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57432e9b763a02_97512870')) {function content_57432e9b763a02_97512870($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/plugins/modifier.date_format.php';
?><!-- 
Template Name: CARPE DM FASHION
Version: 1.0
Author:  MOZAYC - Henrich Barkoczy
Website: http://www.mozayc.net
Contact: http://www.mozayc.net
License: http://www.mozayc.net - Software License
-->
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
"><!--<![endif]-->
    <head>
        <base href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
" />
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <meta name="HandheldFriendly" content="true">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
">
        <meta name="robots" content="<?php echo $_smarty_tpl->tpl_vars['meta_robot']->value;?>
">
        <meta name="googlebot" content="<?php echo $_smarty_tpl->tpl_vars['meta_robot']->value;?>
">
        <meta name="generator" content="MOZAYC" />
        <meta property="og:locale" content="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
" />
        <meta property="og:site_name" content="CARPEDM FASHION">
        
        <?php if (isset($_smarty_tpl->tpl_vars['is_canonical']->value)&&($_smarty_tpl->tpl_vars['is_canonical']->value==true)) {?>
          <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['canonical_link']->value;?>
" />
        <?php }?>
        <!-- Stylesheets -->
        <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/9dc11983-3459-4bc2-aad8-3d71be45826c.css">
        <link type="text/css" rel="stylesheet" href="extensions/bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="extensions/bootstrap/css/bootstrap-theme.min.css">
        <link type="text/css" rel="stylesheet" href="extensions/font-awesome/css/font-awesome.min.css" media="screen, projection">
        <link type="text/css" rel="stylesheet" href="extensions/owl-carousel/owl.carousel.css">
        <link type="text/css" rel="stylesheet" href="extensions/owl-carousel/owl.theme.css">
        <link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/global.css" media="all">
        <link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/menu.css" media="all">
        <link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/responsive.css" media="all">
        <link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/print.css" media="print">
        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value==true) {?>
          <link type="text/css" rel="stylesheet" href="extensions/cpanel/css/admin-console.css">
        <?php }?>
        <!-- Scripts -->
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="extensions/owl-carousel/owl.carousel.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/init.js"><?php echo '</script'; ?>
>
        
<link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/order.css" media="all">

        <?php if (!empty($_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_id)) {?>
            
            <?php echo '<script'; ?>
>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', '<?php echo $_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_id;?>
', 'auto');
                ga('require', 'linkid', 'linkid.js');
                ga('require', 'ecommerce');
                ga('send', 'pageview');

            <?php echo '</script'; ?>
>
            
        <?php } else { ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_id)) {?>
                <?php echo $_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_code;?>

            <?php }?>
        <?php }?>
    </head>
    <body class="checkout-cart-index slidebar-left">
      
<header class="header-wrapper">
  <div class="header-container">
    
    <div id="mobile-sticky" class="main-header mobile-main-header visible-tablet">
      <div class="header-content">
        <?php if (isset($_smarty_tpl->tpl_vars['nav_main_mobile']->value)) {?>
          <!-- navigation BOF -->
          <div class="navbar-wrapper visible-tablet pull-left">
            <div class="navbar pull-left">
                <div class="navbar-header skip-link skip-navbar-link" data-target-element="#navbar-toggle">
                  <button class="navbar-toggle" type="button" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="" class="navbar-brand">Navigation</a>
                </div>
                <nav id="navbar-toggle" class="bs-navbar-collapse skip-content skip-navbar-content" role="navigation">
                  <?php echo $_smarty_tpl->tpl_vars['nav_main_mobile']->value;?>

                </nav><!-- end navbar-toggle -->
            </div><!-- end navbar -->
          </div>
          <!-- navigation EOF -->
        <?php }?>
        <div class="header-logo pull-left">
          <a href="/" class="logo" title="CARPEDM FASHION">
            <img class="x1" src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" height="57" alt="CARPEDM FASHION" />
            <img class="logo-sticky" src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" height="57" alt="CARPEDM FASHION" />
          </a>
        </div><!-- end header-logo -->
        <div class="right-header-menu">
          <div class="header-maincart">
            <div class="cart-container">
              <a <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>href="nakupna-taska"<?php } else { ?>href="#" onclick="return false;"<?php }?> class="icon-cart-header skip-link skip-cart-link" title="Nákupna taška">
                <span class="icon_bag_alt"></span>
                <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>
                  <span <?php if ($_smarty_tpl->tpl_vars['cart']->value->items>9) {?>class="ci"<?php } else { ?>class="ci centered"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['cart']->value->items;?>

                  </span>
                <?php }?>
              </a>
              <div id="navbar-cart" class="cart-wrapper skip-content skip-cart-content">
                <div class="cart-content">
                  <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
                    <ul class="clearfix">
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li class="item">
                          <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?> class="product-image" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                          </a>
                          <div class="product-details row-fluid show-grid">
                            <p class="product-name clearfix">
                              <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>

                              </a>        
                            </p><!-- end product-name -->
                            <p>
                              <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

                            </p>
                            <div class="items clearfix">
                              <span class="price">
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->amount,'.00','');
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                              </span>                                            
                            </div><!-- end items -->
                            <div class="access clearfix">
                              <a href="store/remove-article-from-cart/<?php echo $_smarty_tpl->tpl_vars['cart']->value->secure_key;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->reference;
if ((isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_b))) {?>/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->id_value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->id_value;
}?>" class="btn-remove" title="Odobrať">
                                <i class="fa fa-trash"></i>
                              </a>
                            </div><!-- end access -->
                          </div><!-- end product-details -->
                        </li>
                      <?php } ?>
                    </ul>
                    <p class="subtotal">
                      <span class="label">
                        Celkom:
                      </span> 
                      <span class="price">
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['cart']->value->amount,'.00','');
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                      </span>                                                            
                    </p>
                <?php } else { ?>
                  <p class="no-items-in-cart">
                    Nákupna taška je prázdna.
                  </p>
                <?php }?>
                </div><!-- end cart-content -->
                <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
                  <div class="cart-checkout">
                    <a href="nakupna-taska" class="btn btn-block btn-info text-uppercase" style="float: left;height: 35px;line-height: 35px;" title="Košík">
                      <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
                      <span>Nákupna taška</span>
                    </a>
                  </div><!-- end cart-checkout -->
                <?php }?>
              </div><!-- end navbar-cart -->
            </div><!-- end cart-container -->                   
          </div><!-- end header-maincart -->
        </div><!-- end right-header-menu -->
      </div><!-- end header-content -->
    </div><!-- end mobile-sticky -->
    
    <div id="main-header" class="main-header hidden-tablet">
      <div class="main-header-top">
        <a href="/" class="logo" title="CARPEDM FASHION">
          <img class="x1" src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" height="57" alt="CARPEDM FASHION" />
          <img class="logo-sticky" src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" height="57" alt="CARPEDM FASHION" />
        </a>
        <div class="right-header-menu">
          <div class="header-maincart">
            <div class="cart-container">
              <a <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>href="nakupna-taska"<?php } else { ?>href="#" onclick="return false;"<?php }?> class="icon-cart-header skip-link" title="Nákupna taška">
                <span class="icon_bag_alt"></span>
                <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>
                  <span <?php if ($_smarty_tpl->tpl_vars['cart']->value->items>9) {?>class="ci"<?php } else { ?>class="ci centered"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['cart']->value->items;?>

                  </span>
                <?php }?>
              </a>
              <div id="navbar-cart" class="cart-wrapper skip-content">
                <div class="cart-content">
                  <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
                    <ul class="clearfix">
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li class="item">
                          <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?> class="product-image" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                          </a>
                          <div class="product-details row-fluid show-grid">
                            <p class="product-name clearfix">
                              <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>

                              </a>        
                            </p><!-- end product-name -->
                            <p>
                              <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

                            </p>
                            <div class="items clearfix">
                              <span class="price">
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->amount,'.00','');
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                              </span>                                            
                            </div><!-- end items -->
                            <div class="access clearfix">
                              <a href="store/remove-article-from-cart/<?php echo $_smarty_tpl->tpl_vars['cart']->value->secure_key;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->reference;
if ((isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_b))) {?>/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->id_value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->id_value;
}?>" class="btn-remove" title="Odobrať">
                                <i class="fa fa-trash"></i>
                              </a>
                            </div><!-- end access -->
                          </div><!-- end product-details -->
                        </li>
                      <?php } ?>
                    </ul>
                    <p class="subtotal">
                      <span class="label">
                        Celkom:
                      </span> 
                      <span class="price">
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['cart']->value->amount,'.00','');
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                      </span>                                                            
                    </p>
                <?php } else { ?>
                  <p class="no-items-in-cart">
                    Nákupna taška je prázdna.
                  </p>
                <?php }?>
                </div><!-- end cart-content -->
                <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
                  <div class="cart-checkout">
                    <a href="nakupna-taska" class="btn btn-block btn-info text-uppercase" style="float: left;height: 35px;line-height: 35px;" title="Nákupna taška">
                      <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
                      <span>Nákupna taška</span>
                    </a>
                  </div><!-- end cart-checkout -->
                <?php }?>
              </div><!-- end navbar-cart -->
            </div><!-- end cart-container -->                   
          </div><!-- end header-maincart -->
          <div class="header-setting">
            <div class="setting-switcher switcher-wrap">
              <div class="overwrite-setting">
                <span class="fa fa-bars"></span>
              </div>
              <div class="switcher-content">
                <ul class="links">
                  <li class="first">
                    <a href="#" onclick="return false;" title="Registrovať sa">
                      Registrovať sa
                    </a>
                  </li>
                </ul>
              </div><!-- end switcher-content -->
            </div><!-- end setting-switcher -->
          </div><!-- end header-setting -->
        </div><!-- end right-header-menu -->
      </div><!-- end main-header-top -->             
      <div class="wrapper-top-menu">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <!-- navigation BOF -->
              <div class="navbar-wrapper">
                <div class="navbar">
                  <div id="main-navbar">
                    <nav class="navbar navbar-centered" role="navigation">
                      
  <?php if (isset($_smarty_tpl->tpl_vars['nav_main']->value)) {
echo $_smarty_tpl->tpl_vars['nav_main']->value;
}?>

                    </nav><!-- end navbar -->
                  </div><!-- end main-navbar -->
                </div><!-- end navbar -->
              </div><!-- end navbar-wrapper -->
              <!-- navigation EOF -->                        
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!--- end container -->
      </div><!-- end wrapper-top-menu -->
    </div><!-- end main-header -->


    <div class="top-container">
      
    </div><!-- end top-container -->      
    
  </div><!-- end header-container -->
</header>

      
<section class="main-container col1-layout">
  <div class="main-breadcrumbs">
    <div class="container">
      <div class="row show-grid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcrumbs">
            <ul>
              <li class="home">
                <a href="/" title="CARPEDM FASHION">
                  Domov
                </a>
                <span>/ </span>
              </li>
              <li>
                <a href="objednavka/dorucenie-a-platba" title="Doprava a platba">
                  Doprava a platba
                </a>
              </li>
            </ul>
          </div><!-- end breadcrumbs -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end main-breadcrumbs -->
  <div class="main-wrapper">
    <div id="mobile-order" class="main order">
      <div class="container">
        <div class="row show-grid top">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="btn-group btn-breadcrumb steps <?php if ($_smarty_tpl->tpl_vars['stepId']->value!==0) {?>step-<?php echo $_smarty_tpl->tpl_vars['stepId']->value;
}?>">
              <a href="nakupna-taska" class="btn btn-cart">
                <span class="number">1.</span>&nbsp;Nákupna taška
              </a>
              <a href="objednavka/dorucenie-a-platba" class="btn btn-delivery-pay">
                <span class="number">2.</span>&nbsp;Doprava a platba
              </a>
              <a href="objednavka/adresar" class="btn btn-address">
                <span class="number">3.</span>&nbsp;Kontaktné údaje
              </a>
              <a href="objednavka/sumarizacia-objednavky-a-posledna-kontrola" class="btn btn-summary">
                <span class="number">4.</span>&nbsp;Sumarizácia objednávky
              </a>
            </div><!-- order steps -->
            <div class="col-main">
              <div class="checkout-cart">
                <div class="page-title title-buttons">
                  <h1>
                    Doprava a platba
                  </h1>
                  <span class="help-info">
                    Pomoc s objednávkou? Volajte +421 52 381 11 87
                  </span>
                  <p class="text-info">
                    Pri nákupe tovaru s rôznymi dodacími lehotami platíte dopravu 
                    vždy len za jednu zásielku (ak nemáte dopravu zdarma).
                  </p>
                </div><!-- end page-title -->
              </div><!-- end checkout-cart -->
            </div><!-- end col-main -->
          </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">
          <form action="objednavka/dorucenie-a-platba/vyber" method="post" role="form">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 block-delivery">
              <h4 style="border-bottom: 1px solid #343525;">
                Spôsob doručenia
              </h4>
              <?php if (is_array($_smarty_tpl->tpl_vars['deliveryMethodList']->value)&&(count($_smarty_tpl->tpl_vars['deliveryMethodList']->value)>0)) {?>
                <ul id="dl" class="list-unstyled">
                  <li id="aal" class="row" style="position:relative;">
                    Načítavam...
                  </li>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['deliveryMethodList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <li class="row" style="position:relative;" data-aa="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_delivery;?>
">
                      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-radio">
                        <div class="radio">
                          <label>
                            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_delivery" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_delivery_<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_delivery;?>
" <?php if (is_object($_smarty_tpl->tpl_vars['delivery']->value)&&($_smarty_tpl->tpl_vars['item']->value->id_delivery==$_smarty_tpl->tpl_vars['delivery']->value->id_delivery)) {?>checked<?php }?>>
                          </label>
                        </div>
                      </div><!-- end col -->
                      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <p>
                          <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->delivery_name;?>
</strong>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->cost>0) {?>(<?php echo $_smarty_tpl->tpl_vars['item']->value->cost;
echo $_smarty_tpl->tpl_vars['item']->value->sign;?>
)<?php }?>
                          <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->description)>0) {?><br><?php echo $_smarty_tpl->tpl_vars['item']->value->description;
}?>
                        </p>
                      </div>
                    </li>
                  <?php } ?>
                </ul>
              <?php } else { ?>
                <div class="alert alert-danger" role="alert" style="margin-top:15px;">
                  <strong><i class="fa fa-exclamation-triangle"></i></strong>
                  Nie sú dostupné žiadne možnosťi na doručenie.
                </div><!-- end alert -->
              <?php }?>
            </div><!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 block-payment">
              <h4 style="border-bottom: 1px solid #343525;">
                Spôsob platby
              </h4>
              <?php if (is_array($_smarty_tpl->tpl_vars['paymentMethodList']->value)&&(count($_smarty_tpl->tpl_vars['paymentMethodList']->value)>0)) {?>
                <ul id="pl" class="list-unstyled">
                  <li id="bbl" class="row" style="position:relative;">
                    Načítavam...
                  </li>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['paymentMethodList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <li class="row" style="position:relative;" data-bb="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_payment;?>
">
                      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-radio">
                        <div class="radio">
                          <label>
                            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_payment" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_payment_<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_payment;?>
" <?php if (is_object($_smarty_tpl->tpl_vars['payment']->value)&&($_smarty_tpl->tpl_vars['item']->value->id_payment==$_smarty_tpl->tpl_vars['payment']->value->id_payment)) {?>checked<?php }?>>
                          </label>
                        </div>
                      </div><!-- end col -->
                      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <p>
                          <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->payment_name;?>
</strong>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->cost>0) {?>(<?php echo $_smarty_tpl->tpl_vars['item']->value->cost;
echo $_smarty_tpl->tpl_vars['item']->value->sign;?>
)<?php }?>
                          <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->description)>0) {?><br><?php echo $_smarty_tpl->tpl_vars['item']->value->description;
}?>
                        </p>
                      </div>
                    </li>
                  <?php } ?>
                </ul>
              <?php } else { ?>
                <div class="alert alert-danger" role="alert" style="margin-top:15px;">
                  <strong><i class="fa fa-exclamation-triangle"></i></strong>
                  Nie sú dostupné žiadne možnosťi pre platbu.
                </div><!-- end alert -->
              <?php }?>
            </div><!-- end col -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="order-info pull-left">
                <?php if ($_smarty_tpl->tpl_vars['enabledDeliveryDiscount']->value==true) {?>
                  <div class="delivery-discount">
                    <p id="h-d-f-c" style="<?php if ($_smarty_tpl->tpl_vars['deliveryDiscount']->value->is_discount==true) {?>display:block;<?php } else { ?>display:none;<?php }?>">
                      MÁTE DOPRAVU ZDARMA
                    </p>
                    <p id="discount" style="<?php if ($_smarty_tpl->tpl_vars['deliveryDiscount']->value->is_discount==false) {?>display:block;<?php } else { ?>display:none;<?php }?>">
                      DOPRAVU ZDARMA?
                      <span>Nakúpte ešte za:</span>
                      <span class="diff"><?php echo $_smarty_tpl->tpl_vars['deliveryDiscount']->value->diff_price;
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>
</span>
                    </p>
                  </div>
                <?php }?>
              </div><!-- order-info -->
            </div><!-- end col -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="order-actions btn-group" role="group">
                <a href="nakupna-taska" class="btn btn-back text-uppercase">
                  <i class="fa fa-reply"></i>
                  Späť
                </a>
                <?php if (!is_null($_smarty_tpl->tpl_vars['deliveryMethodList']->value)&&!is_null($_smarty_tpl->tpl_vars['paymentMethodList']->value)) {?>
                  <button type="submit" class="btn btn-order text-uppercase">
                    Pokračovať na ďalší krok&nbsp;
                    <i class="fa fa-angle-double-right" style="position: relative;top: 0.8px;font-size: 1.35em;line-height: 100%;"></i>
                  </button>
                <?php }?>
              </div><!-- order-actions -->
            </div><!-- end col -->
          </form>
        </div><!-- end row -->
      </div><!-- end container -->
    </div><!-- end main -->
  </div><!-- end main-wrapper -->
</section>

      
<!-- // FOOTER // -->
<footer class="footer-wrapper">
  <div class="footer-top">
    <div class="container-fluid">
      <div class="footer-container">
        <div class="row show-grid">
          <div class="block-container footer-top">
            <div class="about-social col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="about">
                <img src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" class="logo" alt="CARPEDM FASHION" />
                <div class="about-text">
                  <p>
                    CarpeDM stelesňuje predovšetkým jedinečný komfort,
                    najvyššiu kvalitu prevedenia a použitých materiálov,
                    svojráznosť v čistých líniách dizajnu.
                  </p> 
                  <p>
                    CarpeDM sa výrazne odlišuje od davu a zároveň rešpektuje dynamiku aktívneho životného štýlu.
                    Streetové, tanečné a hiphop módne oblečenie pre každého, 
                    kto sa chce nielen cítiť pohodlne, ale aj vyzerať skvele! 
                    U nás nájdete všetko, čo sa pohodlne nosí: tepláky, mikiny, 
                    trička, tielka, šortky, bundy, vesty a ďalšie artikle.
                  </p>
                </div><!-- end about-text -->
                <div class="social">
                  <div class="title-footer">
                    Sledujte nás
                  </div><!-- end title-footer -->
                  <ul class="social-icons small light">
                    <li class="facebook">
                      <a class="fa fa-facebook" href="https://www.facebook.com/CarpeDMfashion" target="_blank">
                        <span>Facebook</span>
                      </a>
                    </li>
                  </ul>
                </div><!-- end social -->
              </div><!-- end about -->
            </div><!-- end about-social -->
            <div class="list-footer col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 newslettter">    
                  <div class="block block-subscribe">
                    <div class="block-title">
                      <span>Chcete odoberať Newsletter?</span>
                    </div><!-- end block-title -->
                    <form class="form-newsletter">
                      <div class="block-content">
                        <div class="form-subscribe-header">
                          <div class="input-box">
                            <input type="text" name="mce" placeholder="Vložte Vašu e-mailovú adresu" class="input-text" required>
                          </div><!-- end input-box -->
                          <div class="actions">
                            <button type="button" class="button">
                              <span>Áno, súhlasím<span>
                            </button>
                          </div><!-- end actions -->
                        </div><!-- end form-subscribe-header -->
                      </div><!-- end block-content -->
                      <span class="message"><!-- --></span>
                    </form>
                  </div><!-- end block-subscribe -->
                </div><!-- end col -->
                <?php if (isset($_smarty_tpl->tpl_vars['nav_footer']->value)&&(is_array($_smarty_tpl->tpl_vars['nav_footer']->value)&&(count($_smarty_tpl->tpl_vars['nav_footer']->value)>0))) {?>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-links">
                    <div class="footer-links">
                      <div class="row">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                          <?php if (is_array($_smarty_tpl->tpl_vars['item']->value->items)&&(count($_smarty_tpl->tpl_vars['item']->value->items)>0)) {?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 info-footer">
                              <div class="footer-block-title">
                                <h3>
                                  <?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>

                                  <span class="mobile-button visible-xs active">
                                    accordion-footer
                                  </span>
                                </h3>
                              </div><!-- end footer-block-title -->
                              <div class="custom-footer-content">
                                <ul class="footer-list">
                                  <?php  $_smarty_tpl->tpl_vars['sub_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_item']->key => $_smarty_tpl->tpl_vars['sub_item']->value) {
$_smarty_tpl->tpl_vars['sub_item']->_loop = true;
?>
                                    <li>
                                      <span class="widget widget-cms-link">
                                        <a <?php if (strlen($_smarty_tpl->tpl_vars['sub_item']->value->url_link)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['sub_item']->value->url_link;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?>>
                                          <span><?php echo $_smarty_tpl->tpl_vars['sub_item']->value->nav_item_value;?>
</span>
                                        </a>
                                      </span>
                                    </li>
                                  <?php } ?>
                                </ul>
                              </div><!-- end custom-footer-content -->
                            </div><!-- end col -->
                          <?php }?>
                        <?php } ?>
                      </div><!-- end row -->
                    </div><!-- end footer-links -->
                  </div><!-- end col -->
                <?php }?>
              </div><!-- end row -->
            </div><!-- list-footer -->           
          </div><!-- end block-container -->
        </div><!-- end row -->
      </div><!-- end footer-container -->
    </div><!-- end container-fluid -->
  </div><!-- end footer-top -->
  <div class="footer-bottom">
    <div class="container">
      <div class="footer-container">
        <div class="row show-grid"><!-- --></div>
        <div id="back-top" class="hidden-phone">
          <a href="#top">
            <div class="sticker-wrapper">
              <div class="sticker" title="Back to Top">
                <i class="fa fa-angle-up"></i>
              </div>
            </div>
          </a>
        </div><!-- end back-top -->
      </div><!-- end footer-container -->
    </div><!-- end container -->
  </div><!-- end footer-bottom -->
  <div class="footer-copyright">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
          <address>
            Copyright &copy; <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y");?>

            CarpeDM fashion all rights reserved.
            <a href="#" onclick="return false;" target="_blank" title="Mozayc eCommerce Cloud Solutions">Powered by Mozayc.</a>
          </address>
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end footer-copyright -->
</footer>

      
      <?php echo '<script'; ?>
>
        //<![CDATA[
        var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
        //]]>
        
        var frontendData = {};
            frontendData.confGridEqualHeight = true;
            frontendData.colFull = '3';
            frontendData.col768_640 = '3';
            frontendData.col480_640 = '2';
            frontendData.col480 = '2';
            frontendData.enableSticky = true;
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="extensions/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/store/mailchimp.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/core.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/jquery.accordion.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>
        MailChimp.init();
        
        jQuery(document).ready(function() {
          widgetConfig.init('slide-home', {
            carousel: {
              "enable":true,
              "pagination":true,
              "transitionStyle":false,
              "autoPlay":false,
              "items":1,
              "singleItem":true,
              "addClassActive":true,
              "navigation":false,
              "navigationText":[null,null]}            
          });
          
          if((jQuery('.skip-link.skip-navbar-link').length > 0) &&
            (jQuery('.skip-content.skip-navbar-content').length > 0)
          ) {
            jQuery('.skip-link.skip-navbar-link').on('click', function() {
              if(jQuery(this).hasClass('skip-active')) {
                jQuery('.skip-link.skip-navbar-link').removeClass('skip-active');
                jQuery('.skip-content.skip-navbar-content').removeClass('skip-active');
              } else {
                jQuery('.skip-link.skip-navbar-link').addClass('skip-active');
                jQuery('.skip-content.skip-navbar-content').addClass('skip-active');
              }
            });
          }
          if((jQuery('.skip-link.skip-cart-link').length > 0) &&
            (jQuery('.skip-content.skip-cart-content').length > 0)
          ) {
            jQuery('.skip-link.skip-cart-link').on('click', function() {
              if(jQuery(this).hasClass('skip-active')) {
                jQuery('.skip-link.skip-cart-link').removeClass('skip-active');
                jQuery('.skip-content.skip-cart-content').removeClass('skip-active');
              } else {
                jQuery('.skip-link.skip-cart-link').addClass('skip-active');
                jQuery('.skip-content.skip-cart-content').addClass('skip-active');
              }
              if(jQuery(window).width() <= 1024) {
                return false;
              }
            });
          }
          jQuery(".nav-mobile-accordion").mobileMenu({
              accordion: true,
              speed: 400,
              mouseType: 0,
              easing: 'easeInOutQuad'
          });
          jQuery(".nav-mobile-accordion").find('.collapse').each(function() {
            if(jQuery(this).text() === "collapse") {
              jQuery(this).remove();
            }
          });
        });
      <?php echo '</script'; ?>
>
      
<?php echo '<script'; ?>
 src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/store/dpt.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  DPT.init();
<?php echo '</script'; ?>
>

      <?php if (!empty($_smarty_tpl->tpl_vars['addOnScripts']->value)) {?>
          <?php echo '<script'; ?>
 type="text/javascript">
              <?php echo $_smarty_tpl->tpl_vars['addOnScripts']->value;?>

          <?php echo '</script'; ?>
>
      <?php }?>
    </body>
</html><?php }} ?>
