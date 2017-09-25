<?php 
require_once "database.php";

/**
* 
*/
class Vista 
{
	
	
	function listaLineas()
	{
		$mysql = conexionSQL();
		$sql = "SELECT DISTINCT C1 FROM KDIG";

		$resultado = sqlsrv_query($mysql,$sql);

		$lista = "<select id='cmbLinea' name='cmbLinea' class='wide-control form-control default input-sm' required>";
			$lista .= "<option value=''>- - -</option>";

		while ($fila  = sqlsrv_fetch_array($resultado)) 
		{

			//$lista .= "<option value='".$fila["id_editorial"]."'>".$fila["editorial"]."</option>";
			$lista .= sprintf("<option value='%d>'>%s</option>",$fila["C1"],$fila["C1"]);
		}

		$lista.="</select>";

		sqlsrv_free_stmt( $resultado);
		sqlsrv_close($mysql);

		return $lista;
	}
	function listaTipo()
	{
		$mysql = conexionSQL();
		$sql = "SELECT DISTINCT C1 FROM KDIE";

		$resultado = sqlsrv_query($mysql,$sql);

		$listaTip = "<select id='cmbTipo' name='cmbTipo' class='wide-control form-control default input-sm' required>";
			$listaTip .= "<option value=''>- - -</option>";

		while ($fila  = sqlsrv_fetch_array($resultado)) 
		{

			//$lista .= "<option value='".$fila["id_editorial"]."'>".$fila["editorial"]."</option>";
			$listaTip .= sprintf("<option value='%d>'>%s</option>",$fila["C1"],$fila["C1"]);
		}

		$listaTip.="</select>";

		sqlsrv_free_stmt( $resultado);
		sqlsrv_close($mysql);

		return $listaTip;
	}

	function listaGrupo()
	{
		$mysql = conexionSQL();
		$sql = "SELECT DISTINCT C1 FROM KDIF";

		$resultado = sqlsrv_query($mysql,$sql);

		$listaGrup = "<select id='cmbGrupo' name='cmbGrupo' class='wide-control form-control default input-sm' required>";
			$listaGrup .= "<option value=''>- - -</option>";

		while ($fila  = sqlsrv_fetch_array($resultado)) 
		{

			//$lista .= "<option value='".$fila["id_editorial"]."'>".$fila["editorial"]."</option>";
			$listaGrup .= sprintf("<option value='%d>'>%s</option>",$fila["C1"],$fila["C1"]);
		}

		$listaGrup.="</select>";

		sqlsrv_free_stmt( $resultado);
		sqlsrv_close($mysql);

		return $listaGrup;
	}

	function listaAgrupProd()
	{
		$mysql = conexionSQL();
		$sql = "SELECT DISTINCT C1 FROM GDAGRUPROD";

		$resultado = sqlsrv_query($mysql,$sql);

		$listaAgrup = "<select id='cmbAgruProd' name='cmbAgruProd' class='wide-control form-control default input-sm' required>";
			$listaAgrup .= "<option value=''>- - -</option>";

		while ($fila  = sqlsrv_fetch_array($resultado)) 
		{

			//$lista .= "<option value='".$fila["id_editorial"]."'>".$fila["editorial"]."</option>";
			$listaAgrup .= sprintf("<option value='%d>'>%s</option>",$fila["C1"],$fila["C1"]);
		}

		$listaAgrup.="</select>";

		sqlsrv_free_stmt( $resultado);
		sqlsrv_close($mysql);

		return $listaAgrup;
	}

	function listaNivel()
	{
		$mysql = conexionSQL();
		$sql = "SELECT DISTINCT C1 FROM GDCLAPROD";

		$resultado = sqlsrv_query($mysql,$sql);

		$listanivel = "<select id='cmbNivel' name='cmbNivel' class='wide-control form-control default input-sm' required>";
			$listanivel .= "<option value=''>- - -</option>";

		while ($fila  = sqlsrv_fetch_array($resultado)) 
		{

			//$lista .= "<option value='".$fila["id_editorial"]."'>".$fila["editorial"]."</option>";
			$listanivel .= sprintf("<option value='%d>'>%s</option>",$fila["C1"],$fila["C1"]);
		}

		$listanivel.="</select>";

		sqlsrv_free_stmt( $resultado);
		sqlsrv_close($mysql);

		return $listanivel;
	}


