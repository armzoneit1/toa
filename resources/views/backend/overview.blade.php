<!doctype html>
<html lang="en">

<head>
  @include('backend.inc_head')
  @php $tab = "overview" @endphp
</head>

<style>
  .title-top {
    color: #fff;
    float: left;
    font-size: 20px;
    font-weight: 300;
    margin: 22px 22px 22px 0;
  }

  .section-top {
    border-bottom: 1px solid #ccc;
  }

  .form-select-layout {
    display: block;
    width: 25%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
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
    margin: 15px 0 0 0;
    cursor: pointer;

    background-image: linear-gradient(45deg, transparent 50%, white 50%), linear-gradient(135deg, white 54%, transparent 59%), linear-gradient(to right, #ccc, #ccc);
    background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), calc(100% - 2.5em) 0.5em;
    background-size: 5px 5px, 5px 5px, 0px 1.5em;
    background-repeat: no-repeat;
  }

  .align-top {
    align-items: center;
  }

  #icon-point {
    color: #fff;
    text-align: right;
    float: right;
    margin-right: 20px;
  }

  .section-img-over {
    padding: 0;
  }

  .title-status {
    color: #fff;
    font-size: 20px;
    font-weight: 300;
    margin-top: 30px;
  }

  .form-select-source {
    display: block;
    width: 40%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
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
    float: left;
    cursor: pointer;

    background-image: linear-gradient(45deg, transparent 50%, white 50%), linear-gradient(135deg, white 54%, transparent 59%), linear-gradient(to right, #ccc, #ccc);
    background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), calc(100% - 2.5em) 0.5em;
    background-size: 5px 5px, 5px 5px, 0px 1.5em;
    background-repeat: no-repeat;
  }

  .box-zone {
    background-color: #383838;
    padding: 20px 15px ;
    margin-top: 7px;
  }

  .text-zone {
    font-size: 14px;
    color: #fff;
  }

  .volume {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
  }

  input[type=range] {
    display: none;
  }

  .icon-size {
    font-size: 2rem;
  }

  .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .bar-hoverbox:hover {
    opacity: 1;
    cursor: pointer;
  }

  .bar {
    background: #ccc;
    height: 7px;
    /* width: 180px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .bar .bar-fill {
    background: #ff8200 !important;
    width: 0%;
    height: 100%;
    background-clip: border-box;
    pointer-events: none;
  }

  #volume-icon {
    font-size: 40px;
    color: #fff;
  }

  .bi-volume-off-fill::before {
    content: "\f60e";
    vertical-align: baseline;
  }

  .text-zone-volume {
    position: absolute;
    color: #fff;
    font-size: 12px;
    margin-left: 40px;
    margin-top: -10px;
  }

  .text-zone-number {
    position: absolute;
    color: #fff;
    font-size: 30px;
    margin-left: 110px;
    margin-top: -30px;
    font-weight: 500;
  }

  .box-login {
    background-color: #fff;
    padding: 20px 40px 20px 40px;
  }

  .navbar-nav .nav-link {
    /* color: var(--white-color); */
    color: #ffffff;
  }

  .navbar-nav .nav-link.active {
    border-bottom: 4px solid #ff8200;
    color: #fff;
  }

  .form-select:focus {
    border-color: #b8b8b8;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 0%);
  }

  :focus-visible {
    outline: -webkit-focus-ring-color auto 0px !important;
  }

  option {
    color: #000;
  }

  select.form-select-layout:focus {
    color: #fff;
  }

  .img-zone{
    width: 100%;
    height: 100%;
    object-fit: contain;
    vertical-align: middle;
  }

  .modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 10px 20px !important;
    background-color: #363636;
    margin: 0;
  }

  #con-zone1 {
    padding: 0;
  }

  .modal-content {
    background-color: #fff0;
    border: 0px solid rgba(0, 0, 0, .2);
  }

  .modal-header {
    border-bottom: 1px solid #dee2e600;
    background-color: #ff8200;
    width: fit-content;
    padding: 10px 20px;
  }

  .modal-header .btn-close {
    padding: 0.5rem 0.5rem;
    margin: -0.5rem -0.5rem -0.5rem auto;
    display: block;
  }

  .modal-title {
    margin-bottom: 0;
    line-height: 1.5;
    color: #fff;
    font-size: 16px;
    font-weight: 300;
  }

  .modal-backdrop.show {
    opacity: .7;
  }

  .modal-dialog {
    max-width: 68%;
    margin: 1.75rem auto;
  }

  .song-name {
    color: #fff;
    background-color: #000;
    font-weight: 300;
    padding: 10px 10px 10px 25px;
    border-radius: 5px;
    margin-top: 20px;
    font-size: 20px;
    margin-bottom: 35px;
  }

  .box-source-pop {
    padding: 0 30px 0 10px;
  }

  .time-play {
    text-align: left;
    color: #fff;
  }

  .icon-play {
    text-align: right;
    font-size: 26px;
  }

  .skip-left {
    color: #ccc;
  }

  .skip-right {
    color: #ccc;
  }

  .play {
    color: #ccc;
    margin: 0px 20px;
    font-size: 34px;
  }

  .skip-left:hover,
  .skip-right:hover,
  .play:hover {
    color: #fff;
  }

  .text-zone-volume-pop {
    color: #fff;
  }

  .text-zone-number-popup {
    color: #fff;
    font-size: 34px;
    text-align: right;
  }

  .skip-plus,
  .skip-dash {
    color: #ccc;
  }

  .skip-plus:hover,
  .skip-dash:hover {
    color: #fff;
  }

  .icon-plud-dash {
    text-align: center;
    font-size: 34px;
  }

  .but-mute {
    padding: 8px 20px;
    color: #fff;
    /* background-color: #e91303; */
    background-color: #c3c3c3;
    text-align: center;
    border-radius: 5px;
    width: fit-content;
  }

  .but-apply {
    padding: 8px 20px;
    color: #fff;
    /* background-color: #e91303; */
    background-color: #ff8200;
    text-align: center;
    border-radius: 5px;
    width: fit-content;
    border: none;
    float:right;
  }

  .section-img-over-mobile{
    display: none;
  }




  .mod_map {
    width: 740px;
    position: relative;
}
  .mod_map_car {
    /* background: url(frontend/images/img-overview02.png); */
    height: 700px;
    background-repeat: no-repeat;
    width: 100%;
}
.mod_map a {
  display: block;
    width: 110px;
    height: 50px;
    position: absolute;
    -moz-border-radius: 15px;
    -webkit-border-radius: 15px;
    border-radius: 15px;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.mod_map_car a.point1 {
  left: 118px;
    top: 315px;
}
.mod_map_car a.point2 {
  left: 175px;
    top: 125px;
}
.mod_map_car a.point3 {
  left: 557px;
    top: 253px;
}
.mod_map a span {
    padding: 0;
    display: block;
    width: 110px;
    height: 50px;
    background: #002f66;
    color: #fff;
    text-align: center;
    margin-left: -70px;
    margin-top: 18px;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    overflow: hidden;
    font-size: 10px;
}

.img-and-btn{
  max-height: 700px;
}
.img-and-btn .img-overview-zone{
  height: 100%;
  width: 100%;
}
.img-and-btn .btn{
  position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  color: white;
  /* font-size: 16px;
  padding: 12px 24px; */
  font-size: 15px;
    padding: 4px 7px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  opacity: 0.8;
}
.label-title {
    color: #fff;
}


@media (max-width: 1900px) {
  .img-and-btn .img-overview-zone {
    height: 550px;
    width: 100%;
    max-height: 100%;
}
#show-zone{
  height: 550px !important;
}

}



