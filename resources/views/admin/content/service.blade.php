@extends('admin.master.master')
@section('name', 'Service | Sektor Kreatif Admin')
@section('active7', 'active')
@section('big_name', 'Service')
@section('content')
<div class="row">
    {{-- Service --}}
    <div class="col-md-12">
        <div class="card  card-tasks">
            <div class="card-header ">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-name">Service</h5>
                    </div>
                    <div class="col-md-6">
                        <button type="button" rel="tooltip" class="btn btn-primary"
                        data-toggle="modal" data-target="#addService" style="float: right"
                        >
                            <i class="now-ui-icons ui-1_simple-add"></i>
                            Add
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-full-width table-responsive">
                    <table class="table table-borderless datatables" style="border-collapse:separate; border-spacing:5px;">
                        <thead class=" text-primary">
                            <td>
                                Numb.
                            </td>
                            <td>
                                Service
                            </td>
                            <td>
                                Icon
                            </td>
                            <td>
                                Action
                            </td>
                        </thead>
                        @foreach ($service as $key => $service)
                        <tbody >
                            <tr>
                                <td>
                                    {{++$key}}
                                </td>
                                <td>
                                    {{$service->service}}
                                </td>
                                <td>
                                    <img src="{{$service->icon}}" width="50px">
                                </td>
                                <td>
                                    <button type="button" rel="tooltip" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                    data-toggle="modal" data-target="#editService"
                                    data-service="{{$service}}"
                                    >
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </button>
                                    <button type="button" rel="tooltip"  class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                    data-toggle="modal" data-target="#deleteService"
                                    data-service="{{$service}}"
                                    >
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add Service -->
<div class="modal fade" id="addService" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-name" id="mediumModalLabel"><strong>Add Service</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/service/add" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Service</label>
                                <input type="text" class="form-control" name="service" id="service" placeholder="Service">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Key</label>
                                <input type="text" class="form-control" name="key" id="key" placeholder="Key">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Icon</label>
                        </div>
                        <div class="col-md-12">
                            <input type="file" accept="video/*, image/*" name="icon" id="icon">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" class="form-control" name="desc" id="desc"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Service -->
<div class="modal fade" id="editService" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-name" id="mediumModalLabel"><strong>Edit Service</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/service/edit" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="service_id" id="service_id">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Service</label>
                                <input type="text" class="form-control" name="service" id="service" placeholder="Service">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Key</label>
                                <input type="text" class="form-control" name="key" id="key" placeholder="Key">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Icon</label>
                        </div>
                        <div class="col-md-12">
                            <input type="file" accept="video/*, image/*" name="icon" id="icon">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" class="form-control" name="desc" id="desc"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete Service -->
<div class="modal fade" id="deleteService" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-name" id="mediumModalLabel"><strong>Delete Service</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/service/delete" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Apakah anda yakin?</p>
                        </div>
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="service_id" id="service_id">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('style')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

@endpush

@push('script')

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script>
    function dataTables() {
        $(document).ready(function() {
            $('.datatables').DataTable();
        } );
    }
    dataTables()
</script>
<script>
    function serviceEdit() {
        $(document).ready(function() {
            $('#editService').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const service = Object(button.data('service'));
                console.log(service);
                let modal = $(this);
                modal.find('.modal-body #service_id').val(service.service_id);
                modal.find('.modal-body #service').val(service.service);
                modal.find('.modal-body #key').val(service.key);
                modal.find('.modal-body #desc').html(service.desc);
            });
        });
    }
    function serviceDelete() {
        $(document).ready(function() {
            $('#deleteService').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const service = Object(button.data('service'));
                console.log(service);
                let modal = $(this);
                modal.find('.modal-body #service_id').val(service.service_id);
            });
        });
    }
    serviceEdit()
    serviceDelete();
</script>

@endpush
