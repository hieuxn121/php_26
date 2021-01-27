<?php 
	$mod = "home";
	$act = "index";
	if(isset($_GET['mod'])){
		$mod = $_GET['mod'];
	}
	if(isset($_GET['act'])){
		$act = $_GET['act'];
	}

	switch ($mod) {
		case 'category':
			require_once('controllers/CategoryController.php');
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'create':
					$controller_obj->create();
					break;
				case 'store':
					$controller_obj->store();
					break;
				case 'edit':
					$controller_obj->edit();
					break;
				case 'update':
					$controller_obj->update();
					break;
				case 'detail':
					$controller_obj->detail();
					break;			
				case 'delete':
					$controller_obj->delte();
					break;		
				default:
					echo "No input";
					break;
			}
			break;
		case 'post':
			require_once('controllers/PostController.php');
			$controller_obj = new PostController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'create':
					$controller_obj->create();
					break;
				case 'store':
					$controller_obj->store();
					break;
				case 'edit':
					$controller_obj->edit();
					break;
				case 'update':
					$controller_obj->update();
					break;
				case 'detail':
					$controller_obj->detail();
					break;			
				case 'delete':
					$controller_obj->delte();
					break;		
				default:
					echo "No input";
					break;
			}
			break;
		case 'user':
			require_once('controllers/UserController.php');
			$controller_obj = new UserController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'create':
					$controller_obj->create();
					break;
				case 'store':
					$controller_obj->store();
					break;
				case 'edit':
					$controller_obj->edit();
					break;
				case 'update':
					$controller_obj->update();
					break;
				case 'detail':
					$controller_obj->detail();
					break;			
				case 'delete':
					$controller_obj->delte();
					break;		
				default:
					echo "No input";
					break;
			}
			break;
		default:
			echo "No input";
			break;
	}
?>