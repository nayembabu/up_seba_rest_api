<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\CdefaultModel;

class Adminview extends BaseController
{
	public function index()
	{
		echo "admin";
	}

	public function findAll()
	{
		$cer_default = new CdefaultModel();

        return $this->response->setStatusCode(200)->setJSON($cer_default->findAll());
	}
	
	public function find($id)
	{
		$cer_default = new CdefaultModel();

        return $this->response->setStatusCode(200)->setJSON($cer_default->find($id));
	}
	
	public function insert()
	{
		$cer_def = $this->request->getJSON();
		$cer_default = new CdefaultModel();
		$cer_default->insert($cer_def);
        return $this->response->setStatusCode(200);
	}

	public function update()
	{
		$cer_def = $this->request->getJSON();
		$cer_default = new CdefaultModel();
		$cer_default->update($cer_def->cer_def_p_iidi, $cer_def);
        return $this->response->setStatusCode(200);
	}

	public function delete($id)
	{
		$cer_default = new CdefaultModel();
		$cer_default->delete($id);
        return $this->response->setStatusCode(200);
	}
}
