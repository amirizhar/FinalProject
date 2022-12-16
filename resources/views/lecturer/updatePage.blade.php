<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('lecturer.usercss')
</head>

<body>
    <div class="container-scroller">
        @include('lecturer.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Create Project</h4>
                                    <div class="table-responsive">

                                        <div class="container">

                                            <form class="well form-horizontal" action="/edit" method="post" id="contact_form">
                                            @csrf
                                                
                                                <fieldset>

                                                    <div class="float-container">
                                                        <div class="float-child">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Project
                                                            ID</label>
                                                        <div class="col-md-4 inputGroupContainer">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i
                                                                        class="glyphicon glyphicon-user"></i></span>
                                                                <input type="hidden" name="id" value="{{$disp['$id']}}"
                                                                    placeholder="id"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Project
                                                                    Title</label>
                                                                <div class="col-md-4 inputGroupContainer">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-user"></i></span>
                                                                        <input name="project_title"
                                                                            placeholder="Project Title"
                                                                            class="form-control" type="text" value="{{$disp['$project_title']}}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Start Date</label>
                                                                <div class="col-md-4 inputGroupContainer">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-user"></i></span>
                                                                        <input name="start_date" placeholder="Last Name"
                                                                            class="form-control" type="date" value="{{$disp['$start_date']}}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">End Date</label>
                                                                <div class="col-md-4 inputGroupContainer">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-envelope"></i></span>
                                                                        <input name="end_date" placeholder="End Date"
                                                                            class="form-control" type="date" value="{{$disp['$end_date']}}">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- Text input-->

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Duration</label>
                                                                <div class="col-md-4 inputGroupContainer">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-earphone"></i></span>
                                                                        <input name="duration" placeholder="Duration"
                                                                            class="form-control" type="text" value="{{$disp['$duration']}}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Student
                                                                    Name</label>
                                                                <div class="col-md-4 inputGroupContainer">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-home"></i></span>
                                                                        <input name="student_name"
                                                                            placeholder="Student Name"
                                                                            class="form-control" type="text" value="{{$disp['$student_name']}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="float-child">
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Project
                                                                    Type</label>
                                                                <div class="col-md-4 selectContainer">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-list"></i></span>
                                                                        <select name="project_type"
                                                                            class="form-control selectpicker">
                                                                            <option value="">Project Type</option>
                                                                            <option>Development</option>
                                                                            <option>Research</option>
                                                                        </select>
                                                                    </div>
                                                                </div><br>

                                                                <div class="form-group">
                                                                    <label
                                                                        class="col-md-4 control-label">Supervisor</label>
                                                                    <div class="col-md-4 selectContainer">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="glyphicon glyphicon-list"></i></span>
                                                                            <select name="supervisor"
                                                                                class="form-control selectpicker">
                                                                                <option value=" ">Project
                                                                                    Supervisor</option>
                                                                                <option>Alabama</option>
                                                                                <option>Alaska</option>
                                                                                <option>Arizona</option>
                                                                                <option>Arkansas</option>
                                                                                <option>California</option>
                                                                            </select>
                                                                        </div>
                                                                    </div><br>

                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label">Examiner
                                                                            1</label>
                                                                        <div class="col-md-4 selectContainer">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="glyphicon glyphicon-list"></i></span>
                                                                                <select name="examiner_1"
                                                                                    class="form-control selectpicker">
                                                                                    <option value=" ">Examiner 1
                                                                                    </option>
                                                                                    <option>Alabama</option>
                                                                                    <option>Alaska</option>
                                                                                    <option>Arizona</option>
                                                                                    <option>Arkansas</option>
                                                                                    <option>California</option>
                                                                                </select>
                                                                            </div>
                                                                        </div><br>

                                                                        <div class="form-group">
                                                                            <label
                                                                                class="col-md-4 control-label">Examiner
                                                                                2</label>
                                                                            <div class="col-md-4 selectContainer">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i
                                                                                            class="glyphicon glyphicon-list"></i></span>
                                                                                    <select name="examiner_2"
                                                                                        class="form-control selectpicker">
                                                                                        <option value=" ">Examiner
                                                                                            2</option>
                                                                                        <option>Alabama</option>
                                                                                        <option>Alaska</option>
                                                                                        <option>Arizona</option>
                                                                                        <option>Arkansas</option>
                                                                                        <option>California</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Success message -->
                                                                    {{-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> --}}

                                                                    <!-- Button -->
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label"></label>
                                                                        <div class="col-md-4">
                                                                            <button type="submit"
                                                                                class="btn btn-warning">Create <span
                                                                                    class="glyphicon glyphicon-send"></span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div><!-- /.container -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('lecturer.footer')
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    @include('lecturer.userscript')
</body>

</html>
