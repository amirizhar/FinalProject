<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lecturer</title>
    <!-- Required meta tags -->
    @include('lecturer.usercss')
</head>
<?php
$name = Auth::user()->name;
print_r($name);
?>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        @include('lecturer.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Project under your supervision</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <?php
                                                $name = Auth::user()->name;
                                                ?>
                                                <tr>
                                                    {{-- <th> id </th> --}}
                                                    <th> Title </th>
                                                    <th> Start Date </th>
                                                    <th> End Date </th>
                                                    <th> Duration </th>
                                                    <th> Student </th>
                                                    <th> Type </th>
                                                    <th> Supervisor </th>
                                                    <th> Examiner 1 </th>
                                                    <th> Examiner 2 </th>
                                                    <th> Operation </th>
                                                </tr>
                                            </thead>
                                            @foreach ($senarai as $x)
                                                <tbody>
                                                    @if ($name == $x['supervisor'])
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
                                                            
                                                            printf(' %d month', $months);
                                                            printf("\n");
                                                            ?>
                                                            </td>
                                                            <td> {{ $x['student_name'] }}</td>
                                                            <td> {{ $x['project_type'] }}</td>
                                                            <td> {{ $x['supervisor'] }}</td>
                                                            <td> {{ $x['examiner_1'] }}</td>
                                                            <td> {{ $x['examiner_2'] }}</td>
                                                            <td style="font-weight:bold;"><a
                                                                    href={{ 'upd/' . $x['id'] }}>Update</a></td>
                                                        </tr>
                                                    @else
                                                    @endif
                                            @endforeach

                                            </tbody>
                                        </table>
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
