<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends MX_Controller
{

    function house()
{
    $data['title'] = "All City Movers Packers – Household Shifting Services";
    $data['description'] = "Safe and professional household relocation services by All City Movers Packers with expert packing, careful transport, and timely delivery across India.";
    $data['module'] = "services";
    $data['view_file'] = "house";
    echo Modules::run('template/layout2', $data);
}

function office()
{
    $data['title'] = "All City Movers Packers – Office Shifting Experts";
    $data['description'] = "Efficient office relocation with All City Movers Packers, handling IT equipment, furniture, and documents safely with minimal business downtime.";
    $data['module'] = "services";
    $data['view_file'] = "office";
    echo Modules::run('template/layout2', $data);
}

function vehicle()
{
    $data['title'] = "All City Movers Packers – Car & Vehicle Transport";
    $data['description'] = "Reliable car and vehicle relocation services by All City Movers Packers with enclosed carriers, insurance coverage, and professional handling.";
    $data['module'] = "services";
    $data['view_file'] = "vehicle";
    echo Modules::run('template/layout2', $data);
}

function logistic()
{
    $data['title'] = "All City Movers Packers – Trusted Logistic & Transportation Services";
    $data['description'] = "All City Movers Packers offers reliable logistic services, ensuring safe and timely delivery of goods across all cities. Your trusted partner for hassle-free transportation.";
    $data['module'] = "services";
    $data['view_file'] = "logistic";
    echo Modules::run('template/layout2', $data);
}

function storage()
{
    $data['title'] = "All City Movers Packers – Storage & Warehousing Services";
    $data['description'] = "Secure warehousing and storage solutions by All City Movers Packers with 24/7 surveillance, climate control, and flexible storage duration options.";
    $data['module'] = "services";
    $data['view_file'] = "storage";
    echo Modules::run('template/layout2', $data);
}

function local()
{
    $data['title'] = "All City Movers Packers – IBA Approved Services";
    $data['description'] = "Trusted IBA-approved relocation services by All City Movers Packers, ensuring hassle-free insurance claims, secure shifting, and professional local moving solutions.";
    $data['module'] = "services";
    $data['view_file'] = "local";
    echo Modules::run('template/layout2', $data);
}


function transportation()
{
    $data['title'] = "All City Movers Packers – Transportation Services";
    $data['description'] = "Reliable transportation services by All City Movers Packers with GPS-enabled vehicles, trained drivers, secure goods movement, and on-time delivery.";
    $data['module'] = "services";
    $data['view_file'] = "transportation";
    echo Modules::run('template/layout2', $data);
}

function packing()
{
    $data['title'] = "All City Movers Packers – Loading & Unloading Services";
    $data['description'] = "Skilled manpower and modern equipment by All City Movers Packers for safe loading and unloading of goods, ensuring damage-free handling.";
    $data['module'] = "services";
    $data['view_file'] = "packing";
    echo Modules::run('template/layout2', $data);
}

function cargo()
{
    $data['title'] = "All City Movers Packers – Cargo & Freight Services";
    $data['description'] = "Reliable cargo handling and freight services by All City Movers Packers, ensuring safe packaging, secure transport, and timely delivery.";
    $data['module'] = "services";
    $data['view_file'] = "cargo";
    echo Modules::run('template/layout2', $data);
}
}