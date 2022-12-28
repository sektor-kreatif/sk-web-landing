@extends('admin.master.master')
@section('title', 'Company Profile | Sektor Kreatif Admin')
@section('active1', 'active1')
@section('big_title', 'Company Profile')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Edit Company Profile</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/admin/profile/update" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Name </label>
                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name" value="@if($profiles->count() > 0){{$profiles[0]->company_name}}@endif">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email </label>
                      <input type="email" class="form-control" name="company_email" placeholder="Company Email" value="@if ($profiles->count() > 0){{$profiles[0]->company_email}}@endif">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone </label>
                      <input type="number" class="form-control" name="company_phone" placeholder="Company Phone" value="@if($profiles->count() > 0){{$profiles[0]->company_phone}}@endif">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="company_address" placeholder="Company Address" value="@if($profiles->count() > 0){{$profiles[0]->company_address}}@endif">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Logo</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <input type="file" accept="image/*" name="company_logo" onchange="loadFile(event)" placeholder="Company Logo" value="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <textarea rows="4" cols="80" class="form-control" name="company_description" id="company_description" placeholder="Company Description">@if($profiles->count() > 0){{$profiles[0]->company_description}}@endif</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-round btn-primary">Save </button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-user">
          <div class="image">
            <img src="/admin-template/assets/img/bg5.jpg" alt="...">
          </div>
          <div class="card-body">
            <div class="author">
                <img class="avatar border-gray" src="
                  @if ($profiles->count() > 0)
                    {{$profiles[0]->company_logo}}
                  @else
                    /admin-template/assets/img/mike.jpg
                  @endif
                " id="logo" alt="...">
                <h5 class="title" id="name">
                  @if ($profiles->count() > 0)
                    {{$profiles[0]->company_name}}
                  @endif
                </h5>
            </div>
            <p class="description text-center" id="description">
              @if ($profiles->count() > 0)
                {{$profiles[0]->company_description}}
              @endif
            </p>
          </div>
          <hr>
        </div>
    </div>
</div>
@push('script')
<script>
   function loadFile(event) {
    let output = document.getElementById('logo');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = () => {
      URL.revokeObjectURL(output.src) // free memory
    }
   }

   function loadName() {
    $(document).ready(() => {
        $('#company_name').keyup(() => {
            let name = document.getElementById('company_name').value;
            $('#name').html(name);
        });
    });
   }

   function loadDescription() {
    $(document).ready(() => {
        $('#company_description').keyup(() => {
            let description = document.getElementById('company_description').value;
            $('#description').html(description);
        });
    });
   }

   loadDescription();
   loadName();
 </script>
@endpush
@endsection
