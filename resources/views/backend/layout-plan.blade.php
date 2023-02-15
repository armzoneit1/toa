<!doctype html>
<html lang="en">

<head>
  @include('backend.inc_head')
  @php
      $tab = 'layout-plan';
  @endphp
</head>

<style>
  section{
    position:relative;
    z-index: 1;
  }

  nav{
    position: absolute;;
    z-index: 1000;
  }

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
    cursor: pointer;
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
    background: #ff8200;
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
    /* width: 406px;
    height: 414.4px; */
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
    /* display: none; */
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
    max-width: 60%;
    margin: 1.75rem auto;
  }

  .modal-qrcode {
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
    background-color: #c3c3c3;
    text-align: center;
    border-radius: 5px;
    width: fit-content;
  }
  .but-add {
    text-align: right;
    margin-right: 22px;
    color: #fff;
    background-color: #383838;
    width: fit-content;
    padding: 10px 20px;
    border-radius: 5px;
    float: right;
    margin-top: 15px;
  }

  #icon-plus-add {
    color: #fff;
    margin: 0 10px 0 0;
  }

  th {
    background-color: #fcb42400 !important;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    margin: 15px 0 0 0;
    background-image: linear-gradient(45deg, transparent 50%, white 50%), linear-gradient(135deg, white 54%, transparent 59%), linear-gradient(to right, #ccc, #ccc);
    /* background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), calc(100% - 2.5em) 0.5em; */
    background-position: calc(100% - 20px) calc(1em + 17px), calc(100% - 16px) calc(1em + 17px), calc(100% - 2.5em) 0.5em;
    background-size: 5px 5px, 5px 5px, 0px 1.5em;
    background-repeat: no-repeat;
  }

  .pagination .page-item.active .page-link {
    background-color: #fcb424 !important;
    border-color: #fcb424 !important;
  }

  div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
    background-color: #fcb424 !important;

  }

  .pagination .page-item.active .page-link:hover {
    background-color: #fcb424 !important;

  }

  .fa {
    font-size: 25px;
    color: #fcb424 !important;
  }

  .table-striped>tbody>tr:nth-of-type(odd)>* {
    color: #fff;
  }

  .table>:not(caption)>*>* {
    color: #fff;
  }

  .table>:not(caption)>*>* {
    padding: 1.5rem 0.5rem;
    border-top: 2px solid #959595;
  }

  .dataTables_length,
  .dataTables_filter,
  .dataTables_info,
  .pagination {
    display: none;
  }

  #volume-icon01 {
    color: #ccc;
    font-size: 20px;
  }

  #volume-icon02 {
    color: #ccc;
    font-size: 30px;
  }

  #volume-icon03 {
    color: #ccc;
    font-size: 20px;
  }

  #volume-icon04 {
    color: #ff8200;
    font-size: 20px;
  }

  .bi-volume-off-fill::before {
    content: "\f60e";
    vertical-align: middle;
  }

  td p {
    margin: 0;
    text-align: center;
  }

  tr {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    align-items: center;
    vertical-align: middle;
  }

  .form-check .form-check-input {
    float: none;
    margin-left: -1.5em;
  }

  .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0.25em;
    vertical-align: top;
    background-color: #fff0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    border: 1pxsolidrgba(0, 0, 0, .25);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-print-color-adjust: exact;
    color-adjust: exact;
    border: 1px solid #ff8200;
    border-radius: 0 !important;
  }

  .form-check-input:focus {
    border-color: #ff8200;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 0%);
  }

  .form-check-input:checked {
    background-color: #0d6efd00;
    border-color: #ff8200;
  }

  .form-check {
    text-align: center;
  }
  .modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 40px 80px;
    background-color: #585858;
    margin: 0;
}
.label-title{
  color: #fff;
}
.but-form{
  margin-bottom: 20px;
}
.but-sub {
    color: #fff;
    background-color: #ff8200;
    border-color: #ff8200;
    padding: 5px 25px;
}
.but-sub:hover {
    color: #ff8200;
    background-color: #ff820000;
    border-color: #ff8200;
    padding: 5px 25px;
}

