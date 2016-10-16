$(function() {

tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
      "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern codesample"
    ],
    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,

    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table codesample",

    image_advtab: true,
    image_caption: true,

    style_formats: [
      {title: 'Bold text', format: 'h1'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    template_replace_values : {
      username : "Jack Black"
    },

    template_preview_replace_values : {
      username : "Preview user name"
    },

    link_class_list: [
      {title: 'Example 1', value: 'example1'},
      {title: 'Example 2', value: 'example2'}
    ],

    image_class_list: [
      {title: 'Example 1', value: 'example1'},
      {title: 'Example 2', value: 'example2'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],

    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

    spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

  if (!window.console) {
    window.console = {
      log: function() {
        tinymce.$('<div></div>').text(tinymce.grep(arguments).join(' ')).appendTo(document.body);
      }
    };
  }

		


	



	



	



	



    /* checkbox list for delete */



	if($(".checked-all").length > 0)



	{



		



		$('input[type="checkbox"][name="checked-all"]').on('ifChecked', function(event){



		 	 $('input').iCheck('check');



		});



		



		



	}



	



	$('input#foto-cek').on('ifChecked', function(event){



		// alert(event.type + ' callback');



	});



	



	if($('.pagination').length > 0){



		//$('.pagination').addClass('')	;



	}



	



	$(".tanggal").datepicker({



            format: 'yyyy-mm-dd'



        });

	$(".tanggal_album").datepicker({



            format: 'dd-mm-yyyy'



        });



	$("#tahun").datepicker( {



	    format: " yyyy", // Notice the Extra space at the beginning



	    viewMode: "years", 



	    minViewMode: "years"



	});



	 $('#bulan').datepicker( {



        format: " MM", // Notice the Extra space at the beginning



	    viewMode: "months", 



	    minViewMode: "months"



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





});


	function loadGrafikBarTBS(){
		
		$('#container_tbs').html('<center>Loading...</center>');
		var tahun = $('#tahun_data_tbs').val();
		$('#container_tbs_tabel').html('<center>Loading...</center>');
		$('#container_tbs_tabel').load($('#url_data_tabel_tbs').val() + '/' + tahun + '/private');
		var options_charts_TBS = {
			chart: {
				type: 'column'
			},
			title: {
				text: 'Grafik Harga Tandan Buah SEGAR (TBS) Tahun ' + tahun
			},
			xAxis: {
				categories: [
					'Jan',
					'Feb',
					'Mar',
					'Apr',
					'Mei',
					'Jun',
					'Jul',
					'Agt',
					'Sep',
					'Okt',
					'Nov',
					'Des'
				]
			},
			yAxis: {
				allowDecimals: false,
				title: {
					text: 'Harga dalam Rupiah'
				},
				labels: {
									overflow: 'justify',
									format: '{value:.,0f}'
							},
			},
			tooltip: {
				headerFormat: '<span style="font-size:14px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>Rp {point.y}</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
					credits: {
							enabled: false
					}
			
     
		};
		
	
		var url_data_grafik_TBS = $('#url_data_grafik_tbs').val() + '/' + tahun;
		$.getJSON(url_data_grafik_TBS,  function(data) {
			options_charts_TBS.series = data.datatbs;
			//options_charts_TBS.title.text = options_charts_TBS.title.text + ' Tahun ' + data.tahun_data;
			$('#container_tbs').highcharts(
				options_charts_TBS
			);
		}).fail(function() {
			console.log("error get data grafik TBS");
	 	 });
	}
	
	
	function loadGrafikLineTBS(){
		var tahun = $('#tahun_data_tbs').val();
		var options_charts_TBS = {
					chart: {
					type: 'spline'
				},
					title: {
						text:  'Grafik Harga Tandan Buah SEGAR (TBS) Tahun ' + tahun,
						x: -20 //center
					},
					xAxis: {
						categories: [
					'Jan',
					'Feb',
					'Mar',
					'Apr',
					'Mei',
					'Jun',
					'Jul',
					'Agt',
					'Sep',
					'Okt',
					'Nov',
					'Des'
				]
					},
					yAxis: {
						title: {
							text: 'Harga dalam Rupiah'
						},
						labels: {
										overflow: 'justify',
										format: '{value:.,0f}'
								},
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
					},
					tooltip: {
						valuePrefix: 'Rp '
					},
					legend: {
						layout: 'vertical',
						align: 'right',
						verticalAlign: 'middle',
						borderWidth: 0
					}
					
			}
			
			var url_data_grafik_TBS = $('#url_data_grafik_tbs').val() + '/' + tahun;
			$.getJSON(url_data_grafik_TBS,  function(data) {
				options_charts_TBS.series = data.datatbs;
				$('#container_tbs').highcharts(
					options_charts_TBS
				);
			}).fail(function() {
				console.log("error get data grafik TBS");
			 });
	}
	
	
	function loadGrafikBarCPO(){
		$('#container_cpodomestik').html('<center>Loading...</center>');
		var tahun = $('#tahun_data_cpo').val();
		$('#container_cpodomestik_tabel').html('<center>Loading...</center>');
		$('#container_cpodomestik_tabel').load($('#url_data_tabel_cpo').val() + '/' + tahun + '/private');
		var options_charts_cpo_domestik = {
			chart: {
				type: 'column'
			},
			title: {
				text: 'Grafik Harga CPO Domestik (KPB dan Astra) Tahun ' + tahun
			},
			xAxis: {
				categories: [
					'Jan',
					'Feb',
					'Mar',
					'Apr',
					'Mei',
					'Jun',
					'Jul',
					'Agt',
					'Sep',
					'Okt',
					'Nov',
					'Des'
				]
			},
			yAxis: {
				allowDecimals: false,
				title: {
					text: 'Harga dalam Rupiah/Kg Exclude PPN'
				},
				labels: {
									overflow: 'justify',
									format: '{value:.,0f}'
							},
			},
			tooltip: {
				headerFormat: '<span style="font-size:14px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>Rp {point.y}</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
					credits: {
							enabled: false
					}
			
     
		};
		
	
		var url_data_grafik_cpo_domestik = $('#url_data_grafik_cpodomestik').val() + '/' + tahun;
		$.getJSON(url_data_grafik_cpo_domestik,  function(data) {
			options_charts_cpo_domestik.series = data.data_cpodomestik;
			//options_charts_cpo_domestik.title.text = options_charts_cpo_domestik.title.text + ' Tahun ' + data.tahun_data;
			$('#container_cpodomestik').highcharts(
				options_charts_cpo_domestik
			);
		}).fail(function() {
			console.log("error get data grafik CPO Domestik");
	 	 });
	}
	
	function loadGrafikLineCPO(){
		var tahun = $('#tahun_data_cpo').val();
		var options_charts_cpo_domestik = {
					chart: {
					type: 'spline'
				},
					title: {
						text: 'Grafik Harga CPO Domestik (KPB dan Astra) Tahun ' + tahun,
						x: -20 //center
					},
					xAxis: {
						categories: [
					'Jan',
					'Feb',
					'Mar',
					'Apr',
					'Mei',
					'Jun',
					'Jul',
					'Agt',
					'Sep',
					'Okt',
					'Nov',
					'Des'
				]
					},
					yAxis: {
						title: {
							text: 'Harga dalam Rupiah/Kg Exclude PPN'
						},
						labels: {
										overflow: 'justify',
										format: '{value:.,0f}'
								},
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
					},
					tooltip: {
						valuePrefix: 'Rp '
					},
					legend: {
						layout: 'vertical',
						align: 'right',
						verticalAlign: 'middle',
						borderWidth: 0
					}
					
			}
			
			var url_data_grafik_cpo_domestik = $('#url_data_grafik_cpodomestik').val() + '/' + tahun;
			$.getJSON(url_data_grafik_cpo_domestik,  function(data) {
				options_charts_cpo_domestik.series = data.data_cpodomestik;
				$('#container_cpodomestik').highcharts(
					options_charts_cpo_domestik
				);
			}).fail(function() {
				console.log("error get data grafik CPO Domestik");
			});
	}
	
	function loadGrafikBarEkspor(){
		$('#container_pasarglobal').html('<center>Loading...</center>');
		 var tahun = $('#tahun_data_ekspor').val();
		$('#container_pasarglobal_tabel').html('<center>Loading...</center>');
		$('#container_pasarglobal_tabel').load($('#url_data_tabel_ekspor').val() + '/' + tahun + '/private');
		 var options_charts_pasarglobal = {
				chart: {
					type: 'column'
				},
				title: {
					text: 'Grafik Harga Referensi dari Pasar Global (CIF Rotterdam atau FOB Rotterdam) Tahun ' + tahun
				},
				xAxis: {
					categories: [
						'Jan',
						'Feb',
						'Mar',
						'Apr',
						'Mei',
						'Jun',
						'Jul',
						'Agt',
						'Sep',
						'Okt',
						'Nov',
						'Des'
					]
				},
				yAxis: {
					allowDecimals: false,
					title: {
						text: 'Harga dalam USD/Ton'
					},
					labels: {
										overflow: 'justify',
										format: '{value:.,0f}'
								},
				},
				tooltip: {
					headerFormat: '<span style="font-size:14px">{point.key}</span><table>',
					pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
						'<td style="padding:0"><b>${point.y}</b></td></tr>',
					footerFormat: '</table>',
					shared: true,
					useHTML: true
				},
				plotOptions: {
					column: {
						pointPadding: 0.2,
						borderWidth: 0
					}
				},
				credits: {
					enabled: false
				}
				
		 
			};
			
		
			var url_data_grafik_pasarglobal = $('#url_data_grafik_pasarglobal').val() + '/' + tahun;
			$.getJSON(url_data_grafik_pasarglobal,  function(data) {
				options_charts_pasarglobal.series = data.data_pasarglobal;
				//options_charts_pasarglobal.title.text = options_charts_pasarglobal.title.text + ' Tahun ' + data.tahun_data;
				$('#container_pasarglobal').highcharts(
					options_charts_pasarglobal
				);
			}).fail(function() {
				console.log("error get data grafik CPO Domestik");
			 });
			 
			 
	}
	
	
	function loadGrafikLineEkspor(){
		var tahun = $('#tahun_data_ekspor').val();
		var options_charts_pasarglobal = {
					chart: {
					type: 'spline'
				},
					title: {
						text: 'Grafik Harga Referensi dari Pasar Global (CIF Rotterdam atau FOB Rotterdam) Tahun ' + tahun,
						x: -20 //center
					},
					xAxis: {
						categories: [
					'Jan',
					'Feb',
					'Mar',
					'Apr',
					'Mei',
					'Jun',
					'Jul',
					'Agt',
					'Sep',
					'Okt',
					'Nov',
					'Des'
				]
					},
					yAxis: {
						title: {
							text: 'Harga dalam USD/Ton'
						},
						labels: {
										overflow: 'justify',
										format: '{value:.,0f}'
								},
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
					},
					tooltip: {
						valuePreffix: '$'
					},
					legend: {
						layout: 'vertical',
						align: 'right',
						verticalAlign: 'middle',
						borderWidth: 0
					}
					
			}
			
			var url_data_grafik_pasarglobal = $('#url_data_grafik_pasarglobal').val() + '/' + tahun;
			$.getJSON(url_data_grafik_pasarglobal,  function(data) {
				options_charts_pasarglobal.series = data.data_pasarglobal;
				//options_charts_pasarglobal.title.text = options_charts_pasarglobal.title.text + ' Tahun ' + data.tahun_data;
				$('#container_pasarglobal').highcharts(
					options_charts_pasarglobal
				);
			}).fail(function() {
				console.log("error get data grafik Ekspor");
			 });
	}


	function loadGrafikEkspor(){
		loadGrafikBarEkspor();
		//loadGrafikLineEkspor();
	}
	
	function loadGrafikCPO(){
		loadGrafikBarCPO();
		//loadGrafikLineCPO();
	}
	
	function loadGrafikTBS(){
		loadGrafikBarTBS();
		//loadGrafikLineTBS();		
	}

$(function() {
	
	Highcharts.setOptions({

		lang: {
		  decimalPoint: ',',
		  thousandsSep: '.'
		}
	});
	
	if($('#container_tbs').length > 0)
	{
		loadGrafikBarTBS();	 	 
	}
	 
	 
	 if($('#container_cpodomestik').length > 0)
	{
		loadGrafikBarCPO();	 	 
	 }
	 
	 if($('#container_pasarglobal').length > 0)
		{
		 	 loadGrafikBarEkspor();
		}
		
	 $("a[href='#tab_7']").click(function(e,index) {
			 		$('#container_tbs').highcharts().reflow();
	 });
	 
	
	 	 
	 	 $("a[href='#tab_9']").click(function(e,index) {
			 		$('#container_cpodomestik').highcharts().reflow();
			 });
	 
		$("a[href='#tab_8']").click(function(e,index) {
					$('#container_pasarglobal').highcharts().reflow();
			 });
		 
		  $("a[href='#tab_4_data']").click(function(e,index) {
			 		$('#table_datagrid').dataTable();
		  });
		
		$("a[href='#tab_6_data']").click(function(e,index) {
			 		$('#table_datagrid_cpo').dataTable();
			});
		$("a[href='#tab_5_data']").click(function(e,index) {
			 		$('#table_datagrid_ekspor').dataTable();
		});
		
		
		
});



jQuery(document).ready(function() {



    var btnUploadVideo=$('#uploader_video'), interval;



	var status=$('#statusupload');



	var url_upload = $('#url-upload').val();



	var id_vid = $('#id_video').val();



	var url_load = $('#vid_url').val();



	///alert(url_upload);



	//start uploader video script 



	if(btnUploadVideo.length > 0){



		new AjaxUpload(btnUploadVideo, {



			action: url_upload,



			name: 'video_file',



			data: {id_video: id_vid},



			onSubmit: function(file, ext){



				 if (! (ext && /^(flv|FLV|MP4)$/.test(ext))){ 



                	status.text('Hanya File dengan ext FLV yang dapat diupload !');



					return false;



				}



				status.text('Uploading').addClass('notification-ok'); 



				interval = window.setInterval(function(){



					var text = status.text();



					if (text.length < 17){



						status.text(text + '.');					



					} else {



						status.text('Uploading, harap menunggu');				



					}



				}, 200);



			},



			onComplete: function(file, response){



				//alert(response);



				window.clearInterval(interval);



				status.html('');



				status.text('');



				 var arr_result = response.split("-");



				//Add uploaded file to list



				if(arr_result[0]==="success"){



					status.removeClass('notification-error');



					status.html(file  + ", success di upload !" ).addClass('upload-ok');



					loadVideo(url_load);



				} else{



					status.html(file  + ", gagal di upload ! <br />" + response ).addClass('upload-error');	



					



				}



			}



			



		});//end video upload script



		



	}



});



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



	



	