	function listaNaturaleza()
	{
		$mysql = conexionSQL();
		$sql = "SELECT DISTINCT C48 FROM KDII";

		$resultado = sqlsrv_query($mysql,$sql);

		$listaNat = "<select id='cmbNaturaleza' name='cmbNaturaleza' class='wide-control form-control default input-sm' required>";
			$listaNat .= "<option value=''>- - -</option>";

		while ($fila  = sqlsrv_fetch_array($resultado)) 
		{

			//$lista .= "<option value='".$fila["id_editorial"]."'>".$fila["editorial"]."</option>";
			$listaNat .= sprintf("<option value='%d>'>%s</option>",$fila['C48'],$fila['C48']);
		}

		$listaNat.="</select>";

		sqlsrv_free_stmt( $resultado);
		sqlsrv_close($mysql);

		return $listaNat;
	}

	function listaImagen()
	{
		$mysql = conexionSQL();
		$sql = "SELECT C70 FROM KDII";

		$resultado = sqlsrv_query($mysql,$sql);

		$listaImagen = "<select id='cmbImagen' name='cmbImagen' class='wide-control form-control default input-sm'>";
			$listaImagen .= "<option value=''>- - -</option>";

		while ($fila  = sqlsrv_fetch_array($resultado)) 
		{

			//$lista .= "<option value='".$fila["id_editorial"]."'>".$fila["editorial"]."</option>";
			$listaImagen .= sprintf("<option value='%d>'>%s</option>",$fila['C70'],$fila['C70']);
		}

		$listaImagen.="</select>";

		sqlsrv_free_stmt( $resultado);
		sqlsrv_close($mysql);

		return $listaImagen;
	}

	function listaUnidad()
	{
		$mysql = conexionSQL();
		$sql = "SELECT DISTINCT C11 FROM KDII";

		$resultado = sqlsrv_query($mysql,$sql);

		$listaUni = "<select id='cmbUnidad' name='cmbUnidad' class='wide-control form-control default input-sm' required>";
			$listaUni .= "<option value=''>- - -</option>";

		while ($fila  = sqlsrv_fetch_array($resultado)) 
		{

			//$lista .= "<option value='".$fila["id_editorial"]."'>".$fila["editorial"]."</option>";
			$listaUni .= sprintf("<option value='%d>'>%s</option>",$fila['C11'],$fila['C11']);
		}

		$listaUni.="</select>";

		sqlsrv_free_stmt( $resultado);
		sqlsrv_close($mysql);

		return $listaUni;
	}

	function listaMoneda()
	{
		$mysql = conexionSQL();
		$sql = "SELECT DISTINCT C1 FROM KDMY";

		$resultado = sqlsrv_query($mysql,$sql);

		$listaMon = "<select id='cmbMoneda' name='cmbMoneda' class='wide-control form-control default input-sm' required>";
			$listaMon .= "<option value=''>- - -</option>";

		while ($fila  = sqlsrv_fetch_array($resultado)) 
		{

			//$lista .= "<option value='".$fila["id_editorial"]."'>".$fila["editorial"]."</option>";
			$listaMon .= sprintf("<option value='%d>'>%s</option>",$fila['C1'],$fila['C1']);
		}

		$listaMon.="</select>";

		sqlsrv_free_stmt( $resultado);
		sqlsrv_close($mysql);

		return $listaMon;
	}

	function agregarProductosp()
	{
		/*Empezamos con el procedimiento de inserción*/
		/*Lo primero es crear un objeto mysqli*/
		/*$mysqli = new mysqli("servidor", "usuario", "pass", "db");*/

		$mysql = conexionSQL();
 
		$sqlerror=sqlsrv_errors();
		if (!sqlsrv_query($mysql,"CALL insertarProductoCompleto('?', '?', '?','?','?', '?','?', '?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?')")) {
    	echo "Falló la llamada: (" . $sqlerror . ") " . $sqlerror;
		}
	}

