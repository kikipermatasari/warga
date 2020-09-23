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
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--   <script src="{{url('asset')}}/jquery.js"></script> -->
<script type="text/javascript">
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
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


<script type="text/javascript">
  $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});
</script>
  
</body>

</html>