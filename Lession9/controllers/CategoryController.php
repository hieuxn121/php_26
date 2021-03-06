<?php 
require_once('models/Category.php');
	class CategoryController
	{
		public function list(){
			$category = new Category();
			$categories = $category->getList();
			require_once('views/categories/list.php');
		}
		// Hiển thị ra form tạo mới
		public function create(){
			require_once('views/categories/create.php');
		}
		//Lưu trữ dữ liệu người dùng tạo ra
		public function store(){
			 $data = $_POST;
			 $data_insert = [
    		'id' => $data['id'],
	      	'name' => $data['name'],
	    	'parent_id' => $data['parent_id'],
	    	'thumbnail' => $data['thumbnail'],
	    	'slug' => $data['slug'],
	        'description' => $data['description'],
	        'created_at' => $data['created_at']
    		];
		    $category = new Category();
		    $categories = $category->create($data_insert);
		    if ($categories == true) {
   	 			setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   			}
		    header("Location:index.php?mod=category&act=list");
		}
		public function edit(){
			$id = $_GET['id'];
			$category_obj = new Category();
			$category = $category_obj->find($id);
			require_once('views/categories/edit.php');
		}
		public function update(){
			$data = $_POST;
			$data_insert = [
			'name' => $data['name'],
			'parent_id' => $data['parent_id'],
			'thumbnail' => $data['thumbnail'],
			'slug' => $data['slug'],
			'description' => $data['description'],
			'created_at' => $data['created_at']
			];
			$category = new Category();
			$categories = $category->fix($data_insert,$data['id']);
			if ($categories == true) {
				setcookie('update',"Đã update thông tin thành công", time()+2);
			}
			header("Location: index.php?mod=category&act=list");
		}
		public function detail(){
			$id = $_GET['id'];
			$category_obj = new Category();
			$category = $category_obj->find($id);
			require_once('views/categories/detail.php');
		}
		public function delte(){
			$id = $_GET['id'];
			$category_obj = new Category();
			$category = $category_obj->del($id);
			if ($category == true) {
				setcookie('delete',"Xóa một mục thành công", time()+2);
			}
			header("Location: index.php?mod=category&act=list");
		}
	}
 ?>