<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-19 17:58:25
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/slider/slider_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8164411595880f03177b7f4-78511516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b19d87fcd87284984f59af799b50e79a4de9d4e8' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/slider/slider_list.tpl',
      1 => 1469707235,
      2 => 'file',
    ),
    '2348aeb5e8989dd42b1116d7d8b299e32f80f818' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1474392201,
      2 => 'file',
    ),
    'bc141a49c252a4eeea1dde78a0f97783d71068f6' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1469707230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8164411595880f03177b7f4-78511516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseUrl' => 0,
    'defaultLanguage' => 0,
    'global_section_home' => 0,
    'global_section_dashboard' => 0,
    'global_button_sign_out' => 0,
    'global_button_yes' => 0,
    'global_button_no' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5880f031ecb944_22005933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5880f031ecb944_22005933')) {function content_5880f031ecb944_22005933($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
    <head>
        <base href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
" />
        <!-- META SECTION -->
        <title>Cpanel</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" href="extensions/cpanel/css/theme-default.css"/>
        <link type="text/css" rel="stylesheet" href="extensions/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="extensions/bootstrap-flags/css/flag-icon.min.css"/>
        <link rel="stylesheet" type="text/css" href="extensions/cpanel/js/plugins/jquery-ui/jquery-ui.css"/>
        <link rel="stylesheet" type="text/css" href="extensions/cpanel/js/plugins/jquery-ui/jquery-ui.structure.css"/>
        <link rel="stylesheet" type="text/css" href="extensions/cpanel/js/plugins/jquery-ui/jquery-ui.theme.css"/>
        
<style>
.badge {
  position: relative;
  top: -2px;
  left: 5px;
}
.xt {
  position: relative;
  top: -1px;
  margin-top: 0px;
  padding: 4px 10px;
  min-width: 29px;
  height: 29px;
  max-height: 29px;
  font-size: 17px;
  font-weight: 400;
  line-height: 19px;
  overflow: hidden;
}
</style>

        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                
<ul class="x-navigation" style="margin-bottom:98px;">
  <li class="xn-logo">
    <a href="cpanel">
      <img src="extensions/cpanel/img/mozayc.png" style="display: block;width: auto;height: 48px;margin: 0 auto;"/>
    </a>
    <a href="#" onclick="return false;" class="x-navigation-control"><!-- --></a>
  </li>
  <li class="xn-profile">
    <a href="cpanel" class="profile-mini">
      <img src="extensions/cpanel/assets/images/users/schuler.png" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
">
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="extensions/cpanel/assets/images/users/schuler.png" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
">
      </div>
      <div class="profile-data">
        <div class="profile-data-name"><?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
