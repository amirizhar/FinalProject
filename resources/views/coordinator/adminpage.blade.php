    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        @include('coordinator.admincss')
        <title> Coordinator</title>
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
                                        <h4 class="card-title">List of Project</h4>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        {{-- <th> id </th> --}}
                                                        <th> Title </th>
                                                        <th> Start Date </th>
                                                        <th> End Date </th>
                                                        <th> Duration </th>
                                                        <th> Student </th>
                                                        <th> Type </th>
                                                        <th> Progress </th>
                                                        <th> Status </th>
                                                        <th> Supervisor </th>
                                                        <th> Examiner 1 </th>
                                                        <th> Examiner 2 </th>
                                                    </tr>
                                                </thead>
                                                @foreach ($senarai as $x)
                                                    <tbody>
                                                        <tr>
                                                            {{-- <td> {{ $x['id'] }}</td> --}}
                                                            <td> {{ $x['project_title'] }}</td>
                                                            <td> {{ $x['start_date'] }}</td>
                                                            <td> {{ $x['end_date'] }}</td>
                                                            <td>
                                                            <?php
                                                            $sdate = $x['start_date'];
                                                            $edate = $x['end_date'];
                                                            
                                                            $date_diff = abs(strtotime($edate) - strtotime($sdate));
                                                            
                                                            $years = floor($date_diff / (365 * 60 * 60 * 24));
                                                            $months = floor(($date_diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                                            $days = floor(($date_diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                                            
                                                            printf(' %d month',  $months);
                                                            printf("\n");
                                                            ?>
                                                            </td>
                                                            <td> {{ $x['student_name'] }}</td>
                                                            <td> {{ $x['project_type'] }}</td>
                                                            <td> {{ $x['project_progress'] }}</td>
                                                            <td> {{ $x['project_status'] }}</td>
                                                            <td> {{ $x['supervisor'] }}</td>
                                                            <td> {{ $x['examiner_1'] }}</td>
                                                            <td> {{ $x['examiner_2'] }}</td>
                                                        </tr>
                                                @endforeach

                                                </tbody>
                                            </table><br><br>
                                            <span>
                                                {{ $senarai->links() }}
                                            </span>
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
