<?php namespace App\Models;

use CodeIgniter\Model;

class DetalleVentasModel extends Model
{
        protected $table      = 'det_sells_produc';
        protected $primaryKey = 'id_det_sells';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['id_sell', 'id_products', 'quantity', 'created_at', 'updated_at', 'deleted_at'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
        
       



        

}