</div>
      </div>
    </div>                                                                        
  </li>
  <li>
    <a href="cpanel" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_dashboard']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_dashboard']->value;
} else { ?>Dashboard<?php }?>">
      <i class="fa fa-dashboard"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_dashboard']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_dashboard']->value;
} else { ?>Dashboard<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/site-structure" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_site']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_site']->value;
} else { ?>Site Structure<?php }?>">
      <i class="fa fa-sitemap"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_site']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_site']->value;
} else { ?>Site Structure<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/page-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages']->value;
} else { ?>Pages<?php }?>">
      <i class="fa fa-file-text-o"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages']->value;
} else { ?>Pages<?php }?>
      </span>
    </a>                        
  </li>
  <li class="xn-openable" style="display:none;visibility: hidden !important;">
    <a href="cpanel/cpanel/catalog" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog']->value;
} else { ?>Catalog<?php }?>">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog']->value;
} else { ?>Catalog<?php }?>
      </span>
    </a>
    <ul>
      <li>
        <a href="cpanel/catalog" title="Catalog - Overview">
          <i class="fa fa-eye"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog_sub_overview']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog_sub_overview']->value;
} else { ?>Overview<?php }?>
        </a>
      </li>
      <li>
        <a href="cpanel/catalog/create-article-form" title="Catalog - New article">
          <i class="fa fa-plus"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog_sub_new_article']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog_sub_new_article']->value;
} else { ?>New article<?php }?>
        </a>
      </li>
      <li>
        <a href="cpanel/catalog/categories" title="Catalog - Manage categories">
          <i class="fa fa-info"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog_sub_manage_categories']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog_sub_manage_categories']->value;
} else { ?>Manage categories<?php }?>
        </a>
      </li>
      <li>
        <a href="cpanel/catalog/attributes" title="Catalog - Manage attributes">
          <i class="fa fa-tag"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog_sub_manage_attributes']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog_sub_manage_attributes']->value;
} else { ?>Manage attributes<?php }?>
        </a>
      </li>
    </ul>
  </li>
  <li>
    <a href="cpanel/my-drive" title="M<?php if (!empty($_smarty_tpl->tpl_vars['global_section_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_drive']->value;
} else { ?>My Drive<?php }?>">
      <i class="fa fa-hdd-o"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_drive']->value;
} else { ?>My Drive<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/slider-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_slider']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_slider']->value;
} else { ?>Slider<?php }?>">
      <i class="fa fa-camera"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_slider']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_slider']->value;
} else { ?>Slider<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/gallery-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_gallery']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_gallery']->value;
} else { ?>Gallery<?php }?>">
      <i class="fa fa-picture-o"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_gallery']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_gallery']->value;
} else { ?>Gallery<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/language-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_languages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_languages']->value;
} else { ?>Languages<?php }?>">
      <i class="glyphicon glyphicon-globe"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_languages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_languages']->value;
} else { ?>Languages<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/dictionary-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_dictionary']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_dictionary']->value;
} else { ?>Dictionary<?php }?>">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_dictionary']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_dictionary']->value;
} else { ?>Dictionary<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/seo-redirect-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_']->value;
} else { ?>SEO REDIRECT<?php }?>">
      <i class="fa fa-link"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_']->value;
} else { ?>SEO Redirect<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/translate" title="Preklady">
      <i class="fa fa-table" aria-hidden="true"></i>
      <span class="xn-text">
        Preklady
      </span>
    </a>                        
  </li>
  <li data-menu-item="users">
    <a href="cpanel/store/users" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_users']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_users']->value;
} else { ?>User<?php }?>">
      <i class="fa fa-users"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_users']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_users']->value;
} else { ?>Users<?php }?>
    </a>
  </li>
  <li data-menu-item="carts">
    <a href="cpanel/store/carts" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_carts']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_carts']->value;
} else { ?>Carts<?php }?>">
      <i class="fa fa-shopping-cart"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_carts']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_carts']->value;
} else { ?>Carts<?php }?>
    </a>
  </li>
  <li class="xn-openable" data-menu-item="orders">
    <a href="cpanel/store/orders" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_orders']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_orders']->value;
} else { ?>Orders<?php }?>">
      <i class="fa fa-clipboard"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_orders']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_orders']->value;
} else { ?>Orders<?php }?>
    </a>
    <ul>
      <li data-menu-item="list">
        <a href="cpanel/store/orders" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_']->value;
} else { ?>List<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_section_']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_']->value;
} else { ?>Prehľad<?php }?>
        </a>
      </li>
      <li data-menu-item="management">
        <a href="cpanel/store/orders/management/short" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_']->value;
} else { ?>Management<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_']->value;
} else { ?>Správa<?php }?>
        </a>
      </li>
    </ul>
  </li>
  <li class="xn-openable" data-menu-item="catalog">
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_catalog']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_catalog']->value;
} else { ?>Catalog<?php }?>">
      <span class="fa fa-book"></span>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_catalog']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_catalog']->value;
} else { ?>Catalog<?php }?>
    </a>
    <ul>
      <li data-menu-item="articles">
        <a href="cpanel/store/catalog/articles/short" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_articles']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_articles']->value;
} else { ?>Articles<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_articles']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_articles']->value;
} else { ?>Articles<?php }?>
        </a>
      </li>
      <li data-menu-item="store-category-list">
        <a href="cpanel/store-category-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_categories']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_categories']->value;
} else { ?>Categories<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_categories']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_categories']->value;
} else { ?>Categories<?php }?>
        </a>
      </li>
      <li data-menu-item="store-attribute-list">
        <a href="cpanel/store-attribute-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_attributes']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_attributes']->value;
} else { ?>Attributes<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_attributes']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_attributes']->value;
} else { ?>Attributes<?php }?>
        </a>
      </li>
      <li data-menu-item="ordering">
        <a href="cpanel/store/catalog/ordering" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_ordering']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_ordering']->value;
} else { ?>Ordering<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_ordering']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_ordering']->value;
} else { ?>Ordering<?php }?>
        </a>
      </li>
    </ul>
  </li>
  <li data-menu-item="thumbnail">
    <a href="cpanel/thumbnail" title="<?php if (isset($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)&&(strlen($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)>0)) {
