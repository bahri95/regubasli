	$(function() {
		$(".basic").click(function() {
		   ProsesAbsensi(this.id);
		});
		// inpur jam mask
        $(".inputjam").mask('00:00:00');

	});
	
	function hideparent(id) {
		$('#msg_' + id).html('');
		$('#msg_' + id).removeClass(' alert-danger');
		$('#msg_' + id).removeClass(' alert-info');
	}
	
	function ProsesAbsensi(id){
		var url_proses = $('#url_proses').val();
		var jenis_absen = $('#jenis_absen').val();
		$('#msg_' + id).removeClass('red');
		$('#msg_' + id).removeClass('green');
		$('#msg_' + id).html('<strong>Proses Cek Absensi Sedang Berjalan .....</strong>');
		//alert(id + ' -- ' + jenis_absen);
		$.post( url_proses, { id_finger :  id , absen : jenis_absen }).done(function( data ) {
			var arr_hasil =  data.split("-");
			//alert(data);
			if(arr_hasil[0] == 'sukses'){
				$('#msg_' + id).removeClass('red');
				$('#msg_' + id).addClass(' alert-info');
				$('#msg_' + id).html("<button type='button' class='close' onclick='hideparent(" + id + ")'>&times;</button>Proses Cek Absensi Masuk Selesai, ' + arr_hasil[1] + ' Siswa di proses.");
			}else{
				$('#msg_' + id).removeClass('green');
				$('#msg_' + id).addClass(' alert-danger');
				$('#msg_' + id).html("<button type='button' class='close' onclick='hideparent(" + id + ")'>&times;</button>Proses Cek Absensi Gagal dilakukan, harap coba cek kembali koneksi ke fingerprint");
			}
		  });
		  //setTimeout(function(){ ProsesAbsensi(id); }, 12000);
		  setTimeout(function(){ ProsesAbsensi(id); }, 48000);
		  //return;
	}
	 // ProsesAbsensi('1');

