<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
        protected $table      = 'tbl_users';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['name', 'email', 'password', 'username', 'password' , 'img', 'id_type_user', 'online', 'offline'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;


        public $db;


        public function __construct($db = 0)
        {
                
        }


        public function user($username)
        {
                $db = \Config\Database::connect();
          
                $query = $db->query("SELECT * FROM `tbl_users` WHERE username = \"".$username."\"; " );

                return $query->getRow();
        }

}