<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once dirname(__FILE__) . '/jasper/PHPJasperXML-0.9d.inc.php';
//require_once dirname(__FILE__) . '/jasper/tcpdf/tcpdf.php';
require_once dirname(__FILE__) . '/jasper/PHPExcel.php';


class Jasper extends PHPJasperXML {

    function __construct()
    {
        parent::__construct();
    }
}