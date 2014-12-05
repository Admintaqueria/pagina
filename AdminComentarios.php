<?php
include("conexion.php");
?>
<html> 
<head> 
<title>Comentarios</title> 
<script language="JavaScript">

</script>
<style> 
.N1 {
	position: absolute;
	width: 995px;
	height: 570px;
	margin-left::50px;
	margin-top: 50px;
	background-color: #6CC;
	font: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #909;
	left: 8px;
	top: 40px;
	}
.N2 {
	position: absolute;
	width: 550px;
	height: 520px;
	left::30px;
	margin-top: 50px;
	background-color: #CCF;
	font: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #909;
	left: 51px;
	top: 0px;
	}
body{
	background-color:#066;
	
}
</style>

</head> 
<body >

<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
if(isset($_POST["btn"])){
	$btn=$_POST["btn"];		

	if($btn=="Eliminar"){
		$cod=$_POST["txtIdCom"];
			
		$sql="delete from comentarios where id_comen='$cod'";
		
		$cs=mysql_query($sql,$con);
		echo "<script> alert('Se elimnino correctamente');</script>";
		}			
}

?>


<div class="N1">
  
  <br>
    <br><br>

<div class="N2">
<p>
<p>
	<form action="" method= "post" name="admincomentarios"> 
&nbsp; &nbsp; Id Comentario:&nbsp;&nbsp;
<input type="text" name="txtIdCom" id="txtIdCom" style=" left: 50px; top: 35px; width: 68px;" />

 
  <br>&nbsp; &nbsp; &nbsp;
    <input type="submit"  name="btn"  value="Eliminar" style="position: absolute; left: 315px; top: 17px; width: 111px; height: 35px;">
    <input type="submit"  name="btn"  value="consultar" style="position: absolute; left: 200px; top: 17px; width: 111px; height: 35px;">


<?php
if(isset($_POST["btn"])){
	$btn=$_POST["btn"];

	if($btn=="consultar"){
		
		$sql="select * from comentarios";
		$cs=mysql_query($sql,$con);
		echo"<center>
<table border='3'>
<tr>
<td>Id</td>
<td>Nombre del comentario</td>
<td>Nomentario</td>
<td>Calificacion</td>
<td>Taqueria</td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[3];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var3</td>
</tr>";
			}
			
			echo "</table>
</center>";
	}
	}
?>




</div>
</div>
<a href="menu.php">
<input type="button" name="btnRegresar" style="position: absolute; left: 859px; top: 65px; width: 145; height: 25px;" id="btnBack" value="Ir a principal"  h> </a>

<input type="submit" name="btn" value="consultar" style="position: absolute; left: 707px; top: 65px; width: 152px; height: 25px;" id="btnComent" value="Ver Comentarios " > 
</form>
</div>
<img src="35009.png"  style="position: absolute; left: 650px; top: 200px;"width="256" height="256" alt="Food">
</body> 
</html>