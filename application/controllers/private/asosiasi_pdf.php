s<?php
	class Koleksi_museum_pdf extends MY_Controller {
		
		function  __construct() {
			// load application base
			parent::__construct();
			$this->PrivateAppBase();
			$this->pic_view = 'no';
			$this->no_regmus_export = '';
			$this->load->library('datetimemanipulation');
		}

		public
		function export() {
			$format =  $this->input->post('format_laporan');
			
			if($format == 'tabel'):
			$this->export_tabel(); else :
			$this->export_katalog();
			//echo "Y";exit;
			endif;
		}

		public
		function export_tabel(){
			// load
			$this->load->model('registrasimodel');
			$this->load->library('notification');
			// set rules
			$this->notification->check_post('format_laporan', 'Format Laporan', 'required');
			$this->notification->check_post('batas', 'Batas Data', 'required');
			$type = $this->input->post('batas');
			// run
			
			if ($this->notification->valid_input()) {
				$view_pic = $this->input->post('foto_export');
				
				if($view_pic  == 'yes'):
				$this->pic_view = 'yes';
				endif;
				
				if($type == 'all'):
				$start = 0;
				$end = $this->input->post('total_list');
				elseif($type == 'page'):
				$start = $this->input->post('start_list');
				$end =  $this->input->post('end_list');
				elseif($type == 'lain'):
				$start =( intval($this->input->post('awal_cetak'))- 1 );
				$end = intval($this->input->post('akhir_cetak')) - $start;
				
				if($start < 0):
				$this->notification->set_message("Nomor Urut Batas Awal dan Batas Akhir Harus di Isi jika memilih `Batas Data Tertentu` !");
				$this->notification->sent_notification(false);
				redirect('private/koleksi_museum');
				endif;
				endif;
				 $id_asosiasi = $this->uri->segment(4,0);
				$anggota= $this->registrasimodel->get_list_anggota_disetujui_asosiasi();
				$this->no_regmus_export = $id_asosiasi;
				$this->load->file('system/plugins/tcpdf/tcpdf.php');
				$this->load->library('katalogpdf');
				$obj_tcpdf = new KATALOGPDF();
				$obj_tcpdf->setPageOrientation('L', true, '5');
				$obj_tcpdf->SetDisplayMode('real');
				$obj_tcpdf->setPrintHeader(false);
				$obj_tcpdf->setPrintFooter(true);
				$obj_tcpdf->SetMargins(10, 0, 5);
				$obj_tcpdf->SetFont("helvetica", "B", 12);
				$obj_tcpdf->SetAutoPageBreak(true, 15);
				$obj_tcpdf->setStartingPageNumber(1);
				// add a page
				$obj_tcpdf->AddPage();
				$tablealign = '';
				$tablealign .= '<style>
								.div_border{
									align: center; 
									border: 1px dashed #000;
									padding: 15px;
								}
								.judul-instansi{
									text-align: center; 
									font-size: : 1.2em;
									width:100%;
									padding-top:30px;
								}
								.judul{
									text-align: center; 
									font-weight: bold;
									background-color : #DEDEDE;
									border: 1px solid #000;
									height: 30px;
								}
								.judul-kolom{
									text-align: center; 
									font-weight: bold;
									background-color : #DEDEDE;
									border: 1px solid #000;
									font-size: 18px;
								}
								.cell_kiri{
									text-align: left; 
									border: 1px solid #000;
									font-size: 16px;
									font-weight: normal;
								}
								.cell_tengah{
									text-align: center; 
									border: 1px solid #000;
									font-size: 16px;
									font-weight: normal;
								}
								.lineheader{
									text-align: center; 
									font-size: 0.7em;
									width:100%;
									height:5px;
									border-top:1px solid #000000; 
								}
								</style>
								';
				$tablealign .= '<table border="0" cellpadding="2" style="width:100%;background-color : #DEDEDE;">';
				/*if($this->pic_view == 'yes'):
					$tablealign .= '<thead><tr><th colspan="13">';
				else:
					$tablealign .= '<thead><tr><th colspan="12">';
				endif;
				*/
				$tablealign .= '<thead>';
				$tablealign .= $this->_DisplayPdfTitleCode($anggota['nama']);
				$tablealign .= $this->SetTabelTitleRegistrasi();
				$tablealign .= '</thead><tbody>';
				$tablealign .= $this->setDataKoleksiRegistrasi($start, $end);
				$tablealign .= '</tbody></table>';
				// output the HTML content
				$obj_tcpdf->lastPage();
				$obj_tcpdf->writeHTML($tablealign, true, false, true, false, 'J');
				//Close and output PDF document
				$obj_tcpdf->Output("cetak_laporan_koleksi_registrasi_museum_".date("d_m_Y_Hi").".pdf", "D");
			} else {
				$this->notification->set_message("Proses Export Gagal di lakukan!");
				$this->notification->sent_notification(false);
				redirect('private/koleksi_museum');
			}

		}

		private
		function _DisplayPdfTitleCode($nama_museum) {
			// detail jenis koleksi
			$nama_jenis = '';
			$judul_pendek  =  $this->config->item('nama_aplikasi');
			$img_logo = $this->config->item('logo_dikbud_putih');
			$tablealign = '<tr>';
			$tablealign .= '<th><img alt="" src="'.$img_logo.'" style="width:90px;margin-right:10px;" /></th>';
			
			if($this->pic_view == 'yes'):
			$tablealign .= '<th colspan="12">'; else :
			$tablealign .= '<th colspan="11">';
			endif;
			$tablealign .= '<div style="text-align:center;"><font size="12">'.$judul_pendek .'</font><br /><font size="11">DATA KOLEKSI<br />'.strtoupper($nama_museum).'</font></div>';
			$tablealign .= '</th></tr>';
			return $tablealign;
		}

		private
		function SetTabelTitleRegistrasi(){
			
			if($this->pic_view == 'yes'):
			$tablealign  = '<tr>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">NO. REGISTRASI</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">NO. INVENTARIS/<br />NO REGISTRASI DI MUSEUM</th>';
			$tablealign .= '<th class="judul-kolom" style="width:120px;">NAMA KHUSUS/<br />NAMA UMUM</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">JENIS KOLEKSI/<br />KELOMPOK KOLEKSI</th>';
			$tablealign .= '<th class="judul-kolom" style="width:110px;">NO SK PENTEPAN CB/<br />NO REGNAS CB</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">NEGARA ASAL</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">FUNGSI KOLEKSI</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">UMUR/JAMAN</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">TGL. PEROLEHAN/<br />CARA PEROLEHAN</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">KEASLIAN KOLEKSI</th>';
			$tablealign .= '<th class="judul-kolom" style="width:100px;">URAIAN </th>';
			$tablealign .= '<th class="judul-kolom" style="width:70px;">FOTO</th>';
			$tablealign .= '</tr>'; else :
			$tablealign  = '<tr>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">NO. REGISTRASI</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">NO. INVENTARIS/<br />NO REGISTRASI DI MUSEUM</th>';
			$tablealign .= '<th class="judul-kolom" style="width:120px;">NAMA KOLEKSI</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">JENIS KOLEKSI/<br />KELOMPOK KOLEKSI</th>';
			$tablealign .= '<th class="judul-kolom" style="width:110px;">NO SK PENTEPAN CB/<br />NO REGNAS CB</th>';
			$tablealign .= '<th class="judul-kolom" style="width:80px;">NEGARA ASAL</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">FUNGSI KOLEKSI</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">UMUR/JAMAN</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">TGL. PEROLEHAN/<br />CARA PEROLEHAN</th>';
			$tablealign .= '<th class="judul-kolom" style="width:50px;">KEASLIAN KOLEKSI</th>';
			$tablealign .= '<th class="judul-kolom" style="width:140px;">URAIAN </th>';
			$tablealign .= '</tr>';
			endif;
			return $tablealign;
		}

		private
		function setDataKoleksiRegistrasi($start =0, $end =0 ){
			$this->load->library('datetimemanipulation');
			$params =array(intval($start), intval($end));
			$type = $this->input->post('batas');
			$search_key = array("no_regmus"   => '%', "id_jenis"  => '%',"keaslian_koleksi" => '%', "keutuhan" => '%', "kondisi" => '%', "no_registrasi" => '%',"nama_koleksi" => '%', "nama_khusus" => '%', "id_negara_asal" => '%');
			$search_sql = array( "keaslian_koleksi_null" => ' OR keaslian_koleksi IS NULL',"keutuhan_null" => ' OR keutuhan IS NULL ',"kondisi_null" => 'OR kondisi IS NULL ',"id_negara_null" => 'OR id_negara_asal IS NULL','cb_query' => '');
			//"cb" => '',
			$search = $this->session->userdata('search_koleksi');
			$search_status = $this->session->userdata('search_koleksi_status');
			$order_by_str = $this->session->userdata('order_koleksi_museum');
			/*
		$orderby = $this->session->userdata('orderby_koleksi');
		$order_key['by'] = 'm.no_registrasi';
		if(!empty($orderby)) {
			switch($orderby['nama_field']):
				case 'noregistrasi':
					$order_key['by'] =  'm.no_registrasi';
					break;
				case 'noinventaris':
					$order_key['by'] =  'm.no_inventaris';
					break;
				case 'namakoleksi':
					$order_key['by'] =  'm.nama_koleksi';
					break;
				case 'namakhusus':
					$order_key['by'] =  'm.nama_khusus';
					break;
				default:
					$order_key['by'] =  'm.no_registrasi';
					break;
			endswitch;
		}
		*/
			
			if(!empty($search)) {
				// search parameter
				$search_key['id_jenis'] = (!empty($search['id_jenis'])?$search['id_jenis']:
				'%');
				$search_key['keaslian_koleksi'] = (!empty($search['keaslian_koleksi'])?$search['keaslian_koleksi']:
				'%');
				$search_key['keutuhan'] = (!empty($search['keutuhan'])?$search['keutuhan']:
				'%');
				$search_key['kondisi'] = (!empty($search['kondisi'])?$search['kondisi']:
				'%');
				$search_key['no_registrasi'] = (!empty($search['no_registrasi'])?$search['no_registrasi'].'%':
				'%');
				$search_key['nama_koleksi'] = (!empty($search['nama_koleksi'])?'%'.$search['nama_koleksi'].'%':
				'%');
				$search_key['nama_khusus'] = (!empty($search['nama_khusus'])?'%'.$search['nama_khusus'].'%':
				'%');
				$search_sql['cb_query'] = (!empty($search['cb'])?' AND penetapan_bcb IS NOT NULL AND penetapan_bcb <> "" AND penetapan_bcb <> "-" ':
				'');
				$cb_checked = (!empty($search['cb'])?'checked="checked"':
				'');
				$search_key['id_negara_asal'] = (!empty($search['id_negara_asal'])?$search['id_negara_asal']:
				'%');
				$search_sql = array( "keaslian_koleksi_null" => '',"keutuhan_null" => '',"kondisi_null" => '',"id_negara_null" => '','cb_query' => $search_sql['cb_query']);
				$this->smarty->assign("cb_checked", $cb_checked );
				// print out excel / pdf
			}

			$search_key['no_regmus'] = $this->no_regmus_export;
			
			if($type == 'all'):
			$end = $this->koleksimodel->get_total_koleksi($search_key,$search_sql);
			endif;
			$limit = array(intval($start), intval($end));
			$params = array_merge($search_key, $limit);
			//$datakoleksi = $this->koleksimodel->get_data_koleksi($params, $order_key['by']);
			$datakoleksi = $this->koleksimodel->get_data_koleksi($params, $search_sql, $order_by_str);
			//echo $this->db->last_query();exit;
			$tablealign  = '';
			
			if(!empty($datakoleksi)):
			// parse data
			$no_urut = 1;
			
			if($this->pic_view == 'yes'):
			foreach($datakoleksi as $key=>$row):
			$datakoleksi[$key]['tgl_perolehan'] = $this->datetimemanipulation->GetFullDate($row['tgl_perolehan'],'ins');
			$datakoleksi[$key]['cara_perolehan'] = ucfirst(str_replace("_"," ",$row['cara_perolehan']));
			$tablealign .= '<tr>';
			$tablealign .= '<td class="cell_tengah" style="width:50px;">'.$this->cek_empty($row['no_registrasi']).'</td>';
			$tablealign .= '<td class="cell_tengah" style="width:50px;">'.$this->cek_empty($row['no_inv']).'<br />'.$this->cek_empty($row['no_reg']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:120px;">'.$this->cek_empty($row['nama_khusus']).'<br />'.$this->cek_empty($row['nama_koleksi']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:50px;">'.$this->cek_empty($row['nama_jenis']).'<br />'.$this->cek_empty(ucfirst($row['kelompok_koleksi'])).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:110px;">'.$this->cek_empty($row['penetapan_bcb']).'<br />'.$this->cek_empty($row['no_regnas']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:50px;">'.$this->cek_empty($row['nama_negara']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:50px;">'.$this->cek_empty($row['nama_fungsi']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:50px;">'.$this->cek_empty($row['umur_koleksi']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:50px;">'.$this->cek_empty($datakoleksi[$key]['tgl_perolehan']).'<br />'.$this->cek_empty($datakoleksi[$key]['cara_perolehan']).'</td>';
			$tablealign .= '<td class="cell_tengah" style="width:50px;">'.$this->cek_empty(ucfirst($row['keaslian_koleksi'])).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:100px;">'.$this->cek_empty($row['uraian']).'</td>';
			$foto_koleksi ='&nbsp;';
			$foto = $this->koleksimodel->get_view_cover_by_id_koleksi($row['id_koleksi']);
			
			if(!empty($foto)):
			$path = 'doc/museum/'.$row['no_regmus'].'/'.$row['id_koleksi'].'/'.$foto['view_name'];
			
			if(is_file($path)):
			$foto_koleksi = '<img src="'.$path.'" style="width:65px;margin:2px;" />';
			endif;
			endif;
			$tablealign .= '<td class="cell_tengah" style="width:70px;">'.$foto_koleksi.'</td>';
			$tablealign .= '</tr>';
			endforeach; else :
			foreach($datakoleksi as $key=>$row):
			$datakoleksi[$key]['tgl_perolehan'] = $this->datetimemanipulation->GetFullDate($row['tgl_perolehan'],'ins');
			$datakoleksi[$key]['cara_perolehan'] = ucfirst(str_replace("_"," ",$row['cara_perolehan']));
			$tablealign .= '<tr>';
			$tablealign .= '<td class="cell_tengah" style="width:50px;">'.$this->cek_empty($row['no_registrasi']).'</td>';
			$tablealign .= '<td class="cell_tengah" style="width:50px;">'.$this->cek_empty($row['no_inv']).'<br />'.$this->cek_empty($row['no_reg']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:120px;">'.$this->cek_empty($row['nama_khusus']).'<br />'.$this->cek_empty($row['nama_koleksi']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:50px;">'.$this->cek_empty($row['nama_jenis']).'<br />'.$this->cek_empty(ucfirst($row['kelompok_koleksi'])).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:110px;">'.$this->cek_empty($row['penetapan_bcb']).'<br />'.$this->cek_empty($row['no_regnas']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:80px;">'.$this->cek_empty($row['nama_negara']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:50px;">'.$this->cek_empty($row['nama_fungsi']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:50px;">'.$this->cek_empty($row['umur_koleksi']).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:50px;">'.$this->cek_empty($datakoleksi[$key]['tgl_perolehan']).'<br />'.$this->cek_empty($datakoleksi[$key]['cara_perolehan']).'</td>';
			$tablealign .= '<td class="cell_tengah" style="width:50px;">'.$this->cek_empty(ucfirst($row['keaslian_koleksi'])).'</td>';
			$tablealign .= '<td class="cell_kiri" style="width:140px;">'.$this->cek_empty($row['uraian']).'</td>';
			$tablealign .= '</tr>';
			endforeach;
			endif;
			endif;
			//echo $tablealign;exit;
			return $tablealign;
		}

		public
		function export_katalog() {
			// load
			$this->load->model('asosiasimodel');
			$this->load->model('museummodel');
			$this->load->library('notification');
			// set rules
			$this->notification->check_post('format_laporan', 'Format Laporan', 'required');
			$this->notification->check_post('batas', 'Batas Data', 'required');
			$type = $this->input->post('batas');
			
			if ($this->notification->valid_input()) {
				$view_pic = $this->input->post('foto_export');
				
				if($view_pic  == 'yes'):
				$this->pic_view = 'yes';
				endif;
				
				if($type == 'all'):
				$start = 0;
				$end = $this->input->post('total_list');
				elseif($type == 'page'):
				$start = $this->input->post('start_list');
				$end =  $this->input->post('end_list');
				elseif($type == 'lain'):
				$start =( intval($this->input->post('awal_cetak'))- 1 );
				$end = intval($this->input->post('akhir_cetak')) - $start;
				
				if($start < 0):
				$this->notification->set_message("Nomor Urut Batas Awal dan Batas Akhir Harus di Isi jika memilih `Batas Data Tertentu` !");
				$this->notification->sent_notification(false);
				redirect('private/koleksi_museum');
				endif;
				endif;
				$no_regmus = $this->user_data['no_regmus'];
				$museum= $this->museummodel->get_museum_by_id($no_regmus);
				$this->no_regmus_export = $no_regmus;
				$this->load->file('system/plugins/tcpdf/tcpdf.php');
				$this->load->library('katalogpdf');
				$obj_tcpdf = new KATALOGPDF();
				$obj_tcpdf->SetDisplayMode('real');
				$obj_tcpdf->setPrintHeader(false);
				$obj_tcpdf->setPrintFooter(true);
				$obj_tcpdf->SetMargins(15, 0, 5);
				$obj_tcpdf->SetFont("helvetica", "B", 12);
				$obj_tcpdf->SetAutoPageBreak(true, 15);
				$obj_tcpdf->setStartingPageNumber(1);
				// parse content
				$this->DisplayPdfDataKatalog($museum, $start, $end, $obj_tcpdf);
				//Close and output PDF document
				$obj_tcpdf->Output("koleksi-".date("Y_m_d_His").".pdf", "D");
			} else {
				$this->notification->set_message("Proses Export Gagal di lakukan!");
				$this->notification->sent_notification(false);
				redirect('private/koleksi_museum');
			}

		}

		private
		function _DisplayPdfTitleFormatKatalog($nama_museum ='') {
			// detail museum
			return $tablealign;
		}

		private
		function DisplayPdfDataKatalog($museum, $start =0 , $end =0 , $obj_tcpdf) {
			$this->load->library('DateTimeManipulation');
			$this->load->model('koleksimodel');
			$params =array(intval($start), intval($end));
			$type = $this->input->post('batas');
			$search_key = array("no_regmus"   => '%', "id_jenis"  => '%',"keaslian_koleksi" => '%', "keutuhan" => '%', "kondisi" => '%', "no_registrasi" => '%',"nama_koleksi" => '%', "nama_khusus" => '%', "id_negara_asal" => '%');
			$search_sql = array( "keaslian_koleksi_null" => ' OR keaslian_koleksi IS NULL',"keutuhan_null" => ' OR keutuhan IS NULL ',"kondisi_null" => 'OR kondisi IS NULL ',"id_negara_null" => 'OR id_negara_asal IS NULL','cb_query' => '');
			//"cb" => '',
			$search = $this->session->userdata('search_koleksi');
			$search_status = $this->session->userdata('search_koleksi_status');
			$order_by_str = $this->session->userdata('order_koleksi_museum');
			/*
		$orderby = $this->session->userdata('orderby_koleksi');
		$order_key['by'] = 'm.no_registrasi';
		if(!empty($orderby)) {
			switch($orderby['nama_field']):
				case 'noregistrasi':
					$order_key['by'] =  'm.no_registrasi';
					break;
				case 'noinventaris':
					$order_key['by'] =  'm.no_inventaris';
					break;
				case 'namakoleksi':
					$order_key['by'] =  'm.nama_koleksi';
					break;
				case 'namakhusus':
					$order_key['by'] =  'm.nama_khusus';
					break;
				default:
					$order_key['by'] =  'm.no_registrasi';
					break;
			endswitch;
		}
		*/
			
			if(!empty($search)) {
				// search parameter
				$search_key['id_jenis'] = (!empty($search['id_jenis'])?$search['id_jenis']:
				'%');
				$search_key['keaslian_koleksi'] = (!empty($search['keaslian_koleksi'])?$search['keaslian_koleksi']:
				'%');
				$search_key['keutuhan'] = (!empty($search['keutuhan'])?$search['keutuhan']:
				'%');
				$search_key['kondisi'] = (!empty($search['kondisi'])?$search['kondisi']:
				'%');
				$search_key['no_registrasi'] = (!empty($search['no_registrasi'])?$search['no_registrasi'].'%':
				'%');
				$search_key['nama_koleksi'] = (!empty($search['nama_koleksi'])?'%'.$search['nama_koleksi'].'%':
				'%');
				$search_key['nama_khusus'] = (!empty($search['nama_khusus'])?'%'.$search['nama_khusus'].'%':
				'%');
				$search_sql['cb_query'] = (!empty($search['cb'])?' AND penetapan_bcb IS NOT NULL AND penetapan_bcb <> "" AND penetapan_bcb <> "-" ':
				'');
				$cb_checked = (!empty($search['cb'])?'checked="checked"':
				'');
				$search_key['id_negara_asal'] = (!empty($search['id_negara_asal'])?$search['id_negara_asal']:
				'%');
				$search_sql = array( "keaslian_koleksi_null" => '',"keutuhan_null" => '',"kondisi_null" => '',"id_negara_null" => '','cb_query' => $search_sql['cb_query']);
				$this->smarty->assign("cb_checked", $cb_checked );
				// print out excel / pdf
			}

			$search_key['no_regmus'] = $this->no_regmus_export;
			
			if($type == 'all'):
			$end = $this->koleksimodel->get_total_koleksi($search_key,$search_sql);
			endif;
			$limit = array(intval($start), intval($end));
			$params = array_merge($search_key, $limit);
			//$datakoleksi = $this->koleksimodel->get_data_koleksi($params, $order_key['by']);
			$datakoleksi = $this->koleksimodel->get_data_koleksi($params, $search_sql, $order_by_str);
			$no_urut = 1;
			$tablealign = '';
			
			if(!empty($datakoleksi)){
				// parse data
				$no = 1;
				$obj_tcpdf->SetFont("helvetica", "", 10);
				$judul_pendek = $this->config->item('nama_aplikasi');
				$img_logo = $this->config->item('logo_dikbud_putih');
				$tanggal_laporan = $this->datetimemanipulation->GetFullDate(date('Y-m-d'));
				$tablehead = '';
				$tablehead .= '<tr>
					<th class="cell_tengah" style="width:95px;">
						<img alt="" src="'.$img_logo.'"  style="width:90px;" /></th>
					<th class="judul-instansi" style="width:410px;">
								<br /><br />'.strtoupper($judul_pendek).'
								<br /><font size="11">DATA KOLEKSI <br />'.strtoupper($museum['nama_museum']).'</font>
					</th></tr>
					<tr><th colspan="2" class="lineheader" ></th></tr>';
				foreach($datakoleksi as $result) {
					//$this->pageNum = $no_urut;
					$obj_tcpdf->AddPage();
					$obj_tcpdf->lastPage();
					// display tabel content
					$tablealign = '';
					$tablealign = '<style>
						.tab{ width:645px; }
						.judul{
							text-align: left; 
							vertical-align:middle;
							font-weight: bold;
							background-color : #DEDEDE;
							border: none;
							font-size:32px;
							padding-top:7px;
							padding-bottom:7px;
							padding-left:7px;
							width:520px;
						}
						.juduldua{
							text-align: left; 
							vertical-align:middle;
							font-weight: bold;
							background-color : #DEDEDE;
							border: none;
							font-size:18px;
							width:520px;
						}
						.logodikbud{
								width: 80px;
							}
						.judul-instansi{
								text-align: center; 
								font-size: : 1.2em;
								width:100%;
								padding-top:30px;
							}
							.lineheader{
								text-align: center; 
								font-size: 0.7em;
								width:100%;
								height:5px;
								border-top:1px solid #000000; 
							}
						.cleft{ text-align:left; width: 120px; height: 17px; font-size:0.8em; } 
						.cleftval{ text-align:left; width:235px; height: 17px; font-size:0.8em;}
						.cright{ text-align:left; width: 90px; height: 17px; font-size:0.8em; } 
						.crightval{ text-align:left; width: 125px; height: 17px; font-size:0.8em; } 
						.cellvalspan{ text-align:left; width: 385px; height: 17px; font-size:0.8em;}
						.ccenter{ text-align: center;}
						.imageutama{width: 145px; margin:5px; }
						.cellgambar{width:155px; padding: 5px;}
						.dot{width:10px;text-align: center;}
						.cellketerangan{width:355px;} 
						</style>
						';
					$tablealign .= '<table border="0" cellpadding="2" style="width:100%;background-color : #DEDEDE;">';
					$tablealign .= '<thead>';
					$tablealign .= $tablehead;
					$tablealign .= '</thead>';
					$tablealign .= '<tbody><tr><td colspan="2" >';
					$tablealign .= '<table border="0" cellpadding="5" cellspacing="0" class="tab">';
					// images
					$id_image_utama = 0;
					$arr_image = array();
					$images_path = "doc/tmp/default-koleksi-small.jpg";
					$imageslist = $this->koleksimodel->get_view_by_id_koleksi($result['id_koleksi']);
					
					if(!empty( $imageslist)) {
						foreach($imageslist as $images):
						
						if($images['utama'] == 'yes'){
							$id_image_utama = $images['id_view'];
							$images_real = "doc/museum/".$images['no_regmus']."/".$images['id_koleksi']."/".$images['view_name'];
							
							if(is_file($images_real)) {
								$images_path = $images_real;
							}

						} else {
							$images_real = "doc/museum/".$images['no_regmus']."/".$images['id_koleksi']."/".$images['view_name'];
							
							if(is_file($images_real)){
								$arr_image[] = $images_real;
							}

						}

						endforeach;
					}

					// data
					$tablealign .= '<tr><td class="judul" colspan="2">'.$no_urut.'. '.$result['nama_khusus'].'</td></tr>';
					$tablealign .= '<tr><td class="cellgambar" align="center">
								<img src="'.$images_path.'" alt="" class="imageutama" /></td>';
					$tablealign .= '<td class="cellketerangan" style="text-align:left;">';
					$tablealign .= '<table cellpadding="0" cellspacing="0" border="0" style="width:100%;">';
					$tablealign .= '<tr><td class="cleft">No. Registrasi</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.$result['no_registrasi'].'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">Nama Umum</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.ucfirst($result['nama_koleksi']).'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">Nama Khusus</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.ucfirst($result['nama_khusus']).'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">Jenis Koleksi</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.$result['nama_jenis'].'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">Kelompok Koleksi</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.$result['kelompok_koleksi'].'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">No. Inventaris di Museum</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.$result['no_inv'].'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">No Registrasi di Museum</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.$result['no_reg'].'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">No SK Cagar Budaya</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.$result['penetapan_bcb'].'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">No REGNAS CB</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.$result['no_regnas'].'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">Fungsi Koleksi</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.$result['nama_fungsi'].'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">Umur/Jaman Koleksi</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.$result['umur_koleksi'].'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '<tr><td class="cleft">Negara Asal</td><td class="dot">:</td>';
					$tablealign .= '<td class="cleftval">'.$result['nama_negara'].'</td>';
					$tablealign .= '</tr>';
					$tablealign .= '</table>';
					$tablealign .= '</td></tr>';
					$viewhtml = '';
					//gambar koleksi
					
					if($this->pic_view == 'yes'):
					$viewhtml = '';
					
					if(!empty($arr_image)) {
						$idx = 1;
						$viewhtml .= '<table cellspacing="6"><tr>';
						foreach($arr_image as $val):
						$viewhtml .= '<td style="width:100px;" align="center"><img src="'.$val.'"  style="width:100px;" ></td>';
						endforeach;
						$viewhtml .= '</tr></table>';
						$tablealign .= '<tr>';
						$tablealign .= '<td colspan="2" class="juduldua">Foto Koleksi Lainnya : </td>';
						$tablealign .= '</tr>';
						$tablealign .= '<tr>';
						$tablealign .= '<td colspan="2" style="width: 520px;">'.$viewhtml.'</td>';
						$tablealign .= '</tr>';
					}

					endif;
					///PEROLEHAN KOLEKSI 
					$tablealign .= '<tr><td colspan="2" style="width: 520px;" class="juduldua" >PEROLEHAN KOLEKSI </td></tr>';
					$tablealign .= '<tr><td colspan="2" style="width: 520px;">';
					$tablealign .= '<table cellpadding="0" cellspascing="0" style="width:100%;">';
					$tablealign .= '<tr><td class="cright">Tanggal Perolehan </td>
								<td class="dot">:</td>
								<td class="crightval">'.substr($this->datetimemanipulation->format_short_date($result['tgl_perolehan']),0,10).'</td>
								<td class="cright">Cara Perolehan </td>
								<td class="dot">:</td>
								<td class="crightval">'.ucfirst(str_replace("_"," ",$result['cara_perolehan'])).'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Alamat Asal Perolehan </td>
								<td class="dot">:</td>
								<td class="cellvalspan" colspan="4">'.$result['alamat_asal_perolehan'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Nama Penemu</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['nama_penemu'].'</td>
								<td class="cright">Tahun Penemuan </td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['tahun_penemuan'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Nama Pemilik Terakhir</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['nama_pemilik_terakhir'].'</td>
								<td class="cright">Alamat Pemilik Terakhir</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['alamat_pemilik_terakhir'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Keaslian Koleksi</td>
								<td class="dot">:</td>
								<td class="crightval">'.ucfirst($result['keaslian_koleksi']).'</td>
								<td class="cright">Negara</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['nama_negara_koleksi'].'</td>
								</tr>';
					/**/
					$tablealign .= '</table>';
					$tablealign .= '</td></tr>';
					////END PEROLEHAN
					///FISIK KOLEKSI 
					$tablealign .= '<tr><td colspan="2" style="width: 520px;" class="juduldua" >FISIK KOLEKSI </td></tr>';
					$tablealign .= '<tr><td colspan="2" style="width: 520px;">';
					$tablealign .= '<table cellpadding="0" cellspascing="0" style="width:100%;">';
					$tablealign .= '<tr><td class="cright">Bahan Dasar </td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['bahan_dasar'].'</td>
								<td class="cright">Bahan Tambahan</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['bahan_tambahan'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Keutuhan </td>
								<td class="dot">:</td>
								<td class="crightval">'.ucfirst(str_replace("_"," ",$result['keutuhan'])).'</td>
								<td class="cright">Bentuk</td>
								<td class="dot">:</td>
								<td class="crightval">'.ucfirst(str_replace("_"," ",$result['bentuk'])).'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Panjang</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['panjang'].'</td>
								<td class="cright">Lebar</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['lebar'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Tinggi</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['tinggi'].'</td>
								<td class="cright">Tebal</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['tebal'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Diameter</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['diameter'].'</td>
								<td class="cright">Berat</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['berat'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Karat</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['karat'].'</td>
								<td class="cright">Kondisi</td>
								<td class="dot">:</td>
								<td class="crightval">'.ucfirst(str_replace("_"," ",$result['kondisi'])).'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Warna Dominan</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['warna_dominan'].'</td>
								<td class="cright">Warna Tambahan</td>
								<td class="dot">:</td>
								<td class="cright">'.$result['warna_tambahan'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Ragam Hias</td>
								<td class="dot">:</td>
								<td class="crightval">'.ucfirst(str_replace("_"," ",$result['ragam_hias'])).'</td>
								<td class="cright">Bentuk Ragam Hias</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['bentuk_ragam_hias'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Teknik Pembuatan</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['teknik_pembuatan'].'</td>
								<td class="cright">Bentuk Tulisan</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['bentuk_tulisan'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Bahasa Tulisan</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['bahasa_tulisan'].'</td>
								<td class="cright">Kelompok Etnis</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['kelompok_etnis'].'</td>
								</tr>';
					$tablealign .= '<tr><td class="cright">Glazir</td>
								<td class="dot">:</td>
								<td class="crightval">'.$result['glazir'].'</td>
								<td class="cright"></td>
								<td class="dot"></td>
								<td class="crightval"></td>
								</tr>';
					$tablealign .= '</table>';
					$tablealign .= '</td></tr>';
					///END FISIK KOLEKSI 
					///URAIAN
					$tablealign .= '<tr><td colspan="2" style="width: 520px;" class="juduldua" >URAIAN </td></tr>';
					$tablealign .= '<tr><td colspan="2" style="width: 520px;text-align:justify;font-size:0.8em;padding-left:5px;">
				'.nl2br($result['uraian']).'
				</td></tr>';
					///END URAIAN
					//DATA PENDAFTAR KOLEKSI 
					$logdata = $this->koleksimodel->get_pendaftar_koleksi($result['no_registrasi']);
					
					if(!empty($logdata)):
					
					if(!empty($logdata['admin_name'])):
					$result['nama_pencatat'] =  $logdata['admin_name']; else :
					$result['nama_pencatat'] =  $logdata['nama_user'];
					endif;
					$result['tanggal_pencatatan_view'] = $this->datetimemanipulation->GetFullDate($logdata['tanggal']); else :
					
					if($result['tanggal_pencatatan'] == '0000-00-00' OR empty($result['tanggal_pencatatan'])):
					$result['tanggal_pencatatan'] = date('Y-m-d');
					endif;
					$result['tanggal_pencatatan_view'] = substr($this->datetimemanipulation->GetFullDate($result['tanggal_pencatatan']),0,10);
					endif;
					$tablealign .= '<tr><td colspan="2" style="width:520px;font-size:0.8em;">
								Nama Pencatat : '.ucfirst($result['nama_pencatat']).', <br />Tgl. Pencatatan : '.$result['tanggal_pencatatan_view'].'</td></tr>';
					// end of table
					/**/
					$tablealign .= '</table>';
					$tablealign .= '</td></tr>';
					$tablealign .= '</tbody></table>';
					$obj_tcpdf->writeHTML($tablealign, true, false, true, false, '');
					$no_urut++;
					//echo $tablealign;
					//kosongkan tabel
					$tablealign = '';
					// output the HTML content
					// --
					$no++;
				}

				//echo $tablealign;exit;
			}

			return;
		}

		
		function cek_empty($field){
			
			if(empty($field)){
				return "&nbsp;";
			} else {
				return $field;
			}

		}

	}