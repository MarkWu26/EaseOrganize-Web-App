<?php
/* @property charts_model $charts_model */

class charts extends Front_end {

    function _construct(){
        parent::_construct();
        $This->load->model('charts_model');
    }

    function index()
    {
        $data['has_offers_rate']= $this->charts_model->get_services_has_offers();

        $this->view('content/charts',$data);
    }
}
/* End of file dashboard.php */
/*Location: */