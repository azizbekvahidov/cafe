@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="row">
            <div class="col-md-6 col-6">
                <div class="header-data">
                    <h1>Dashboard</h1>
                    <p>Welcome To Core Plus</p>
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="header-charts">
                    <div class="sparkline-chart pull-right d-none d-md-block">
                        <div class="number" id="sparkline_line"></div>
                        <small class="server-title">Server Load:</small>
                    </div>
                    <div class="sparkline-chart pull-right">
                        <div class="number" id="sparkline_bar"></div>
                        <small class="sales-title">Daily Sales:</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">


    </section>

@endsection
