<?php

namespace App\Controllers;

class PractitionerDetails extends BaseController
{
    public function index()
    {
        return view('Practitoner/PractitionerDetails');
    }

    public function create(){

        // $form = $this->request->getPost();
        $did =$this->request->getPost('practitionerid');

        $model = new \App\Models\PractitionerProfileModel;
        $profile = new \App\Entities\PractitionerProfile ($this -> request ->getPost());

        // $file = $this->request->getFile('myfile');
        //     if ($file->isValid() && !$file->hasMoved()) {
        //         $fileName= $file->getRandomName();
        //         $file->move('uploads/DocCertificates',$fileName);
        //     }

        $model->insert($profile);

        echo '
        <div class="alert2 text-success text-center">
            <strong> SUCCESS ! </strong>
            Wait for Admin Approval to <strong> Access </strong> the complete system.
            Data added successfully! <br>
        </div>';
        
        return view('Our_Practitioners');
    }

}
