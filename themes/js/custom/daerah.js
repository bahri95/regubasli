$(document).ready( function() {
    
    $("#kabupaten").change( function() {
        
        $('#kecamatan').html('<option value="">-- PILIH KECAMATAN --</option>');
        $('#kelurahan').html('<option value="">-- PILIH KELURAHAN / DESA--</option>');
        $.ajax({
            'url' : $('#url_kecamatan').val(),
            'dataType' : 'JSON',
            'type' : 'POST',
            'data' : {
                'id' : $(this).val()
            },
            'success' : function(data) {
                $.each(data, function(index, row) {
                    $('#kecamatan').append('<option value="' + row.id + '">' + row.nama + '</option>');
                });
            }
        });
    });
    
    $("#kecamatan").change( function() {
        
        $('#kelurahan').html('<option value="">-- PILIH KELURAHAN / DESA--</option>');
        $.ajax({
            'url' : $('#url_kelurahan').val(),
            'dataType' : 'JSON',
            'type' : 'POST',
            'data' : {
                'id' : $(this).val()
            },
            'success' : function(data) {
                $.each(data, function(index, row) {
                    $('#kelurahan').append('<option value="' + row.id + '">' + row.nama + '</option>');
                });
            }
        });
    });
    
});
