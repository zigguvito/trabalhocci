<?php

		require_once("util/Factory.php");
	
		/**
		 * @author Robson
		 *
		 */
		class InstituicaoBusiness
		{
			
				public $con;
				public function InstituicaoBusiness()
				{
				   $this->con = new Factory();
				}
				
				/**
				 * Pesquisa todas as instituições
				 * @return string
				 */
				public function findAll()
				{
					$query = "select * from Instituicao";
					$rs = $this->con->getConnection()->query($query);

					$collection = $rs->fetchAll( PDO::FETCH_OBJ );
					return $collection;
				}	

		}

?>