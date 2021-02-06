<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\CdefaultModel;

class Api_send extends BaseController
{
	public function cer_default_findAll()
	{
		$cer_default = new CdefaultModel();

        return $this->response->setJSON($cer_default->findAll());
	}
	
	public function cer_default_find($id)
	{
		$cer_default = new CdefaultModel();

        return $this->response->setStatusCode(200)->setJSON($cer_default->find($id));
	}
	
	public function cer_default_insert()
	{
		$cer_def = $this->request->getJSON();
		$cer_default = new CdefaultModel();
		$cer_default->insert($cer_def);
        return $this->response->setStatusCode(200);
	}

	public function cer_default_update()
	{
		$cer_def = $this->request->getJSON();
		$cer_default = new CdefaultModel();
		$cer_default->update($cer_def->cer_def_p_iidi, $cer_def);
        return $this->response->setStatusCode(200);
	}

	public function cer_default_delete($id)
	{
		$cer_default = new CdefaultModel();
		$cer_default->delete($id);
        return $this->response->setStatusCode(200);
	}
	public function cer_entry_findAll()
	{
		$cer_default = new CdefaultModel();

        return $this->response->setJSON($cer_default->findAll());
	}
	
	public function cer_entry_find($id)
	{
		$cer_default = new CdefaultModel();

        return $this->response->setStatusCode(200)->setJSON($cer_default->find($id));
	}
	
	public function cer_entry_insert()
	{
		$cer_def = $this->request->getJSON();
		$cer_default = new CdefaultModel();
		$cer_default->insert($cer_def);
        return $this->response->setStatusCode(200);
	}

	public function cer_entry_update()
	{
		$cer_def = $this->request->getJSON();
		$cer_default = new CdefaultModel();
		$cer_default->update($cer_def->cer_def_p_iidi, $cer_def);
        return $this->response->setStatusCode(200);
	}

	public function cer_entry_delete($id)
	{
		$cer_default = new CdefaultModel();
		$cer_default->delete($id);
        return $this->response->setStatusCode(200);
	}
	
}
