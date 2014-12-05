<?php
include("conexion.php");
?>


<html> 
<head> 
<title>Administracion Taquerias</title> 
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
	width: 295px;
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
if(isset($_POST["btn"])){
	$btn=$_POST["btn"];
	//$bus=$_POST["txttaqueria"];
		if($btn=="Guardar"){
				$taq=$_POST["txttaqueria"];
				$dir=$_POST["txtdireccion"];
				$pro=$_POST["txtpromedio"];
				
				$sql="insert into sucursales (nombre_taq, direccion_taq, promedio_taq) values ('$taq','$dir','$pro')";
				
				$cs=mysql_query($sql,$con);
				echo "<script> alert('Se insert&oacute; correctamente');</script>";
		}

	if($btn=="Eliminar"){
		$cod=$_POST["txttaqueria"];
			
		$sql="delete from sucursales where id_taq='$cod'";
		
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
		<form action="" method= "post" name="admintaqueria"> 
<p>&nbsp; &nbsp; Taqueria:&nbsp;<input type="text" name="txttaqueria"  id="txttaqueria"/>
  <br>
  <br>
   &nbsp; &nbsp; Direccion:&nbsp;  <input type="text" name ="txtdireccion" id="txtdireccion"/>
  <br>
  <br>
  &nbsp; &nbsp; Promedio:&nbsp; <input type="text" name="txtpromedio" id="txtpromedio"/>
  <br> 
  <br>&nbsp; &nbsp; &nbsp;
  
    <input type="submit" name="btn"  value="Guardar"  >
    <input type="submit" name="btn"  value="Eliminar" >
    <input type="submit" name="btn"   value="Consultar" >
    </form>


    <?php
if(isset($_POST["btn"])){
	$btn=$_POST["btn"];

	if($btn=="Consultar"){
		
		$sql="select * from sucursales";
		$cs=mysql_query($sql,$con);
		echo"<center>
<table border='3'>
<tr>
<td>Id</td>
<td>Nombre</td>
<td>Direccion</td>
<td>Promedio</td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
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
<input type="button" name="btnRegresar" style="position: absolute; left: 858px; top: 65px; width: 145px; height: 25px;" id="btnBack" value="Ir a principal" h> </a>
<img src="13155119661987559928Restaurant Symbol.svg.med.png"  style="position: absolute; left: 540px; top: 200px;" width="300" height="300" alt="Dish">


</body> 
</html>