@media (max-width: 1119px) {
.img-and-btn .btn {
    font-size: 11px;
    padding: 3px 5px;

}

}
.volumelevel {
  max-height: 60px;
}

.volume-apply{
  float:right;
}

  /* @media screen and (max-width: 1300px) {
  .text-zone-number {
    position: absolute;
    color: #fff;
    font-size: 30px;
    margin-left: 98px;
    margin-top: -30px;
    font-weight: 500;
  }
} */

</style>

@if(!empty(Auth::check()) && Auth::user()->theme == 'W')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/light-mode.css') }}">
@endif

<body onload="retrieveData();">

  @include('backend/inc_navbar')

  <main>

<a href="" ></a>
    <section class="about section-top" id="section_2">
      <div class="container">
        <div class="row align-top">
          <div class="col-lg-8 col-8" id="col8">
            <h4 class="title-top">Overview</h4>
            <div class="form-group">
              <!-- <label for="exampleFormControlSelect1">Example select</label> -->
              <select class="form-select form-select-layout form-select-layout-light" id="select-layout" aria-label="Default select example">
                @foreach($layout as $key => $row)
                  <option @if($key == 0) selected @endif value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="about section-img-over" id="section_2">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-8" id="show-image" style="position: relative;"></div>
          <div class="col-lg-4 col-4 col4" id="show-zone" style="overflow-y: auto; overflow-x:hidden;"></div>
        </div>
      </div>
    </section>

  </main>

