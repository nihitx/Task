<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct(){
    parent::__construct();
        /*  Loading main_model here since all the functions
         *  will be using the same model and less code duplication
        */
        $this->load->model("Main_model");
        /* Loading point_converter library since adding the code here is messy */
        $this->load->library('Point_converter');
    }

    /* Will be changed later */
    public function index(){
        $this->load->view('welcome_message');
    }

     /**
     * Getting all garage from the database.
     * @param Null
     * @return $all_garage (Json)
     */
    public function get_all_garage(){
        $all_garage = $this->Main_model->getAllGarage();
        $all_garage = $this->Point_converter->convert_point_to_text($all_garage);
        $all_garage = json_decode(json_encode($all_garage), true);
        $this->json_out_put($all_garage);
    }

     /**
     * Getting all garage from the database by garage owner.
     * @param $owner (String)
     * @return $all_garage_owner (Json)
     */
    public function get_all_garage_by_garage_owner($owner = 'Fitnesstukku'){
        
        $all_garage_owner = $this->Main_model->getAllGarageOwner($owner);
        $all_garage_owner = $this->Point_converter->convert_point_to_text($all_garage_owner);
        $all_garage_owner = json_decode(json_encode($all_garage_owner), true);
        $this->json_out_put($all_garage_owner);
    }

     /**
     * Getting all garage from the database by country.
     * @param  $country ('String')
     * @return $all_garage_by_country (Json)
     */
    public function get_all_garage_by_country($country = 'Finland'){

        $all_garage_by_country = $this->Main_model->getAllGarageByCountry($country);
        $all_garage_by_country = $this->Point_converter->convert_point_to_text($all_garage_by_country);
        $all_garage_by_country = json_decode(json_encode($all_garage_by_country), true);
        $this->json_out_put($all_garage_by_country);
    }

     /**
     * Getting all garage from the database by cordinates.
     * @param  $cordinates ('String')
     * @return $all_garage_by_cordinates (Json)
     */
    public function get_all_garage_by_cordinates($cordinates = '60.16867390148751 24.930162952045407'){
        
        $lat_long = explode(' ', $cordinates);
        $lat = $lat_long[0]; $long = $lat_long[1];
        $all_garage_by_cordinates = $this->Main_model->getAllGarageByCordinates($lat,$long);
        $all_garage_by_cordinates = $this->Point_converter->convert_point_to_text($all_garage_by_cordinates);
        $all_garage_by_cordinates = json_decode(json_encode($all_garage_by_cordinates), true);
        $this->json_out_put($all_garage_by_cordinates);
    }

     /**
     * Since this piece of code is repeating, it was made its own function
     * @param  $result (arrays or array as input)
     * @return $result (Json)
     */
    public function json_out_put($result){
        $this->output->set_content_type('application/json');
        return $this->output->set_output(json_encode($result));
    }

}
