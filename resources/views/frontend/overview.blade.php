<!doctype html>
<html lang="en">

<head>
  @include('frontend.inc_head')
  <script>
    Echo.channel('zoneselect')
            .listen('zoneselect', (es) => {
                // console.log(es);
                if(typeof es == 'object'){
                    es.data.map(function(e,i){
                        if(e.layout_id == layout_id){
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
                        }
                    });
                }
            })
    
    Echo.channel('checkhome')
        .listen('checkhome', (res) => {
            if(typeof res == 'object'){
                if(layout.name != res.data.layout.name || layout.image != res.data.layout.image || zone_check.length != res.data.zone.length){
                    location.reload();
                }

                for(let i = 0;i < zone_check.length;i++){
                  if(zone_check[i].name != res.data.zone[i].name || zone_check[i].image != res.data.zone[i].image){
                    location.reload();
                  }
                }
            }
        })        
  </script>
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
    background-color: #222 !important;
    border-bottom: 2px solid #222;
}
.title-over-mb{
    color: #fff;
    text-align: center;
}
.section-img-over-mobile{
  display: block;
  padding: 0px 25px;
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
  padding-right: 0;
}
.form-select-source2 {
  display: block;
  width: 68%;
  padding: 5px 5px;
  font-size: 10px;
  font-weight: 400;
  line-height: 1.5;
  color: #fff;
  background-color: #222;
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

.text-zone-volume {
  color: #fff;
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
    padding: 20px 0px;
}
#push-to-talk{
    align-items: center;
}
.col5-mb, .col7-mb{
    flex: 0 0 auto;
    width: 50%;
}
.icon-setting{
    filter: invert(1);
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
.drop-setting{
  display: block;
    width: 100%;
    padding: 20px 20px;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}
.modal-main-mb {
    /* max-width: 30%; */
    max-width: 80%;
    margin: 1.75rem auto;
}
.pop-set-mb{
  padding: 0px 0px !important;
    background-color: #ffffff !important;
    margin: 0;
    border-radius: 5px !important;
}
#seeting-col{
  padding-left: 0;
    padding-right: 0;
}
.sound-size{
  font-size: 30px;
}
.modal-body {
    padding: 20px 10px !important;
}
#col5-mb {
    padding-left: 5px;
}
.title-over-top{
    color: #fff;
    text-transform: initial;
    font-weight: 200;
    margin: 0px 0px 0px 30px;
    font-size: 20px;
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
.navbar-brand{
  max-width: 100px;
}
.logo-size{
  width: 100%;
}
.dropbtn{
  max-width: 300px;
}



@media screen and (max-width: 765px) {
  .title-setting-mb, .title-about-mb {
    margin-bottom: 0px;
}
/* #col-mb {
    height: 400px;
    overflow: auto;
} */
#align-over2 {
    padding: 2px 0px 2px 0;
}
.text-zone-volume {
    font-size: 9px;
}
.section-img-over-mobile2{
  height: 200px;
  overflow-x: hidden;
    overflow-y: auto;
}


}


@media screen and (max-width: 376px) {
  .title-setting-mb, .title-about-mb {
    margin-bottom: 0px;
  }
}



</style>

@if(!empty(Auth::check()) && Auth::user()->theme == 'W')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/light-mode.css') }}">
@endif

