<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>H&S</title>
    </head>
    <body>
        <?php
        ?>
        <div id="cabecera">
            <div id="logo">   </div>
            <div id="titulo"><h1>Home&Store</h1></div>
            <div id="loguin"> 
                <script>
                    $(document).ready(function(){
                            $("#enviar").click(function(){
                                /*$("form").hide();
                                alert("Ocultaste el formulario ;-) "+ $("#nomusuario").val());*/

                                if ($("#nomusuario").val()!="" && $("#clave").val()!=""){
                                    ///*$("#frmusuario").submit();
                                        $.ajax({url:"controlador/ValidaUsuario.php"
                                            ,type:'post'
                                            ,data:{'nomusuario':$("#nomusuario").val(),
                                                'clave':$("#clave").val()
                                                }           
                                            ,success:function(resultado){
                                                $("#mensaje").html(resultado);
                                            }
                                        });
                                    }//Cierre IF Valida blancos
                                else
                                    alert("Debe Agregar el usuario y clave");
                            });//Click Boton enviar
                     });//Function Ready de la página
                </script>  
            </div>
        </div>
        <div id="navegador">
        
            <div id="btn">
                
                <center>
                <input type="submit" value='Inicio' style="BORDER: palegoldenrod 3px solid; FONT-SIZE: 27pt; FONT-FAMILY: Comic Sans; BACKGROUND-COLOR: palegoldenrod">
                </center>
            </div> 
                               
            <div id="btn">
                <center>
                <a href="formulario.php"><input type="submit" value="Registrate" name="Registrate" style="BORDER: palegoldenrod 3px solid; FONT-SIZE: 27pt; FONT-FAMILY: Comic Sans; BACKGROUND-COLOR: palegoldenrod"/></a>
                </center>
            </div>    
            <div id="btn">
                <center>
                <a href="Colchones.php"><input type="submit" value="Colchones" name="Colchones" style="BORDER: palegoldenrod 3px solid; FONT-SIZE: 27pt; FONT-FAMILY: Comic Sans; BACKGROUND-COLOR: palegoldenrod"/></a>
                </center>
            </div>  
            <div id="btn">
                <center>
                    <input type="submit" value="Sofa y Sillones" name="Sofa y Sillones" style="BORDER: palegoldenrod 2px solid; FONT-SIZE: 20pt; FONT-FAMILY: Comic Sans; BACKGROUND-COLOR: palegoldenrod"/>
                </center>
            </div>
            <div id="btn">
                <center>
                <input type="submit" value="Almohada y Cojin" style="BORDER: palegoldenrod 2px solid; FONT-SIZE: 18pt; FONT-FAMILY: Comic Sans; BACKGROUND-COLOR: palegoldenrod"/>
                </center>
            </div>
          </div>   
        <div id="carro">
           
        </div>
            
        <div id="galeria">
           
        </div>
        <br>
        <div id="productos">
            <div id="producto"></div>  
            <div id="producto"></div>        
            <br>
            <div id="producto"></div> 
            <div id="producto"></div>
            <br>
            <div id="producto"></div>
            <div id="producto"></div>
        </div>
        <br>
        <div id="piedepagina">
            <h2><a href="http://www.latiendahome.com" target="_blank"> IR A LATIENDAHOME</a></h2>
            
        </div>

    </body>
</html>
