<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-19 17:00:05
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/slider/ajax/slider_captions_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87703740057166415be39a4-04806846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '87703740057166415be39a4-04806846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'sliderId' => 0,
    'itemId' => 0,
    'global_alert_success' => 0,
    'global_slider_alert_success_message' => 0,
    'i' => 0,
    'lang' => 0,
    'global_slider_form_label_web_link' => 0,
    'captions' => 0,
    'global_slider_form_label_title' => 0,
    'global_slider_form_label_description' => 0,
    'global_form_button_save_changes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57166415c171a4_86783437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57166415c171a4_86783437')) {function content_57166415c171a4_86783437($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['languages']->value)>0) {?>
    <form id="captionsForm" role="form">
        <input type="hidden" name="command" value="2"/>
        <input type="hidden" name="sliderId" value="<?php echo $_smarty_tpl->tpl_vars['sliderId']->value;?>
"/>
        <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
"/>
        <div id="mAlert" class="row" style="display:none;">
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                    <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_success']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_success']->value, 'UTF-8');
} else { ?>SUCCESS<?php }?>!</strong>
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_slider_alert_success_message']->value)) {
echo $_smarty_tpl->tpl_vars['global_slider_alert_success_message']->value;
} else { ?>Captions have been successfully saved.<?php }?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">  
                <!-- START TABS -->                                
                <div class="panel panel-default tabs" style="margin:5px 0;">                            
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
                    <div class="panel-body tab-content">
                        <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                            <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['global_slider_form_label_web_link']->value)) {
echo $_smarty_tpl->tpl_vars['global_slider_form_label_web_link']->value;
} else { ?>WEB Link<?php }?>
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                </span>
                                                <input type="text" name="captions[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['link']" value="<?php if (isset($_smarty_tpl->tpl_vars['captions']->value[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->link)) {
echo $_smarty_tpl->tpl_vars['captions']->value[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->link;
}?>" class="form-control">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-external-link"></i>
                                                </span>
                                            </div>
                                        </div><!-- end form-group -->
                                        <div class="form-group">
                                            <label>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['global_slider_form_label_title']->value)) {
echo $_smarty_tpl->tpl_vars['global_slider_form_label_title']->value;
} else { ?>Title<?php }?>
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                </span>
                                                <input type="text" name="captions[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['title']" value="<?php if (isset($_smarty_tpl->tpl_vars['captions']->value[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->title)) {
echo $_smarty_tpl->tpl_vars['captions']->value[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->title;
}?>" class="form-control">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-file-text-o"></i>
                                                </span>
                                            </div>
                                        </div><!-- end form-group -->
                                        <div class="form-group">
                                            <label>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['global_slider_form_label_description']->value)) {
echo $_smarty_tpl->tpl_vars['global_slider_form_label_description']->value;
} else { ?>Description<?php }?>
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                </span>
                                                <textarea name="captions[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['description']" class="form-control" rows="5"><?php if (isset($_smarty_tpl->tpl_vars['captions']->value[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->description)) {
echo $_smarty_tpl->tpl_vars['captions']->value[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->description;
}?></textarea>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-file-text-o"></i>
                                                </span>
                                            </div>
                                        </div><!-- end form-group -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end tab -->
                        <?php } ?>
                    </div><!-- end panel-body -->
                </div><!-- end pane -->
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top:25px;">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-block btn-success">
                    <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
                </button>
            </div>
        </div>
    </form>
<?php }?>
<?php echo '<script'; ?>
 type="text/javascript">
$(function() {
    $('#captionsForm').submit(function() {
        $.ajax({
            url: 'cpanel/slider-captions',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if(response.status == 200) {
                    $('#mAlert').fadeIn( 300 ).delay( 800 ).fadeOut( 400 );
                }
            },
            error: function(data) {
                console.log(data);
            },
            dataType: 'JSON'
        });
        return false;
    });
});
<?php echo '</script'; ?>
><?php }} ?>