echo $_smarty_tpl->tpl_vars['store_section_thumbnail']->value;
} else { ?>Thumbnail<?php }?>">
      <i class="fa fa-picture-o" aria-hidden="true"></i>
      <?php if (isset($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)&&(strlen($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)>0)) {
echo $_smarty_tpl->tpl_vars['store_section_thumbnail']->value;
} else { ?>Thumbnail<?php }?>
    </a>
  </li>
  <li data-menu-item="warehouse">
    <a href="cpanel/store-warehouse-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_warehouses']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_warehouses']->value;
} else { ?>Warehouses<?php }?>">
      <i class="fa fa-database"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_warehouses']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_warehouses']->value;
} else { ?>Warehouses<?php }?>
    </a>
  </li>
  <li data-menu-item="statuses">
    <a href="cpanel/store/statuses" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_statuses']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_statuses']->value;
} else { ?>Statuses<?php }?>">
      <i class="fa fa-heartbeat"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_statuses']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_statuses']->value;
} else { ?>Statuses<?php }?>
    </a>
  </li>
  <li class="xn-openable" data-menu-item="delivery-payment">
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_delivery_payment']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_delivery_payment']->value;
} else { ?>Delivery / Payment<?php }?>">
      <i class="fa fa-pencil-square"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_delivery_payment']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_delivery_payment']->value;
} else { ?>Delivery / Payment<?php }?>
    </a>
    <ul>
      <li data-menu-item="delivery">
        <a href="cpanel/store/delivery-payment/delivery" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_delivery']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_delivery']->value;
} else { ?>Delivery<?php }?>">
          <i class="fa fa-truck"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_delivery']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_delivery']->value;
} else { ?>Delivery<?php }?>
        </a>
      </li>
      <li data-menu-item="payment">
        <a href="cpanel/store/delivery-payment/payment" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_payment']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_payment']->value;
} else { ?>Payment<?php }?>">
          <i class="fa fa-usd"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_payment']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_payment']->value;
} else { ?>Payment<?php }?>
        </a>
      </li>
      <li data-menu-item="ties">
        <a href="cpanel/store/delivery-payment/ties" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_ties']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_ties']->value;
} else { ?>Ties<?php }?>">
          <i class="fa fa-exchange"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_ties']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_ties']->value;
} else { ?>Ties<?php }?>
        </a>
      </li>
   </ul>
  </li>
  <li class="xn-openable" data-menu-item="localization">
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_localization']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_localization']->value;
} else { ?>Localization<?php }?>">
      <span class="fa fa-globe"></span>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_localization']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_localization']->value;
} else { ?>Localization<?php }?>
    </a>
    <ul>
      <li data-menu-item="currencies">
        <a href="cpanel/store/localization/currencies" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_currencies']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_currencies']->value;
} else { ?>Currencies<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_currencies']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_currencies']->value;
} else { ?>Currencies<?php }?>
        </a>
      </li>
      <li data-menu-item="taxes">
        <a href="cpanel/store/localization/taxes" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_taxes']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_taxes']->value;
} else { ?>Taxes<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_taxes']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_taxes']->value;
} else { ?>Taxes<?php }?>
        </a>
     </li>
   </ul>
  </li>
  <li data-menu-item="offers">
    <a href="cpanel/store/offers" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_offers']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_offers']->value;
} else { ?>Offers<?php }?>">
      <i class="fa fa-sticky-note-o"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_offers']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_offers']->value;
} else { ?>Offers<?php }?>
    </a>
  </li>
  <li data-menu-item="discount-circuits">
    <a href="cpanel/store-discount-circuit-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_discount_circuits']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_discount_circuits']->value;
} else { ?>Discount circuits<?php }?>">
      <i class="fa fa-circle-o-notch"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_discount_circuits']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_discount_circuits']->value;
} else { ?>Discount circuits<?php }?>
    </a>
  </li>
  <li data-menu-item="email">
    <a href="cpanel/email-list">
      <i class="fa fa-envelope"></i>
      Email
    </a>
  </li>
  <li data-menu-item="store-product-statistics-overview">
    <a href="cpanel/store-product-statistics-overview" title="Product Statistics">
      <i class="fa fa-bar-chart"></i>
      Štatistiky produktov
    </a>
  </li>
  <li style="display: none;">
    <a href="cpanel/manage-users" title="Správa uživateľov">
      <i class="fa fa-users" aria-hidden="true"></i>
      <span class="xn-text">
        Správa uživateľov
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/general-settings" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_settings']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_settings']->value;
} else { ?>General Settings<?php }?>">
      <i class="fa fa-gear"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_settings']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_settings']->value;
} else { ?>General Settings<?php }?>
      </span>
    </a>                        
  </li>
  <?php if ($_smarty_tpl->tpl_vars['user']->value->rule==1) {?>
    <li class="xn-openable">
      <a href="#" onclick="return false;" title="Adminstrator">
        <i class="fa fa-exclamation-triangle"></i>
        <span class="xn-text">Administrátor</span>
      </a>
      <ul>
        <li>
          <a href="cpanel/form-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_form']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_form']->value;
} else { ?>Forms<?php }?>">
            <i class="fa fa-pencil"></i>
            <span class="xn-text">
              <?php if (!empty('global_section_form')) {
echo $_smarty_tpl->tpl_vars['global_section_form']->value;
} else { ?>Forms<?php }?>
            </span>
          </a>                        
        </li>
        <li>
          <a href="#" onclick="return false;" title="Facebook Tool">
            <i class="fa fa-facebook-square"></i>
            <span class="xn-text">
              Facebook Tool
            </span>
          </a>                        
        </li>
        <li>
          <a href="cpanel/activity-timeline" title="Activity Timeline">
            <i class="fa fa-safari"></i>
            <span class="xn-text">
              Activity Timeline
            </span>
          </a>                        
        </li>
        <li>
          <a href="cpanel/router" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_router']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_router']->value;
} else { ?>Router<?php }?>">
            <i class="fa fa-map-signs"></i>
            <span class="xn-text">
              <?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_router']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_router']->value;
} else { ?>Router<?php }?>
            </span>
          </a>                        
        </li>
      </ul>
    </li>
  <?php }?>
