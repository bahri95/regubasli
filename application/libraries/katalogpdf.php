<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KATALOGPDF extends TCPDF {

  	var $CI;
   
    // Page footer
    public function Footer() {
		$CI =& get_instance();
		$pageN = $this->PageNo();
		$CI->load->library('datetimemanipulation');
		$tanggal_laporan =$CI->datetimemanipulation->GetFullDate(date('Y-m-d')); 
        // Position at 15 mm from bottom
        $this->SetY(-12);
        // Set font
        $this->SetFont('helvetica', 'I', 6);
        $this->setFooterMargin(25);
		$this->Cell(0, 10, $this->getAliasNumPage(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
		$nama_instansi1 = $CI->config->item('nama_instansi_dpcbm');
		$nama_instansi2 = $CI->config->item('nama_instansi_dikbud');
		$this->SetY(-10);
		$this->Cell(0, 0,$nama_instansi1, 0, false, 'L', 0, '', 0, false, 'T', 'M');
		$this->SetY(-8);
		$this->Cell(0, 0, $nama_instansi2, 0, false, 'L', 0, '', 0, false, 'T', 'M');
		$this->Cell(0, 0, $tanggal_laporan, 0, false, 'R', 0, '', 0, false, 'T', 'M');
		//$this->writeHTMLCell(0, 0, '', '', $nama_instansi2, 0, 1, 0, true, '', true);
		//$this->writeHTML($footer_text, true, false, true, false, '');
    }
}

?>