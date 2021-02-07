<?php 
namespace App\Models;

use CodeIgniter\Model;

class UpModel extends Model
{
    protected $table = 'up_list';    
    protected $primaryKey = 'up_id';    
    protected $allowedFields = [
        'district_id',
        'up_name',
        'up_bn_name',
        'up_url'
    ];    
}