@include('backend/modal-about-us')

@include('backend/modal-setting-project')
  <!-- JAVASCRIPT FILES -->
@include('backend/script')

<script>
  var fullUrl = window.location.origin + window.location.pathname;
  let count;
  let zone_id = [];

  function retrieveData(){
    if($('#select-layout').val()){
      let id = $('#select-layout').val();
        $.ajax({
          type: "GET",
          url: fullUrl + '/' + id,
          success: function(response){
              let img = `<div class="img-and-btn" style="position: relative;">`;
              img += `<img class="img-overview-zone" id="img${response.id}" src="{{ asset('${response.image}') }}">`;
              let div = $('#show-image');
              $('#show-zone').css('height',response.height);
              $.ajax({
                type: "GET",
                url: fullUrl + '/zone/' + id,
                success: function(data){
                  let os = $('#show-image').offset();
                  for(var i = 0;i < data.length;i++){
                    let top = data[i].y_value;
                    let left = data[i].x_value;
                    img += `<button class="btn" onclick="volumeModal(${data[i].id});" id="btn-img-zone${data[i].id}" data-bs-toggle="modal" data-bs-target="#modal-zone${data[i].id}" onclick="volumeModal(${i+1});" style="top:${top}%;left:${left}%;background-color:${data[i].color}">${data[i].name}</button>`;
                  }
                  img += `</div>`;
                  div.html(img);
                }
            });
          }
        });

        $.ajax({
          type: "GET",
          url: fullUrl + '/zone/' + $('#select-layout').val(),
          success: function(res){
            let zone = '<h4 class="title-status">Status</h4>';
            count = res.length;
            zone_id = [];
            for(let i = 0; i < res.length; i++){
            //   let random_volume = Math.floor(Math.random() * 101);
              zone_id.push(res[i].id);
            $.ajax({
                type: "post",
                async: false,
                url: fullUrl + '/get_status_play/'+res[i].source,
                data:{_token:'{{csrf_token()}}'},
                //url: 'http://127.0.0.1:83/GetReponsePlayList?PlayerID=' + res[i].source + '&controltype=get_status_music',
                // data: {source:res[i].source},
                success: function(data){
              zone += `<div class="box-zone box-zone-light">
                            <a href="javascript:void(0);">
                              <p class="text-zone text-zone-light" onclick="volumeModal(${res[i].id});" data-bs-toggle="modal" data-bs-target="#modal-zone${res[i].id}">${res[i].name}</p>
                            </a>
                            <div class="form-group">
                              <!-- <label for="exampleFormControlSelect1">Example select</label> -->
                              <select class="form-select form-select-source form-select-source-light " onchange="selectSource(${res[i].id})" id="source-zone${res[i].id}" aria-label="Default select example">
                                <option `; if(res[i].source == 1){ zone += `selected`; } zone += ` value="1">Source 1</option>
                                <option `; if(res[i].source == 2){ zone += `selected`; } zone += ` value="2">Source 2</option>
                                <option `; if(res[i].source == 3){ zone += `selected`; } zone += ` value="3">Source 3</option>
                                <option `; if(res[i].source == 4){ zone += `selected`; } zone += ` value="4">Source 4</option>
                                <option `; if(res[i].source == 5){ zone += `selected`; } zone += ` value="5">Source 5</option>
                                <option `; if(res[i].source == 6){ zone += `selected`; } zone += ` value="6">Source 6</option>
                                <option `; if(res[i].source == 7){ zone += `selected`; } zone += ` value="7">Source 7</option>
                                <option `; if(res[i].source == 8){ zone += `selected`; } zone += ` value="8">Source 8</option>
                                <option `; if(res[i].source == 9){ zone += `selected`; } zone += ` value="9">Source 9</option>
                                <option `; if(res[i].source == 10){ zone += `selected`; } zone += ` value="10">Source 10</option>
                                <option `; if(res[i].source == 11){ zone += `selected`; } zone += ` value="11">Source 11</option>
                                <option `; if(res[i].source == 12){ zone += `selected`; } zone += ` value="12">Source 12</option>
                                <option `; if(res[i].source == 13){ zone += `selected`; } zone += ` value="13">Source 13</option>
                                <option `; if(res[i].source == 14){ zone += `selected`; } zone += ` value="14">Source 14</option>
                                <option `; if(res[i].source == 15){ zone += `selected`; } zone += ` value="15">Source 15</option>
                                <option `; if(res[i].source == 16){ zone += `selected`; } zone += ` value="16">Source 16</option>
                                <option `; if(res[i].source == 0){ zone += `selected`; } zone += ` value="0">None</option>
                              </select>
                            </div>
                            <div class="volume" id="volume${res[i].id}" style="position:relative">
                              <input type="range" min="0" max="100" id="volume-val${res[i].id}" value="${res[i].volume}" class="volume-range">
                              <i class="bi bi-volume-off-fill volume-icon-light" id="volume-icon"></i>
                              <p class="text-zone-volume text-zone-volume-light">Volume</p>
                              <p class="text-zone-number text-zone-number-light" id="show-text-volume${res[i].id}">${res[i].volume}%</p>
                              <div class="bar-hoverbox" style="cursor:default">
                                <div class="bar">
                                  <div class="bar-fill"></div>
                                </div>
                              </div>
                            </div>

                          </div>`;
                    var icon_play = "";


                        if(data == "Play")
                        {
                            icon_play = "bi-pause-circle-fill";
                        }else{
                            icon_play = "bi-play-circle-fill";
                        }
                        console.log(icon_play);

                console.log(icon_play);
              zone += `<div class="modal fade" id="modal-zone${res[i].id}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                        tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">${res[i].name}</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                              <div class="container" id="con-zone1">
                                <div class="row">
                                  <div class="col-lg-6 col-6" id="col6">
                                    <img class="img-zone" src="{{ asset('${res[i].image}') }}">
                                  </div>
                                  <div class="col-lg-6 col-6 box-source-pop" id="col6">`;
                                    if(res[i].source == 0){
                                      zone += `<h4 class="title-status" id="text-show-source${res[i].id}">None</h4>`;
                                    }
                                    else{
                                      zone += `<h4 class="title-status" id="text-show-source${res[i].id}">Source ${res[i].source}</h4>`;
                                    }
                           zone += `<p class="song-name song-name${res[i].source}" id="song-name${res[i].id}">Song Name</p>
                                    <div class="d-none" id="zone-source${res[i].id}">${res[i].source}</div>
                                    <div class="row" id="time-play-top">
                                      <div class="col-lg-6 col-6" id="col6">
                                        <p class="time-play time-play${res[i].source}" id="time-play${res[i].id}">00:00 / 00:15</p>
                                      </div>
                                      <div class="col-lg-6 col-6" id="col6">
                                        <p class="icon-play">
                                          <a class="skip-left skip-left${res[i].source}" id="skip-lefts${res[i].id}" onclick="previous_song(${res[i].source})" href="javascript:void(0);"><i class="bi bi-skip-backward-fill"></i></a>
                                          <a class="play play${res[i].source}" id="plays${res[i].id}" onclick="playorpause_song(${res[i].source},${res[i].id})" href="javascript:void(0);"><i id="play-or-pause${res[i].id}" class="bi ${icon_play} play-or-pause${res[i].source}"></i></a>
                                          <a class="skip-right skip-right${res[i].source}" id="skip-right${res[i].id}" onclick="next_song(${res[i].source})" href="javascript:void(0);"><i class="bi bi-skip-forward-fill"></i></a>
                                        </p>
                                      </div>
                                    </div>

                                    <div class="row volumelevel">
                                      <div class="col-lg-6 col-6 pb-2" id="col6" style="align-self:flex-end">
                                        <p class="text-zone-volume-pop text-zone-volume-pop-light">Volume</p>
                                      </div>
                                      <div class="col-lg-6 col-6" id="col6">
                                        <p class="text-zone-number-popup" id="text-zone-number-popup${res[i].id}">${res[i].volume}%</p>
                                      </div>
                                    </div>
                                    <div class="volume" id="volume-modal${res[i].id}">
                                      <input type="range" min="0" max="100" value="${res[i].volume}" id="vol_val" class="volume-range">
                                      <!-- <i class="bi bi-volume-off-fill" id="volume-icon"></i> -->

                                      <div class="bar-hoverbox">
                                        <div class="bar">
                                          <div class="bar-fill"></div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row flex" id="time-play-top">
                                      <div class="col-lg-4 col-4" id="col4">
                                        <a href="javascript:void(0);" class="volume-mute" onclick="mute(${res[i].id})">
                                          <p id="mute${res[i].id}" class="but-mute">MUTE</p>
                                        </a>
                                      </div>
                                      <div class="col-lg-4 col-4" id="col4">
                                        <p class="icon-plud-dash">
                                        <a class="skip-dash"  href="javascript:void(0);" class="volume-up" onclick="turnDown(${res[i].id})" onmousedown="keepVolumeDown(${res[i].id})" onmouseup="clearDown()" onmouseleave="clearDown()"><i class="bi bi-dash-circle-fill"></i></a>
                                          <a class="skip-plus" href="javascript:void(0);" class="volume-down" onclick="turnUp(${res[i].id})" onmousedown="keepVolumeUp(${res[i].id})" onmouseup="clearUp()" onmouseleave="clearUp()"><i class="bi bi-plus-circle-fill"></i></a>
                                        </p>
                                      </div>
                                      <div class="col-lg-4 col-4" id="col4">
                                        <button id="apply${res[i].id}" class="but-apply" onclick="applyVolume(${res[i].id})" disabled>Apply</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>`;
                    let div = $('#show-zone');
                    div.html(zone);
                    }

                });

            }


          }
        });
      }
      else{
        let div1 = $('#show-image');
        div1.html('');
        let div2 = $('#show-zone');
        div2.html('');
      }
  }

  function barShow(){
    for (var i = 0; i < 15; i++) {
        setTimeout(function () {
          $('#fake_click').click();
        }, i * 1000)
    }
  }

  $(document).ready(function (){

    barShow()

    $('#select-layout').on('change', function(){
      retrieveData();
      barShow()
    })

    setInterval(() => {
      $.ajax({
        type: "GET",
        url: fullUrl + '/zone/' + $('#select-layout').val(),
        success: function(res){
            if(typeof res == 'object'){
                res.forEach(function(e,i){
                    if(e.volume != $('#volume-val'+e.id).val() && $('#volume-val'+e.id).val() != undefined){
                    setVolumeOnPage(e.volume,e.id);
                    setVolumeOnModal(e.volume,e.id);
                    }
                    if(e.source != $('#source-zone'+e.id).val()){
                    $('#source-zone'+e.id).val(e.source);
                    }

                    let source_check = $('#zone-source'+e.id).text();
                    if(e.source != source_check){
                    if(e.source == 0){
                        $('#text-show-source'+e.id).text('None');
                    }
                    else{
                        $('#text-show-source'+e.id).text('Source '+ e.source);
                    }
                    $('#zone-source'+e.id).text(e.source);
                    }
                });
            }
        }
      });
    }, 1000);
  })
