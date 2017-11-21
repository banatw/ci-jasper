<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tes()
	{
		$this->load->library('Jasper');

		$PHPJasperXML = new PHPJasperXML("en","XLS");  //if export excel, can use PHPJasperXML("en","XLS OR XLSX"); 

		$PHPJasperXML->load_xml_file(dirname(__FILE__) . '/sample1.jrxml');
		$dbdriver="psql";//natively is 'mysql', 'psql', or 'sqlsrv'. the rest will use PDO driver. for oracle, use 'oci'

		/*Buat parameter di jasper untuk image path  "image_path" */
		$PHPJasperXML->arrayParameter = array('image_path'=>dirname(__FILE__));
		$PHPJasperXML->transferDBtoArray('localhost','ropeg','ropeg12','buat-ngetes-doang',$dbdriver);
		$PHPJasperXML->outpage('D');  //$PHPJasperXML->outpage('I=render in browser/D=Download/F=save as server side filename according 2nd parameter',
		//'filename.pdf or filename.xls or filename.xls depends on constructor');
	}
}
