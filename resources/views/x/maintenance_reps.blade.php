@extends('layouts.app')

@section('content')

<nav>
    <div id="home" class="toggle">
        <ul class="tabs tabs-transparent">
            <li class="tab"><a class="addReport" href="#addReport">Add Report</a></li>
            <li class="tab"><a class="myReport" href="#myReport">My Reports</a></li>
            <li class="tab"><a href="#viewReport">View All Reports</a></li>
        </ul>
    </div>
</nav>

<div id="addReport" class="toggle" style="padding:5%">
    @include('add_report')
</div>

<div id="myReport" class="toggle" style="padding:5%">
    @include('my_reports')
</div>

@endsection