</ul>

                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="cpanel" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->                   
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="cpanel" class="mb-control" data-box="#mb-signout" title="Sign Out">
                            <span class="fa fa-power-off"></span>
                        </a>
                        <ul class="xn-drop-left animated zoomIn" style="display:none;visibility: hidden !important;">
                            <li><a href="cpanel" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->                    
                    <!-- LANG BAR -->
                    <li class="xn-icon-button pull-right">
                        <a href="cpanel" style="height: 50px;padding: 11px 0;" title="<?php if ($_smarty_tpl->tpl_vars['defaultLanguage']->value==51) {?>English<?php } else { ?>Slovak<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['defaultLanguage']->value==51) {?>
                                <span class="flag-icon flag-icon-gb" style="width:18px;height:18px;"></span>
                            <?php } else { ?>
                                <span class="flag-icon flag-icon-sk" style="width:18px;height:18px;"></span>
                            <?php }?>
                        </a>
                        <ul class="xn-drop-left xn-drop-white animated zoomIn">
                            <li>
                                <a href="cpanel/set-lang/51" title="English">
                                    <span class="flag-icon flag-icon-gb" style="width:18px;height:18px;"></span>
                                    <span style="position:relative;top:3px;left:3px;">English</span>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/set-lang/189" title="Slovak">
                                    <span class="flag-icon flag-icon-sk" style="width:18px;height:18px;"></span>
                                    <span style="position:relative;top:3px;left:3px;">Slovak</span>
                                </a>
                            </li>
                        </ul>                        
                    </li> 
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li>
                        <a href="cpanel" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_home']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_home']->value;
} else { ?>Home<?php }?>">
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_section_home']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_home']->value;
} else { ?>Home<?php }?>
                        </a>
                    </li>
                    
<li class="active">
  <a href="cpanel/slider-list">
    <?php if (isset($_smarty_tpl->tpl_vars['global_section_slider']->value)&&(strlen($_smarty_tpl->tpl_vars['global_section_slider']->value)>0)) {
echo $_smarty_tpl->tpl_vars['global_section_slider']->value;
} else { ?>Slider<?php }?>
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
  <h2>
    <span class="fa fa-camera"></span>&nbsp;
    <?php if (isset($_smarty_tpl->tpl_vars['global_section_slider']->value)&&(strlen($_smarty_tpl->tpl_vars['global_section_slider']->value)>0)) {
echo $_smarty_tpl->tpl_vars['global_section_slider']->value;
} else { ?>Slider<?php }?>
    &nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
  </h2>
