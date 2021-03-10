<?php
class vista_ventas
{
	private $Factura;
	private $Fecha;
	private $Total;
	private $DNI;
	private $Nombre;
	
	
	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}
?>