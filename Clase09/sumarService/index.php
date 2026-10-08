
    <?php 
		if(		isset($_REQUEST['nro1']) && 
				isset($_REQUEST['nro2']) &&
				$_REQUEST['nro1']!=null  &&
				$_REQUEST['nro2']!=null
		){
			$nro1=$_REQUEST['nro1'];
			$nro2=$_REQUEST['nro2'];
			$resultado=$nro1+$nro2;
			echo $resultado;
		} else {
			echo '<h3>Servicio de suma de números.</h3>';
			echo '<p>Se ingresan dos números como parámetros y se devuelve la suma de ambos parámetros.</p>';
			echo "<b>Ejemplo de uso:</b> <a href='http://localhost/sumarService/?nro1=2&nro2=5'>http://localhost/sumarService/?nro1=2&nro2=5</a>";
		}
    ?>