</script>
<script>
  document.addEventListener("click", () => {
    zone_id.forEach(i => {
      const range = document.querySelector("#volume"+i+" input[type=range]");
      if(range != null){
        const text = document.querySelector("#volume"+i+" #show-text-volume"+i);

        const barHoverBox = document.querySelector("#volume"+i+" .bar-hoverbox");
        const fill = document.querySelector("#volume"+i+" .bar .bar-fill");

        // range.addEventListener("change", (e) => {
        //   console.log("value", e.target.value);
        // });

        const setValue = (value) => {
          if(value >= 90){
            fill.style.background = "#e91303";
          }
          else{
            fill.style.background = "#ff8200";
          }

          fill.style.width = value + "%";
          range.setAttribute("value", value)
          text.textContent = Number(value).toFixed(0) + "%";
          range.dispatchEvent(new Event("change"))
        }


        setValue(range.value);

        const calculateFill = (e) => {

          let offsetX = e.offsetX

          if (e.type === "touchmove") {
            offsetX = e.touches[0].pageX - e.touches[0].target.offsetLeft
          }

          const width = e.target.offsetWidth - 30;

          setValue(
            Math.max(
              Math.min(
                // Отнимаем левый паддинг
                (offsetX - 15) / width * 100.0,
                100.0
              ),
              0
            )
          );
        }
      }
    });
  });
