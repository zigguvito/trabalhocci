<?php
		require_once("business/OrientadorBusiness.php");
	
		/**
		 * @author Robson
		 *
		 */
		class OrientadorService
		{
		
				var $orientadorBusiness;
				public function OrientadorService()
				{
				   $this->orientadorBusiness = new orientadorBusiness();
				}
				
				/**
				 * Pesquisa todos os Alunos
				 * @return string
				 */
				public function findAll()
				{
					$orientadorBusiness = new OrientadorBusiness();
					$collection = $orientadorBusiness->findAll();
					return json_encode($collection);
				}	

		}

?>