<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("coordinator.admincss")
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      @include("coordinator.navbar")

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

                    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
                        <fieldset>
                        
                        <!-- Text input-->
                        
                        <div class="form-group">
                          <label class="col-md-4 control-label">Project Title</label>  
                          <div class="col-md-4 inputGroupContainer">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input  name="project_title" placeholder="Project Title" class="form-control"  type="text">
                            </div>
                          </div>
                        </div>
                        
                        <!-- Text input-->
                        
                        <div class="form-group">
                          <label class="col-md-4 control-label" >Start Date</label> 
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input name="last_name" placeholder="Last Name" class="form-control"  type="date">
                            </div>
                          </div>
                        </div>
                        
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label">End Date</label>  
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input name="end_date" placeholder="End Date" class="form-control"  type="date">
                            </div>
                          </div>
                        </div>
                        
                        
                        <!-- Text input-->
                               
                        <div class="form-group">
                          <label class="col-md-4 control-label">Duration</label>  
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                          <input name="duration" placeholder="Duration" class="form-control" type="text">
                            </div>
                          </div>
                        </div>
                        
                        <!-- Text input-->
                              
                        <div class="form-group">
                          <label class="col-md-4 control-label">Student Name</label>  
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                          <input name="student_name" placeholder="Student Name" class="form-control" type="text">
                            </div>
                          </div>
                        </div>
                           
                                                <div class="form-group"> 
                                                    <label class="col-md-4 control-label">Project Type</label>
                                                      <div class="col-md-4 selectContainer">
                                                      <div class="input-group">
                                                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                      <select name="state" class="form-control selectpicker" >
                                                        <option value=" " >Project Type</option>
                                                        <option>Development</option>
                                                        <option>Research</option>
                                                      </select>
                                                    </div>
                                                  </div><br>
                           
                                                <div class="form-group"> 
                                                    <label class="col-md-4 control-label">Supervisor</label>
                                                      <div class="col-md-4 selectContainer">
                                                      <div class="input-group">
                                                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                      <select name="state" class="form-control selectpicker" >
                                                        <option value=" " >Project Supervisor</option>
                                                        <option>Alabama</option>
                                                        <option>Alaska</option>
                                                        <option >Arizona</option>
                                                        <option >Arkansas</option>
                                                        <option >California</option>
                                                      </select>
                                                    </div>
                                                  </div><br>
                        
                                                  <div class="form-group"> 
                                                    <label class="col-md-4 control-label">Examiner 1</label>
                                                      <div class="col-md-4 selectContainer">
                                                      <div class="input-group">
                                                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                      <select name="state" class="form-control selectpicker" >
                                                        <option value=" " >Examiner 1</option>
                                                        <option>Alabama</option>
                                                        <option>Alaska</option>
                                                        <option >Arizona</option>
                                                        <option >Arkansas</option>
                                                        <option >California</option>
                                                      </select>
                                                    </div>
                                                  </div><br>

                                                  <div class="form-group"> 
                                                    <label class="col-md-4 control-label">Examiner 2</label>
                                                      <div class="col-md-4 selectContainer">
                                                      <div class="input-group">
                                                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                      <select name="state" class="form-control selectpicker" >
                                                        <option value=" " >Examiner 2</option>
                                                        <option>Alabama</option>
                                                        <option>Alaska</option>
                                                        <option >Arizona</option>
                                                        <option >Arkansas</option>
                                                        <option >California</option>
                                                      </select>
                                                    </div>
                                                  </div>

                                                </div>             
                        
                        <!-- Success message -->
                        {{-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> --}}
                        
                        <!-- Button -->
                        <div class="form-group">
                          <label class="col-md-4 control-label"></label>
                          <div class="col-md-4">
                            <button type="submit" class="btn btn-warning" >Create <span class="glyphicon glyphicon-send"></span></button>
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
          @include("coordinator.footer")
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include("coordinator.adminscript")
  </body>
</html>