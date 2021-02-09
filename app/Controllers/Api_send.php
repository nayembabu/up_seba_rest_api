<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\CdefaultModel;
use App\Models\CentryModel;
use App\Models\SettingModel;
use App\Models\DivModel;
use App\Models\DistModel;
use App\Models\UpModel;
use App\Models\UnModel;

class Api_send extends BaseController
{
	
  // Api for Certificate Default 

	// Certificate Default Query All
	public function cer_default_findAll()
	{
		$cer_default = new CdefaultModel();

        return $this->response->setJSON($cer_default->findAll());
	}
	
	// Certificate Default Find by ID
	public function cer_default_find($id)
	{
		$cer_default = new CdefaultModel();

        return $this->response->setStatusCode(200)->setJSON($cer_default->find($id));
	}
	
	// Certificate Default Data Entry get Json Data
	public function cer_default_insert()
	{
		$cer_def = $this->request->getJSON();
		$cer_default = new CdefaultModel();
		$cer_default->insert($cer_def);
        return $this->response->setStatusCode(200);
	}

	// Certificate Default Update by ID
	public function cer_default_update()
	{
		$cer_def = $this->request->getJSON();
		$cer_default = new CdefaultModel();
		$cer_default->update($cer_def->cer_def_p_iidi, $cer_def);
        return $this->response->setStatusCode(200);
	}

	// Certificate Default Delete by ID
	public function cer_default_delete($id)
	{
		$cer_default = new CdefaultModel();
		$cer_default->delete($id);
        return $this->response->setStatusCode(200);
	}




  // Api for Certificate Entry 

	// Certificate Entry Query All
  public function cer_entry_findAll()
	{
		$cer_entrys = new CentryModel();

        return $this->response->setJSON($cer_entrys->findAll());
	}
	
	// Certificate Entry Query All by Date
	public function cer_entry_findAll_byDate($this_date)
	{
		$cer_entrys = new CentryModel();
		$total_query_byDate = $cer_entrys->where('cer_entry_date', $this_date)
										  ->findAll();
		return $this->response->setJSON($total_query_byDate);
	}

	// Certificate Entry Search by Name
	public function cer_entry_search_by_name($this_name)
	{
		$cer_entrys = new CentryModel();
		$search_by_name = $cer_entrys->like('person_name', $this_name)
										  ->findAll();
		return $this->response->setJSON($search_by_name);
	}
	
	// Certificate Entry Search by Father Name
	public function cer_entry_search_by_Fname($this_name)
	{
		$cer_entrys = new CentryModel();
		$search_by_father = $cer_entrys->like('father_name', $this_name)
										  ->findAll();
		return $this->response->setJSON($search_by_father);
	}
	
	// Certificate Entry Search by Mother Name
	public function cer_entry_search_by_Mname($this_name)
	{
		$cer_entrys = new CentryModel();
		$search_by_mother = $cer_entrys->like('mother_name', $this_name)
										  ->findAll();
		return $this->response->setJSON($search_by_mother);
	}
	
	// Certificate Entry Query Last by Date
	public function cer_entry_findLast_byDate($this_date)
	{
		$cer_entrys = new CentryModel();
		$total_query_byDate = $cer_entrys->where('cer_entry_date', $this_date)
										  ->orderBy('cer_p_iddd', 'desc')
										  ->first();
		return $this->response->setJSON($total_query_byDate);
	}

	
	// Certificate Entry Query by ID
	public function cer_entry_find($id)
	{
		$cer_entrys = new CentryModel();

        return $this->response->setStatusCode(200)->setJSON($cer_entrys->find($id));
	}
	
	// Certificate Entry Query by Date Wise Id
	public function cer_entry_find_byDateWiseId($id_withDate)
	{
		$cer_entrys = new CentryModel();
		$finding_data = $cer_entrys->where('cer_id_datewise', $id_withDate)
									->first();
        return $this->response->setStatusCode(200)->setJSON($finding_data);
	}
	
	// Certificate Entry Insert get json Data
	public function cer_entry_insert()
	{
		$cer_entry = $this->request->getJSON();
		$cer_entrys = new CentryModel();
		$cer_entrys->insert($cer_entry);
        return $this->response->setStatusCode(200);
	}

	// Certificate Entry Update by ID 
	public function cer_entry_update()
	{
		$cer_entry = $this->request->getJSON();
		$cer_entrys = new CentryModel();
		$cer_entrys->update($cer_entrys->cer_p_iddd, $cer_entry);
        return $this->response->setStatusCode(200);
	}
	
	// Certificate Entry Delete by ID
	public function cer_entry_delete($id)
	{
		$cer_entrys = new CentryModel();
		$cer_entrys->delete($id);
        return $this->response->setStatusCode(200);
	}

	public function getUpSetting()
	{
		$setting = new SettingModel();
		$div_list = new DivModel();
		$get_data = $setting->join('div_list', 'div_list.div_id = settings.div_a_idd', 'left')
									->join('dist_list', 'dist_list.dist_id = settings.dis_a_idd', 'left')
									->join('up_list', 'up_list.up_id = settings.up_a_idd', 'left')
									->join('un_list', 'un_list.un_id = settings.un_a_idd', 'left')
									->first();

		return $this->response->setStatusCode(200)->setJSON($get_data);
	}
	
}
