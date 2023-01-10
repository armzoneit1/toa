@php
    $array = [];
@endphp
@foreach($ptt as $data)
  @php
    $newArray = [$data->id, $data->task_active];
    array_push($array, $newArray);
  @endphp
@endforeach
<div class="group-pre-record d-none" id="check-audio-play">
  @foreach($ptt as $data)
  <div id="div-audio{{ $data->id }}">
    <p id="rec-name_id{{ $data->id }}">{{ $data->task_name }}</p>
    <p id="rec-date_id{{ $data->id }}">@if($data->task_date == null)-@else{{ $data->task_date }} @endif</p>
    <p class="text-center" id="rec-duration_id{{ $data->id }}">@if($data->task_duration == null)-@else{{ $data->task_duration }}@endif</p>
    <p id="rec-start_id{{ $data->id }}">{{ $data->task_start }}</p>
    <p id="rec-end_id{{ $data->id }}">@if($data->task_end == null)-@else{{ $data->task_end }} @endif</p>
    <p id="rec-repeat_id{{ $data->id }}">{{ $data->task_repeat }}</p>
    <p id="rec-loop_id{{ $data->id }}">{{ $data->task_loop }}</p>
    <audio src="{{ asset($data->file) }}" class="audio-pre-record" id="rec-audio{{ $data->id }}" hidden></audio>
  </div>
  @endforeach
</div>
<div id="audio-for-emergency">
  <audio src="" id="emergency" hidden></audio>
  <audio src="" id="chime-down" hidden></audio>
  <audio src="" id="chime-up" hidden></audio>
</div>
<div id="fake_click"></div>
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
  <!-- <script src="js/click-scroll.js"></script> -->
  <script src="{{ asset('frontend/js/custom.js') }}"></script>
  <!-- Sweet Alerts js -->
  <script src="{{ asset('backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>

  <!-- Sweet alert init js-->
  <script src="{{ asset('backend/libs/sweet-alerts/sweet-alerts.init.js')}}"></script>
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
  if (!event.target.matches('#dropbtn') && $(event.target).attr('class') !== "dropdown-item" && $(event.target).attr('class') !== "slider slider-light change_theme"
  && $(event.target).attr('class') !== "hidden" && $(event.target).attr('id') !== "fake_click" ) {
    if (x.style.display === "block") {
      x.style.display = "none";
    }
  }
}

  $('.change_theme').click(function(){
    $.getJSON('change_theme', function(data) {
      console.log(data);
    });
    setTimeout(() => {
      window.location.reload();
    }, 300);
  });

  let array_all = {{ json_encode($array) }};
  let array = new Array();
  for(let idx = 0;idx < array_all.length;idx++){
    array.push(array_all[idx][0])
  }
</script>
<script>
  var fullUrl = window.location.origin + window.location.pathname;

function getNowFullDate(){
  let date = new Date();
  let day, month, year;

  date.getDate() < 10 ? day = '0' + date.getDate() : day = date.getDate();
  date.getMonth() < 10 ? month = '0' + (date.getMonth() + 1) : month = date.getMonth() + 1;
  year = date.getFullYear();

  let date_now = year + '-' + month + '-' + day;
  return date_now;
}

function getNowTime(){
  let time = new Date();
  let hour, minute, seconds;

  time.getHours() < 10 ? hour = '0' + time.getHours() : hour = time.getHours();
  time.getMinutes() < 10 ? minute = '0' + time.getMinutes() : minute = time.getMinutes();
  time.getSeconds() < 10 ? seconds = '0' + time.getSeconds() : seconds = time.getSeconds();

  let time_now = hour + ":" + minute + ":" + seconds;
  return time_now;
}

function getDayName(){
  let this_day = new Date();
  let day = this_day.getDay();
  let day_name;

  switch(day){
    case 0: day_name = "Sunday"; break;
    case 1: day_name = "Monday"; break;
    case 2: day_name = "Tuesday"; break;
    case 3: day_name = "Wednesday"; break;
    case 4: day_name = "Thursday"; break;
    case 5: day_name = "Friday"; break;
    case 6: day_name = "Saturday"; break;
  }
  return day_name;
}

