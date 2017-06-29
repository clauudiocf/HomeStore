	<?php
	

			$mysqli = new mysqli("localhost", "root", "", "mydb");	
			$id_producto = $_GET['id_producto'];
			$nombreProducto = $_GET['nombreProducto'];
			$descripcionProducto = $_GET['descripcionProducto'];
                        $tipoProducto = $_GET['tipoProducto'];
                        $costo = $_GET['costo'];
                        $categoria_id_categoria = $_GET['categoria_id_categoria'];
			$sql = $mysqli->query("insert into producto (id_producto, nombreProducto, descripcionProducto,tipoProducto,costo,categoria_id_categoria) "
                                . "values ('$id_producto','$nombreProducto','$descripcionProducto','$tipoProducto','$costo','$categoria_id_categoria') ");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert("Producto Registrado"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=listar.php">
