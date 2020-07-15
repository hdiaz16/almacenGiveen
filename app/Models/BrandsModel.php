<?php namespace App\Models;

use CodeIgniter\Model;

class BrandsModel extends Model
{
        protected $table      = 'ct_brand_products';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['name'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

        public function list_brand()
        {
            $query =  $this->db->query(" SELECT * FROM ct_brand_products ;" );
            return $query->getResult();
        }

        
}