<body>
  <?php //echo '<pre>'; print_r(Auth::user()->theme); echo '</pre>'; ?>
  <nav class="navbar">
    <div class="container">
      <a href="{{ url('/home') }}" class="navbar-brand mx-auto mx-lg-0">
        <img class="logo-size" src="{{ asset('frontend/images/logo_toa.png') }}">
      </a>
      <div class="dropdown">
        <span class="title-project-name">{{ $project }}</span>
        <a href="javascript:void(0);" class="dropbtn" onclick="myFunction()"><i class="bi bi-three-dots-vertical" id="dropbtn" style="color: white"></i></a>
        <div class="dropdown-content" id="myLinks">
          <a class="dropdown-item">Theme   <div class="container2">
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
  <div class="container" id="col-mb">

    <div class="row" id="align-over">
    <div class="col-md-4" id="col5-mb">
    <a href="{{ url('/overview') }}"><h4 class="title-over-mb">Overview</h4></a>
    </div>
    <div class="col-md-8" id="col-over7-mb">
    <img class="img-overview-zone-mb" src="{{ asset($layout->image) }}">
    </div>
    </div>


    <section class="section-img-over-mobile2" id="">
    @php
      $zone = DB::table('tb_zone')->where('layout_id', $layout->id)->orderBy('id', 'asc')->get();
      $count = $zone->count();
      $id = [];
    @endphp
    @foreach($zone as $key => $row)
    @php
        array_push($id, $row->id);
    @endphp


      <div class="row" id="align-over2">
        <div class="col-md-4 zone4" id="">
            <a href="{{ url('/zone/'.$row->id) }}"><h4 class="title-zone-mb">{{ $row->name }}</h4></a>
        </div>
        <div class="col-md-8 zone8" id="">

        <div class="form-group" id="select-mb">
                <!-- <label for="exampleFormControlSelect1">Example select</label> -->
                <select class="form-select form-select-source2" onchange="selectSource({{ $row->id }})" id="source-zone{{ $row->id }}" aria-label="Default select example">
                  <option @if($row->source == 1) selected @endif value="1">Source 1</option>
                  <option @if($row->source == 2) selected @endif value="2">Source 2</option>
                  <option @if($row->source == 3) selected @endif value="3">Source 3</option>
                  <option @if($row->source == 4) selected @endif value="4">Source 4</option>
                  <option @if($row->source == 5) selected @endif value="5">Source 5</option>
                  <option @if($row->source == 6) selected @endif value="6">Source 6</option>
                  <option @if($row->source == 7) selected @endif value="7">Source 7</option>
                  <option @if($row->source == 8) selected @endif value="8">Source 8</option>
                  <option @if($row->source == 9) selected @endif value="9">Source 9</option>
                  <option @if($row->source == 10) selected @endif value="10">Source 10</option>
                  <option @if($row->source == 11) selected @endif value="11">Source 11</option>
                  <option @if($row->source == 12) selected @endif value="12">Source 12</option>
                  <option @if($row->source == 13) selected @endif value="13">Source 13</option>
                  <option @if($row->source == 14) selected @endif value="14">Source 14</option>
                  <option @if($row->source == 15) selected @endif value="15">Source 15</option>
                  <option @if($row->source == 16) selected @endif value="16">Source 16</option>
                  <option @if($row->source == 0) selected @endif value="0">None</option>
                </select>
              </div>
              <p class="text-zone-number2" id="text-zone-number{{ $row->id }}">{{ $row->volume }}%</p>

              <div class="volume" id="volume{{ $row->id }}">
                <input type="range" min="0" max="100" value="{{ $row->volume }}" id="volume-val{{ $row->id }}" class="volume-range">
                <i class="bi bi-volume-off-fill" id="volume-icon2"></i>
                <p class="text-zone-volume">Vol</p>

                <div class="bar-hoverbox">
                  <div class="bar">
                    <div class="bar-fill"></div>
                  </div>
                </div>
              </div>

        </div>
      </div>
    @endforeach
</div>

</div>
</section>

<section class="section-img-over-mobile" id="section_2">
  <div class="container" id="col-mb2">
    <a href="{{ url('/push-to-talk') }}">
      <div class="row" id="push-to-talk">
        <div class="col-md-7" id="col7-mb">
          <h4 class="title-push-mb">Push to Talk</h4>
          <h4 class="title-emer-mb">Emergency</h4>
        </div>
        <div class="col-md-5" id="col5-mb">
          <h4 class="icon-sound sound-size"><i class="bi bi-mic"></i></h4>
        </div>
      </div>
    </a>
  </div>
