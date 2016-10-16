/* Add here all your JS customizations */
$(document).ready(function() { /*$('#b_login_2').click(function (e) {
				e.preventDefault();               // document.form_login2.submit();			   document.getElementById("form_login2").submit();            });		$('#b_login_1').click(function (e) {				e.preventDefault();                //document.form_login1.submit();				//alert('login submit');				document.getElementById("form_login1").submit();            });		*/

    $("#userid_1").keyup(function(event) {
        if (event.keyCode == 13) {
            $('#password_1').focus();
        }
    });
    $("#password_1").keyup(function(event) {
        if (event.keyCode == 13) {
            $('#b_login_1').click();
        }
    });
    $('#doc_title').val("");
    $("#userid_login").keyup(function(event) {
        if (event.keyCode == 13) {
            $('#password_login').focus();
        }
    });
    $("#password_login").keyup(function(event) {
        if (event.keyCode == 13) {
            $('#b_login_2').click();
        }
    });
    $("a.modal-link").fancybox({
        'width': 600,
        'height': 390,
        'autoScale': false,
        'transitionIn': 'none',
        'overlayColor': '#000',
        'overlayOpacity': 0.9,
        'transitionOut': 'none',
        'type': 'iframe',
        'autoSize': false,
        'allowfullscreen': 'true'
    });
    $('img#refresh').click(function() {
        change_captcha();
    });

    function change_captcha() {
        var url_captcha_refresh = $('#url_captcha_refresh').val();
        document.getElementById('image_captcha').src =
            url_captcha_refresh + "?rnd=" + Math.random();
    }
});