function checkPlayAudio(i){
  let date = new Date();

  let name_ele = $('#rec-name_id'+i).text();
  let date_ele = $('#rec-date_id'+i).text();
  let duration_ele = Number($('#rec-duration_id'+i).text());
  let start_ele = $('#rec-start_id'+i).text();
  let end_ele = $('#rec-end_id'+i).text();
  let repeat_ele = $('#rec-repeat_id'+i).text();
  let loop_ele = $('#rec-loop_id'+i).text();
  let audio = $('#rec-audio'+i)[0];

  let check_month = /\-\d{2}-/g;
  let month = String(date_ele.match(check_month));
  month = Number(month.replaceAll("-",""));

  let check_year = /\d{4}/g;
  let year = Number(date_ele.match(check_year));

  let check_day = /\-\d{2}\s/g;
  let day = String(date_ele.match(check_day));
  day = Number(day.replaceAll("-",""));

  let check_hour = /\d{2}\:/g;
  let hour = String(start_ele.match(check_hour)[0]);
  hour = Number(hour.replaceAll(":",""));

  let minute = String(start_ele.match(check_hour)[1]);
  minute = Number(minute.replaceAll(":",""));

  let check_seconds = /\:\d{2}/g;
  let seconds = String(start_ele.match(check_seconds)[1]);
  seconds = Number(seconds.replaceAll(":",""));

  if(repeat_ele == "Weekly"){
      if(loop_ele.includes(getDayName()) || loop_ele.includes("Every Day")){
          if(Number.isInteger(duration_ele)){
            let now_time = (date.getHours()*60) + date.getMinutes()
            let record_time = (hour*60) + minute;
              if( ( ( (date.getMinutes() >= minute && date.getHours() == hour) || date.getHours() > hour ) && (now_time % duration_ele == record_time % duration_ele)
              && seconds == date.getSeconds()) && Date.parse(getNowFullDate() + ' ' + end_ele) >= Date.parse(date)){
                  console.log(name_ele);
                  audio.play();
              }
          }
          else if(start_ele.includes(getNowTime())){
              console.log(name_ele);
              audio.play();
          }
      }
  }
  else if(repeat_ele == "Specified"){
      if(loop_ele.includes("Every Month") && loop_ele.includes("Every Year")){
          if( day == date.getDate() && (date.getMonth()+1 >= month || date.getFullYear() > year)){
              if(Number.isInteger(duration_ele)){
                let now_time = (date.getHours()*60) + date.getMinutes()
                let record_time = (hour*60) + minute;
                if( ( ( (date.getMinutes() >= minute && date.getHours() == hour) || date.getHours() > hour) && (now_time % duration_ele == record_time % duration_ele)
                && seconds == date.getSeconds()) && Date.parse(getNowFullDate() + ' ' + end_ele) >= Date.parse(date)){
                    console.log(name_ele);
                    audio.play();
                }
              }
              else if(start_ele.includes(getNowTime())){
                  console.log(name_ele);
                  audio.play();
              }
          }
      }
      else if(loop_ele.includes("Every Month")){
          if( (day == date.getDate() && date.getMonth()+1 >= month && date.getFullYear() == year) || (day == date.getDate() && date.getMonth()+1 < month && date.getFullYear() - year == 1)){
              if(Number.isInteger(duration_ele)){
                let now_time = (date.getHours()*60) + date.getMinutes()
                let record_time = (hour*60) + minute;
                if( ( ( (date.getMinutes() >= minute && date.getHours() == hour) || date.getHours() > hour) && (now_time % duration_ele == record_time % duration_ele)
                && seconds == date.getSeconds()) && Date.parse(getNowFullDate() + ' ' + end_ele) >= Date.parse(date)){
                    console.log(name_ele);
                    audio.play();
                }
              }
              else if(start_ele.includes(getNowTime())){
                  console.log(name_ele);
                  audio.play();
              }
          }
      }
      else if(loop_ele.includes("Every Year")){
        if(day == date.getDate() && date.getMonth()+1 == month && date.getFullYear() >= year){
              if(Number.isInteger(duration_ele)){
                let now_time = (date.getHours()*60) + date.getMinutes()
                let record_time = (hour*60) + minute;
                if( ( ( (date.getMinutes() >= minute && date.getHours() == hour) || date.getHours() > hour) && (now_time % duration_ele == record_time % duration_ele)
                && seconds == date.getSeconds()) && Date.parse(getNowFullDate() + ' ' + end_ele) >= Date.parse(date)){
                    console.log(name_ele);
                    audio.play();
                }
              }
              else if(start_ele.includes(getNowTime())){
                  console.log(name_ele);
                  audio.play();
              }
          }
      }
      else{
        if(day == date.getDate() && date.getMonth()+1 == month && date.getFullYear() == year){
            if(Number.isInteger(duration_ele)){
              let now_time = (date.getHours()*60) + date.getMinutes()
              let record_time = (hour*60) + minute;
              if( ( ( (date.getMinutes() >= minute && date.getHours() == hour) || date.getHours() > hour) && (now_time % duration_ele == record_time % duration_ele)
              && seconds == date.getSeconds()) && Date.parse(getNowFullDate() + ' ' + end_ele) >= Date.parse(date)){
                  console.log(name_ele);
                  audio.play();
              }
            }
            else if(start_ele.includes(getNowTime())){
                console.log(name_ele);
                audio.play();
            }
        }
      }
  }
}

