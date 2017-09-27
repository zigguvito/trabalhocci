<?php

		require_once("util/Factory.php");
	
		/**
		 * @author Robson
		 *
		 */
		class CursoBusiness
		{
			
				public $con;
				public function CursoBusiness()
				{
				   $this->con = new Factory();
				}
				
				/**
				 * Pesquisa todas as Alunos
				 * @return string
				 */
				public function findAll()
				{
					$query = "select * from Curso";
					$rs = $this->con->getConnection()->query($query);

					$collection = $rs->fetchAll( PDO::FETCH_OBJ );
					return $collection;
				}	

		}

?>