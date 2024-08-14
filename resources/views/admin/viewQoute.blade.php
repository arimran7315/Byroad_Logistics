@extends('admin.layout.masterlayout')
@section('content')
    <div class="mt-4 mb-5"
        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Qoute</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Qoute</li>
        </ol>
    </div>
    <div class="card shadow">
        <div class="card-header">
            <h4>View Qoute</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="from">From:</label>
                        <input type="text" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->from }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="from">To:</label>
                        <input type="text" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->to }}">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->name }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Email">Name:</label>
                        <input type="text" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->email }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Phone">Phone:</label>
                        <input type="text" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->phone }}">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="form-group">
                        <label for="date">Pickup Date:</label>
                        <input type="date" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->date }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="year">Vehicle Year:</label>
                        <input type="text" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->year }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="make">Vehicle Make:</label>
                        <input type="text" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->make }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="model">Vehicle Model:</label>
                        <input type="text" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->model }}">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="form-group">
                        <label for="career">Career:</label>
                        <input type="text" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->career }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="condition">Condition:</label>
                        <input type="text" class="form-control bg-primary bg-opacity-25" readonly
                            value="{{ $qoute->condition }}">
                    </div>
                </div>
            </div>
            <div class="row mt-4 text-center">
                <div class="col">
                    <a href="{{ route('estimatecomplete.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
