<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\SettingModel;

class Setting extends BaseController
{
	public function index()
	{
		$setting = new SettingModel();
		$data['settings'] = $setting->first();
        echo view('setting_change', $data);
	}
}
