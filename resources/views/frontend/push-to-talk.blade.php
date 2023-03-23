<!doctype html>
<html lang="en">

<head>
  @include('frontend.inc_head')
</head>

<style>
  .align-top {
    align-items: center;
    display: none;
}
.section-img-over {
    padding: 0;
    display: none;
}
.img-overview-zone-mb{
  width: 100%;
}
#align-over{
    align-items: center;
    background-color: #0000;
    border-bottom: 0px solid #424242;
}
.title-over-mb{
    color: #fff;
    text-align: center;
}
.section-img-over-mobile{
    display: block;
    /* padding: 30px 0px; */
    padding: 0vh 0px;
    margin-bottom: 30px;
    background-color: #262626;
  }
  #col-mb{
    border: 1px solid #ccc;
    margin-top: 30px;
    border-radius: 25px;
    padding: 20px 30px;
  }
  #col6-mb{
    flex: 0 0 auto;
    width: 50%;
    padding: 0 20px;
  }
  .form-select-source2 {
    display: block;
    width: 68%;
    padding: 5px 5px;
    font-size: 10px;
    font-weight: 400;
    line-height: 1.5;
    color: #ffffff;
    background-color: #fff0;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    margin: 0px 0 0 0;
    float: none;
    background-image: linear-gradient(45deg, transparent 50%, white 50%), linear-gradient(135deg, white 54%, transparent 59%), linear-gradient(to right, #ccc, #ccc);
    background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), calc(100% - 2.5em) 0.5em;
    background-size: 5px 5px, 5px 5px, 0px 1.5em;
    background-repeat: no-repeat;
    margin-left: 50px;
    margin-top: 20px;
    z-index: 99;
    position: relative;
}
.text-zone-number2 {
    position: relative;
    color: #fff;
    font-size: 12px;
    margin-left: 0;
    margin-top: -21px;
    font-weight: 300;
    margin-bottom: 0;
}

