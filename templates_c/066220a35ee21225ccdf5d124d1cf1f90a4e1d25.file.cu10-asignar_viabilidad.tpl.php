<?php /* Smarty version Smarty-3.0.9, created on 2015-06-08 06:29:43
         compiled from "C:/wamp/www/ProyectoDCPS/templates\cu10-asignar_viabilidad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308355751a374432e6-94904627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '066220a35ee21225ccdf5d124d1cf1f90a4e1d25' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\cu10-asignar_viabilidad.tpl',
      1 => 1433737766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308355751a374432e6-94904627',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>  
        <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
cu10-asignar_viabilidad.php?option=add" method="post">
            <body <?php if (isset($_smarty_tpl->getVariable('alerta',null,true,false)->value)){?> onload="<?php echo $_smarty_tpl->getVariable('alerta')->value;?>
"<?php }?>>  
            <div class="col-md-4 col-md-offset-3 fondo2 tr">
                        <b>Código de la viabilidad</b>
                        
                            <input class="form-control" type="text" name="codigo" />
                       <br/>
                        <b>Seleccione el prediseño</b>
                        
                            <select class="form-control" name="prediseno" id="mySelect" onchange="myFunction()" >
                                <option>Prediseno</option>
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('predis')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <option value="<?php echo $_smarty_tpl->getVariable('predis')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
"><?php echo $_smarty_tpl->getVariable('predis')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
</option>                 
                                <?php endfor; endif; ?>
                            </select>
                        <br/>
                    <div  class="cideaprediseno" id="idideaprediseno">
                        
                            <b>Idea del dispositivo:</b>
                        
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('predis')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <a class="cidea letra" id="ididea_<?php echo $_smarty_tpl->getVariable('predis')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
"> <?php echo $_smarty_tpl->getVariable('predis')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('idea');?>
</a>
                            <?php endfor; endif; ?>
                        
                    </div>
                    <br/>
                        <b>Resultado</b>
                        
                            <select class="form-control" name="resultado" >
                                <option >Seleccione</option>
                                <option >Viable</option>
                                <option >No viable</option>
                                <option >Modificable</option>
                            </select>
                        <br/>
                        <b>Causa</b>
                        <textarea  class="form-control" name = "causa" rows = "8" cols = "40" ></textarea>
                        <br/>
                        <input class="btn btn-primary" type="submit" value="Evaluar Viabilidad" />
                    
            <script>
                function myFunction() {
                    var x = $("#mySelect").val();
                    $('#idideaprediseno').show();
                    $('#ididea_' + x).show();
                }
                $(document).ready(function () {
                    $('.cideaprediseno').hide();
                    $('.cidea').hide();

                });
            </script>


        </form>
    </body>
</html>