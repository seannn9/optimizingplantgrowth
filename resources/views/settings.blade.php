<x-app-layout>


    <div class="wrapper ">

        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header senseval">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Settings</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Settings</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"> Light Settings</h3>
                                    <br>
                                    @if($settings->autolight==0)
                                        <form action="" method="POST">
                                            @csrf
                                            <input type="hidden" name="autolight" value="1">
                                            <button type="submit" class="btn btn-success">Turn On Automatic Mode
                                            </button>
                                            Currently :
                                            <button type="button" class="btn btn-danger">Manual Mode</button>
                                        </form>
                                    @else
                                        <form action="" method="POST">
                                            @csrf
                                            <input type="hidden" name="autolight" value="0">
                                            <button type="submit" class="btn btn-warning">Switch to Manual Mode</button>
                                            Currently :
                                            <button type="button" class="btn btn-success">Automatic</button>
                                        </form>
                                    @endif


                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST" action="">
                                    @csrf
                                    <div class="card-body">


                                        <div class="form-group">
                                            <label for="lighton">Turn ON at:</label>
                                            <input type="time" step="any" class="form-control" name="lighton"
                                                   id="lighton" value="{{$settings->lighton}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="lightoff">Turn OFF at:</label>
                                            <input type="time" class="form-control" name="lightoff"
                                                   id="lightoff" step="any" value="{{$settings->lightoff}}">
                                        </div>


                                    </div>
                                    <!-- /.card-body -->
                                    @if($settings->autolight==1)
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                        @else
                                        <div class="card-footer">
                                            Cannot Save on Manual
                                        </div>
                                    @endif
                                </form>
                                <div class="card-header">
                                    <h3 class="card-title"> Manual Controls</h3>
                                </div>

                                <div class="card-footer">

                                    <div class="row">
                                        <div class="col-12">
                                            @if($settings->lightstatus==0)
                                                <form action="" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="lightstatus" value="1">
                                                    <button type="submit" {{ !$settings->autolight ?  '' : 'disabled'}} class="btn btn-success">Turn On Light</button>
                                                    Currently :
                                                    <button type="button" class="btn btn-danger">OFF</button>
                                                </form>
                                            @else
                                                <form action="" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="lightstatus" value="0">
                                                    <button type="submit" {{ !$settings->autolight ?  '' : 'disabled'}} class="btn btn-danger">Turn OFF Light</button>
                                                    Currently :
                                                    <button type="button" class="btn btn-success">ON</button>
                                                </form>
                                            @endif

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"> Sprinkler Settings</h3>
                                    <br>
                                    @if($settings->autosprinkler==0)
                                        <form action="" method="POST">
                                            @csrf
                                            <input type="hidden" name="autosprinkler" value="1">
                                            <button type="submit" class="btn btn-success">Turn On Automatic Mode
                                            </button>
                                            Currently :
                                            <button type="button" class="btn btn-danger">Manual Mode</button>
                                        </form>
                                    @else
                                        <form action="" method="POST">
                                            @csrf
                                            <input type="hidden" name="autosprinkler" value="0">
                                            <button type="submit" class="btn btn-warning">Switch to Manual Mode</button>
                                            Currently :
                                            <button type="button" class="btn btn-success">Automatic</button>
                                        </form>
                                    @endif

                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="lightturnonat">Turn ON at:</label>
                                            <input type="time" class="form-control" name="sprinkleron"
                                                   id="sprinkleron" min="" value="{{$settings->sprinkleron}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="humiditybelow">Or Humidity Falls Below:</label>
                                            <input type="number" class="form-control" name="humiditybelow"
                                                   id="humiditybelow" value="{{$settings->humiditybelow}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="moisturebelow">Or Moisture Falls Below:</label>
                                            <input type="number" class="form-control" name="moisturebelow"
                                                   id="moisturebelow" value="{{$settings->moisturebelow}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="sprinkleroff">Turn OFF at:</label>
                                            <input type="time" class="form-control" name="sprinkleroff"
                                                   id="sprinkleroff" value="{{$settings->sprinkleroff}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="humidityabove ">OR When Humidity Goes Above:</label>
                                            <input type="number" class="form-control" name="humidityabove"
                                                   id="humidityabove" value="{{$settings->humidityabove}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="moistureabove">Or When Moisture Goes Above:</label>
                                            <input type="number" class="form-control" name="moistureabove"
                                                   id="moistureabove" value="{{$settings->moistureabove}}">
                                        </div>
                                    

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">

                                        <button type="submit" {{$settings->autosprinkler ? '' : 'disabled' }} class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                                <div class="card-header">
                                    <h3 class="card-title"> Manual Controls</h3>
                                </div>

                                <div class="card-footer">

                                    <div class="row">
                                        <div class="col-12">
                                            @if($settings->sprinklerstatus==0)
                                                <form action="" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="sprinklerstatus" value="1">
                                                    <button type="submit" {{!$settings->autosprinkler ? '' : 'disabled' }} class="btn btn-success">Turn On Sprinkler
                                                    </button>
                                                    Currently :
                                                    <button type="button" class="btn btn-danger">OFF</button>
                                                </form>
                                            @else
                                                <form action="" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="sprinklerstatus" value="0">
                                                    <button type="submit" {{!$settings->autosprinkler ? '' : 'disabled' }} class="btn btn-danger">Turn OFF Sprinkler
                                                    </button>
                                                    Currently :
                                                    <button type="button" class="btn btn-success">ON</button>
                                                </form>
                                            @endif


                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"> Fan Settings</h3>
                                    <br>
                                    @if($settings->autofan==0)
                                        <form action="" method="POST">
                                            @csrf
                                            <input type="hidden" name="autofan" value="1">
                                            <button type="submit" class="btn btn-success">Turn On Automatic Mode
                                            </button>
                                            Currently :
                                            <button type="button" class="btn btn-danger">Manual Mode</button>
                                        </form>
                                    @else
                                        <form action="" method="POST">
                                            @csrf
                                            <input type="hidden" name="autofan" value="0">
                                            <button type="submit" class="btn btn-warning">Switch to Manual Mode</button>
                                            Currently :
                                            <button type="button" class="btn btn-success">Automatic</button>
                                        </form>
                                    @endif

                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="tempbelow">Turn ON at: when Temperature Falls Below:</label>
                                            <input type="number" step="any" class="form-control" name="tempbelow"
                                                   id="tempbelow" value="{{$settings->tempbelow}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tempabove ">Turn Off When Temperature Goes Above:</label>
                                            <input type="number"   step="any" class="form-control" name="tempabove"
                                                   id="tempabove" value="{{$settings->tempabove}}">
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">

                                        <button type="submit" {{$settings->autofan ? '' : 'disabled' }} class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                                <div class="card-header">
                                    <h3 class="card-title"> Manual Controls</h3>
                                </div>

                                <div class="card-footer">

                                    <div class="row">
                                        <div class="col-12">
                                            @if($settings->fanstatus==0)
                                                <form action="" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="fanstatus" value="1">
                                                    <button type="submit" {{!$settings->autofan ? '' : 'disabled' }} class="btn btn-success">Turn On Fan
                                                    </button>
                                                    Currently :
                                                    <button type="button" class="btn btn-danger">OFF</button>
                                                </form>
                                            @else
                                                <form action="" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="fanstatus" value="0">
                                                    <button type="submit" {{!$settings->autofan ? '' : 'disabled' }} class="btn btn-danger">Turn OFF Fan
                                                    </button>
                                                    Currently :
                                                    <button type="button" class="btn btn-success">ON</button>
                                                </form>
                                            @endif


                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>


</x-app-layout>
