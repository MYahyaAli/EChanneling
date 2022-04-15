<?php

namespace App\Controllers;

class Our_Practitioners extends BaseController
{
    public function index()
    {
        $model= new \App\Models\practitionerProfileModel;

        $user = $model;

            $session = session();
            $session->set('ProfileID', $user -> id);
            $session->set('Specs', $user -> specification);
            $session->set('Qualify', $user -> qualification);
            $session->set('Did', $user -> practitionerid);
            $session->set('Did', $user -> fullname);

        return view('Our_Practitioners');

        $model= new \App\Models\userModel;
    }
}