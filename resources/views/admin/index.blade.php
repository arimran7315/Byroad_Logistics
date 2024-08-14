@if (!session()->has('id'))
    <script>
        window.location.href = "{{ route('loginPage') }}";
    </script>
@else
    @extends('admin.layout.masterlayout')
    @section('content')
        <div class="mt-4 mb-5"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill border-0 illustration shadow">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4>
                                        WelcomeBack, Admin
                                    </h4>
                                    <p class="mb-0">Admin Dashboard, Abdulreman</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="{{ asset('assets/images/customer-support.jpg') }}"
                                    class="img-fluid illustration-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill border-0 illustration shadow">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4>
                                        Total Quotes 
                                    </h4>
                                    <p class="mb-0">{{count($qoute)}} Quotes</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="{{ asset('assets/images/customer-support.jpg') }}"
                                    class="img-fluid illustration-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-0 shadow">
            <div class="card-header bg-info bg-opacity-25 border-bottom border-info">
                <div class="card-title">
                    <h4 class="text-info">Latest Qoutes</h4>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @if (count($qoute) > 0)
                            @foreach ($qoute as $value)
                                <tr>
                                    <th scope="row">{{ $count }}</th>
                                    <td> {{ $value->name }} </td>
                                    <td> {{ $value->email }} </td>
                                    <td> {{ $value->phone }} </td>
                                    <td> {{ $value->from }} </td>
                                    <td> {{ $value->to }} </td>
                                    <td> {{ $value->date }} </td>
                                    <td class="text-center">
                                        <a href="{{ route('estimatecomplete.show', $value->id) }}"
                                            class="text-warning fs-5">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                @php
                                    $count++;
                                @endphp
                            @endforeach
                        @else
                        <tr class="text-center">
                            <td class="text-danger" colspan="8">
                                {{"NO Result"}}
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
@endif
