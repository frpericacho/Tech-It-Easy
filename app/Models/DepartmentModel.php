<?php namespace App\Models;

use CodeIgniter\Model;

class DepartmentModel extends Model
{
    protected $table      = 'department';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'name'];

    protected $useTimestamps = false;
    protected $DBGroup = 'default';
}