<?php /*%%SmartyHeaderCode:23928874057430e483999b7-99763682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2a9b2d563bf7281535d532ae5e13d771dc60fe7' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/signin.tpl',
      1 => 1460547454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23928874057430e483999b7-99763682',
  'variables' => 
  array (
    'baseUrl' => 0,
    'datetime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57430e483c1ae6_44594351',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57430e483c1ae6_44594351')) {function content_57430e483c1ae6_44594351($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <base href="http://carpedmfashion.local" />
        <!-- META SECTION -->
        <title>Sign in | MOZAYC</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="extensions/cpanel/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE --> 
        <style>
            .e {
                font-weight: 700;
                letter-spacing: 1px;
                color: #B70010;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <div class="login-box animated fadeInDown">
                <div class="login-logo"><!-- --></div>
                <div class="login-body">
                    <div class="login-title">Vitajte, prosím prihláste sa</div>
                    <form action="cpanel/sign/in" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" name="xe" value="" placeholder="Email" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="xps" value="" placeholder="Password" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-block">Prihlásiť</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        <a href="http://www.mozayc.net/" target="_blank" title="Mozayc s.r.o.">Mozayc s.r.o.</a>  |  <span class="e">E-Store</span>
                    </div>
                    <div class="pull-right">
                        Všetky práva vyhradené &copy; 2016
                    </div>
                </div>
            </div>
        </div>
    </body>
</html><?php }} ?>
