<?php
	class Qgen {
		private $db;
		
		public function __construct($db) {
			$this->db = $db;
		}
		public function select($table,$collist,$condition=NULL) {
			//select collist from table where condition
			
			$query = "select $collist from $table";
			
			if(isset($condition)) {
				$query.=" where $condition";
			}
			//echo $query;
			return $this->db->query($query);
		}
		
		public function insert($table,$collist,$vallist) {
			//insert into table (collist) values(vallist);
			
			$query = "insert into $table ($collist) values ($vallist)";
			//echo $query;
			$this->db->query($query,false);
			return $this->db->getInsertId();
		}
		
		public function update($table,$colvallist,$condition=NULL) {
			//update table set col=val,col=val where condition
			
			$query = "update $table set $colvallist";
			//echo $query;
			if(isset($condition)) {
				$query.=" where $condition";
			}
			
			$this->db->query($query,false);
			return $this->db->getAffectedRows();
		}
		
		public function delete($table,$condition=NULL) {
			$query = "delete from $table";
			
			if(isset($condition)) {
				$query.=" where $condition";
			}
			
			$this->db->query($query,false);
			return $this->db->getAffectedRows();
		}
		
		public function like($table,$collist,$colvalue,$pattern) {
			$query = "SELECT $collist FROM $table WHERE $colvalue LIKE '$pattern'";
			//echo $query;
			
			$this->db->query($query,false);
			return $this->db->getAffectedRows();
		}
		
		
	}
?>