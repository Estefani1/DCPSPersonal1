<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>  
        <form action="{$gvar.l__global}cu10-asignar_viabilidad.php?option=add" method="post">
            <body {if isset($alerta)} onload="{$alerta}"{/if}>  
            <div class="col-md-4 col-md-offset-3 fondo2 tr">
                        <b>Código de la viabilidad</b>
                        
                            <input class="form-control" type="text" name="codigo" />
                       <br/>
                        <b>Seleccione el prediseño</b>
                        
                            <select class="form-control" name="prediseno" id="mySelect" onchange="myFunction()" >
                                <option>Prediseno</option>
                                {section loop=$predis name=i }
                                    <option value="{$predis[i]->get(codigo)}">{$predis[i]->get('codigo')}</option>                 
                                {/section}
                            </select>
                        <br/>
                    <div  class="cideaprediseno" id="idideaprediseno">
                        
                            <b>Idea del dispositivo:</b>
                        
                            {section loop=$predis name=i }
                                <a class="cidea letra" id="ididea_{$predis[i]->get(codigo)}"> {$predis[i]->get('idea')}</a>
                            {/section}
                        
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