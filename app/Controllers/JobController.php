<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JobsModel;

class JobController extends BaseController
{
    private $jobModel = NULL;
    // constructor

    public function __construct()
    {
        $this->jobModel = new JobsModel();
    }

    public function index()
    {

        $data = $this->jobModel->findAll();
        // var_dump($data);
        // die;
        return view('home', ['data' => $data]);
    }

    public function insert()
    {
        $jobModel = new JobsModel();
        $jobModel->transBegin();
        if (!$jobModel->insert($this->request->getPost())) {
            $this->session->setFlashData('errors', $jobModel->errors());
            return redirect()->to('home')->withInput();
        }
        // $data = [
        //     'category_id' => $this->request->getPost('category_id'),
        //     'companyname' => $this->request->getPost('companyname'),
        //     'job_title' => $this->request->getPost('job_title'),
        //     'description' => $this->request->getPost('description'),
        //     'salary' => $this->request->getPost('salary'),
        //     'location' => $this->request->getPost('location'),
        //     'contact_user' => $this->request->getPost('contact_user'),
        //     'contact_email' => $this->request->getPost('contact_email'),
        // ];
        // $this->jobModel->insert($data);
        // $jobModel->transRollBack();

        // var_dump($data);
        // die;
      
      
        $jobModel->transCommit();
        $this->session->setFlashData('message', "Job Insert Successfully!");
        return redirect()->to('home');
        // var_dump($data);die;
        var_dump($jobModel->errors());


    }




    public function view_job($id)
    {
        $data = $this->jobModel->find($id);
        // var_dump($data);
        // die;
        $this->session->setFlashData('message', "Job View Successfully!");

        return view('view-job', $data);

        // return view('view-job');
    }

    public function delete($id)
    {
        // $this->jobModel = new JobsModel();
        $this->jobModel->delete($id);
        $data = $this->jobModel->findAll();
        // var_dump($data);
        // die;
        $this->session->setFlashData('message', "Job Deleted Successfully!");

        return view('home', ['data' => $data]);
    }
    public function edit($id = null)
    {
        // $this->jobModel = new JobsModel();
        $data['jobModel'] = $this->jobModel->find($id);
        $this->session->setFlashData('message', "Edit Job Successfully!");

        return view('edit-job', $data);
    }
    public function updateJob($id)
    {
        // var_dump($id);
        // die;
        $data = [
            'category_id' => $this->request->getPost('category_id'),
            'companyname' => $this->request->getPost('companyname'),
            'job_title' => $this->request->getPost('job_title'),
            'description' => $this->request->getPost('description'),
            'salary' => $this->request->getPost('salary'),
            'location' => $this->request->getPost('location'),
            'contact_user' => $this->request->getPost('contact_user'),
            'contact_email' => $this->request->getPost('contact_email'),

        ];
        $this->jobModel->update($id, $data);
        $data = $this->jobModel->find($id);

        //  var_dump($data);
        // die;
        $this->session->setFlashData('message', "Update Job Successfully!");

        return view('view-job', $data);
    }
}
