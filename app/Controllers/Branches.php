<?php

namespace App\Controllers;

use Exception;

class Branches extends BaseController{

    /**
     * @var \CodeIgniter\Database\BaseConnection
     */
    private $db;

    function __construct() {

        $this->db = db_connect();
    }

	public function index(){

        if ($this->request->getMethod() == 'post' ){

            $file = $this->request->getFile('upload_file');

            if (! $file->isValid()) {

                throw new \RuntimeException($file->getErrorString().'('.$file->getError().')');

            }else{
                $file->move(WRITEPATH.'/', $file->getName());

                $file_path = WRITEPATH . '/' . $file->getName();

                $assoc_array = [];
                if (($handle = fopen($file_path, "r")) !== false) {
                    if (($data = fgetcsv($handle, 1000, ",")) !== false) {
                        $keys = $data;
                    }
                    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                        $assoc_array[] = array_combine($keys, $data);
                    }
                    fclose($handle);
                }

                $builder = $this->db->table('branches');

                $msg = "";

                foreach($assoc_array as $row_data) {

                    $query_data = [
                        'branchcode'     => $row_data['code'] ?? '',
                        'branchname'     => $row_data['name'] ?? '',
                        'branchaddress1' => $row_data['address'] ?? '',
                        'branchzip'      => $row_data['zip_code'] ?? '',
                        'branchcity'     => $row_data['city'] ?? '',
                        'branchstate'    => $row_data['state'] ?? '',
                        'branchcountry'  => $row_data['country'] ?? '',
                        'branchphone'    => $row_data['phone'] ?? '',
                        'branchemail'    => $row_data['email'] ?? '',
                        'branchurl'      => $row_data['url'] ?? '',
                        'branchip'       => $row_data['ip_address'] ?? '',
                        'branchnotes'    => $row_data['notes'] ?? ''
                    ];

                    try{

                        $builder->set($query_data)->insert();

                        $msg .= "Success, branchcode " . $query_data['branchcode'] . " created \n";

                    } catch (Exception $e){
                        $msg .= "Error, branchcode " . $query_data['branchcode'] . " failed \n";
                    }
                }
                return $msg;
            }
        }

        $query = $this->db->query('SELECT * FROM branches');

        if ($query) {
            $data['branches'] = $query->getResult();
        }
        else {
            $data['data'] = "Success!";
        }

		return view('branches/branches', $data);
	}

}
