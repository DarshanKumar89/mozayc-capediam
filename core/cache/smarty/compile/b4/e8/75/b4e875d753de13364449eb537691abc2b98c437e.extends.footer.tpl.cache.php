<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-27 11:46:53
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195344018857989f2dcebef0-37751524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb6caecf9be39c80e5fc2f2fc43854699df89ed' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/footer.tpl',
      1 => 1469548741,
      2 => 'file',
    ),
    '7700df49164328fe2c3f4ad41f99d757326322e4' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/store/order/summary.tpl',
      1 => 1469548749,
      2 => 'file',
    ),
    'c324054288512d51e505f8260a15b835b646ff40' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/nav.tpl',
      1 => 1469548742,
      2 => 'file',
    ),
    'd264177aac697b44de37ed88766f432f7e8d796b' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/header.tpl',
      1 => 1469548742,
      2 => 'file',
    ),
    '27cf814a87eefe95daaa07a54785e28a77a4c8b3' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/layout.tpl',
      1 => 1469548742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195344018857989f2dcebef0-37751524',
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
  'unifunc' => 'content_57989f2de194c3_46021297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989f2de194c3_46021297')) {function content_57989f2de194c3_46021297($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/plugins/modifier.date_format.php';
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
        <link type="text/css" rel="stylesheet" href="extensions/bootstrap-flags/css/flag-icon.min.css">
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
              <a <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>href="nakupna-taska"<?php } else { ?>href="#" onclick="return false;"<?php }?> 
                class="icon-cart-header skip-link" 
                title="<?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {
echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;
} else { ?>Nákupna taška<?php }?>"
              >
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
}?>" 
                                class="btn-remove" 
                                title="<?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag_remove_item']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag_remove_item']->value)>0)) {
echo $_smarty_tpl->tpl_vars['title_shopping_bag_remove_item']->value;
} else { ?>Odobrať<?php }?>"
                              >
                                <i class="fa fa-trash"></i>
                              </a>
                            </div><!-- end access -->
                          </div><!-- end product-details -->
                        </li>
                      <?php } ?>
                    </ul>
                    <p class="subtotal">
                      <span class="label">
                        <?php if (isset($_smarty_tpl->tpl_vars['msg_shopping_bag_total']->value)&&(strlen($_smarty_tpl->tpl_vars['msg_shopping_bag_total']->value)>0)) {
echo $_smarty_tpl->tpl_vars['msg_shopping_bag_total']->value;
} else { ?>Celkom<?php }?>:
                      </span> 
                      <span class="price">
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['cart']->value->amount,'.00','');
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                      </span>                                                            
                    </p>
                <?php } else { ?>
                  <p class="no-items-in-cart">
                    <?php if (isset($_smarty_tpl->tpl_vars['msg_shopping_bag_is_empty']->value)&&(strlen($_smarty_tpl->tpl_vars['msg_shopping_bag_is_empty']->value)>0)) {
echo $_smarty_tpl->tpl_vars['msg_shopping_bag_is_empty']->value;
} else { ?>Nákupna taška je prázdna.<?php }?>
                  </p>
                <?php }?>
                </div><!-- end cart-content -->
                <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
                  <div class="cart-checkout">
                    <a href="nakupna-taska" 
                      class="btn btn-block btn-info text-uppercase" 
                      style="float: left;height: 35px;line-height: 35px;" 
                      title="<?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {
echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;
} else { ?>Nákupna taška<?php }?>"
                    >
                      <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
                      <span>
                        <?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {
echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;
} else { ?>Nákupna taška<?php }?>
                      </span>
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
              <a <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>href="nakupna-taska"<?php } else { ?>href="#" onclick="return false;"<?php }?> 
                class="icon-cart-header skip-link" 
                title="<?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {
echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;
} else { ?>Nákupna taška<?php }?>"
              >
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
}?>" 
                                class="btn-remove" 
                                title="<?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag_remove_item']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag_remove_item']->value)>0)) {
