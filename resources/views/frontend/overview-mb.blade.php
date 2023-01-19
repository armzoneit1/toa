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
    border-bottom: 2px solid #bfbfbf;
}
.title-over-mb{
    color: #fff;
    text-align: center;
}
.section-img-over-mobile{
    display: block;
    padding: 0px 0px;
    margin-bottom: 30px;
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
    background-color: #000;
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
    margin-top: 7px;
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

.volume {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
    margin-top: -10px;
    margin-left: -10px;
    margin-bottom: -10px;
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
    /* cursor: pointer; */
  }

  .bar {
    background: #ccc;
    height: 7px;
    /* width: 450px; */
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
    margin-top: -7px;
}
#align-over2{
    align-items: center;
    border-bottom: 2px solid #bfbfbf;
}

.title-zone-mb {
    color: #fff;
    text-align: center;
    font-weight: 300;
    font-size: 22px;
}




.volume-mobile02 {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
    margin-top: -10px;
    margin-left: -10px;
    margin-bottom: -10px;
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
    margin-bottom: -10px;
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
    margin-bottom: -10px;
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
.bi-mic::before {
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
}
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
}
.title-project-name{
    color: #ff8200;
    text-transform: initial;
    font-weight: 200;
    margin: 0px 0px 0px 30px;
    font-size: 16px;
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

#col-over7-mb{
  flex: 0 0 auto;
    width: 58.33333333%;
    padding-left: 0;
    padding-right: 0;
}
.zone4{
  flex: 0 0 auto;
    width: 33.33333333%;
}
.zone8{
  flex: 0 0 auto;
    width: 66.66666667%;
}
.layout-img{
  position: relative;
}
.layout-img .img-overview-zone{
  width: 100%;
}
.layout-img .btn-img{
  position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
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
.navbar-brand{
  max-width: 100px;
}


@media screen and (max-width: 765px) {
  .title-setting-mb, .title-about-mb {
    margin-bottom: 0px;
}
#align-over2 {
    padding: 2px 0px 2px 0;
}

.text-zone-volume2 {
    position: relative;
    color: #fff;
    font-size: 9px;
    margin-left: 0px;
    margin-top: -3px;
}
#show-zone{
  height: 250px;
  overflow-y: auto;
    overflow-x: hidden;
}
.layout-img .btn-img {
    font-size: 10px;
    padding: 1px 5px;

    opacity: 0.8;
}

.layout-title {
    text-align: center;
    margin: 10px 0;
    font-size: 15px;
    display: flex;
    overflow-x: auto;
    overflow-y: hidden;
    padding: 0px 10px;
}
:focus-visible {
    outline: -webkit-focus-ring-color auto 0px;
}
.layout-title a{
  white-space: nowrap;
}



}


@media screen and (max-width: 376px) {
  .title-setting-mb, .title-about-mb {
    margin-bottom: 0px;
}
#show-zone {
    height: 235px;
    overflow-y: auto;
    overflow-x: hidden;
}

}


</style>

@if(!empty(Auth::check()) && Auth::user()->theme == 'W')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/light-mode.css') }}">
@endif


<body onload="showData({{ $id }})">

  <nav class="navbar">
    <div class="container">
      <li class="nav-item" type="button" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false" style="height: 32px;">
        <a href="{{ url('/home') }}" class="navbar-brand mx-auto mx-lg-0"><i class="bi bi-arrow-left"></i> </a>
        <span class="title-over-top" style="cursor: default">Overview</span>
      </li>
      <div class="dropdown">
        <span class="title-project-name">{{ $project }}</span>
        <a href="javascript:void(0);" onclick="myFunction()"><i class="bi bi-three-dots-vertical" id="dropbtn" style="color: white"></i></a>
        <div class="dropdown-content" id="myLinks">
          <a class="dropdown-item">Theme
            <div class="container2">
              <label class="switch2">
                <input type="checkbox" class="hidden" id="audio_setting2"  {{ ( !empty(Auth::check()) ? (Auth::user()->theme == 'B' ? 'checked' : '') : '')  }}>
                <div class="slider slider-light change_theme" style="cursor: pointer" id="slider">Light</div>
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
        <!-- <div class="col-md-5" id="col6-mb">
        <a href="overview-mb.php"><h4 class="title-over-mb">Overview</h4></a>
        </div> -->
        <div class="col-md-12" id="col12-mb">
            <p class="layout-title">
              @foreach($layout as $key => $row)
                <a href="#layout{{ $row->id }}" onclick="showData({{ $row->id }})" id="layout{{ $row->id }}" class="layout @if($key == 0) active @endif" style="margin-left: 20px; padding: 0px !important;">{{ $row->name }}</a>
              @endforeach
            </p>
        <div class="layout-img" id="layout-img"></div>
        {{-- <img class="img-overview-zone-mb" id="layout-img" src=""> --}}
        </div>
        </div>
        <div id="show-zone"></div>

        @include('frontend/modal-setting')