</script>
<script>
  function setVolumeOnPage(volume,i){
    const range = document.querySelector("#volume"+i+" input[type=range]");
    const text = document.querySelector("#volume"+i+" #show-text-volume"+i);
    const fill = document.querySelector("#volume"+i+" .bar .bar-fill");

    if(volume >= 90){
      fill.style.background = "#e91303";
    }
    else{
      fill.style.background = "#ff8200";
    }
    fill.style.width = volume + "%";
    range.setAttribute("value", volume)
    text.textContent = Number(volume).toFixed(0) + "%";
    range.dispatchEvent(new Event("change"))
  }

  function setVolumeOnModal(volume,i){
    const range = document.querySelector("#volume-modal"+i+" input[type=range]");
    const text = document.querySelector("#text-zone-number-popup"+i);
    const fill = document.querySelector("#volume-modal"+i+" .bar .bar-fill");

    if(volume >= 90){
      fill.style.background = "#e91303";
    }
    else{
      fill.style.background = "#ff8200";
    }
    fill.style.width = volume + "%";
    range.setAttribute("value", volume)
    text.textContent = Number(volume).toFixed(0) + "%";
    range.dispatchEvent(new Event("change"))
  }

  let interval_up, interval_down, timeout_up, timeout_down;

  function keepVolumeUp(i){
    timeout_up = setTimeout(function() {
        // interval_up = setInterval(function() {
        //     turnUp(i);
        // }, 200);
    }, 400);
  }

  function keepVolumeDown(i){
    timeout_down = setTimeout(function() {
        // interval_down = setInterval(function() {
        //     turnDown(i);
        // }, 200);
    }, 400);
  }

  function clearUp() {
    clearTimeout(timeout_up);
    clearTimeout(interval_up);
  }

  function clearDown(){
    clearTimeout(timeout_down);
    clearTimeout(interval_down);
  }

  function turnUp(i){
    const nodeMap = document.querySelector("#volume-modal"+i+" input[type=range]").attributes;
    let volume = Number(nodeMap.getNamedItem("value").value);

    if(volume <= 95){
      volume += 5;
    }

    // setVolumeOnPage(volume,i);
    setVolumeOnModal(volume,i);
    clearMute(i);
    // adjustVolume(i,volume);
  }

  function turnDown(i){
    const nodeMap = document.querySelector("#volume-modal"+i+" input[type=range]").attributes;
    let volume = Number(nodeMap.getNamedItem("value").value);

    if(volume >= 5){
      volume -= 5;
    }

    // setVolumeOnPage(volume,i);
    setVolumeOnModal(volume,i);
    clearMute(i);
    // adjustVolume(i,volume);
  }

  let old_volume = 0;

  function clearMute(i){
    old_volume = 0;
    document.querySelector("#mute"+i).style.backgroundColor = '#c3c3c3';
  }

  function mute(i){
    const range = document.querySelector("#volume-modal"+i+" input[type=range]");
    let volume;
    if(range.value != 0){
        volume = 0;
        old_volume = range.value;
        document.querySelector("#mute"+i).style.backgroundColor = '#e91303';
    }
    else{
        volume = old_volume;
        old_volume = 0;
        document.querySelector("#mute"+i).style.backgroundColor = '#c3c3c3';
    }

    // setVolumeOnPage(volume,i);
    setVolumeOnModal(volume,i);
    // adjustVolume(i,volume);
  }

  $(document).ready(function(){
    setInterval(() => {
      zone_id.forEach(id => {
        const nodeMap = document.querySelector("#volume"+id+" input[type=range]").attributes;
        let volume = Number(nodeMap.getNamedItem("value").value);

        const nodeMap_modal = document.querySelector("#volume-modal"+id+" input[type=range]").attributes;
        let volume_modal = Number(nodeMap_modal.getNamedItem("value").value);

        if(volume_modal > 0){
          document.querySelector("#mute"+id).style.backgroundColor = '#c3c3c3';
        }
        else{
          document.querySelector("#mute"+id).style.backgroundColor = '#e91303';
        }

        if(volume != volume_modal){
          document.querySelector("#apply"+id).style.backgroundColor = '#ff8200';
          document.querySelector("#apply"+id).disabled = false;
        }
        else{
          document.querySelector("#apply"+id).style.backgroundColor = '#c3c3c3';
          document.querySelector("#apply"+id).disabled = true;
        }

      });

    }, 500);
  })

  function applyVolume(id){
    const nodeMap = document.querySelector("#volume-modal"+id+" input[type=range]").attributes;
    let volume = Number(nodeMap.getNamedItem("value").value);

    let new_volume = volume == 0 ? -70 : (volume - 100)/5;

    $.ajax({
      type: "POST",
      url: fullUrl + '/volume/' + id,
      data: {
            volume:volume,
            new_volume:new_volume
        },
      success: function(response){
        console.log(response, new_volume);
      }
    });

    setTimeout(() => {
      $.ajax({
        type: "GET",
        url: fullUrl + '/apply-volume',
        success: function(response){
          console.log(response);
        }
      });
    }, 300);
  }

  function volumeModal(i){
    const range = document.querySelector("#volume-modal"+i+" input[type=range]");
    const text = document.querySelector("#text-zone-number-popup"+i);

    const barHoverBox = document.querySelector("#volume-modal"+i+" .bar-hoverbox");
    const fill = document.querySelector("#volume-modal"+i+" .bar .bar-fill");

    // range.addEventListener("change", (e) => {
    //   console.log("value", e.target.value);
    // });

    const setValue = (value) => {
        if(value >= 90){
            fill.style.background = "#e91303";
        }
        else{
            fill.style.background = "#ff8200";
        }
        fill.style.width = value + "%";
        range.setAttribute("value", value)
        text.textContent = Number(value).toFixed(0) + "%";
        range.dispatchEvent(new Event("change"))

        // setVolumeOnPage(value,i);
        setVolumeOnModal(value,i);

        // if(value != range.value){
        //     adjustVolume(i,value)
        // }

        if(value > 0){
          clearMute(i);
        }
    }

    // Дефолт
    setValue(range.value);

    const calculateFill = (e) => {
      // Отнимаем ширину двух 15-пиксельных паддингов из css
      let offsetX = e.offsetX

      if (e.type === "touchmove") {
        offsetX = e.touches[0].pageX - e.touches[0].target.offsetLeft
      }

      const width = e.target.offsetWidth - 30;

      setValue(
        Math.max(
          Math.min(
            // Отнимаем левый паддинг
            (offsetX - 15) / width * 100.0,
            100.0
          ),
          0
        )
      );
    }

    // let barStillDown = false;

    // barHoverBox.addEventListener("touchstart", (e) => {
    //   barStillDown = true;

    //   calculateFill(e);
    // }, true);

    // barHoverBox.addEventListener("touchmove", (e) => {
    //   if (barStillDown) {
    //     calculateFill(e);
    //   }
    // }, true);

    // barHoverBox.addEventListener("mousedown", (e) => {
    //   barStillDown = true;

    //   calculateFill(e);
    // }, true);

    // barHoverBox.addEventListener("mousemove", (e) => {
    //   if (barStillDown) {
    //     calculateFill(e);
    //   }
    // });

    // barHoverBox.addEventListener("wheel", (e) => {
    //   const newValue = +range.value + e.deltaY * 0.5;

    //   setValue(Math.max(
    //     Math.min(
    //       newValue,
    //       100.0
    //     ),
    //     0
    //   ))
    // });

    // document.addEventListener("mouseup", (e) => {
    //   barStillDown = false;
    // }, true);

    // document.addEventListener("touchend", (e) => {
    //   barStillDown = false;
    // }, true);
  }

  function selectSource(id){
    var source = $('#source-zone'+id).val();
    // console.log(source);
    $.ajax({
      type: "POST",
      url: fullUrl + '/select-source/' + id,
      data: {
            source: source
        },
      success: function(response){
      $.ajax({
          type: "Get",
          url: "http://localhost/toas/broadcast1",
          data: {
            source: source
          },
          success: function(response){

          }
        });
      }
    });
  }

  function playorpause_song(source, id){
    $.ajax({
      type: "POST",
      url: fullUrl + '/song-status/' + id,
        data: {source:source,_token:'{{csrf_token()}}'},
      success: function(response){
        if(response){
          $('#play-or-pause'+id).toggleClass('bi-pause-circle-fill bi-play-circle-fill')
        }
      }
    });
  }

  function next_song(source){
      $.ajax({
          type: "POST",
          url: fullUrl + '/forwardmusic/' + source,
          data: {source:source,_token:'{{csrf_token()}}'},
          success: function(response){

          }
      });
  }

  function previous_song(source){
      $.ajax({
          type: "POST",
          url: fullUrl + '/backwardmusic/' + source,
          data: {source:source,_token:'{{csrf_token()}}'},
          success: function(response){

          }
      });
  }

