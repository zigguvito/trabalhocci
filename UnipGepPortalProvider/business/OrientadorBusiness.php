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
					$query = "select o.idOrientador, i.sigla as siglaInstituicao,
					o.nome as nomeOrientador, o.cpf,
					o.titulacao, o.ativo
					from Orientador o
					join Instituicao i on i.idInstituicao = o.idInstituicao";
					$rs = $this->con->getConnection()->query($query);

					$collection = $rs->fetchAll( PDO::FETCH_OBJ );
					return $collection;
				}	

		}

?>