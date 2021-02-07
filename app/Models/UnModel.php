<?php 
namespace App\Models;

use CodeIgniter\Model;

class UnModel extends Model
{
    protected $table = 'un_list';    
    protected $primaryKey = 'un_id';    
    protected $allowedFields = [
        'upazilla_id',
        'un_name',
        'un_bn_name',
        'un_url'
    ];    
}
