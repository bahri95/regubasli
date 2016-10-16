/* Custom function REGMUS application support */

$(function() {
	
	/* WYSIWYG HTML5 Bootstrap */
	$(".textarea").wysihtml5();
	
	/* CK Editor */
	if($('#ck_editor_text').length > 0 )
	{
		 CKEDITOR.replace('editor1');
	}
	
	
	
    /* checkbox list for delete */
	if($(".checked-all").length > 0)
	{
		
		$('input[type="checkbox"][name="checked-all"]').on('ifChecked', function(event){
		 	 $('input').iCheck('check');
		});
		
		
	}
	
	$('input#foto-cek').on('ifChecked', function(event){
		 alert(event.type + ' callback');
	});
	
	if($('.pagination').length > 0){
		//$('.pagination').addClass('')	;
	}
	
	$(".tanggal").datepicker({
            format: 'yyyy-mm-dd'
        });
	
	$(".tanggalpilih").datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: "-70:+10",
            showOn: 'both',
            buttonImage: '{/literal}{$BASEURL}{literal}doc/tmp/calendar.gif',
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd'
        });
	
	if($('#scrform').length > 0){
		if($('#search_status').val() == ''){
			$('#btnscr').click();
		}
	}
	
	function konfirmasi_delete(){
		tanya = confirm('Apakah anda yakin akan menghapus data ini!');
		if(tanya){
			return true;
		}else{
			return false;
		}
	}
    
	/* tabel list format datatable / grid */
	if($("#table_datagrid").length > 0)
	{
   		$('#table_datagrid').dataTable();
		
	}
	
	if($('#tabs-form').length > 0)
	{
			$('.alert').hide();
			$('#tab1_form_edit').click();
	}
	
	
	//dashboard grafik admin	
	if($('#dashboard-grafik-jenis').length > 0)
	{
		
		var options_charts = {
		chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Grafik Jumlah Koleksi Museum'
        },
		subtitle: {
					text: 'BERDASARKAN JENIS KOLEKSI'
			},
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y} koleksi ',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
		credits: {
					enabled: false
			},
        series: [{
            type: 'pie',
            name: 'Jenis Koleksi'
       		 }]
   		 };
		 
		 var url_data_grafik_jenis =  $('#url_data_grafik_jenis').val();
		
		$.getJSON(url_data_grafik_jenis,  function(data) {
			options_charts.series[0].data = data;
			$('#dashboard-grafik-jenis').highcharts(
				options_charts
			 );
			
			
		}).fail(function() {
			console.log("error ");
	 	 });
		 
		};
		
	//grafik admin museum terbanyak	
	if($('#dashboard-grafik-museum-terbanyak').length > 0)
	{
		
		var options_charts_museum_terbanyak = {
			chart: {
            type: 'column'
        },
        title: {
					text: 'Grafik Jumlah Koleksi Berdasarkan Museum'
				},
		subtitle: {
					text: '10 BESAR MUSEUM TERATAS'
			},
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '8px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Koleksi'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Jumlah Koleksi: <b>{point.y}</b>',
			useHTML: true
        },
		credits: {
					enabled: false
			},
		colors: ['#0CD5E4'],
		series: [{
            name: 'MUSEUM',
            dataLabels: {
					enabled: true,
					rotation: -90,
					color: '#FFFFFF',
					align: 'right',
					x: 4,
					y: 10,
					style: {
						fontSize: '13px',
						fontFamily: 'Verdana, sans-serif',
						textShadow: '0 0 3px black'
					}
				}
			
			}]
   		 };
		 
		 var url_data_grafik_museum =  $('#url_data_grafik_museum').val();
		
		$.getJSON(url_data_grafik_museum,  function(data) {
			options_charts_museum_terbanyak.series[0].data = data;
			$('#dashboard-grafik-museum-terbanyak').highcharts(
				options_charts_museum_terbanyak
			 );
			
			
		}).fail(function() {
			console.log("error ");
	 	 });
		 
		};
		
		
	//dashboard grafik museum 	
	if($('#dashboard-grafik-jenis-museum').length > 0)
	{
		
		var options_charts = {
		chart: {
            type: 'column'
        },
        title: {
					text: 'Grafik Jumlah Koleksi Museum'
				},
		subtitle: {
					text: 'BERDASARKAN JENIS KOLEKSI'
			},
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '11px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Koleksi'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Jumlah Koleksi: <b>{point.y}</b>',
			useHTML: true
        },
		credits: {
					enabled: false
			},
		colors: ['#0CD5E4'],
		series: [{
            name: 'JENIS KOLEKSI',
            dataLabels: {
					enabled: true,
					rotation: -90,
					color: '#FFFFFF',
					align: 'right',
					x: 4,
					y: 10,
					style: {
						fontSize: '13px',
						fontFamily: 'Verdana, sans-serif',
						textShadow: '0 0 3px black'
					}
				}
			
			}]
   		 };
		 
		 var url_data_grafik_jenis =  $('#url_data_grafik_jenis').val();
		
		$.getJSON(url_data_grafik_jenis,  function(data) {
			options_charts.series[0].data = data;
			$('#dashboard-grafik-jenis-museum').highcharts(
				options_charts
			 );
			
			
		}).fail(function() {
			console.log("error ");
	 	 });
		 
		};
	
		
		
		
});
//
function tab_ajax_request(placeholder, url_target) {
			$('#' + placeholder).html('');
		    $('#' + placeholder).html('<center><div class="box" style="min-height:400px;"><div class="overlay"></div><div class="loading-img"></div></div></center>');
		    $('#' + placeholder).load(url_target);
}

