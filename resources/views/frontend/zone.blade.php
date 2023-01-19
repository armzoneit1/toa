<!doctype html>
<html lang="en">

<head>
  @include('frontend.inc_head')
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

    background-image: linear-gradient(45deg, transparent 50%, white 50%), linear-gradient(135deg, white 54%, transparent 59%), linear-gradient(to right, #ccc, #ccc);
    background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), calc(100% - 2.5em) 0.5em;
    background-size: 5px 5px, 5px 5px, 0px 1.5em;
    background-repeat: no-repeat;
  }

  .box-zone {
    background-color: #383838;
    padding: 20px 15px;
    margin-top: 20px;
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

  .volume input[type=range] {
    display: none;
  }

  .volume .icon-size {
    font-size: 2rem;
  }

  .volume .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .volume .bar-hoverbox:hover {
    opacity: 1;
    /* cursor: pointer; */
  }

  .volume .bar {
    background: #ccc;
    height: 7px;
    /* width: 180px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .volume .bar .bar-fill {
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
    margin-left: 155px;
    margin-top: -30px;
    font-weight: 500;
  }



  .volume2 {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
  }

  .volume2 input[type=range] {
    display: none;
  }

  .volume2 .icon-size {
    font-size: 2rem;
  }

  .volume2 .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .volume2 .bar-hoverbox:hover {
    opacity: 1;
    cursor: pointer;
  }

  .volume2 .bar {
    background: #ccc;
    height: 7px;
    /* width: 180px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .volume2 .bar .bar-fill {
    background: #e91303;
    width: 0%;
    height: 100%;
    background-clip: border-box;
    pointer-events: none;
  }

  .volume3 {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
  }

  .volume3 input[type=range] {
    display: none;
  }

  .volume3 .icon-size {
    font-size: 2rem;
  }

  .volume3 .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .volume3 .bar-hoverbox:hover {
    opacity: 1;
    cursor: pointer;
  }

  .volume3 .bar {
    background: #ccc;
    height: 7px;
    /* width: 180px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .volume3 .bar .bar-fill {
    background: #ff8200;
    width: 0%;
    height: 100%;
    background-clip: border-box;
    pointer-events: none;
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
    border-bottom: 2px solid #ff8200;
    color: #fff;
  }

  .form-select:focus {
    border-color: #b8b8b8;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 0%);
  }

  :focus-visible {
    outline: -webkit-focus-ring-color auto 0px;
  }

  option {
    color: #000;
  }

  select.form-select-layout:focus {
    color: #fff;
  }

  .img-zone {
    width: 100%;
  }

  .modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 0rem;
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
    display: none;
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


  .volume4 {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
  }

  .volume4 input[type=range] {
    display: none;
  }

  .volume4 .icon-size {
    font-size: 2rem;
  }

  .volume4 .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .volume4 .bar-hoverbox:hover {
    opacity: 1;
    cursor: pointer;
  }

  .volume4 .bar {
    background: #ccc;
    height: 13px;
    /* width: 450px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .volume4 .bar .bar-fill {
    background: #ff8200;
    width: 0%;
    height: 100%;
    background-clip: border-box;
    pointer-events: none;
  }




  .volume5 {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
  }

  .volume5 input[type=range] {
    display: none;
  }

  .volume5 .icon-size {
    font-size: 2rem;
  }

  .volume5 .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .volume5 .bar-hoverbox:hover {
    opacity: 1;
    cursor: pointer;
  }

  .volume5 .bar {
    background: #ccc;
    height: 13px;
    /* width: 450px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .volume5 .bar .bar-fill {
    background: #e91303;
    width: 0%;
    height: 100%;
    background-clip: border-box;
    pointer-events: none;
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
    background-color: #ff8200;
    text-align: center;
    border-radius: 5px;
    width: fit-content;
  }

    .volume4 {
    display: flex;
    /* justify-content: center; */
    justify-content: left;
    align-items: center;
  }

  .volume4 input[type=range] {
    display: none;
  }

  .volume4 .icon-size {
    font-size: 2rem;
  }

  .volume4 .bar-hoverbox {
    padding: 10px 0px;
    opacity: 0.9;
    transition: opacity 0.2s;
    width: 100%;
  }

  .volume4 .bar-hoverbox:hover {
    opacity: 1;
    cursor: pointer;
  }

  .volume4 .bar {
    background: #ccc;
    height: 13px;
    /* width: 450px; */
    border-radius: 15px;
    overflow: hidden;
    pointer-events: none;
  }

  .volume4 .bar .bar-fill {
    background: #ff8200;
    width: 0%;
    height: 100%;
    background-clip: border-box;
    pointer-events: none;
  }
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
    border-bottom: 2px solid #424242;
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
    width: 100%;
    /* padding: 5px 5px; */
    font-size: 15px;
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
    /* margin-left: 50px; */
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
    border-bottom: 2px solid #bfbfbf;
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
.bi-mic::before {skip-dash
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
.volumelevel {
  max-height: 40px;
}
.but-apply {
  padding: 8px 20px;
  color: #fff;
  background-color: #ff8200;
  text-align: center;
  border-radius: 5px;
  width: fit-content;
  border: none;
  float:right;
}

</style>

@if(!empty(Auth::check()) && Auth::user()->theme == 'W')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/light-mode.css') }}">
@endif

<body>

  <nav class="navbar">
    <div class="container">

      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      {{-- @if(Session::get('qrcode_zone') == true)  <span class="title-over-top">{{ $zone->name }}</span> --}}
      @if(empty(Auth::check()))  <span class="title-over-top">{{ $zone->name }}</span>
      @else
      <li class="nav-item" type="button" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false" style="height: 32px;">
        <a href="{{ url()->previous() }}" class="navbar-brand mx-auto mx-lg-0">
          <!-- <i class="bi-bullseye brand-logo"></i>
                      <span class="brand-text">Leadership <br> Event</span> -->
                      <i class="bi bi-arrow-left"></i>
        </a>
        <span class="title-over-top">{{ $zone->name }}</span>
      </li>

        <div class="dropdown">
          <span class="title-project-name">{{ $project }}</span>
          <a href="javascript:void(0);" onclick="myFunction()"><i class="bi bi-three-dots-vertical" id="dropbtn" style="color: white"></i></a>
          <div class="dropdown-content" id="myLinks">
            <a class="dropdown-item">Theme   <div class="container2">
              <label class="switch2">
                <input type="checkbox" class="hidden" id="audio_setting2" checked>
                <div class="slider slider-light" style="cursor: pointer" id="slider">Light</div>
              </label>
              </div>
            </a>
            <a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a>
            </div>
          </div>
        </div>
      @endif


      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <i class="bi bi-three-dots-vertical" id="but-dots"></i>
            </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_1"><i class="bi bi-gear-fill"></i></a>
          </li>

        </ul>
        <div> -->

        </div>
  </nav>

  <main>



    <!-- ----*********************mobile version***************** -->

    <section class="section-img-over-mobile" id="section_2">
      <div class="container">

        <div class="row" id="align-over">
        <!-- <div class="col-md-5" id="col6-mb">
        <a href="overview-mb.php"><h4 class="title-over-mb">Overview</h4></a>
        </div> -->
        <div class="col-md-12" id="col12-mb">
            <!-- <p class="layout-title"><a href="#layout1" class="layout1">Layout 1</a> <a href="#layout2" class="layout2 active">Layout 2</a> <a href="#layout3" class="layout3">Layout 3</a></p> -->
        <!-- <img class="img-overview-zone-mb" src="images/img-overview.png"> -->
        <img class="img-zone" src="{{ asset($zone->image) }}">
        </div>
        </div>

        <div class="row" id="align-over2">
        <div class="col-md-12" id="col5-mb">
          <h4 class="title-zone-mb">Audio Input</h4>
        </div>

        </div>




                    <div class="container" id="con-zone1">




                          <div class="row" id="box-back-source">

                          <div class="col-lg-12 col-12" id="">
                          <h4 class="title-status" id="source-number">@if($zone->source == 0) None @else Source {{ $zone->source }} @endif</h4>
                          <p id="song-name" class="song-name song-name{{$zone->source}}">Song Name</p>
                          </div>

                            <div class="col-lg-6 col-6" id="col6-mb">
                              <p class="time-play time-play{{$zone->source}}" id="time-play">00:00 / 00:15</p>
                            </div>
                            <div class="col-lg-6 col-6" id="col6-mb">
                              <p class="icon-play">
                                  <a class="skip-left" href="javascript:void(0);" onclick="previous_song({{$zone->source}})"><i class="bi bi-skip-backward-fill"></i></a>
                                  <a class="play" href="javascript:void(0);" onclick="playorpause_song({{$zone->source}},{{$zone->id}})"><i id="play-or-pause" class="bi bi-play-circle-fill"></i></a>
                                  <a class="skip-right" href="javascript:void(0);" onclick="next_song({{$zone->source}})"><i class="bi bi-skip-forward-fill"></i></a></p>
                            </div>
                          </div>

</div>


<div class="row" id="align-over2">
        <div class="col-md-12" id="col5-mb">
          <h4 class="title-zone-mb">Audio Setting</h4>
        </div>

        </div>



        <div class="container" id="con-zone1">
                    <div class="row" id="box-back-source">
                          <div class="row volumelevel">
                            <div class="col-lg-6 col-6 pt-1" id="col6-mb">
                              <p class="text-zone-volume-pop">Volume</p>
                            </div>
                            <div class="col-lg-6 col-6" id="col6-mb">
                              <p class="text-zone-number-popup" id="text-zone-number-popup">{{ $zone->volume }}%</p>
                            </div>
                          </div>

                          <div class="volume" id="volume">
                            <input type="range" min="0" max="100" value="{{ $zone->volume }}" id="volume-val" class="volume-range">
                            <!-- <i class="bi bi-volume-off-fill" id="volume-icon"></i> -->

                            <div class="bar-hoverbox">
                              <div class="bar">
                                <div class="bar-fill"></div>
                              </div>
                            </div>
                          </div>

                          <div class="row" id="time-play-top">
                            <div class="col-lg-4 col-4">
                              <a onclick="mute()" id="volume-mute" href="javascript:;">
                                <p id="mute" class="but-mute">MUTE</p>
                              </a>
                            </div>
                            <div class="col-lg-4 col-4">
                              <p class="icon-plud-dash">
                              <a class="skip-dash" id="volume-down" onclick="turnDown()" href="javascript:;"><i
                                    class="bi bi-dash-circle-fill" style="font-size: 34px; margin-right: 5px;"></i></a>
                                <a class="skip-plus" id="volume-up" onclick="turnUp()" href="javascript:;"><i
                                    class="bi bi-plus-circle-fill" style="font-size: 34px; margin-left: 5px;"></i></a>

                                  </p>
                            </div>
                            <div class="col-lg-4 col-4" id="class-apply" class="pe-none">
                              <a onclick="applyVolume({{ $zone->id }})" id="volume-mute" href="javascript:;">
                                <p id="apply" class="but-apply">Apply</p>
                              </a>
                            </div>
                          </div>


                        {{-- </div> --}}


</div>
</div>







</div>
</section>








  </main>


  @include('frontend/script')

  <script>
    $(document).ready(function (){
      let myTimeout = setTimeout(function(){
        $('body').click();
      }, 300);
    })

    document.addEventListener("click", () => {
      const range = document.querySelector("#volume input[type=range]");
      const text = document.querySelector("#text-zone-number-popup");

      const barHoverBox = document.querySelector("#volume .bar-hoverbox");
      const fill = document.querySelector("#volume .bar .bar-fill");

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

    });
  </script>
  <script>
    var fullUrl = window.location.origin + window.location.pathname;
    var zone_id = {{ json_encode($zone->id) }};
    var zone_volume = {{ json_encode($zone->volume) }};
    var zone_source = {{ json_encode($zone->source) }};

    function turnUp(){
      const range = document.querySelector("#volume input[type=range]");
      const text = document.querySelector("#text-zone-number-popup");
      const fill = document.querySelector("#volume .bar .bar-fill");

      const nodeMap = document.querySelector("#volume input[type=range]").attributes;
      let volume = Number(nodeMap.getNamedItem("value").value);

      if(volume <= 95){
        volume += 5;
      }

      if(volume > 0){
        document.querySelector("#mute").style.backgroundColor = '#c3c3c3';
      }

      // adjustVolume(volume);
      clearMute();

      fill.style.width = volume + "%";
      range.setAttribute("value", volume)
      text.textContent = Number(volume).toFixed(0) + "%";
      range.dispatchEvent(new Event("change"))
    }

    function turnDown(){
      const range = document.querySelector("#volume input[type=range]");
      const text = document.querySelector("#text-zone-number-popup");
      const fill = document.querySelector("#volume .bar .bar-fill");

      const nodeMap = document.querySelector("#volume input[type=range]").attributes;
      let volume = Number(nodeMap.getNamedItem("value").value);

      if(volume >= 5){
        volume -= 5;
      }

      if(volume == 0){
        document.querySelector("#mute").style.backgroundColor = '#e91303';
      }

      // adjustVolume(volume);
      clearMute();

      fill.style.width = volume + "%";
      range.setAttribute("value", volume)
      text.textContent = Number(volume).toFixed(0) + "%";
      range.dispatchEvent(new Event("change"))
    }

    let old_volume;

    function clearMute(){
      old_volume = 0;
      document.querySelector("#mute").style.backgroundColor = '#c3c3c3';
    }

    function mute(){
      const range = document.querySelector("#volume input[type=range]");
      const text = document.querySelector("#text-zone-number-popup");
      const fill = document.querySelector("#volume .bar .bar-fill");

      let volume;
      if(range.value != 0){
          volume = 0;
          old_volume = range.value;
          document.querySelector("#mute").style.backgroundColor = '#e91303';
      }
      else{
          volume = old_volume;
          old_volume = 0;
          document.querySelector("#mute").style.backgroundColor = '#c3c3c3';
      }
      // adjustVolume(volume);

      fill.style.width = volume + "%";
      range.setAttribute("value", volume)
      text.textContent = Number(volume).toFixed(0) + "%";
      range.dispatchEvent(new Event("change"))
    }

    function adjustVolume(volume){
      if(volume > 30){
        new_volume = volume - 100;
        new_volume = Number(new_volume.toFixed());
      }
      else{
        new_volume = -70;
      }
      $.ajax({
            type: "POST",
            url: fullUrl + '/volume',
            data: {
              volume:volume,
              set_volume:new_volume
            },
            success: function(response){
              console.log(response);
            },
            error: function(error) {
              console.log(error.responseText);
            }
      });
    }

  $(document).ready(function (){
      $.ajax({
          type: "post",
          url: fullUrl + '/get_status_play/' + {{$zone->source}},
          data: {_token: '{{csrf_token()}}'},
          //url: 'http://127.0.0.1:83/GetReponsePlayList?PlayerID=' + res[i].source + '&controltype=get_status_music',
          // data: {source:res[i].source},
          success: function (data) {
              if(data == "Play") {
                  $("#play-or-pause").removeClass();
                  $("#play-or-pause").addClass("bi bi-pause-circle-fill");
              }
              else{
                  $("#play-or-pause").removeClass();
                  $("#play-or-pause").addClass("bi bi-play-circle-fill");
              }
          }
      });
    if(document.querySelector("#volume input[type=range]").value != 0){
      document.querySelector("#mute").style.backgroundColor = '#c3c3c3';
    }
    else{
      document.querySelector("#mute").style.backgroundColor = '#e91303';
    }

    $.ajax({
        type: "GET",
        url: fullUrl + '/current-song',
        data: {source:zone_source},
        success: function(data){
            $('#song-name').text(data);
        }
    });

    setInterval(() => {
      $.ajax({
        type: "GET",
        url: fullUrl + '/this-zone',
        success: function(e){
          if(e.volume != zone_volume){
            let i = e.id;
            const range = document.querySelector("#volume input[type=range]");
            const text = document.querySelector("#text-zone-number-popup");

            const barHoverBox = document.querySelector("#volume .bar-hoverbox");
            const fill = document.querySelector("#volume .bar .bar-fill");

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

            if(document.querySelector("#volume input[type=range]").value == 0){
              document.querySelector("#mute").style.backgroundColor = '#e91303';
            }
            else{
              document.querySelector("#mute").style.backgroundColor = '#c3c3c3';
            }

            zone_volume = $("#volume-val").val();

          }
          if(e.source != zone_source){
            if(e.source == 0){
              $('#source-number').text('None');
            }
            else{
              $('#source-number').text('Source '+ e.source);
            }
            zone_source = e.source;

            $.ajax({
                type: "GET",
                url: fullUrl + '/current-song',
                data: {source:zone_source},
                success: function(data){
                    $('#song-name').text(data);
                }
            });
          }
        }
      });

        $.ajax({
            type: "POST",
            url: fullUrl + '/musicrun/' + {{$zone->source}},
            data: {source:'{{$zone->source}}',_token:'{{csrf_token()}}'},
            success: function(response){

                response.map(function (r){

                    $(".song-name"+r.Id).html(r.Name);
                    $(".time-play"+r.Id).html(r.DurationTimePlay+"/"+r.DurationTime);
                    if(r.runmusic == 1) {
                        $("#play-or-pause").removeClass('bi-play-circle-fill');
                        $("#play-or-pause").addClass('bi-pause-circle-fill');
                    }else{
                        $("#play-or-pause").removeClass('bi-pause-circle-fill');
                        $("#play-or-pause").addClass('bi-play-circle-fill');
                    }
                });
            }
        });

    }, 1000);

    setInterval(() => {
      const nodeMap = document.querySelector("#volume input[type=range]").attributes;
      let volume = Number(nodeMap.getNamedItem("value").value);

      if(volume != zone_volume){
        document.querySelector("#apply").style.backgroundColor = '#ff8200';
        var element = document.getElementById("class-apply");
        element.classList.remove("pe-none");
      }
      else{
        document.querySelector("#apply").style.backgroundColor = '#c3c3c3';
        var element = document.getElementById("class-apply");
        element.classList.add("pe-none");
      }
    }, 300);
  })

  function applyVolume(id){
    const nodeMap = document.querySelector("#volume input[type=range]").attributes;
    let volume = Number(nodeMap.getNamedItem("value").value);

    let new_volume = volume == 0 ? -70 : (volume - 100)/5;

    $.ajax({
      type: "POST",
      url: fullUrl + '/volume',
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

    zone_volume = volume;
  }

  function selectSource(){
    var source = $('#source-zone').val();
    // console.log(source);
    $.ajax({
          type: "POST",
          url: fullUrl + '/select-source',
          data: {
                source: source
            },
          success: function(response){
            // console.log(response)
            $.ajax({
                type: "GET",
                url: fullUrl + '/current-song',
                data: {source:source},
                success: function(data){
                    $('#song-name').text(data);
                }
            });
          }
    });
  }

    function playorpause_song(source, id){
        $.ajax({
            type: "POST",
            url: fullUrl+'/song-status',
            data: {source:source,_token:'{{csrf_token()}}'},
            success: function(response){
                if(response){
                    $('#play-or-pause').toggleClass('bi-pause-circle-fill bi-play-circle-fill')
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
</body>

</html>
