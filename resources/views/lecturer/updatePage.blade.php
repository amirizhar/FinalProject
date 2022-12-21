
    <nav class="navbar p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <x-app-layout>
  
          </x-app-layout>
        </ul>
  
        
  
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-format-line-spacing"></span>
        </button>
      </div>
    </nav>

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/showLecturer"><img style="height:65px;" src="assets/images/logo-uniten.png" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="/redirect">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Home</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="/updateProject">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Update Project</span>
          </a>
        </li>
        {{-- <li class="nav-item menu-items">
          <a class="nav-link" href="">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Tables</span>
          </a>
        </li> --}}
      </ul>
    </nav>

    <body>
    <center>
        {{-- <h1>Update Project</h1>

        <form action="/edit" method="post">
            @csrf --}}

            {{-- <input type="hidden" name="id" value="{{ $disp['id'] }}"><br><br> --}}

            {{-- <label>Project Title</label><br> --}}
            {{-- <input type="hidden" name="project_title" value="{{ $disp['project_title'] }}"><br><br> --}}

            {{-- <label>Start Date</label><br> --}}
            {{-- <input type="date" name="start_date" value="{{ $disp['start_date'] }}"><br><br> --}}

            {{-- <label>End Date</label><br>
            <input type="date" name="end_date" value="{{ $disp['end_date'] }}"><br><br> --}}

            {{-- <label>Duration</label><br>
            <input type="text" name="duration" value="{{ $disp['duration'] }}"><br><br> --}}

            {{-- <label>Student Name</label><br>
            <input type="text" name="student_name" value="{{ $disp['student_name'] }}"><br><br> --}}

            {{-- <label>Project Type</label><br>
    <input type="text" name="project_type" value="{{$disp['project_type']}}"><br><br> --}}

            {{-- <label>Supervisor</label><br> --}}
            {{-- <input type="hidden" name="supervisor" value="{{$disp['supervisor']}}"><br><br> --}}

            {{-- <label>Examiner 1</label><br>
    <input type="text" name="examiner_1" value="{{$disp['examiner_1']}}"><br><br> --}}

            {{-- <label>Examiner 2</label><br>
    <input type="text" name="examiner_2" value="{{$disp['examiner_2']}}"><br><br>  --}}

            {{-- <label for="project_progress">Project Progress</label><br>
            <select name="project_progress">
                <option value="{{ $disp['project_progress'] }}">Option</option>
                <option value="Milestone 1">Milestone 1</option>
                <option value="Milestone 2">Milestone 2</option>
                <option value="Final Report">Final Report</option>
            </select><br> --}}

            {{-- <label for="project_status">Project Status</label><br>
            <select name="project_status">
                <option value="{{ $disp['project_status'] }}">Option</option>
                <option value="On track">On Track</option>
                <option value="Delayed">Delayed</option>
                <option value="Extended">Extended</option>
                <option value="Completed">Completed</option>
            </select><br> --}}

            {{-- <button type="submit">Update</button>
            <button type="reset">reset</button> --}}

        </form>
    </center>
    </body>






    {{-- ------------------------------------------------ ------------------------------------------------ ------------------------------------------------ --}}





    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}
    
    input[type=text], select, textarea {
      width: 50%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }
    
    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    </style>
    </head>
    <center>
    <body>

      @include('lecturer.navbar')
    
    <h3>Update Project</h3>
    
    <div class="container">
      <form action="/edit" method="POST">
        @csrf

        <input type="hidden" id="fname" value="{{ $disp['id'] }}" name="id" >

        <label for="project_title">Project Title</label><br>
        <input type="text" id="project_title" name="project_title" value="{{ $disp['project_title'] }}" placeholder="Project Title" disabled><br>

        <label for="start_date">Start Date</label><br>
        <input type="date" id="start_date" name="start_date" value="{{ $disp['start_date'] }}"><br><br>

        <label for="end_date">End Date</label><br>
        <input type="date" id="end_date" name="end_date" value="{{ $disp['end_date'] }}"><br>
    
        <label for="project_progress">Project Progress</label><br>
        <select name="project_progress">
            <option value="{{ $disp['project_progress'] }}">Option</option>
            <option value="Milestone 1">Milestone 1</option>
            <option value="Milestone 2">Milestone 2</option>
            <option value="Final Report">Final Report</option>
        </select><br>

        <label value="{{ $disp['project_status'] }}" for="project_status">Project Status</label><br>
        <select name="project_status">
            <option value="{{ $disp['project_status'] }}">Option</option>
            <option value="On track">On Track</option>
            <option value="Delayed">Delayed</option>
            <option value="Extended">Extended</option>
            <option value="Completed">Completed</option>
        </select><br>
    
        <input type="submit" value="Submit">
      </form>
    </div>

    @include('lecturer.userscript')
    @include('lecturer.footer')
    </body>
    </center>
    </html>
    