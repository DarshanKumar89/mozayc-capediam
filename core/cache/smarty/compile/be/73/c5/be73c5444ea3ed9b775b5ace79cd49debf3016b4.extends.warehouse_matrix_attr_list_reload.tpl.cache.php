<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-30 09:33:33
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_matrix_attr_list_reload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:451212072588efa5d293b31-49632749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '451212072588efa5d293b31-49632749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global_form_select_choose' => 1,
    'attrList' => 1,
    'item' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_588efa5d2ed182_84467399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588efa5d2ed182_84467399')) {function content_588efa5d2ed182_84467399($_smarty_tpl) {?>
  <select id="alc" name="alc" class="form-control select" data-style="btn-info" data-live-search="true">
    <option value="0"><?php echo '/*%%SmartyNocache:451212072588efa5d293b31-49632749%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)) {?>/*/%%SmartyNocache:451212072588efa5d293b31-49632749%%*/';
echo '/*%%SmartyNocache:451212072588efa5d293b31-49632749%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:451212072588efa5d293b31-49632749%%*/';
echo '/*%%SmartyNocache:451212072588efa5d293b31-49632749%%*/<?php } else { ?>/*/%%SmartyNocache:451212072588efa5d293b31-49632749%%*/';?>
Choose...<?php echo '/*%%SmartyNocache:451212072588efa5d293b31-49632749%%*/<?php }?>/*/%%SmartyNocache:451212072588efa5d293b31-49632749%%*/';?>
</option>
    <?php echo '/*%%SmartyNocache:451212072588efa5d293b31-49632749%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'attrList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:451212072588efa5d293b31-49632749%%*/';?>

      <option value="<?php echo '/*%%SmartyNocache:451212072588efa5d293b31-49632749%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_attribute;?>
/*/%%SmartyNocache:451212072588efa5d293b31-49632749%%*/';?>
" data-subtext="<?php echo '/*%%SmartyNocache:451212072588efa5d293b31-49632749%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->total;?>
/*/%%SmartyNocache:451212072588efa5d293b31-49632749%%*/';?>
"><?php echo '/*%%SmartyNocache:451212072588efa5d293b31-49632749%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->attr_name;?>
/*/%%SmartyNocache:451212072588efa5d293b31-49632749%%*/';?>
</option>
    <?php echo '/*%%SmartyNocache:451212072588efa5d293b31-49632749%%*/<?php } ?>/*/%%SmartyNocache:451212072588efa5d293b31-49632749%%*/';?>

  </select>
  <?php echo '<script'; ?>
>
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
  <?php echo '</script'; ?>
>
<?php }} ?>
