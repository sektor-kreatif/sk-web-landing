@extends('admin.master.master')
@section('name', 'Testimony | Sektor Kreatif Admin')
@section('active8', 'active')
@section('big_name', 'Testimony')
@section('content')
<div class="row">
    {{-- Testimony --}}
    <div class="col-md-12">
        <div class="card  card-tasks">
            <div class="card-header ">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-name">Testimony</h5>
                    </div>
                    <div class="col-md-6">
                        <button type="button" rel="tooltip" class="btn btn-primary"
                        data-toggle="modal" data-target="#addTestimony" style="float: right"
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
                                Username
                            </td>
                            <td>
                                Text
                            </td>
                            <td>
                                Action
                            </td>
                        </thead>
                        @foreach ($testimony as $key => $testimony)
                        <tbody >
                            <tr>
                                <td>
                                    {{++$key}}
                                </td>
                                <td>
                                    {{$testimony->username}}
                                </td>
                                <td>
                                    {{$testimony->text}}
                                </td>
                                <td>
                                    <button type="button" rel="tooltip" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                    data-toggle="modal" data-target="#editTestimony"
                                    data-testimony="{{$testimony}}"
                                    >
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </button>
                                    <button type="button" rel="tooltip"  class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                    data-toggle="modal" data-target="#deleteTestimony"
                                    data-testimony="{{$testimony}}"
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

<!-- Modal Add Testimony -->
<div class="modal fade" id="addTestimony" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-name" id="mediumModalLabel"><strong>Add Testimony</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/testimony/add" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" name="text" id="text" placeholder="Text">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
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

<!-- Modal Edit Testimony -->
<div class="modal fade" id="editTestimony" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-name" id="mediumModalLabel"><strong>Edit Testimony</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/testimony/edit" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="testimony_id" id="testimony_id">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" name="text" id="text" placeholder="Text">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
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

<!-- Modal Delete Testimony -->
<div class="modal fade" id="deleteTestimony" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-name" id="mediumModalLabel"><strong>Delete Testimony</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/testimony/delete" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Apakah anda yakin?</p>
                        </div>
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="testimony_id" id="testimony_id">
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
    function testimonyEdit() {
        $(document).ready(function() {
            $('#editTestimony').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const testimony = Object(button.data('testimony'));
                console.log(testimony);
                let modal = $(this);
                modal.find('.modal-body #testimony_id').val(testimony.testimony_id);
                modal.find('.modal-body #text').val(testimony.text);
                modal.find('.modal-body #username').val(testimony.username);
            });
        });
    }
    function testimonyDelete() {
        $(document).ready(function() {
            $('#deleteTestimony').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const testimony = Object(button.data('testimony'));
                console.log(testimony);
                let modal = $(this);
                modal.find('.modal-body #testimony_id').val(testimony.testimony_id);
            });
        });
    }
    testimonyEdit()
    testimonyDelete();
</script>

@endpush
