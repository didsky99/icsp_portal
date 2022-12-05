<script type="text/javascript">
function loadKabupaten() {
   var id_provinsi = $('#provinsi').val();

   $.ajax({
    type: 'GET',
    url: '../../lib/LoadData.php',
    data: "id_provinsi=" + id_provinsi,
    success: function(data){
     if(data.length > 0){
      $('#kabupaten').html(data);
     } else {
      $('#kabupaten').html("<option>PILIH KABUPATEN/KOTA</option>");
      $('#kecamatan').html("<option>PILIH KECAMATAN</option>");
      $('#kelurahan').html("<option>PILIH KELURAHAN/DESA</option>");
     }
    }
   });
  }

  function loadKecamatan() {
   var id_kabupaten = $('#kabupaten').val();

   $.ajax({
    type: 'GET',
    url: '../../lib/LoadData.php',
    data: "id_kabupaten=" + id_kabupaten,
    success: function(data){
     $('#kecamatan').html(data);
    }
   });
  }

  function loadKelurahan() {
   var id_kecamatan = $('#kecamatan').val();

   $.ajax({
    type: 'GET',
    url: '../../lib/LoadData.php',
    data: "id_kecamatan=" + id_kecamatan,
    success: function(data){
     $('#kelurahan').html(data);
    }
   });
  }
  </script>