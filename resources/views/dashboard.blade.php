@extends('layouts.main')
@section('container')
    <div class="page-content-wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="col-3 align-self-center">
                                            <div class="round">
                                                <i class="ti-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-9 text-right align-self-center">
                                            <div class="m-l-10 ">
                                                <h5 class="mt-0">{{ $users }}</h5>
                                                <p class="mb-0 text-muted">Users</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-3" style="height:3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 48%;"
                                            aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
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
@endsection