function loadGrafikBarTBS() {
        $('#container_tbs').html('<center>Loading...</center>');
        var tahun = $('#tahun_data_tbs').val();
        $('#container_tbs_tabel').html('<center>Loading...</center>');
        $('#container_tbs_tabel').load($('#url_data_tabel_tbs').val() + '/' +
            tahun);
        var options_charts_TBS = {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Harga Tandan Buah SEGAR (TBS) Tahun ' + tahun
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'
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
        $.getJSON(url_data_grafik_TBS, function(data) {
                    options_charts_TBS.series = data.datatbs; //options_charts_TBS.title.text = options_charts_TBS.title.text + ' Tahun ' + data.tahun_data;			$('#container_tbs').highcharts(				options_charts_TBS			);		}).fail(function() {			console.log("error get data grafik TBS");	 	 });	 	 	}		function loadGrafikLineTBS(){		var tahun = $('#tahun_data_tbs').val();		var options_charts_TBS = {					chart: {					type: 'spline'				},					title: {						text:  'Grafik Harga Tandan Buah SEGAR (TBS) Tahun ' + tahun,						x: -20 //center					},					xAxis: {						categories: [					'Jan',					'Feb',					'Mar',					'Apr',					'Mei',					'Jun',					'Jul',					'Agt',					'Sep',					'Okt',					'Nov',					'Des'				]					},					yAxis: {						title: {							text: 'Harga dalam Rupiah'						},						labels: {										overflow: 'justify',										format: '{value:.,0f}'								},						plotLines: [{							value: 0,							width: 1,							color: '#808080'						}]					},					tooltip: {						valuePrefix: 'Rp '					},					legend: {						layout: 'vertical',						align: 'right',						verticalAlign: 'middle',						borderWidth: 0					}								}						var url_data_grafik_TBS = $('#url_data_grafik_tbs').val() + '/' + tahun;			$.getJSON(url_data_grafik_TBS,  function(data) {				options_charts_TBS.series = data.datatbs;				$('#container_tbs').highcharts(					options_charts_TBS				);			}).fail(function() {				console.log("error get data grafik TBS");			 });	}			function loadGrafikBarCPO(){		$('#container_cpodomestik').html('<center>Loading...</center>');		var tahun = $('#tahun_data_cpo').val();		$('#container_cpodomestik_tabel').html('<center>Loading...</center>');		$('#container_cpodomestik_tabel').load($('#url_data_tabel_cpo').val() + '/' + tahun);		var options_charts_cpo_domestik = {			chart: {				type: 'column'			},			title: {				text: 'Grafik Harga CPO Domestik (KPB dan Astra) Tahun ' + tahun			},			xAxis: {				categories: [					'Jan',					'Feb',					'Mar',					'Apr',					'Mei',					'Jun',					'Jul',					'Agt',					'Sep',					'Okt',					'Nov',					'Des'				]			},			yAxis: {				allowDecimals: false,				title: {					text: 'Harga dalam Rupiah/Kg Exclude PPN'				},				labels: {									overflow: 'justify',									format: '{value:.,0f}'							},			},			tooltip: {				headerFormat: '<span style="font-size:14px">{point.key}</span><table>',				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +					'<td style="padding:0"><b>Rp {point.y}</b></td></tr>',				footerFormat: '</table>',				shared: true,				useHTML: true			},			plotOptions: {				column: {					pointPadding: 0.2,					borderWidth: 0				}			},			credits: {							enabled: false					}			     		};				var url_data_grafik_cpo_domestik = $('#url_data_grafik_cpodomestik').val() + '/' + tahun;		$.getJSON(url_data_grafik_cpo_domestik,  function(data) {			options_charts_cpo_domestik.series = data.data_cpodomestik;			//options_charts_cpo_domestik.title.text = options_charts_cpo_domestik.title.text + ' Tahun ' + data.tahun_data;			$('#container_cpodomestik').highcharts(				options_charts_cpo_domestik			);		}).fail(function() {			console.log("error get data grafik CPO Domestik");	 	});	}		function loadGrafikLineCPO(){		var tahun = $('#tahun_data_cpo').val();		var options_charts_cpo_domestik = {					chart: {					type: 'spline'				},					title: {						text: 'Grafik Harga CPO Domestik (KPB dan Astra) Tahun ' + tahun,						x: -20 //center					},					xAxis: {						categories: [					'Jan',					'Feb',					'Mar',					'Apr',					'Mei',					'Jun',					'Jul',					'Agt',					'Sep',					'Okt',					'Nov',					'Des'				]					},					yAxis: {						title: {							text: 'Harga dalam Rupiah/Kg Exclude PPN'						},						labels: {										overflow: 'justify',										format: '{value:.,0f}'								},						plotLines: [{							value: 0,							width: 1,							color: '#808080'						}]					},					tooltip: {						valuePrefix: 'Rp '					},					legend: {						layout: 'vertical',						align: 'right',						verticalAlign: 'middle',						borderWidth: 0					}								}						var url_data_grafik_cpo_domestik = $('#url_data_grafik_cpodomestik').val() + '/' + tahun;			$.getJSON(url_data_grafik_cpo_domestik,  function(data) {				options_charts_cpo_domestik.series = data.data_cpodomestik;				$('#container_cpodomestik').highcharts(					options_charts_cpo_domestik				);			}).fail(function() {				console.log("error get data grafik CPO Domestik");			});	}		function loadGrafikBarEkspor(){		$('#container_pasarglobal').html('<center>Loading...</center>');		 var tahun = $('#tahun_data_ekspor').val();		$('#container_pasarglobal_tabel').html('<center>Loading...</center>');		$('#container_pasarglobal_tabel').load($('#url_data_tabel_ekspor').val() + '/' + tahun);		 var options_charts_pasarglobal = {				chart: {					type: 'column'				},				title: {					text: 'Grafik Harga Referensi dari Pasar Global (CIF Rotterdam atau FOB Rotterdam) Tahun ' + tahun				},				xAxis: {					categories: [						'Jan',						'Feb',						'Mar',						'Apr',						'Mei',						'Jun',						'Jul',						'Agt',						'Sep',						'Okt',						'Nov',						'Des'					]				},				yAxis: {					allowDecimals: false,					title: {						text: 'Harga dalam USD/Ton'					},					labels: {										overflow: 'justify',										format: '{value:.,0f}'								},				},				tooltip: {					headerFormat: '<span style="font-size:14px">{point.key}</span><table>',					pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +						'<td style="padding:0"><b>${point.y}</b></td></tr>',					footerFormat: '</table>',					shared: true,					useHTML: true				},				plotOptions: {					column: {						pointPadding: 0.2,						borderWidth: 0					}				},				credits: {					enabled: false				}						 			};								var url_data_grafik_pasarglobal = $('#url_data_grafik_pasarglobal').val() + '/' + tahun;			$.getJSON(url_data_grafik_pasarglobal,  function(data) {				options_charts_pasarglobal.series = data.data_pasarglobal;				//options_charts_pasarglobal.title.text = options_charts_pasarglobal.title.text + ' Tahun ' + data.tahun_data;				$('#container_pasarglobal').highcharts(					options_charts_pasarglobal				);			}).fail(function() {				console.log("error get data grafik Ekspor");			 });			 			 	}		function loadGrafikLineEkspor(){		var tahun = $('#tahun_data_ekspor').val();		var options_charts_pasarglobal = {					chart: {					type: 'spline'				},					title: {						text: 'Grafik Harga Referensi dari Pasar Global (CIF Rotterdam atau FOB Rotterdam) Tahun ' + tahun,						x: -20 //center					},					xAxis: {						categories: [					'Jan',					'Feb',					'Mar',					'Apr',					'Mei',					'Jun',					'Jul',					'Agt',					'Sep',					'Okt',					'Nov',					'Des'				]					},					yAxis: {						title: {							text: 'Harga dalam USD/Ton'						},						labels: {										overflow: 'justify',										format: '{value:.,0f}'								},						plotLines: [{							value: 0,							width: 1,							color: '#808080'						}]					},					tooltip: {						valuePreffix: '$'					},					legend: {						layout: 'vertical',						align: 'right',						verticalAlign: 'middle',						borderWidth: 0					}								}						var url_data_grafik_pasarglobal = $('#url_data_grafik_pasarglobal').val() + '/' + tahun;			$.getJSON(url_data_grafik_pasarglobal,  function(data) {				options_charts_pasarglobal.series = data.data_pasarglobal;				//options_charts_pasarglobal.title.text = options_charts_pasarglobal.title.text + ' Tahun ' + data.tahun_data;				$('#container_pasarglobal').highcharts(					options_charts_pasarglobal				);			}).fail(function() {				console.log("error get data grafik Ekspor");			 });	}		$(function () {		Highcharts.setOptions({		lang: {		  decimalPoint: ',',		  thousandsSep: '.'		}	});					if($('#container_tbs').length > 0)	{		loadGrafikBarTBS();	 	 	}	 	 	 if($('#container_cpodomestik').length > 0)	{		loadGrafikBarCPO();	 	 	 }	 	 $("a[href='#tab_9']").click(function(e,index) {		$('#container_cpodomestik').highcharts().reflow();	 });	 	 	  if($('#container_pasarglobal').length > 0)		{		 	 loadGrafikBarEkspor();		}			 $("a[href='#tab_8']").click(function(e,index) {			$('#container_pasarglobal').highcharts().reflow();		});				});$(document).ready(function(){	  $('.bxslider').bxSlider({	  	 auto: true,  		autoControls: false,  		pager: false,  		pause: 5000,  		hideControlOnEnd: true,  		 controls: false,   		 touchEnabled: true	});	});