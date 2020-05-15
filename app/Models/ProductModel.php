<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'product';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'name', 'department', 'description', 'image', 'price'];

    protected $useTimestamps = false;
    protected $DBGroup = 'default';
}