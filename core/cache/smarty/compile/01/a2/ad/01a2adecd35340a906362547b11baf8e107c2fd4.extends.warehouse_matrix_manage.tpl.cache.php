<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-30 09:33:16
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_matrix_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1187061576588efa4c203556-53214415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc59221af60791d58ae00f7daedc5f1e78fbf1fc' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_matrix_manage.tpl',
      1 => 1469707253,
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
  'nocache_hash' => '1187061576588efa4c203556-53214415',
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
  'unifunc' => 'content_588efa4cc293b1_65598021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588efa4cc293b1_65598021')) {function content_588efa4cc293b1_65598021($_smarty_tpl) {?><!DOCTYPE html>
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
#msA {
  display: none;
  font-size: 1.5em;
  font-weight: 700;
}
#MPA table > tbody > tr > td,
#MPB table > tbody > tr > td {
  cursor:row-resize;
}
.tags {
  margin: 9px auto;
}
.label-info {
  background: #000;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: .9em;
  font-weight: bold;
  line-height: 1;
  color: #ffffff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
.agc {
  background: #000;
  display: block;
  width: 30px;
  height: 30px;
  color: #fff;
  font-size: 2em;
  padding-top: .12em;
  line-height: 100%;
  border-radius: 100%;
}
.circle {
  background: #fff;
  display: block;
  width: 25px;
  height: 25px;
  margin: 0 auto;
  padding: 7px;
  border: 1px solid #333;
  border-radius: 100%;
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
                    
<li>
  <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_store']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_store']->value;
} else { ?>Store<?php }?>">
    <?php if (!empty($_smarty_tpl->tpl_vars['store_section_store']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_store']->value;
} else { ?>Store<?php }?>
  </a>
</li>
<li>
  <a href="cpanel/store-warehouse-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_warehouses']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_warehouses']->value;
} else { ?>Warehouses<?php }?>">
    <?php if (!empty($_smarty_tpl->tpl_vars['store_section_warehouses']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_warehouses']->value;
} else { ?>Warehouses<?php }?>
  </a>
</li>
<li>
  <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_manage']->value)) {
echo $_smarty_tpl->tpl_vars['store_warehouse_manage']->value;
} else { ?>WAREHOUSE MANAGE<?php }?>">
    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_manage']->value)) {
echo $_smarty_tpl->tpl_vars['store_warehouse_manage']->value;
} else { ?>WAREHOUSE MANAGE<?php }?>
  </a>
</li>
<li>
  <a href="cpanel/store-warehouse-manage/<?php echo $_smarty_tpl->tpl_vars['data']->value->secure_key;?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
">
    <?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>

  </a>
</li>
<li>
  <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_matrix_manage']->value)) {
echo $_smarty_tpl->tpl_vars['store_warehouse_matrix_manage']->value;
} else { ?>WAREHOUSE - PRODUCT MATRIX<?php }?>">
    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_matrix_manage']->value)) {
echo $_smarty_tpl->tpl_vars['store_warehouse_matrix_manage']->value;
} else { ?>WAREHOUSE - PRODUCT MATRIX<?php }?>
  </a>
</li>
<li class="active">
  <a href="cpanel/store-warehouse-matrix-manage/<?php echo $_smarty_tpl->tpl_vars['matrix']->value->secure_key;?>
" title="MATRICA <?php echo $_smarty_tpl->tpl_vars['article']->value->article_name_internal;?>
">
    MATRICA&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value->article_name_internal;?>

  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">
  <h2>
    <i class="fa fa-database"></i>&nbsp;
    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_matrix_manage']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_matrix_manage']->value, 'UTF-8');
} else { ?>WAREHOUSE - PRODUCT MATRIX<?php }?>&nbsp;
    <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
  </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
  <!-- WAREHOUSE MATRIX MANAGE TITLE -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-colorful">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <strong>MATRICA</strong>&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value->article_name_internal;?>

        </h3>
        <ul class="panel-controls">
          <li>
            <a href="#" onclick="return false;" style="background: #b64645 !important;color: #fff;border-color: #b64645;" data-toggle="modal" data-target="#delWHM" title="DELETA MATRIX">
              <i class="fa fa-exclamation-triangle"></i>
            </a>
          </li>
          <li>
            <a href="cpanel/store-warehouse-matrix-qty/<?php echo $_smarty_tpl->tpl_vars['matrix']->value->secure_key;?>
" style="background: #3fbae4 !important;color: #fff;border-color: #3fbae4;" title="MATRICA MNOŽSTVÁ - <?php echo $_smarty_tpl->tpl_vars['article']->value->article_name_internal;?>
">
              <i class="fa fa-table"></i>
            </a>
          </li>
          <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
        </ul>
      </div><!-- end panel-header -->
    </div><!-- end panel -->
  </div><!-- end col -->
  <!-- //-- WAREHOUSE MATRIX MANAGE TITLE -->
  
  <!-- WAREHOUSE MATRIX MANAGE AJAX MESSENGER -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="msA" class="alert alert-info text-center" role="alert">
      <?php if (!empty($_smarty_tpl->tpl_vars['global_info_processing_please_wait']->value)) {
echo $_smarty_tpl->tpl_vars['global_info_processing_please_wait']->value;
} else { ?>Processing, please wait ...<?php }?>
    </div>
  </div><!-- end col -->
  <!-- WAREHOUSE MATRIX MANAGE AJAX MESSENGER -->
</div><!-- end row -->
<div id="wmrts" class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <form action="cpanel/store-warehouse-matrix-update-par-x-vs" method="post" role="form">
      <input type="hidden" name="matrix-id" value="<?php echo $_smarty_tpl->tpl_vars['matrix']->value->id_matrix;?>
" />
      <div class="panel panel-primary">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <i class="fa fa-cogs"></i>&nbsp;
            PARAMETER - A
          </h3>
          <ul class="panel-controls">
            <?php if (isset($_smarty_tpl->tpl_vars['matrix']->value->parA->list)&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parA->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parA->list)>0))) {?>
              <li>
                <a href="#" onclick="return false;" style="background: #222 !important;color: #fff;border-color: #222;" title="">
                  <?php echo count($_smarty_tpl->tpl_vars['matrix']->value->parA->list);?>

                </a>
              </li>
            <?php }?>
            <li>
              <a href="#" onclick="return false;" id="parAPopUp">
                <span class="fa fa-plus"></span>
              </a>
            </li>
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div id="MPA" class="panel-body panel-body-table">
          <?php if ((isset($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)&&isset($_smarty_tpl->tpl_vars['matrix']->value->parA->list))&&((is_array($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)>0))&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parA->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parA->list)>0)))) {?>
            <ul class="tags list-inline">
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['matrix']->value->parA->tags; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li>
                  <span class="label label-info" <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->agc)>0) {?>style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->agc;?>
 !important;"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->attr_name;?>

                  </span>
                </li>
              <?php } ?>
            </ul>
            <div class="table-responsive" style="max-height: 690px;border-top: 1px solid #E5E5E5;">
              <table class="table table-bordered table-striped table-actions">
                <thead>
                  <tr>
                    <th width="30" class="text-center">
                      #
                    </th>
                    <th width="50" class="text-center">
                      ID
                    </th>
                    <th width="30" class="text-center">
                      AG
                    </th>
                    <th class="text-center">
                      NÁZOV HODNOTY
                    </th>
                    <th width="30" class="text-center">
                      FARBA
                    </th>
                    <th width="100" class="text-center">
                      NAVÝŠENIE
                    </th>
                    <th width="130" class="text-center">
                      HODNOTA
                    </th>
                    <th width="50" class="text-center">
                      <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matrix']->value->parA->list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <tr>
                      <td class="text-center">
                        <input type="hidden" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['attr-v-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
"/>
                        <input type="checkbox" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['on']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
" class="x-remove">
                      </td>
                      <td class="text-center">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>

                      </td>
                      <td class="text-center">
                        <span class="agc" <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->agc)>0) {?>style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->agc;?>
;"<?php }?>>
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        <strong>
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>

                        </strong>
                      </td>
                      <td class="text-center">
                        <span class="circle" style="background: <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->color)>0) {
echo $_smarty_tpl->tpl_vars['item']->value->color;
} else { ?>#FFF<?php }?>;"><!-- --></span>
                      </td>
                      <td class="text-center">
                        <select name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['cdt']" style="display: inline-block;width: 100%;">
                          <option value="0" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==0) {?>selected<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                          <option value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==1) {?>selected<?php }?>>%</option>
                          <option value="2" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==2) {?>selected<?php }?>>+</option>
                        </select>
                      </td>
                      <td class="text-right">
                        <div class="form-group upd-m-qty pull-left" style="width:100%;">
                          <input type="text" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['cdv']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->cost_difference;?>
" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                        </div><!-- end form-group -->
                      </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-danger push-x" data-attr-v-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div><!-- end table-responsive -->
          <?php } else { ?>
            <div class="alert alert-info" role="alert" style="float:none;width: 98% !important;margin: 15px auto;">
              <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?></strong>
              Kliknutím na tlačidlo so znakom plus pridáte novú hodnotu.
            </div><!-- end alert -->
          <?php }?>
        </div><!-- end panel-body -->
        <?php if ((isset($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)&&isset($_smarty_tpl->tpl_vars['matrix']->value->parA->list))&&((is_array($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)>0))&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parA->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parA->list)>0)))) {?>
          <div class="panel-footer">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-floppy-o"></i>&nbsp;
              <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
            </button>
            <button type="button" id="MPADF" class="btn btn-danger pull-right">
              <i class="fa fa-exclamation-triangle"></i>&nbsp;
              VYMAZAŤ VŠETKO
            </button>
            <button type="button" id="MPADS" class="btn btn-warning pull-right" style="margin-right: 15px;">
              <i class="fa fa-times"></i>&nbsp;
              VYMAZAŤ OZNAČENÉ
            </button>
          </div><!-- end panel-footer -->
        <?php }?>
      </div><!-- end panel -->
    </form>
  </div><!-- end col -->
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <form action="cpanel/store-warehouse-matrix-update-par-x-vs" method="post" role="form">
      <input type="hidden" name="matrix-id" value="<?php echo $_smarty_tpl->tpl_vars['matrix']->value->id_matrix;?>
" />
      <div class="panel panel-primary">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <i class="fa fa-cogs"></i>&nbsp;
            PARAMETER - B
          </h3>
          <ul class="panel-controls">
            <?php if (isset($_smarty_tpl->tpl_vars['matrix']->value->parB->list)&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parB->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parB->list)>0))) {?>
              <li>
                <a href="#" onclick="return false;" style="background: #222 !important;color: #fff;border-color: #222;" title="">
                  <?php echo count($_smarty_tpl->tpl_vars['matrix']->value->parB->list);?>

                </a>
              </li>
            <?php }?>
            <li>
              <a href="#" onclick="return false;" id="parBPopUp">
                <span class="fa fa-plus"></span>
              </a>
            </li>
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div id="MPB" class="panel-body panel-body-table">
          <?php if ((isset($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)&&isset($_smarty_tpl->tpl_vars['matrix']->value->parB->list))&&((is_array($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)>0))&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parB->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parB->list)>0)))) {?>
            <ul class="tags list-inline">
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['matrix']->value->parB->tags; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li>
                  <span class="label label-info" <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->agc)>0) {?>style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->agc;?>
 !important;"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->attr_name;?>

                  </span>
                </li>
              <?php } ?>
            </ul>
            <div class="table-responsive" style="max-height: 690px;border-top: 1px solid #E5E5E5;">
              <table class="table table-bordered table-striped table-actions">
                <thead>
                  <tr>
                    <th width="30" class="text-center">
                      #
                    </th>
                    <th width="50" class="text-center">
                      ID
                    </th>
                    <th width="30" class="text-center">
                      AG
                    </th>
                    <th class="text-center">
                      NÁZOV HODNOTY
                    </th>
                    <th width="30" class="text-center">
                      FARBA
                    </th>
                    <th width="100" class="text-center">
                      NAVÝŠENIE
                    </th>
                    <th width="130" class="text-center">
                      HODNOTA
                    </th>
                    <th width="50" class="text-center">
                      <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matrix']->value->parB->list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <tr>
                      <td class="text-center">
                        <input type="hidden" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['attr-v-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
"/>
                        <input type="checkbox" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['on']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
" class="x-remove x-cb">
                      </td>
                      <td class="text-center">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>

                      </td>
                      <td class="text-center">
                        <span class="agc" <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->agc)>0) {?>style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->agc;?>
;"<?php }?>>
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        <strong>
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>

                        </strong>
                      </td>
                      <td class="text-center">
                        <span class="circle" style="background: <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->color)>0) {
echo $_smarty_tpl->tpl_vars['item']->value->color;
} else { ?>#FFF<?php }?>;"><!-- --></span>
                      </td>
                      <td class="text-center">
                        <select name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['cdt']" style="display: inline-block;width: 100%;">
                          <option value="0" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==0) {?>selected<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                          <option value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==1) {?>selected<?php }?>>%</option>
                          <option value="2" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==2) {?>selected<?php }?>>+</option>
                        </select>
                      </td>
                      <td class="text-right">
                        <div class="form-group upd-m-qty pull-left" style="width:100%;">
                          <input type="text" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['cdv']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->cost_difference;?>
" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                        </div><!-- end form-group -->
                      </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-danger push-x" data-attr-v-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div><!-- end table-responsive -->
          <?php } else { ?>
            <div class="alert alert-info" role="alert" style="float:none;width: 98% !important;margin: 15px auto;">
              <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?></strong>
              Kliknutím na tlačidlo so znakom plus pridáte novú hodnotu.
            </div><!-- end alert -->
          <?php }?>
        </div><!-- end panel-body -->
        <?php if ((isset($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)&&isset($_smarty_tpl->tpl_vars['matrix']->value->parB->list))&&((is_array($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)>0))&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parB->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parB->list)>0)))) {?>
          <div class="panel-footer">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-floppy-o"></i>&nbsp;
              <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
            </button>
            <button type="button" id="MPBDF" class="btn btn-danger pull-right">
              <i class="fa fa-exclamation-triangle"></i>&nbsp;
              VYMAZAŤ VŠETKO
            </button>
            <button type="button" id="MPBDS" class="btn btn-warning pull-right" style="margin-right: 15px;">
              <i class="fa fa-times"></i>&nbsp;
              VYMAZAŤ OZNAČENÉ
            </button>
          </div><!-- end panel-footer -->
        <?php }?>
      </div><!-- end panel -->
    </form>
  </div><!-- end col -->
</div><!-- end row -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW WAREHOUSE PRODUCT MATRIX MANAGE -->
<div class="modal" id="whMatrixModal" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;"><!-- --></div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW WAREHOUSE PRODUCT MATRIX MANAGE -->

<!-- MODAL WINDOW DELETE WAREHOUSE PRODUCT MATRIX -->                       
<div class="modal" id="delWHM" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
      <div class="modal-body" style="background-color:transparent;">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="cpanel/store-warehouse-matrix-delete" method="post" class="form-horizontal" role="form">
              <input type="hidden" name="m-id" value="<?php echo $_smarty_tpl->tpl_vars['matrix']->value->id_matrix;?>
" />
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <strong>
                      <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_delete_forever_title']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_site_modal_window_delete_forever_title']->value, 'UTF-8');
} else { ?>Delete forever?<?php }?>
                    </strong> 
                  </h3>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                  <h4 style="margin: 15px 0;">
                    <strong>
                      <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_delete_forever_message']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_delete_forever_message']->value;
} else { ?>Warning: You can’t undo this action.<?php }?>
                    </strong>
                  </h4>
                </div><!-- end panel-body -->
                <div class="panel-footer">                                 
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-exclamation-triangle"></i>&nbsp;
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_delete_forever']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_delete_forever']->value, 'UTF-8');
} else { ?>DELETE FOREVER<?php }?>
                  </button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                  </button>
                </div>
              </div><!-- end panel -->
            </form>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end modal-body -->
    </div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW DELETE WAREHOUSE PRODUCT MATRIX -->

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
 type="text/javascript" src="extensions/cpanel/js/ext/matrix.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  Matrix.init(<?php echo $_smarty_tpl->tpl_vars['matrix']->value->id_matrix;?>
,'<?php if (!empty($_smarty_tpl->tpl_vars['global_info_processing_please_wait']->value)) {
echo $_smarty_tpl->tpl_vars['global_info_processing_please_wait']->value;
} else { ?>Processing, please wait ...<?php }?>');
<?php echo '</script'; ?>
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
