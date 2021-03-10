<?php
class vistaModel
{
	private $cn;

	public function __CONSTRUCT()
	{
		try
		{
			$this->cn = new PDO('mysql:host=localhost;dbname=gestion', 'root', 'root');
			$this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->cn->prepare("SELECT * FROM vista_ventas");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new clientes();
				$alm->__SET('Factura', $r->Factura);
				$alm->__SET('Fecha', $r->Fecha);
				$alm->__SET('Total', $r->Total);
				$alm->__SET('DNI', $r->DNI);
				$alm->__SET('Nombre', $r->Nombre);

				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	
	

	

}