<?php /* Smarty version Smarty-3.0.9, created on 2015-04-17 04:36:52
         compiled from "C:/xampp/htdocs/proyectoDCPS/templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1931553071c4ba16c4-22280994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9f160ab0ddd6d86d99de5407d55bbd71b2b3489' => 
    array (
      0 => 'C:/xampp/htdocs/proyectoDCPS/templates\\header.tpl',
      1 => 1429238107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1931553071c4ba16c4-22280994',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
favicon.ico" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
 
<style type="text/css"> @import url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
css/bootstrap.css); </style>
<style type="text/css"> @import url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
css/bootstrap-responsive.css); </style>
<style type="text/css"> @import url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
css/t_dark.css); </style>
<script type='text/javascript'>l_global = '<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
';</script>
<script src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
js/jquery-1.7.2.min.js" language="Javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
js/bootstrap.js" language="Javascript"></script>

</head>

<body>
<div id="top-background">
<!-- Begin Container -->
<div class="container">

<!-- Begin Menu Header -->
<div class="navbar navbar-inverse">
<div class="navbar-inner">
<div class="container" style="width: auto;">
<a class="brand" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_index'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/logo.png" /></a>
<ul class="nav">
    <li <?php ob_start();?><?php echo $_smarty_tpl->getVariable('gvar')->value['n_index'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('active')->value==$_tmp1){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_index'];?>
">Inicio</a></li>
</ul>
  <form class="navbar-search pull-left" action="">
    <input type="text" class="search-query span2" placeholder="Buscar">
  </form>
<ul class="nav pull-right">
    <li <?php ob_start();?><?php echo $_smarty_tpl->getVariable('gvar')->value['n_contact'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('active')->value==$_tmp2){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_contact'];?>
">Contacto</a></li>
    <li class="divider-vertical"></li>
    <a href="http://twitter.com/frameworkg"><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/twtt.png" /></a>
</ul>
</div>
</div>
</div>
<!-- Begin End Header -->

<!-- Begin Content -->
<div id="content"> 

<!-- Begin Navigation -->
<table cellpadding="0" class="navigation"><tr><td align="left" valign="top">
<div class="where_middle"><div class="where_right"><div class="where_left">
<b>Navegacion:</b>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('where')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if (!empty($_smarty_tpl->getVariable('where',null,true,false)->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['link'])){?><a href="<?php echo $_smarty_tpl->getVariable('where')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['link'];?>
"><?php }?><?php echo $_smarty_tpl->getVariable('where')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
 <?php if (!empty($_smarty_tpl->getVariable('where',null,true,false)->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['link'])){?></a><?php }?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['total']==1){?><?php }else{ ?><?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['rownum']==$_smarty_tpl->getVariable('smarty')->value['section']['i']['total']){?><?php }else{ ?><b>>></b> 
<?php echo $_smarty_tpl->getVariable('i')->value['index'];?>
<?php }?><?php }?>
<?php endfor; endif; ?>
</div></div></div>
</td></tr></table>
<!-- End Navigation -->

<table cellpadding="0" cellspacing="10">
<tr><td align="left" width="210px" valign="top">
<?php $_template = new Smarty_Internal_Template('lateral.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</td>
<td align="left" valign="top">