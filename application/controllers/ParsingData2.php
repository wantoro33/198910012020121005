
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ParsingData extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $sumber = 'http://103.226.55.159/json/data_rekrutmen.json';
        $konten = file_get_contents($sumber);
        $data   = array(
            'record' => json_decode($konten, true),
        );
        $this->load->view('tampildata', $data);
    }
}
