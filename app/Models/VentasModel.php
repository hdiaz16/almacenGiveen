<?php namespace App\Models;

use CodeIgniter\Model;

class VentasModel extends Model
{
        protected $table      = 'tbl_sells';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['id_user', 'id_platform', 'type_of_recipe','total_products','date'];

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


         public function count_sells()
        {
            $query =  $this->db->query(

                " SELECT COUNT(id) AS numberSells
                FROM tbl_sells 
                ;" 

            );

            return $query->getRow();
        }
        

        

}