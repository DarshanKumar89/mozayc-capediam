<?php /*%%SmartyHeaderCode:8658276057332e7593fe76-86691484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccbc0022dea3941f5d41aa4bfcf9dfdbc476e294' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_articles_assigning_table.tpl',
      1 => 1460547471,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '8658276057332e7593fe76-86691484',
  'variables' => 
  array (
    'data' => 0,
    'sort' => 0,
    'page' => 0,
    'limit' => 0,
    'keywords' => 0,
    'total' => 0,
    'global_label_article_list' => 0,
    'whAL' => 0,
    'pagination_info' => 0,
    'pagination' => 0,
    'store_articles_table_header_picture' => 0,
    'store_articles_table_header_sku' => 0,
    'store_articles_table_header_article_name' => 0,
    'store_articles_table_header_base_price' => 0,
    'store_articles_table_header_retail_price' => 0,
    'store_articles_table_header_qty' => 0,
    'store_articles_table_header_publish' => 0,
    'global_gallery_table_header_remove' => 0,
    'i' => 0,
    'item' => 0,
    'global_alert_info' => 0,
    'store_warehouse_info_not_any_article' => 0,
    'global_form_select_choose' => 0,
    'store_warehouse_submit_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57332e759ae2a9_96941672',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57332e759ae2a9_96941672')) {function content_57332e759ae2a9_96941672($_smarty_tpl) {?><form action="cpanel/store-warehouse-update-article-list" method="post" role="form">
  <input type="hidden" name="whId" value="5"/>
  <input type="hidden" name="sort" value="0"/>
  <input type="hidden" name="page" value="1"/>
  <input type="hidden" name="limit" value="10"/>
  <input type="hidden" name="keywords" value="WAY WOMAN"/>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <span class="btn btn-info" style="margin: 0 15px;">266</span>
          ZOZNAM ARTIKLOV          &nbsp;<span class="badge">Zobrazených 1-10 z 266 záznamov</span>        </h3>
        <ul class="panel-controls">
          <li>
            <a href="#" onclick="return false;" id="a-o-a-l" title="Article List">
              <span class="fa fa-plus"></span>
            </a>
          </li>
          <li>
            <a href="#" onclick="return false;" class="panel-collapse">
              <span class="fa fa-angle-down"></span>
            </a>
          </li>
        </ul>
      </div><!-- end panel-heading -->
      <div class="panel-body panel-body-table">
                  <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
              <div class="form-group pull-left" style="width:150px;margin-right:5px;">
                <select id="c-control" class="form-control select">
                  <option value="0">Vyberte...</option>
                  <option value="99">
                    Oznažiť všetko
                  </option>
                  <option value="88">
                    Odznažiť všetko
                  </option>
                </select>
              </div>
              <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                <select class="form-control select" onchange="location = 'cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/'+this.options[this.selectedIndex].value+'/1/10'+'?q=WAY WOMAN';">
                  <option value="0" selected>Možnosťi zoradenia...</option>
                  <option value="1" >Názov produktu: od A po Z</option>
                  <option value="2" >Názov produktu: od Z po A</option>
                  <option value="3" >Ceny: od najnižšej</option>
                  <option value="4" >Ceny: od najvyššej</option>
                  <option value="5" >Pridané produkty: vzostupne</option>
                  <option value="6" >Pridané produkty: zostupne</option>
                  <option value="7" >Naposledy aktualizované: vzostupne</option>
                  <option value="8" >Naposledy aktualizované: zostupne</option>
                </select>
              </div><!-- end form-group -->
              <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                <select class="form-control select" onchange="location = 'cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/1/'+this.options[this.selectedIndex].value+'?q=WAY WOMAN';">
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
                  <input type="text" id="search" value="WAY WOMAN" placeholder="Hladať" class="form-control">
                    <span class="input-group-btn">
                        <button type="button" onclick="location = 'cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                          <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
              </div>
              <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/1/10">1</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/2/10">2</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/3/10">3</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/4/10">4</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/5/10">5</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/27/10">27</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
            </div><!-- end col -->
          </div><!-- end row -->
          <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
            <table id="whAL" class="table table-bordered table-striped table-actions">
              <thead>
                <tr>
                  <th width="30" class="text-center">
                    #
                  </th>
                  <th width="30" class="text-center">
                    OBRÁZOK                  </th>
                  <th width="200" class="text-center">
                    SKU                  </th>
                  <th class="text-left" style="min-width: 300px;">
                    NÁZOV ARTIKLU                  </th>
                  <th width="150" class="text-center">
                    RRP
                  </th>
                  <th width="150" class="text-center">
                    ROZDIEL
                  </th>
                  <th width="150" class="text-center">
                    ZÁKLADNÁ CENA                  </th>
                  <th width="150" class="text-center">
                    DAŇ
                  </th>
                  <th width="150" class="text-center">
                    MALOOBCHODNÁ CENA                  </th>
                  <th width="150" class="text-center">
                    MNOŽSTVO (KS)                  </th>
                  <th width="150" class="text-center">
                    MATRICA
                  </th>
                  <th width="150" class="text-center">
                    EDITOVAŤ ARTIKEL
                  </th>
                  <th width="100" class="text-center">
                    ZVEREJNIŤ                  </th>
                  <th width="100" class="text-center">
                    ODSTRÁNIŤ                  </th>
                </tr>
              </thead>
              <tbody>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[0]['matrix']" value="0"/>
                      <input type="hidden" name="whAL[0]['article-id']" value="6"/>
                      <input type="checkbox" name="whAL[0]['on']" value="6" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="files/d18bb601584fd3625c3b0e603ed90bb9.png" height="35" alt="STAND PANTS WOMAN_0"/>
                                          </td>
                    <td class="text-center">
                      <strong>100006</strong>
                    </td>
                    <td class="text-left">
                      STAND WOMAN
                    </td>
                    <td class="text-right indicator">
                      <strong>20.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:#000">
                                                                        0.00&euro;
                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>16.67&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>3.33&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          20.00&euro;
                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                                              <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[0]['qty']" value="4" class="form-control text-right itp-qty" data-article-id="6" data-qty="4" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                                          </td>
                    <td class="text-center">
                                              <a href="cpanel/store-warehouse-create-matrix/5/6" class="btn btn-default" title="STAND WOMAN - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                                          </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/6" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[0]['enable']" value="1" checked="">
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="6" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[1]['matrix']" value="0"/>
                      <input type="hidden" name="whAL[1]['article-id']" value="9"/>
                      <input type="checkbox" name="whAL[1]['on']" value="9" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="files/b36252689109297a41b338394c31c270.png" height="35" alt="VAGABOND JACKET WOMAN_0"/>
                                          </td>
                    <td class="text-center">
                      <strong>100009</strong>
                    </td>
                    <td class="text-left">
                      VAGABOND HOODIE WOMAN
                    </td>
                    <td class="text-right indicator">
                      <strong>70.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:#000">
                                                                        0.00&euro;
                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>58.33&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>11.67&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          70.00&euro;
                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                                              <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[1]['qty']" value="9" class="form-control text-right itp-qty" data-article-id="9" data-qty="9" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                                          </td>
                    <td class="text-center">
                                              <a href="cpanel/store-warehouse-create-matrix/5/9" class="btn btn-default" title="VAGABOND HOODIE WOMAN - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                                          </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/9" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[1]['enable']" value="1" checked="">
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="9" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[2]['matrix']" value="0"/>
                      <input type="hidden" name="whAL[2]['article-id']" value="10"/>
                      <input type="checkbox" name="whAL[2]['on']" value="10" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="/files/fb43db29edf99abc0392de2426be7088.jpg" height="35" alt="DSC06420_u"/>
                                          </td>
                    <td class="text-center">
                      <strong>100010</strong>
                    </td>
                    <td class="text-left">
                      TEMPTER WOMAN
                    </td>
                    <td class="text-right indicator">
                      <strong>46.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:#000">
                                                                        0.00&euro;
                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>38.33&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>7.67&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          46.00&euro;
                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                                              <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[2]['qty']" value="12" class="form-control text-right itp-qty" data-article-id="10" data-qty="12" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                                          </td>
                    <td class="text-center">
                                              <a href="cpanel/store-warehouse-create-matrix/5/10" class="btn btn-default" title="TEMPTER WOMAN - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                                          </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/10" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[2]['enable']" value="1" checked="">
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="10" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[3]['matrix']" value="0"/>
                      <input type="hidden" name="whAL[3]['article-id']" value="11"/>
                      <input type="checkbox" name="whAL[3]['on']" value="11" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="/files/0f3656a7905137306ca688af977c604a.jpg" height="35" alt="DSC06447_u"/>
                                          </td>
                    <td class="text-center">
                      <strong>100011</strong>
                    </td>
                    <td class="text-left">
                      WAY WOMAN
                    </td>
                    <td class="text-right indicator">
                      <strong>46.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:#000">
                                                                        0.00&euro;
                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>38.33&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>7.67&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          46.00&euro;
                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                                              <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[3]['qty']" value="5" class="form-control text-right itp-qty" data-article-id="11" data-qty="5" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                                          </td>
                    <td class="text-center">
                                              <a href="cpanel/store-warehouse-create-matrix/5/11" class="btn btn-default" title="WAY WOMAN - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                                          </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/11" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[3]['enable']" value="1" checked="">
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="11" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[4]['matrix']" value="0"/>
                      <input type="hidden" name="whAL[4]['article-id']" value="32"/>
                      <input type="checkbox" name="whAL[4]['on']" value="32" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="files/02b12c9795af57ec34d1d91e6612957a.png" height="35" alt="CALOUS SHORTS WOMAN_4"/>
                                          </td>
                    <td class="text-center">
                      <strong>100032</strong>
                    </td>
                    <td class="text-left">
                      CALOUS SHORTS WOMAN
                    </td>
                    <td class="text-right indicator">
                      <strong>26.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:#000">
                                                                        0.00&euro;
                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>21.67&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>4.33&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          26.00&euro;
                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                                              <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[4]['qty']" value="4" class="form-control text-right itp-qty" data-article-id="32" data-qty="4" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                                          </td>
                    <td class="text-center">
                                              <a href="cpanel/store-warehouse-create-matrix/5/32" class="btn btn-default" title="CALOUS SHORTS WOMAN - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                                          </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/32" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[4]['enable']" value="1" checked="">
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="32" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[5]['matrix']" value="0"/>
                      <input type="hidden" name="whAL[5]['article-id']" value="33"/>
                      <input type="checkbox" name="whAL[5]['on']" value="33" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="files/b69393ec66ffcb521d1728af8117a5d7.png" height="35" alt="CALOUS TANK WOMAN_0"/>
                                          </td>
                    <td class="text-center">
                      <strong>100033</strong>
                    </td>
                    <td class="text-left">
                      CALOUS TANK WOMAN
                    </td>
                    <td class="text-right indicator">
                      <strong>23.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:#000">
                                                                        0.00&euro;
                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>19.17&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>3.83&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          23.00&euro;
                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                                              <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[5]['qty']" value="19" class="form-control text-right itp-qty" data-article-id="33" data-qty="19" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                                          </td>
                    <td class="text-center">
                                              <a href="cpanel/store-warehouse-create-matrix/5/33" class="btn btn-default" title="CALOUS TANK WOMAN - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                                          </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/33" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[5]['enable']" value="1" checked="">
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="33" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[6]['matrix']" value="0"/>
                      <input type="hidden" name="whAL[6]['article-id']" value="37"/>
                      <input type="checkbox" name="whAL[6]['on']" value="37" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="/files/163dbe59def6ca59fdba02d948085973.jpg" height="35" alt="DSC05598_u"/>
                                          </td>
                    <td class="text-center">
                      <strong>100037</strong>
                    </td>
                    <td class="text-left">
                      VAGABOND WOMAN
                    </td>
                    <td class="text-right indicator">
                      <strong>60.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:#000">
                                                                        0.00&euro;
                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>50.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>10.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          60.00&euro;
                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                                              <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[6]['qty']" value="3" class="form-control text-right itp-qty" data-article-id="37" data-qty="3" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                                          </td>
                    <td class="text-center">
                                              <a href="cpanel/store-warehouse-create-matrix/5/37" class="btn btn-default" title="VAGABOND WOMAN - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                                          </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/37" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[6]['enable']" value="1" checked="">
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="37" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[7]['matrix']" value="0"/>
                      <input type="hidden" name="whAL[7]['article-id']" value="55"/>
                      <input type="checkbox" name="whAL[7]['on']" value="55" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <span style="font-size:1.4em;color:red;">
                          <i class="glyphicon glyphicon-eye-open"></i>
                        </span>
                                          </td>
                    <td class="text-center">
                      <strong>100055</strong>
                    </td>
                    <td class="text-left">
                      POLO WOMAN
                    </td>
                    <td class="text-right indicator">
                      <strong>42.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:#000">
                                                                        0.00&euro;
                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>35.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>7.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          42.00&euro;
                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                                              <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[7]['qty']" value="8" class="form-control text-right itp-qty" data-article-id="55" data-qty="8" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                                          </td>
                    <td class="text-center">
                                              <a href="cpanel/store-warehouse-create-matrix/5/55" class="btn btn-default" title="POLO WOMAN - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                                          </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/55" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[7]['enable']" value="1" checked="">
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="55" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[8]['matrix']" value="0"/>
                      <input type="hidden" name="whAL[8]['article-id']" value="66"/>
                      <input type="checkbox" name="whAL[8]['on']" value="66" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="/files/22461fca0c957fe6b9075de27d880245.jpg" height="35" alt="DSC06379_u"/>
                                          </td>
                    <td class="text-center">
                      <strong>100066</strong>
                    </td>
                    <td class="text-left">
                      COOL WOMAN
                    </td>
                    <td class="text-right indicator">
                      <strong>32.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:#000">
                                                                        0.00&euro;
                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>26.67&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>5.33&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          32.00&euro;
                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                                              <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[8]['qty']" value="12" class="form-control text-right itp-qty" data-article-id="66" data-qty="12" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                                          </td>
                    <td class="text-center">
                                              <a href="cpanel/store-warehouse-create-matrix/5/66" class="btn btn-default" title="COOL WOMAN - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                                          </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/66" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[8]['enable']" value="1" checked="">
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="66" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[9]['matrix']" value="0"/>
                      <input type="hidden" name="whAL[9]['article-id']" value="67"/>
                      <input type="checkbox" name="whAL[9]['on']" value="67" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="/files/a6c3a3ef26bac2c3e52b3cf1078b6e37.jpg" height="35" alt="DSC06388_u"/>
                                          </td>
                    <td class="text-center">
                      <strong>100067</strong>
                    </td>
                    <td class="text-left">
                      COOL WOMAN 2
                    </td>
                    <td class="text-right indicator">
                      <strong>34.00&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:#000">
                                                                        0.00&euro;
                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>28.33&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong>5.67&euro;</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          34.00&euro;
                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                                              <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[9]['qty']" value="17" class="form-control text-right itp-qty" data-article-id="67" data-qty="17" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                                          </td>
                    <td class="text-center">
                                              <a href="cpanel/store-warehouse-create-matrix/5/67" class="btn btn-default" title="COOL WOMAN 2 - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                                          </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/67" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[9]['enable']" value="1" checked="">
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="67" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                              </tbody>
            </table>
          </div><!-- end table-responsive -->
              </div><!-- end panel-body -->
              <div class="panel-footer">
          <div class="form-group pull-left" style="width:200px;margin-right:15px;margin-bottom:0px;">     
            <select name="action" class="form-control select" required>
              <option value="0">Vyberte...</option>
              <option value="1">
                Percentuálne zníženie
              </option>
              <option value="2">
                Percentuálne navýšenie
              </option>
              <option value="3">
                Čiastkové zníženie
              </option>
              <option value="4">
                Čiastkové navýšenie
              </option>
              <option value="5">
                Východzia základna cena
              </option>
            </select>
          </div><!-- end form-group -->
          <div class="form-group pull-left" style="width:140px;margin-right:15px;margin-bottom:0px;">
            <div class="input-group">  
              <span class="input-group-addon" style="background-color: #3fbae4;border-color: #3fbae4;">.00</span>
              <input type="text"  name="value" value="" class="form-control text-right">
            </div>
          </div><!-- end form-group -->
          <button type="submit" class="btn btn-warning">
            <i class="fa fa-save"></i>&nbsp;
            UPLATNIŤ NA OZNAČENÉ ARTIKLE          </button>
          <button type="button" id="UFWAL" class="btn btn-primary">
            <i class="fa fa-save"></i>&nbsp;
            UPLATNIŤ NA VŠETKY ARTIKLE
          </button>
          <div class="delete-group pull-right">
            <button type="button" class="btn btn-block btn-danger">
              <i class="fa fa-exclamation-triangle"></i>&nbsp;
              VYMAZAŤ VŠETKY ARTIKLE
            </button>
            <div class="warning-info">
              <p>
                <strong style="color: red;">
                  Varovanie: história vývoja cien bude navždy zmazaná.
                </strong>
                <strong>
                  Skutočne chcete vymazať celkom <span class="total">266</span> artiklov?
                </strong>
              </p>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" id="dFAL" class="btn btn-default">
                  Áno
                </button>
                <button type="button" class="btn btn-info btn-cls">
                  Nie
                </button>
              </div><!-- end btn-group -->
            </div><!-- end warning-info -->
          </div><!-- end delete-group -->
          <button type="button" id="sdAL" class="btn btn-danger pull-right" style="margin-right: 15px;">
            <i class="fa fa-times"></i>&nbsp;
            VYMAZAŤ OZNAČENÉ ARTIKLE
          </button>
        </div><!-- end panel-footer -->
          </div><!-- end panel -->
  </div><!-- end col -->
</form>
<script>
$(function() {
  if($(".select").length > 0) {
    $(".select").selectpicker();

    $(".select").on("change", function () {
      if ($(this).val() == "" || null === $(this).val()) {
        if(!$(this).attr("multiple")) {
          $(this).val("").find("option").removeAttr("selected").prop("selected", false);
        }
      } else {
        $(this).find("option[value=" + $(this).val() + "]").attr("selected", true);
      }
    });
  }
});
</script><?php }} ?>
