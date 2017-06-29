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
            <div id="btn"><div><a href="Producto/index.php">Pagina mantenedor producto</a></div>
            <div id="btn"></div>
            <div id="btn"></div>
            <div id="btn"></div>
            <div id="btn"></div>
            <div id="carro"></div>
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
        <div id="piedepagina"></div>
        <form id="frmusuario" action="controlador/ValidaUsuario.php" method="post">
            <div><label>Usuario:</label><input id="nomusuario" type="text" name="nomusuario" ></div>
            <div><label>Clave:</label><input id="clave" type="password" name="clave" ></div>
            <input id="enviar" type="button" onclick="" value="Enviar"> 
            <div id="mensaje"></div>
        </form>

    </body>
</html>
