<?php 
	require_once('core/Model.php');
	class Post extends Model
	{
		private $table = "posts";
		public function getList(){
			$posts = $this->select($this->table);
			return $posts;
		}
		public function create($data){
			$status = $this->insert($this->table,$data);
			return $status;
		}
		public function move($id){
			$status = $this->delete($this->table,$id);
			return $status;
		}
		public function fix($data,$id){
			$status = $this->update($this->table,$data,$id);
			return $status;
		}
		public function find($id){
			$user = $this->getID($this->table,$id);
			return $user;
		}
		public function del($id){
			$status = $this->delete($this->table,$id);
			return $status;
		}
	}	
?>