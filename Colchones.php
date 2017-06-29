<html>
    <head>
        <meta http-equiv="Content-Type" charset="UTF-8">
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
                <form action="checklogin.php" method="post" > 
                    <label>Nombre Usuario:</label><br> <input name="username" type="text" id="username" required> </br> 
                    <label>Password:</label><br> <input name="password" type="password" id="password" required> <br><br> 
            <input type="submit" name="Submit" value="LOGIN">
        </form> <hr/>
            </div>
        </div>
      
        <div id="navegador">       
            
            <div id="btn">
                
                <center>
                <a href="index.php"><input type="submit" value='Inicio' style="BORDER: palegoldenrod 3px solid; FONT-SIZE: 27pt; FONT-FAMILY: Comic Sans; BACKGROUND-COLOR: palegoldenrod"/></a>                </center>
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
            <div id="carro"> </div>
            
            <div id="producto"> </div>   
            <div align="center" id="galeria">
            <font size=5 color="yellow">
                <h1> ¡¡¡APROVECHA LOS TREMENDOS DESCUENTOS DE HOMESTORE!!!</h1>
            </font>
            </div>
            </div>
            <br>
                          
               <div align="center" id="producto">
               <font size=6 color="blue">
               <a>Colchones de espuma </a>
               </font>
               <div id="producto"><img style="float:left;" src="Css/Imagenes/listado_156.jpg" alt="HOLA COMO ESTAN TODOS" title="COLCHONES"/></div>
               </br> 
               <font size=6 color="blue">
               <a>Colchones de latex</a> 
               </font>
               <div id="producto"><img style="float:left;" src="Css/Imagenes/listado_14.jpg" alt="Colchon Flex" title="COLCHONES"/></div> 
               <div id="producto"><img style="float:left;" src="Css/Imagenes/listado_858.jpg" alt=""/></div>
               <div  id="producto"><img src="Css/Imagenes/listado_1585.jpg" alt="" align="right"/></div>   
            </div>
                         <br>
             
                      
             </body>
</html>
