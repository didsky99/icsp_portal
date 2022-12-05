<script type="text/javascript"> 
$(document).ready(function() { 
$("#provinsi").append('');
$("#kabupaten").html(''); 
$("#kecamatan").html(''); 
$("#kelurahan").html(''); 
$("#kabupaten").append('');
$("#kecamatan").append('');
$("#kelurahan").append(''); 
url = '<?php echo $base_url?>api/get_provinsi.php'; 
$.ajax({ url: url, 
type: 'GET', 
dataType: 'json', 
success: function(result) { 
for (var i = 0; i < result.length; i++) 
$("#provinsi").append('<option value="' + result[i].id_prov + '">' + result[i].nama + '</option>'); 
} 
}); 
}); 
$("#provinsi").change(function(){ 
var id_prov = $("#provinsi").val(); 
var url = '<?php echo $base_url?>api/get_kabupaten.php?id_prov=' + id_prov; 
$("#kabupaten").html(''); $("#kecamatan").html(''); 
$("#kelurahan").html(''); $("#kabupaten").append('<option value="">Pilih</option>'); 
$("#kecamatan").append('<option value="">Pilih</option>'); 
$("#kelurahan").append('<option value="">Pilih</option>'); 
$.ajax({ url : url, 
type: 'GET', 
dataType : 'json', 
success : function(result){ 
for(var i = 0; i < result.length; i++) 
$("#kabupaten").append('<option value="'+ result[i].id_kab +'">' + result[i].nama + '</option>'); 
} 
});  
}); 
$("#kabupaten").change(function(){ 
var id_kab = $("#kabupaten").val(); 
var url = '<?php echo $base_url?>api/get_kecamatan.php?id_kab=' + id_kab; 
$("#kecamatan").html(''); $("#kelurahan").html(''); 
$("#kecamatan").append('<option value="">Pilih Kecamatan</option>'); 
$("#kelurahan").append('<option value="">Pilih</option>'); 
$.ajax({ url : url, 
type: 'GET', 
dataType : 'json', 
success : function(result){ 
for(var i = 0; i < result.length; i++) 
$("#kecamatan").append('<option value="'+ result[i].id_kec +'">' + result[i].nama + '</option>'); 
} 
});  
}); 
$("#kecamatan").change(function(){ 
var id_kec = $("#kecamatan").val(); 
var url = '<?php echo $base_url?>api/get_kelurahan.php?id_kec=' + id_kec; $("#kelurahan").html(''); 
$("#kelurahan").append('<option value="">Pilih Kelurahan</option>'); 
$.ajax({ url : url, 
type: 'GET', 
dataType : 'json', 
success : function(result){ 
for(var i = 0; i < result.length; i++) 
$("#kelurahan").append('<option value="'+ result[i].id_kel +'">' + result[i].nama + '</option>'); 
} 
});  
}); 
</script>