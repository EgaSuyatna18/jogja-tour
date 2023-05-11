@extends('layouts.DashboardMaster')
@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Tourist</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <p class="small text-white stretched-link">{{ $tourist }}</p>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Tour Guide</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <p class="small text-white stretched-link">{{ $tourGuide }}</p>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Tour</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <p class="small text-white stretched-link">{{ $tour }}</p>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Tour Selesai</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <p class="small text-white stretched-link">{{ $tourOrder }}</p>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
@endsection