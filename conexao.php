<?php 

    //constantes em PHP
    define('HOST', 'localhost');
    define('DBNAME', 'agenda_php');
    define('USER', 'root');
    define('PASSWORD', '');

    class Conexao{

        protected $conexao;

        function __construct(){
            $this->conectar();
        }

        public function getConexao(){
            return $this->conexao;
        }

        private function conectar(){
            try {
                $this->conexao = new PDO('mysql:host='.HOST.';dbname='.DBNAME, 
                                    USER, PASSWORD);
                
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        } 

    }

?>

