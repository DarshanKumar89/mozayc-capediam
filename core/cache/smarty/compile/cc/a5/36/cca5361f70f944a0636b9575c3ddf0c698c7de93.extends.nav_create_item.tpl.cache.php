<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-26 14:47:20
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/navigation/nav_create_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20327209857e918d8cb2745-42293555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '20327209857e918d8cb2745-42293555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'model' => 0,
    'parentId' => 0,
    'patternId' => 0,
    'global_site_modal_window_new_navigation_item_title' => 0,
    'global_site_modal_window_new_navigation_item_pages' => 0,
    'global_form_select_choose' => 0,
    'pageList' => 0,
    'item' => 0,
    'global_site_modal_window_new_navigation_item_categories' => 0,
    'categoryList' => 0,
    'global_site_modal_window_new_navigation_item_page_list' => 0,
    'global_site_form_header_access' => 0,
    'global_site_form_header_publish' => 0,
    'global_site_modal_window_new_navigation_item_form_label_icon' => 0,
    'global_site_form_header_css_id' => 0,
    'global_site_form_header_css_classes' => 0,
    'languages' => 0,
    'i' => 0,
    'lang' => 0,
    'global_site_modal_window_new_navigation_item_form_label_item_name' => 0,
    'global_site_modal_window_new_navigation_item_form_label_friendly_url' => 0,
    'global_form_header_html_content' => 0,
    'global_form_button_create' => 0,
    'global_form_button_close' => 0,
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e918d8da8817_56563328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e918d8da8817_56563328')) {function content_57e918d8da8817_56563328($_smarty_tpl) {?><div class="row">
    <div class="col-lg-12">
        <form action="cpanel/create-nav-item" method="post" role="form">
            <input type="hidden" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
" />
            <input type="hidden" name="parentId" value="<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
" />
            <input type="hidden" name="patternId" value="<?php echo $_smarty_tpl->tpl_vars['patternId']->value;?>
" />
            <input type="hidden" name="access" value="0" />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <strong>
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_title']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_title']->value;
} else { ?>New navigation item<?php }?>
                        </strong>
                    </h3>
                </div>
                <div class="panel-body">                                                                        
                    <div class="row thumbnail">
                        <div class="col-lg-6">
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_pages']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_pages']->value;
} else { ?>Pages<?php }?>
                                </label>                                        
                                <select id="page" name="page-id" class="form-control select" data-live-search="true" required="">
                                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_page;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->pagename;?>
</option>
                                    <?php } ?>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_categories']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_categories']->value;
} else { ?>Categories<?php }?>
                                </label>                                        
                                <select id="category" name="category-id" class="form-control select" data-live-search="true" required="">
                                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->category_name;?>
</option>
                                    <?php } ?>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12" style="display: none;">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_page_list']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_page_list']->value;
} else { ?>Page list<?php }?>
                                </label>                                        
                                <select id="pageList" name="page-list-id" class="form-control select" data-live-search="true" required="">
                                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                                    
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_access']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_access']->value;
} else { ?>Access<?php }?>
                                </label>                                        
                                <select class="form-control select" data-style="btn-warning" disabled>
                                    <option value="0">default</option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-6 pull-left">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_publish']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_publish']->value;
} else { ?>Publish<?php }?>
                                </label><br>
                                <label class="switch">
                                    <input type="checkbox" name="publish" value="1" checked="">
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-6 pull-right">
                                <label>
                                    USE HTML
                                </label><br>
                                <label class="switch">
                                    <input type="checkbox" name="use-html" value="1">
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_form_label_icon']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_form_label_icon']->value;
} else { ?>Icon<?php }?>
                                </label>
                                <input class="form-control" type="text" name="icon" value="">
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_css_id']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_css_id']->value;
} else { ?>CSS ID<?php }?>
                                </label>
                                <input class="form-control" type="text" name="css-id" value="">
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_css_classes']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_css_classes']->value;
} else { ?>CSS Classes<?php }?>
                                </label>
                                <input class="tagsinput form-control" type="text" name="css-classes" value=""/>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-12">
                            <?php if (!empty($_smarty_tpl->tpl_vars['languages']->value)) {?>                               
                                <div class="panel panel-default tabs">                            
                                    <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                        <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                                            <li <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>class="active"<?php }?>>
                                                <a href="#tab-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
" role="tab" data-toggle="tab">
                                                    <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"  style="width:23px;height:23px;"></span>
                                                    <span style="position: relative;top: 5.5px;left: 1.5px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->lang_name;?>
</span>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>   
                                </div>
                                <div class="panel-body tab-content">
                                    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                                        <div class="tab-pane itemLang <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_form_label_item_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_form_label_item_name']->value, 'UTF-8');
} else { ?>NAV ITEM NAME<?php }?>
                                                        </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                            </span>
                                                            <input type="text"
                                                                   name="linksname[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['name']"
                                                                   value=""
                                                                   placeholder="<?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_form_label_item_name']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_form_label_item_name']->value;
} else { ?>Item name<?php }?>"
                                                                   class="form-control ipt"
                                                                   data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                                                   required/>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-bars"></i>
                                                            </span>
                                                        </div><!-- end input-group -->
                                                    </div><!-- end form-group -->
                                                </div><!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_form_label_friendly_url']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_item_form_label_friendly_url']->value;
} else { ?>Friendly URL<?php }?>
                                                        </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                            </span>
                                                            <input type="text" name="linksname[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['url_link']" value="" class="form-control tagsinput"/>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-external-link"></i>
                                                            </span>
                                                        </div><!-- end input-group -->
                                                    </div><!-- end form-group -->
                                                </div><!-- end col -->
                                                <div class="col-lg-12" style="margin:15px 0;">
                                                    <label>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_html_content']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_html_content']->value, 'UTF-8');
} else { ?>HTML CONTENT<?php }?>
                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <textarea name="linksname[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['html-content']" id="ckeditor_<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="ckeditor" row="5"></textarea>
                                                    </div>  
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php }?>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->
                <div class="panel-footer">                                 
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                    </button>
                </div><!-- end panel-footer -->
            </div><!-- end panel -->
        </form>
    </div>
</div>
<?php echo '<script'; ?>
>
$(function() {
    if($(".select").length > 0){
        $(".select").selectpicker();

        $(".select").on("change", function(){
            if($(this).val() == "" || null === $(this).val()){
                if(!$(this).attr("multiple"))
                    $(this).val("").find("option").removeAttr("selected").prop("selected",false);
            }else{
                $(this).find("option[value="+$(this).val()+"]").attr("selected",true);
            }
        });
    }
    if($(".tagsinput").length > 0){       
        $(".tagsinput").each(function(){

            if($(this).data("placeholder") != ''){
                var dt = $(this).data("placeholder");
            }else
                var dt = 'add a tag';

            $(this).tagsInput({
                width: '100%',
                height:'auto',
                defaultText: dt
            });
        });
    }
    $('#page').on('change',function() {
        var value = $(this).val();

        if(value == '0') {
            clearLangInpts();
        } else {
            $.ajax({
                url: 'cpanel/nav-page-lang-data',
                data: { pageId: value},
                type: 'POST',
                success: function(responseJSON) {
                    if(responseJSON.status === 200) {
                      for(var i in responseJSON.data) {
                        if(responseJSON.data[i].heading.length > 0) {
                            $('[data-lang-id='+responseJSON.data[i].id_lang+']').val(responseJSON.data[i].heading);
                        } else {
                            $('[data-lang-id='+responseJSON.data[i].id_lang+']').val('');
                        }
                      }
                    } else {
                        clearLangInpts();
                    }
                },
                error: function(data) {
                    console.log(data);
                },
                dataType: 'JSON'
            });
        }
    });
    
    $('#category').on('change',function() {
        var value = $(this).val();

        if(value == '0') {
            clearLangInpts();
        } else {
            $.ajax({
                url: 'cpanel/store-category-lang-data',
                data: { categoryId: value},
                type: 'POST',
                success: function(responseJSON) {
                    if(responseJSON.status === 200) {
                      for(var i in responseJSON.data) {
                        if(responseJSON.data[i].category_name.length > 0) {
                            $('[data-lang-id='+responseJSON.data[i].id_lang+']').val(responseJSON.data[i].category_name);
                        } else {
                            $('[data-lang-id='+responseJSON.data[i].id_lang+']').val('');
                        }
                      }
                    } else {
                        clearLangInpts();
                    }
                },
                error: function(data) {
                    console.log(data);
                },
                dataType: 'JSON'
            });
        }
    });
    
    function clearLangInpts() {
        $('.itemLang').find('.ipt').each(function() {
            $(this).val('');
        });
    }
    
    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
        CKEDITOR.replace('ckeditor_<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
', {
            "extraPlugins": "imagebrowser",
            "imageBrowser_listUrl": "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/cpanel/drive-api/build-image-register"
        });
    <?php } ?> 
});
<?php echo '</script'; ?>
><?php }} ?>