</div>
</section>

  </main>

  <!-- JAVASCRIPT FILES -->
  @include('frontend/script')
  <script>
    var fullUrl = window.location.origin + window.location.pathname;
    var count;
    var array = [];
    var layout_id;

    function showData(id){
      layout_id = id;
      $('.layout').removeClass('active');
      $('#layout'+id).addClass('active');

      $.ajax({
          type: "GET",
          url: fullUrl + '/' + id,
          success: function(response){
            // document.getElementById("layout-img").src = response;
            let div = $('#layout-img');
            let img = `<img class="img-overview-zone-mb" id="layout" src="{{ asset('${response}') }}">'`;
            $.ajax({
                type: "GET",
                url: fullUrl + '/zone/' + id,
                success: function(data){
                  let os = $('#layout-plan8').offset();
                  for(var i = 0;i < data.length;i++){
                    let top = data[i].y_value;
                    let left = data[i].x_value;
                    img += `<a href="{{ url('/zone/${data[i].id}') }}"><button class="btn-img" id="btn-img-zone${data[i].id}" style="top:${top}%;left:${left}%;background-color:${data[i].color}">${data[i].name}</button></a>`;
                  }
                  div.html(img);
                }
            });
          }
      });

      $.ajax({
          type: "GET",
          url: fullUrl + '/zone/' + id,
          success: function(response){
            let zone = $('#show-zone'); let zone_data = ``;
            count = response.length;
            for(let i = 0; i < response.length; i++){
              array.push(response[i].id);
              let random_volume = Math.floor(Math.random() * 101);
              zone_data += `<div class="row" id="align-over2">
                              <div class="col-md-4 zone4" id="">
                                  <a href="{{ url('/zone/${response[i].id}') }}"><h4 class="title-zone-mb">${response[i].name}</h4></a>
                              </div>
                              <div class="col-md-8 zone8" id="">
                                <div class="form-group" id="select-mb">
                                  <!-- <label for="exampleFormControlSelect1">Example select</label> -->
                                  <select class="form-select form-select-source2" onchange="selectSource(${response[i].id})" id="source-zone${response[i].id}" aria-label="Default select example">
                                    <option `; if(response[i].source == 1){ zone_data += `selected`; } zone_data += ` value="1">Source 1</option>
                                    <option `; if(response[i].source == 2){ zone_data += `selected`; } zone_data += ` value="2">Source 2</option>
                                    <option `; if(response[i].source == 3){ zone_data += `selected`; } zone_data += ` value="3">Source 3</option>
                                    <option `; if(response[i].source == 4){ zone_data += `selected`; } zone_data += ` value="4">Source 4</option>
                                    <option `; if(response[i].source == 5){ zone_data += `selected`; } zone_data += ` value="5">Source 5</option>
                                    <option `; if(response[i].source == 6){ zone_data += `selected`; } zone_data += ` value="6">Source 6</option>
                                    <option `; if(response[i].source == 7){ zone_data += `selected`; } zone_data += ` value="7">Source 7</option>
                                    <option `; if(response[i].source == 8){ zone_data += `selected`; } zone_data += ` value="8">Source 8</option>
                                    <option `; if(response[i].source == 9){ zone_data += `selected`; } zone_data += ` value="9">Source 9</option>
                                    <option `; if(response[i].source == 10){ zone_data += `selected`; } zone_data += ` value="10">Source 10</option>
                                    <option `; if(response[i].source == 11){ zone_data += `selected`; } zone_data += ` value="11">Source 11</option>
                                    <option `; if(response[i].source == 12){ zone_data += `selected`; } zone_data += ` value="12">Source 12</option>
                                    <option `; if(response[i].source == 13){ zone_data += `selected`; } zone_data += ` value="13">Source 13</option>
                                    <option `; if(response[i].source == 14){ zone_data += `selected`; } zone_data += ` value="14">Source 14</option>
                                    <option `; if(response[i].source == 15){ zone_data += `selected`; } zone_data += ` value="15">Source 15</option>
                                    <option `; if(response[i].source == 16){ zone_data += `selected`; } zone_data += ` value="16">Source 16</option>
                                    <option `; if(response[i].source == 0){ zone_data += `selected`; } zone_data += ` value="0">None</option>
                                  </select>
                                </div>
                                <p class="text-zone-number2" id="text-zone-number${response[i].id}">${response[i].volume}%</p>

                                <div class="volume" id="volume${response[i].id}">
                                  <input type="range" min="0" max="100" value="${response[i].volume}" id="volume-val${response[i].id}" class="volume-range">
                                  <i class="bi bi-volume-off-fill" id="volume-icon2"></i>
                                  <p class="text-zone-volume2">Vol</p>

                                  <div class="bar-hoverbox">
                                    <div class="bar">
                                      <div class="bar-fill"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>`
            }
            zone.html(zone_data);
          }
      });
      for (var i = 0; i < 15; i++) {
          setTimeout(function () {
            $('body').click();
          }, i * 1000)
      }
    }
