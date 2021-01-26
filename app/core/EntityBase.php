<?php  


class EntityBase 
{
	private $table, $db, $conectar,$db2,$settings_main,$db_jom;

	public function __construct($table){
		
		require "connection.php";
		$this->db = connection::getConnect();
		$this->table=$table;
		//$this->db=$this->conectar->getConnect();
	}

	

	
	public function db(){
		return $this->db;
	}

	
	public function getAll(){
		$resultSet=array();
		$query = $this->db->query("SELECT * FROM $this->table limit 100");
		while ($row = $query->fetchObject()) {
           $resultSet[]=$row;
        }
        return $resultSet;
	}
	public function getAlls(){
		$resultSet=array();
		$sql="SELECT * FROM $this->table limit 100";
		$statement = $this->db()->prepare($sql);
		$statement->execute();
		foreach($statement->fetchAll(PDO::FETCH_ASSOC) as $campaign){
			
			$resultSet[]=$campaign;
		}



		return $resultSet;
	}

	
	public function save_clientes_in_db($username='', $nombre='', $app='',$apm='',$email='',$tel='',$dir=''){
		$sql = 'INSERT LOW_PRIORITY IGNORE INTO clientes(username, nombre, app,apm,email,tel,dir) VALUES(:username, :nombre, :app,:apm,:email,:tel,:dir)';
		$statement = $this->db->prepare($sql);
		$statement->bindParam(':username', $username);
		$statement->bindParam(':nombre', $nombre);
		$statement->bindParam(':app', $app);
		$statement->bindParam(':apm', $apm);
		$statement->bindParam(':email', $email);
		$statement->bindParam(':tel', $tel);
		$statement->bindParam(':dir', $dir);
		if($statement->execute()){
			return true;
		}
		return false;
	  
		}

	
	



}

?>
