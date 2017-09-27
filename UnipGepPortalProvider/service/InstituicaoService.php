<?php
		require_once("business/InstituicaoBusiness.php");
	
		/**
		 * @author Robson
		 *
		 */
		class InstituicaoService
		{
		
				var $instituicaoBusiness;
				public function InstituicaoService()
				{
				   $this->instituicaoBusiness = new InstituicaoBusiness();
				}
				
				/**
				 * Pesquisa todas as instituições
				 * @return string
				 */
				public function findAll()
				{
					$instituicaoBusiness = new InstituicaoBusiness();
					$collection = $instituicaoBusiness->findAll();
					return json_encode($collection);
				}	

		}

?>