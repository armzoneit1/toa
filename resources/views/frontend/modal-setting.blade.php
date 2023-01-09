<div class="modal fade" id="setting" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-main-mb">
      <div class="modal-content">
        <div class="modal-body pop-set-mb">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-12" id="seeting-col">
                <a class="dropdown-item drop-setting">Theme   <div class="container2">
                  <!-- <label class="switch2">
                    <input type="checkbox" class="hidden" id="audio_setting2" checked>
                    <div class="slider"></div>  
                  </label> -->
                  <label class="switch2">
                    <input type="checkbox" class="hidden" id="audio_setting2" {{ ( !empty(Auth::check()) ? (Auth::user()->theme == 'B' ? 'checked' : '') : '')  }}>
                    <div class="slider slider-light change_theme" id="slider">Light</div>  
                  </label>
                </div>  </a>
                <a class="dropdown-item" href="{{ url('/logout') }}">Log out</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>