<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datetimemanipulation {
    // init var
    public $arr_lang = array();

    function __construct() {
        // indonesia
        $this->arr_lang['in'] = array('01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember', '00' => '--');
        // english
        $this->arr_lang['en'] = array('01' => 'January', '02' => 'February', '03' => 'Maret', '04' => 'April', '05' => 'May', '06' => 'June', '07' => 'July', '08' => 'August', '09' => 'September', '10' => 'October', '11' => 'November', '12' => 'December', '00' => '--');
        // indonesia short date
        $this->arr_lang['ins'] =  array('01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr', '05' => 'Mei', '06' => 'Jun', '07' => 'Jul', '08' => 'Ags', '09' => 'Sep', '10' => 'Okt', '11' => 'Nov', '12' => 'Des', '00' => '--');
        // english short date
        $this->arr_lang['ens'] =  array('01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr', '05' => 'May', '06' => 'Jun', '07' => 'Jul', '08' => 'Ags', '09' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec', '00' => '--');
    }
    
    function __destruct() {

    }
	public function GetFullDateWithDay($tgl){
		$str_date = $this->GetFullDate($tgl,"in");
		$str_day = $this->GetDayDate($tgl);
		
		$str_full = $str_day.", ".$str_date;
		return $str_full;
	}

	public function GetFullDateWithDayEn($tgl){
		$str_date = $this->GetFullDate($tgl,"en");
		$str_day = $this->GetDayDateEn($tgl);
		
		$str_full = $str_day.", ".$str_date;
		return $str_full;
	}
	public function GetShortDateTimeWithDayEN($tgl){
		$str_date = $this->GetFullDateFull($tgl, "ens");
		$str_day = $this->GetDayDateEn($tgl);
		$str_full = $str_day.", ".$str_date;
		return $str_full;
	}
	public function GetFullDate($tgl, $lang = "in"){
		if(isset($tgl)){
			$date[0] = "";
			$date[1] = "";
			$date[2] = "";
			$split_date = explode(" ", $tgl);
			$date = explode("-", $split_date[0]);
			if(isset($split_date[1])){
				$jam = explode(":", $split_date[1]);
			}
			if($date[2] == '00')return "-";
			// language type
			switch($lang){
				case "en":	
					$arr_lang = array('00' => '-', '01' => 'January', '02' => 'February', '03' => 'Maret', '04' => 'April', '05' => 'May', '06' => 'June', '07' => 'Jule', '08' => 'Agustus', '09' => 'September', '10' => 'October', '11' => 'November', '12' => 'December');
					break;
				case "ens":	
					$arr_lang = array('00' => '-', '01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr', '05' => 'May', '06' => 'Jun', '07' => 'Jul', '08' => 'Aug', '09' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec');
					break;
				case "ins":	
					$arr_lang = array('00' => '-', '01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr', '05' => 'Mei', '06' => 'Jun', '07' => 'Jul', '08' => 'Ags', '09' => 'Sep', '10' => 'Okt', '11' => 'Nov', '12' => 'Des');
					break;
				default:					
					$arr_lang = array('00' => '-', '01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
					break;
			}
			// parse date
			if(!isset($jam[0]) OR !isset($jam[1]) OR !isset($jam[2])){
				$tgl = $date[2] . " " . $arr_lang[$date[1]] . " " . $date[0];
			}else{
				$tgl = $date[2] . " " . $arr_lang[$date[1]] . " " . $date[0] . " | " . $jam[0] . ":" . $jam[1] ; // . ":" . $jam[2];
			}
		}
		// return
		return $tgl;	
	}
	
	public function GetDayDate($tgl){
		//$this->_set_language();
		$date[0] = "";
		$date[1] = "";
		$date[2] = "";
		$split_date = explode(" ", $tgl);
		$date = explode("-", $split_date[0]);
		$theday = date('w', mktime(0, 0, 0, intval($date[1]), intval($date[2]), intval($date[0])));
		
		$arr_day = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "
Sabtu");
		
		$str_day = $arr_day[$theday];
		return $str_day;
	}

	public function GetDayDateEn($tgl){
		//$this->_set_language();
		$date[0] = "";
		$date[1] = "";
		$date[2] = "";
		$split_date = explode(" ", $tgl);
		$date = explode("-", $split_date[0]);
		$theday = date('w', mktime(0, 0, 0, intval($date[1]), intval($date[2]), intval($date[0])));
		
		$arr_day = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "
Saturday");
		
		$str_day = $arr_day[$theday];
		return $str_day;
	}
	
    public function format_full_date($tgl, $lang = "in") {
        // check input tanggal
        $tgl = explode(' ', $tgl);
        $tgl_day = isset($tgl[0])?$tgl[0]:'00-00-000';
        $tgl_jam  = isset($tgl[1])?$tgl[1]:'00:00:00';
        // tanggal
        $tgl_day = explode('-', $tgl_day);
        if(count($tgl_day) != 3) {
            return 'not valid date format...';
        }
        // jam
        $tgl_jam = explode(':', $tgl_jam);
        if(count($tgl_jam) != 3) {
            $tgl_jam = '';
        }
        // parse date
        $month_label = isset($this->arr_lang[$lang][$tgl_day[1]])?$this->arr_lang[$lang][$tgl_day[1]]:$this->arr_lang[$lang]['00'];
        $date_label = $tgl_day[2] . ' ' . $month_label . ' ' . $tgl_day[0];
        // parse time
        if(!empty($tgl_jam)) {
            $tgl_jam = $tgl_jam[0] . ':' . $tgl_jam[1] . ':' . $tgl_jam[2];
            $date_label .= ' ' . $tgl_jam;
        }
        // return
        return $date_label;
    }

    public function format_date_only($tgl, $lang = "in") {
        // tanggal
        $tgl_day = explode('-', $tgl);
        if(count($tgl_day) != 3) {
            return 'not valid date format...';
        }
        // parse date
        $month_label = isset($this->arr_lang[$lang][$tgl_day[1]])?$this->arr_lang[$lang][$tgl_day[1]]:$this->arr_lang[$lang]['00'];
        $date_label = $tgl_day[2] . ' ' . $month_label . ' ' . $tgl_day[0];
        // return
        return $date_label;
    }

    public function format_short_date($tgl) {
        // check input tanggal
        $tgl = explode(' ', $tgl);
        $tgl_day = isset($tgl[0])?$tgl[0]:'00-00-000';
        $tgl_jam  = isset($tgl[1])?$tgl[1]:'00:00:00';
        // tanggal
        $tgl_day = explode('-', $tgl_day);
        if(count($tgl_day) != 3) {
            return 'not valid date format...';
        }
        // jam
        $tgl_jam = explode(':', $tgl_jam);
        if(count($tgl_jam) != 3) {
            $tgl_jam = '';
        }
        // parse date
        $date_label = $tgl_day[0] . '/' . $tgl_day[1] . '/' . $tgl_day[2];
        // parse time
        if(!empty($tgl_jam)) {
            $tgl_jam = $tgl_jam[0] . ':' . $tgl_jam[1] . ':' . $tgl_jam[2];
            $date_label .= ' ' . $tgl_jam;
        }
        // return
        return $date_label;
    }
	
	public function format_short_date_ind($tgl) {
        // check input tanggal
        $tgl = explode(' ', $tgl);
        $tgl_day = isset($tgl[0])?$tgl[0]:'00-00-000';
        $tgl_jam  = isset($tgl[1])?$tgl[1]:'00:00:00';
        // tanggal
        $tgl_day = explode('-', $tgl_day);
        if(count($tgl_day) != 3) {
            return 'not valid date format...';
        }
        // jam
        $tgl_jam = explode(':', $tgl_jam);
        if(count($tgl_jam) != 3) {
            $tgl_jam = '';
        }
        // parse date
        $date_label =  $tgl_day[2]. '/' . $tgl_day[1] . '/' .$tgl_day[0];
        // parse time
        if(!empty($tgl_jam)) {
            $tgl_jam = $tgl_jam[0] . ':' . $tgl_jam[1] . ':' . $tgl_jam[2];
            $date_label .= ' ' . $tgl_jam;
        }
        // return
        return $date_label;
    }
	
	public function GetFullDateFull($tgl, $lang = "in"){
		if(isset($tgl)){
			$date[0] = "";
			$date[1] = "";
			$date[2] = "";
			$split_date = explode(" ", $tgl);
			$date = explode("-", $split_date[0]);
			if(isset($split_date[1])){
				$jam = explode(":", $split_date[1]);
			}
			// language type
			switch($lang){
				case "en":	
					$arr_lang = array('00' => '-', '01' => 'January', '02' => 'February', '03' => 'Maret', '04' => 'April', '05' => 'May', '06' => 'June', '07' => 'Jule', '08' => 'Agustus', '09' => 'September', '10' => 'October', '11' => 'November', '12' => 'December');
					break;
				case "ens":	
					$arr_lang = array('00' => '-', '01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr', '05' => 'May', '06' => 'Jun', '07' => 'Jul', '08' => 'Aug', '09' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec');
					break;
				case "ins":	
					$arr_lang = array('00' => '-', '01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr', '05' => 'Mei', '06' => 'Jun', '07' => 'Jul', '08' => 'Ags', '09' => 'Sep', '10' => 'Okt', '11' => 'Nov', '12' => 'Des');
					break;
				default:					
					$arr_lang = array('00' => '-', '01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
					break;
			}
			// parse date
			if(!isset($jam[0]) OR !isset($jam[1]) OR !isset($jam[2])){
				$tgl = $date[2] . " " . $arr_lang[$date[1]] . " " . $date[0];
			}else{
				$tgl = $date[2] . " " . $arr_lang[$date[1]] . " " . $date[0] . "  " . $jam[0] . ":" . $jam[1] . ":" . $jam[2];
			}
		}
		// return
		return $tgl;	
	}
	// private function _set_language() {
	// 	$uri_addr = $this->session->userdata('uri_adr');
	// 	//echo $uri_addr;exit;
	// 	// echo strpos($uri_addr, "process") ; exit;
	// 	$this->act_lang = $this->session->userdata('act-lang');
	// 	if(empty($this->act_lang)):
	// 		$this->session->set_userdata('act-lang','id');
	// 		$this->act_lang = 'id';
	// 	endif;
	// 	$lang = $this->uri->segment(3);	
	// 	if($lang == 'en' OR $lang == 'id'):
	// 		$this->session->set_userdata('act-lang', $lang);
	// 		$this->act_lang = $lang;
	// 		//$arr_uri = explode("/public/",$uri_addr);
	// 		if(strpos($uri_addr, "process") > 1):
	// 			redirect('public/home');
	// 		else:
	// 			redirect($uri_addr);
	// 		endif;			
	// 	endif;

	// 	if($lang != 'process' OR $lang != 'loginadmin'):
	// 		$this->smarty->assign("url_lang_id", site_url("public/lang/id"));
	// 		$this->smarty->assign("url_lang_en", site_url("public/lang/en"));			
	// 	else:
	// 		$uri_addr = site_url('public/home');
	// 		$this->smarty->assign("url_lang_id", site_url("public/lang/id"));
	// 		$this->smarty->assign("url_lang_en", site_url("public/lang/en"));

	// 	endif;
		

	// 	$uri_addr = $this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6);
                 
	// 	$this->session->set_userdata('uri_adr', $uri_addr);
	// 	//echo $this->session->userdata('uri_adr');exit;
	// 	$this->smarty->assign("actlang", $this->act_lang);
	// 	$this->smarty->assign("act_lang", $this->act_lang);
		
	// }
	
}

?>