.but-add {
    text-align: center;
    margin-right: 22px;
    color: #fff;
    background-color: #38383800;
    width: 30%;
    padding: 7px 20px;
    border-radius: 5px;
    float: right;
    margin-top: 0px;
    border: 1px solid #ccc;
    font-size: 16px;
}
.but-add:hover {
    color: #ff8200;
}
.but-add-save {
    text-align: center;
    margin-right: 22px;
    color: #fff;
    background-color: #ff8200;
    width: 30%;
    padding: 7px 20px;
    border-radius: 5px;
    float: right;
    margin-top: 0px;
    border: 1px solid #ff8200;
    font-size: 16px;
}
.but-add-save:hover {
    color: #fff;
    background-color: #c36c11;
    border: 1px solid #c36c11;
}
/* .img-overview-zone {
    width: 100%;
} */
.cell{
  cursor: cell;
}
.menu-layout{
    color: #fff;
    background-color: #2e2e2e;
    font-size: 16px;
    font-weight: 300;
    margin: 0 0;
    padding: 20px 10px 20px 20px;
    border: 1px solid #3c3c3c;
    cursor: pointer;
}
.menu-add-layout{
    color: #fff;
    background-color: #2e2e2e;
    font-size: 16px;
    font-weight: 300;
    margin: 0 0;
    padding: 20px 10px 20px 20px;
    border: 1px solid #3c3c3c;
}
.menu-zone{
    color: #fff;
    background-color: #2e2e2e;
    font-size: 16px;
    font-weight: 300;
    margin: 0 0;
    padding: 20px 10px 20px 20px;
    border: 1px solid #3c3c3c;
    cursor: pointer;
}
.menu-add-zone{
    color: #fff;
    background-color: #2e2e2e;
    font-size: 16px;
    font-weight: 300;
    margin: 0 0;
    padding: 20px 10px 20px 20px;
    border: 1px solid #3c3c3c;
}
.layout-plan2{
    padding-right: 0;
}
.but-dots-plan{
    float: right;
}
.dropright{
    display: block;
}
.dropleft{
    display: block;
}
.active{
    background-color: #ff8200;
}
.zone-area{
    color: #fff;
    font-size: 24px;
    padding: 20px 7px 15px 20px;
}

.mod_map {
    width: 740px;
    position: relative;
}
  .mod_map_car {
    /* background: url(frontend/images/img-overview02.png); */
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
.img-and-btn{
  max-height: 700px;
}
.img-and-btn .img-overview-zone{
  width: 100%;
}
.img-and-btn .btn-img{
  position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  /* opacity: 0.8; */
}

.img-and-btn .btn-img .btn{
  /* padding: 12px 24px; */
  font-size: 15px;
    padding: 4px 7px;
    opacity: 0.8;
}

.img-and-btn .btn-img #div-zone-btn1{
  position: absolute;
  z-index: 999;
}

.img-and-btn .btn-img #div-zone-btn6{
  position: relative;
  z-index: 10;
}

.error {
    color: red;
}

.menu-zone:hover{
    background-color: #ff8200 !important;
}
.menu-layout-light:hover {
    background-color: #ff8200 !important;
}
.menu-add-layout-light:hover{
  background-color: #ff8200 !important;
}

.dropleft.show, .dropright.show {
    display: block;
    z-index: 99999999999999999 !important;
}




@media (max-width: 1900px) {
  .img-and-btn .img-overview-zone {
    height: 550px;
    width: 100%;
    max-height: 100%;
}
#layout-plan2, #zone-plan{
  height: 550px !important;
    overflow: hidden auto;
}

}



@media (max-width: 1119px){
.img-and-btn .btn {
    font-size: 11px !important;
    padding: 3px 5px !important;
}

}


</style>

@if(!empty(Auth::check()) && Auth::user()->theme == 'W')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/light-mode.css') }}">
<style type="text/css">
	.TitleZone{
	    font-size: 30px;
	    font-weight: bolder;
	    padding-top: 80px;
	    color: black;
	}

	.TitleDetail{
	    font-size: 26px;
	    font-weight: bolder;
	    margin-bottom: 30px;
	    background-color: #F7F7F7;
	    width: 100%;
	    border-radius: 7px;
	}

  .active {
      background-color: #ff8200 !important;
  }