.volume-mobile01 {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
    margin-top: -10px;
    margin-left: -10px;
  }

  .volume-mobile01 input[type=range] {
    display: none;
  }

  .volume-mobile01 .icon-size {
    font-size: 2rem;
  }

  .volume-mobile01 .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .volume-mobile01 .bar-hoverbox:hover {
    opacity: 1;
    cursor: pointer;
  }

  .volume-mobile01 .bar {
    background: #ccc;
    height: 7px;
    /* width: 450px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .volume-mobile01 .bar .bar-fill {
    background: #ff8200;
    width: 0%;
    height: 100%;
    background-clip: border-box;
    pointer-events: none;
  }



  .text-zone-volume2 {
    position: absolute;
    color: #fff;
    font-size: 10px;
    margin-left: 30px;
    margin-top: -1px;
}
#volume-icon2 {
    font-size: 30px;
    color: #fff;
}
.text-zone-volume2 {
    position: absolute;
    color: #fff;
    font-size: 10px;
    margin-left: 30px;
    margin-top: -1px;
}
#align-over2{
    align-items: center;
    border-bottom: 2px solid #424242;
}

.title-zone-mb {
    color: #fff;
    text-align: left;
    font-weight: 300;
    font-size: 18px;
    margin: 10px 0;
}




.volume-mobile02 {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
    margin-top: -10px;
    margin-left: -10px;
  }

  .volume-mobile02 input[type=range] {
    display: none;
  }

  .volume-mobile02 .icon-size {
    font-size: 2rem;
  }

  .volume-mobile02 .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .volume-mobile02 .bar-hoverbox:hover {
    opacity: 1;
    cursor: pointer;
  }

  .volume-mobile02 .bar {
    background: #ccc;
    height: 7px;
    /* width: 450px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .volume-mobile02 .bar .bar-fill {
    background: #e91303;
    width: 0%;
    height: 100%;
    background-clip: border-box;
    pointer-events: none;
  }

  .volume-mobile03 {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
    margin-top: -10px;
    margin-left: -10px;
  }

  .volume-mobile03 input[type=range] {
    display: none;
  }

  .volume-mobile03 .icon-size {
    font-size: 2rem;
  }

  .volume-mobile03 .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .volume-mobile03 .bar-hoverbox:hover {
    opacity: 1;
    cursor: pointer;
  }

  .volume-mobile03 .bar {
    background: #ccc;
    height: 7px;
    /* width: 450px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .volume-mobile03 .bar .bar-fill {
    background: #ff8200;
    width: 0%;
    height: 100%;
    background-clip: border-box;
    pointer-events: none;
  }

  .volume-mobile04 {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
    margin-top: -10px;
    margin-left: -10px;
  }

  .volume-mobile04 input[type=range] {
    display: none;
  }

  .volume-mobile04 .icon-size {
    font-size: 2rem;
  }

  .volume-mobile04 .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .volume-mobile04 .bar-hoverbox:hover {
    opacity: 1;
    cursor: pointer;
  }

  .volume-mobile04 .bar {
    background: #ccc;
    height: 7px;
    /* width: 450px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .volume-mobile04 .bar .bar-fill {
    background: #ff8200;
    width: 0%;
    height: 100%;
    background-clip: border-box;
    pointer-events: none;
  }
  #col7-mb{
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  #col5-mb{
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  #select-mb{
    text-align: -webkit-right;
  }
  .icon-sound{
    text-align: right;
  }
  .title-push-mb{
    color: #fff;
    font-size: 18px;
    font-weight: 300;
    margin: 0;
  }
.title-emer-mb{
    color: #d31305;
    font-size: 28px;
    font-weight: 600;
}
/* .bi-mic::before {
    content: "\f490";
    background-color: #d31305;
    border-radius: 50px;
    width: 70px;
    height: 70px;
    align-items: center;
    text-align: -webkit-center;
    vertical-align: middle;
    color: #fff;
    padding: 23px 0px;
    content: "\f490";
    background-color: #d31305;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    align-items: center;
    text-align: -webkit-center;
    vertical-align: -webkit-baseline-middle;
    color: #fff;
    padding: 0;
    display: inline-grid;
} */
#push-to-talk{
    align-items: center;
}
.col5-mb, .col7-mb{
    flex: 0 0 auto;
    width: 50%;
}
.icon-setting{
    width: 40%;
    margin-left: 0px;
}
#col-mb2 {
    border: 1px solid #ccc;
    margin-top: 15px;
    border-radius: 25px;
    padding: 10px 15px;
}
#setting-mb7{
    padding-left: 0;
    padding-right: 5px;
}
#about-mb5{
    padding-right: 0;
    padding-left: 5px;
}
.title-setting-mb, .title-about-mb {
    color: #fff;
    font-size: 18px;
    font-weight: 300;
    margin: 0;
    border: 1px solid #ccc;
    margin-top: 15px;
    border-radius: 25px;
    padding: 15px 5px;
    text-align: center;
    margin-bottom: 30px;
}
.title-over-top{
    color: #fff;
    text-transform: initial;
    font-weight: 200;
    margin: 0px 0px 0px 30px;
    font-size: 20px;
    max-width: 10px;
}
.navbar-brand {
    font-size: 20px;
    color: #ff8200;
}
.layout-title{
    text-align: center;
    margin: 10px 0;
    font-size: 15px;
}
.layout1{
    color: #fff;
}
.layout2{
    color: #fff;
    margin: 0px 60px;
}
.layout3{
    color: #fff;
}
#col12-mb{
    padding-left: 0;
    padding-right: 0;
}
.active{
    border-bottom: 3px solid #ff8200;
    padding: 0px 0px 8px 0;
}
a:hover {
    color: #ccc;
}
.title-status {
    color: #fff;
    font-size: 16px;
    font-weight: 300;
    margin-top: 15px;
}
.song-name {
    color: #fff;
    background-color: #000;
    font-weight: 300;
    padding: 10px 10px 10px 25px;
    border-radius: 5px;
    margin-top: 20px;
    font-size: 16px;
    margin-bottom: 16px;
}
#col6-mb{
    flex: 0 0 auto;
    width: 50%;
}
#time-play-top{
    align-items: center;
}
.play {
    color: #ccc;
    margin: 0px 20px;
    font-size: 24px;
}
.icon-play {
    text-align: right;
    font-size: 20px;
}
.time-play {
    text-align: left;
    color: #fff;
    font-size: 16px;
}
.text-zone-volume-pop {
    color: #fff;
    margin: 0;
    font-size: 16px;
    margin-top: 10px;
}
.volume4 .bar {
    height: 10px;
}
#box-back-source{
    align-items: center;
    background-color: #302f2f;
}
.icon-plud-dash {
    text-align: end;
    font-size: 28px;
}
.but-mute {
    padding: 8px 20px;
    color: #fff;
    background-color: #d61607;
    text-align: center;
    border-radius: 5px;
    width: fit-content;
}
#volume-icon04 {
    color: #ff8200;
    /* font-size: 20px; */
}



