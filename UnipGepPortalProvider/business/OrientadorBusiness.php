<?php

		require_once("util/Factory.php");
	
		/**
		 * @author Robson
		 *
		 */
		class OrientadorBusiness
		{
			
				public $con;
				public function OrientadorBusiness()
				{
				   $this->con = new Factory();
				}
				
				/**
				 * Pesquisa todas os Orientadores
				 * @return string
				 */
				public function findAll()
				{
					$query = "select * from Orientador";
					$rs = $this->con->getConnection()->query($query);

					$collection = $rs->fetchAll( PDO::FETCH_OBJ );
					return $collection;
				}	

		}

?>