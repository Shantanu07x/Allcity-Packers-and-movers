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
       $data['title'] = "Best Home Shifting Services in $city | call Now $phone";
          $data['description'] = "Safe and affordable home shifting services in $city $state. Trusted movers for local and long-distance shifting. Call $phone today.";
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
        $data['title'] = "Best Office Shifting Services in $city | call Now $phone";
        $data['description']="Safe and affordable Office shifting services in $city $state. Trusted movers for local and long-distance shifting. Call $phone today.";
        $data['module'] = "city_services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }
  
}