	public function altaProducto(){
	$form = "<form id='altaProducto' class='' data-insertar method='post'>";
		$form.="<div class='form-group row'>";
	    $form.="<div class='table-thing widget uib_w_13 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/input' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline' for='txtProducto' >Producto:</label>";
	    $form.="<input class='wide-control form-control default input-sm' type='text' id='txtProducto' required>";
	    $form.="</div>";
	    $form.="<br>";                                          
                                       
	    $form.="<div class='form-group row'>";
	    $form.="<div class='table-thing widget uib_w_13 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/input' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline' for='txtNombre'>Nombre:</label>";
	    $form.="<input class='wide-control form-control default input-sm' type='text' id='txtNombre' required>";
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_14 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/select' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline'>Línea:</label>";
	    $form.= $this->listaLineas();
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_15 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/select' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline'>Tipo:</label>";
	    $form.= $this->listaTipo();
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_15 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/select' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline'>Grupo:</label>";
	    $form.= $this->listaGrupo();
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_15 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/select' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline'>Agrupador de Producto:</label>";
	    $form.= $this->listaAgrupProd();
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_15 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/select' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline'>Nivel:</label>";
	    $form.= $this->listaNivel();
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_15 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/select' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline'>Naturaleza:</label>";
	    $form.= $this->listaNaturaleza();
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_13 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/input' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline' for='txtCodBarras'>Código de Barras:</label>";
	    $form.="<input class='wide-control form-control default input-sm' type='text' id='txtCodBarras' required>";
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_15 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/select' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline'>Imagen:</label>";
	    $form.= $this->listaImagen();
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_15 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/select' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline'>Unidad:</label>";
	    $form.= $this->listaUnidad();
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_13 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/input' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline' for='txtFactor'>Factor de Conversión:</label>";
	    $form.="<input class='wide-control form-control default input-sm' type='text' id='txtFactor' required>";
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_24 d-margins TamCombos' data-uib='twitter%20bootstrap/text_area' data-ver='1'>";
	    $form.="<label class='narrow-control label-top-left'>Comentarios del Producto:</label>";
	    $form.="<textarea rows='3' class='wide-control form-control' wrap='soft' id='txtareaComentarios' required></textarea>";
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='col uib_col_6 single-col' data-uib='layout/col' data-ver='0'>";
        $form.="<span class='uib_shim'></span>";
        $form.="<form>";

        $form.="<label class='checkbox-inline'>";
        $form.="<input type='checkbox' value='' id='chboxProDigital' >Producto Digital";
        $form.="</label>";

        $form.="<label class='checkbox-inline'>";
        $form.="<input type='checkbox' value='' id='chboxProdLicencia'>Producto Requiere Licencia";
        $form.="</label>";

        $form.="<label class='checkbox-inline'>";
        $form.="<input type='checkbox' value='' id='chboxProDipe'>Pertenece a DIPE";
        $form.="</label>";

        $form.="<label class='checkbox-inline'>";
        $form.="<input type='checkbox' value='' id='chboxNoResurte'>No se resurte";
        $form.="</label>";

        $form.="<label class='checkbox-inline'>";
        $form.="<input type='checkbox' value='' id='chboxProdUSD'>Productos USD";
        $form.="</label>";
        $form.="</form>";
        $form.="</div>"; 
        $form.="<br>";                                         
        //$form.="span class='widget uib_w_11 d-margins badge BackgrounLebel' data-ver='1'>Control Interno</span>";
        $form.="<div style='text-align: center; font-size: 25px; border: 1px solid #1565C0;'>";
		$form.="Control Interno";
		//$form.="<span style='color: green;'>de</span> la <span style='color: orange;'>página</span>";
		$form.="</div>";
        $form.="<br>";

        $form.="<label class='narrow-control label-inline' for='txtp1'>Precios de Venta:</label>";
        $form.="<div class='form-group row'>";
        $form.="<div class='col-xs-3'>";
        $form.="<input class='form-control d-margins TamaCombo1 TamCombos' style='width:180px' id='txtp2' type='text'>";
        $form.="</div>";
        $form.="<br>";

        $form.="<div class='col-xs-4'>";
        $form.="<input class='form-control d-margins TamaCombo1 TamCombos' style='width:180px' id='txtp3' type='text'>";
        $form.="</div>";
        $form.="<br>";

        $form.="<div class='col-xs-5'>";
        $form.="<input class='form-control d-margins TamaCombo1 TamCombos' style='width:180px' id='txtp4' type='text'>";
        $form.="</div>";
        $form.="<br>";

        $form.="<div class='col-xs-6'>";
        $form.="<input class='form-control d-margins TamaCombo1 TamCombos' style='width:180px' id='txtp5' type='text'>";
        $form.="</div>";
        $form.="<br>";

        $form.="<div class='form-group row'>";
        $form.="<div class='col-xs-3'>";
        $form.="<label class='narrow-control label-inline' for='txtp1'>IVA:</label>";
        $form.="<input class='form-control d-margins TamaCombo1 TamCombos' style='width:180px' id='txtiva' type='text' maxlength='30'>";
        $form.="</div>";
        $form.="<br>";

        $form.="<div class='col-xs-3'>";
        $form.="<label class='narrow-control label-inline' for='txtieps'>IEPS:</label>";
        $form.="<input class='form-control d-margins TamaCombo1 TamCombos' style='width:180px' id='txtieps' type='text' maxlength='30'>";
        $form.="</div>";
        $form.="<br>";
        
        $form.="<div class='table-thing widget uib_w_15 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/select' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline'>Moneda de Precios:</label>";
	    $form.= $this->listaMoneda();
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div>";
	    $form.="<input class='form-btn' name='guardar' type='submit' value='Guardar'/>";
	    $form.=$this->agregarProductosp();
	    $form.="</div>";
        
                            


	$form .="</form>";
	return $form;
	}
									


}
 ?>