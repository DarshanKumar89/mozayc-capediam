<?php /*%%SmartyHeaderCode:13444748795799f27eaced29-50268672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13b518b746ee9d08d79a60dc0815011e90d3b190' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/category/category_list.tpl',
      1 => 1469528909,
      2 => 'file',
    ),
    '0b9f53588ea7ef2e382fb110a795947dfd61c5dd' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1469528892,
      2 => 'file',
    ),
    '146e27fb27217e76249fb69f93d1c5b4436eb18d' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1469528891,
      2 => 'file',
    ),
    '9e0eef5c53c74edaaa8d17467f4df60a09c30d8c' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/category/category_list.tpl',
      1 => 1469528909,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '13444748795799f27eaced29-50268672',
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
  'unifunc' => 'content_5799f27ebf70b9_31957602',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799f27ebf70b9_31957602')) {function content_5799f27ebf70b9_31957602($_smarty_tpl) {?><!DOCTYPE html>
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
.badge {
    position: relative;
    top: -3px;
    left: 5px;
}
#tree-tags {
    margin: 0;
    padding: 0;
    list-style: none; 
    overflow: hidden; 
}
#tree-tags > li,
#tree-tags > li > a {
    float: left;
}
/*
#tree-tags > li > a:before {
    content: " "; 
    display: block; 
    width: 0; 
    height: 0;
    border-top: 50px solid transparent;       
    border-bottom: 50px solid transparent;
    border-left: 30px solid pink;
    position: absolute;
    top: 50%;
    margin-top: -50px; 
    margin-left: 1px;
    left: 100%;
    z-index: 1; 
}
#tree-tags > li > a:after { 
    content: " "; 
    display: block; 
    width: 0; 
    height: 0;
    border-top: 50px solid transparent;
    border-bottom: 50px solid transparent;
    border-left: 30px solid #000;
    position: absolute;
    top: 50%;
    margin-top: -50px; 
    left: 100%;
    z-index: 2; 
}
*/
#tree-tags > li > a {
    position: relative;
    padding: 5px 9px;
    font-size: 1.1em;
    font-weight: 100;
    letter-spacing: 1px;
    color: #fff;
    text-shadow: 1px 1px #000;
    line-height: 11px;
}
#tree-tags > li > a:hover,
#tree-tags > li > a:focus,
#tree-tags > li > a:active {
    background-color: #000000 !important;
    text-decoration: none;
    color: #fff;
}
@media (max-width: 1170px) {
    .btn-group > .btn-import,
    .btn-group > .btn-export {
        display: none !important;
        visibility: hidden !important;
    }
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
  <li class="xn-openable active">
    <a href="#" onclick="return false;" title="Obchod">
      <i class="fa fa-building-o"></i>
      <span class="xn-text">Obchod</span>
    </a>
    <ul>
    <li data-menu-item="users">
      <a href="cpanel/store/users" title="Uživatelia">
        <i class="fa fa-users"></i>
        Uživatelia      </a>
    </li>
    <li data-menu-item="carts">
      <a href="cpanel/store/carts" title="Košíky">
        <i class="fa fa-shopping-cart"></i>
        Košíky      </a>
    </li>
    <li class="xn-openable" data-menu-item="orders">
      <a href="cpanel/store/orders" title="Objednávky">
        <i class="fa fa-clipboard"></i>
        Objednávky      </a>
      <ul>
        <li data-menu-item="list">
          <a href="cpanel/store/orders" title="List">
            <span class="fa fa-circle"></span>
            Prehľad          </a>
        </li>
        <li data-menu-item="management">
          <a href="cpanel/store/orders/management/short" title="Management">
            <span class="fa fa-circle"></span>
            Správa          </a>
        </li>
      </ul>
    </li>
    <li class="xn-openable" data-menu-item="catalog">
        <a href="#" onclick="return false;" title="Katalóg">
            <span class="fa fa-book"></span>
            Katalóg        </a>
        <ul>
            <li data-menu-item="articles">
                <a href="cpanel/store/catalog/articles/short" title="Artikle">
                    <span class="fa fa-circle"></span>
                    Artikle                </a>
            </li>
            <li data-menu-item="store-category-list">
                <a href="cpanel/store-category-list" title="Kategórie">
                    <span class="fa fa-circle"></span>
                    Kategórie                </a>
            </li>
            <li data-menu-item="store-attribute-list">
                <a href="cpanel/store-attribute-list" title="Atribúty">
                    <span class="fa fa-circle"></span>
                    Atribúty                </a>
            </li>
            <li data-menu-item="ordering">
                <a href="cpanel/store/catalog/ordering" title="Usporiadanie">
                    <span class="fa fa-circle"></span>
                    Usporiadanie                </a>
            </li>
        </ul>
    </li>
    <li data-menu-item="thumbnail">
      <a href="cpanel/thumbnail" title="Thumbnail">
        <i class="fa fa-picture-o" aria-hidden="true"></i>
        Thumbnail      </a>
    </li>
    <li data-menu-item="warehouse">
      <a href="cpanel/store-warehouse-list" title="Sklady">
        <i class="fa fa-database"></i>
        Sklady      </a>
    </li>
    <li data-menu-item="statuses">
        <a href="cpanel/store/statuses" title="Stavy">
            <i class="fa fa-heartbeat"></i>
            Stavy        </a>
    </li>
    <li class="xn-openable" data-menu-item="delivery-payment">
        <a href="#" onclick="return false;" title="Doručovanie / Platby">
            <i class="fa fa-pencil-square"></i>
            Doručovanie / Platby        </a>
        <ul>
            <li data-menu-item="delivery">
                <a href="cpanel/store/delivery-payment/delivery" title="Doručovanie">
                    <i class="fa fa-truck"></i>
                    Doručovanie                </a>
            </li>
            <li data-menu-item="payment">
                <a href="cpanel/store/delivery-payment/payment" title="Platby">
                    <i class="fa fa-usd"></i>
                    Platby                </a>
            </li>
            <li data-menu-item="ties">
                <a href="cpanel/store/delivery-payment/ties" title="Väzby">
                    <i class="fa fa-exchange"></i>
                    Väzby                </a>
            </li>
       </ul>
    </li>
    <li class="xn-openable" data-menu-item="localization">
        <a href="#" onclick="return false;" title="Lokalizácia">
            <span class="fa fa-globe"></span>
            Lokalizácia        </a>
        <ul>
            <li data-menu-item="currencies">
                <a href="cpanel/store/localization/currencies" title="Meny">
                    <span class="fa fa-circle"></span>
                    Meny                </a>
            </li>
            <li data-menu-item="taxes">
                <a href="cpanel/store/localization/taxes" title="Dane">
                    <span class="fa fa-circle"></span>
                    Dane                </a>
           </li>
       </ul>
    </li>
    <li data-menu-item="offers">
        <a href="cpanel/store/offers" title="Ponuky">
            <i class="fa fa-sticky-note-o"></i>
            Ponuky        </a>
    </li>
    <li data-menu-item="discount-circuits">
        <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
            <i class="fa fa-circle-o-notch"></i>
            Discount circuits        </a>
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
  <li>
    <a href="cpanel/general-settings" title="Hlavné nastavenia">
      <i class="fa fa-gear"></i>
      <span class="xn-text">
        Hlavné nastavenia      </span>
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
              Formuláre            </span>
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
              Router            </span>
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
    <a href="#" onclick="return false;" title="Obchod">
        Obchod    </a>
</li>
<li>
    <a href="#" onclick="return false;" title="KATALÓG">
        Katalóg    </a>
</li>
<li class="active">
    <a href="cpanel/store-category-list" title="Kategórie">
        Kategórie    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>KATEGÓRIE&nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span></h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom: 25px;">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="btn-group" role="group">
            <a href="cpanel/store-create-category-form" class="btn btn-info" role="menuitem" title="Nová kategória">
                <i class="fa fa-plus"></i>
                <span>Nová kategória</span>
            </a>
            <a href="cpanel/store-category-assigning-article-form" class="btn btn-success" role="menuitem" title="Priraďovanie artiklov">
                <i class="fa fa-list"></i>
                <span>Priraďovanie artiklov</span>
            </a>
                            <a href="cpanel/store/catalog/categories/external-assigning" class="btn btn-primary" role="menuitem" title="Assigning articles on external categories">
                    <i class="fa fa-list"></i>
                    <span>Priraďovanie artiklov k externým kategóriam</span>
                </a>
                    </div>
    </div>
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-colorful fix-panel panel-toggled">
            <div class="panel-heading">
                <h3 class="panel-title text-uppercase" style="overflow: hidden;">
                    <span style="display:block;font-size:1.4em;float:left;">
                        <i class="fa fa-info-circle"></i>&nbsp;
                        <span style="font-weight:100;color:#000;">Rýchly prehľad</span>
                    </span>
                </h3>
                <ul class="panel-controls">
                    <li>
                        <a href="#" onclick="return false;" class="panel-collapse">
                            <span class="fa fa-angle-down"></span>
                        </a>
                    </li>
                </ul>          
            </div>
            <div class="panel-body panel-body-map">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-primary widget-padding-sm">                            
                            <div class="widget-item-left">
                                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="1%" data-readOnly="true" data-thickness=".2"/>
                            </div>
                            <div class="widget-data">
                                <div class="widget-big-int"><span class="num-count">1</span>%</div>
                                <div class="widget-title">Vypnuté kategórie</div>                             
                            </div>                                                        
                        </div> 
                    </div><!-- end col -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-danger widget-padding-sm">                            
                            <div class="widget-item-left">
                                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="44%" data-readOnly="true" data-thickness=".2"/>
                            </div>
                            <div class="widget-data">
                                <div class="widget-big-int"><span class="num-count">44</span>%</div>
                                <div class="widget-title">Prázdne kategórie</div>                               
                            </div>                                                        
                        </div> 
                    </div><!-- end col -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-info widget-padding-sm">                            
                            <div class="widget-item-left">
                                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="100%" data-readOnly="true" data-thickness=".2"/>
                            </div>
                            <div class="widget-data">
                                <div class="widget-big-int">-</div>
                                <div class="widget-title">Top kategória</div>
                                <div class="widget-subtitle">This month</div>                                
                            </div>                                                       
                        </div> 
                    </div><!-- end col -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-warning widget-padding-sm">                            
                            <div class="widget-item-left">
                                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="9%" data-readOnly="true" data-thickness=".2"/>
                            </div>
                            <div class="widget-data">
                                <div class="widget-big-int"><span class="num-count">9</span>%</div>
                                <div class="widget-title">Počet produktov na kategóriu</div>
                                <div class="widget-subtitle">-</div>                                
                            </div>                                                      
                        </div> 
                    </div><!-- end col -->
                </div><!-- end row -->
             </div><!-- end panel-body -->
        </div><!-- end panel -->
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12">
                    <form action="cpanel/store-update-category-list" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            <span class="btn btn-info" style="margin: 0 15px;">73</span>
                            KATEGÓRIE                            &nbsp;<span class="badge">Zobrazených 1-10 z 73 záznamov</span>
                        </h3>
                        <ul class="panel-controls">
                            <li>
                                <a href="#" onclick="return false;" class="panel-collapse">
                                    <span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                        </ul>                                
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                                <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                    <select class="form-control select" onchange="location = 'cpanel/store-category-list/1/'+this.options[this.selectedIndex].value;">
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
                                            <button type="button" class="btn btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store-category-list/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store-category-list/1/10">1</a></li><li class=""><a href="cpanel/store-category-list/2/10">2</a></li><li class=""><a href="cpanel/store-category-list/3/10">3</a></li><li class=""><a href="cpanel/store-category-list/4/10">4</a></li><li class=""><a href="cpanel/store-category-list/5/10">5</a></li><li class=""><a href="cpanel/store-category-list/6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/store-category-list/8/10">8</a></li><li class=""><a href="cpanel/store-category-list/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                            </div>
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="categoryList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="25" class="text-center">
                                            ID                                        </th>
                                        <th width="30" class="text-center">
                                            OBRÁZOK                                        </th>
                                        <th width="400" class="text-left">
                                            NÁZOV KATEGÓRIE                                        </th>
                                        <th width="600" class="text-center">
                                            VETVA
                                        </th>
                                        <th width="50" class="text-center">
                                            POČET PODKATEGÓRIÍ                                        </th>
                                        <th width="50" class="text-center">
                                            POČET PRIRADENÝCH ARTIKLOV                                        </th>
                                        <th width="100" class="text-center">
                                            EDITOVAŤ                                        </th>
                                        <th width="100" class="text-center">
                                            ZOBRAZIŤ                                        </th>
                                        <th width="100" class="text-center">
                                            ODSTRÁNIŤ                                        </th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                                                          <tr style="border-bottom:2px solid #95b75d;border-left: 2px solid #95b75d;">
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                               <input type="hidden" name="categoryList[0]['category-id']" value='1'/>
                                               1
                                           </td>
                                           <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                           </td>
                                           <td class="text-left">Ženy</td>
                                           <td class="text-center">
                                                                                            <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-times-circle-o"></i>
                                                </span>
                                                                                       </td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">1</td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">133</td>
                                           <td class="text-center">
                                                <a href="cpanel/store-update-category-form/1" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Ženy">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                           </td>
                                           <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="categoryList[0]['enable']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                           <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="categoryList[0]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                       </tr>
                                                                          <tr style="border-bottom:2px solid #fea223;border-left: 2px solid #fea223;">
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                               <input type="hidden" name="categoryList[1]['category-id']" value='2'/>
                                               2
                                           </td>
                                           <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                           </td>
                                           <td class="text-left">Basics d&aacute;mske tepl&aacute;ky</td>
                                           <td class="text-left">
                                                                                            <ul id="tree-tags">
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/1"  style="background-color:#969517">
                                                                Ženy
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/73"  style="background-color:#f92930">
                                                                Basics d&aacute;mske oblečenie
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/2" class="active" style="background-color:#6f6b0f">
                                                                Basics d&aacute;mske tepl&aacute;ky
                                                            </a>
                                                        </li>
                                                                                                    </ul>
                                                                                       </td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">0</td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">29</td>
                                           <td class="text-center">
                                                <a href="cpanel/store-update-category-form/2" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Basics d&aacute;mske tepl&aacute;ky">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                           </td>
                                           <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="categoryList[1]['enable']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                           <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="categoryList[1]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                       </tr>
                                                                          <tr style="border-bottom:2px solid #fea223;border-left: 2px solid #fea223;">
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                               <input type="hidden" name="categoryList[2]['category-id']" value='3'/>
                                               3
                                           </td>
                                           <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                           </td>
                                           <td class="text-left">D&aacute;mska kolekcia BLACKGREY</td>
                                           <td class="text-left">
                                                                                            <ul id="tree-tags">
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/25"  style="background-color:#8f7150">
                                                                D&aacute;mske kolekcie
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/3" class="active" style="background-color:#4532f0">
                                                                D&aacute;mska kolekcia BLACKGREY
                                                            </a>
                                                        </li>
                                                                                                    </ul>
                                                                                       </td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">2</td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">34</td>
                                           <td class="text-center">
                                                <a href="cpanel/store-update-category-form/3" class="btn btn-info" style="padding:7px;border-radius:100%;" title="D&aacute;mska kolekcia BLACKGREY">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                           </td>
                                           <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="categoryList[2]['enable']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                           <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="categoryList[2]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                       </tr>
                                                                          <tr style="border-bottom:2px solid #fea223;border-left: 2px solid #fea223;">
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                               <input type="hidden" name="categoryList[3]['category-id']" value='4'/>
                                               4
                                           </td>
                                           <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                           </td>
                                           <td class="text-left">Blackgrey d&aacute;mske tepl&aacute;ky</td>
                                           <td class="text-left">
                                                                                            <ul id="tree-tags">
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/25"  style="background-color:#495033">
                                                                D&aacute;mske kolekcie
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/3"  style="background-color:#55dc5d">
                                                                D&aacute;mska kolekcia BLACKGREY
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/4" class="active" style="background-color:#481a99">
                                                                Blackgrey d&aacute;mske tepl&aacute;ky
                                                            </a>
                                                        </li>
                                                                                                    </ul>
                                                                                       </td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">0</td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">10</td>
                                           <td class="text-center">
                                                <a href="cpanel/store-update-category-form/4" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Blackgrey d&aacute;mske tepl&aacute;ky">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                           </td>
                                           <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="categoryList[3]['enable']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                           <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="categoryList[3]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                       </tr>
                                                                          <tr style="border-bottom:2px solid #fea223;border-left: 2px solid #fea223;">
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                               <input type="hidden" name="categoryList[4]['category-id']" value='5'/>
                                               5
                                           </td>
                                           <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                           </td>
                                           <td class="text-left">D&aacute;mska kolekcia FITNESS</td>
                                           <td class="text-left">
                                                                                            <ul id="tree-tags">
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/25"  style="background-color:#cb3934">
                                                                D&aacute;mske kolekcie
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/5" class="active" style="background-color:#64968c">
                                                                D&aacute;mska kolekcia FITNESS
                                                            </a>
                                                        </li>
                                                                                                    </ul>
                                                                                       </td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">1</td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">12</td>
                                           <td class="text-center">
                                                <a href="cpanel/store-update-category-form/5" class="btn btn-info" style="padding:7px;border-radius:100%;" title="D&aacute;mska kolekcia FITNESS">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                           </td>
                                           <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="categoryList[4]['enable']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                           <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="categoryList[4]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                       </tr>
                                                                          <tr style="border-bottom:2px solid #95b75d;border-left: 2px solid #95b75d;">
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                               <input type="hidden" name="categoryList[5]['category-id']" value='7'/>
                                               7
                                           </td>
                                           <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                           </td>
                                           <td class="text-left">Muži</td>
                                           <td class="text-center">
                                                                                            <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-times-circle-o"></i>
                                                </span>
                                                                                       </td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">1</td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">37</td>
                                           <td class="text-center">
                                                <a href="cpanel/store-update-category-form/7" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Muži">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                           </td>
                                           <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="categoryList[5]['enable']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                           <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="categoryList[5]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                       </tr>
                                                                          <tr style="border-bottom:2px solid #fea223;border-left: 2px solid #fea223;">
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                               <input type="hidden" name="categoryList[6]['category-id']" value='8'/>
                                               8
                                           </td>
                                           <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                           </td>
                                           <td class="text-left">Basics p&aacute;nske tepl&aacute;ky</td>
                                           <td class="text-left">
                                                                                            <ul id="tree-tags">
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/7"  style="background-color:#f1ca08">
                                                                Muži
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/75"  style="background-color:#e7b1ed">
                                                                Basics p&aacute;nske oblečenie
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/8" class="active" style="background-color:#e114ac">
                                                                Basics p&aacute;nske tepl&aacute;ky
                                                            </a>
                                                        </li>
                                                                                                    </ul>
                                                                                       </td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">0</td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">13</td>
                                           <td class="text-center">
                                                <a href="cpanel/store-update-category-form/8" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Basics p&aacute;nske tepl&aacute;ky">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                           </td>
                                           <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="categoryList[6]['enable']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                           <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="categoryList[6]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                       </tr>
                                                                          <tr style="border-bottom:2px solid #95b75d;border-left: 2px solid #95b75d;">
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                               <input type="hidden" name="categoryList[7]['category-id']" value='10'/>
                                               10
                                           </td>
                                           <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                           </td>
                                           <td class="text-left">Deti</td>
                                           <td class="text-center">
                                                                                            <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-times-circle-o"></i>
                                                </span>
                                                                                       </td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">1</td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">25</td>
                                           <td class="text-center">
                                                <a href="cpanel/store-update-category-form/10" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Deti">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                           </td>
                                           <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="categoryList[7]['enable']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                           <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="categoryList[7]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                       </tr>
                                                                          <tr style="border-bottom:2px solid #fea223;border-left: 2px solid #fea223;">
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                               <input type="hidden" name="categoryList[8]['category-id']" value='12'/>
                                               12
                                           </td>
                                           <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                           </td>
                                           <td class="text-left">D&aacute;mske novinky</td>
                                           <td class="text-left">
                                                                                            <ul id="tree-tags">
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/72"  style="background-color:#d87703">
                                                                Novinky
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/12" class="active" style="background-color:#8c5447">
                                                                D&aacute;mske novinky
                                                            </a>
                                                        </li>
                                                                                                    </ul>
                                                                                       </td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">1</td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">0</td>
                                           <td class="text-center">
                                                <a href="cpanel/store-update-category-form/12" class="btn btn-info" style="padding:7px;border-radius:100%;" title="D&aacute;mske novinky">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                           </td>
                                           <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="categoryList[8]['enable']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                           <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="categoryList[8]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                       </tr>
                                                                          <tr style="border-bottom:2px solid #fea223;border-left: 2px solid #fea223;">
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                               <input type="hidden" name="categoryList[9]['category-id']" value='13'/>
                                               13
                                           </td>
                                           <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                           </td>
                                           <td class="text-left">Basics detsk&eacute; tepl&aacute;ky</td>
                                           <td class="text-left">
                                                                                            <ul id="tree-tags">
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/10"  style="background-color:#7a9311">
                                                                Deti
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/74"  style="background-color:#25964c">
                                                                Basics detsk&eacute; oblečenie
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="cpanel/store-update-category-form/13" class="active" style="background-color:#3f5df5">
                                                                Basics detsk&eacute; tepl&aacute;ky
                                                            </a>
                                                        </li>
                                                                                                    </ul>
                                                                                       </td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">0</td>
                                           <td class="text-center" style="font-weight:700;color:#2a2d34;">13</td>
                                           <td class="text-center">
                                                <a href="cpanel/store-update-category-form/13" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Basics detsk&eacute; tepl&aacute;ky">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                           </td>
                                           <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="categoryList[9]['enable']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                           <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="categoryList[9]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                       </tr>
                                                                   </tbody>
                            </table>
                        </div>
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success">
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
        
<script type="text/javascript" src="extensions/cpanel/js/plugins/knob/jquery.knob.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript">
    $('#search').keyup(function() {
        searchTable($(this).val());
    });
    
    function searchTable(inputVal) {
        var table = $('#categoryList');
            table.find('tr').each(function(index, row) {
                var allCells = $(row).find('td');
                if(allCells.length > 0)
                {
                    var found = false;
                    allCells.each(function(index, td)
                    {
                        var regExp = new RegExp(inputVal, 'i');
                        if(regExp.test($(td).text()))
                        {
                            found = true;
                            return false;
                        }
                    });
                    if(found == true)$(row).show();else $(row).hide();
                }
            });
    }
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
