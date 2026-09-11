<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Contacts_mdl extends CI_Model
{
    private $config;
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.hostinger.com',
            'smtp_port' => 587,
            'smtp_user' => 'info@allcitymoverspackers.com',
            'smtp_pass' => 'g+6&Nir?k;cHcK?4',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
    }

    public function bookings()
    {
        $this->ensure_bookings_table();

        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");

        $category = $this->input->post('category', true);
        $name = $this->input->post('name', true);
        $email = $this->input->post('email', true);
        $phone = $this->input->post('phone', true);
        $mfrom = $this->input->post('mfrom', true);
        $mto = $this->input->post('mto', true);
        $msg = $this->input->post('message', true);

        // Insert booking data into the database
        $inserted = $this->db->insert('bookings', array(
            "category" => $category,
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "mfrom" => $mfrom,
            "mto" => $mto,
            "msg" => $msg
        ));

        if (!$inserted) {
            return false;
        }

        // Admin notification email
        $msgd = html_escape($category ? $category : "Services Needed");
        $safeName = html_escape($name);
        $safeEmail = html_escape($email);
        $safePhone = html_escape($phone);
        $safeFrom = html_escape($mfrom);
        $safeTo = html_escape($mto);
        $safeMsg = html_escape($msg);
        $adminMessage = "<div class='acx-inline-016'>Client's Query: <b><q>$msgd</q></b><br><br>Client's Name:  <b>$safeName</b><br><br>From: <b>$safeFrom</b><br><br>To: <b>$safeTo</b><br><br>Phone Number: <b><a href='tel:$safePhone'>$safePhone</a></b><br><br>Email: <b> $safeEmail</b><br><br>Client Msg: <b>$safeMsg</b></div>";

        $this->email->to("info@allcitymoverspackers.com");
        $this->email->from("info@allcitymoverspackers.com");
        $this->email->subject('New Booking Enquiry Received');
        $this->email->message($adminMessage);
        $this->email->send();

        return true;
    }

    private function ensure_bookings_table()
    {
        if ($this->db->table_exists('bookings')) {
            if (!$this->db->field_exists('category', 'bookings')) {
                $this->load->dbforge();
                $this->dbforge->add_column('bookings', array(
                    'category' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 150,
                        'null' => true,
                        'after' => 'id'
                    )
                ));
            }
            return;
        }

        $this->db->query("CREATE TABLE IF NOT EXISTS `bookings` (
            `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
            `category` varchar(150) DEFAULT NULL,
            `name` varchar(150) NOT NULL,
            `email` varchar(150) DEFAULT NULL,
            `phone` varchar(20) NOT NULL,
            `mfrom` varchar(255) NOT NULL,
            `mto` varchar(255) NOT NULL,
            `msg` text DEFAULT NULL,
            `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8");
    }

    public function newsletter()
    {
        $email = $this->input->post('email');
        $this->db->insert('newsletter', array("email" => $email));
        return true;
    }
    public function faq()
    {
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $question = $this->input->post('question');
        $this->db->insert('faq', array("phone" => $phone, "name" => $name, "question" => $question));
        return true;
    }
    public function contact()
    {
        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $qry = $this->input->post('message');
        $this->db->insert('contacts', array("name" => $name, "phone" => $phone, "message" => $qry, "email" => $email));
        $message = "<div class='acx-inline-016'>Client's Query: <b><q>$qry</q></b><br><br>Client's Name:  <b>$name</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b></div>";

        $this->email->to("info@allcitymoverspackers.com");
        $this->email->from("info@allcitymoverspackers.com");
     
        $this->email->subject('New Contacts Enquiry Received ');
        $this->email->message($message);
        $this->email->send();
        return true;
    }
}
