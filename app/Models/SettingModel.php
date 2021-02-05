<?php 
namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
    protected $table = 'settings';    
    protected $primaryKey = 'setting_p_iid';    
    protected $allowedFields = [
        'up_name',
        'address',
        'bn_address',
        'chairman',
        'udc_name',
        'up_bn_name',
        'mobile',
        'pad_img_path',
    ];    
}
