<?php
	class DBAccess {
		private $config;
		private $link;
		private $isConnect = false;
		public function __construct($config) {
			$this->config = $config;
			$this->getConnection();
		}
		
		public function getConnection() {
			$this->link = mysqli_connect($this->config->getHostname(),
							$this->config->getUsername(),
							$this->config->getPassword(),
							$this->config->getDatabase());
							
			if(!$this->link) {
				die('Connection Error '.mysqli_connect_errno().'-'.mysqli_connect_error());
			}else {
				$this->isConnect = true;
			}
		}
		
		public function closeConnection() {
			if(mysqli_close($this->link)){
				$this->isConnect = false;
			}
		}
		
		public function query($query,$isClose=true) {
			if(!$this->isConnect) {
				$this->getConnection();
			}
			$result = mysqli_query($this->link,$query);
			if($isClose)
				$this->closeConnection();
			return $result;
		}
		
		public function countRows($result) {
			return mysqli_num_rows($result);
		}
		
		public function fetchRow($result) {
			return mysqli_fetch_row($result);
		}
		
		public function fetchAssoc($result) {
			return mysqli_fetch_assoc($result);
		}
		
		public function getInsertId() {
			$id = mysqli_insert_id($this->link);
			$this->closeConnection();
			return $id;
		}
		
		public function getAffectedRows() {
			$rows = mysqli_affected_rows($this->link);
			$this->closeConnection();
			return $rows;
		}
	}
?>