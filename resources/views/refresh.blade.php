<div class="content-wrapper bg-light">
    <!-- Header Section -->
    <div class="content-header bg-white shadow-sm">
        <div class="container-fluid">
            <div class="row align-items-center py-3">
                <div class="col-sm-6">
                    <h1 class="m-0 d-flex align-items-center">
                        <i class="fas fa-tachometer-alt mr-3 text-primary"></i>
                        Dashboard
                    </h1>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent m-0 p-0 justify-content-end">
                            <li class="breadcrumb-item"><a href="#" class="text-primary">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @php
        use App\Models\sensors;
        $sensorresult = sensors::class::latest('id')->first();

        function getBoxClass($temp) {
            if ($temp > 35) return 'bg-gradient-danger';
            if ($temp > 25) return 'bg-gradient-warning';
            return 'bg-gradient-success';
        }

        function getMoistureClass($moisture) {
            if ($moisture > 75) return 'progress-bar-success';
            if ($moisture > 50) return 'progress-bar-warning';
            return 'progress-bar-danger';
        }
    @endphp

    <!-- Main content -->
    <section class="content py-4">
        <div class="container-fluid">
            <!-- Temperature & Humidity Cards -->
            <div class="row mb-4">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-md-4 col-lg-2 mb-3">
                        <div class="card {{ getBoxClass($sensorresult['t' . $i]) }} h-100 border-0 shadow-sm hover-shadow">
                            <div class="card-body text-white">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="sensor-icon mb-3">
                                        <i class="fas fa-thermometer-half fa-2x"></i>
                                    </div>
                                    <div class="sensor-readings text-center">
                                        <div class="temperature mb-2">
                                            <h3 class="mb-0">{{$sensorresult['t' . $i]}}°C</h3>
                                            <small>Temperature</small>
                                        </div>
                                        <div class="humidity">
                                            <h3 class="mb-0">{{$sensorresult['h' . $i]}}%</h3>
                                            <small>Humidity</small>
                                        </div>
                                    </div>
                                    <div class="sensor-label mt-2">
                                        <span class="badge badge-light">Sensor {{ $i }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Soil Moisture Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-bottom">
                            <h3 class="card-title d-flex align-items-center">
                                <i class="fas fa-water text-primary mr-2"></i>
                                Soil Moisture Levels
                            </h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 80px">Plant</th>
                                            <th>Moisture Level</th>
                                            <th class="text-center" style="width: 100px">Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <tr>
                                                <td class="text-center">
                                                    <span class="badge badge-pill badge-light">
                                                        Plant {{ $i }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="progress" style="height: 25px;">
                                                        <div class="progress-bar progress-bar-striped {{ getMoistureClass($sensorresult['sm'.$i]) }}" 
                                                             role="progressbar"
                                                             style="width: {{$sensorresult['sm'.$i]}}%"
                                                             aria-valuenow="{{$sensorresult['sm'.$i]}}"
                                                             aria-valuemin="0"
                                                             aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge badge-pill {{ getMoistureClass($sensorresult['sm'.$i]) === 'progress-bar-success' ? 'badge-success' : (getMoistureClass($sensorresult['sm'.$i]) === 'progress-bar-warning' ? 'badge-warning' : 'badge-danger') }}">
                                                        {{$sensorresult['sm'.$i]}}%
                                                    </span>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.hover-shadow {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.hover-shadow:hover {
    transform: translateY(-2px);
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15) !important;
}

.sensor-icon {
    background: rgba(255,255,255,0.2);
    padding: 1rem;
    border-radius: 50%;
}

.progress {
    border-radius: 50px;
    background-color: #f8f9fa;
}

.progress-bar {
    transition: width 0.3s ease;
}

.progress-bar-success {
    background-color: #28a745;
}

.progress-bar-warning {
    background-color: #ffc107;
}

.progress-bar-danger {
    background-color: #dc3545;
}

.badge {
    padding: 0.5em 1em;
    font-weight: 500;
}

.table th {
    border-top: none;
    text-transform: uppercase;
    font-size: 0.875rem;
    font-weight: 600;
    color: #6c757d;
}

.table td {
    vertical-align: middle;
}

.breadcrumb-item + .breadcrumb-item::before {
    color: #6c757d;
}

.card-header {
    padding: 1rem 1.5rem;
}

@media (max-width: 768px) {
    .col-md-4 {
        margin-bottom: 1rem;
    }
}
</style>

<!-- Make sure these are in your layout file -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
