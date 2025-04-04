<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header senseval">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @php
        use App\Models\sensors;
        $sensorresult = sensors::class::latest('id')->first();
    @endphp

        <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-2">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$sensorresult['t1']}}°c | {{$sensorresult['h1']}}%</h3>

                            <p>Temp | Humidity 1 </p>
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$sensorresult['t2']}}°c | {{$sensorresult['h2']}}%</h3>

                            <p>Temp | Humidity 2 </p>
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$sensorresult['t3']}}°c | {{$sensorresult['h3']}}%</h3>

                            <p>Temp | Humidity 3 </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$sensorresult['t4']}}°c | {{$sensorresult['h4']}}%</h3>

                            <p>Temp | Humidity 4 </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$sensorresult['t5']}}°c | {{$sensorresult['h5']}}%</h3>

                            <p>Temp | Humidity 5 </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$sensorresult['t6']}}°c | {{$sensorresult['h6']}}%</h3>

                            <p>Temp | Humidity 6 </p>
                        </div>
                    </div>
                </div>

                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Soil Moisture</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">Plant</th>
                                    <th>Moisture %</th>
                                    <th style="width: 40px">%</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm1']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm1']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm2']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm2']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm3']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm3']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm4']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm4']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm5']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm5']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm6']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm6']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm7']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm7']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm7']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm7']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm8']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm8']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm9']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm9']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm10']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm10']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm11']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm11']}}%</span></td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: {{$sensorresult['sm12']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">{{$sensorresult['sm12']}}%</span></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
