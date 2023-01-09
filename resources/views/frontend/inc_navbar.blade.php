<nav class="navbar navbar-expand-lg">
    <div class="container">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a href="{{ url('home') }}" class="navbar-brand mx-auto mx-lg-0">
        <!-- <i class="bi-bullseye brand-logo"></i>
                    <span class="brand-text">Leadership <br> Event</span> -->
        <img class="logo-size" src="{{ asset('frontend/images/logo_toa.png') }}">
      </a>
      <ul class="navbar-nav ms-auto" id="menu-desk">
        <li class="nav-item">
          <a class="nav-link click-scroll" href="{{ url('overview') }}">Overview</a>
        </li>


        <li class="nav-item">
          <a class="nav-link click-scroll" href="{{ url('pre-record') }}">Pre-Record</a>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link click-scroll" href="layout-plan.php">Layout Plan</a>
        </li> -->

        <!-- <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Setting</a>
                    </li> -->

      </ul>

      <!-- <a class="nav-link custom-btn btn d-lg-none" href="#">Buy Tickets</a> -->

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <!-- <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_1"><i class="bi bi-gear-fill"></i></a>
          </li> -->

          <div class="dropdown">
            <li class="nav-item" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <a class="nav-link click-scroll" href="javascript:void(0);" id="dropbtn" onclick="myFunction()"><i class="bi bi-gear-fill"></i></a>
            </li>

            <div class="dropdown-menu head-menu" aria-labelledby="dropdownMenuButton" id="myLinks">
              <a class="dropdown-item">Theme   <div class="container2">
              <label class="switch2">
                <input type="checkbox" class="hidden" id="audio_setting2" {{ ( !empty(Auth::check()) ? (Auth::user()->theme == 'B' ? 'checked' : '') : '')  }}>
                <div class="slider slider-light change_theme" id="slider">Light</div>
              </label>
              </div>  </a>
              <a class="dropdown-item" href="{{ url('manage-account') }}">Manage Account</a>
              <a class="dropdown-item" href="{{ url('layout-plan') }}">Layout Plan</a>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalToggle3">About</a>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalToggle-setting-project-name">Setting</a>
              <a class="dropdown-item" href="{{ url('home') }}">Log Out</a>
            </div>
           </div>
        </ul>
      <div>

    </div>
  </nav>
