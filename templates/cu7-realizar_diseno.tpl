<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
<form action="{$gvar.l_global}cu7-realizar_diseno.php?option=add" method="post" enctype="multipart/form-data">
    <body {if isset($alerta)} onload="{$alerta}"{/if}>
    <div class="col-md-4 col-md-offset-3 fondo tr">

    <b>Realizar diseño</b>
    <table border="0">
        <tbody>
            <tr>
                <td><b>Código: </b></td>
                <td> <input class="form-control" type="text" name="codigo"/></td>
            </tr>
            <tr>
                <td><b>Dispositivo:</b></td>
                <td><select class="form-control" name="dispositivo"  id="mySelect1" onchange="myFunction1()">
                        <option>Seleccione</option>
                        {foreach $dispositivo as $disp}
                            <option name="dispositivo" value="{$disp->get('codigo')}">{$disp->get('codigo')}</option> 
                        {/foreach}
                    </select></td>
            </tr>
            <tr>
                <td><b>Software:</b></td>
                <td>  <select class="form-control" name="software" id="mySelect" onchange="myFunction()">
                        <option>Seleccione</option>
                        {section loop=$software name=i }
                            <option value= {$software[i]->get('codigo')}>  {$software[i]->get('codigo')}</option>  
                        {/section}
                    </select></td>

            </tr>

        </tbody>
    </table></br>

    <section class="cdetallesoftware letra" id="iddetallesoftware">
        <b>Detalles del software:</b></br> 
        Lenguaje:
        {section loop=$software name=i }
            <a class="csoft letra" id="idsoft_{$software[i]->get('codigo')}">  {$software[i]->get('lenguaje')}</a>  
        {/section}
    </section>
    <br/>
    <section class="cdetalledispositivo letra" id="iddetalledispositivo">
        <b>Detalles del dispositivo:</b></br>  
        {section loop=$dispositivo name=i }
            <a class="cdisp letra" id="iddisp_{$dispositivo[i]->get('codigo')}"> <b>Funcion del dispositivo:</b> {$dispositivo[i]->get('funcion')}</a> 
            <a  class="cdisp1 letra" id="iddisp1_{$dispositivo[i]->get('codigo')}"><b>Costo del dispositivo:</b>  {$dispositivo[i]->get('costo')}</a> 
        {/section}
    </section>
    <br/>
    <input class="btn btn-primary" type="file" name="imagen"/><br/><br/>
    <input class="btn btn-primary" type="submit" value="Realizar Diseño"/>

    <script>
        function myFunction() {
            var x = $('#mySelect').val();


            $('.cdetallesoftware').hide();
            $('#iddetallesoftware').show();
            $('.csoft').hide();
            $('#idsoft_' + x).show();
        }
        function myFunction1() {
            var y = $('#mySelect1').val();
            $('.cdetalledispositivo').hide();
            $('#iddetalledispositivo').show();
            $('.cdisp').hide();
            $('#iddisp_' + y).show();

            $('.cdisp1').hide();
            $('#iddisp1_' + y).show();


        }
        $(document).ready(function () {
            $('.cdetallesoftware').hide();
            $('.cdetalledispositivo').hide();

        });
    </script>

</form>
    </div>
<div class="col-md-3">

</div>
</body>
</div>

