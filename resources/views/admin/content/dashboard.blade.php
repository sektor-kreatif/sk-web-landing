@extends('admin.master.master')
@section('title', 'Dashboard | Sektor Kreatif Admin')
@section('active1', 'active')
@section('big_title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="elegant-calencar d-md-flex">
            <div class="wrap-header d-flex align-items-center img" style="background-image: url(/calendar-template/images/bg.jpg);">
          <p id="reset">Today</p>
        <div id="header" class="p-0">
                    <!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
        <div class="head-info">
            <div class="head-month"></div>
            <div class="head-day"></div>
        </div>
        <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
        </div>
      </div>
      <div class="calendar-wrap">
          <div class="w-100 button-wrap">
              <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
              <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
          </div>
        <table id="calendar">
        <thead>
            <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
            </tr>
        </thead>
        <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        </tbody>
        </table>
      </div>
    </div>
    </div>
</div>

@push('style')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/calendar-template/css/style.css">
@endpush

@push('script')
<script src="/calendar-template/js/jquery.min.js"></script>
<script src="/calendar-template/js/popper.js"></script>
<script src="/calendar-template/js/bootstrap.min.js"></script>
<script src="/calendar-template/js/main.js"></script>
@endpush
@endsection
