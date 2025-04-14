<x-app-layout>
    <div class="content-wrapper bg-light">
        <!-- Header Section -->
        <div class="content-header bg-white shadow-sm">
            <div class="container-fluid">
                <div class="row align-items-center py-3">
                    <div class="col-sm-6">
                        <h1 class="m-0 d-flex align-items-center">
                            <i class="fas fa-cogs mr-3 text-primary"></i>
                            System Settings
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent m-0 p-0 justify-content-end">
                                <li class="breadcrumb-item"><a href="dashboard" class="text-primary">Home</a></li>
                                <li class="breadcrumb-item active">Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <section class="content py-4">
            <div class="container-fluid">
                <!-- Control Cards Row -->
                <div class="row">
                    <!-- Light Control Card -->
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">
                                    <i class="fas fa-lightbulb text-warning mr-2"></i>
                                    Light Control
                                </h5>
                                <span class="badge badge-pill badge-{{ $settings->autolight ? 'success' : 'secondary' }}">
                                    {{ $settings->autolight ? 'Auto Mode' : 'Manual Mode' }}
                                </span>
                            </div>
                            
                            <div class="card-body">
                                <!-- Mode Toggle -->
                                <form action="" method="POST" class="mb-4">
                                    @csrf
                                    <input type="hidden" name="autolight" value="{{ $settings->autolight ? '0' : '1' }}">
                                    <button type="submit" 
                                            class="btn btn-{{ $settings->autolight ? 'warning' : 'success' }} btn-block">
                                        <i class="fas {{ $settings->autolight ? 'fa-hand-paper' : 'fa-magic' }} mr-2"></i>
                                        {{ $settings->autolight ? 'Switch to Manual Mode' : 'Enable Auto Mode' }}
                                    </button>
                                </form>

                                <!-- Auto Settings -->
                                <div class="settings-group" {{ !$settings->autolight ? 'style=opacity:0.5' : '' }}>
                                    <h6 class="text-muted mb-3">Schedule Settings</h6>
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Turn ON</label>
                                                    <input type="time" class="form-control" name="lighton"
                                                           value="{{ $settings->lighton }}"
                                                           {{ !$settings->autolight ? 'disabled' : '' }}>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Turn OFF</label>
                                                    <input type="time" class="form-control" name="lightoff"
                                                           value="{{ $settings->lightoff }}"
                                                           {{ !$settings->autolight ? 'disabled' : '' }}>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block mt-3" 
                                                {{ !$settings->autolight ? 'disabled' : '' }}>
                                            <i class="fas fa-save mr-2"></i>Save Schedule
                                        </button>
                                    </form>
                                </div>

                                <!-- Manual Controls -->
                                <div class="manual-controls mt-4">
                                    <h6 class="text-muted mb-3">Manual Controls</h6>
                                    <form action="" method="POST">
                                        @csrf
                                        <input type="hidden" name="lightstatus" value="{{ $settings->lightstatus ? '0' : '1' }}">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button type="submit" 
                                                    class="btn btn-lg btn-{{ $settings->lightstatus ? 'danger' : 'success' }}"
                                                    {{ $settings->autolight ? 'disabled' : '' }}>
                                                <i class="fas fa-power-off mr-2"></i>
                                                {{ $settings->lightstatus ? 'Turn OFF' : 'Turn ON' }}
                                            </button>
                                            <span class="badge badge-pill badge-{{ $settings->lightstatus ? 'success' : 'danger' }} px-3">
                                                {{ $settings->lightstatus ? 'ON' : 'OFF' }}
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sprinkler Control Card -->
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">
                                    <i class="fas fa-tint text-info mr-2"></i>
                                    Sprinkler Control
                                </h5>
                                <span class="badge badge-pill badge-{{ $settings->autosprinkler ? 'success' : 'secondary' }}">
                                    {{ $settings->autosprinkler ? 'Auto Mode' : 'Manual Mode' }}
                                </span>
                            </div>
                            
                            <div class="card-body">
                                <!-- Mode Toggle -->
                                <form action="" method="POST" class="mb-4">
                                    @csrf
                                    <input type="hidden" name="autosprinkler" value="{{ $settings->autosprinkler ? '0' : '1' }}">
                                    <button type="submit" 
                                            class="btn btn-{{ $settings->autosprinkler ? 'warning' : 'success' }} btn-block">
                                        <i class="fas {{ $settings->autosprinkler ? 'fa-hand-paper' : 'fa-magic' }} mr-2"></i>
                                        {{ $settings->autosprinkler ? 'Switch to Manual Mode' : 'Enable Auto Mode' }}
                                    </button>
                                </form>

                                <!-- Auto Settings -->
                                <div class="settings-group" {{ !$settings->autosprinkler ? 'style=opacity:0.5' : '' }}>
                                    <h6 class="text-muted mb-3">Trigger Settings</h6>
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Schedule ON</label>
                                                    <input type="time" class="form-control" name="sprinkleron"
                                                           value="{{ $settings->sprinkleron }}"
                                                           {{ !$settings->autosprinkler ? 'disabled' : '' }}>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Schedule OFF</label>
                                                    <input type="time" class="form-control" name="sprinkleroff"
                                                           value="{{ $settings->sprinkleroff }}"
                                                           {{ !$settings->autosprinkler ? 'disabled' : '' }}>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <h6 class="text-muted mb-3 mt-4">Threshold Settings</h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Humidity Below (%)</label>
                                                    <input type="number" class="form-control" name="humiditybelow"
                                                           value="{{ $settings->humiditybelow }}"
                                                           {{ !$settings->autosprinkler ? 'disabled' : '' }}>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Humidity Above (%)</label>
                                                    <input type="number" class="form-control" name="humidityabove"
                                                           value="{{ $settings->humidityabove }}"
                                                           {{ !$settings->autosprinkler ? 'disabled' : '' }}>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Moisture Below (%)</label>
                                                    <input type="number" class="form-control" name="moisturebelow"
                                                           value="{{ $settings->moisturebelow }}"
                                                           {{ !$settings->autosprinkler ? 'disabled' : '' }}>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Moisture Above (%)</label>
                                                    <input type="number" class="form-control" name="moistureabove"
                                                           value="{{ $settings->moistureabove }}"
                                                           {{ !$settings->autosprinkler ? 'disabled' : '' }}>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block mt-3" 
                                                {{ !$settings->autosprinkler ? 'disabled' : '' }}>
                                            <i class="fas fa-save mr-2"></i>Save Settings
                                        </button>
                                    </form>
                                </div>

                                <!-- Manual Controls -->
                                <div class="manual-controls mt-4">
                                    <h6 class="text-muted mb-3">Manual Controls</h6>
                                    <form action="" method="POST">
                                        @csrf
                                        <input type="hidden" name="sprinklerstatus" 
                                               value="{{ $settings->sprinklerstatus ? '0' : '1' }}">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button type="submit" 
                                                    class="btn btn-lg btn-{{ $settings->sprinklerstatus ? 'danger' : 'success' }}"
                                                    {{ $settings->autosprinkler ? 'disabled' : '' }}>
                                                <i class="fas fa-power-off mr-2"></i>
                                                {{ $settings->sprinklerstatus ? 'Turn OFF' : 'Turn ON' }}
                                            </button>
                                            <span class="badge badge-pill badge-{{ $settings->sprinklerstatus ? 'success' : 'danger' }} px-3">
                                                {{ $settings->sprinklerstatus ? 'ON' : 'OFF' }}
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fan Control Card -->
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">
                                    <i class="fas fa-fan text-primary mr-2"></i>
                                    Fan Control
                                </h5>
                                <span class="badge badge-pill badge-{{ $settings->autofan ? 'success' : 'secondary' }}">
                                    {{ $settings->autofan ? 'Auto Mode' : 'Manual Mode' }}
                                </span>
                            </div>
                            
                            <div class="card-body">
                                <!-- Mode Toggle -->
                                <form action="" method="POST" class="mb-4">
                                    @csrf
                                    <input type="hidden" name="autofan" value="{{ $settings->autofan ? '0' : '1' }}">
                                    <button type="submit" 
                                            class="btn btn-{{ $settings->autofan ? 'warning' : 'success' }} btn-block">
                                        <i class="fas {{ $settings->autofan ? 'fa-hand-paper' : 'fa-magic' }} mr-2"></i>
                                        {{ $settings->autofan ? 'Switch to Manual Mode' : 'Enable Auto Mode' }}
                                    </button>
                                </form>

                                <!-- Auto Settings -->
                                <div class="settings-group" {{ !$settings->autofan ? 'style=opacity:0.5' : '' }}>
                                    <h6 class="text-muted mb-3">Temperature Thresholds</h6>
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Turn ON Below (°C)</label>
                                            <input type="number" step="0.1" class="form-control" name="tempbelow"
                                                   value="{{ $settings->tempbelow }}"
                                                   {{ !$settings->autofan ? 'disabled' : '' }}>
                                        </div>
                                        <div class="form-group">
                                            <label>Turn OFF Above (°C)</label>
                                            <input type="number" step="0.1" class="form-control" name="tempabove"
                                                   value="{{ $settings->tempabove }}"
                                                   {{ !$settings->autofan ? 'disabled' : '' }}>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block mt-3" 
                                                {{ !$settings->autofan ? 'disabled' : '' }}>
                                            <i class="fas fa-save mr-2"></i>Save Settings
                                        </button>
                                    </form>
                                </div>

                                <!-- Manual Controls -->
                                <div class="manual-controls mt-4">
                                    <h6 class="text-muted mb-3">Manual Controls</h6>
                                    <form action="" method="POST">
                                        @csrf
                                        <input type="hidden" name="fanstatus" 
                                               value="{{ $settings->fanstatus ? '0' : '1' }}">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button type="submit" 
                                                    class="btn btn-lg btn-{{ $settings->fanstatus ? 'danger' : 'success' }}"
                                                    {{ $settings->autofan ? 'disabled' : '' }}>
                                                <i class="fas fa-power-off mr-2"></i>
                                                {{ $settings->fanstatus ? 'Turn OFF' : 'Turn ON' }}
                                            </button>
                                            <span class="badge badge-pill badge-{{ $settings->fanstatus ? 'success' : 'danger' }} px-3">
                                                {{ $settings->fanstatus ? 'ON' : 'OFF' }}
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .card {
            border-radius: 15px;
            transition: all 0.2s ease;
        }
        
        .form-control {
            border-radius: 8px;
            border: 2px solid #eee;
            padding: 0.75rem;
        }
        
        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 0 2px rgba(76, 175, 80, 0.1);
        }
        
        .btn {
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }
        
        .btn-lg {
            padding: 1rem 2rem;
        }
        
        .settings-group {
            transition: opacity 0.3s ease;
        }
        
        .badge {
            padding: 0.75rem 1.25rem;
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .card-header {
            padding: 1.25rem;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        .manual-controls {
            border-top: 1px solid rgba(0,0,0,0.05);
            padding-top: 1.5rem;
        }
        
        @media (max-width: 768px) {
            .col-md-4 {
                margin-bottom: 1.5rem;
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</x-app-layout>
