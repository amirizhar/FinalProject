<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('coordinator.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('coordinator.navbar')

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

                                            <form class="well form-horizontal" action="/createProject" method="post"
                                                id="contact_form">
                                                @csrf

                                                <fieldset>

                                                    <div class="float-container">
                                                        <div class="float-child">

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Project
                                                                    Title</label>
                                                                <div class="col-md-4 inputGroupContainer">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-user"></i></span>
                                                                        <input
                                                                            style='color:black; background-color:azure'
                                                                            name="project_title"
                                                                            placeholder="Project Title"
                                                                            class="form-control" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- Text input-->

                                                            {{-- <div class="form-group">
                                                                <label class="col-md-4 control-label">Duration</label>
                                                                <div class="col-md-4 inputGroupContainer">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-list"></i></span>
                                                                        <select
                                                                            style='color:black; background-color:azure'
                                                                            name="duration"
                                                                            class="form-control selectpicker">
                                                                            <option value="">Select</option>
                                                                            <option>1 Months</option>
                                                                            <option>2 Months</option>
                                                                            <option>3 Months</option>
                                                                            <option>4 Months</option>
                                                                            <option>5 Months</option>
                                                                            <option>6 Months</option>
                                                                            <option>7 Months</option>
                                                                            <option>8 Months</option>
                                                                            <option>9 Months</option>
                                                                            <option>10 Months</option>
                                                                            <option>11 Months</option>
                                                                            <option>12 Months</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                            <!-- Text input-->

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Student
                                                                    Name</label>
                                                                <div class="col-md-4 inputGroupContainer">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-home"></i></span>
                                                                        <input
                                                                            style='color:black; background-color:azure'
                                                                            name="student_name"
                                                                            placeholder="Student Name"
                                                                            class="form-control" type="text">
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
                                                                        <select
                                                                            style='color:black; background-color:azure'
                                                                            name="project_type"
                                                                            class="form-control selectpicker">
                                                                            <option value="">Select</option>
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

                                                                            <select
                                                                                style='color:black; background-color:azure'
                                                                                name="supervisor"
                                                                                class="form-control selectpicker">

                                                                                <option value=" ">Select</option>
                                                                                <@foreach ($senarai as $x)
                                                                                    <option>{{ $x['name'] }}</option>
                                                                                    @endforeach

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
                                                                                <select
                                                                                    style='color:black; background-color:azure'
                                                                                    name="examiner_1"
                                                                                    class="form-control selectpicker">
                                                                                    <option value=" ">Select
                                                                                    </option>
                                                                                    <@foreach ($senarai as $x)
                                                                                        <option>{{ $x['name'] }}
                                                                                        </option>
                                                                                        @endforeach
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
                                                                                    <select
                                                                                        style='color:black; background-color:azure'
                                                                                        name="examiner_2"
                                                                                        class="form-control selectpicker">
                                                                                        <option value=" ">Select
                                                                                        </option>
                                                                                        <@foreach ($senarai as $x)
                                                                                            <option>{{ $x['name'] }}
                                                                                            </option>
                                                                                            @endforeach
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
    @include('coordinator.footer')
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    @include('coordinator.adminscript')
</body>

</html>
