@extends('template')

@section('content-inner')

<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Grafica 2 </h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index"><i class="ti ti-home"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-xl-12">
        <div class="widget has-shadow">
            <div class="widget-header bordered no-actions d-flex align-items-center">
                <h4>Area Chart 02</h4>
            </div>
            <div class="widget-body">
                <div class="chart">
                    <canvas id="area-chart-02"></canvas>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection