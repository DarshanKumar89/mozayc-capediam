<?php /*%%SmartyHeaderCode:71554981657e16e6929b292-80289265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba25b48c52ebca24af2239d4a71e6442cb639a90' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/email/email_edit.tpl',
      1 => 1469707244,
      2 => 'file',
    ),
    '2348aeb5e8989dd42b1116d7d8b299e32f80f818' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1470836096,
      2 => 'file',
    ),
    'bc141a49c252a4eeea1dde78a0f97783d71068f6' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1469707230,
      2 => 'file',
    ),
    '8668af0909b5b1b11089cf5376828f9c61bce88a' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/email/email_edit.tpl',
      1 => 1469707244,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '71554981657e16e6929b292-80289265',
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
  'unifunc' => 'content_57e16e6996a216_64131370',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e16e6996a216_64131370')) {function content_57e16e6996a216_64131370($_smarty_tpl) {?><!DOCTYPE html>
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
#tags-place {
    display: block;
    height: 161px;
    padding: 9.5px;
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-word;
    word-wrap: break-word;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 4px;
}
#tags-place .tag {
    background-color: #fff;
    display: inline-block;
    margin: 0 0 5px 0;
    padding: 3px 10px;
    color: #000;
    border: 1px solid #ddd;
}
.alert-success,
.alert-danger {
    display: none;
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
    <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
      <i class="fa fa-circle-o-notch"></i>
      Discount circuits    </a>
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
    <a href="cpanel/store/email" title="Email">
        Email
    </a>
</li>
<li>
    <a href="#" onclick="return false;" title="EDITOVAŤ">
        Editovať    </a>
</li>
<li class="active">
    <a href="cpanel/store/email/edit/4" title="Ordine processato">
        Ordine processato
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-envelope"></i>&nbsp;Email&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
    <div class="col-lg-12">
        <form action="cpanel/store/email/update" method="post" role="form">
            <input type="hidden" name="email-id" value="4"/>
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title">
                        Ordine processato
                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                            <div class="form-group">
                                <label>
                                    Email name<span style="color:red;">*</span>
                                </label>
                                <input type="text" name="email-name" value="Ordine processato" class="form-control" minlength="3" maxlength="150" required="">
                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Email subject                                </label>
                                <input type="text" name="subject" value="Ordine processato" class="form-control" minlength="3" maxlength="150">
                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Sender name                                </label>
                                <input type="text" name="sender-name" value="CarpeDM Fashion (www.carpedmfashion.com)" class="form-control" minlength="3" maxlength="150">
                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Sender email                                </label>
                                <input type="text" name="sender-email" value="italia@carpedmfashion.com" class="form-control" minlength="3" maxlength="150">
                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Hide copy email                                </label>
                                <input type="text" name="hide-copy-email" value="kleinova@carpedmfashion.com" class="form-control" minlength="3" maxlength="150">
                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Signature                                </label>
                                <textarea name="signature" class="form-control" rows="5">Stanislava Klein - CARPE DM
numero REA BZ - 209889 

IVA 02837500210

Via Portici 253
39012 Merano
Italia
Assistenza clienti:

Telefono.:    +39 320 394 4879
Email: italy@carpedmfashion.com</textarea>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <h4 style="border-bottom:1px solid #33414e;">NASTAVENIA</h4>
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Pozor!</strong> 
                                An error occurred while sending mail.
                            </div>
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Úspech!</strong> 
                                Email has been sent successfully.
                            </div>
                            <div class="form-group">
                                <label>
                                    SEND TEST EMAIL                                </label>
                                <div class="input-group">
                                    <input type="text" name="t-recipient" value="" placeholder="Test recipient" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-send">
                                            <i class="fa fa-paper-plane"></i>&nbsp;SEND
                                        </button>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    WIDGETS                                </label>
                                <select name="widget-id" class="form-control select">
                                    <option value="0">Vyberte...</option>
                                    <option value="1" >
                                      ORDER
                                    </option>
                                    <option value="2" selected>
                                      INVOICE
                                    </option>
                                    <option value="3" >
                                      ARTICLE LIST
                                    </option>
                                    <option value="4" >
                                      DISCOUNT CIRCUIT
                                    </option>
                                    <option value="5" >
                                      OFFER
                                    </option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <div id="tags-place">
                                                                                                                        <span class="tag">{{store_name}}</span>
                                                                                    <span class="tag">{{store_phone}}</span>
                                                                                    <span class="tag">{{store_email}}</span>
                                                                                    <span class="tag">{{store_pickup_address}}</span>
                                                                                    <span class="tag">{{store_address}}</span>
                                                                                    <span class="tag">{{store_opening_hours}}</span>
                                                                                    <span class="tag">{{client_full_name}}</span>
                                                                                    <span class="tag">{{invoice}}</span>
                                                                                    <span class="tag">{{primary_email}}</span>
                                                                                    <span class="tag">{{secondary_email}}</span>
                                                                                                            </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    SEND HIDE COPY                                </label><br>
                                <label class="switch">
                                    <input type="checkbox" name="is-hide-copy" value="1" checked>
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>Zapnúť</label><br>
                                <label class="switch">
                                    <input type="checkbox" name="enable" value="1" checked>
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 style="margin-top: 20px;border-bottom:1px solid #3fbae4;">HTML OBSAH</h4>
                            <textarea name="html-content" id="ckeditor" class="ckeditor" row="5"><p dir="ltr" style="line-height: 20.8px;"><span style="font-size: 14px;"><small><big><span style="font-family: arial, helvetica, sans-serif;"><em comic="" ms="" sans="" style="font-family:;">Gentile cliente</em></span></big></small></span></p>

<p dir="ltr" style="line-height: 20.8px;">La merce da voi ordinata &egrave; stata spedita oggi, secondo le modalit&agrave; che avete scelto.</p>

<p dir="ltr" style="line-height: 20.8px;">Un augurio di una buona giornata, cordiali saluti.</p>

<p dir="ltr" style="line-height: 20.8px;"><span style="font-size: 14px;"><small><big><span style="font-family: arial, helvetica, sans-serif;">CarpeDM Fashion</span></big></small></span></p>
</textarea>
                            </div>  
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success" role="button">
                        <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                    </button>
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
<script type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor', {
        "extraPlugins": "imagebrowser",
        "imageBrowser_listUrl": "http://www.carpedmfashion.com/cpanel/drive-api/build-image-register"
    });
</script>
<script type="text/javascript">
$(function() {
    $('[name="widget-id"]').on('change',function() {
        $('#tags-place').empty();
        $.ajax({
            url: 'cpanel/store/email/api',
            data: { widgetId: parseInt($(this).val()) },
            type: 'POST',
            success: function(content) {
                if(content.length > 0) {
                    $('#tags-place').html( content );
                }
            },
            error: function(data) {
               console.log(data)
            },
            dataType: 'HTML'
        });
    });
    $('.alert-danger').find('.close').on('click', function() {
        $('.alert-danger').hide();
    });
    $('.alert-success').find('.close').on('click', function() {
        $('.alert-success').hide();
    });
    $('.btn-send').on('click', function() {
        var recipient = $('[name="t-recipient"]').val();
        
        if(recipient.length > 0) {
            $.ajax({
                url: 'cpanel/store/email/send-email',
                data: { emailId: 4, recipient: recipient },
                type: 'POST',
                success: function(responseJSON) {
                    if(responseJSON.status === 200) {
                        $('.alert-success').fadeIn( 300 ).delay( 1200 ).fadeOut( 400 );
                    } else {
                        $('.alert-danger').fadeIn( 300 ).delay( 1200 ).fadeOut( 400 );
                    }
                },
                error: function(data) {
                   console.log(data);
                },
                dataType: 'JSON'
            });
        } else {
            alert('Test recipient email is required.');
        }
    });
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
