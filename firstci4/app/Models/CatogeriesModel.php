<?php

namespace App\Models;

use CodeIgniter\Model;

class CatogeriesModel extends Model
{
    protected $table      = 'categories';
    protected $primaryKey = 'category_id';

    protected $useAutoIncrement = true;

    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['category_A','category_B'];

    //protected $useTimestamps = true;
    //protected $createdField  = 'post_created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

   // protected $validationRules    = [];
   // protected $validationMessages = [];
  //  protected $skipValidation     = false;
}