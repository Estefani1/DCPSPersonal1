<?php /* Smarty version Smarty-3.0.9, created on 2015-06-08 06:09:23
         compiled from "C:/wamp/www/ProyectoDCPS/templates\cu9-Registrar_prediseno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3273055751573142776-66794762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6db1aa20eca0bc1465949a43b88841e881fc94a' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\cu9-Registrar_prediseno.tpl',
      1 => 1433736560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3273055751573142776-66794762',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--Para usar la �-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
cu9-Registrar_prediseno.php?option=Agregar_prediseno" method="post">
     <table>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ingrese el codigo del predise�o por favor: </td>
                <td><input type="text" name="codigo" /></td>
            </tr>
            <tr>
                <td>Seleccione la idea asociada a este predise�o</td>
                <td><select name="idea">
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('ideas')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <option><?php echo $_smarty_tpl->getVariable('ideas')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('nombre');?>
</option>                 
                                <?php endfor; endif; ?>
                        </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="Registrar" name="Registrar" /></td>
            </tr>
        </tbody>
    </table>
</form>