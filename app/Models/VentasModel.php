<?php namespace App\Models;

use CodeIgniter\Model;

class VentasModel extends Model
{
        protected $table      = 'tbl_sells';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['name', 'email', 'password', 'username', 'password' , 'img', 'id_type_user', 'online', 'offline'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

        public $db;


        public function __construct($db=0)
        {
                $this->db = \Config\Database::connect();
        }


        public function user($username)
        {
               
                $query = $this->db->query("SELECT * FROM `tbl_users` WHERE username = \"".$username."\"; " );
                return $query->getRow();
        }


        public function type_of_platforms()
        {
                $query = $this->db->query("SELECT * FROM `ct_platform` ;" );
                return $query->getResult();
        }

        public function type_recipe()
        {
                $query = $this->db->query("SELECT * FROM `ct_recipe` ;" );
                return $query->getResult();
        }

        public function insertDetalle($data)
        {
               $num_elementos = 0;

              

                while ( $num_elementos < count( $data['id_products'] )  ) {

                        print_r($data);
                        exit();

                        $query = $this->db->query("
                                INSERT INTO detalle_venta (id_sell ,id_products ,quantity ) 

                                VALUES( $data['id_sell'], $data['id_products'][$num_elementos], $data['quantity'][$num_elementos] ) ; " 
                        );
                        
                }

                return $query->getResult();



                
        }
        

}