</style>
@else
<style type="text/css">
	.TitleZone{
		font-size: 30px;
		font-weight: bolder;
		padding-top: 80px;
		color: white;
	}

	.TitleDetail{
		font-size: 26px;
		font-weight: bolder;
		margin-bottom: 30px;
		background-color: white;
		width: 100%;
		border-radius: 7px;
	}
</style>
@endif

<body onload="showData({{ $id }});">

  @include('backend/inc_navbar')

  <main>


    <section class="about section-top" id="section_2">
      <div class="container">
        <div class="row align-top">
          <div class="col-lg-8 col-8" id="col8">
            <h4 class="title-top">Layout Plan</h4>
            <!-- <div class="form-group">
                                <select class="form-select form-select-layout" aria-label="Default select example">
                                  <option selected>Layout 1</option>
                                  <option value="2">Layout 2</option>
                                  <option value="3">Layout 3</option>
                                </select>
                              </div> -->
          </div>
          {{-- <div class="col-lg-4 col-4" id="col4">
            <p><a href="overview.php" class="but-add-save">SAVE</a> <a href="#" class="but-add">CLEAR</a></p>
          </div> --}}

        </div>
      </div>
    </section>

    <section class="about section-img-over" id="section_2">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-2" id="layout-plan2">
            @foreach($layout as $key => $row)
            <div class="btn-group dropright" style="margin-bottom: -16px;">
              <p data-toggle="dropdown" style="cursor: pointer" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-three-dots-vertical but-dots-plan" id="dropdown-toggle" style="margin-top: 20px;margin-right: 10px;"></i>
              </p>
              <p class="menu-layout menu-layout-light" id="layout-drop{{ $row->id }}" onclick="showData({{ $row->id }})">{{ $row->name }}</p>
              <div class="dropdown-menu" id="dropdown-layout">
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-layout{{ $row->id }}" href="#">Edit</a>
                {{-- <a class="dropdown-item" href="#">Duplicate</a> --}}
                <a class="dropdown-item" onclick="deleteLayout({{ $row->id }})" href="javascript:;">Delete</a>
              </div>
            </div>
            @endforeach
          <p class="menu-add-layout menu-add-layout-light" data-bs-toggle="modal" data-bs-target="#insert-layout"><i class="bi bi-plus-square-fill"></i></p>
        </div>
        <div class="col-lg-8 col-8" id="layout-plan8">
            <div class="img-and-btn" id="img-and-btn" style="position: relative;"></div>
        </div>
        <div class="col-lg-2 col-2" id="zone-plan"></div>
      </div>
    </div>
    </section>

  </main>

  <div class="modal fade" id="insert-layout" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Layout Plan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ url("webpanel/layout-plan/") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group but-form">
              <label for="exampleInputEmail1" class="label-title">Layout Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Layout Name" required>
            </div>
            <div class="form-group but-form">
            <label for="formFile" class="form-label label-title">Upload Image</label>
            <input class="form-control" type="file" accept="image/*" id="formFile" name="image" required>
            </div>
            <center><button type="submit" class="btn btn-primary but-sub">Submit</button></center>
          </form>

        </div>
      </div>
    </div>
  </div>
  @foreach($layout as $row)
    <div class="modal fade" id="edit-layout{{ $row->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Layout Plan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ url("webpanel/layout-plan/$row->id") }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group but-form">
                <label for="exampleInputEmail1" class="label-title">Layout Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{ $row->name }}" placeholder="Enter Layout Name">
              </div>
              <div class="form-group but-form">
              <label for="formFile" class="form-label label-title">Upload Image</label>
              <input class="form-control" type="file" accept="image/*" id="formFile" name="image">
              </div>
              <center><button type="submit" class="btn btn-primary but-sub">Submit</button></center>
            </form>

          </div>
        </div>
      </div>
    </div>
  @endforeach

  <div class="modal fade" id="insert-zone-modal" data-keyboard="false" data-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Add Zone Area</h5>
        <button type="button" onclick="closeInsertModal()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="insert-zone">
        <form action="" id="form-insert-zone" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="x_value" id="x_value" hidden>
            <input type="text" name="y_value" id="y_value" hidden>
            <input type="text" name="layout_id" id="layout_id" hidden>
            <div class="form-group but-form">
            <label for="exampleInputEmail1" class="label-title">Zone Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Zone Name" required>
            </div>
            <div class="form-group but-form">
            <label for="exampleInputEmail1" class="label-title">Zone Color</label>
            <input type="color" name="color" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group but-form">
            <div class="row">
                <div class="col-6 col-lg-6">
                    <label for="exampleInputEmail1" class="label-title">Frame ID</label>
                    <select class="form-select" name="frame_id" id="frame_id" required>
                        <option value="">Select 0 - 39</option>
                        @for($i = 0;$i <= 39;$i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="col-6 col-lg-6">
                    <label for="exampleInputEmail1" class="label-title">Output ID</label>
                    <select class="form-select" name="output_id" id="output_id" disabled required>
                        <option value="">Select 0 - 3</option>
                        @for($i = 0;$i <= 3;$i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <span id="id_error" class="error"></span>
            </div>
            <div id="report_duplicate" class="form-group but-form"></div>
            <div class="form-group but-form">
            <label for="formFile" class="form-label label-title">Upload Image</label>
            <input class="form-control" name="image" type="file" accept="image/*" id="formFile" required>
            </div>
            <center><button id="submit_zone" type="submit" class="btn btn-primary but-sub" disabled>Submit</button></center>
        </form>
        </div>
    </div>
    </div>
</div>

<div id="show-insert-modal"></div>
<div id="show-insert-modal-withxy"></div>
<div id="show-edit-modal"></div>
<div id="show-qrcode"></div>

@include('backend/modal-about-us')
@include('backend/modal-setting-project')


  <!-- JAVASCRIPT FILES -->
 @include('backend/script')

 <script type="text/javascript" src="{{ asset('public/qrcodejs/qrcode.js') }}"></script>

 <script>

  var fullUrl = window.location.origin + window.location.pathname;
  var layout_id;
  var check = [];

  function showData(id){
    $('.menu-layout').removeClass('active');
    $('#layout-drop'+id).addClass('active');
    layout_id = id;

    $.ajax({
        type: "GET",
        url: fullUrl + '/img/' + id,
        success: function(response){
            let div = $('#img-and-btn');
            var img = `<img id="img-layout${response.id}" class="img-overview-zone cell" src="{{ asset('${response.image}') }}">`;
            $.ajax({
                type: "GET",
                url: fullUrl + '/' + id + '/get_zone',
                success: function(data){
                  let os = $('#layout-plan8').offset();
                  for(var i = 0;i < data.length;i++){
                    let top = data[i].y_value;
                    let left = data[i].x_value;
                    let drop;
                    if(left > 50){
                      drop = `dropleft`;
                    }
                    else{
                      drop = `dropright`;
                    }
                    img += `<div id="div-zone-btn${data[i].id}" class="btn-img ${drop}" style="top:${top}%;left:${left}%;">
                              <button class="btn" id="btn-img-zone${data[i].id}" style="background-color:${data[i].color};color: white;" data-toggle="dropdown" aria-haspopup="true">${data[i].name}</button>
                              <div id="dropdown-btn" class="dropdown-menu">
                                <a class="dropdown-item" onclick="disableClose(${data[i].id})" data-bs-toggle="modal" data-bs-target="#edit-zone${data[i].id}" href="javascript:;">Edit</a>
                                <a class="dropdown-item replace_download" ref="${data[i].id}" data-bs-toggle="modal" data-bs-target="#qrcode${data[i].id}" href="javascript:;">Gen QR Code</a>
                                <a class="dropdown-item" onclick="deleteZone(${data[i].id});" href="javascript:;">Delete</a>
                              </div>
                            </div>`;
                  }
                  div.html(img);
                }
            });
        }
    });

    $.ajax({
        type: "GET",
        url: fullUrl + '/' + id + '/get_zone',
        success: function(response){

            let zone_plan = $('#zone-plan'); let zone_plan_data = `<h4 class="zone-area">Zone Area</h4>`;
            let show_insert_modal = $('#show-insert-modal'); let store_insert_modal = '';
            let show_edit_modal = $('#show-edit-modal'); let store_edit_modal = '';
            let show_button_zone = $('#show-button-zone'); let img = '';
            let show_qrcode = $('#show-qrcode'); let qrcode = '';

            if(response.length == 0){
              zone_plan_data += `<p class="menu-add-zone">No Zone</p>`;
            }

            let text_layout = $('#layout-drop'+id).text().replace(" ","_");

            for(let i = 0; i < response.length; i++){
                // console.log(response[i].output_id);
              check.push(response[i].id);
              let url_qrcode = response[i].url;
              let text_zone = response[i].name.replace(" ","_");
              qrcode += `<div class="modal fade" id="qrcode${response[i].id}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                          tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">QR Code</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body row" id="insert-zone">
                                <div class="form-group but-form col-8">
                                  <center>{{-- QrCode::size(300)->generate(url($url)) --}}
                                    <div id="qrcode_${response[i].id}"></div>
                                    <input type="hidden" id="url_${response[i].id}" value="${url_qrcode}" />
                                  </center>
                                </div>
                                <div class="form-group but-form mt-3 col-4" style="text-align: center;">
                                  <label class="TitleZone">Zone : </label><br>
                                  <label class="TitleDetail">${text_zone}</label><br>
                                  <center><a id="qrcode_download_${response[i].id}" href="#" ref="${text_zone}" download="${text_layout}-${text_zone}.png"><button type="button" class="btn btn-primary but-sub">Download</button></a></center>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>`;

              zone_plan_data += `<div class="btn-group dropleft" style="margin-bottom: -16px;">
                          <p data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical but-dots-plan" style="margin-top: 20px;margin-right: 10px;"></i>
                          </p>
                          <p class="menu-zone menu-zone-light" id="zone-drop${response[i].id}">${response[i].name}
                          </p>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-zone${response[i].id}" href="javascript:;">Edit</a>
                            <a class="dropdown-item replace_download" ref="${response[i].id}" data-bs-toggle="modal" data-bs-target="#qrcode${response[i].id}" href="javascript:;">Gen QR Code</a>
                            <a class="dropdown-item" onclick="deleteZone(${response[i].id});" href="javascript:;">Delete</a>
                          </div>
                        </div>`;
              store_edit_modal += `<div class="modal fade" data-keyboard="false" data-backdrop="static" id="edit-zone${response[i].id}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                          tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Edit Zone Area</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetValue()"></button>
                              </div>
                              <div class="modal-body" id="insert-zone">
                                <form action="{{ url('webpanel/layout-plan/${id}/zone/${response[i].id}') }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-group but-form">
                                    <label for="exampleInputEmail1" class="label-title">Zone Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="${response[i].name}" placeholder="Enter Zone Name">
                                  </div>
                                  <div class="form-group but-form">
                                    <label for="exampleInputEmail1" class="label-title">Zone Color</label>
                                    <input type="color" class="form-control" id="exampleInputEmail1" name="color" aria-describedby="emailHelp" value="${response[i].color}">
                                  </div>
                                  <div class="form-group but-form">
                                    <div class="row">
                                        <div class="col-6 col-lg-6">
                                            <label for="exampleInputEmail1" class="label-title">Frame ID</label>
                                            <select class="form-select" name="frame_id" onchange="selectFrame(${response[i].id})" id="frame_id${response[i].id}" required>
                                              <option value="">Select 0 - 39</option>`;
                                              for(let idx = 0;idx < 40;idx++){
                                                store_edit_modal += `<option `; if(response[i].frame_id == idx) store_edit_modal += `selected `; store_edit_modal += ` value="${idx}">${idx}</>`
                                              }
                        store_edit_modal += `</select>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <label for="exampleInputEmail1" class="label-title">Output ID</label>
                                            <select class="form-select" name="output_id" onchange="selectOutput(${response[i].id})" id="output_id${response[i].id}" required>
                                              <option value="">Select 0 - 3</option>`;
                                              for(let idx = 0;idx < 4;idx++){
                                                store_edit_modal += `<option `; if(response[i].output_id == idx) store_edit_modal += `selected `; store_edit_modal += ` value="${idx}">${idx}</>`
                                              }
                        store_edit_modal += `</select>
                                        </div>
                                    </div>
                                    <span id="id_error${response[i].id}" class="error"></span>
                                  </div>
                                  <div class="form-group but-form">
                                    <label for="formFile" class="form-label label-title">Upload Image</label>
                                    <input class="form-control" type="file" accept="image/*" name="image" id="formFile">
                                  </div>
                                  <center><button type="submit" id="submit_zone${response[i].id}" class="btn btn-primary but-sub">Submit</button></center>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>`;
            }
            // zone_plan_data += `<p class="menu-add-zone" data-bs-toggle="modal" data-bs-target="#exampleModalToggle2"><i class="bi bi-plus-square-fill"></i></p>`;
            store_insert_modal += `<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
              tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Add Zone Area</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" id="insert-zone">
                    <form action="{{ url('webpanel/layout-plan/${id}/zone') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group but-form">
                        <label for="exampleInputEmail1" class="label-title">Zone Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Zone Name" required>
                      </div>
                      <div class="form-group but-form">
                        <label for="formFile" class="form-label label-title">Upload Image</label>
                        <input class="form-control" name="image" type="file" accept="image/*" id="formFile" required>
                      </div>
                      <center><button type="submit" class="btn btn-primary but-sub">Submit</button></center>
                    </form>
                  </div>
                </div>
              </div>
            </div>`;
            zone_plan.html(zone_plan_data);
            // show_insert_modal.html(store_insert_modal);
            show_edit_modal.html(store_edit_modal);
            show_qrcode.html(qrcode);

            for(let i = 0; i < response.length; i++){
              var raw_qrcode = new QRCode("qrcode_"+response[i].id);
              function makeCode () {    
                var elText = document.getElementById("url_"+response[i].id);
                raw_qrcode.makeCode(elText.value);
              }
              makeCode();
            }

            setTimeout(function() {
              for(let i = 0; i < response.length; i++){
                let qrcode_src = $('#qrcode_'+response[i].id+' img').attr('src');
                $('#qrcode_download_'+response[i].id).attr('href',qrcode_src);
                console.log(qrcode_src);
              }
            }, 2000);
        }
    });
    setTimeout(() => {
        disableClose();
    }, 500);
  }
</script>
<script>

  $(document).ready(function(){

    // $('.replace_download').click(function(){
    //   var ref = $(this).attr('ref');
    //   var src = $('#qrcode_'+ref+' img').attr('src');
    //   console.log(src);
    //   $('#qrcode_download_'+ref).attr('href',src);
    // });

    setTimeout(() => {
        disableClose();
    }, 500);

    $('img').click(function(e) {
      var offset = $(this).offset();
      var X = (e.pageX - offset.left);
      var Y = (e.pageY - offset.top);
      console.log(20)
    });
  })

</script>

<script>
  var fullUrl = window.location.origin + window.location.pathname;

//   $("#insert-zone-modal").submit(function(e) {
//       e.preventDefault();
//       var form = $(this);
//       $.ajax({
//           type: form.attr('method'),
//           url: form.attr('action'),
//           data: form.serialize(),
//           success: function(data){
//               location.reload();
//           },
//           error: function(error){
//               alert(error);
//           }
//       });
//   });

  function deleteLayout(ids) {
      const id = [ids];
      if (id.length > 0) {
        destroy_layout(id)
      }
  }

  function destroy_layout(id) {
      Swal.fire({
          title: "ลบข้อมูล",
          text: "คุณต้องการลบข้อมูลใช่หรือไม่?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#FF8200",
          showLoaderOnConfirm: true,
          reverseButtons: true,
          preConfirm: () => {
              return fetch(fullUrl + '/destroy?id=' + id)
                  .then(response => response.json())
                  .then(data => location.reload())
                  .catch(error => {
                      Swal.showValidationMessage(`Request failed: ${error}`)
                  })
          }
      });
  }

  function deleteZone(ids) {
      const id = [ids];
      if (id.length > 0) {
        destroy_zone(id)
      }
  }

  function destroy_zone(id) {
      Swal.fire({
          title: "ลบข้อมูล",
          text: "คุณต้องการลบข้อมูลใช่หรือไม่?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#FF8200",
          showLoaderOnConfirm: true,
          reverseButtons: true,
          preConfirm: () => {
              return fetch(fullUrl + '/zone/destroy?id=' + id)
                  .then(response => response.json())
                  .then(data => location.reload())
                  .catch(error => {
                      Swal.showValidationMessage(`Request failed: ${error}`)
                  })
          }
      });
  }
</script>

<script>
  var fullUrl = window.location.origin + window.location.pathname;

  $('#img-and-btn').on("click", function(e) {
      e.preventDefault();
      var img = e.target.id;
      if(img.includes('img-layout')){
        var id = img.replace( /^\D+/g, '');
        var offset = $(this).offset();
        var left = ((e.pageX - offset.left) / $(this).innerWidth()) * 100;
        var top = ((e.pageY - offset.top) / $(this).innerHeight()) * 100;
        var x = left.toFixed(4);
        var y = top.toFixed(4);

        console.log("X:"+x+" Y:"+y);

        $("#form-insert-zone").attr('action', `{{ url('webpanel/layout-plan/${id}/zone') }}`);
        $('#x_value').val(x);
        $('#y_value').val(y);
        $('#layout_id').val(id);
        $('#insert-zone-modal').modal('show');
      }
  })

  $(document).on("change", '#frame_id', function (){
    var frame_id = $('#frame_id').val();
    if(frame_id != ""){
        $('#output_id').prop('disabled', false);
    }
    else{
        $('#output_id').prop('disabled', true);
    }
  })

  $(document).on("change", '#output_id , #frame_id', function (){
        var frame_id = $('#frame_id').val();
        var output_id = $('#output_id').val();
        var div = $('#id_error');
        div.html('')

        if(output_id != ""){
            $.ajax({
                type: "GET",
                url: fullUrl + '/check-duplicate',
                data: {
                    frame_id:frame_id,
                    output_id:output_id,
                },
                success: function(data){                 
                  if(!data.success){
                      div.html(data.error);
                      $('#submit_zone').prop('disabled', true);
                  }
                  else{
                      $('#submit_zone').prop('disabled', false);
                  }
                }
            })
        }
    })

    function selectFrame(i){
        var frame_id = $('#frame_id'+i).val();
        var output_id = $('#output_id'+i).val();
        var div = $('#id_error'+i);
        div.html('');
        
        if(frame_id != ""){
          if(output_id != ""){
            $.ajax({
                type: "GET",
                url: fullUrl + '/check-duplicate/' + i,
                data: {
                    frame_id:frame_id,
                    output_id:output_id,
                },
                success: function(data){
                  console.log(data);
                    if(!data.success){
                        div.html(data.error);
                        $('#submit_zone'+i).prop('disabled', true);
                    }
                    else{
                        $('#submit_zone'+i).prop('disabled', false);
                    }
                }
            })
          }
          else{
            $('#output_id'+i).prop('disabled', false);
          }          
        }
        else{
            $('#output_id'+i).prop('disabled', true);
        }
    }

    function selectOutput(i){
        var frame_id = $('#frame_id'+i).val();
        var output_id = $('#output_id'+i).val();
        var div = $('#id_error'+i);
        div.html('');

        if(output_id != ""){
            $.ajax({
                type: "GET",
                url: fullUrl + '/check-duplicate/' + i,
                data: {
                    frame_id:frame_id,
                    output_id:output_id,
                },
                success: function(data){
                  console.log(data);
                    if(!data.success){
                        div.html(data.error);
                        $('#submit_zone'+i).prop('disabled', true);
                    }
                    else{
                        $('#submit_zone'+i).prop('disabled', false);
                    }
                }
            })
        }
    }
</script>
<script>
    function disableClose(){
        $('#insert-zone-modal').modal({backdrop:'static', keyboard:false});
        check.forEach(i => {
            $('#edit-zone'+i).modal({backdrop:'static', keyboard:false});
        });
    }

    function closeInsertModal(){
        $('#form-insert-zone').find('input:text, input:file, select').val('');
        $('#form-insert-zone').find('input[type=color]').val('#000000');
        $('#id_error').html('');
    }

    function resetValue(){
        showData(layout_id);
    }
</script>


</body>

</html>
