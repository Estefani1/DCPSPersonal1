<?php /* Smarty version Smarty-3.0.9, created on 2015-06-08 02:30:28
         compiled from "C:/wamp/www/ProyectoDCPS/templates\cu2-proponeridea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39885574e2244f6a03-59612909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c979bfe8d797c5ac1b3743edfabecbab8ea87d0' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\cu2-proponeridea.tpl',
      1 => 1433723424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39885574e2244f6a03-59612909',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<body <?php if (isset($_smarty_tpl->getVariable('alerta2',null,true,false)->value)){?> onload="<?php echo $_smarty_tpl->getVariable('alerta2')->value;?>
"<?php }?>>
<div class="col-md-4 col-md-offset-3 fondo tr">
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
cu2-proponeridea.php?option=add" method="post">
  <p>
    <label for="textfield">Nombre de idea:</label>
    <input class="form-control" type="text" name="nombre">
  </p>
  <p><b>Descripción</b></p>
  <p>
    <textarea class="form-control" name="descripcion" cols="40" rows="10"></textarea>
  </p>
  <p>
    <label for="select">Necesidad:</label>
    <select  class="form-control" name="necesidad">
    <option > Seleccione necesidad</option>
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('necesidad')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
    <option value="<?php echo $_smarty_tpl->getVariable('necesidad')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
"><?php echo $_smarty_tpl->getVariable('necesidad')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('nombre');?>
</option>
    <?php endfor; endif; ?>
    </select>
  </p>
  <p>
    <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
    <input class="btn btn-primary" type="reset" name="reset" value="Cancelar">
  </p>
</form>
</div>
<div class="col-md-3">

</div>
</body>
</div>