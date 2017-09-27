<?php

		require_once("util/Factory.php");
	
		/**
		 * @author Robson
		 *
		 */
		class PublicacaoBusiness
		{
			
				public $con;
				public function PublicacaoBusiness()
				{
				   $this->con = new Factory();
				}
				
				/**
				 * Pesquisa todas os Orientadores
				 * @return string
				 */
				public function findAll()
				{
					$query = "select * from Publicacao";
					$rs = $this->con->getConnection()->query($query);

					$collection = $rs->fetchAll( PDO::FETCH_OBJ );
					return $collection;
				}	

		}

?>