</script>
<script>
  // let layout_br = {{ json_encode($layout) }};
  let layout = JSON.parse('{{ json_encode($layout) }}'.replace(/&quot;/g,'"').replace(/&#039;/g,'\''));
  // let zone_br = {{ json_encode($zone) }};
  let zone = JSON.parse('{{ json_encode($zone) }}'.replace(/&quot;/g,'"').replace(/&#039;/g,'\''));
  $(document).ready(() => {
    setInterval(() => {
      $.ajax({
            type: "GET",
            url: fullUrl + '/check-new',
            success: function(res){
              if(layout.length != res.layout.length || zone.length != res.zone.length){
                console.log('length');
                location.reload();
              }

              for(let i = 0;i < layout.length;i++){
                if(layout[i].name != res.layout[i].name || layout[i].image != res.layout[i].image){
                  console.log('name or image layout');
                  location.reload();
                }
              }

              for(let i = 0;i < zone.length;i++){
                // console.log(zone[i].name , res.zone[i].name , zone[i].name == res.zone[i].name);
                // console.log(zone[i].image , res.zone[i].image , zone[i].image == res.zone[i].image);
                if(zone[i].name != res.zone[i].name || zone[i].image != res.zone[i].image){
                  console.log('name or image zone');
                  location.reload();
                }
              }

            }
      });
    }, 1000);

    setInterval(() => {
      $.ajax({
        type: "GET",
        url: fullUrl + '/zone/' + layout_id,
        success: function(res){
          res.forEach(function(e){
            if(e.volume != $('#volume-val'+e.id).val()){
              let i = e.id;
              const range = document.querySelector("#volume"+i+" input[type=range]");
              const text = document.querySelector("#text-zone-number"+i);

              const barHoverBox = document.querySelector("#volume"+i+" .bar-hoverbox");
              const fill = document.querySelector("#volume"+i+" .bar .bar-fill");

              let value = e.volume;

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
            if(e.source != $('#source-zone'+e.id).val()){
              $('#source-zone'+e.id).val(e.source);
            }
          });
        }
      });
    }, 1000);
  })
</script>
<script>
  document.addEventListener("click", () => {
    array.forEach(i => {
      const range = document.querySelector("#volume"+i+" input[type=range]");
      if(range != null){
        const text = document.querySelector("#text-zone-number"+i);

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
      }
    });
  });

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
            // console.log(response)
          }
    });
  }
</script>
</body>

</html>