let queue = [], concur = [];
let status = 'ready';
let audio = $('.audio-pre-record');

$(document).ready(function (){
  setTimeout(function (){
    document.querySelector('#fake_click').click();
    // emergency();
  }, 1000);

  setInterval(function (){
      // console.log(array_all);
      array_all.forEach(i => {
          if(i[1]){
              checkPlayAudio(i[0]);
          }
      });
      // console.log(status,queue.length);
      if(status == 'ready' && queue.length > 0){
        // for(let i = 1;i <= audio.length;i++){
        array.forEach(i => {
          $('#rec-audio'+i).prop('volume', 0.0);
        });
        // }
        console.log('Muted Pre Record');
        // setTimeout(function (){
          playEmer()
        // }, 500);
      }
      else if(status == 'ready' && queue.length == 0){
        array.forEach(i => {
          $('#rec-audio'+i).prop('volume', 1.0);
        });
      }

      // array.forEach(e => {
      //   if(!$("#rec-audio"+e).paused){
      //     concur.push(e);
      //   }
      // });

  }, 1000);

})

{{--setInterval(function (){--}}
{{--  $.ajax({--}}
{{--      type: "GET",--}}
{{--      url: `{{ url("webpanel/emergency") }}`,--}}
{{--      cache: false,--}}
{{--      success: function(response){--}}
{{--        // console.log(Date.parse(new Date()) - Date.parse(response.date));--}}
{{--        if(Date.parse(new Date()) - Date.parse(response.date) == 1000){--}}
{{--          queue.push(response);--}}
{{--          console.log(queue);--}}
{{--        }--}}
{{--      },--}}
{{--      error: function(error){--}}
{{--        // alert(error);--}}
{{--      }--}}
{{--  });--}}
{{--}, 1000);--}}

function playEmer(){

  status = 'unready';
  var chime_up = document.getElementById("chime-up");
  chime_up.setAttribute("src",`{{ asset('audio/chime_up.mp3') }}`);
  chime_up.play();
  console.log('chime up');

  setTimeout(function (){
    var emer = document.getElementById("emergency");
    emer.setAttribute("src",`{{ asset('${queue[0].file}') }}`);
    emer.play();
    console.log("play emergency");
  }, 5000);

  setTimeout(function (){
    var chime_down = document.getElementById("chime-down");
    chime_down.setAttribute("src",`{{ asset('audio/chime_down.mp3') }}`);
    chime_down.play();
    console.log('chime down');
  }, queue[0].length + 6000);

  setTimeout(function (){
    $.ajax({
        type: "GET",
        url: '{("webpanel/emergency/"'+ queue[0].id +')}' ,
        success: function(response){
          if(response){
            console.log('Deleted')
          }
        },
        error: function(error){
          alert(error);
        }
    });
    queue.shift();
  }, queue[0].length + 7000);

  setTimeout(function (){
    status = 'ready';
  }, queue[0].length + 12000);

}
</script>
