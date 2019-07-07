<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistem_model extends CI_Model {

    private $dbo;
    function __construct()
    {
        parent::__construct();
        $this->dbo = $this->load->database('default', true);
    }

    function input_data($data, $table)
    {
        $this->dbo->insert($table, $data);
    }

    function read_histori($number, $offset)
    {
        return $query = $this->dbo->get('history', $number, $offset)->result();
    }

    function jumlah_data_histori()
    {
        return $this->dbo->get('history')->num_rows();
    }
}