<?php

require_once('config.php');

require_once('functions.php');

switch ($_GET['page']) {
	
	case 'add' :
	
		require_once('add.php');
	
		break;
	
	case 'view' :
	
		require_once('view.php');
		
		break;
		
	case 'delete' :
	
		require_once('delete.php');
	
		break;
	
	case 'edit' :
	
		require_once('edit.php');
	
		break;
		
	default :
	
		require_once('error.php');	
		
}

?>