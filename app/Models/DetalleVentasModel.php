<?php namespace App\Models;

use CodeIgniter\Model;

class DetalleVentasModel extends Model
{
        protected $table      = 'det_sells_prod';
        protected $primaryKey = 'id_det_sells';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['id_sell', 'id_products', 'quantity'];

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


        public function insert_det_sells ($data1)
        {
                $query = $this->db->query(" INSERT INTO `det_sells_prod` (id_sell, id_products, quantity) VALUES(".$data1['id_sell'].",".$data1['id_products'].",".$data1['id_sell'].") ");
 
                return $query->getResult();
        }



        

}