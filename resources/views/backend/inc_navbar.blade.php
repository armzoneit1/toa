<nav class="navbar navbar-expand-lg">
  <div class="container">

    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <a href="{{ url('webpanel/overview') }}" class="navbar-brand mx-auto mx-lg-0">
      <!-- <i class="bi-bullseye brand-logo"></i>
                  <span class="brand-text">Leadership <br> Event</span> -->
      <img class="logo-size" src="{{ asset('frontend/images/logo_toa.png') }}">
    </a>
    <ul class="navbar-nav ms-auto" id="menu-desk">
      <li class="nav-item">
        <a class="nav-link click-scroll @if($tab == 'overview') active @endif" href="{{ url('webpanel/overview') }}">Overview</a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link click-scroll" href="#section_2">Sound Control</a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link click-scroll @if($tab == 'pre-record') active @endif" href="{{ url('webpanel/pre-record') }}">Pre-Record</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link click-scroll" href="layout-plan.php">Layout Plan</a>
      </li> -->

      <!-- <li class="nav-item">
                      <a class="nav-link click-scroll" href="#section_4">Setting</a>
                  </li> -->

    </ul>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="setting-drop">
              <!-- <span class="navbar-toggler-icon"></span> -->
              {{ $project->name }}<i class="bi bi-three-dots-vertical" id="but-dots"></i>
          </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @if($tab == 'overview' || ($tab == 'pre-record'))
      <li class="nav-item">
          <a class="nav-link click-scroll title-prj-name">{{ $project->name }}</i></a>
        </li>
        @endif
        <!-- <li class="nav-item">
          <a class="nav-link click-scroll" href="#section_1"><i class="bi bi-gear-fill"></i></a>
        </li> -->
        <div class="dropdown">
<!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Dropdown button
</button> -->
<li class="nav-item" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <a class="nav-link click-scroll click-set" href="javascript:void(0);" onclick="myFunction()"><i class="bi bi-gear-fill"></i></a>
        </li>

<div class="dropdown-menu head-menu" aria-labelledby="dropdownMenuButton" id="myLinks">
  <li class="dropdown-item">Theme   
    <div class="container2">
      <label class="switch2">
        <input type="checkbox" class="hidden" id="audio_setting2" {{ (!empty(Auth::check())?(Auth::user()->theme=='B'?'checked':''):'') }}>
        <div class="slider slider-light change_theme" style="cursor: pointer" id="slider">Light</div>
      </label>
    </div>  
  </li>
  <a class="dropdown-item" href="{{ url('webpanel/manage-account') }}">Manage Account</a>
  <a class="dropdown-item" href="{{ url('webpanel/layout-plan') }}">Layout Plan</a>
  <a class="dropdown-item" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#exampleModalToggle-setting-project-name">Setting</a>
  <a class="dropdown-item" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#exampleModalToggle3">About</a>
  <a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a>
</div>
</div>


        <!-- <li class="nav-item">
                          <a class="nav-link click-scroll" href="#section_2">About</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="#section_3">Speakers</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="#section_4">Schedules</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="#section_5">Pricing</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="#section_6">Venue</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="#section_7">Contact</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link custom-btn btn d-none d-lg-block" href="#">Buy Tickets</a>
                      </li> -->
      </ul>
      <div>

      </div>
</nav>