.recorder_wrapper {
    width: 100%;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

.recorder {
    display: inline-block;
    text-align: center;
    /* width: 500px; */
    max-width: 100%;
}

.record_btn {
    width: 150px;
    height: 150px;
    /* font-family: 'Font Awesome 5 Free'; */
    /* content: '\f130'; */
    font-size: 48px;
    color: #ffffff;
    background: none;
    border: 2px solid #e91303;
    border-radius: 50%;
    transition: 0.15s linear;
    background-color: #e91303;
}

.record_btn:hover {
    transition: 0.15s linear;
    transform: scale( 1.05 );
}

.record_btn:active {
    background: #f5f5f5;
}

.record_btn:after {
    /* content: '\f130'; */
}

.record_btn[disabled] {
    border: 2px solid #ccc;
}

.record_btn[disabled]:after {
    /* content: '\f130'; */
    color: #ccc;
}

.record_btn[disabled]:hover {
    transition: 0.15s linear;
    transform: none;
}

.record_btn[disabled]:active {
    background: none;
}

.recording {
    animation: recording 2s infinite ease-in-out;
    position: relative;
    background: #fb0505;
}

.recording:before {
    content: '';
    display: inline-block;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0px;
    height: 0px;
    margin: 0px;
    border-radius: 50%;
    background: rgba( 0, 0, 0, 0.05 );
    animation: recording_before 2s infinite ease-in-out;
    background-color: #ff0d0d;
}

@keyframes recording {
    from {
        transform: scale( 1.1 );
    }

    50% {
        transform: none;
    }

    to {
        transform: scale( 1.1 );
    }
}

@keyframes recording_before {
    80% {
        width: 200px;
        height: 200px;
        margin: -100px;
        opacity: 0;
    }

    to {
        opacity: 0;
    }
}

.record_canvas {
    width: 60px;
    height: 100px;
    display: inline-block;

}

.txt_btn {
    color: #000;
    text-decoration: none;
    transition: 0.15s linear;
    animation: text_btn 0.3s ease-in-out;
}
.title-press{
    color: #898989;
    font-size: 14px;
    text-align: center;
    margin-bottom: 40px;
}
#msg_box1{
    color: #fff;
    background-color: #d67700;
    width: auto;
    text-align: -webkit-center;
    padding: 8px 10px;
    border-radius: 7px;
    margin-top: 50px;
    margin-bottom: 0px;

}
#msg_box2{
    color: #fff;
    background-color: #d67700;
    width: auto;
    text-align: -webkit-center;
    padding: 8px 10px;
    border-radius: 7px;
    margin-top: 50px;
    margin-bottom: 0px;

}
.sound-size{
  font-size: 70px;
  text-align: center;
}
.btn-check:active+.btn-primary, .btn-check:checked+.btn-primary, .btn-primary.active, .btn-primary:active, .show>.btn-primary.dropdown-toggle {
    color: #ff8200;
    background-color: #0a58ca00;
    border-color: #ff7200;
}
#timer{
  color: #ff8200;
  font-size: 24px;
}



