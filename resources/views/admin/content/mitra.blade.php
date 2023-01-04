@extends('admin.master.master')
@section('name', 'Mitra | Sektor Kreatif Admin')
@section('active6', 'active')
@section('big_name', 'Mitra')
@section('content')
<div class="row">
    {{-- Mitra --}}
    <div class="col-md-12">
        <div class="card  card-tasks">
            <div class="card-header ">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-name">Mitra</h5>
                    </div>
                    <div class="col-md-6">
                        <button type="button" rel="tooltip" class="btn btn-primary"
                        data-toggle="modal" data-target="#addMitra" style="float: right"
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
                                Name
                            </td>
                            <td>
                                Logo
                            </td>
                            <td>
                                Action
                            </td>
                        </thead>
                        @foreach ($mitra as $key => $mitra)
                        <tbody >
                            <tr>
                                <td>
                                    {{++$key}}
                                </td>
                                <td>
                                    {{$mitra->name}}
                                </td>
                                <td>
                                    <img src="{{$mitra->logo}}" width="200px">
                                </td>
                                <td>
                                    <button type="button" rel="tooltip" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                    data-toggle="modal" data-target="#editMitra"
                                    data-mitra="{{$mitra}}"
                                    >
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </button>
                                    <button type="button" rel="tooltip"  class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                    data-toggle="modal" data-target="#deleteMitra"
                                    data-mitra="{{$mitra}}"
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

<!-- Modal Add Mitra -->
<div class="modal fade" id="addMitra" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-name" id="mediumModalLabel"><strong>Add Mitra</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/mitra/add" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Logo</label>
                        </div>
                        <div class="col-md-12">
                            <input type="file" accept="image/*" name="logo" id="logo" required>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" class="form-control" name="desc" id="desc" required></textarea>
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

<!-- Modal Edit Mitra -->
<div class="modal fade" id="editMitra" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-name" id="mediumModalLabel"><strong>Edit Mitra</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/mitra/edit" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="mitra_id" id="mitra_id">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Logo</label>
                        </div>
                        <div class="col-md-12">
                            <input type="file" accept="image/*" name="logo" id="logo">
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

<!-- Modal Delete Mitra -->
<div class="modal fade" id="deleteMitra" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-name" id="mediumModalLabel"><strong>Delete Mitra</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/mitra/delete" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Apakah anda yakin?</p>
                        </div>
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="mitra_id" id="mitra_id">
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
    function mitraEdit() {
        $(document).ready(function() {
            $('#editMitra').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const mitra = Object(button.data('mitra'));
                console.log(mitra);
                let modal = $(this);
                modal.find('.modal-body #mitra_id').val(mitra.mitra_id);
                modal.find('.modal-body #name').val(mitra.name);
                modal.find('.modal-body #desc').html(mitra.desc);
            });
        });
    }
    function mitraDelete() {
        $(document).ready(function() {
            $('#deleteMitra').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const mitra = Object(button.data('mitra'));
                console.log(mitra);
                let modal = $(this);
                modal.find('.modal-body #mitra_id').val(mitra.mitra_id);
            });
        });
    }
    mitraEdit()
    mitraDelete();
</script>

@endpush
