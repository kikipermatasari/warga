<!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              Copyright &copy; <?php echo date('Y'); ?> Dinas Kominfo Kota Padang Panjang</a>
            </div>
          </div>
          
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="{{url('assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
<!--   <script src="{{url('assets/js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/chart.js/dist/Chart.extension.js')}}"></script> -->
  <!--   Argon JS   -->
  <script src="{{url('assets/js/argon-dashboard.min.js?v=1.1.2')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!--   <script src="{{url('asset')}}/jquery.js"></script> -->
  <script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    <script>
        $(document).ready(function(){
        $("#form-input").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='akseptor_kb']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>

<script>
        $(document).ready(function(){
        $("#form-input1").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='aktif_posyandu']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input1").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input1").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>

<script>
        $(document).ready(function(){
        $("#form-input2").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='aktif_posyandu']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input2").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input2").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>
<script>
        $(document).ready(function(){
        $("#form-input3").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='kelompok_belajar']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input3").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input3").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>
<script>
        $(document).ready(function(){
        $("#form-input4").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='koperasi']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input4").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input4").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>

<script>
        $(document).ready(function(){
        $("#form-input5").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='penghayatan']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input5").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input5").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>

<script>
        $(document).ready(function(){
        $("#form-input6").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='kerja_bakti']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input6").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input6").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>

<script>
        $(document).ready(function(){
        $("#form-input7").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='rukun_kematian']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input7").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input7").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>

<script>
        $(document).ready(function(){
        $("#form-input8").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='keagamaan']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input8").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input8").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>

<script>
        $(document).ready(function(){
        $("#form-input9").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='jumpitan']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input9").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input9").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>

<script>
        $(document).ready(function(){
        $("#form-input10").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='arisan']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input10").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input10").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>

<script>
        $(document).ready(function(){
        $("#form-input11").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
        $(".custom-control-input").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        if ($("input[name='dll']:checked").val() == "Ya" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
        $("#form-input11").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
        } else {
        $("#form-input11").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
        }
        });
        });
</script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  
    <script>
    function goBack() {
      window.history.back();
    }
    </script>

<script type="text/javascript">
        $(document).ready(function() {
            // show the alert
            setTimeout(function() {
                $(".alert").alert('close');
            }, 8000);
        });
    </script>
  
<script type="text/javascript">
 function yesnoCheck() {
 if (document.getElementById('yesCheck').checked) {
 document.getElementById('ifYes').style.display = 'block';
 }
 else document.getElementById('ifYes').style.display = 'none';

</script>
  
</body>

</html>