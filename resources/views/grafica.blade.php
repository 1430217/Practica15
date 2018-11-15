@extends('template')

@section('content-inner')

<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Grafica 1</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index"><i class="ti ti-home"></i></a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row flex-row">
        <div class="col-xl-12">
            <!-- Line Chart 01 -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Line Chart 01</h4>
                </div>
                <div class="widget-body">
                    <div class="chart">
                        <canvas id="line-chart-01"></canvas>
                    </div>
                </div>
            </div>
            <!-- End Line Chart 01 -->
        </div>


    </div>


</div>
@endsection