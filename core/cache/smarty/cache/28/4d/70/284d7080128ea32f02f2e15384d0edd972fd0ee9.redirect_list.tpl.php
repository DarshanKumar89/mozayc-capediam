<?php /*%%SmartyHeaderCode:8938594358452ce3371b07-76385614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b101a0e2276bb1afa7dc13b08f2359d9d7e44dd1' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/seo/redirect_list.tpl',
      1 => 1469707234,
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
    '284d7080128ea32f02f2e15384d0edd972fd0ee9' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/seo/redirect_list.tpl',
      1 => 1469707234,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '8938594358452ce3371b07-76385614',
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
  'unifunc' => 'content_58452ce3c97e35_18803549',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58452ce3c97e35_18803549')) {function content_58452ce3c97e35_18803549($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://www.carpedmfashion.com" />
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
    top: -3px;
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
      <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Kornélia Dzurniková">
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Kornélia Dzurniková">
      </div>
      <div class="profile-data">
        <div class="profile-data-name">Kornélia&nbsp;Dzurniková</div>
      </div>
    </div>                                                                        
  </li>
  <li>
    <a href="cpanel" title="Panel">
      <i class="fa fa-dashboard"></i>
      <span class="xn-text">
        Panel      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/site-structure" title="Štruktúra webu">
      <i class="fa fa-sitemap"></i>
      <span class="xn-text">
        Štruktúra webu      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/page-list" title="Stránky">
      <i class="fa fa-file-text-o"></i>
      <span class="xn-text">
        Stránky      </span>
    </a>                        
  </li>
  <li class="xn-openable" style="display:none;visibility: hidden !important;">
    <a href="cpanel/cpanel/catalog" onclick="return false;" title="Katalóg">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        Katalóg      </span>
    </a>
    <ul>
      <li>
        <a href="cpanel/catalog" title="Catalog - Overview">
          <i class="fa fa-eye"></i>
          Prehľad        </a>
      </li>
      <li>
        <a href="cpanel/catalog/create-article-form" title="Catalog - New article">
          <i class="fa fa-plus"></i>
          Nový artikel        </a>
      </li>
      <li>
        <a href="cpanel/catalog/categories" title="Catalog - Manage categories">
          <i class="fa fa-info"></i>
          Spravovať kategórie        </a>
      </li>
      <li>
        <a href="cpanel/catalog/attributes" title="Catalog - Manage attributes">
          <i class="fa fa-tag"></i>
          Spravovať atribúty        </a>
      </li>
    </ul>
  </li>
  <li>
    <a href="cpanel/my-drive" title="MMôj Disk">
      <i class="fa fa-hdd-o"></i>
      <span class="xn-text">
        Môj Disk      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/slider-list" title="Reklamné bannery">
      <i class="fa fa-camera"></i>
      <span class="xn-text">
        Reklamné bannery      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/gallery-list" title="Galéria">
      <i class="fa fa-picture-o"></i>
      <span class="xn-text">
        Galéria      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/language-list" title="Jazyky">
      <i class="glyphicon glyphicon-globe"></i>
      <span class="xn-text">
        Jazyky      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/dictionary-list" title="Slovník">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        Slovník      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/seo-redirect-list" title="SEO REDIRECT">
      <i class="fa fa-link"></i>
      <span class="xn-text">
        SEO Redirect      </span>
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
    <a href="cpanel/store/users" title="Uživatelia">
      <i class="fa fa-users"></i>
      Uživatelia    </a>
  </li>
  <li data-menu-item="carts">
    <a href="cpanel/store/carts" title="Košíky">
      <i class="fa fa-shopping-cart"></i>
      Košíky    </a>
  </li>
  <li class="xn-openable" data-menu-item="orders">
    <a href="cpanel/store/orders" title="Objednávky">
      <i class="fa fa-clipboard"></i>
      Objednávky    </a>
    <ul>
      <li data-menu-item="list">
        <a href="cpanel/store/orders" title="List">
          <span class="fa fa-circle"></span>
          Prehľad        </a>
      </li>
      <li data-menu-item="management">
        <a href="cpanel/store/orders/management/short" title="Management">
          <span class="fa fa-circle"></span>
          Správa        </a>
      </li>
    </ul>
  </li>
  <li class="xn-openable" data-menu-item="catalog">
    <a href="#" onclick="return false;" title="Katalóg">
      <span class="fa fa-book"></span>
      Katalóg    </a>
    <ul>
      <li data-menu-item="articles">
        <a href="cpanel/store/catalog/articles/short" title="Artikle">
          <span class="fa fa-circle"></span>
          Artikle        </a>
      </li>
      <li data-menu-item="store-category-list">
        <a href="cpanel/store-category-list" title="Kategórie">
          <span class="fa fa-circle"></span>
          Kategórie        </a>
      </li>
      <li data-menu-item="store-attribute-list">
        <a href="cpanel/store-attribute-list" title="Atribúty">
          <span class="fa fa-circle"></span>
          Atribúty        </a>
      </li>
      <li data-menu-item="ordering">
        <a href="cpanel/store/catalog/ordering" title="Usporiadanie">
          <span class="fa fa-circle"></span>
          Usporiadanie        </a>
      </li>
    </ul>
  </li>
  <li data-menu-item="thumbnail">
    <a href="cpanel/thumbnail" title="Thumbnail">
      <i class="fa fa-picture-o" aria-hidden="true"></i>
      Thumbnail    </a>
  </li>
  <li data-menu-item="warehouse">
    <a href="cpanel/store-warehouse-list" title="Sklady">
      <i class="fa fa-database"></i>
      Sklady    </a>
  </li>
  <li data-menu-item="statuses">
    <a href="cpanel/store/statuses" title="Stavy">
      <i class="fa fa-heartbeat"></i>
      Stavy    </a>
  </li>
  <li class="xn-openable" data-menu-item="delivery-payment">
    <a href="#" onclick="return false;" title="Doručovanie / Platby">
      <i class="fa fa-pencil-square"></i>
      Doručovanie / Platby    </a>
    <ul>
      <li data-menu-item="delivery">
        <a href="cpanel/store/delivery-payment/delivery" title="Doručovanie">
          <i class="fa fa-truck"></i>
          Doručovanie        </a>
      </li>
      <li data-menu-item="payment">
        <a href="cpanel/store/delivery-payment/payment" title="Platby">
          <i class="fa fa-usd"></i>
          Platby        </a>
      </li>
      <li data-menu-item="ties">
        <a href="cpanel/store/delivery-payment/ties" title="Väzby">
          <i class="fa fa-exchange"></i>
          Väzby        </a>
      </li>
   </ul>
  </li>
  <li class="xn-openable" data-menu-item="localization">
    <a href="#" onclick="return false;" title="Lokalizácia">
      <span class="fa fa-globe"></span>
      Lokalizácia    </a>
    <ul>
      <li data-menu-item="currencies">
        <a href="cpanel/store/localization/currencies" title="Meny">
          <span class="fa fa-circle"></span>
          Meny        </a>
      </li>
      <li data-menu-item="taxes">
        <a href="cpanel/store/localization/taxes" title="Dane">
          <span class="fa fa-circle"></span>
          Dane        </a>
     </li>
   </ul>
  </li>
  <li data-menu-item="offers">
    <a href="cpanel/store/offers" title="Ponuky">
      <i class="fa fa-sticky-note-o"></i>
      Ponuky    </a>
  </li>
  <li data-menu-item="discount-circuits">
    <a href="cpanel/store-discount-circuit-list" title="Zľavové okruhy">
      <i class="fa fa-circle-o-notch"></i>
      Zľavové okruhy    </a>
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
    <a href="cpanel/general-settings" title="Hlavné nastavenia">
      <i class="fa fa-gear"></i>
      <span class="xn-text">
        Hlavné nastavenia      </span>
    </a>                        
  </li>
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
                        <a href="cpanel" style="height: 50px;padding: 11px 0;" title="Slovak">
                                                            <span class="flag-icon flag-icon-sk" style="width:18px;height:18px;"></span>
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
                        <a href="cpanel" title="Domov">
                            Domov                        </a>
                    </li>
                    
<li class="active">
    <a href="cpanel/seo-redirect-list" title="SEO & REDIRECT RULES">
        SEO Redirect    </a> 
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
    <h2>
        <i class="fa fa-link"></i>
        SEO REDIRECT&nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
    </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <form action="cpanel/create-seo-redirect" method="post" role="form">
            <input type="hidden" name="rewrite" value="cpanel/seo-redirect-list/1/10" />
            <div class="panel panel-default panel-toggled">
                <div class="panel-heading">                                
                    <h3 class="panel-title">
                        CREATE SEO REDIRECT                    </h3>  
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-up"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>
                                    URL                                </label>
                                <input type="text" name="url" value="" class="form-control" required>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-12">
                            <div class="form-group" style="margin-top:15px;">
                                <label>
                                    REDIRECT                                </label>
                                <input type="text" name="redirect" value="" class="form-control" required>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->
                <div class="panel-footer">                                 
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i>&nbsp;VYTVORIŤ                    </button>
                </div><!-- end panel-footer -->
            </div><!-- end panel -->
        </form>
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
                    <form role="form" action="cpanel/update-seo-redirect-list" method="post">
                <input type="hidden" name="rewrite" value="cpanel/seo-redirect-list/1/10" />
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="btn btn-info pull-left xt">
                            35
                        </span>
                        <h3 class="panel-title">
                            SEO REDIRECT LIST&nbsp;
                            <span class="badge">Zobrazených 1-10 z 35 záznamov</span>
                        </h3>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="row">
                            <div class="col-lg-12" style="padding:15px 10px;">
                                <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                    <select class="form-control select" onchange="location = 'cpanel/seo-redirect-list/1/'+this.options[this.selectedIndex].value;">
                                        <option value="10" selected>10</option>
                                        <option value="20" >20</option>
                                        <option value="50" >50</option>
                                        <option value="100" >100</option>
                                        <option value="200" >200</option>
                                        <option value="500" >500</option>
                                    </select>
                                </div>
                                <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                                    <div class="input-group">
                                        <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" onclick="location = 'cpanel/seo-redirect-list/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/seo-redirect-list/0/10?q="onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/seo-redirect-list/1/10?q=">1</a></li><li class=""><a href="cpanel/seo-redirect-list/2/10?q=">2</a></li><li class=""><a href="cpanel/seo-redirect-list/3/10?q=">3</a></li><li class=""><a href="cpanel/seo-redirect-list/4/10?q=">4</a></li><li class=""><a href="cpanel/seo-redirect-list/2/10?q="><i class="fa fa-angle-right"></i></a></li></ul>
                            </div>
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="redirectRuleList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="30">#</th>
                                        <th class="text-center">
                                            URL                                        </th>
                                        <th class="text-center">
                                            REDIRECT                                        </th>
                                        <th class="text-center" width="100">
                                            ODSTRÁNIŤ                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="redirectList[0]['id-redirect']" value="1">
                                                1
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[0]['url']" value="category/sweatpants" class="form-control">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[0]['redirect']" value="basics-damske-teplaky" class="form-control">
                                                </div>
                                                
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="redirectList[0]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="redirectList[1]['id-redirect']" value="2">
                                                2
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[1]['url']" value="product/100161" class="form-control">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[1]['redirect']" value="damske-oblecenie/damske-mikiny/damska-mikina-instyle" class="form-control">
                                                </div>
                                                
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="redirectList[1]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="redirectList[2]['id-redirect']" value="3">
                                                3
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[2]['url']" value="category/women" class="form-control">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[2]['redirect']" value="damske-oblecenie" class="form-control">
                                                </div>
                                                
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="redirectList[2]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="redirectList[3]['id-redirect']" value="4">
                                                4
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[3]['url']" value="category/blackgrey" class="form-control">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[3]['redirect']" value="damska-kolekcia-blackgrey" class="form-control">
                                                </div>
                                                
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="redirectList[3]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="redirectList[4]['id-redirect']" value="5">
                                                5
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[4]['url']" value="category/fitness" class="form-control">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[4]['redirect']" value="damska-kolekcia-fitness" class="form-control">
                                                </div>
                                                
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="redirectList[4]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="redirectList[5]['id-redirect']" value="6">
                                                6
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[5]['url']" value="category/outlet" class="form-control">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[5]['redirect']" value="vypredaj" class="form-control">
                                                </div>
                                                
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="redirectList[5]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="redirectList[6]['id-redirect']" value="7">
                                                7
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[6]['url']" value="category/men" class="form-control">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[6]['redirect']" value="panske-oblecenie" class="form-control">
                                                </div>
                                                
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="redirectList[6]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="redirectList[7]['id-redirect']" value="8">
                                                8
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[7]['url']" value="site/contact" class="form-control">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[7]['redirect']" value="kontakt" class="form-control">
                                                </div>
                                                
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="redirectList[7]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="redirectList[8]['id-redirect']" value="9">
                                                9
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[8]['url']" value="product/100265" class="form-control">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[8]['redirect']" value="damske-oblecenie/damske-teplaky/damske-bavlnene-teplaky-swan" class="form-control">
                                                </div>
                                                
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="redirectList[8]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="redirectList[9]['id-redirect']" value="10">
                                                10
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[9]['url']" value="category/kids" class="form-control">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="form-group">
                                                    <input type="text"  name="redirectList[9]['redirect']" value="detske-oblecenie" class="form-control">
                                                </div>
                                                
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="redirectList[9]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                    </tbody>
                            </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success" role="button">
                            <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                        </button>
                    </div><!-- end panel-footer -->
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
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span>Odhlásiť sa?</div>
                    <div class="mb-footer">
                        <div class="pull-left">
                            <a href="cpanel/sign/out" class="btn btn-success btn-lg">
                                Áno                            </a>
                            <button class="btn btn-default btn-lg mb-control-close">
                                Nie                            </button>
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
        <script type="text/javascript" src="extensions/cpanel/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="extensions/cpanel/js/plugins/jquery-ui/jquery-ui.js"></script>
        <script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="extensions/bootstrap/js/bootstrap-ckeditor-modal-fix.js"></script>       
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type="text/javascript" src="extensions/cpanel/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="extensions/cpanel/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        <script type="text/javascript" src="extensions/cpanel/js/plugins/owl/owl.carousel.min.js"></script>
        <script type="text/javascript" src="extensions/cpanel/js/plugins/datatables/jquery.dataTables.min.js"></script>
        
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"></script>

        <!-- END THIS PAGE PLUGINS-->       
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="extensions/cpanel/js/plugins.js"></script>        
        <script type="text/javascript" src="extensions/cpanel/js/actions.js"></script>
        <!-- END TEMPLATE -->
        <script type="text/javascript">
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
        </script>
    <!-- END SCRIPTS -->         
    </body>
</html><?php }} ?>
