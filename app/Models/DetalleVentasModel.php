<?php namespace App\Models;

use CodeIgniter\Model;

class DetalleVentasModel extends Model
{
        protected $table      = 'det_sells';
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


       



        

}