</script>
<script src="{{asset("js/app.js")}}" ></script>
  <script>
      Echo.channel('playsongs')
          .listen('playsong', (e) => {
              e.data.map(function(r){
                  $(".song-name"+r.Id).html(r.Name);
                  $(".time-play"+r.Id).html(r.DurationTimePlay+"/"+r.DurationTime);
                  console.log(r);
                  if(r.runmusic == 1) {
                    $(".play-or-pause" + r.Id).removeClass('bi-play-circle-fill');
                    $(".play-or-pause" + r.Id).addClass('bi-pause-circle-fill');
                  }else{
                    $(".play-or-pause" + r.Id).removeClass('bi-pause-circle-fill');
                    $(".play-or-pause" + r.Id).addClass('bi-play-circle-fill');
                  }
              })
          })
      Echo.channel('checkPlayMusics')
              .listen('checkPlayMusic', (e) => {
                console.log(e);
                e.data.map(function(r){
                  $("#text-show-source"+r.id).html("Source "+r.source)
                  $("#song-name"+r.id).removeClass()
                  $("#song-name"+r.id).addClass("song-name song-name"+r.source)
                  $("#time-play"+r.id).removeClass()
                  $("#time-play"+r.id).addClass("time-play time-play"+r.source)
                  $("#skip-lefts"+r.id).removeClass()
                  $("#skip-lefts"+r.id).addClass("skip-left skip-left"+r.source)
                  $("#skip-lefts"+r.id).attr("onclick","previous_song("+r.source+")");
                  $("#plays"+r.id).removeClass()
                  $("#plays"+r.id).addClass("play play"+r.source)
                  $("#plays"+r.id).attr("onclick","playorpause_song("+r.source+","+r.id+")");
                  $("#skip-right"+r.id).removeClass()
                  $("#skip-right"+r.id).addClass("skip-right skip-right"+r.source)
                  $("#skip-right"+r.id).attr("onclick","next_song("+r.source+")");
                })
            })
      // Echo.channel("playsongs").bind("sss");
  </script>
</body>
</html>
