<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-11 14:04:43
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/api/section_value_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88516327557333bfb3fa902-10383936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '88516327557333bfb3fa902-10383936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required' => 0,
    'sectionId' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57333bfb43f4d1_83822308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57333bfb43f4d1_83822308')) {function content_57333bfb43f4d1_83822308($_smarty_tpl) {?><select name="section-values[]" class="form-control select" data-live-search="true" multiple <?php if ($_smarty_tpl->tpl_vars['required']->value==true) {?>required<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['sectionId']->value==1) {?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->category_name;?>
</option>
        <?php } ?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sectionId']->value==2) {?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_attribute;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->attribute_name_public;?>
</option>
        <?php } ?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sectionId']->value==3) {?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>
</option>
        <?php } ?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sectionId']->value==4) {?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_status;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->status_name;?>
</option>
        <?php } ?>
    <?php }?>
</select>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function() {
        if($(".select").length > 0){
            $(".select").selectpicker();
        }
    });
<?php echo '</script'; ?>
><?php }} ?>