</section>


<section class="section-img-over-mobile" id="section_2">
  <div class="container" >
    <div class="row" id="push-to-talk">
      <div class="col-md-6 col7-mb" id="setting-mb7">
        <a href="#setting" data-bs-toggle="modal" data-bs-target="#setting">
          <h4 class="title-setting-mb">Setting 
            @if(!empty(Auth::check()) && Auth::user()->theme == 'W')
              <img class="icon-setting" src="{{ asset('frontend/images/icon-setting.png') }}">
            @else
              <img class="icon-setting" src="{{ asset('frontend/images/icon-setting-b.png') }}">
            @endif
          </h4>
        </a>
      </div>
      <div class="col-md-6 col5-mb" id="about-mb5">
        <a href="#about-us" data-bs-toggle="modal" data-bs-target="#exampleModalToggle3">
          <h4 class="title-about-mb">About us 
            @if(!empty(Auth::check()) && Auth::user()->theme == 'W')
              <img class="icon-setting" src="{{ asset('frontend/images/icon-about-us.png') }}">
            @else
              <img class="icon-setting" src="{{ asset('frontend/images/icon-about-us-b.png') }}">
            @endif
          </h4>
        </a>
      </div>
    </div>
  </div>
</section>

</main>

@include('frontend/modal-about-us')

@include('frontend/modal-setting')

  <!-- JAVASCRIPT FILES -->
@include('frontend/script')
<script>
  var fullUrl = window.location.origin + window.location.pathname;
  var layout_id = {{ json_encode($layout->id) }};
  var zone = {{ json_encode($id) }};

  $(document).ready(function (){
    for (var i = 0; i < 15; i++) {
        setTimeout(function () {
            $('body').click();
        }, i * 1000)
    }

    // setInterval(() => {
    //   $.ajax({
    //     type: "GET",
    //     url: fullUrl + '/zone/' + layout_id,
    //     success: function(res){
    //       res.forEach(function(e){
    //         if(e.volume != $('#volume-val'+e.id).val()){
    //           let i = e.id;
    //           const range = document.querySelector("#volume"+i+" input[type=range]");
    //           const text = document.querySelector("#text-zone-number"+i);

    //           const barHoverBox = document.querySelector("#volume"+i+" .bar-hoverbox");
    //           const fill = document.querySelector("#volume"+i+" .bar .bar-fill");

    //           let value = e.volume;

    //           if(value >= 90){
    //             fill.style.background = "#e91303";
    //           }
    //           else{
    //             fill.style.background = "#ff8200";
    //           }
    //           fill.style.width = value + "%";
    //           range.setAttribute("value", value)
    //           text.textContent = Number(value).toFixed(0) + "%";
    //           range.dispatchEvent(new Event("change"))
    //         }
    //         if(e.source != $('#source-zone'+e.id).val()){
    //           $('#source-zone'+e.id).val(e.source);
    //         }
    //       });
    //     }
    //   });
    // }, 1000);
  })

  let count = {{ json_encode($count) }};

  document.addEventListener("click", () => {
    zone.forEach(i => {
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

  let layout = JSON.parse('{{ json_encode($layout) }}'.replace(/&quot;/g,'"'));
  let zone_check = JSON.parse('{{ json_encode($zone) }}'.replace(/&quot;/g,'"'));

  //   $(document).ready(() => {
//     setInterval(() => {
//       $.ajax({
//             type: "GET",
//             url: fullUrl + '/check-new',
//             success: function(res){
//               if(layout.name != res.layout.name || layout.image != res.layout.image || zone_check.length != res.zone.length){
//                 location.reload();
//               }

//               for(let i = 0;i < zone_check.length;i++){
//                 if(zone_check[i].name != res.zone[i].name || zone_check[i].image != res.zone[i].image){
//                   location.reload();
//                 }
//               }

//             }
//       });
//     }, 1000);
//   })
</script>
</body>

</html>
