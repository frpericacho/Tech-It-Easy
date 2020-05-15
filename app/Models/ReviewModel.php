<?php namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table      = 'prodreviews';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'user_id', 'prod_id', 'comment', 'rating'];

    protected $useTimestamps = false;
    protected $DBGroup = 'default';
}