<?php 
require_once ("core/EntityBase.php");


/**
 * 
 */
class Clientes extends EntityBase
{

	private $id;
	public $table;
	public function __construct($table){
        $this->table=$table;
        parent::__construct($this->table);
    }

 



}
















