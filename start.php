<?php 
    mb_internal_encoding("UTF-8");
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	set_include_path(get_include_path().PATH_SEPARATOR."application/core".PATH_SEPARATOR."application/libs".PATH_SEPARATOR."application/objects".PATH_SEPARATOR."application/validator".PATH_SEPARATOR."application/controllers".PATH_SEPARATOR."application/modules".PATH_SEPARATOR."application/adapters");
	spl_autoload_extensions("_class.php");
	spl_autoload_register();
 ?>