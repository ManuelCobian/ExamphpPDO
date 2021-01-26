<?php
//namespace controller;
define('PROJECT_ROOT_PATH', __DIR__);
require_once ("models/Clientes.php");

require_once 'config/constants.php';
//require_once('../../master-libs/slr.php');



//include_once($_SERVER['DOCUMENT_ROOT']."/master-libs/slr.php");



//include_once("../../server/slr.php");

use core\ControllerBase as ControllerBase;

//use model\Usuario as Usuario;

class PublicController extends ControllerBase
{
  public $clientes;
  //controlador para hacer crud
  public function __construct()
  { 
    parent::__construct();
    
  }


  


  public function index(){
    
    ini_set('memory_limit', '-1');
    @set_time_limit(-1);
    $script = "";

          $script.= '<script type="text/javascript"> function cargar() { ';
          $script.= ' /* Traer el widget */
                  
                  ';
          $script.= ' } ';
          $script.= ' var link = document.getElementById("cuadros"); ';
          $script.= ' link.onload = cargar(); ';
          $script.= '</script>';

         


          $script=array('admin/scripts');
          
          
          $clientes =new Clientes("clientes");
          
          $this->view("templates/Template", array(
            "allusers" => $clientes->getAll(),
            "Hola" => "videoEjemplo de MVC",
            "title"=>"Welcome",
            "contraer"=>true,
            "pagina"=>"templates/TempleteUser",
            "carpeta"=>1,
            "pagina_interna"=>"admin/panel",
            //"scripts_chart"=>$script,
              "carpeta"=>2,
            "scripts"=>$script,
          )); 


  }

  public function Registro(){
    
    ini_set('memory_limit', '-1');
    @set_time_limit(-1);
    $script = "";

          $script.= '<script type="text/javascript"> function cargar() { ';
          $script.= ' /* Traer el widget */
                  
                  ';
          $script.= ' } ';
          $script.= ' var link = document.getElementById("cuadros"); ';
          $script.= ' link.onload = cargar(); ';
          $script.= '</script>';

          


          $script=array('admin/scripts');


          $this->view("templates/Template", array(
            "allusers" =>"",
            "Hola" => "videoEjemplo de MVC",
            "title"=>"Registro clientes",
            "contraer"=>true,
            "pagina"=>"templates/TempleteUser",
            "carpeta"=>1,
            "Base_url"=>BASE_URL,
            "pagina_interna"=>"admin/clientes/register_form",
            //"scripts_chart"=>$script,
              "carpeta"=>2,
            "scripts"=>$script,
          )); 


  }



  public function insert_registro(){
    
    ini_set('memory_limit', '-1');
    @set_time_limit(-1);
    $clientes =new Clientes("clientes");
    $username=$_POST['username'];
    $nombre=$_POST['nombre'];
    $app=$_POST['app'];
    $apm=$_POST['apm'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $dir=$_POST['dir'];
    if($clientes->save_clientes_in_db($username,$nombre,$app,$apm,$email,$tel,$dir)){
      echo "success";
    }else{
      echo "failed";
    }
        // die("entro");


  }



  public function getClientes(){
    
    ini_set('memory_limit', '-1');
    @set_time_limit(-1);
    $clientes =new Clientes("clientes");
    if(is_array($clientes->getAll()) && !is_null($clientes->getAll())){
      echo json_encode($clientes->getAll());
    }
        // die("entro");


  }


  public function docXml(){
    
    ini_set('memory_limit', '-1');
    @set_time_limit(-1);
    

        
    $clientes =new Clientes("clientes");
    if(is_array($clientes->getAlls()) && !is_null($clientes->getAlls())){
      $this->createXMLfile($clientes->getAlls());
      
    }
    
  }

  public function createXMLfile($clientArray){

    $xml = new XMLWriter();

    $xml->openURI("php://output");
    $xml->startDocument();
    $xml->setIndent(true);

    $xml->startElement('clientes');

    foreach($clientArray as $cliente){
    $xml->startElement("clientes");

    $xml->writeAttribute('id', $cliente['id']);
    $xml->writeRaw($cliente['id']);

    $xml->writeAttribute('username', $cliente['username']);
    $xml->writeRaw($cliente['username']);
    

    $xml->endElement();
    }


    $xml->endElement();

header('Content-type: text/xml');
$xml->flush();

  
 
  } 


 

  public function docWord(){
    
    ini_set('memory_limit', '-1');
    @set_time_limit(-1);
    $script = "";

          $script.= '<script type="text/javascript"> function cargar() { ';
          $script.= ' /* Traer el widget */
                  
                  ';
          $script.= ' } ';
          $script.= ' var link = document.getElementById("cuadros"); ';
          $script.= ' link.onload = cargar(); ';
          $script.= '</script>';

          


          $script=array('admin/scripts');


          $this->view("templates/Template", array(
            "allusers" =>"",
            "Hola" => "videoEjemplo de MVC",
            "title"=>"Welcome",
            "contraer"=>true,
            "pagina"=>"templates/TempleteUser",
            "carpeta"=>1,
            "pagina_interna"=>"admin/panel",
            //"scripts_chart"=>$script,
              "carpeta"=>2,
            "scripts"=>$script,
          )); 


  }


  public function docExcel(){
    
    ini_set('memory_limit', '-1');
    @set_time_limit(-1);
    $script = "";

          $script.= '<script type="text/javascript"> function cargar() { ';
          $script.= ' /* Traer el widget */
                  
                  ';
          $script.= ' } ';
          $script.= ' var link = document.getElementById("cuadros"); ';
          $script.= ' link.onload = cargar(); ';
          $script.= '</script>';

          


          $script=array('admin/scripts');


          $this->view("templates/Template", array(
            "allusers" =>"",
            "Hola" => "videoEjemplo de MVC",
            "title"=>"Welcome",
            "contraer"=>true,
            "pagina"=>"templates/TempleteUser",
            "carpeta"=>1,
            "pagina_interna"=>"admin/panel",
            //"scripts_chart"=>$script,
              "carpeta"=>2,
            "scripts"=>$script,
          )); 


  }
}

?>