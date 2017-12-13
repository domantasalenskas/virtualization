<?php

class Controller_Registration extends Controller_Template
{
    public function action_index()
    {
        if(Input::post('send')){
            Session::set_flash('success', 'good shit BOY');
        }

        $data = array();
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('registration/index', $data);
    }

}
