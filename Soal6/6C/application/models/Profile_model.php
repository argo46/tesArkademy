<?php defined('BASEPATH') OR exit('No direct script access allowed');

class profile_model extends CI_Model
{
    private $nama_table = "nama";
    private $

    public $id;
    public $name;
    public $id_work;
    public $id_salary;

    public function rules(){
        return ['field' => 'name']
    }
}

?>