</div><!-- end page-title -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form action="cpanel/create-slider" method="post" role="form">
      <div class="panel panel-default panel-toggled">
        <div class="panel-heading">                                
          <h3 class="panel-title">
            <?php if (isset($_smarty_tpl->tpl_vars['global_slider_panel_create_slider_title']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_panel_create_slider_title']->value)>0)) {?>
              <?php echo $_smarty_tpl->tpl_vars['global_slider_panel_create_slider_title']->value;?>

            <?php } else { ?>
              Create slider
            <?php }?>
          </h3>  
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-up"></span></a></li>
          </ul>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <h4 style="border-bottom:1px solid blue;">
                <?php if (isset($_smarty_tpl->tpl_vars['global_form_header_general']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_header_general']->value)>0)) {?>
                  <?php echo $_smarty_tpl->tpl_vars['global_form_header_general']->value;?>

                <?php } else { ?>
                  General information
                <?php }?>
              </h4>
              <div class="form-group">
                <label>
                  <?php if (isset($_smarty_tpl->tpl_vars['global_slider_form_label_slider_name']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_form_label_slider_name']->value)>0)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['global_slider_form_label_slider_name']->value;?>

                  <?php } else { ?>
                    Slider name
                  <?php }?>
                </label>
                <input type="text" name="name" value="" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['global_slider_form_label_slider_name']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_form_label_slider_name']->value)>0)) {
echo $_smarty_tpl->tpl_vars['global_slider_form_label_slider_name']->value;
} else { ?>Slider name<?php }?>" class="form-control" required>
              </div><!-- end form-group -->
              <div class="form-group">
                <label>
                  <?php if (isset($_smarty_tpl->tpl_vars['global_slider_form_label_page_list']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_form_label_page_list']->value)>0)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['global_slider_form_label_page_list']->value;?>

                  <?php } else { ?>
                    Page list
                  <?php }?>
                </label>                                       
                <select name="page-id" class="form-control select" data-live-search="true">
                  <option value="0">
                    <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                      <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                    <?php } else { ?>
                      Choose...
                    <?php }?>
                  </option>
                  <?php if (isset($_smarty_tpl->tpl_vars['pageList']->value)&&(is_array($_smarty_tpl->tpl_vars['pageList']->value)&&(count($_smarty_tpl->tpl_vars['pageList']->value)>0))) {?>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_page;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->pagename;?>

                      </option>
                    <?php } ?>
                  <?php }?>
                </select>
              </div><!-- end form-group -->
            </div><!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <h4 style="border-bottom:1px solid #33414e;">
                <?php if (isset($_smarty_tpl->tpl_vars['global_form_header_settings']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_header_settings']->value)>0)) {?>
                  <?php echo $_smarty_tpl->tpl_vars['global_form_header_settings']->value;?>

                <?php } else { ?>
                  Settings
                <?php }?>
              </h4>
              <div class="form-group pull-left" style="margin-right:20px;">
                <label>
                  <?php if (isset($_smarty_tpl->tpl_vars['global_slider_form_label_use_captions']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_form_label_use_captions']->value)>0)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['global_slider_form_label_use_captions']->value;?>

                  <?php } else { ?>
                    Use captions
                  <?php }?>
                </label><br>                                  
                <label class="switch">
                  <input type="checkbox" name="use-cations" value="1">
                  <span></span>
                </label>
              </div><!-- end form-group -->
              <div class="form-group pull-left">
                <label>
                  <?php if (isset($_smarty_tpl->tpl_vars['global_slider_form_label_publish']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_form_label_publish']->value)>0)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['global_slider_form_label_publish']->value;?>

                  <?php } else { ?>
                    Publish
                  <?php }?>
                </label><br>                                    
                <label class="switch">
                  <input type="checkbox" name="publish" value="1">
                  <span></span>
                </label>
              </div><!-- end form-group -->
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end panel-body -->
        <div class="panel-footer">                                 
          <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i>&nbsp;
            <?php if (isset($_smarty_tpl->tpl_vars['global_form_button_create']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_button_create']->value)>0)) {?>
              <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');?>

            <?php } else { ?>
              CREATE
            <?php }?>
          </button>
        </div><!-- end panel-footer -->
      </div><!-- end panel -->
    </form>
  </div><!-- end col -->
</div><!-- end row -->
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <?php if (isset($_smarty_tpl->tpl_vars['sliderList']->value)&&(is_array($_smarty_tpl->tpl_vars['sliderList']->value)&&(count($_smarty_tpl->tpl_vars['sliderList']->value)>0))) {?>
      <form action="cpanel/update-sliders" method="post" role="form">
        <div class="panel panel-default">
          <div class="panel-heading">
            <span class="btn btn-info pull-left xt">
              <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

            </span><!-- end xt -->
            <h3 class="panel-title">
              <?php if (isset($_smarty_tpl->tpl_vars['global_slider_panel_slider_list_title']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_panel_slider_list_title']->value)>0)) {?>
                <?php echo $_smarty_tpl->tpl_vars['global_slider_panel_slider_list_title']->value;?>

              <?php } else { ?>
                Slider list
              <?php }?>
              &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
</span>
            </h3>  
            <ul class="panel-controls">
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            </ul>
          </div><!-- end panel-heading -->
          <div class="panel-body panel-body-table">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                  <select class="form-control select" onchange="location = 'cpanel/slider-list/1/'+this.options[this.selectedIndex].value<?php if (isset($_smarty_tpl->tpl_vars['keywords']->value)&&(strlen($_smarty_tpl->tpl_vars['keywords']->value)>0)) {?>+'?q=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
'<?php }?>;">
                    <option value="10" <?php if ($_smarty_tpl->tpl_vars['limit']->value==10) {?>selected<?php }?>>10</option>
                    <option value="20" <?php if ($_smarty_tpl->tpl_vars['limit']->value==20) {?>selected<?php }?>>20</option>
                    <option value="50" <?php if ($_smarty_tpl->tpl_vars['limit']->value==50) {?>selected<?php }?>>50</option>
                    <option value="100" <?php if ($_smarty_tpl->tpl_vars['limit']->value==100) {?>selected<?php }?>>100</option>
                    <option value="200" <?php if ($_smarty_tpl->tpl_vars['limit']->value==200) {?>selected<?php }?>>200</option>
                    <option value="500" <?php if ($_smarty_tpl->tpl_vars['limit']->value==500) {?>selected<?php }?>>500</option>
                  </select>
                </div><!-- end form-group -->
                <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                  <div class="input-group">
                    <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" onclick="location = 'cpanel/slider-list/1/20?q='+document.getElementById('search').value;" class="btn btn-default">
                        <i class="fa fa-search"></i>
                      </button>
                    </span><!-- end input-group-btn -->
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

              </div><!-- end col -->
            </div><!-- end row -->                        
            <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
              <table class="table table-bordered table-striped table-actions">
                <thead>
                  <tr>
                    <th width="30" class="text-center">
                      #
                    </th>
                    <th class="text-left">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_slider_table_header_container_name']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_table_header_container_name']->value)>0)) {?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_slider_table_header_container_name']->value, 'UTF-8');?>

                      <?php } else { ?>
                        CONTAINER NAME
                      <?php }?>
                    </th>
                    <th class="text-left">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_slider_table_header_page_name']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_table_header_page_name']->value)>0)) {?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_slider_table_header_page_name']->value, 'UTF-8');?>

                      <?php } else { ?>
                        PAGE NAME
                      <?php }?>
                    </th>
                    <th width="250" class="text-center">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_slider_table_header_creator']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_table_header_creator']->value)>0)) {?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_slider_table_header_creator']->value, 'UTF-8');?>

                      <?php } else { ?>
                        CREATOR
                      <?php }?>
                    </th>
                    <th width="100" class="text-center">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_slider_table_header_created']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_table_header_created']->value)>0)) {?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_slider_table_header_created']->value, 'UTF-8');?>

                      <?php } else { ?>
                        CREATED
                      <?php }?>
                    </th>
                    <th width="100" class="text-center">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_slider_table_header_edit']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_table_header_edit']->value)>0)) {?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_slider_table_header_edit']->value, 'UTF-8');?>

                      <?php } else { ?>
                        EDIT
                      <?php }?>
                    </th>
                    <th width="100" class="text-center">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_slider_table_header_publish']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_table_header_publish']->value)>0)) {?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_slider_table_header_publish']->value, 'UTF-8');?>

                      <?php } else { ?>
                        PUBLISH
                      <?php }?>
                    </th>
                    <th width="100" class="text-center">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_slider_table_header_remove']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_table_header_remove']->value)>0)) {?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_slider_table_header_remove']->value, 'UTF-8');?>

                      <?php } else { ?>
                        REMOVE
                      <?php }?>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sliderList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="sliders[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['slider-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_slider;?>
