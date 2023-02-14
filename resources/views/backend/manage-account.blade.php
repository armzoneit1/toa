<!doctype html>
<html lang="en">

<head>
  @include('backend.inc_head')
  @php $tab = "manage-account" @endphp
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

  .img-overview-zone {
    width: auto;
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
    cursor: pointer;
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
#volume-icon022{
  color: #ff8200;
  font-size: 30px;
}

td .edit-delete{
  text-align: left;
}
#volume-icon02 {
    color: #ccc;
    font-size: 21px;
}
.swal2-container {
  z-index: 99999 !important;
}



tr {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    align-items: center;
    vertical-align: middle;
    background-color: #333;
    /* border-bottom: 0px solid #4E4E4E; */
}
.tr-top {
    border-bottom: 2px solid #4E4E4E;
}
.table-striped>tbody>tr:nth-of-type(odd)>* {
    color: #fff;
    background-color: #222;
}
.table>:not(caption)>*>* {
    padding: 1.5rem 0.5rem;
    border-top: 2px solid #959595;
    border: 0;
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
            <h4 class="title-top">Manage Account</h4>
            <!-- <div class="form-group">
                                <select class="form-select form-select-layout" aria-label="Default select example">
                                  <option selected>Layout 1</option>
                                  <option value="2">Layout 2</option>
                                  <option value="3">Layout 3</option>
                                </select>
                              </div> -->
          </div>
          <div class="col-lg-4 col-4" id="col4">
            <p class="but-add" data-bs-toggle="modal" data-bs-target="#add-account"><i class="bi bi-plus-square-fill" id="icon-plus-add"></i> Add</p>
          </div>

        </div>
      </div>
    </section>


    <section class="about section-img-over" id="section_2">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-12" id="" style="display: block; height: 550px; overflow-y: scroll;">
            <table id="example" class="table table-striped table-striped-light datatable">
              <thead>
                <tr class="tr-light tr-top tr-top-light">
                  <!-- <th>Select</th> -->
                  <th>First Name</th>
                  <th>Last Name</th>
                  <!-- <th>Date of Birth</th> -->
                  <th>User Name</th>
                  <th>Role</th>
                  <th>Edit/Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                  <tr class="tr-light">
                    <td>{{ $data->firstname }}</td>
                    <td>{{ $data->lastname }}</td>
                    <!-- <td>20 Jan 1991</td> -->
                    <td>{{ $data->username }}</td>
                    <td>@if($data->role == 'U') User @else Admin @endif</td>
                    <td>
                      <p class="edit-delete">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle-edit{{ $data->id }}"><i class="bi bi-pencil-square" id="volume-icon02"></i></a>
                      <a href="#" onclick="deleteItem({{ $data->id }})"><i class="bi bi-trash-fill" id="volume-icon03"></i></a>
                    </p>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="modal fade" id="add-account" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalToggleLabel"
              tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Manage Account</h5>
                    <button type="button" class="btn-close" onclick="clearAddData()" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group but-form">
                      <label for="firstname" class="label-title">Name</label>
                      <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" name="firstname" placeholder="Enter First Name">
                    </div>
                    <div class="form-group but-form">
                      <label for="lastname" class="label-title">Last Name</label>
                      <input type="text" class="form-control" id="lastname" aria-describedby="emailHelp" name="lastname" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group but-form">
                      <label for="role" class="label-title">Role</label>
                      <select class="form-select" name="role" id="role">
                        <option selected value="A">Admin</option>
                        <option value="U">User</option>
                      </select>
                    </div>
                    <div class="form-group but-form">
                      <label for="username" class="label-title">Username</label>
                      <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Enter User Name" autocomplete="off" required>
                    </div>
                    <div class="form-group but-form">
                      <label for="password" class="label-title">Password</label>
                      <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="password" placeholder="Enter Passsword" autocomplete="off" required>
                    </div>


                    <center><button type="submit" class="btn btn-primary but-sub">Submit</button></center>
                  </form>

                  </div>
                  <!-- <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
        </div> -->
                </div>
              </div>
            </div>



@include('frontend/modal-about-us')


            @foreach($datas as $data)
            <div class="modal fade" id="exampleModalToggle-edit{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
              tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Edit Manage Account</h5>
                    <button type="button" class="btn-close" onclick="location.reload()" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ url("webpanel/manage-account/$data->id") }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group but-form">
                        <label for="efirstname" class="label-title">Name</label>
                        <input type="text" class="form-control" id="efirstname{{ $data->id }}" aria-describedby="emailHelp" name="firstname" value="{{ $data->firstname }}" placeholder="Enter First Name">
                      </div>
                      <div class="form-group but-form">
                        <label for="elastname" class="label-title">Last Name</label>
                        <input type="text" class="form-control" id="elastname{{ $data->id }}" aria-describedby="emailHelp" name="lastname" value="{{ $data->lastname }}" placeholder="Enter Last Name">
                      </div>
                      <div class="form-group but-form">
                        <label for="erole" class="label-title">Role</label>
                        <select class="form-select" name="role" id="erole{{ $data->id }}">
                          <option @if($data->role == 'A') selected @endif value="A">Admin</option>
                          <option @if($data->role == 'U') selected @endif value="U">User</option>
                        </select>
                      </div>
                      <div class="form-group but-form">
                        <label for="eusername" class="label-title">Username</label>
                        <input type="text" class="form-control" id="eusername{{ $data->id }}" aria-describedby="emailHelp" name="username" value="{{ $data->username }}" placeholder="Enter User Name">
                      </div>
                      <div class="form-group but-form">
                        <label for="epassword" class="label-title">Password</label>
                        <input type="password" class="form-control" id="epassword{{ $data->id }}" aria-describedby="emailHelp" name="password" placeholder="Enter Passsword">
                      </div>


                      <center><button type="submit" class="btn btn-primary but-sub">Confirm</button></center>
                    </form>

                  </div>
                  <!-- <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
        </div> -->
                </div>
              </div>
            </div>
            @endforeach


@include('backend/modal-about-us')
@include('backend/modal-setting-project')

@include('backend/script')

<script>
  var fullUrl = window.location.origin + window.location.pathname;

  function clearAddData(){
        $('#add-account')
        .find("input,textarea")
        .val('')
        .end()
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
</script>

</body>

</html>
