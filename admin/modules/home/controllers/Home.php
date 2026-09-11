<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "Error";
        $data['description'] = "Error Page";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "All City Movers & Packers | Safe Moving Services";
        $data['description'] = "Trust Packers and Movers for reliable home, office, and vehicle relocation with expert packing, safe transport, timely delivery, and secure moving solutions.";

        $data['keywords'] = "Packers and Movers, Moving Services, Relocation Services, Household Shifting, Office Relocation, Local Movers, Long-Distance Moving, Home Relocation, Professional Movers, Packing Services, Moving Company, Storage Services, Furniture Movers, Car Transportation, Bike Transportation, Movers Near Me, Best Packers and Movers, Affordable Moving Services, Moving and Packing, Residential Movers, Commercial Movers, Moving Solutions, Safe Relocation, Logistics Services, Moving Experts, Moving Quotes, Moving Assistance, Reliable Movers, International Moving";
        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }
    public function oldurl_to_newurl()
    {
        $current = $this->uri->segment(1);

        $redirects = [
            'packing-and-moving-services.html' => 'packing-and-moving',
            'about-us' => 'about',
            'contact-us' => 'contacts',
            'car-carriers-service' => 'vehicle-shifting',
            'local-shifting-service' => 'local-service',
            'bike-transport-service' => 'vehicle-shifting',
            'transportation-service'  => 'transportation-service',
            'office-shifting-service' => 'office-shifting',
            'top-wooden-packing-service' => 'transportation-service',
            'top-quality-packing-material' => 'packing-unpacking',
            'packing-and-moving' => 'packing-unpacking',
            'home-and-office-relocation-services' => 'home-relocation',
            'warehouse-service'=> 'storage-service',
            'heavy-goods-shifting-services'    => 'logistic-service',
            'iba-approved-transport-service' => 'our-branches',
            'contact.html' => 'contact',
            'old-house-goods-sale-and-purchase'=> 'home-relocation',
            'packers-and-movers-in-ludhiana' => 'ludhiana-packers-movers-punjab',
            'movers-packers-zirakpur' => 'zirakpur-packers-movers-punjab',
            'packers-and-movers-in-pune' => 'pune-packers-movers-maharastra',
            'packers-and-movers-in-ghaziabad' => 'ghaziabad-packers-movers-uttar-pradesh',
            'movers-and-packers-in-mohali' => 'mohali-packers-movers-punjab',
            'packers-and-movers-in-mumbai' => 'mumbai-packers-movers-maharastra',
            'packers-and-movers-in-noida' => 'noida-packers-movers-uttar-pradesh',
            'packers-and-movers-in-chandigarh' => 'dipatoli-packers-movers-jharkhand',
            'packers-and-movers-in-jaipur' => 'jaipur-packers-movers-rajasthan',
            'packers-and-movers-in-bangalore' => 'bengaluru-packers-movers-karnataka',
        ];

        if (isset($redirects[$current])) {
            redirect($redirects[$current], 'location', 301);
        }
    }
}