/*  ***************sound graph******************* */
#col12-mb {
  background: #1b1c1c;
    height: auto;
    display: grid;
    place-items: center;
    width: 100%;
    padding: 50px 0;

}
 .sound-wave {
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
}
 .bar {
  /* animation-name: wave-lg;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
  animation-direction: alternate;
  background: #f32968;
  margin: 0 1.5px;
  height: 10px;
  width: 1px; */
  animation-name: wave-lg;
  animation-iteration-count: infinite;
    animation-timing-function: ease-in;
    animation-direction: alternate;
    background: #d31305;
    margin: 0px 0.1px;
    height: 10px;
    width: 1px;
    padding: 0px 1px;
    animation-delay: 0.3s;
}
 /* .bar:nth-child(-n+7),  .bar:nth-last-child(-n+7) {
  animation-name: wave-md;
} */
 /* .bar:nth-child(-n+3),  .bar:nth-last-child(-n+3) {
  animation-name: wave-sm;
} */

/* @keyframes wave-sm {
  0% {
    opacity: 0.35;
    height: 10px;
  }
  100% {
    opacity: 1;
    height: 15px;
  }
} */
/* @keyframes wave-md {
  0% {
    opacity: 0.35;
    height: 15px;
  }
  100% {
    opacity: 1;
    height: 20px;
  }
} */
@keyframes wave-lg {
  0% {
    opacity: 0.35;
    height: 5px;
  }
  100% {
    opacity: 1;
    height: 20px;
  }
}

.dropdown {
  float: right;
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 300px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
}
.title-project-name{
  color: #ff8200;
  text-transform: initial;
  font-weight: 200;
  margin: 0px 0px 0px 30px;
  font-size: 16px;
}

</style>

@if(!empty(Auth::check()) && Auth::user()->theme == 'W')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/light-mode.css') }}">
@endif

<body>

  <nav class="navbar">
    <div class="container">
      <li class="nav-item" type="button" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
        <a href="{{ url('/home') }}" class="navbar-brand mx-auto mx-lg-0"><i class="bi bi-arrow-left"></i> </a>
        <span class="title-over-top">Push to Talk</span>
      </li>
      <div class="dropdown">
        <span class="title-project-name">{{ $project }}</span>
        <a href="javascript:void(0);" onclick="myFunction()"><i class="bi bi-three-dots-vertical" id="dropbtn" style="color: white"></i></a>
        <div class="dropdown-content" id="myLinks">
          <a class="dropdown-item">Theme
            <div class="container2">
              <label class="switch2">
                <input type="checkbox" class="hidden" id="audio_setting2"  {{ ( !empty(Auth::check()) ? (Auth::user()->theme == 'B' ? 'checked' : '') : '')  }}>
                <div class="slider slider-light change_theme_push" style="cursor: pointer" id="slider">Light</div>
              </label>
            </div>
          </a>
          <a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a>
          </div>
        </div>
      </div>

        </div>
  </nav>

  <main>



    <!-- ----*********************mobile version***************** -->

<section class="section-img-over-mobile" id="section_2">
  <div class="container" id="col-mb-">
    <div class="row" id="align-over">
      <div class="col-md-12" id="col12-mb">
        <p class="title-press">Press Button</p>
        <div class="recorder_wrapper">
          <div class="recorder">
              <button class="record_btn" id="button"><i class="bi bi-mic"></i></button>
              <div class='sound-wave'>
                @for($i = 0; $i < 160; $i++)
                  <div class='bar'></div>
                @endfor
              </div>
              <span id="timer">0:00</span>
              <p id="msg_box1"></p>
              <p id="msg_box2"></p>
          </div>
        </div>
    {{-- <h4 class="icon-sound sound-size"><i class="bi bi-mic"></i></h4>  --}}

    <!-- / Change the number 160 to adjust the length -->
      </div>
    </div>
  </div>
</section>


<form action="" id="form-record" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="file" id="file-record" name="file" hidden></input>
  <input type="text" id="length-record" name="length" hidden></input>
</form>

  </main>

  <!-- <footer class="site-footer">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-12 border-bottom pb-5 mb-5">
                        <div class="d-flex">
                            <a href="index.php" class="navbar-brand">
                                <i class="bi-bullseye brand-logo"></i>
                                <span class="brand-text">Leadership <br> Event</span>
                            </a>

                            <ul class="social-icon ms-auto">
                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                                <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Code of Conduct</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy and Terms</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-5 col-12 ms-lg-auto">
                        <div class="copyright-text-wrap d-flex align-items-center">
                            <p class="copyright-text ms-lg-auto me-4 mb-0">Copyright © 2022 Leadership Event Co., Ltd.

                            <br>All Rights Reserved.

          					<br><br>Design: <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>

                            <a href="#section_1" class="bi-arrow-up arrow-icon custom-link"></a>
                        </div>
                    </div>

                </div>
            </div>
        </footer> -->

  <!-- JAVASCRIPT FILES -->
  @include('frontend/script')


  <script>

