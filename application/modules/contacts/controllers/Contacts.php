<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts extends MX_Controller
{
    function __construct(){
        parent::__construct();
     $this->load->database();
    }
    function index()
    {
        $data['title'] = "Contact All City Movers Packers | Get Moving Quote";
        $data['description'] = "Contact All City Movers Packers for safe packing, reliable moving services, free relocation quotes, expert support, and smooth shifting solutions.";
        $data['module'] = "contacts";
        $data['view_file'] = "contacts";
        echo Modules::run('template/layout2', $data);
    }
  
  
    function booking()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('category', 'Service', 'trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        $this->form_validation->set_rules('email', "Email", 'trim|valid_email');
        $this->form_validation->set_rules('mfrom', 'Moving From', 'required|trim');
        $this->form_validation->set_rules('mto', 'Moving To', 'required|trim');
        $this->form_validation->set_rules('message', 'Message', 'trim');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->bookings();
            if ($check == true) {
          echo "1";
            } else {
          echo "<div class='alert alert-danger'>Unable to save your quote request. Please try again.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }
    function faq()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->faq();
            if ($check == true) {
          echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }
    function contact()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->contact();
            if ($check == true) {
          echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

    function newsletter()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->newsletter();
            if ($check == true) {
          echo "1";
            }
        } else {
            echo "<div class='acx-inline-015'>" . validation_errors() . "</div>";
        }
    }
    
}
