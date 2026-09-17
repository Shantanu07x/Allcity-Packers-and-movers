<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    function index()
    {
        $data['title'] = "All India Service " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " is best packers and movers service provider.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $data['title'] = "All India Service " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " is best packers and movers service provider.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", ucwords($state));
        $data = array(
            "state" => $state,
            "title" => $this->comp['company3'] . " in $state",
            "description" => $this->comp['company3'] . " in $state",
            "keywords" => "$state " . $this->comp['company3'] . " in $state",
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    {
        // edit by Mr.Rajput 14/5/26
        $seo = array(
            "Zirakpur" => array(
                'title' => "Packers and Movers Zirakpur | VIP Road to Tricity, 4.8★",
                "desc" => "Packers & movers in Zirakpur who plan around VIP Road traffic and Baltana's narrow lanes. 5,000+ moves, 4.8★ rated, GST billed, ISO certified. From ₹3,500. +91-9876392657."
            ),
            "Mohali" => array(
                'title' => "All City Packers And Movers in $city | Affordable Charges 9876392657",
                "desc" => "Looking packers & movers in $city? All City Movers Packers offers safe, affordable & professional Moving services in $city with speed Packing Moving Services."
            ),
            "Amritsar" => array(
               'title' => "Amritsar Packers and Movers | Fixed Pricing, No Surprises",
               "desc" => "Amritsar Packers and Movers who know the katras, GT Road traffic, and Attari border routes firsthand. Fixed pricing, no hidden charges.Call 9876392657."
            ),
            
        ); 
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        //edit by Arshad 15-11-2024
        //edit by Mr.Rajput 
        return array(
            'title' => "Best Packers movers in $city | Packing & Moving Services 9876392657",
            "desc" => "Looking packers & movers in $city? All City Movers Packers offers safe, affordable & professional Packing Moving services in $city with Moving Expert."
        );
    }
    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        $statelink = strtolower($state);
        $data = array(
            "city" => $city,
            "state" => $state,
            // 'img' => base_url('assets') . "/images/state/google/$statelink.png",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Movers Packers $city, Movers near me $city, Packers and movers in $city, Moving companies near me $city, Movers $city, Packers and movers near me $city",
            "Removal companies in $city, Moving services in $city, Cheap movers in $city, Local movers in $city, Local moving companies in $city",
            "$city best moving companies, House movers $city, Packers movers $city, Moving services near $city, House removals $city, Cheap moving companies in $city",
            "Professional movers in $city, House movers near $city, Cheap movers $city, Best packers and movers in $city, Affordable movers $city, International movers from $city, International moving companies in $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }
    function from_to($from = '', $to = '')
    {
        if (@$from && @$to) {
            $from = str_replace("_", " ", $from);
            $from = urldecode(ucwords(str_replace("-", " ", $from)));
            $to = str_replace("_", " ", $to);
            $to = urldecode(ucwords(str_replace("-", " ", $to)));
            $data['from'] = $from;
            $data['to'] = $to;
            $data['city'] = ucwords($from);
            $data['title'] = "Packers Movers from " . ucwords($from . " to " . $to);
            $data['company'] = "Packzia Packers Movers";
            $data['description'] = "We Packers Movers offers you top packing and moving services, where no matter where you from " . ucwords($from) . " to " . ucwords($to) . " or others. We also provides the good prices for a seamless process of a relocation without stress.";
            $data['module'] = "packers_movers";
            $data['view_file'] = "from_city_to_city";
            echo Modules::run('template/layout2', $data);
        } else {
            redirect("home/error");
        }
    }

}