var msg_box = document.getElementById( 'msg_box1' ),
    msg_box2 = document.getElementById( 'msg_box2' ),
    button = document.getElementById( 'button' ),
    canvas = document.getElementById( 'canvas' ),
lang = {
    'mic_error': 'Error accessing the microphone', //Ошибка доступа к микрофону
    'press_to_start': 'Start Record', //Нажмите для начала записи
    'recording': 'Recording', //Запись
    'play': 'Preview', //Воспроизвести
    'stop': 'Stop', //Остановить
    'download': 'Download', //Скачать
    'use_https': 'This application in not working over insecure connection. Try to use HTTPS',
    'save' : 'Annouce',
},
time, duration, audio_end;

msg_box2.style.visibility = "hidden";

msg_box.innerHTML = lang.press_to_start;

if ( navigator.mediaDevices === undefined ) {
    navigator.mediaDevices = {};
}


if ( navigator.mediaDevices.getUserMedia === undefined ) {
    navigator.mediaDevices.getUserMedia = function ( constrains ) {
        var getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia
        if ( !getUserMedia )  {
            return Promise.reject( new Error( 'getUserMedia is not implemented in this browser' ) );
        }

        return new Promise( function( resolve, reject ) {
            getUserMedia.call( navigator, constrains, resolve, reject );
        } );
    }
}


