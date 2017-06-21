<?php
	/**
	 *  Class untuk koneksi database
	 *  @Author  : Aminul Aprijal <dev.aprijal@gmail.com>
	 *  @Version : 1.0.1
	 **/	
	Class ConfigApp {
		
		private $db_host = "127.0.0.1";
		private $db_user = "root";
		private $db_pass = "";
		private $db_name = "app_oop";
		
		private $con 		= false;    // Cek apakah database terkoneksi
		private $result 	= array();  // Menampung hasil query
		private $myQuery 	= "";       // Mengembalikan query SQL
		private $numResults = "";       // Mengembalikan jumlah baris record
		
		/**
		 * Fungsi koneksi ke Server Database <MySQL>
		 * Terlebih dahulu setting config diatas		 
		 **/
		public function AppKoneksi(){
			if(!$this->con){
				$myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass); 
				@mysql_set_charset('utf8', $myconn);
				if($myconn){
					$seldb = @mysql_select_db($this->db_name,$myconn); 
					if($seldb){
						$this->con = true;
						return true; 
					}else{
						array_push($this->result,mysql_error()); 
						return false;
					}  
				}else{
					array_push($this->result,mysql_error());
					return false; 
				}  
			}else{  
				return true; 
			}
		}
		
		/**
		 * Fungsi diskoneksi ke Server Database <MySQL>
		 *
		 **/
		public function AppDiskoneksi(){
			if($this->con){				
				if(@mysql_close()){					
					$this->con = false;					
					return true;
				}else{					
					return false;
				}
			}
		}
		
		/** 
		 * Query SQL <SELECT>
		 **/		 
		public function AppSql($sql){
			$query = @mysql_query($sql);
			$this->myQuery = $sql;
			if($query){				
				$this->numResults = mysql_num_rows($query);				
				for($i = 0; $i < $this->numResults; $i++){
					$r = mysql_fetch_array($query);
					$key = array_keys($r);
					for($x = 0; $x < count($key); $x++){						
						if(!is_int($key[$x])){
							if(mysql_num_rows($query) >= 1){
								$this->result[$i][$key[$x]] = $r[$key[$x]];
							}else{
								$this->result = null;
							}
						}
					}
				}
				return true;
			}else{
				array_push($this->result,mysql_error());
				return false;
			}
		}
		
		
		/**
		 * Funsgi Query SQL <SELECT, JOIN TABLE>
		 **/
		public function selectData($table, $rows = '*', $join = null, $where = null, $order = null, $limit = null){			
			$q = 'SELECT '.$rows.' FROM '.$table;
			if($join != null){
				$q .= ' JOIN '.$join;
			}
			if($where != null){
				$q .= ' WHERE '.$where;
			}
			if($order != null){
				$q .= ' ORDER BY '.$order;
			}
			if($limit != null){
				$q .= ' LIMIT '.$limit;
			}
			$this->myQuery = $q;			
			if($this->tableExists($table)){				
				$query = @mysql_query($q);
				if($query){					
					$this->numResults = mysql_num_rows($query);					
					for($i = 0; $i < $this->numResults; $i++){
						$r = mysql_fetch_array($query);
						$key = array_keys($r);
						for($x = 0; $x < count($key); $x++){							
							if(!is_int($key[$x])){
								if(mysql_num_rows($query) >= 1){
									$this->result[$i][$key[$x]] = $r[$key[$x]];
								}else{
									$this->result = null;
								}
							}
						}
					}
					return true;
				}else{
					array_push($this->result,mysql_error());
					return false;
				}
			}else{
				return false;
			}
		}
		
		
		/**
		 * Fungsi INSERT DATA <SQL TABLE>
		 *
		 **/		
		public function insertData($table, $params=array()){
			if($this->tableExists($table)){
				$sql='INSERT INTO `'.$table.'` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';
				$this->myQuery = $sql;				
				if($ins = @mysql_query($sql)){
					array_push($this->result,mysql_insert_id());
					return true;
				}else{
					array_push($this->result,mysql_error());
					return false;
				}
			}else{
				return false;
			}
		}
		
		
		/**
		 * Fungsi DELETE DATA <SQL TABLE>
		 * $where = null --> Bisa menghapus Table secara langsung
		 **/
		public function deleteData($table, $where = null){
			if($this->tableExists($table)){				
				if($where == null){
					$delete = 'DROP TABLE '.$table; 
				}else{
					$delete = 'DELETE FROM '.$table.' WHERE '.$where;
				}				
				if($del = @mysql_query($delete)){
					array_push($this->result,mysql_affected_rows());
					$this->myQuery = $delete;
					return true;
				}else{
					array_push($this->result,mysql_error());
					return false;
				}
			}else{
				return false;
			}
		}
		
		/**
		 * Fungsi UPDATE DATA <SQL TABLE>
		 *
		 **/
		public function updateData($table, $params = array(), $where){
			if($this->tableExists($table)){				
				$args=array();
				foreach($params as $field=>$value){					
					$args[]=$field.'="'.$value.'"';
				}				
				$sql='UPDATE '.$table.' SET '.implode(',',$args).' WHERE '.$where;				
				$this->myQuery = $sql;
				if($query = @mysql_query($sql)){
					array_push($this->result,mysql_affected_rows());
					return true;
				}else{
					array_push($this->result,mysql_error());
					return false;
				}
			}else{
				return false;
			}
		}
		
		
		private function tableExists($table){
			$tableInDB = @mysql_query('SHOW TABLES FROM '.$this->db_name.' LIKE "'.$table.'"');
			if($tableInDB){
				if(mysql_num_rows($tableInDB)==1){
					return true;
				}
				else{
					array_push($this->result,$table." tidak ada didatabase!");
					return false;
				}
			}
		}
		
		public function getResult(){
			$val = $this->result;
			$this->result = array();
			return $val;
		}

		
		public function getSql(){
			$val = $this->myQuery;
			$this->myQuery = array();
			return $val;
		}

		
		public function numRows(){
			$val = $this->numResults;
			$this->numResults = array();
			return $val;
		}

		
		public function escapeString($data){
			return mysql_real_escape_string($data);
		}
		
		
	}


	/**
	 * Koneksi Ke Server Database MySQL
	 *
	 **/
	 $App = new ConfigApp();
	 $App->AppKoneksi();
	
	 /**
	  * Contoh
	  *
	 $App->selectData('history','username, logs, waktu', NULL, 'username="entry_data"', 'waktu DESC', '35');
	 //$App->AppSql('SELECT username, logs, waktu FROM history LIMIT 10');
	 $res = $App->getResult();
     $no  = 0;
	 foreach($res as $r){
		 $no++;
		 echo $no.". ".$r['logs']. " || Time Logs: ". $r['waktu']."<br />";
	 }
	 
	$uname  = "root";  		 // $_POST['uname]
	$passwd = MD5('000000'); // $_POST[passwd]
	$rname  = "root";        // $_POST[rname]
	
	$data = array(
				'uname'  => $uname,
				'passwd' => $passwd,
				'rname'  => $rname
			);

	//$apps->insertData('_tbl_users', $data);
	
	 **/