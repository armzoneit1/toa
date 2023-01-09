<style>
.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 40px 80px;
    background-color: #585858;
    margin: 0;
}
.but-form {
    margin-bottom: 20px;
}
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
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

</style>


<div class="modal fade" id="exampleModalToggle-setting-project-name" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Setting</h5>
        <button type="button" class="btn-close" onclick="clearAddData()" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding: 18px !important;">

        <form id="menuForm" method="post" action="{{url('webpanel/setting/'.$project->id)}}" enctype="multipart/form-data">@csrf
          <div class="form-group but-form">
            <label for="exampleInputEmail1" class="label-title">Project Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{$project->name}}" name="name">
          </div>

          <center><button type="submit" class="btn btn-primary but-sub">Submit</button></center>
        </form>

      </div>
    </div>
  </div>
</div>


