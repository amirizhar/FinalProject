 <!DOCTYPE html>
 <html lang="en">

 <title>Lecturer</title>

 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     @include('lecturer.updatePageCss')
     @include('lecturer.usercss')
 </head>

 <body>

     <center>

         <div class="container">

             <h2>Update Project</h2>
             <form action="/edit" method="POST">
                 @csrf

                 <input type="hidden" id="fname" value="{{ $disp['id'] }}" name="id">

                 <label for="project_title">Project Title</label><br>
                 <input type="text" id="project_title" name="project_title" value="{{ $disp['project_title'] }}"
                     placeholder="Project Title" disabled><br>

                 <label for="student_name">Student Name</label><br>
                 <input type="text" id="student_name" name="student_name" value="{{ $disp['student_name'] }}"
                 disabled><br>

                 <label for="start_date">Start Date</label><br>
                 <input type="date" id="start_date" name="start_date" value="{{ $disp['start_date'] }}"><br><br>

                 <label for="end_date">End Date</label><br>
                 <input type="date" id="end_date" name="end_date" value="{{ $disp['end_date'] }}"><br>

                 <br><label for="project_progress">Project Progress</label><br>
                 <select name="project_progress">
                     <option value="{{  $disp['project_progress']}}">{{ $disp['project_progress'] }}</option>
                     <option value=" ">-Select-</option>
                     <option value="Milestone 1">Milestone 1</option>
                     <option value="Milestone 2">Milestone 2</option>
                     <option value="Final Report">Final Report</option>
                 </select><br><br>

                 <label value="{{ $disp['project_status'] }}" for="project_status">Project Status</label><br>
                 <select name="project_status">
                     <option value="{{ $disp['project_status'] }}">{{ $disp['project_status'] }}</option>
                     <option value=" ">-Select-</option>
                     <option value="On track">On Track</option>
                     <option value="Delayed">Delayed</option>
                     <option value="Extended">Extended</option>
                     <option value="Completed">Completed</option>
                 </select><br><br><br>

                 <div class="col-md-4">
                     <button><a type="submit" class="button6">Update</a></button>
                     <button><a href="/updateProject" type="submit" class="button6">Project List</a></button>
                 </div>
             </form>
         </div><br><br><br><br>


 </body>
 </center>

 </html>


 {{-- -------------------------------------------------------------------------------------------------------------------------------------------- --}}
