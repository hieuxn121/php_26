<?php 
require_once('models/User.php');
	class UserController
	{
		public function list(){
			$user = new User();
			$users = $user->getList();
			require_once('views/users/list.php');
		}
		// Hiển thị ra form tạo mới
		public function create(){
			require_once('views/users/create.php');
		}
		//Lưu trữ dữ liệu người dùng tạo ra
		public function store(){
			 $data = $_POST;
			 $data_insert = [
		    	'id' => $data['id'],
		      	'name' => $data['name'],
		      	'email' => $data['email'],
		    	'password' => $data['password'],
		    	'avatar' => $data['avatar'],
		      'created_at' => $data['created_at']
		    ];
		    $user = new User();
		    $users = $user->create($data_insert);
		    if ($users == true) {
   	 			setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   			}
		    header("Location:index.php?mod=user&act=list");
		}
		public function edit(){
			$id = $_GET['id'];
			$user_obj = new User();
			$user = $user_obj->find($id);
			require_once('views/users/edit.php');
		}
		public function update(){
			$data = $_POST;
			$data_insert = [
				'name' => $data['name'],
				'email' => $data['email'],
				'password' => $data['password'],
				'avatar' => $data['avatar'],
				'created_at' => $data['created_at']
			];
			$user = new User();
			$users = $user->fix($data_insert,$data['id']);
			if ($users == true) {
				setcookie('update',"Đã update thông tin thành công", time()+2);
			}
			header("Location: index.php?mod=user&act=list");
		}
		public function detail(){
			$id = $_GET['id'];
			$user_obj = new User();
			$user = $user_obj->find($id);
			require_once('views/users/detail.php');
		}
		public function delte(){
			$id = $_GET['id'];
			$user_obj = new  User();
			$user = $user_obj->del($id);
			if ($user == true) {
				setcookie('delete',"Xóa một mục thành công", time()+2);
			}
			header("Location: index.php?mod=user&act=list");
		}
	}
 ?>