" />
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->id_slider;?>

                      </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->slider_name;?>

                      </td>
                      <td <?php if (isset($_smarty_tpl->tpl_vars['item']->value->pagename)&&(strlen($_smarty_tpl->tpl_vars['item']->value->pagename)>0)) {?>class="text-left"<?php } else { ?>class="text-center"<?php }?>>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value->pagename)&&(strlen($_smarty_tpl->tpl_vars['item']->value->pagename)>0)) {?>
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->pagename;?>

                        <?php } else { ?>
                          <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                        <?php }?>
                      </td>
                      <td class="text-left">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->last_name;?>

                      </td>
                      <td class="text-center">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->created,"%d-%m-%Y");?>

                      </td>
                      <td class="text-center">
                        <a href="cpanel/slider-edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_slider;?>
" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->slider_name;?>
">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="sliders[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['publish']" <?php if ($_smarty_tpl->tpl_vars['item']->value->publish==1) {?>checked=""<?php }?> value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="sliders[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div><!-- end table-responsive -->    
          </div><!-- end panel-body -->
          <div class="panel-footer">
            <button type="submit" class="btn btn-success" role="button">
              <i class="fa fa-save"></i>&nbsp;
              <?php if (isset($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)>0)) {?>
                <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');?>

              <?php } else { ?>
                SAVE CHANGES
              <?php }?>
            </button>
          </div><!-- end panel-footer -->
        </div><!-- end panel -->
      </form>
    <?php } else { ?>
      <div class="alert alert-info" role="alert">
        <strong>
          <?php if (isset($_smarty_tpl->tpl_vars['global_alert_info']->value)&&(strlen($_smarty_tpl->tpl_vars['global_alert_info']->value)>0)) {?>
            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');?>

          <?php } else { ?>
            INFO
          <?php }?>!
        </strong>
        <?php if (isset($_smarty_tpl->tpl_vars['global_slider_alert_no_sliders']->value)&&(strlen($_smarty_tpl->tpl_vars['global_slider_alert_no_sliders']->value)>0)) {?>
          <?php echo $_smarty_tpl->tpl_vars['global_slider_alert_no_sliders']->value;?>

        <?php } else { ?>
          There are no sliders.
        <?php }?>
      </div><!-- end alert -->
    <?php }?>
  </div><!-- end col -->
