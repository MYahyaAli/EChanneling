<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Chat extends BaseController {


 public function search()
    {
        sleep(2);
        if($this->input->post('search_query'))
        {
            $data = $this->chat_model->search_user_data($this->session->userdata('user_id'), $this->input->post('search_query'));
            $output = array();
            if($data->num_rows() > 0)
            {
                foreach($data->result() as $row)
                {
                    $request_status = $this->chat_model->
                    Check_request_status($this->session->userdata('user_id'), $row->user_id);
                    $is_request_send = 'yes';
                    if($request_status == '')
                    {
                        $is_request_send = 'no';
                    } 
                    else
                    {
                        if($request_status == 'pending')
                        {
                            $is_request_send = 'yes';
                        }
                    }
                    if($request_status != 'Accept')
                    {
                        // $output[] = array(
                        // 'user_id'  => $row->user_id,
                        // 'first_name' => $row->first_name,
                        // 'last_name'  => $row->last_name,
                        // 'profile_picture'=> $row->profile_picture,
                        // 'is_request_send'=> $is_request_send);
                    }
                }
            }
                echo json_encode($output);
        }
    }
}
?>