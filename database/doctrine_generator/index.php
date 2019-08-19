<?php	
	include 'Doctrine/Doctrine.php';
	include 'Zend/Loader/Autoloader.php';
	try {
		spl_autoload_register(array('Doctrine', 'autoload'));
		$autoloader = Zend_Loader_Autoloader::getInstance();
		$autoloader->setFallbackAutoloader(true);
		//Doctrine_Manager::connection();		
		//Doctrine_Manager::openConnection('pgsql://postgres:postgres@12.128.227.151:5432/sapgae_desarrollo', 'mod_citmaind');	
		Doctrine_Manager::getInstance()->openConnection('pgsql://postgres:postgres@10.12.70.8:5432/salva_para_fernando', '');
		Doctrine::generateModelsFromDb('Generate/domain');
		echo "Modelos generados!!!";
	} catch(Exception $e) {
		echo $e->getMessage();
	}
	