echo $_smarty_tpl->tpl_vars['title_shopping_bag_remove_item']->value;
} else { ?>Odobrať<?php }?>"
                              >
                                <i class="fa fa-trash"></i>
                              </a>
                            </div><!-- end access -->
                          </div><!-- end product-details -->
                        </li>
                      <?php } ?>
                    </ul>
                    <p class="subtotal">
                      <span class="label">
                        <?php if (isset($_smarty_tpl->tpl_vars['msg_shopping_bag_total']->value)&&(strlen($_smarty_tpl->tpl_vars['msg_shopping_bag_total']->value)>0)) {
echo $_smarty_tpl->tpl_vars['msg_shopping_bag_total']->value;
} else { ?>Celkom<?php }?>:
                      </span> 
                      <span class="price">
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['cart']->value->amount,'.00','');
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                      </span>                                                            
                    </p>
                <?php } else { ?>
                  <p class="no-items-in-cart">
                    <?php if (isset($_smarty_tpl->tpl_vars['msg_shopping_bag_is_empty']->value)&&(strlen($_smarty_tpl->tpl_vars['msg_shopping_bag_is_empty']->value)>0)) {
echo $_smarty_tpl->tpl_vars['msg_shopping_bag_is_empty']->value;
} else { ?>Nákupna taška je prázdna.<?php }?>
                  </p>
                <?php }?>
                </div><!-- end cart-content -->
                <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
                  <div class="cart-checkout">
                    <a href="nakupna-taska" 
                      class="btn btn-block btn-info text-uppercase" 
                      style="float: left;height: 35px;line-height: 35px;" 
                      title="<?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {
echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;
} else { ?>Nákupna taška<?php }?>"
                    >
                      <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
                      <span>
                        <?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {
echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;
} else { ?>Nákupna taška<?php }?>
                      </span>
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
                <ul class="links" style="display: none;">
                  <li class="first">
                    <a href="#" onclick="return false;" title="Registrovať sa">
                      Registrovať sa
                    </a>
                  </li>
                </ul>
                <div class="language-currency">
                  <div class="language-switcher switcher-wrap">
                    <div class="title-selector">
                      <span>Your Languages</span>
                    </div><!-- end title-selector -->
                    <ul class="select-language clearfix">
                      <li <?php if ($_smarty_tpl->tpl_vars['lc']->value=="en-GB") {?>class="current-language"<?php }?>>
                        <a href="language/en-GB">
                          <div class="flag-ico flag-icon-background flag-icon-en-GB"><!-- --></div>
                        </a>
                      </li>
                      <li <?php if ($_smarty_tpl->tpl_vars['lc']->value=="it-IT") {?>class="current-language"<?php }?>>
                        <a href="language/it-IT">
                          <div class="flag-ico flag-icon-background flag-icon-it"><!-- --></div>
                        </a>
                      </li>
                      <li <?php if ($_smarty_tpl->tpl_vars['lc']->value=="sk") {?>class="current-language"<?php }?>>
                        <a href="language/sk">
                          <div class="flag-ico flag-icon-background flag-icon-sk"><!-- --></div>
                        </a>
                      </li>
                    </ul><!-- end select-language -->
                  </div><!-- end language-switcher -->
                </div><!-- end language-currency -->
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
                  <?php if (isset($_smarty_tpl->tpl_vars['label_breadcrumbs_home_item']->value)&&(strlen($_smarty_tpl->tpl_vars['label_breadcrumbs_home_item']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_breadcrumbs_home_item']->value;
} else { ?>Hlavná stránka<?php }?>
                </a>
                <span>/ </span>
              </li>
              <li>
                <a href="objednavka/sumarizacia-objednavky-a-posledna-kontrola" title="<?php if (isset($_smarty_tpl->tpl_vars['label_order_summary']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_summary']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_summary']->value;
} else { ?>Sumarizácia objednávky<?php }?>">
                  <?php if (isset($_smarty_tpl->tpl_vars['label_order_summary']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_summary']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_summary']->value;
} else { ?>Sumarizácia objednávky<?php }?>
                </a>
              </li>
            </ul>
          </div><!-- end breadcrumbs -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end main-breadcrumbs -->
  <div class="main-wrapper">
    <div class="main order">
      <div class="container">
        <div class="row show-grid top">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="btn-group btn-breadcrumb steps <?php if ($_smarty_tpl->tpl_vars['stepId']->value!==0) {?>step-<?php echo $_smarty_tpl->tpl_vars['stepId']->value;
}?>">
              <a href="nakupna-taska" class="btn btn-cart">
                <span class="number">1.</span>&nbsp;
                <?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {
echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;
} else { ?>Nákupna taška<?php }?>
              </a>
              <a href="objednavka/dorucenie-a-platba" class="btn btn-delivery-pay">
                <span class="number">2.</span>&nbsp;
                <?php if (isset($_smarty_tpl->tpl_vars['label_delivery_payment']->value)&&(strlen($_smarty_tpl->tpl_vars['label_delivery_payment']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_delivery_payment']->value;
} else { ?>Doprava a platba<?php }?>
              </a>
              <a href="objednavka/adresar" class="btn btn-address">
                <span class="number">3.</span>&nbsp;
                <?php if (isset($_smarty_tpl->tpl_vars['label_address_book']->value)&&(strlen($_smarty_tpl->tpl_vars['label_address_book']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_address_book']->value;
} else { ?>Kontaktné údaje<?php }?>
              </a>
              <a href="objednavka/sumarizacia-objednavky-a-posledna-kontrola" class="btn btn-summary">
                <span class="number">4.</span>&nbsp;
                <?php if (isset($_smarty_tpl->tpl_vars['label_order_summary']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_summary']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_summary']->value;
} else { ?>Sumarizácia objednávky<?php }?>
              </a>
            </div><!-- order steps -->
            <div class="col-main">
              <div class="checkout-cart">
                <div class="page-title title-buttons">
                  <h1>
                    <?php if (isset($_smarty_tpl->tpl_vars['label_order_summary']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_summary']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_summary']->value;
} else { ?>Sumarizácia objednávky<?php }?>
                  </h1>
                  <span class="help-info">
                    <?php if (isset($_smarty_tpl->tpl_vars['label_help_with_your_order']->value)&&(strlen($_smarty_tpl->tpl_vars['label_help_with_your_order']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_help_with_your_order']->value;
} else { ?>Pomoc s objednávkou? Volajte +421 52 381 11 87<?php }?>
                  </span>
                  <p class="text-info"><!-- --></p>
                </div><!-- end page-title -->
              </div><!-- end checkout-cart -->
            </div><!-- end col-main -->
          </div><!-- end col -->
        </div><!-- end row -->
        <form action="objednavka/uzavriet" method="post" class="form-inline" role="form">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <h4 style="border-bottom: 1px solid #343525;">
                <?php if (isset($_smarty_tpl->tpl_vars['label_orderer_products']->value)&&(strlen($_smarty_tpl->tpl_vars['label_orderer_products']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_orderer_products']->value;
} else { ?>Objednaný tovar<?php }?>
              </h4>
              <ul class="list-unstyled summary">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                  <li>
                    <div class="image pull-left">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                    </div><!-- image -->
                    <div class="description pull-left">
                      <h4 class="text-left text-uppercase">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>

                      </h4>
                      <?php if ((isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_b))) {?>
                        <div class="m-attr" role="group">
                          <a href="#" onclick="return false;" class="link-color" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->value;?>
">
                            <span class="color-option" style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->color;?>
;"><!-- --></span>
                          </a>
                          <a href="#" onclick="return false;" class="link-size" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->value;?>
">
                            <span class="size-option not-available">
                              <?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->value;?>

                            </span>
                          </a>
                        </div><!-- end m-attr -->
                      <?php }?>
                      <p>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->retail_tax_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>
/ks
                        <span class="divider">|</span>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>
ks
                        <span class="divider last">|</span>
                        <?php if (isset($_smarty_tpl->tpl_vars['label_order_total_amount']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_total_amount']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_total_amount']->value;
} else { ?>V celkovej sume<?php }?>:
                        &nbsp;&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['item']->value->amount;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>
</strong>
                      </p>
                      <?php if (isset($_smarty_tpl->tpl_vars['item']->value->expedition_time)&&is_object($_smarty_tpl->tpl_vars['item']->value->expedition_time)) {?>
                        <p>
                          <?php if (isset($_smarty_tpl->tpl_vars['label_expedition_time']->value)&&(strlen($_smarty_tpl->tpl_vars['label_expedition_time']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_expedition_time']->value;
} else { ?>Dodacia doba<?php }?>: 
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->expedition_time->num_val;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->expedition_time->unit_time;?>

                        </p>
                      <?php }?>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div><!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <h4 style="border-bottom: 1px solid #343525;">
                <?php if (isset($_smarty_tpl->tpl_vars['label_order_info_data']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_info_data']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_info_data']->value;
} else { ?>Údaje o objednávke<?php }?>
              </h4>
              <div class="form-group">
                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">
                  <?php if ($_smarty_tpl->tpl_vars['address']->value->delivery->is_personal_pickup==1) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['label_order_personal_data']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_personal_data']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_personal_data']->value;
} else { ?>Osobné údaje<?php }?>
                  <?php } else { ?>
                    <?php if (isset($_smarty_tpl->tpl_vars['label_pick_up_and_invoice_address']->value)&&(strlen($_smarty_tpl->tpl_vars['label_pick_up_and_invoice_address']->value)>0)) {?>
                      <?php echo $_smarty_tpl->tpl_vars['label_pick_up_and_invoice_address']->value;?>

                    <?php } else { ?>
                      Adresa na doručenie
                      a fakturačná adresa
                    <?php }?>
                  <?php }?>
                </label>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                  <p>
                    <strong><?php echo $_smarty_tpl->tpl_vars['address']->value->delivery->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['address']->value->delivery->last_name;?>
</strong><br>
                    <?php if ($_smarty_tpl->tpl_vars['address']->value->delivery->is_personal_pickup==1) {?>
                      <?php echo $_smarty_tpl->tpl_vars['address']->value->delivery->email;?>
<br>
                      <?php echo $_smarty_tpl->tpl_vars['address']->value->delivery->phone;?>

                    <?php } else { ?>
                      <?php echo $_smarty_tpl->tpl_vars['address']->value->delivery->street;?>
<br>
                      <?php echo $_smarty_tpl->tpl_vars['address']->value->delivery->zip;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['address']->value->delivery->city;?>
<br>
                      Slovenská republika
                    <?php }?>
                  </p>
                    <?php if ($_smarty_tpl->tpl_vars['address']->value->id_address_primary!==$_smarty_tpl->tpl_vars['address']->value->id_address_invoice) {?>
                      <p>
                        <strong><?php echo $_smarty_tpl->tpl_vars['address']->value->invoice->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['address']->value->invoice->last_name;?>
</strong><br>
                        <?php echo $_smarty_tpl->tpl_vars['address']->value->invoice->street;?>
<br>
                        <?php echo $_smarty_tpl->tpl_vars['address']->value->invoice->zip;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['address']->value->invoice->city;?>
<br>
                        Slovenská republika
                      </p>
                    <?php }?>
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group odd">
                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">
                  <?php if (isset($_smarty_tpl->tpl_vars['label_order_delivery_method']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_delivery_method']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_delivery_method']->value;
} else { ?>Spôsob doručenia<?php }?>
                </label>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                  <p>
                    <?php echo $_smarty_tpl->tpl_vars['delivery']->value->delivery_name;?>

                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value->cost>0) {?>(<?php echo $_smarty_tpl->tpl_vars['delivery']->value->cost;
echo $_smarty_tpl->tpl_vars['delivery']->value->sign;?>
)<?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['delivery']->value->description)) {?><br><?php echo $_smarty_tpl->tpl_vars['delivery']->value->description;
}?>
                  </p>
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">
                  <?php if (isset($_smarty_tpl->tpl_vars['label_order_payment_method']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_payment_method']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_payment_method']->value;
} else { ?>Spôsob platby<?php }?>
                </label>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                  <p>
                    <?php echo $_smarty_tpl->tpl_vars['payment']->value->payment_name;?>

                    <?php if ($_smarty_tpl->tpl_vars['payment']->value->cost>0) {?>(<?php echo $_smarty_tpl->tpl_vars['payment']->value->cost;
echo $_smarty_tpl->tpl_vars['payment']->value->sign;?>
)<?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['payment']->value->description)) {?><br><?php echo $_smarty_tpl->tpl_vars['payment']->value->description;
}?>
                  </p>
                </div><!-- end col -->
              </div><!-- end form-group -->
              <hr>
              <div class="form-group odd">
                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">
                  <?php if (isset($_smarty_tpl->tpl_vars['label_order_total_price']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_total_price']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_total_price']->value;
} else { ?>Spolu za tovar<?php }?>
                </label>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                  <p>
                    <strong><?php echo $_smarty_tpl->tpl_vars['cart']->value->amount;
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>
</strong>
                  </p>
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">
                  <?php if (isset($_smarty_tpl->tpl_vars['label_delivery_costs']->value)&&(strlen($_smarty_tpl->tpl_vars['label_delivery_costs']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_delivery_costs']->value;
} else { ?>Náklady na doručenie<?php }?>
                </label>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                  <p>
                    <strong><?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value;
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>
</strong>
                  </p>
                </div><!-- end col -->
              </div><!-- end form-group -->
              <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 total-price">
                <strong>
                  <?php if (isset($_smarty_tpl->tpl_vars['label_order_total_pay']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_total_pay']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_total_pay']->value;
} else { ?>Na úhradu spolu<?php }?>:
                  &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['total']->value;
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                </strong>
              </p>
              <div class="form-group">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                  <label>
                    <?php if (isset($_smarty_tpl->tpl_vars['label_order_description']->value)&&(strlen($_smarty_tpl->tpl_vars['label_order_description']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_order_description']->value;
} else { ?>Poznámka<?php }?>
                  </label>
                  <textarea name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_notice" class="form-control" style="height:100px;"></textarea>
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group sales-conditions">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-radio">
                  <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_vop" value="1" required>
                </div><!-- end col -->
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 col-data">
                  <a href="obchodne-podmienky" target="_blank" class="text-law">
                    <?php if (isset($_smarty_tpl->tpl_vars['text_general_business_conditions']->value)&&(strlen($_smarty_tpl->tpl_vars['text_general_business_conditions']->value)>0)) {?>
                      <?php echo $_smarty_tpl->tpl_vars['text_general_business_conditions']->value;?>

                    <?php } else { ?>
                      Oboznámil som sa so Všeobecnými obchodnými podmienkami a súhlasím s nimi.
                    <?php }?>
                  </a> 
                </div><!-- end col -->
              </div><!-- end form-group -->
            </div><!-- end col -->
         </div><!-- end row -->
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="order-info pull-left summary">
                <?php if ($_smarty_tpl->tpl_vars['enabledDeliveryDiscount']->value==true) {?>
                  <div class="delivery-discount">
                    <p id="h-d-f-c" style="<?php if ($_smarty_tpl->tpl_vars['deliveryDiscount']->value->is_discount==true) {?>display:block;<?php } else { ?>display:none;<?php }?>">
                      <?php if (isset($_smarty_tpl->tpl_vars['label_delivery_free']->value)&&(strlen($_smarty_tpl->tpl_vars['label_delivery_free']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_delivery_free']->value;
} else { ?>MÁTE DOPRAVU ZDARMA<?php }?>
                    </p>
                    <p id="discount" style="<?php if ($_smarty_tpl->tpl_vars['deliveryDiscount']->value->is_discount==false) {?>display:block;<?php } else { ?>display:none;<?php }?>">
                      <?php if (isset($_smarty_tpl->tpl_vars['label_q_free_delivery']->value)&&(strlen($_smarty_tpl->tpl_vars['label_q_free_delivery']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_q_free_delivery']->value;
} else { ?>DOPRAVU ZDARMA<?php }?>?
                      <span>
                        <?php if (isset($_smarty_tpl->tpl_vars['label_info_free_delivery']->value)&&(strlen($_smarty_tpl->tpl_vars['label_info_free_delivery']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_info_free_delivery']->value;
} else { ?>Nakúpte ešte za<?php }?>:
                      </span>
                      <span class="diff"><?php echo $_smarty_tpl->tpl_vars['deliveryDiscount']->value->diff_price;
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>
</span>
                    </p>
                  </div>
                <?php }?>
              </div><!-- order-info -->
            </div><!-- end col -->
         </div><!-- end row -->
         <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="order-actions btn-group" role="group">
              <a href="objednavka/adresar" class="btn btn-back text-uppercase">
                <i class="fa fa-reply"></i>
                <?php if (isset($_smarty_tpl->tpl_vars['label_back']->value)&&(strlen($_smarty_tpl->tpl_vars['label_back']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_back']->value;
} else { ?>Späť<?php }?>
              </a>
              <button type="submit" class="btn btn-order text-uppercase" data-toggle="tooltip" data-placement="top" title="<?php if (isset($_smarty_tpl->tpl_vars['text_mandatory_order']->value)&&(strlen($_smarty_tpl->tpl_vars['text_mandatory_order']->value)>0)) {
echo $_smarty_tpl->tpl_vars['text_mandatory_order']->value;
} else { ?>Späť<?php }?>Záväzne objednať s povinnosťou platby">
                <?php if (isset($_smarty_tpl->tpl_vars['btn_order']->value)&&(strlen($_smarty_tpl->tpl_vars['btn_order']->value)>0)) {
echo $_smarty_tpl->tpl_vars['btn_order']->value;
} else { ?>Späť<?php }?>Objednať&nbsp;
                <i class="fa fa-check-circle"></i>
              </button>
            </div><!-- order-actions -->
          </div><!-- end col -->
         </div><!-- end row -->
        </form>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="text-law text-justify" style="margin-top: 30px;">
              <?php if (isset($_smarty_tpl->tpl_vars['text_order_law']->value)&&(strlen($_smarty_tpl->tpl_vars['text_order_law']->value)>0)) {?>
                <?php echo $_smarty_tpl->tpl_vars['text_order_law']->value;?>

              <?php } else { ?>
                Podmienky obsahujú aj vyžadované predzmluvné informácie
                ohľadom prevádzkovateľa internetového obchodu, tovaru, 
                dodacích a platobných podmienok, práva na odstúpenie od zmluvy, 
                záručných podmienok, postupe pri uplatňovaní reklamácií,
                ochrany osobných údajov a ostatné informácie 
                v súlade s § 3 zákona 102/2014 Z.z. 
                a v súlade s ustanoveniami zákona 122/2013 Z.z.
              <?php }?>
            </p>
          </div><!-- end col -->
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
                    <?php if (isset($_smarty_tpl->tpl_vars['title_follow_us']->value)&&(strlen($_smarty_tpl->tpl_vars['title_follow_us']->value)>0)) {
echo $_smarty_tpl->tpl_vars['title_follow_us']->value;
} else { ?>Sledujte nás<?php }?>
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
                      <span>
                        <?php if (isset($_smarty_tpl->tpl_vars['label_subscribe_newsletter']->value)&&(strlen($_smarty_tpl->tpl_vars['label_subscribe_newsletter']->value)>0)) {
echo $_smarty_tpl->tpl_vars['label_subscribe_newsletter']->value;
} else { ?>Chcete odoberať Newsletter?<?php }?>
                      </span>
                    </div><!-- end block-title -->
                    <form class="form-newsletter">
                      <div class="block-content">
                        <div class="form-subscribe-header">
                          <div class="input-box">
                            <input type="text" 
                              name="mce" 
                              placeholder="<?php if (isset($_smarty_tpl->tpl_vars['input_placeholder_email']->value)&&(strlen($_smarty_tpl->tpl_vars['input_placeholder_email']->value)>0)) {
echo $_smarty_tpl->tpl_vars['input_placeholder_email']->value;
} else { ?>Vložte Vašu e-mailovú adresu<?php }?>" 
                              class="input-text" 
                              required
                            >
                          </div><!-- end input-box -->
                          <div class="actions">
                            <button type="button" class="button">
                              <span>
                                <?php if (isset($_smarty_tpl->tpl_vars['form_submit_newsletter']->value)&&(strlen($_smarty_tpl->tpl_vars['form_submit_newsletter']->value)>0)) {
echo $_smarty_tpl->tpl_vars['form_submit_newsletter']->value;
} else { ?>Áno, súhlasím<?php }?>
                              <span>
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
>
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip();
});
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
