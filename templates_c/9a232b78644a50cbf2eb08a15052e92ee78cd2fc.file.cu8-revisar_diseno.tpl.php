<?php /* Smarty version Smarty-3.0.9, created on 2015-06-09 18:30:04
         compiled from "C:/wamp/www/ProyectoDCPS/templates\cu8-revisar_diseno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227155577148c8fc506-38609479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a232b78644a50cbf2eb08a15052e92ee78cd2fc' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\cu8-revisar_diseno.tpl',
      1 => 1433867305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227155577148c8fc506-38609479',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body <?php if (isset($_smarty_tpl->getVariable('alerta',null,true,false)->value)){?> onload="<?php echo $_smarty_tpl->getVariable('alerta')->value;?>
"<?php }?>>
    <div class="col-md-4 col-md-offset-3 fondo tr">
    <?php if (isset($_smarty_tpl->getVariable('diseno',null,true,false)->value)){?>
        <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
        <body>    
            <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
cu8-revisar_diseno.php?option=add" method="post">

                    <b>Seleccionar prediseño: </b>
                    <select class="form-control" name="codigo" id="mySelect" onchange="myFunction()">
                        <option value="Seleccione codigo">Seleccione codigo</option>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('diseno')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value=<?php echo $_smarty_tpl->getVariable('diseno')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
><?php echo $_smarty_tpl->getVariable('diseno')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
</option>                 
                        <?php endfor; endif; ?>
                    </select><br />
                    
                    <a class="des letra" id="desc"><b>Imagen del diseño:</b></a> 
                         
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('diseno')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <a  class="res_viabilidad" id="res_viabilidad_<?php echo $_smarty_tpl->getVariable('diseno')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
" name="imagen" value="<?php echo $_smarty_tpl->getVariable('diseno')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('imagen');?>
" > <div class="outter"><img src="images/<?php echo $_smarty_tpl->getVariable('diseno')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('imagen');?>
" width="200" height="200" class="image-circ"/></div> </a>                 
                                    <?php endfor; endif; ?>
                        
                        <div class="des1" id="desc1">
                            <br />
                            <a class="letra"><b>Calificar diseño:</b></a> <br />

                            <select class="form-control" name="evaluacion">
                                <option>Seleccione</option>
                                <option>Aprobado</option>
                                <option>No aprobado</option>
                            </select><br />

                            <input class="btn btn-primary" type="submit" value="Enviar"/>

                        </div>
       

                <script>
                    function myFunction() {
                        var x = $("#mySelect").val();
                        $('.res_viabilidad').hide();
                        $('#res_viabilidad_' + x).show();

                        $('.des').hide();
                        $('#desc').show();

                        $('.res_causa').hide();
                        $('#res_causa_' + x).show();

                        $('.des1').hide();
                        $('#desc1').show();

                    }
                    $(document).ready(function () {
                        $('.res_viabilidad').hide();
                        $('.des').hide();
                        $('.des1').hide();
                    });
                </script>
            </form>
                                    </div>
<div class="col-md-3">

</div>
</body>
</div>
        </body>
    <?php }?>
