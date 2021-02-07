<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\SettingModel;
use App\Models\DivModel;
use App\Models\DistModel;
use App\Models\UpModel;
use App\Models\UnModel;

class Setting extends BaseController
{
	public function index()
	{
		$setting = new SettingModel();
		$div_list = new DivModel();
		$data['all_div'] = $div_list->findAll();
		$data['settings'] = $setting->join('div_list', 'div_list.div_id = settings.div_a_idd', 'left')
									->join('dist_list', 'dist_list.dist_id = settings.dis_a_idd', 'left')
									->join('up_list', 'up_list.up_id = settings.up_a_idd', 'left')
									->join('un_list', 'un_list.un_id = settings.un_a_idd', 'left')
									->first();
        echo view('setting_change', $data);
	}

	public function getDistByDivId($div_id)
	{
		$dist_list = new DistModel();
		$data_array = $dist_list->where('division_id', $div_id)
								->findAll();
		return $this->response->setJSON($data_array);
	}

	public function getUpByDistId($dist_id)
	{
		$up_list = new UpModel();
		$data_array = $up_list->where('district_id', $dist_id)
								->findAll();
		return $this->response->setJSON($data_array);
	}
	
	public function getUnByUpId($un_id)
	{
		$un_list = new UnModel();
		$data_array = $un_list->where('upazilla_id', $un_id)
								->findAll();
		return $this->response->setJSON($data_array);
	}
}
