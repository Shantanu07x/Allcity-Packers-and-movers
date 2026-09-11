<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class City_services extends MX_Controller
{
   
    
    function home_shiftings($city='Siliguri')
    {
    	$this->load->helper('text');
    	$city=str_replace("_", " ", $city);
    	$city=ucwords(str_replace("-", " ", $city));
        $state=str_replace("_", " ", $state);
    	$state=ucwords(str_replace("-", " ", $state));
        $data['city']=$city;
        $data['img']=base_url('assets')."/img/logo/gspm-star-7.png";
        $data['title'] = "Best Home Shifting Services in $city | Call Now 9876392657";
        $data['description'] = "Get reliable home shifting services in $city with safe packing, fast moving, and affordable rates. Trusted movers. Call 9876392657 today!"; 
        $data['module'] = "city_services";
        $data['view_file'] = "home";
        echo Modules::run('template/layout2', $data);
    }
    
	function office_shiftings($city='Siliguri')
    {
    	$this->load->helper('text');
    	$city=str_replace("_", " ", $city);
    	$city=ucwords(str_replace("-", " ", $city));
        $data['city']=$city;
        $data['img']=base_url('assets')."/img/logo/gpm-logo-0-1.png";
        $data['title'] = "Best Office Shifting Services in $city | Call Now 9876392657";
        $data['description']="Safe and affordable Office shifting services in $city $state. Trusted movers for local and long-distance shifting. Call 9876392657 today.";
        $data['module'] = "city_services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }
    function car_transport($city='Siliguri')
    {
    	$this->load->helper('text');
    	$city=str_replace("_", " ", $city);
    	$city=ucwords(str_replace("-", " ", $city));
        $data['city']=$city;
        $data['img']=base_url('assets')."/img/logo/gpm-logo-0-1.png";
        $data['title'] = "Best Car Transport Services in $city | Call Now 9876392657";
        $data['description']="Safe and affordable car transport services in $city $state. Trusted movers for local and long-distance transport. Call $phone today.";
        $data['module'] = "city_services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }
    function iba($city='Siliguri')
    {
    	$this->load->helper('text');
    	$city=str_replace("_", " ", $city);
    	$city=ucwords(str_replace("-", " ", $city));
        $data['city']=$city;
        $data['img']=base_url('assets')."/img/logo/gpm-logo-0-1.png";
        $data['title'] = "Best IBA Approved Packers and Movers in $city | Call Now 9876392657";
        $data['description']="Safe and affordable IBA approved packers and movers in $city $state. Trusted movers for local and long-distance shifting. Call 9876392657 today.";
        $data['module'] = "city_services";
        $data['view_file'] = "iba-packers";
        echo Modules::run('template/layout2', $data);
    }
  
}

