<?php /*%%SmartyHeaderCode:27857494758510b5506faf8-68767105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f5241c1e7839b40ac202d9dfc06b377511407af' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/router/ajax/router_form.tpl',
      1 => 1469707234,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '27857494758510b5506faf8-68767105',
  'variables' => 
  array (
    'languages' => 0,
    'tabLang' => 0,
    'i' => 0,
    'lang' => 0,
    'router' => 0,
    'baseUrl' => 0,
    'global_router_label_close' => 0,
    'global_router_label_change' => 0,
    'global_router_label_delete' => 0,
    'global_router_label_create' => 0,
    'global_router_label_suggestions' => 0,
    'global_alert_info' => 0,
    'global_router_alert_no_suggestions' => 0,
    'global_router_label_redirection' => 0,
    'global_router_label_path' => 0,
    'global_router_label_use' => 0,
    'global_router_label_remove' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58510b55324e20_90397176',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58510b55324e20_90397176')) {function content_58510b55324e20_90397176($_smarty_tpl) {?><!-- START TABS -->
<div class="panel panel-default tabs" style="margin: 5px 0;">                            
  <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
          <li >
        <a href="#tab-direction-en-GB" role="tab" data-toggle="tab">
          <span class="flag-icon flag-icon-en-GB"  style="width:23px;height:23px;"></span>
          <span style="position: relative;top: 5.5px;left: 1.5px;">English (United Kingdom)</span>
        </a>
      </li>
          <li >
        <a href="#tab-direction-it-IT" role="tab" data-toggle="tab">
          <span class="flag-icon flag-icon-it-IT"  style="width:23px;height:23px;"></span>
          <span style="position: relative;top: 5.5px;left: 1.5px;">Italian (Italy)</span>
        </a>
      </li>
          <li class="active">
        <a href="#tab-direction-sk" role="tab" data-toggle="tab">
          <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
          <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
        </a>
      </li>
      </ul>                            
  <div class="panel-body tab-content">
          <div class="tab-pane " id="tab-direction-en-GB">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <div id="r-k-v-c-0-51" class="input-group">
                                  <span class="input-group-addon">
                    http://www.carpedmfashion.com
                  </span>
                  <input id="r-k-i-0-51"
                    type="text" 
                    value="" 
                    class="form-control r-k-v"
                    data-route-id="0"
                    data-lang-id="51"
                    data-object-id="353"
                    data-object-type-id="11"
                    style="border-radius: 0px;"
                  />
                  <span class="input-group-addon">
                    <span class="flag-icon flag-icon-en-GB"></span>
                  </span>
                              </div><!-- end input-group -->
            </div><!-- end form-group -->
            <div id="r-k-c-c-0-51" class="row" style="display:none;">
              <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                <div class="form-group">
                  <label for="key">
                    URL KEY
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-en-GB"></span>
                    </span>
                    <input id="r-k-c-i-0-51"
                      type="text" 
                      value="" 
                      class="form-control"
                      data-route-id="0"
                      data-lang-id="51"
                      data-object-id="353"
                      data-object-type-id="11"
                      style="border-radius: 0px;"
                    />
                    <span class="input-group-btn">
                      <button type="button" 
                        id="r-k-c-b-u-0-51" 
                        class="btn btn-success r-k-c-b-u"
                        data-route-id="0"
                        data-lang-id="51"
                        data-object-id="353"
                        data-object-type-id="11"
                        disabled
                      >
                        <i class="fa fa-floppy-o"></i>
                      </button>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                <button type="button" id="r-k-c-b-c-0-51" class="btn btn-default btn-block" style="margin-top: 22px;">
                  <i class="fa fa-times"></i>&nbsp;
                  CLOSE                </button>
              </div><!-- end col -->
            </div><!-- end row -->
                          <div id="r-p-c-0-51" class="row" style="display:none;">
                <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                  <div class="form-group">
                      <label for="prefix">
                          URL PREFIX
                      </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-en-GB"></span>
                        </span>
                        <input id="r-p-i-0-51"
                          type="text" 
                          value="" 
                          class="form-control r-p-v"
                          data-route-id="0"
                          data-lang-id="51"
                          data-object-id="353"
                          data-object-type-id="11"
                          style="border-radius: 0px;"
                        />
                        <span class="input-group-btn">
                          <button type="button" 
                            id="r-p-b-u-0-51" 
                            class="btn btn-success r-p-b-u" 
                            data-route-id="0"
                            data-lang-id="51"
                            data-object-id="353"
                            data-object-type-id="11"
                            disabled
                          >
                            <i class="fa fa-floppy-o"></i>
                          </button>
                        </span>
                      </div><!-- end input-group -->
                  </div><!-- end form-group -->
                </div><!-- end col -->
                <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                  <button type="button" id="r-p-b-cl-0-51" class="btn btn-default btn-block" style="margin-top: 22px;">
                    <i class="fa fa-times"></i>&nbsp;
                    CLOSE                  </button>
                </div><!-- end col -->
              </div><!-- end row -->
                      </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top: 15px;">
          <div class="col-lg-4 col-sm-12 col-xs-12">
                          <button 
                type="button" 
                id="r-c-k-d-b-0-51" 
                class="btn btn-success btn-block r-c-k-d-b"
                data-route-id="0"
                data-lang-id="51"
                data-object-id="353"
                data-object-type-id="11"
                disabled              >
                <i class="fa fa-floppy-o"></i>&nbsp;
                CREATE              </button>
                      </div><!-- end col -->
          <div class="col-lg-8 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <i class="fa fa-map-o"></i>&nbsp;
                  SUGGESTIONS                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                  <strong>INFO!!</strong>
                  There are no suggestions.                </div>
              </div><!-- end panel-body -->
            </div><!-- end panel -->
          </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top: 5px;">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <i class="fa fa-exchange"></i>&nbsp;
                  SEO REDIRECTION                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                                  <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                    <strong>INFO!!</strong>
                    There are no redirection.                  </div>
                              </div><!-- end panel-body -->
            </div><!-- end panel -->
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end tab-pane -->
          <div class="tab-pane " id="tab-direction-it-IT">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <div id="r-k-v-c-0-120" class="input-group">
                                  <span class="input-group-addon">
                    http://www.carpedmfashion.com
                  </span>
                  <input id="r-k-i-0-120"
                    type="text" 
                    value="" 
                    class="form-control r-k-v"
                    data-route-id="0"
                    data-lang-id="120"
                    data-object-id="353"
                    data-object-type-id="11"
                    style="border-radius: 0px;"
                  />
                  <span class="input-group-addon">
                    <span class="flag-icon flag-icon-it-IT"></span>
                  </span>
                              </div><!-- end input-group -->
            </div><!-- end form-group -->
            <div id="r-k-c-c-0-120" class="row" style="display:none;">
              <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                <div class="form-group">
                  <label for="key">
                    URL KEY
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-it-IT"></span>
                    </span>
                    <input id="r-k-c-i-0-120"
                      type="text" 
                      value="" 
                      class="form-control"
                      data-route-id="0"
                      data-lang-id="120"
                      data-object-id="353"
                      data-object-type-id="11"
                      style="border-radius: 0px;"
                    />
                    <span class="input-group-btn">
                      <button type="button" 
                        id="r-k-c-b-u-0-120" 
                        class="btn btn-success r-k-c-b-u"
                        data-route-id="0"
                        data-lang-id="120"
                        data-object-id="353"
                        data-object-type-id="11"
                        disabled
                      >
                        <i class="fa fa-floppy-o"></i>
                      </button>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                <button type="button" id="r-k-c-b-c-0-120" class="btn btn-default btn-block" style="margin-top: 22px;">
                  <i class="fa fa-times"></i>&nbsp;
                  CLOSE                </button>
              </div><!-- end col -->
            </div><!-- end row -->
                          <div id="r-p-c-0-120" class="row" style="display:none;">
                <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                  <div class="form-group">
                      <label for="prefix">
                          URL PREFIX
                      </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-it-IT"></span>
                        </span>
                        <input id="r-p-i-0-120"
                          type="text" 
                          value="" 
                          class="form-control r-p-v"
                          data-route-id="0"
                          data-lang-id="120"
                          data-object-id="353"
                          data-object-type-id="11"
                          style="border-radius: 0px;"
                        />
                        <span class="input-group-btn">
                          <button type="button" 
                            id="r-p-b-u-0-120" 
                            class="btn btn-success r-p-b-u" 
                            data-route-id="0"
                            data-lang-id="120"
                            data-object-id="353"
                            data-object-type-id="11"
                            disabled
                          >
                            <i class="fa fa-floppy-o"></i>
                          </button>
                        </span>
                      </div><!-- end input-group -->
                  </div><!-- end form-group -->
                </div><!-- end col -->
                <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                  <button type="button" id="r-p-b-cl-0-120" class="btn btn-default btn-block" style="margin-top: 22px;">
                    <i class="fa fa-times"></i>&nbsp;
                    CLOSE                  </button>
                </div><!-- end col -->
              </div><!-- end row -->
                      </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top: 15px;">
          <div class="col-lg-4 col-sm-12 col-xs-12">
                          <button 
                type="button" 
                id="r-c-k-d-b-0-120" 
                class="btn btn-success btn-block r-c-k-d-b"
                data-route-id="0"
                data-lang-id="120"
                data-object-id="353"
                data-object-type-id="11"
                disabled              >
                <i class="fa fa-floppy-o"></i>&nbsp;
                CREATE              </button>
                      </div><!-- end col -->
          <div class="col-lg-8 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <i class="fa fa-map-o"></i>&nbsp;
                  SUGGESTIONS                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                  <strong>INFO!!</strong>
                  There are no suggestions.                </div>
              </div><!-- end panel-body -->
            </div><!-- end panel -->
          </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top: 5px;">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <i class="fa fa-exchange"></i>&nbsp;
                  SEO REDIRECTION                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                                  <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                    <strong>INFO!!</strong>
                    There are no redirection.                  </div>
                              </div><!-- end panel-body -->
            </div><!-- end panel -->
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end tab-pane -->
          <div class="tab-pane active" id="tab-direction-sk">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <div id="r-k-v-c-8533-189" class="input-group">
                                  <span class="input-group-addon">
                    <i class="fa fa-chrome"></i>
                  </span>
                  <input type="text" value="http://www.carpedmfashion.com/damske-oblecenie/damske-teplaky/damske-bavlnene-teplaky-poor-woman-pants" class="form-control" />
                  <span class="input-group-btn">
                    <a href="http://www.carpedmfashion.com/damske-oblecenie/damske-teplaky/damske-bavlnene-teplaky-poor-woman-pants" target="__blank" class="btn btn-primary">
                      <i class="fa fa-eye"></i>
                    </a>
                  </span>
                              </div><!-- end input-group -->
            </div><!-- end form-group -->
            <div id="r-k-c-c-8533-189" class="row" style="display:none;">
              <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                <div class="form-group">
                  <label for="key">
                    URL KEY
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-sk"></span>
                    </span>
                    <input id="r-k-c-i-8533-189"
                      type="text" 
                      value="" 
                      class="form-control"
                      data-route-id="8533"
                      data-lang-id="189"
                      data-object-id="353"
                      data-object-type-id="11"
                      style="border-radius: 0px;"
                    />
                    <span class="input-group-btn">
                      <button type="button" 
                        id="r-k-c-b-u-8533-189" 
                        class="btn btn-success r-k-c-b-u"
                        data-route-id="8533"
                        data-lang-id="189"
                        data-object-id="353"
                        data-object-type-id="11"
                        disabled
                      >
                        <i class="fa fa-floppy-o"></i>
                      </button>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                <button type="button" id="r-k-c-b-c-8533-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                  <i class="fa fa-times"></i>&nbsp;
                  CLOSE                </button>
              </div><!-- end col -->
            </div><!-- end row -->
                          <div id="r-p-c-8533-189" class="row" style="display:none;">
                <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                  <div class="form-group">
                      <label for="prefix">
                          URL PREFIX
                      </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-sk"></span>
                        </span>
                        <input id="r-p-i-8533-189"
                          type="text" 
                          value="" 
                          class="form-control r-p-v"
                          data-route-id="8533"
                          data-lang-id="189"
                          data-object-id="353"
                          data-object-type-id="11"
                          style="border-radius: 0px;"
                        />
                        <span class="input-group-btn">
                          <button type="button" 
                            id="r-p-b-u-8533-189" 
                            class="btn btn-success r-p-b-u" 
                            data-route-id="8533"
                            data-lang-id="189"
                            data-object-id="353"
                            data-object-type-id="11"
                            disabled
                          >
                            <i class="fa fa-floppy-o"></i>
                          </button>
                        </span>
                      </div><!-- end input-group -->
                  </div><!-- end form-group -->
                </div><!-- end col -->
                <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                  <button type="button" id="r-p-b-cl-8533-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                    <i class="fa fa-times"></i>&nbsp;
                    CLOSE                  </button>
                </div><!-- end col -->
              </div><!-- end row -->
                      </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top: 15px;">
          <div class="col-lg-4 col-sm-12 col-xs-12">
                          <div class="row" style="margin-bottom: 5px;">
                <div class="col-lg-6 col-sm-6 col-xs-6" style="padding-left: 0px;">
                  <button 
                    type="button"
                    id="r-k-c-8533-189"
                    class="btn btn-warning btn-block r-k-c"
                    data-route-id="8533"
                    data-lang-id="189"
                    data-object-id="353"
                    data-object-type-id="11"
                  >
                    <i class="fa fa-exchange"></i>&nbsp;
                    CHANGE URL KEY                  </button>
                </div><!-- end col -->
                <div class="col-lg-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                  <button 
                    type="button"
                    class="btn btn-danger btn-block r-d-d"
                    data-route-id="8533"
                    data-lang-id="189"
                    data-object-id="353"
                    data-object-type-id="11"
                  >
                    <i class="fa fa-times"></i>&nbsp;
                    DELETE                  </button>
                </div><!-- end col -->
              </div><!-- end row -->
                              <button type="button" 
                  id="r-p-b-c-8533-189" 
                  data-route-id="8533"
                  data-lang-id="189"
                  data-object-id="353"
                  data-object-type-id="11"
                  class="btn btn-default btn-block r-p-b-c"
                >
                  <i class="fa fa-location-arrow"></i>&nbsp;
                  ADD URL PREFIX                </button>
                                                  </div><!-- end col -->
          <div class="col-lg-8 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <i class="fa fa-map-o"></i>&nbsp;
                  SUGGESTIONS                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                  <strong>INFO!!</strong>
                  There are no suggestions.                </div>
              </div><!-- end panel-body -->
            </div><!-- end panel -->
          </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top: 5px;">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <i class="fa fa-exchange"></i>&nbsp;
                  SEO REDIRECTION                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                                  <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                    <strong>INFO!!</strong>
                    There are no redirection.                  </div>
                              </div><!-- end panel-body -->
            </div><!-- end panel -->
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end tab-pane -->
      </div><!-- end panel-body -->
</div><!-- end panel -->
<!-- END TABS --><?php }} ?>
