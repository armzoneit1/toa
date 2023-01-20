<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
  <!-- <script src="js/click-scroll.js"></script> -->
  <script src="{{ asset('frontend/js/custom.js') }}"></script>

  {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>
@if(!empty(Auth::check()))
<script>
var x = document.getElementById("myLinks");
function myFunction() {
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
window.onclick = function(event) {
  if (!event.target.matches('#dropbtn') && event.target.nodeName !== "A" && event.target.id !== "slider" && event.target.id !== "audio_setting2") {
    if (x.style.display === "block") {
      x.style.display = "none";
    }
  }
}
  $('.change_theme').click(function(){
    $.ajax({
      type: "GET",
      dataType: "text",
      url: '{{ url('change_theme') }}',
      success: function( data ) {
        if(data == 'Success'){
          console.log(data);
          window.location.reload();
        }
      }
    });
  });

  $(document).ready(function (){
    $.ajax({
        type: "GET",
        url: '{{url("check_recordfire")}}' ,
        success: function(response){
          console.log(response)
        }
    });
  });

</script>
@endif
