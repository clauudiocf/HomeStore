<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <div id="loguin">   </div>
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
     
        <div id="galeria">
            <form name="formulario" action="EnvioGet.php" method="GET">
            <fieldset>
			    <legend>FORMULARIO DE INGRESO</legend>
			<table>
			    <tr>
				    <td>Nombre Usuario</td>
					<td><input type="text" name="nombre"/></td>
				</tr>
				<tr>
				    <td>Contraseña</td>
                                    <td><input type="password" name="contraseña"/></td>
				</tr>
                                <tr>
				    <td>Repita Contraseña</td>
                                    <td><input type="password" name="contraseña2"/></td>
				</tr>
                                <tr>
				    <td>Email</td>
                                    <td><input type="text" name="email"/></td>
				</tr>
                                <TR>
                                    <TD>Ocupación</TD>
                                    <TD>
                                    <SELECT name="ocupación">
                                    <OPTION VALUE="profesor">Profesor</OPTION>
                                    <OPTION VALUE="estudiante">Estudiante</OPTION>
                                    <OPTION VALUE="ingeniero">Ingeniero</OPTION>
                                    <OPTION VALUE="jubilado">Jubilado</OPTION>
                                    <OPTION VALUE="otro">Otro</OPTION>
                                    </SELECT>
                                    </TD>
                                </TR>
                                <tr>
                                    <td><input type="reset" value="Borrar todo"> <input type="submit" value="Enviar"> </td>
                                </tr>
                                
			</table>
	</fieldset>
                </form>
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
        
    </body>
</html>