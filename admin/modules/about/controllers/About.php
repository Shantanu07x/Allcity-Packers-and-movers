<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{

    function index()
    {
        $data['title'] = "About All City Movers Packers | Trusted Moving Company";
        $data['description'] = "Learn about All City Movers Packers, a trusted relocation company offering safe packing, reliable transport, skilled movers, and smooth moving services.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose All City Movers Packers | Trusted Movers";
        $data['description'] = "Choose All City Movers Packers for safe packing, skilled movers, reliable transport, timely delivery, affordable rates, and trusted relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }
    
    function testimonials()
    {
        $data['title'] = "All City Movers Packers Reviews | Customer Testimonials";
        $data['description'] = "Read genuine customer testimonials of All City Movers Packers highlighting safe packing, reliable transport, timely delivery, and smooth relocation.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }
    function iba()
    {
        $data['title'] = "All City Movers Packers Reviews | iba-approved";
        $data['description'] = "IBA approved packers and movers by All City Movers and Packers. Trusted relocation with proper documentation, GST invoice and claim support.";
        $data['module'] = "about";
        $data['view_file'] = "iba";
        echo Modules::run('template/layout2', $data);
    }
    function cookies()
    {
        $data['title'] = "All City Movers Packers Reviews | iba-approved";
        $data['description'] = "IBA approved packers and movers by All City Movers and Packers. Trusted relocation with proper documentation, GST invoice and claim support.";
        $data['module'] = "about";
        $data['view_file'] = "cookies";
        echo Modules::run('template/layout2', $data);
    }function disclaimer()
    {
        $data['title'] = "All City Movers Packers Reviews | iba-approved";
        $data['description'] = "IBA approved packers and movers by All City Movers and Packers. Trusted relocation with proper documentation, GST invoice and claim support.";
        $data['module'] = "about";
        $data['view_file'] = "disclaimer";
        echo Modules::run('template/layout2', $data);
    }function privacy()
    {
        $data['title'] = "All City Movers Packers Reviews | iba-approved";
        $data['description'] = "IBA approved packers and movers by All City Movers and Packers. Trusted relocation with proper documentation, GST invoice and claim support.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }function terms()
    {
        $data['title'] = "All City Movers Packers Reviews | iba-approved";
        $data['description'] = "IBA approved packers and movers by All City Movers and Packers. Trusted relocation with proper documentation, GST invoice and claim support.";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}