</div><!-- end row -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span><?php if (!empty($_smarty_tpl->tpl_vars['global_button_sign_out']->value)) {
echo $_smarty_tpl->tpl_vars['global_button_sign_out']->value;
} else { ?>Sign out<?php }?>?</div>
                    <div class="mb-footer">
                        <div class="pull-left">
                            <a href="cpanel/sign/out" class="btn btn-success btn-lg">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_button_yes']->value)) {
echo $_smarty_tpl->tpl_vars['global_button_yes']->value;
} else { ?>Yes<?php }?>
                            </a>
                            <button class="btn btn-default btn-lg mb-control-close">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_button_no']->value)) {
echo $_smarty_tpl->tpl_vars['global_button_no']->value;
} else { ?>No<?php }?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="extensions/cpanel/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="extensions/cpanel/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/jquery-ui/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/bootstrap/js/bootstrap-ckeditor-modal-fix.js"><?php echo '</script'; ?>
>       
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/scrolltotop/scrolltopcontrol.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/owl/owl.carousel.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
        
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/tagsinput/jquery.tagsinput.min.js"><?php echo '</script'; ?>
>

        <!-- END THIS PAGE PLUGINS-->       
        <!-- START TEMPLATE -->
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins.js"><?php echo '</script'; ?>
>        
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/actions.js"><?php echo '</script'; ?>
>
        <!-- END TEMPLATE -->
        <?php echo '<script'; ?>
 type="text/javascript">
          $(function() {
              var parameters = window.location.href.substr(1).split('/');

              for( var i=0; i < parameters.length; i++) {
                  $('ul.x-navigation').find('li').each(function() {
                      if($(this).data('menu-item') == parameters[i]) {
                          $(this).addClass('active');
                      }
                  });
              }
          });
        <?php echo '</script'; ?>
>
    <!-- END SCRIPTS -->         
    </body>
</html><?php }} ?>
