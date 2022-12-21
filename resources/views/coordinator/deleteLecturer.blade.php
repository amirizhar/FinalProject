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
                                    <h4 class="card-title">List of Lecturer</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> id </th>
                                                    <th> Name </th>
                                                    <th> Email </th>
                                                    <th> Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($list as $x)
                                                <tbody>
                                                    <tr>
                                                        <td> {{ $x['id'] }}</td>
                                                        <td> {{ $x['name'] }}</td>
                                                        <td> {{ $x['email'] }}</td>
                                                        <td><a href={{ "del/".$x['id']}}>Remove Account</a> </td>
                                                    </tr>
                                            @endforeach

                                            </tbody>
                                        </table><br><br>
                                        <span>
                                            {{ $list->links() }}
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