function form_ajax_post(form_id, nama_data){
		 $(".alert").removeClass('alert-danger');
         $(".alert").removeClass('alert-success');
         $(".alert").show();
         $('#notification').html('Memproses...');
         jQuery.post($("#" + form_id).attr('action'),$("#" + form_id).serialize(),function(data){
                   if(data=='sukses'){
                             $('.alert').removeClass('alert-danger');
                             $('.alert').addClass('alert-success');
                             $('#notification').html('<p>Data ' + nama_data + ' berhasil disimpan</p>');
							 var page = document.location.href;
							 var loc = page.replace("#notif", "");
							document.location =  loc + '#notif';
                   }else{
                            $("#notification").html('');
                            $('.alert').removeClass('alert-success');
                            $('.alert').addClass('alert-danger');
                            $("#notification").html(data);
                    }
              return false;
        });

}

/// MODAL DIALOG BOX 
	function setModalBox(title,content,footer,$size)
        {
            document.getElementById('modal-bodyku').innerHTML=content;
            document.getElementById('myModalLabel').innerHTML=title;
            document.getElementById('modal-footerq').innerHTML=footer;
            if($size == 'large')
            {
                $('#myModal').attr('class', 'modal fade bs-example-modal-lg')
                             .attr('aria-labelledby','myLargeModalLabel');
                $('.modal-dialog').attr('class','modal-dialog modal-lg');
            }
            if($size == 'standart')
            {
                $('#myModal').attr('class', 'modal fade')
                             .attr('aria-labelledby','myModalLabel');
                $('.modal-dialog').attr('class','modal-dialog');
            }
            if($size == 'small')
            {
                $('#myModal').attr('class', 'modal fade bs-example-modal-sm')
                             .attr('aria-labelledby','mySmallModalLabel');
                $('.modal-dialog').attr('class','modal-dialog modal-sm');
            }
        }
		
	function open_modal( title, content, footer, size)
        {
            setModalBox(title,content,footer,size);
            $('#myModal').modal('show');
			document.getElementById("form-export").reset();
			 $("input[type='checkbox'][name='foto_export']:not(.simple), input[type='radio']:not(.simple)").iCheck({
				checkboxClass: 'icheckbox_minimal',
				radioClass: 'iradio_minimal'
			});
        }	

	/* lightbox */
	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	});
	
	

      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
      
