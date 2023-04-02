@extends('admin.master.master')
@section('title', 'Gallery | Sektor Kreatif Admin')
@section('active4', 'active')
@section('big_title', 'Gallery')
@section('content')
<div class="row">
    {{-- Gallery --}}
    <div class="col-md-12">
        <div class="card  card-tasks">
            <div class="card-header ">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Gallery</h5>
                    </div>
                    <div class="col-md-6">
                        <button type="button" rel="tooltip" class="btn btn-primary"
                        data-toggle="modal" data-target="#addGallery" style="float: right"
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
                                Title
                            </td>
                            <td>
                                Media
                            </td>
                            <td>
                                Type
                            </td>
                            <td>
                                Category
                            </td>
                            <td>
                                Action
                            </td>
                        </thead>
                        @foreach ($gallery as $key => $gal)
                        <tbody >
                            <tr>
                                <td>
                                    {{++$key}}
                                </td>
                                <td>
                                    {{$gal->title}}
                                </td>
                                <td>
                                    @if ($gal->type == 'video')
                                        {{-- <video width="200px" preload controls>
                                            <source src="{{$gal->media}}">
                                        </video> --}}
                                        <iframe width="200px"
                                            src="{{$gal->media}}"
                                            allow="clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen>
                                        </iframe>
                                    @elseif ($gal->type == 'image')
                                        <img src="{{$gal->media}}" width="200px">
                                    @endif
                                </td>
                                <td>
                                    @if ($gal->type == 'image')
                                        <span class="badge badge-warning">{{$gal->type}}</span>
                                    @elseif ($gal->type == 'video')
                                        <span class="badge badge-info">{{$gal->type}}</span>
                                    @endif
                                </td>
                                <td>
                                    {{$gal->category}}
                                </td>
                                <td>
                                    <button type="button" rel="tooltip" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                    data-toggle="modal" data-target="#editGallery"
                                    data-gallery="{{$gal}}"
                                    >
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </button>
                                    <button type="button" rel="tooltip"  class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                    data-toggle="modal" data-target="#deleteGallery"
                                    data-gallery="{{$gal}}"
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

<!-- Modal Add Gallery -->
<div class="modal fade" id="addGallery" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><strong>Add Gallery</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/gallery/add" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category" id="category">
                                    <option value="">----- Choose Category -----</option>
                                    <option value="animasi">Animasi</option>
                                    <option value="short-movie">Short Movie</option>
                                    <option value="company-profile">Company Profile</option>
                                    <option value="event">Event</option>
                                    <option value="tv-commercial">TV Commercial</option>
                                    <option value="jingle">Jingle</option>
                                    <option value="documenter">Documenter</option>
                                    <option value="explainer">Explainer</option>
                                    <option value="product-commercial">Product Commercial</option>
                                    <option value="vlog">Vlog</option>
                                    <option value="youtube-commercial">Yutube Commercial</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" name="type" id="type">
                                    <option value="">----- Choose Type -----</option>
                                    <option value="image">Image</option>
                                    <option value="video">Video</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Media</label>
                        </div>
                        <div id="media-form" class="col-md-12">
                            <input type="file" accept="image/*" name="media" id="media">
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

<!-- Modal Edit Gallery -->
<div class="modal fade" id="editGallery" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><strong>Edit Gallery</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/gallery/edit" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="gallery_id" id="gallery_id">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category" id="category">
                                    <option value="">----- Choose Category -----</option>
                                    <option value="animasi">Animasi</option>
                                    <option value="short-movie">Short Movie</option>
                                    <option value="company-profile">Company Profile</option>
                                    <option value="event">Event</option>
                                    <option value="tv-commercial">TV Commercial</option>
                                    <option value="jingle">Jingle</option>
                                    <option value="documenter">Documenter</option>
                                    <option value="explainer">Explainer</option>
                                    <option value="product-commercial">Product Commercial</option>
                                    <option value="vlog">Vlog</option>
                                    <option value="youtube-commercial">Yutube Commercial</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" name="type" id="type">
                                    <option value="">----- Choose Type -----</option>
                                    <option value="image">Image</option>
                                    <option value="video">Video</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Media</label>
                        </div>
                        <div id="media-form" class="col-md-12">
                            <input type="file" accept="image/*" name="media" id="media">
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

<!-- Modal Delete Gallery -->
<div class="modal fade" id="deleteGallery" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><strong>Delete Gallery</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/gallery/delete" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Apakah anda yakin?</p>
                        </div>
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="gallery_id" id="gallery_id">
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
    function galeryAdd() {
        $(document).ready(function() {
            $('#addGallery').on('show.bs.modal', (event) => {
                let modal = $(this);
                let options = modal.find('.modal-body #type');
                options.on('change', function() {
                    const value = $(this).val();
                    console.log(value);
                    let html = '';
                    if(value === 'video') {
                        modal.find('.modal-body #media-form').empty();
                        html = `<div class="form-group"><input type="text" class="form-control" name="media" id="media" placeholder="Url Youtube"></div>`;
                    }else {
                        modal.find('.modal-body #media-form').empty();
                        html = `<input type="file" accept="image/*" name="media" id="media">`;
                    }
                    modal.find('.modal-body #media-form').html(html);
                });
                options.change();
            });
        });
    }
    function galeryEdit() {
        $(document).ready(function() {
            $('#editGallery').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const gallery = Object(button.data('gallery'));
                console.log(gallery);

                let modal = $(this);
                modal.find('.modal-body #gallery_id').val(gallery.gallery_id);
                modal.find('.modal-body #title').val(gallery.title);
                modal.find('.modal-body #category').val(gallery.category);
                modal.find('.modal-body #type').val(gallery.type);

                let options = modal.find('.modal-body #type');
                options.on('change', function() {
                    const value = $(this).val();
                    console.log(value);
                    let html = '';
                    if(value === 'video') {
                        modal.find('.modal-body #media-form').empty();
                        html = `<div class="form-group"><input type="text" class="form-control" name="media" id="media" placeholder="Url Youtube" value="${gallery.media}"></div>`;
                    }else {
                        modal.find('.modal-body #media-form').empty();
                        html = `<input type="file" accept="image/*" name="media" id="media">`;
                    }
                    modal.find('.modal-body #media-form').html(html);
                });
                options.change();
            });
        });
    }
    function galleryDelete() {
        $(document).ready(function() {
            $('#deleteGallery').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const gallery = Object(button.data('gallery'));
                console.log(gallery);
                let modal = $(this);
                modal.find('.modal-body #gallery_id').val(gallery.gallery_id);
            });
        });
    }
    galeryAdd();
    galeryEdit();
    galleryDelete();
</script>

@endpush