if ( navigator.mediaDevices.getUserMedia ) {
    var btn_status = 'inactive',
        mediaRecorder,
        chunks = [],
        audio = new Audio(),
        mediaStream,
        audioSrc,
        type = {
            'type': 'audio/mpeg,codecs=opus'
        },
        ctx,
        analys,
        blob;

    button.onclick = function () {
      if ( btn_status == 'inactive' ) {
        start();
      }
      else if ( btn_status == 'recording' ){
        stop();
      }
    }

    function parseTime( sec ) {
        var h = parseInt( sec / 3600 );
        var m = parseInt( sec / 60 );
        var sec = sec - ( h * 3600 + m * 60 );

        h = h == 0 ? '' : h + ':';
        sec = sec < 10 ? '0' + sec : sec;

        return h + m + ':' + sec;
    }

    var sec = 0, timer, audioEnd;
    function pad ( val ) { return val > 9 ? val : "0" + val; }

    function setTimer(time){
      timer = setInterval( function(){
        now = Math.ceil( new Date().getTime() / 1000 );
        duration = parseTime( now - time );
        audio_end = (now - time) * 1000;
        $('#timer').html(duration);
      }, 1000);
    }

    function clearTimer(){
      clearInterval ( timer );
      $('#timer').html('0:00');
    }

    function resetTimer(){
      sec = 0;
    }

    function start() {
      msg_box.innerHTML = lang.recording;
      msg_box2.textContent = '';
      msg_box2.style.visibility = "hidden";
      duration = '0:00';
      clearTimer();
      clearTimeout(audioEnd);

      if(!audio.paused){
        audio.pause();
        audio.currentTime = 0;
      }

      navigator.mediaDevices.getUserMedia( { audio: true } ).then( function ( stream ) {
        mediaRecorder = new MediaRecorder( stream );
        mediaRecorder.start();

        button.classList.add( 'recording' );
        btn_status = 'recording';

        time = Math.ceil( new Date().getTime() / 1000 );

        if(mediaRecorder.state == 'recording'){
          setTimer(time);
          danceStart();
        }

        if ( navigator.vibrate ) navigator.vibrate( 150 );

        mediaRecorder.ondataavailable = function ( event ) {
            chunks.push( event.data );
        }

        mediaRecorder.onstop = function () {
            stream.getTracks().forEach( function( track ) { track.stop() } );

            blob = new Blob( chunks, type );
            audioSrc = window.URL.createObjectURL( blob );
            audio.src = audioSrc;

            chunks = [];
        }
      } );
      // .catch( function ( error ) {
      //     if ( location.protocol != 'https:' ) {
      //       msg_box.innerHTML = lang.mic_error + '<br>'  + lang.use_https;
      //     } else {
      //       msg_box.innerHTML = error;
      //     }
      //     button.disabled = true;
      // });
    }

    var t;
    var fullUrl = window.location.origin + window.location.pathname;

    function stop() {
        danceStop();
        clearTimer();
        mediaRecorder.stop();
        button.classList.remove( 'recording' );
        btn_status = 'inactive';

        if ( navigator.vibrate ) navigator.vibrate( [ 200, 100, 200 ] );

        var now = Math.ceil( new Date().getTime() / 1000 );

        // audio_end = (now - time) * 1000;
        // console.log(audio_end)
        // t = parseTime( now - time );

        if(duration == undefined){
          duration = '0:00';
        }

        msg_box2.style.visibility = "visible";
        msg_box.innerHTML = '<a href="#" onclick="play(); return false;" class="txt_btn">' + lang.play + ' (' + duration + ' )</a><br>';
        msg_box2.innerHTML = '<a href="#" onclick="save(); return false;" class="txt_btn">' + lang.save + '</a>';
    }

    function play() {
      clearTimer();
      audio.play();
      msg_box.innerHTML = '<a href="#" onclick="pause(); return false;" class="txt_btn">' + lang.stop + '</a><br>';
      msg_box2.innerHTML = '<a href="#" onclick="save(); return false;" class="txt_btn">' + lang.save + '</a>';

      audioEnd = setTimeout(function(){
        pause()
      }, audio_end);
    }

    function pause() {
      clearTimer();
      audio.pause();
      audio.currentTime = 0;
      msg_box.innerHTML = '<a href="#" onclick="play(); return false;" class="txt_btn">' + lang.play + ' (' + duration + ' )</a><br>';
      msg_box2.innerHTML = '<a href="#" onclick="save(); return false;" class="txt_btn">' + lang.save + '</a>';
    }

    function roundedRect(ctx, x, y, width, height, radius, fill) {
        ctx.beginPath();
        ctx.moveTo(x, y + radius);
        ctx.lineTo(x, y + height - radius);
        ctx.quadraticCurveTo(x, y + height, x + radius, y + height);
        ctx.lineTo(x + width - radius, y + height);
        ctx.quadraticCurveTo(x + width, y + height, x + width, y + height - radius);
        ctx.lineTo(x + width, y + radius);
        ctx.quadraticCurveTo(x + width, y, x + width - radius, y);
        ctx.lineTo(x + radius, y);
        ctx.quadraticCurveTo(x, y, x, y + radius);

        ctx.fillStyle = fill;
        ctx.fill();
    }

    // function save() {
    //     var a = document.createElement( 'a' );
    //     a.download = 'record.ogg';
    //     a.href = audioSrc;
    //     document.body.appendChild( a );
    //     a.click();

    //     document.body.removeChild( a );
    // }

    function save(){
      var input = document.getElementById('file-record');
      var length = document.getElementById('length-record');
      length.value = audio_end;
      var file = new File([blob], "record.ogg");
      const dataTransfer = new DataTransfer();
      dataTransfer.items.add(file);
      input.files = dataTransfer.files;
      // console.log(input.files[0].name);
      document.getElementById('form-record').submit();
    }

} else {
    if ( location.protocol != 'https:' ) {
      msg_box.innerHTML = lang.mic_error + '<br>'  + lang.use_https;
    } else {
      msg_box.innerHTML = lang.mic_error;
    }
    button.disabled = true;
}
    </script>


<script>

function danceStart(){
  const bar = document.querySelectorAll(".bar");
  for (let i = 0; i < bar.length; i++) {
    bar.forEach((item, j) => {
      item.style.animationDuration = `${Math.random() * (0.7 - 0.2) + 0.2}s`;
    });
  }
}

function danceStop(){
  const bar = document.querySelectorAll(".bar");
  for (let i = 0; i < bar.length; i++) {
    bar.forEach((item, j) => {
      item.style.animationDuration = `0s`;
    });
  }
}

</script>



</body>

</html>
