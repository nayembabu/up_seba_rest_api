<?php 
namespace App\Models;

use CodeIgniter\Model;

class CdefaultModel extends Model
{
    protected $table = 'cer_deft';    
    protected $primaryKey = 'cer_def_p_iidi';    
    protected $allowedFields = [
        'cer_deft_desc',
        'cer_title',
        'bn/en'
    ];    
}
