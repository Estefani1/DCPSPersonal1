<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body {if isset($alerta)} onload="{$alerta}"{/if}>
    <div class="col-md-4 col-md-offset-3 fondo tr">
    {if isset($diseno)}
        <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
        <body>    
            <form action="{$gvar.l__global}cu8-revisar_diseno.php?option=add" method="post">

                    <b>Seleccionar prediseño: </b>
                    <select class="form-control" name="codigo" id="mySelect" onchange="myFunction()">
                        <option value="Seleccione codigo">Seleccione codigo</option>
                        {section loop=$diseno name=i }
                            <option value={$diseno[i]->get('codigo')}>{$diseno[i]->get('codigo')}</option>                 
                        {/section}
                    </select><br />
                    
                    <a class="des letra" id="desc"><b>Imagen del diseño:</b></a> 
                         
                            {section loop=$diseno name=i }
                                <a  class="res_viabilidad" id="res_viabilidad_{$diseno[i]->get('codigo')}" name="imagen" value="{$diseno[i]->get('imagen')}" > <div class="outter"><img src="images/{$diseno[i]->get('imagen')}" width="200" height="200" class="image-circ"/></div> </a>                 
                                    {/section}
                        
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
    {/if}
