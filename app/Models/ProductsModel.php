<?php namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
        protected $table      = 'tbl_products';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['id_marca','id_tipo_producto','id_cont_net','nombre','codigo','cantidad','cantidad_min','cantidad_caja','ubicacion', 'img',  'created_at', 'updated_at', 'deleted_at'];

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


        public function type_of_producst()
        {
            $query = $this->db->query(" SELECT * FROM ct_type_products ;" );
            return $query->getResult();
        }

        public function brands()
        {
            $query =  $this->db->query(" SELECT * FROM ct_brand_products ;" );
            return $query->getResult();
        }

        public function cont_net()
        {
            $query =  $this->db->query(" SELECT * FROM ct_cont_net ;" );
            return $query->getResult();
        }


        public function list_products()
        {
            $query =  $this->db->query(

                " SELECT products.*,  tipo.name AS nameTipo, tipo.id AS idTipo, brand.name AS nameBrand, brand.id AS idBrand , contNet.name AS nameContNet, contNet.id AS idContNet

                FROM tbl_products AS products
                INNER JOIN ct_type_products AS tipo ON products.id_tipo_producto = tipo.id
                INNER JOIN ct_brand_products AS brand ON products.id_marca = brand.id
                INNER JOIN ct_cont_net AS contNet ON products.id_cont_net = contNet.id

                ORDER BY products.id_marca 
    
                ;" 

            );

            return $query->getResult();
        }


        public function count_products()
        {
            $query =  $this->db->query(

                " SELECT COUNT(id) AS numberProducts
                FROM tbl_products
                WHERE deleted_at = 0 
                ;" 

            );

            return $query->getRow();
        }


        public function count_products_deleted()
        {
            $query =  $this->db->query(

                " SELECT COUNT(id) AS numberProductsDeleted
                FROM tbl_products 

                WHERE deleted_at = 1
                ;" 

            );

            return $query->getRow();
        }


        public function findProductId ($id)
        {
            $query =  $this->db->query(

                " SELECT * 
                FROM tbl_products 
                WHERE id = \"".$id."\"
                ;" 

            );
            return $query->getRow();
        }

}