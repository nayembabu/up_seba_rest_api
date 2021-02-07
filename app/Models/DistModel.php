<?php 
namespace App\Models;

use CodeIgniter\Model;

class DistModel extends Model
{
    protected $table = 'dist_list';    
    protected $primaryKey = 'dist_id';    
    protected $allowedFields = [
        'division_id',
        'dist_name',
        'dist_bn_name',
        'dist_url'
    ];    
}
