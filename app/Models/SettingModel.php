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
        'chairman_bn_name',
        'up_logo',
        'div_a_idd',
        'dis_a_idd',
        'up_a_idd',
        'un_a_idd',
        'pad_img_path',
    ];    
}
