<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-23 16:23:45
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107972727657432e91781314-77259797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b4b4856eee3624f0aa5bc9f295487d65dfb5752' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/footer.tpl',
      1 => 1463429275,
      2 => 'file',
    ),
    'd03c81cbfce88a7214e5bba8e0e17a2af37fc67a' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/store/category.tpl',
      1 => 1463429132,
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
  'nocache_hash' => '107972727657432e91781314-77259797',
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
  'unifunc' => 'content_57432e91831680_26684431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57432e91831680_26684431')) {function content_57432e91831680_26684431($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/plugins/modifier.replace.php';
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
/css/catalog.css" media="all">

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
    <body class="catalog-category-view slidebar-left">
      
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

      
<!-- // OPEN MAIN CONTAINER // -->
<section class="main-container col2-left-layout">
  <div class="main-breadcrumbs">
    <div class="container">
      <div class="row show-grid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcrumbs">
            <ul>
              <li class="home">
                <a href="/" title="CARPEDM FASHION">
                  Hlavná stránka
                </a>
                <span>/ </span>
              </li>
              <?php if (!is_null($_smarty_tpl->tpl_vars['breadcrumb']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                  <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['category_name'];?>
">
                      <?php if ($_smarty_tpl->tpl_vars['i']->value!=key(array_slice($_smarty_tpl->tpl_vars['breadcrumb']->value,-1,1,true))) {?>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['category_name'];?>

                      <?php } else { ?>
                        <strong><?php echo $_smarty_tpl->tpl_vars['item']->value['category_name'];?>
</strong>
                      <?php }?>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value!=key(array_slice($_smarty_tpl->tpl_vars['breadcrumb']->value,-1,1,true))) {?>
                      <span>/ </span>
                    <?php }?>
                  </li>
                <?php } ?>
              <?php }?>
            </ul>
          </div><!-- end breadcrumbs -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end main-breadcrumbs -->
  <div class="main-wrapper">
    <div class="container-fluid">
      <div class="main">
        <div class="row show-grid" style="display: none;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="site-preface">
              <h2>
                <?php echo $_smarty_tpl->tpl_vars['category']->value->category_name;?>

              </h2>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->
        <div class="row show-grid top-catalog">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-main">
              <div class="toolbar">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sorter_wrap pull-left">
                      <div class="sort-by">
                        <div class="select-new">
                          <div class="select-inner">
                            <span>TRIEDIŤ PODĽA: </span>
                            <div class="overwrite-sortby" role="button" data-toggle="collapse" href="#sort_by" aria-expanded="false">
                              <?php if ($_smarty_tpl->tpl_vars['sortRuleId']->value==0) {?>VYBERTE<?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['sortRuleId']->value==1) {?>Názov produktu od A po Z<?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['sortRuleId']->value==2) {?>Názov produktu od Z po A<?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['sortRuleId']->value==3) {?>Od najnižšej ceny<?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['sortRuleId']->value==4) {?>Od najvyššej ceny<?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['sortRuleId']->value==5) {?>Od najnovších<?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['sortRuleId']->value==6) {?>Od najstarších<?php }?>
                            </div><!-- end overwrite-sortby -->
                            <ul id="sort_by" class="sort_by collapse">
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/1/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
?sort=1&price_from=<?php echo $_smarty_tpl->tpl_vars['priceFrom']->value;?>
&price_up_to=<?php echo $_smarty_tpl->tpl_vars['priceUpTo']->value;?>
&manufacturer=<?php echo $_smarty_tpl->tpl_vars['manufacturerId']->value;?>
" title="Názov produktu: od A po Z">
                                  Názov produktu: od A po Z
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/1/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
?sort=2&price_from=<?php echo $_smarty_tpl->tpl_vars['priceFrom']->value;?>
&price_up_to=<?php echo $_smarty_tpl->tpl_vars['priceUpTo']->value;?>
&manufacturer=<?php echo $_smarty_tpl->tpl_vars['manufacturerId']->value;?>
" title="Názov produktu: od Z po A">
                                  Názov produktu: od Z po A
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/1/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
?sort=3&price_from=<?php echo $_smarty_tpl->tpl_vars['priceFrom']->value;?>
&price_up_to=<?php echo $_smarty_tpl->tpl_vars['priceUpTo']->value;?>
&manufacturer=<?php echo $_smarty_tpl->tpl_vars['manufacturerId']->value;?>
" title="Ceny: od najnižšej">
                                  Ceny: od najnižšej
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/1/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
?sort=4&price_from=<?php echo $_smarty_tpl->tpl_vars['priceFrom']->value;?>
&price_up_to=<?php echo $_smarty_tpl->tpl_vars['priceUpTo']->value;?>
&manufacturer=<?php echo $_smarty_tpl->tpl_vars['manufacturerId']->value;?>
" title="Ceny: od najvyššej">
                                  Ceny: od najvyššej
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/1/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
?sort=5&price_from=<?php echo $_smarty_tpl->tpl_vars['priceFrom']->value;?>
&price_up_to=<?php echo $_smarty_tpl->tpl_vars['priceUpTo']->value;?>
&manufacturer=<?php echo $_smarty_tpl->tpl_vars['manufacturerId']->value;?>
" title="Pridané produkty: vzostupne">
                                  Pridané produkty: vzostupne
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/1/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
?sort=6&price_from=<?php echo $_smarty_tpl->tpl_vars['priceFrom']->value;?>
&price_up_to=<?php echo $_smarty_tpl->tpl_vars['priceUpTo']->value;?>
&manufacturer=<?php echo $_smarty_tpl->tpl_vars['manufacturerId']->value;?>
" title="Pridané produkty: zostupne">
                                  Pridané produkty: zostupne
                                </a>
                              </li>
                            </ul>
                          </div><!-- end select-inner -->
                        </div><!-- end select-new -->
                      </div><!-- end sort-by -->
                    </div><!-- end sorter_wrap -->
                    <div class="limiter_wrap pull-right">
                      <div class="limiter">
                        <div class="select-new">
                          <div class="select-inner">
                            <div class="overwrite-limiter" data-toggle="collapse" href="#limiter" aria-expanded="false">
                              <?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
 položiek/stránka
                            </div>
                            <ul id="limiter" class="limiter collapse">
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/1/24?sort=<?php echo $_smarty_tpl->tpl_vars['sortRuleId']->value;?>
&price_from=<?php echo $_smarty_tpl->tpl_vars['priceFrom']->value;?>
&price_up_to=<?php echo $_smarty_tpl->tpl_vars['priceUpTo']->value;?>
&manufacturer=<?php echo $_smarty_tpl->tpl_vars['manufacturerId']->value;?>
" title="24 položiek/stránka">
                                  24 položiek/stránka
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/1/48?sort=<?php echo $_smarty_tpl->tpl_vars['sortRuleId']->value;?>
&price_from=<?php echo $_smarty_tpl->tpl_vars['priceFrom']->value;?>
&price_up_to=<?php echo $_smarty_tpl->tpl_vars['priceUpTo']->value;?>
&manufacturer=<?php echo $_smarty_tpl->tpl_vars['manufacturerId']->value;?>
" title="48 položiek/stránka">
                                  48 položiek/stránka
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/1/72?sort=<?php echo $_smarty_tpl->tpl_vars['sortRuleId']->value;?>
&price_from=<?php echo $_smarty_tpl->tpl_vars['priceFrom']->value;?>
&price_up_to=<?php echo $_smarty_tpl->tpl_vars['priceUpTo']->value;?>
&manufacturer=<?php echo $_smarty_tpl->tpl_vars['manufacturerId']->value;?>
" title="72 položiek/stránka">
                                  72 položiek/stránka
                                </a>
                              </li>
                            </ul>
                          </div><!--end select-inner -->
                        </div><!-- end select-new -->                            
                      </div><!-- end limiter -->
                    </div><!-- end limiter_wrap -->
                  </div><!-- end col -->
                </div><!-- end row -->
              </div><!-- end toolbar -->
              <div id="catalog" class="category-products">
                <?php if ((is_array($_smarty_tpl->tpl_vars['category']->value->articleList)&&(count($_smarty_tpl->tpl_vars['category']->value->articleList)>0))) {?>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?> class="item col-lg-2 col-md-2 col-sm-3 col-xs-6" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;
if (strlen($_smarty_tpl->tpl_vars['item']->value->description)>0) {?> - <?php echo $_smarty_tpl->tpl_vars['item']->value->description;
}?>">
                      <div class="product-action">
                        <div class="product-image">
                          <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->image)) {?>
                              <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;
if (strlen($_smarty_tpl->tpl_vars['item']->value->description)>0) {?> - <?php echo $_smarty_tpl->tpl_vars['item']->value->description;
}?>" />
                          <?php }?>
                        </div>

                      </div><!-- end product-action -->
                      <div class="product-content">
                        <h3 class="product-name">
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>

                        </h3>
                        <p class="desc">
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

                        </p>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->is_discount==true) {?>
                          <div class="price-box">              
                            <p class="old-price">
                              <span class="price-label"><!-- --></span>
                              <span class="price" >
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->former_price,'.00','');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->sign;?>

                              </span>
                            </p>
                            <p class="special-price">
                              <span class="price-label"><!-- --></span>
                              <span class="price" id="product-price-61">
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->retail_tax_price,'.00','');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->sign;?>
     
                              </span>
                            </p>
                          </div><!-- end price-box -->
                        <?php } else { ?>
                          <div class="price-box">
                            <span class="regular-price">
                              <span class="price">
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->retail_tax_price,'.00','');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->sign;?>

                              </span><!-- end price -->                               
                            </span><!-- end regular-price -->
                          </div><!-- end price-box -->
                        <?php }?>
                      </div><!-- end product-content -->
                    </a>
                  <?php } ?>
                <?php }?>
              </div><!-- end category-products -->
              <div class="pagination-box">
                <div class="pull-left">
                  <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

                </div><!-- end pagination -->
              </div><!-- end pagination-box -->
            </div><!-- end col-main -->
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end main -->
    </div><!-- end container -->
  </div><!-- end main-wrapper -->
</section>
<!--// CLOSE MAIN CONTAINER //-->

      
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

      
<!-- MODAL WINDOW ADD NEW ITEM (ARTICLE) TO CART RESULT -->
  <div class="modal fade" id="add_new_item" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">                    
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <h4 class="modal-title" style="text-transform: none;">Do košíka ste úspešne pridali:</h4>
              </div>
              <div class="modal-body"><!-- --></div><!-- /.modal-body -->
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!-- //-- ADD NEW ITEM (ARTICLE) TO CART RESULT -->

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
/js/store/cart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    Cart.init();
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
