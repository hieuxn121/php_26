<?php 
require_once('models/Post.php');
	class PostController
	{
		public function list(){
			$post = new Post();
			$posts = $post->getList();
			require_once('views/posts/list.php');
		}
		// Hiển thị ra form tạo mới
		public function create(){
			require_once('views/posts/create.php');
		}
		//Lưu trữ dữ liệu người dùng tạo ra
		public function store(){
			 $data = $_POST;
			 $data_insert = [
		    	'id' => $data['id'],
		      'title' => $data['title'],
		    	'description' => $data['description'],
		    	'thumbnail' => $data['thumbnail'],
		    	'content' => $data['content'],
		      'slug' => $data['slug'],
		      'view_count' => $data['view_count'],
		      'category_id' => $data['category_id'],
		      'user_id' => $data['user_id'],
		      'created_at' => $data['created_at']
		    ];
		    $post = new Post();
		    $posts = $post->create($data_insert);
		    if ($posts == true) {
   	 			setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   			}
		    header("Location:index.php?mod=post&act=list");
		}
		public function edit(){
			$id = $_GET['id'];
			$post_obj = new Post();
			$post = $post_obj->find($id);
			require_once('views/posts/edit.php');
		}
		public function update(){
			$data = $_POST;
			$data_insert = [
				'title' => $data['title'],
				'description' => $data['description'],
				'thumbnail' => $data['thumbnail'],
				'content' => $data['content'],
				'slug' => $data['slug'],
				'view_count' => $data['view_count'],
				'category_id' => $data['category_id'],
				'user_id' => $data['user_id'],
				'created_at' => $data['created_at']
			];
			$post= new Post();
			$posts = $post->fix($data_insert,$data['id']);
			if ($posts == true) {
				setcookie('update',"Đã update thông tin thành công", time()+2);
			}
			header("Location: index.php?mod=post&act=list");
		}
		public function detail(){
			$id = $_GET['id'];
			$category_id = $_GET['category_id'];
			$user_id = $_GET['user_id'];

		    $post_obj = new Post();
			$post = $post_obj->find($id);

			$category_obj = new Post();
			$category_name = $category_obj->findC($category_id );
			$user_obj = new Post();
			$user_name = $category_obj->findU($user_id );
			require_once('views/posts/detail.php');
		}
		public function delte(){
			$id = $_GET['id'];
			$post_obj = new  Post();
			$post = $post_obj->del($id);
			if ($post == true) {
				setcookie('delete',"Xóa một mục thành công", time()+2);
			}
			header("Location: index.php?mod=post&act=list");
		}
	}
 ?>