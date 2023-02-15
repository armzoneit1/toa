<!doctype html>
<html lang="en">

<head>
  @include('backend.inc_head')
  @php $tab = "pre-record" @endphp
</head>

<style>
  .title-top {
    color: #fff;
    float: left;
    font-size: 20px;
    font-weight: 300;
    margin: 28px 22px 22px 0;
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
    border-bottom: 4px solid #ff8200;
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

  .img-overview-zone {
    width: auto;
  }

  .but-add {
    text-align: right;
    margin-right: 22px;
    color: #fff;
    background-color: #383838;
    width: fit-content;
    padding: 8px 18px;
    border-radius: 5px;
    float: right;
    margin-top: 3px;
    border-color: transparent;
    font-size: 18px;
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
    /* background-image: linear-gradient(45deg, transparent 50%, white 50%), linear-gradient(135deg, white 54%, transparent 59%), linear-gradient(to right, #ccc, #ccc); */
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
    border: 0;
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
    font-size: 20px;
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
    background-color: #fff;
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
    /* border: 1px solid #ff8200; */
    border: 1px solid #c7c7c7;
    border-radius: 0 !important;
  }

  .form-check-input:focus {
    border-color: #c7c7c7;
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
    /* padding: 40px 80px; */
    padding: 15px 80px;
    background-color: #585858;
    margin: 0;
}
.label-title{
color: #fff;
}
.but-form {
    margin-bottom: 20px;
    color: #fff;
}
.but-sub{
  color: #fff;
    background-color: #ff8200;
    border-color: #ff8200;
    padding: 5px 25px;
}
.but-sub:hover{
  color: #fff;
    background-color: #ff820000;
    border-color: #ff8200;
    padding: 5px 25px;
}
.volume-icon022{
  color: #ff8200;
  font-size: 30px;
}
.swal2-container {
  z-index: 99999 !important;
}
/* table#example{
  border: 1px solid #d3d3d3;
} */
tr {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    align-items: center;
    vertical-align: middle;
    background-color: #333;
    /* border-bottom: 0px solid #4E4E4E; */
}
.table-striped>tbody>tr:nth-of-type(odd)>* {
    color: #fff;
    background-color: #222;
}
.tr-top{
  border-bottom: 2px solid #4E4E4E;
}
.form-check-input:checked[type=checkbox] {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23ff8200' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
}


</style>

@if(!empty(Auth::check()) && Auth::user()->theme == 'W')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/light-mode.css') }}">
@endif

<body onload=" requiredCheck();">
  {{-- retrieveData(); --}}
  @include('backend/inc_navbar')

  <main>


    <section class="about section-top" id="section_2" style="min-height: 78px;">
      <div class="container">
        <div class="row align-top">
          <div class="col-lg-8 col-8" id="col8">
            <h4 id="toppp" class="title-top">Pre-Record Timer</h4>
            <!-- <div class="form-group">
                                <select class="form-select form-select-layout" aria-label="Default select example">
                                  <option selected>Layout 1</option>
                                  <option value="2">Layout 2</option>
                                  <option value="3">Layout 3</option>
                                </select>
                              </div> -->
          </div>
          <div class="col-lg-4 col-4" id="col4">
            <button class="but-add" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-keyboard="false" data-bs-target="#add_record"><i class="bi bi-plus-square-fill" id="icon-plus-add"></i> Add</button>
          </div>

        </div>
      </div>
    </section>


    <section class="about section-img-over" id="section_2">
      <div class="container">
        <div class="row">
          @php
              $checker = [];
          @endphp
          @foreach($ptt as $data)
            @php
              array_push($checker, $data->id);
            @endphp
          @endforeach
          <div class="col-lg-12 col-12" id="table-pre-record">
            <table id="example" class="table table-striped table-striped-light" style="width:100%">
              <thead>
                <tr class="tr-light tr-top tr-top-light">
                  <th>Select</th>
                  <th>Task Name</th>
                  <th class="text-center">Date</th>
                  <th class="text-center">Duration (M)</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Repeat</th>
                  <th>Loop</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody id="latest-record">
                @foreach($ptt as $data)
                  <tr class="tr-light" id="record-data{{ $data->id }}">
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="task_active" value="1" id="task_active{{ $data->id }}" onclick="taskActive({{ $data->id }})" @if($data->task_active == 1) checked @endif>
                        <label class="form-check-label" for="">
                        </label>
                      </div>
                    </td>
                    <td id="name_id{{ $data->id }}">{{ $data->task_name }}</td>
                    <td class="text-center" id="date_id{{ $data->id }}">@if($data->task_date == null) - @else {{ $data->task_date }} @endif</td>
                    <td class="text-center" id="duration_id{{ $data->id }}">@if($data->task_duration == null) - @else {{ $data->task_duration }} @endif</td>
                    <td id="start_id{{ $data->id }}">{{ $data->task_start }}</td>
                    <td id="end_id{{ $data->id }}">@if($data->task_end == null) - @else {{ $data->task_end }} @endif</td>
                    <td id="repeat_id{{ $data->id }}">{{ $data->task_repeat }}</td>
                    <td id="loop_id{{ $data->id }}">{{ $data->task_loop }}</td>
                    <td>
                    <p>
                        <a href="javascript:void(0);" id="toggle-edit-modal{{ $data->id }}" onclick="checkEdit({{ $data->id }})" data-bs-toggle="modal" data-bs-target="#edit-record{{ $data->id }}"><i class="bi bi-pencil-square" id="volume-icon02"></i></a>
                        <a href="javascript:void(0);" onclick='deleteItem({{ $data->id }})'><i class="bi bi-trash-fill" id="volume-icon03"></i></a>
                    </p>
                    </td>
                  </tr>
                @endforeach
                {{-- <a href="javascript:void(0);" onclick="playAudio({{ $data->id }});"><i class="bi bi-volume-off-fill volume-icon02" id="sound{{ $data->id }}"></i></a>  --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <audio src="" id="emergency" hidden></audio>
      <audio src="" id="chime-down" hidden></audio>
      <audio src="" id="chime-up" hidden></audio>
    </section>







  </main>

  <div class="modal fade insert-pre-record" id="add_record" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Add Pre-Record</h5>
          <button type="button" class="btn-close" onclick="clearAddData()" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <form action="" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group but-form">
            <label for="exampleInputEmail1" class="label-title">Task Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task Name" name="task_name" required>
          </div>
          <div class="form-group but-form">
            <label for="exampleInputEmail1" class="label-title">Repeat</label>
            <select class="form-select" id="task_repeat" name="task_repeat" aria-label="Default select example" required>
              <option selected value="1">Specified</option>
              <option value="2">Weekly</option>
            </select>
          </div>
          <div class="form-group but-form" id="task_date">
            <label for="exampleInputPassword1" class="label-title">Date</label>
            <input type="date" class="form-control" name="task_date" id="input_date" required>
          </div>
          <div class="form-group but-form" id="task_loop_repeat">
            <label for="exampleInputPassword1" class="label-title">Loop</label>
            <div class="row mt-2">
              <div class="col-lg-6 col-6 col-6-light"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_repeat" name="task_loop_repeat[]" id="exampleInputPassword1" value="Every Month">&nbsp;&nbsp;Every Month</div>
              <div class="col-lg-6 col-6 col-6-light"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_repeat" name="task_loop_repeat[]" id="exampleInputPassword1" value="Every Year">&nbsp;&nbsp;Every Year</div>
            </div>
          </div>
          <div class="form-group but-form d-none" id="task_loop_day">
            <label for="exampleInputPassword1" class="label-title">Loop</label>
            <div class="row mt-2">
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day" name="task_loop_day[]" id="exampleInputPassword1" value="Monday">&nbsp;&nbsp;MON</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day" name="task_loop_day[]" id="exampleInputPassword1" value="Tuesday">&nbsp;&nbsp;TUE</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day" name="task_loop_day[]" id="exampleInputPassword1" value="Wednesday">&nbsp;&nbsp;WED</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day" name="task_loop_day[]" id="exampleInputPassword1" value="Thursday">&nbsp;&nbsp;THU</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day" name="task_loop_day[]" id="exampleInputPassword1" value="Friday">&nbsp;&nbsp;FRI</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day" name="task_loop_day[]" id="exampleInputPassword1" value="Saturday">&nbsp;&nbsp;SAT</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day" name="task_loop_day[]" id="exampleInputPassword1" value="Sunday">&nbsp;&nbsp;SUN</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input" id="check_all">&nbsp;&nbsp;All</div>
            </div>
          </div>
          <div class="form-group but-form">
            <label for="exampleInputEmail1" class="label-title">Duration (m)</label>
            <input type="number" min="1" class="form-control" id="task_duration" aria-describedby="emailHelp" placeholder="Enter Duration" name="task_duration">
          </div>
          <div class="row">
            <div class="form-group but-form col-sm-6 col-md-6">
              <label for="exampleInputEmail1" class="label-title">Start Time</label>
              <input type="time" class="form-control" name="task_start" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group but-form col-sm-6 col-md-6">
              <label for="exampleInputEmail1" class="label-title">End Time</label>
              <input type="time" class="form-control" name="task_end" id="task_end" aria-describedby="emailHelp" readonly>
            </div>
          </div>
          <div class="form-group but-form" style="margin-bottom: 20px !important;">
            <label for="exampleInputEmail1" class="label-title">Audio File</label>
            <input type="file" class="form-control" id="exampleInputEmail1" accept="audio/*" aria-describedby="emailHelp" name="file" required>
          </div>
          <center><button type="submit" class="btn btn-primary but-sub">Submit</button></center>
        </form>
        </div>
      </div>
    </div>
  </div>
<div id="append-update-modal">
  @foreach($ptt as $data)
  <div class="modal fade update-pre-record" data-bs-backdrop="static" data-bs-keyboard="false" id="edit-record{{ $data->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Edit Pre-Record {{ $data->task_name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{ url("webpanel/pre-record/$data->id") }}" method="POST" id="form-update{{ $data->id }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group but-form">
            <label for="exampleInputEmail1" class="label-title">Task Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task Name" name="task_name" id="task_name_edit{{ $data->id }}" value="{{ $data->task_name }}" required>
          </div>
          <div class="form-group but-form">
            <label for="exampleInputEmail1" class="label-title">Repeat</label>
            <select class="form-select" id="task_repeat_edit{{ $data->id }}" name="task_repeat" aria-label="Default select example" required>
              <option @if($data->task_repeat == "Specified") selected @endif value="1">Specified</option>
              <option @if($data->task_repeat == "Weekly") selected @endif value="2">Weekly</option>
            </select>
          </div>
          <div class="form-group but-form" id="task_date_edit{{ $data->id }}">
            <label for="exampleInputPassword1" class="label-title">Date</label>
            <input type="date" class="form-control" name="task_date" value="{{ $data->task_date }}" id="td_edit{{ $data->id }}">
          </div>
          <div class="form-group but-form" id="task_loop_repeat_edit{{ $data->id }}">
            <label for="exampleInputPassword1" class="label-title">Loop</label>
            <div class="row mt-2">
              <div class="col-lg-6 col-6"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_repeat_edit{{ $data->id }}" name="task_loop_repeat[]" id="exampleInputPassword1" @if(str_contains($data->task_loop, 'Every Month')) checked @endif value="Every Month" >&nbsp;&nbsp;Every Month</div>
              <div class="col-lg-6 col-6"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_repeat_edit{{ $data->id }}" name="task_loop_repeat[]" id="exampleInputPassword1" @if(str_contains($data->task_loop, 'Every Year')) checked @endif value="Every Year">&nbsp;&nbsp;Every Year</div>
            </div>
          </div>
          <div class="form-group but-form d-none" id="task_loop_day_edit{{ $data->id }}">
            <label for="exampleInputPassword1" class="label-title">Loop</label>
            <div class="row mt-2">
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit{{ $data->id }}" name="task_loop_day[]" id="exampleInputPassword1" @if(str_contains($data->task_loop, 'Monday') || str_contains($data->task_loop, 'Every Day')) checked @endif value="Monday">&nbsp;&nbsp;MON</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit{{ $data->id }}" name="task_loop_day[]" id="exampleInputPassword1" @if(str_contains($data->task_loop, 'Tuesday') || str_contains($data->task_loop, 'Every Day')) checked @endif value="Tuesday">&nbsp;&nbsp;TUE</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit{{ $data->id }}" name="task_loop_day[]" id="exampleInputPassword1" @if(str_contains($data->task_loop, 'Wednesday') || str_contains($data->task_loop, 'Every Day')) checked @endif value="Wednesday">&nbsp;&nbsp;WED</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit{{ $data->id }}" name="task_loop_day[]" id="exampleInputPassword1" @if(str_contains($data->task_loop, 'Thursday') || str_contains($data->task_loop, 'Every Day')) checked @endif value="Thursday">&nbsp;&nbsp;THU</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit{{ $data->id }}" name="task_loop_day[]" id="exampleInputPassword1" @if(str_contains($data->task_loop, 'Friday') || str_contains($data->task_loop, 'Every Day')) checked @endif value="Friday">&nbsp;&nbsp;FRI</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit{{ $data->id }}" name="task_loop_day[]" id="exampleInputPassword1" @if(str_contains($data->task_loop, 'Saturday') || str_contains($data->task_loop, 'Every Day')) checked @endif value="Saturday">&nbsp;&nbsp;SAT</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit{{ $data->id }}" name="task_loop_day[]" id="exampleInputPassword1" @if(str_contains($data->task_loop, 'Sunday') || str_contains($data->task_loop, 'Every Day')) checked @endif value="Sunday">&nbsp;&nbsp;SUN</div>
              <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input" id="check_all_edit{{ $data->id }}">&nbsp;&nbsp;All</div>
            </div>
          </div>
          <div class="form-group but-form">
            <label for="exampleInputEmail1" class="label-title">Duration (m)</label>
            <input type="number" min="1" class="form-control" id="task_duration_edit{{ $data->id }}" aria-describedby="emailHelp" value="{{ $data->task_duration }}"  placeholder="Enter Duration" name="task_duration">
          </div>
          <div class="row">
            <div class="form-group but-form col-sm-6 col-md-6">
              <label for="exampleInputEmail1" class="label-title">Start Time</label>
              <input type="time" class="form-control" name="task_start" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->task_start }}" required>
            </div>
            <div class="form-group but-form col-sm-6 col-md-6">
              <label for="exampleInputEmail1" class="label-title">End Time</label>
              <input type="time" class="form-control" name="task_end" id="task_end_edit{{ $data->id }}" aria-describedby="emailHelp" value="{{ $data->task_end }}" @if(!$data->task_end) readonly @endif>
            </div>
          </div>
          <div class="form-group but-form" style="margin-bottom: 20px !important;">
            <label for="exampleInputEmail1" class="label-title">Audio File</label>
            <input type="file" class="form-control" accept="audio/*"  id="exampleInputEmail1" aria-describedby="emailHelp" name="file">
          </div>
          <div class="form-group but-form" style="margin-bottom: 20px !important;">
            <center><span id="id_error" class="error"></span></center>
          </div>
          <center><button type="submit" class="btn btn-primary but-sub" onclick="subform(event,'form-update{{$data->id}}')">Submit</button></center>
        </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
  <div id="edit-record-modal"></div>

@include('backend/modal-about-us')
@include('backend/modal-setting-project')

@include('backend/script')

{{-- @include('layout/script') --}}

<script >
  let checker = {{ json_encode($checker) }};

  $(document).ready(function (){
    $(".insert-pre-record form").on('submit', function(e){
      e.preventDefault();
      let formData = new FormData(this);
      $('.modal').modal('hide');
      // for (var pair of formData.entries()) {
      //   console.log(pair[0]+ ', ' + pair[1]);
      // }
      $.ajax({
        type: "POST",
        url: fullUrl,
        data: formData,
        processData: false,
        contentType: false,
        success: function(response){
          if(response.Success){
            $.ajax({
              type: "GET",
              url: fullUrl + '/latest',
              success: function(res){
                let div = $('#latest-record');
                let html = `<tr class="tr-light" id="record-data${res.id}">
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="task_active" value="1" id="task_active${res.id}" onclick="taskActive(${res.id}) "`; if(res.task_active == 1) html += `checked`; html += ` >
                                  <label class="form-check-label" for="">
                                  </label>
                                </div>
                              </td>
                              <td id="name_id${res.id}">${res.task_name}</td>
                              <td class="text-center" id="date_id${res.id}">`; if(res.task_date == null) html += `-`; else html += `${res.task_date}`; html += `</td>
                              <td class="text-center" id="duration_id${res.id}">`; if(res.task_duration == null) html += `-`; else html += `${res.task_duration}`; html += `</td>
                              <td id="start_id${res.id}">${res.task_start}</td>
                              <td id="end_id${res.id}">`; if(res.task_end == null) html += `-`; else html += `${res.task_end}`; html += `</td>
                              <td id="repeat_id${res.id}">${res.task_repeat}</td>
                              <td id="loop_id${res.id}">${res.task_loop}</td>
                              <td>
                                <p>
                                  <a href="javascript:void(0);" id="toggle-edit-modal${res.id}" onclick="checkEdit(${res.id})" data-bs-toggle="modal" data-bs-target="#edit-record${res.id}"><i class="bi bi-pencil-square" id="volume-icon02"></i></a>
                                  {{-- <a href="javascript:void(0);" onclick="playAudio(${res.id});"><i class="bi bi-volume-off-fill volume-icon02" id="sound${res.id}"></i></a>  --}}
                                  <a href="javascript:void(0);" onclick='deleteItem(${res.id})'><i class="bi bi-trash-fill" id="volume-icon03"></i></a>
                                </p>
                              </td>
                            </tr>`;
                div.append(html);

                let div2 = $("#append-update-modal");
                let html2 = `<div class="modal fade update-pre-record" data-bs-backdrop="static" data-bs-keyboard="false" id="edit-record${res.id}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                                tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalToggleLabel">Edit Pre-Record ${res.task_name}</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="{{ url('webpanel/pre-record/${res.id}') }}" method="POST" id="form-update${res.id}" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group but-form">
                                        <label for="exampleInputEmail1" class="label-title">Task Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task Name" name="task_name" id="task_name_edit${res.id}" value="${res.task_name}" required>
                                      </div>
                                      <div class="form-group but-form">
                                        <label for="exampleInputEmail1" class="label-title">Repeat</label>
                                        <select class="form-select" id="task_repeat_edit${res.id}" name="task_repeat" aria-label="Default select example" required>
                                          <option `; if(res.task_repeat == "Specified") html2 += `selected`; html2 += ` value="1">Specified</option>
                                          <option `; if(res.task_repeat == "Weekly") html2 += `selected`; html2 += ` value="2">Weekly</option>
                                        </select>
                                      </div>
                                      <div class="form-group but-form" id="task_date_edit${res.id}">
                                        <label for="exampleInputPassword1" class="label-title">Date</label>
                                        <input type="date" class="form-control" name="task_date" value="`; if(res.task_date) html2 += `${res.task_date}`; html2 += `"  id="td_edit${res.id}">
                                      </div>
                                      <div class="form-group but-form" id="task_loop_repeat_edit${res.id}">
                                        <label for="exampleInputPassword1" class="label-title">Loop</label>
                                        <div class="row mt-2">
                                          <div class="col-lg-6 col-6"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_repeat_edit${res.id}" name="task_loop_repeat[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Every Month")) html2 += `checked`; html2 += ` value="Every Month" >&nbsp;&nbsp;Every Month</div>
                                          <div class="col-lg-6 col-6"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_repeat_edit${res.id}" name="task_loop_repeat[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Every Year")) html2 += `checked`; html2 += ` value="Every Year">&nbsp;&nbsp;Every Year</div>
                                        </div>
                                      </div>
                                      <div class="form-group but-form d-none" id="task_loop_day_edit${res.id}">
                                        <label for="exampleInputPassword1" class="label-title">Loop</label>
                                        <div class="row mt-2">
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Monday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Monday">&nbsp;&nbsp;MON</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Tuesday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Tuesday">&nbsp;&nbsp;TUE</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Wednesday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Wednesday">&nbsp;&nbsp;WED</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Thursday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Thursday">&nbsp;&nbsp;THU</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Friday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Friday">&nbsp;&nbsp;FRI</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Saturday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Saturday">&nbsp;&nbsp;SAT</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Sunday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Sunday">&nbsp;&nbsp;SUN</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input" id="check_all_edit${res.id}">&nbsp;&nbsp;All</div>
                                        </div>
                                      </div>
                                      <div class="form-group but-form">
                                        <label for="exampleInputEmail1" class="label-title">Duration (m)</label>
                                        <input type="number" min="1" class="form-control" id="task_duration_edit${res.id}" aria-describedby="emailHelp" value="`; if(res.task_duration) html2 += `${res.task_duration}`; html2 += `"  placeholder="Enter Duration" name="task_duration">
                                      </div>
                                      <div class="row">
                                        <div class="form-group but-form col-sm-6 col-md-6">
                                          <label for="exampleInputEmail1" class="label-title">Start Time</label>
                                          <input type="time" class="form-control" name="task_start" id="exampleInputEmail1" aria-describedby="emailHelp" value="${res.task_start}" required>
                                        </div>
                                        <div class="form-group but-form col-sm-6 col-md-6">
                                          <label for="exampleInputEmail1" class="label-title">End Time</label>
                                          <input type="time" class="form-control" name="task_end" id="task_end_edit${res.id}" aria-describedby="emailHelp" value="`; if(res.task_end) html2 += `${res.task_end}`; html2 += `" `; if(!res.task_end) html2 += `readonly`; html2 += `>
                                        </div>
                                      </div>
                                      <div class="form-group but-form" style="margin-bottom: 20px !important;">
                                        <label for="exampleInputEmail1" class="label-title">Audio File</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" accept="audio/*" aria-describedby="emailHelp" name="file">
                                      </div>
                                      <div class="form-group but-form" style="margin-bottom: 20px !important;">
                                        <center><span id="id_error" class="error"></span></center>
                                      </div>
                                      <center><button type="submit" class="btn btn-primary but-sub" onclick="subform(event,\'form-update${res.id}\')">Submit</button></center>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>`;
                div2.append(html2);

                let div3 = $('#check-audio-play');
                let html3 = `<div id="div-audio${res.id}">
                              <p id="rec-name_id${res.id}">${res.task_name}</p>
                              <p class="text-center" id="rec-date_id${res.id}">`;if(res.task_date == null) html3 += ` - `; else `${res.task_date}`; html3 += `</p>
                              <p class="text-center" id="rec-duration_id${res.id}">`;if(res.task_duration == null) html3 += `-`; else html3 += `${res.task_duration}`; html3 += `</p>
                              <p id="rec-start_id${res.id}">${res.task_start}</p>
                              <p id="rec-end_id${res.id}">`;if(res.task_end == null) html3 += ` - `; else html3 += `${res.task_end}`; html3 += `</p>
                              <p id="rec-repeat_id${res.id}">${res.task_repeat}</p>
                              <p id="rec-loop_id${res.id}">${res.task_loop}</p>
                              <audio src="{{ asset('${res.file}') }}" class="audio-pre-record" id="rec-audio${res.id}" hidden></audio>
                            </div>`;

                div3.append(html3);
                array_all.push([res.id,1]);
                array.push(res.id);
                checker.push(res.id);
                requiredCheck();
                clearAddData();
              }
            })
          }
          else{
            $('#id_error').text('Cannot insert or update Pre-Record');
          }
        }
      })

    })
    
   //var updateInterval = setInterval(() => {
      $(".update-pre-record form").on('submit', function(e){
        
        e.preventDefault();
        let id = $(this).attr('id').replace( /^\D+/g, '');
        let formData = new FormData(this);
        $('.modal').modal('hide');
        $.ajax({
          type: "POST",
          url: fullUrl + '/' + id,
          data: formData,
          dataType: 'json',
          processData: false,
          contentType: false,
          success: function(response){
            if(response.Success){
              $.ajax({
                type: "GET",
                url: fullUrl + '/latest/' + id,
                success: function(res){
                  $("#toggle-edit-modal"+id).attr('data-bs-toggle','');
                  $('#edit-record'+id).remove();
                  let div2 = $("#append-update-modal");
                  let html2 = `<div class="modal fade update-pre-record" data-bs-backdrop="static" data-bs-keyboard="false" id="edit-record${res.id}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                                tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalToggleLabel">Edit Pre-Record ${res.task_name}</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="{{ url('webpanel/pre-record/${res.id}') }}" method="POST" id="form-update${res.id}" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group but-form">
                                        <label for="exampleInputEmail1" class="label-title">Task Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task Name" name="task_name" id="task_name_edit${res.id}" value="${res.task_name}" required>
                                      </div>
                                      <div class="form-group but-form">
                                        <label for="exampleInputEmail1" class="label-title">Repeat</label>
                                        <select class="form-select" id="task_repeat_edit${res.id}" name="task_repeat" aria-label="Default select example" required>
                                          <option `; if(res.task_repeat == "Specified") html2 += `selected`; html2 += ` value="1">Specified</option>
                                          <option `; if(res.task_repeat == "Weekly") html2 += `selected`; html2 += ` value="2">Weekly</option>
                                        </select>
                                      </div>
                                      <div class="form-group but-form" id="task_date_edit${res.id}">
                                        <label for="exampleInputPassword1" class="label-title">Date</label>
                                        <input type="date" class="form-control" name="task_date" value="`; if(res.task_date) html2 += `${res.task_date}`; html2 += `"  id="td_edit${res.id}">
                                      </div>
                                      <div class="form-group but-form" id="task_loop_repeat_edit${res.id}">
                                        <label for="exampleInputPassword1" class="label-title">Loop</label>
                                        <div class="row mt-2">
                                          <div class="col-lg-6 col-6"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_repeat_edit${res.id}" name="task_loop_repeat[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Every Month")) html2 += `checked`; html2 += ` value="Every Month" >&nbsp;&nbsp;Every Month</div>
                                          <div class="col-lg-6 col-6"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_repeat_edit${res.id}" name="task_loop_repeat[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Every Year")) html2 += `checked`; html2 += ` value="Every Year">&nbsp;&nbsp;Every Year</div>
                                        </div>
                                      </div>
                                      <div class="form-group but-form d-none" id="task_loop_day_edit${res.id}">
                                        <label for="exampleInputPassword1" class="label-title">Loop</label>
                                        <div class="row mt-2">
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Monday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Monday">&nbsp;&nbsp;MON</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Tuesday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Tuesday">&nbsp;&nbsp;TUE</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Wednesday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Wednesday">&nbsp;&nbsp;WED</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Thursday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Thursday">&nbsp;&nbsp;THU</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Friday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Friday">&nbsp;&nbsp;FRI</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Saturday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Saturday">&nbsp;&nbsp;SAT</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input check_day_edit${res.id}" name="task_loop_day[]" id="exampleInputPassword1" `; if(res.task_loop.includes("Sunday") || res.task_loop.includes("Every Day")) html2 += `checked`; html2 += ` value="Sunday">&nbsp;&nbsp;SUN</div>
                                          <div class="col-lg-1 col-1" style="width: 12.5% !important;"><input type="checkbox" style="width:15px !important; height: 15px !important;" class="form-check-input" id="check_all_edit${res.id}">&nbsp;&nbsp;All</div>
                                        </div>
                                      </div>
                                      <div class="form-group but-form">
                                        <label for="exampleInputEmail1" class="label-title">Duration (m)</label>
                                        <input type="number" min="1" class="form-control" id="task_duration_edit${res.id}" aria-describedby="emailHelp" value="`; if(res.task_duration) html2 += `${res.task_duration}`; html2 += `"  placeholder="Enter Duration" name="task_duration">
                                      </div>
                                      <div class="row">
                                        <div class="form-group but-form col-sm-6 col-md-6">
                                          <label for="exampleInputEmail1" class="label-title">Start Time</label>
                                          <input type="time" class="form-control" name="task_start" id="exampleInputEmail1" aria-describedby="emailHelp" value="${res.task_start}" required>
                                        </div>
                                        <div class="form-group but-form col-sm-6 col-md-6">
                                          <label for="exampleInputEmail1" class="label-title">End Time</label>
                                          <input type="time" class="form-control" name="task_end" id="task_end_edit${res.id}" aria-describedby="emailHelp" value="`; if(res.task_end) html2 += `${res.task_end}`; html2 += `" `; if(!res.task_end) html2 += `readonly`; html2 += `>
                                        </div>
                                      </div>
                                      <div class="form-group but-form" style="margin-bottom: 20px !important;">
                                        <label for="exampleInputEmail1" class="label-title">Audio File</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" accept="audio/*" aria-describedby="emailHelp" name="file">
                                      </div>
                                      <div class="form-group but-form" style="margin-bottom: 20px !important;">
                                        <center><span id="id_error" class="error"></span></center>
                                      </div>
                                      <center><button type="submit" class="btn btn-primary but-sub" onclick="subform(event,\'form-update${res.id}\')">Submit</button></center>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>`;
                  div2.append(html2);
                  $("#toggle-edit-modal"+id).attr('data-bs-toggle','modal');

                  let div = $('#latest-record');
                  if(res.task_active == 1){
                    $('#task_active'+id).prop('checked',true)
                  }
                  $('#'+id).text();
                  $('#name_id'+id).text(res.task_name);
                  if(res.task_date == null){
                    $('#date_id'+id).text('-');
                  }
                  else{
                    $('#date_id'+id).text(res.task_date);
                  }
                  if(res.task_duration == null){
                    $('#duration_id'+id).text('-');
                  }
                  else{
                    $('#duration_id'+id).text(res.task_duration);
                  }
                  $('#start_id'+id).text(res.task_start);
                  if(res.task_end == null){
                    $('#end_id'+id).text('-');
                  }
                  else{
                    $('#end_id'+id).text(res.task_end);
                  }
                  $('#repeat_id'+id).text(res.task_repeat);
                  $('#loop_id'+id).text(res.task_loop);

                  $('#rec-name_id'+id).text(res.task_name);
                  if(res.task_date == null){
                    $('#rec-date_id'+id).text('-');
                  }
                  else{
                    $('#rec-date_id'+id).text(res.task_date+' ');
                  }
                  if(res.task_duration == null){
                    $('#rec-duration_id'+id).text('-');
                  }
                  else{
                    $('#rec-duration_id'+id).text(res.task_duration);
                  }
                  $('#rec-start_id'+id).text(res.task_start);
                  if(res.task_end == null){
                    $('#rec-end_id'+id).text('-');
                  }
                  else{
                    $('#rec-end_id'+id).text(res.task_end);
                  }
                  $('#rec-repeat_id'+id).text(res.task_repeat);
                  $('#rec-loop_id'+id).text(res.task_loop);
                  $('#rec-audio'+id).attr('src',`{{ asset('${res.file}') }}`)[0];
                }
              })
            }
            else{
              $('#id_error').text('Cannot insert or update Pre-Record');
            }
          }
        })

      })
    //}, 1000);

  })

  function playAudio(id){
    var sound = $('audio');
    var audio = $('#audio'+id)[0];

    if(audio.paused){
      for (let i = 0; i < sound.length; i++) {
        if(!sound[i].paused){
          sound[i].pause();
        }
      }
      $(".bi-volume-off-fill").removeClass('volume-icon022');
      $(".bi-volume-off-fill").addClass('volume-icon02');

      audio.play();
      $('#sound'+id).removeClass('volume-icon02');
      $('#sound'+id).addClass('volume-icon022');
    }
    else{
      audio.pause();
      $('#sound'+id).removeClass('volume-icon022');
      $('#sound'+id).addClass('volume-icon02');
    }
    audio.currentTime = 0;
  }

  $('#task_repeat').on("change", function(){
    let val = $('#task_repeat').val();
    if(val == "1"){
      if(!$('#task_loop_day').hasClass("d-none")){
        $('#task_loop_day').addClass("d-none");
        $(".check_day").prop('required', false);
        $(".check_day").prop('checked', false);
        $("#check_all").prop('checked', false);
      }
      $('#task_loop_repeat').removeClass("d-none");
      // $(".check_repeat").prop('required', true);
      $('#task_date').removeClass("d-none");
      $('#input_date').prop("required", true);
    }
    else{
      if(!$('#task_loop_repeat').hasClass("d-none")){
        $('#task_loop_repeat').addClass("d-none");
        $(".check_repeat").prop('required', false);
        $(".check_repeat").prop('checked', false);
        $('#task_date').addClass("d-none");
      }
      $('#task_loop_day').removeClass("d-none");
      $(".check_day").prop('required', true);
      $('#input_date').prop("required", false);
      $('#input_date').prop("value", '');
    }
  })

  // $('.check_repeat').on("change", function (){
  //   if($('#task_loop_repeat :checkbox:checked').length > 0){
  //     $(".check_repeat").prop('required', false);
  //   }
  //   else{
  //     $(".check_repeat").prop('required', true);
  //   }
  // });

  $('.check_day').on("change", function (){
    if($('#task_loop_day :checkbox:checked').length > 0){
      $(".check_day").prop('required', false);
    }
    else{
      $(".check_day").prop('required', true);
    }
  });

  $("#check_all").on("change", function() {
    if(this.checked) {
      $(".check_day").prop("checked", true);
      $(".check_day").prop('required', false);
    }
    else{
      $(".check_day").prop("checked", false);
      $(".check_day").prop('required', true);
    }
  })

  $("#task_duration").on("input", function(){
    if($("#task_duration").val()){
      $("#task_end").prop("readonly", false);
      $("#task_end").prop("required", true);
    }
    else{
      $("#task_end").prop("readonly", true);
      $("#task_end").prop("required", false);
    }
  })
</script>

<script>
  function requiredCheck(){
    $('#add_record').modal({backdrop:'static', keyboard:false});
    $(".check_day").prop('required', false);
    // $(".check_repeat").prop('required', true);

    checker.forEach(e => {
      $('#edit-record'+e).modal({backdrop:'static', keyboard:false});
      if($('#task_repeat_edit'+e).val() == 1){
        $(".check_day_edit"+e).prop('required', false);
        // $(".check_repeat_edit"+e).prop('required', true);
      }
      else{
        $(".check_day_edit"+e).prop('required', true);
        $(".check_repeat_edit"+e).prop('required', false);
        if ($('.check_day_edit'+e+':checked').length == $('.check_day_edit'+e).length) {
          $('#check_all_edit'+e).prop('checked',true);
        }
      }
    });

  }

  function checkEdit(id){
    let val = $('#task_repeat_edit'+id).val();
    if(val == "1"){
      if(!$('#task_loop_day_edit'+id).hasClass("d-none")){
        $('#task_loop_day_edit'+id).addClass("d-none");
        $(".check_day_edit"+id).prop('required', false);
      }
      $('#task_loop_repeat_edit'+id).removeClass("d-none");
      // if($('#task_loop_repeat_edit'+id+' :checkbox:checked').length > 0){
      //   $(".check_repeat_edit"+id).prop('required', false);
      // }
      // else{
      //   $(".check_repeat_edit"+id).prop('required', true);
      // }
      $('#task_date_edit'+id).removeClass("d-none");
      $('#td_edit'+id).prop("required", true);
    }
    else{
      if(!$('#task_loop_repeat_edit'+id).hasClass("d-none")){
        $('#task_loop_repeat_edit'+id).addClass("d-none");
        $('#task_date_edit'+id).addClass("d-none");
      }
      $(".check_repeat_edit"+id).prop('required', false);
      $('#td_edit'+id).prop("required", false);
      $('#task_loop_day_edit'+id).removeClass("d-none");
      if($('#task_loop_day_edit'+id+' :checkbox:checked').length > 0){
        $(".check_day_edit"+id).prop('required', false);
      }
      else{
        $(".check_day_edit"+id).prop('required', true);
      }
      if ($('.check_day_edit'+id+':checked').length == $('.check_day_edit'+id).length) {
        $('#check_all_edit'+id).prop('checked',true);
      }
      else{
        $('#check_all_edit'+id).prop('checked',false);
      }
    }
  }
setInterval(() => {
  checker.forEach(id => {
    $('#task_repeat_edit'+id).on("change", function(){
      checkEdit(id);
    })

    // $('.check_repeat_edit'+id).on("change", function (){
    //   if($('#task_loop_repeat_edit'+id+' :checkbox:checked').length > 0){
    //     $(".check_repeat_edit"+id).prop('required', false);
    //   }
    //   else{
    //     $(".check_repeat_edit"+id).prop('required', true);
    //   }
    // });

    $('.check_day_edit'+id).on("change", function (){
      if($('#task_loop_day_edit'+id+' :checkbox:checked').length > 0){
        $(".check_day_edit"+id).prop('required', false);
      }
      else{
        $(".check_day_edit"+id).prop('required', true);
      }
      if ($('.check_day_edit'+id+':checked').length == $('.check_day_edit'+id).length) {
        $('#check_all_edit'+id).prop('checked',true);
      }
      else{
        $('#check_all_edit'+id).prop('checked',false);
      }
    });

    $("#check_all_edit"+id).on("change", function() {
      if(this.checked) {
        $(".check_day_edit"+id).prop("checked", true);
        $(".check_day_edit"+id).prop('required', false);
      }
      else{
        $(".check_day_edit"+id).prop("checked", false);
        $(".check_day_edit"+id).prop('required', true);
      }
    })

    $("#task_duration_edit"+id).on("input", function(){
      if($("#task_duration_edit"+id).val()){
        $("#task_end_edit"+id).prop("readonly", false);
        $("#task_end_edit"+id).prop("required", true);
      }
      else{
        $("#task_end_edit"+id).prop("readonly", true);
        $("#task_end_edit"+id).prop("required", false);
      }
    })

  });
}, 1000);

</script>
<script>
  var fullUrl = window.location.origin + window.location.pathname;

  function taskActive(id){
    let value;
    if($('#task_active' + id).is(":checked")){
      value = 1;
    }
    else{
      value = 0;
      if($('#rec-audio'+id)[0].paused == false){
        $('#rec-audio'+id)[0].pause();
        $('#rec-audio'+id)[0].currentTime = 0;
      }
    }
    $.ajax({
        type: "POST",
        url: fullUrl + '/active/' + id,
        data: {active:value},
        success: function(response){
          array_all = response;
        },
        error: function(error){
          alert(error);
        }
    });
  }

  function deleteItem(ids) {
      const id = [ids];
      if (id.length > 0) {
          destroy(id)
      }
  }

  function destroy(id) {
      Swal.fire({
          title: "ลบข้อมูล",
          text: "คุณต้องการลบข้อมูลใช่หรือไม่?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#FF8200",
          reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
              $.ajax({
                type: "GET",
                url: fullUrl + '/destroy?id=' + id,
                success: function(res){
                  if(res){
                    $('#record-data'+id).remove();
                    $('#div-audio'+id).remove();
                    array_all = array_all.filter(function(item) {
                      return item[0] != id;
                    })
                    array = array.filter(function(item) {
                      return item != id;
                    })
                    checker = checker.filter(function(item) {
                      return item[0] != id;
                    })
                  }
                }
              })
            }
          })
          // preConfirm: () => {
          //     return fetch(fullUrl + '/destroy?id=' + id)
          //         .then(response => response.json())
          //         // .then(data => location.reload())
          //         .catch(error => {
          //             Swal.showValidationMessage(`Request failed: ${error}`)
          //         })
          // }
  }

    function clearAddData(){
        $('#add_record')
        .find("input,textarea")
        .val('')
        .end()
        .find("input[type=checkbox], input[type=radio]")
        .prop("checked", "")
        .end()
        .find("#task_end")
        .prop("readonly",true)
        .end();
    }
    function subform(event,idform)
    {
      alert("222");
      event.preventDefault();
    }
    
</script>

</body>

</html>
