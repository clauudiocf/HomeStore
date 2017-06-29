$id = $_GET['id_producto'];
$mysqli = new mysqli("localhost", "root", "", "mybd");		
$sql = $mysqli->query("delete from producto where id_producto='$id_producto'");	
echo "eliminado";
echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=listar.php'>";