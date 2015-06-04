<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
    <div class="col-md-4 col-md-offset-3 fondo tr">
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="{$gvar.l__global}cu3-realizar_calificacion.php?option=calificar" method="post">

            Realizar Calificacion:
            
                        <select class="form-control" name="idea" id="mySelect" onchange="myFunction()" >
                                <option > Seleccione idea</option>
                                {section loop=$idea name=i }

                                    <option value="{$idea[i]->get(nombre)}">{$idea[i]->get(nombre)}</option> 

                                {/section}

                            </select>
                                   <br/>
                                   
                            <a  class="des letra" id="desc"> Descripcion:</a> 
                     
                            {section loop=$idea name=i }
                                <a  class="idea_descripcion form-control" id="idea_descripcion_{$idea[i]->get(nombre)}">{$idea[i]->get(descripcion)}</a>                 
                            {/section}

                    <br/>
                    <div class="nec" id="nece">
                        
                            <a class="letra"> Necesidad:</a> 
                        
                    </div>
                     
                            {section loop=$idea name=i }
                                <a  class="idea_necesidad letra" id="idea_necesidad_{$idea[i]->get('nombre')}" > {$idea[i]->get('necesidad')}</a>                 
                            {/section}

                            
                        <div class="des1" id="desc1">
                            <br/>
                            <br/>
                            <a class="letra">Califique la idea:</a> </br>

                            <label class="radio-inline"><input type="radio" name="calificacion" value="1">1</label>
                            <label class="radio-inline"><input type="radio" name="calificacion" value="2">2</label>
                            <label class="radio-inline"><input type="radio" name="calificacion" value="3">3</label>
                            <label class="radio-inline"><input type="radio" name="calificacion" value="4">4</label>
                            <label class="radio-inline"><input type="radio" name="calificacion" value="5">5</label>
                            <br/>
                            <br/>
                            <input class="btn btn-primary" type="submit" value="Calificar" />


                        </div>


                   

             <script>
                function myFunction() {
                    var x = $("#mySelect").val();
                    $('.idea_descripcion').hide();
                    $('#idea_descripcion_' + x).show();

                    $('.des').hide();
                    $('#desc').show();

                    $('.idea_necesidad').hide();
                    $('#idea_necesidad_' + x).show();

                    $('.nec').hide();
                    $('#nece').show();

                    $('.des1').hide();
                    $('#desc1').show();



                }
                $(document).ready(function () {
                    $('.idea_descripcion').hide();
                    $('.des').hide();
                    $('.idea_necesidad').hide();
                    $('.nec').hide();
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
</html>