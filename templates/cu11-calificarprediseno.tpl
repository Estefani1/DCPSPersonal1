<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/cu11-calificarprediseno.js" ></script>
    <body {if isset($alerta)} onload="{$alerta}"{/if}>
        <div class="col-md-4 col-md-offset-3 fondo tr">
        <form action="{$gvar.l__global}cu11-calificarprediseno.php?option=calificar" method="post" name="calificar">
            <b>Código del prediseño: </b>
            <select class="form-control" name="codigo" id="mySelect" onchange="myFunction()">
                <option > seleccione codigo</option>
                {section loop=$viabilidad name=i }
                    <option value= {$viabilidad[i]->get('prediseno')}>  {$viabilidad[i]->get('prediseno')}</option>                 
                {/section}
            </select><br />
            <br/>
            <section class="cdetalle" id="iddetalle">
                <a class="letra"><b>Resultado:</b></a> <br />

                {section loop=$viabilidad name=i }
                    <a  class="res_viabilidad letra" id="res_viabilidad_{$viabilidad[i]->get('prediseno')}" > {$viabilidad[i]->get('resultado')}</a>                 
                {/section}


                <br /><br />
                <a class="letra"><b>Causa:</b></a> <br />

                {section loop=$viabilidad name=i }
                    <a  class="res_causa letra" id="res_causa_{$viabilidad[i]->get('prediseno')}" > {$viabilidad[i]->get('causa')}</a>                 
                {/section} <br />
                <br/>
                
                            <section class="cmasdetalle letra" id="idmasdetalle" >

                {section loop=$software name=i }
                    <div id-prediseno="{$software[i]->get('prediseno')}">
                        <a  class="res_sof letra"><b>Código del software:</b> {$software[i]->get('codigo')}</a>
                        <a  class="res_len letra" ><b>Lenguaje del software:</b> {$software[i]->get('lenguaje')}</a>
                    </div>
                {/section}<br />
                {section loop=$dispositivo name=i } 
                    <div id-prediseno="{$dispositivo[i]->get('prediseno')}" >
                        <a  class="res_disp letra"><b>Código del dispositivo:</b>{$dispositivo[i]->get('codigo')}</a>              
                        <a  class="res_cosd letra"><b>Costo del dispositivo:</b> {$dispositivo[i]->get('costo')}</a>
                        <a  class="res_fund letra"><b>Función del dispositivo:</b>{$dispositivo[i]->get('funcion')}</a>

                    </div>
                {/section}
            </section>
                <input class="btn btn-primary" type="button" value="Mas detalle:" onclick="detalles()"><br /><br />

                <input class="btn btn-primary" type="submit" value="Aceptado" name="resultado" /><br/><br />
                <input class="btn btn-primary" type="submit" value="Rechazado" name="resultado" /><br /><br />
            </section><br />

        </form>
                                        </div>
<div class="col-md-3">

</div>
</body>
</div>
    </body>
</html>


      
