<?php 
namespace App\Models;

use CodeIgniter\Model;

class DivModel extends Model
{
    protected $table = 'div_list';    
    protected $primaryKey = 'div_id';    
    protected $allowedFields = [
        'div_name',
        'div_bn_name',
        'div_url'
    ];    
}
