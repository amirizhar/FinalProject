    {{-- @include('lecturer.usercss')
    @include('lecturer.navbar') --}}

    <h1>Update Project</h1>
    
    <form action="/edit" method="post">
    @csrf
    
    <input type="hidden" name="id" value="{{$disp['id']}}"><br><br>

    {{-- <label>Project Title</label><br> --}}
    <input type="hidden" name="project_title" value="{{$disp['project_title']}}"><br><br>

    <label>Start Date</label><br>
    <input type="date" name="start_date" value="{{$disp['start_date']}}"><br><br>

    <label>End Date</label><br>
    <input type="date" name="end_date" value="{{$disp['end_date']}}"><br><br>

    <label>Duration</label><br>
    <input type="text" name="duration" value="{{$disp['duration']}}"><br><br>

    <label>Student Name</label><br>
    <input type="text" name="student_name" value="{{$disp['student_name']}}"><br><br>

    {{-- <label>Project Type</label><br>
    <input type="text" name="project_type" value="{{$disp['project_type']}}"><br><br> --}}

    {{-- <label>Supervisor</label><br> --}}
    {{-- <input type="hidden" name="supervisor" value="{{$disp['supervisor']}}"><br><br> --}}

    {{-- <label>Examiner 1</label><br>
    <input type="text" name="examiner_1" value="{{$disp['examiner_1']}}"><br><br> --}}

    {{-- <label>Examiner 2</label><br>
    <input type="text" name="examiner_2" value="{{$disp['examiner_2']}}"><br><br>  --}}

    <label for="project_progress">Project Progress</label><br>
    <select name="project_progress">
    <option value="{{$disp['project_progress']}}">Option</option>
      <option value="Milestone 1">Milestone 1</option>
      <option value="Milestone 2">Milestone 2</option>
      <option value="Final Report">Final Report</option>
    </select><br>

    <label for="project_status">Project Status</label><br>
    <select name="project_status">
    <option value="{{$disp['project_status']}}">Option</option>
      <option value="On track">On Track</option>
      <option value="Delayed">Delayed</option>
      <option value="Extended">Extended</option>
      <option value="Completed">Completed</option>
    </select><br>
    
    <button type="submit">Update</button>
    <button type="reset">reset</button>
    
    </form>
    {{-- @include('lecturer.footer') --}}