<?php /*%%SmartyHeaderCode:6086968635716640a551fe4-01791304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2957f8fcce949c2ab9fbf87abf7aa2ee688f8727' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/slider/slider_edit.tpl',
      1 => 1460547454,
      2 => 'file',
    ),
    '92afef7393d0902bf4b435c3456ae469d5f977a7' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1460547449,
      2 => 'file',
    ),
    '16c330466fb4b26e2d4c99f1bba3c82f16476646' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1460547447,
      2 => 'file',
    ),
    '1a4236c059c8f2659efa6c2604f4a018d8fe5d25' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/slider/slider_edit.tpl',
      1 => 1460547454,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '6086968635716640a551fe4-01791304',
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
  'unifunc' => 'content_5716640a6719e1_25295405',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5716640a6719e1_25295405')) {function content_5716640a6719e1_25295405($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://carpedmfashion.local" />
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
#imageList tbody > tr > td {
  cursor:row-resize;
}
#btn-save {
  position: absolute;
  top: 4px;
  left: 5px;
  width: 25px;
  height: 50px;
  margin: 0;
  padding: 0 0 0 3px;
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
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
                
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="cpanel">MOZAYC</a>
        <a href="cpanel" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="cpanel" class="profile-mini">
            <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Henrich Barkoczy">
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Henrich Barkoczy">
            </div>
            <div class="profile-data">
                <div class="profile-data-name">Henrich&nbsp;Barkoczy</div>
            </div>
        </div>                                                                        
    </li>
    <li class="xn-title">
        <strong>
            NAVIGAČNÁ LIŠTA        </strong>
    </li>
    <li>
        <a href="cpanel" title="Panel">
            <i class="fa fa-dashboard"></i>
            <span class="xn-text">
                Panel            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/site-structure" title="Štruktúra webu">
            <i class="fa fa-sitemap"></i>
            <span class="xn-text">
                Štruktúra webu            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/page-list" title="Stránky">
            <i class="fa fa-file-text-o"></i>
            <span class="xn-text">
                Stránky            </span>
        </a>                        
    </li>
    <li class="xn-openable" style="display:none;visibility: hidden !important;">
        <a href="cpanel/cpanel/catalog" onclick="return false;" title="Katalóg">
            <i class="fa fa-book"></i>
            <span class="xn-text">
                Katalóg            </span>
        </a>
        <ul>
            <li>
                <a href="cpanel/catalog" title="Catalog - Overview">
                    <i class="fa fa-eye"></i>
                    Prehľad                </a>
            </li>
            <li>
                <a href="cpanel/catalog/create-article-form" title="Catalog - New article">
                    <i class="fa fa-plus"></i>
                    Nový artikel                </a>
            </li>
            <li>
                <a href="cpanel/catalog/categories" title="Catalog - Manage categories">
                    <i class="fa fa-info"></i>
                    Spravovať kategórie                </a>
            </li>
            <li>
                <a href="cpanel/catalog/attributes" title="Catalog - Manage attributes">
                    <i class="fa fa-tag"></i>
                    Spravovať atribúty                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="cpanel/my-drive" title="MMôj Disk">
            <i class="fa fa-hdd-o"></i>
            <span class="xn-text">
                Môj Disk            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/slider-list" title="Reklamné bannery">
            <i class="fa fa-camera"></i>
            <span class="xn-text">
                Reklamné bannery            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/gallery-list" title="Galéria">
            <i class="fa fa-picture-o"></i>
            <span class="xn-text">
                Galéria            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/language-list" title="Jazyky">
            <i class="glyphicon glyphicon-globe"></i>
            <span class="xn-text">
                Jazyky            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/dictionary-list" title="Slovník">
            <i class="fa fa-book"></i>
            <span class="xn-text">
                Slovník            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/seo-redirect-list" title="SEO REDIRECT">
            <i class="fa fa-link"></i>
            <span class="xn-text">
                SEO Redirect            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/general-settings" title="Hlavné nastavenia">
            <i class="fa fa-gear"></i>
            <span class="xn-text">
                Hlavné nastavenia            </span>
        </a>                        
    </li>
            <li class="xn-openable">
            <a href="#" onclick="return false;" title="Adminstrator">
                <i class="fa fa-exclamation-triangle"></i>
                <span class="xn-text">Administrátor</span>
            </a>
            <ul>
                <li>
                    <a href="cpanel/form-list" title="Formuláre">
                        <i class="fa fa-pencil"></i>
                        <span class="xn-text">
                            Formuláre                        </span>
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
                    <a href="cpanel/router" title="Router">
                        <i class="fa fa-map-signs"></i>
                        <span class="xn-text">
                            Router                        </span>
                    </a>                        
                </li>
            </ul>
        </li>
        <li class="xn-title">
      <strong>
        ROZŠÍRENIA      </strong>
    </li>
    <li class="xn-openable active" style="margin-bottom:98px;">
        <a href="#" onclick="return false;" title="Obchod">
            <i class="fa fa-building-o"></i>
            <span class="xn-text">Obchod</span>
        </a>
        <ul>
            <li data-menu-item="users">
                <a href="cpanel/store/users" title="Uživatelia">
                    <i class="fa fa-users"></i>
                    Uživatelia                </a>
            </li>
            <li data-menu-item="carts">
                <a href="cpanel/store/carts" title="Košíky">
                    <i class="fa fa-shopping-cart"></i>
                    Košíky                </a>
            </li>
            <li class="xn-openable" data-menu-item="orders">
                <a href="cpanel/store/orders" title="Objednávky">
                    <i class="fa fa-clipboard"></i>
                    Objednávky                </a>
                <ul>
                    <li data-menu-item="list">
                        <a href="cpanel/store/orders" title="List">
                            <span class="fa fa-circle"></span>
                            Prehľad                        </a>
                    </li>
                    <li data-menu-item="management">
                        <a href="cpanel/store/orders/management/short" title="Management">
                            <span class="fa fa-circle"></span>
                            Správa                        </a>
                    </li>
                </ul>
            </li>
            <li class="xn-openable" data-menu-item="catalog">
                <a href="#" onclick="return false;" title="Katalóg">
                    <span class="fa fa-book"></span>
                    Katalóg                </a>
                <ul>
                    <li data-menu-item="articles">
                        <a href="cpanel/store/catalog/articles/short" title="Artikle">
                            <span class="fa fa-circle"></span>
                            Artikle                        </a>
                    </li>
                    <li data-menu-item="store-category-list">
                        <a href="cpanel/store-category-list" title="Kategórie">
                            <span class="fa fa-circle"></span>
                            Kategórie                        </a>
                    </li>
                    <li data-menu-item="store-attribute-list">
                        <a href="cpanel/store-attribute-list" title="Atribúty">
                            <span class="fa fa-circle"></span>
                            Atribúty                        </a>
                    </li>
                    <li data-menu-item="ordering">
                        <a href="cpanel/store/catalog/ordering" title="Usporiadanie">
                            <span class="fa fa-circle"></span>
                            Usporiadanie                        </a>
                    </li>
                </ul>
            </li>
            <li data-menu-item="warehouse">
              <a href="cpanel/store-warehouse-list" title="Sklady">
                <i class="fa fa-database"></i>
                Sklady              </a>
            </li>
            <li data-menu-item="statuses">
                <a href="cpanel/store/statuses" title="Stavy">
                    <i class="fa fa-heartbeat"></i>
                    Stavy                </a>
            </li>
            <li class="xn-openable" data-menu-item="delivery-payment">
                <a href="#" onclick="return false;" title="Doručovanie / Platby">
                    <i class="fa fa-pencil-square"></i>
                    Doručovanie / Platby                </a>
                <ul>
                    <li data-menu-item="delivery">
                        <a href="cpanel/store/delivery-payment/delivery" title="Doručovanie">
                            <i class="fa fa-truck"></i>
                            Doručovanie                        </a>
                    </li>
                    <li data-menu-item="payment">
                        <a href="cpanel/store/delivery-payment/payment" title="Platby">
                            <i class="fa fa-usd"></i>
                            Platby                        </a>
                    </li>
                    <li data-menu-item="ties">
                        <a href="cpanel/store/delivery-payment/ties" title="Väzby">
                            <i class="fa fa-exchange"></i>
                            Väzby                        </a>
                    </li>
               </ul>
            </li>
            <li class="xn-openable" data-menu-item="localization">
                <a href="#" onclick="return false;" title="Lokalizácia">
                    <span class="fa fa-globe"></span>
                    Lokalizácia                </a>
                <ul>
                    <li data-menu-item="currencies">
                        <a href="cpanel/store/localization/currencies" title="Meny">
                            <span class="fa fa-circle"></span>
                            Meny                        </a>
                    </li>
                    <li data-menu-item="taxes">
                        <a href="cpanel/store/localization/taxes" title="Dane">
                            <span class="fa fa-circle"></span>
                            Dane                        </a>
                   </li>
               </ul>
            </li>
            <li data-menu-item="offers">
                <a href="cpanel/store/offers" title="Ponuky">
                    <i class="fa fa-sticky-note-o"></i>
                    Ponuky                </a>
            </li>
            <li data-menu-item="discount-circuits">
                <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
                    <i class="fa fa-circle-o-notch"></i>
                    Discount circuits                </a>
            </li>
            <li data-menu-item="email">
              <a href="cpanel/store/email" title="Email">
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
        </ul>
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
                    
<li>
    <a href="cpanel/slider-list" title="Reklamné bannery">
        Reklamné bannery    </a>
</li>
<li class="active">
    <a href="cpanel/slider-edit/1" title="Hlavn&yacute; banner">
        Hlavn&yacute; banner
    </a>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <span class="fa fa-camera"></span>&nbsp;
            Reklamné bannery&nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<form action="cpanel/update-slider" method="post" role="form">
    <input type="hidden" name="slider-id" value="1"/>
    <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">
        
        <!-- SLIDER TITLE -->
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="panel panel-colorful">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        Hlavn&yacute; banner
                    </h3>
                </div><!-- end panel-header -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- // SLIDER TITLE -->
        
        <!-- SLIDER GENERAL INFORMATION -->
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="panel panel-primary panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-info-circle"></i>&nbsp;
                        VŠEOBECNÉ INFORMÁCIE                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>
                                    Názov kontajnera pre reklamný banner (interný)                                </label>
                                <input type="text" name="name" value="Hlavn&yacute; banner" class="form-control" required>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- SLIDER GENERAL INFORMATION -->
        
        <!-- SLIDER SETTINGS -->
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="panel panel-success panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-cog"></i>&nbsp;
                        NASTAVENIA                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>
                                    Zoznam stránok                                </label>                                     
                                <select name="page-id" class="form-control select" data-live-search="true">
                                    <option value="0">Vyberte...</option>
                                                                            <option value="1" >Prehľad veľkost&iacute;</option>
                                                                            <option value="2" >MAJK SPIRIT</option>
                                                                            <option value="3" >SANGRE NUEVE</option>
                                                                            <option value="5" >KOLEKCIA BLACKGREY</option>
                                                                            <option value="6" >OĽGA BEST&Auml;NDIGOV&Aacute; </option>
                                                                    </select>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6 col-sm-12 col-xs-12" style="margin-top: 15px;">
                            <div class="form-group" style="min-width: 200px;">
                                <label>
                                    Použiť titulky                                </label><br>                                        
                                <label class="switch">
                                    <input type="checkbox" name="use-cations" value="1" checked>
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group" style="min-width: 200px;">
                                <label>
                                    Publikovať                                </label><br>                                      
                                <label class="switch">
                                    <input type="checkbox" name="publish" value="1" checked>
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- SLIDER SETTINGS -->
        
        <!-- SLIDER IMAGE LIST -->
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="panel panel-success panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-file-image-o"></i>&nbsp;
                        ZOZNAM OBRÁZKOV
                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="cpanel/slider-images/1/7259b712f116a7fe6310cdc765c836af">
                                <span class="fa fa-plus"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="return false;" class="panel-collapse">
                                <span class="fa fa-angle-up"></span>
                            </a>
                        </li>
                    </ul>    
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                                        <div class="table-responsive">
                          <table id="imageList" class="table table-bordered table-striped table-actions">
                              <thead>
                                  <tr>
                                      <th class="text-center">
                                          NÁHĽAD                                      </th>
                                      <th class="text-left" width="150">
                                          NÁZOV OBRÁZKA                                      </th>
                                      <th class="text-center" width="300">
                                          SMEROVAŤ NA STRÁNKU                                      </th>
                                      <th class="text-left">
                                          TITULKY / WEB ODKAZ                                      </th>
                                      <th class="text-center">
                                          PÔVODNÁ ŠÍRKA                                      </th>
                                      <th class="text-center">
                                          PÔVODNÁ VÝŠKA                                      </th>
                                      <th class="text-center">
                                          METÓDY ZMENY VEĽKOSTÍ                                      </th>
                                      <th class="text-center">
                                          ZMENA VEĽKOSTI ŠÍRKA                                      </th>
                                      <th class="text-center">
                                          ZMENA VEĽKOSTI VÝŠKA                                      </th>
                                      <th class="text-center">
                                          VEĽKOSŤ OBRÁZKA                                      </th>
                                      <th class="text-center">
                                          PUBLIKOVAŤ                                      </th>
                                      <th class="text-center">
                                          ODSTRÁNIŤ                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                                                        <tr>
                                          <td class="text-center">
                                              <input type="hidden" name="images[0]['id']" value="2671" />
                                              <a href="http://carpedmfashion.local/files/3480a4debd65e2293144c9f158dd95f9.jpg" title="<br />
<b>Notice</b>:  Undefined property: stdClass::$file_name in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>912</b><br />
">
                                                  <img src="thumbnail/crop/3480a4debd65e2293144c9f158dd95f9/35/35" width="35" height="35" style="border: 2px solid #F5F5F5;border-radius: 50%;" title="F94B1430a (1)" />
                                              </a>
                                          </td>
                                          <td class="text-left">F94B1430a (1)</td>
                                          <td class="text-center">                                     
                                              <select name="images[0]['rw-page-id']" class="form-control">
                                                  <option value="0">Vyberte...</option>
                                                                                                        <option value="1" >Prehľad veľkost&iacute;</option>
                                                                                                        <option value="2" >MAJK SPIRIT</option>
                                                                                                        <option value="3" >SANGRE NUEVE</option>
                                                                                                        <option value="5" >KOLEKCIA BLACKGREY</option>
                                                                                                        <option value="6" >OĽGA BEST&Auml;NDIGOV&Aacute; </option>
                                                                                                </select>
                                          </td>
                                          <td>
                                              <button type="button" class="btn btn-block btn-default" onclick="renderCaptions(1,2671)">
                                                  <span class="fa fa-pencil-square-o"></span>
                                                  &nbsp;Titulky                                                  &nbsp;/&nbsp;
                                                  <span class="fa fa-external-link"></span>
                                                  &nbsp;WEB Odkaz                                              </button>
                                          </td>
                                          <td class="text-center">5745px</td>
                                          <td class="text-center">3205px</td>
                                          <td class="text-center">
                                              <select name="images[0]['r-mth']" class="form-control">
                                                  <option value="0" selected>Default</option>
                                                  <option value="1" >Auto</option>
                                                  <option value="2" >Crop</option>
                                                  <option value="3" >Landscape</option>
                                                  <option value="4" >Portrait</option>
                                                  <option value="5" >Exact</option>
                                              </select>
                                          </td>
                                          <td class="text-center">
                                              <input type="number"  name="images[0]['r-width']" value="0" class="form-control" style="width:100px;margin:0 auto;">
                                          </td>
                                          <td class="text-center">
                                              <input type="number"  name="images[0]['r-height']" value="0" class="form-control" style="width:100px;margin:0 auto;">
                                          </td>
                                          <td class="text-center">0 MB</td>
                                          <td class="text-center">
                                              <label class="switch">
                                                  <input type="checkbox" name="images[0]['publish']" checked="" value="1">
                                                  <span></span>
                                              </label>
                                          </td>
                                          <td class="text-center">
                                              <label class="switch">
                                                  <input type="checkbox" name="images[0]['remove']" value="1">
                                                  <span></span>
                                              </label>
                                          </td>
                                      </tr>
                                                                        <tr>
                                          <td class="text-center">
                                              <input type="hidden" name="images[1]['id']" value="2674" />
                                              <a href="http://carpedmfashion.local/files/26c47130faf5dc5fdb0b8ec715a4ef6e.jpg" title="<br />
<b>Notice</b>:  Undefined property: stdClass::$file_name in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>912</b><br />
">
                                                  <img src="thumbnail/crop/26c47130faf5dc5fdb0b8ec715a4ef6e/35/35" width="35" height="35" style="border: 2px solid #F5F5F5;border-radius: 50%;" title="FITNESS_LR" />
                                              </a>
                                          </td>
                                          <td class="text-left">FITNESS_LR</td>
                                          <td class="text-center">                                     
                                              <select name="images[1]['rw-page-id']" class="form-control">
                                                  <option value="0">Vyberte...</option>
                                                                                                        <option value="1" >Prehľad veľkost&iacute;</option>
                                                                                                        <option value="2" >MAJK SPIRIT</option>
                                                                                                        <option value="3" >SANGRE NUEVE</option>
                                                                                                        <option value="5" >KOLEKCIA BLACKGREY</option>
                                                                                                        <option value="6" >OĽGA BEST&Auml;NDIGOV&Aacute; </option>
                                                                                                </select>
                                          </td>
                                          <td>
                                              <button type="button" class="btn btn-block btn-default" onclick="renderCaptions(1,2674)">
                                                  <span class="fa fa-pencil-square-o"></span>
                                                  &nbsp;Titulky                                                  &nbsp;/&nbsp;
                                                  <span class="fa fa-external-link"></span>
                                                  &nbsp;WEB Odkaz                                              </button>
                                          </td>
                                          <td class="text-center">5760px</td>
                                          <td class="text-center">3840px</td>
                                          <td class="text-center">
                                              <select name="images[1]['r-mth']" class="form-control">
                                                  <option value="0" selected>Default</option>
                                                  <option value="1" >Auto</option>
                                                  <option value="2" >Crop</option>
                                                  <option value="3" >Landscape</option>
                                                  <option value="4" >Portrait</option>
                                                  <option value="5" >Exact</option>
                                              </select>
                                          </td>
                                          <td class="text-center">
                                              <input type="number"  name="images[1]['r-width']" value="0" class="form-control" style="width:100px;margin:0 auto;">
                                          </td>
                                          <td class="text-center">
                                              <input type="number"  name="images[1]['r-height']" value="0" class="form-control" style="width:100px;margin:0 auto;">
                                          </td>
                                          <td class="text-center">0.535 KB</td>
                                          <td class="text-center">
                                              <label class="switch">
                                                  <input type="checkbox" name="images[1]['publish']" checked="" value="1">
                                                  <span></span>
                                              </label>
                                          </td>
                                          <td class="text-center">
                                              <label class="switch">
                                                  <input type="checkbox" name="images[1]['remove']" value="1">
                                                  <span></span>
                                              </label>
                                          </td>
                                      </tr>
                                                                </tbody>
                          </table>
                      </div><!-- end table-responsive -->
                                  </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- SLIDER IMAGE LIST -->
                
        <button type="submit" id="btn-save" class="btn btn-success" role="button">
          <i class="fa fa-save"></i>
        </button>
                
    </div><!-- end row -->
</form>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW SLIDER CAPTIONS -->                                  
<div class="modal" id="modal-captions" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="defModalHead">
          Titulky        </h4>
      </div>
      <div class="modal-body"><!-- --></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">
          ZAVRIEŤ        </button>
      </div>
    </div>
  </div>
</div>
<!-- //-- MODAL WINDOW SLIDER CAPTIONS -->

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
<script type="text/javascript">
  window.onscroll = function (e) {
    var vertical_position = 0;
    if (pageYOffset)//usual
      vertical_position = pageYOffset;
    else if (document.documentElement.clientHeight)//ie
      vertical_position = document.documentElement.scrollTop;
    else if (document.body)//ie quirks
      vertical_position = document.body.scrollTop;

    var topPosition = vertical_position + ((vertical_position == 0) ? 3 : 200);

    $('#btn-save').css({ top: topPosition + 'px' });
  };

  function renderCaptions( sliderId, itemId ) {
      var modalWindow  = $('#modal-captions');

      $.ajax({
          url: 'cpanel/slider-captions',
          type: 'POST',
          data: { command: 1, sliderId: sliderId, itemId: itemId },
          success: function(content) {
             modalWindow.find('.modal-body').html(content);
             modalWindow.modal('show');
          },
          error: function(data) {
              console.log(data);
          },
          dataType: 'HTML'
      });
  }
</script>
<script type="text/javascript">            
$(function() {
  $( "#imageList" ).find('tbody').sortable();
});
</script>

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
