<?php namespace App\Models;

use CodeIgniter\Model;

class RatingModel extends Model
{
    protected $table      = 'ratings';
    protected $primaryKey = 'rating';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['rating', 'text'];

    protected $useTimestamps = false;
    protected $DBGroup = 'default';
}