<?php 
namespace App\Models;

use CodeIgniter\Model;

class CentryModel extends Model
{
    protected $table = 'certificate_entry';    
    protected $primaryKey = 'cer_p_iddd';    
    protected $allowedFields = [
        'cer_entry',
        'cer_title',
        'cer_id_datewise',
        'timestamp'
    ];    
}
