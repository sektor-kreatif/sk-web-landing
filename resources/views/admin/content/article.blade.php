@extends('admin.master.master')
@section('title', 'Article | Sektor Kreatif Admin')
@section('active1', 'active2')
@section('big_title', 'Article')
@section('content')
<div class="row">
    {{-- Article --}}
    <div class="col-md-8">
        <div class="card  card-tasks">
            <div class="card-header ">
                <h5 class="card-title">Article</h5>
            </div>
            <div class="card-body ">
                <div class="table-full-width table-responsive">
                    <table class="table table-borderless datatables">
                        <thead class=" text-primary">
                            <td>
                                Numb.
                            </td>
                            <td>
                                Title
                            </td>
                            <td>
                                Category
                            </td>
                            <td>
                                Created At
                            </td>
                            <td>
                                Status
                            </td>
                            <td>
                                Action
                            </td>
                        </thead>
                        @foreach ($article as $key => $art)
                        <tbody >
                            <tr>
                                <td>
                                    {{++$key}}
                                </td>
                                <td>
                                    {{$art->title}}
                                </td>
                                <td>
                                    {{$art->category->category}}
                                </td>
                                <td>
                                    {{$art->created_at}}
                                </td>
                                <td>
                                    @if ($art->status == 'draft')
                                        <span class="badge badge-warning">Draft</span>
                                    @elseif ($art->status == 'final')
                                        <span class="badge badge-info">Final</span>
                                    @elseif ($art->status == 'publish')
                                        <span class="badge badge-success">Publish</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="/admin/article/{{$art->article_id}}/" rel="tooltip" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral">
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </a>
                                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                    data-toggle="modal" data-target="#deleteArticle"
                                    data-article="{{$art}}"
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
    {{-- Category --}}
    <div class="col-md-4">
        <div class="card  card-tasks">
          <div class="card-header ">
            <h5 class="card-title">Category</h5>
          </div>
          <div class="card-body ">
              <div class="table-full-width table-responsive">
                <table class="table">
                  <tbody>
                    @foreach ($category as $cat)
                    <tr>
                      <td class="text-left">{{$cat->category}}</td>
                      <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task"
                          data-toggle="modal" data-target="#editCategory"
                          data-category="{{$cat}}"
                          >
                              <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove"
                          data-toggle="modal" data-target="#deleteCategory"
                          data-category="{{$cat}}"
                          >
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
          <div class="card-footer">
              <hr>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategory">
                  <i class="now-ui-icons ui-1_simple-add"></i>
                  Add
              </button>
          </div>
        </div>
    </div>
</div>

<div class="row">
    {{-- Category --}}
    <div class="col-lg-12">
      <div class="card  card-tasks">
        <div class="card-header ">
          <h5 class="card-title">Add Article</h5>
        </div>
        <form action="/admin/article/add" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="card-body ">
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
                        <select class="form-control" name="cat_id" id="cat_id" style="width: 100%">
                            @foreach ($category as $cat)
                                <option value="{{$cat->category_id}}">{{$cat->category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Publish At</label>
                        <input type="date" class="form-control" id="published_at" name="published_at">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Expired At</label>
                        <input type="date" class="form-control" id="expired_at" name="expired_at">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="content" id="content"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Image</label>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/admin-template/assets/img/ilustration.jpg" name="show_image" id="show_image" alt="" style="width: 480px">
                </div>
                <div class="col-md-6">
                    <input type="file" accept="image/*" name="image" id="image" onchange="loadFile(event)" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Status</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="radio" id="draft" name="status" value="draft" checked>
                        <label for="draft">Draft</label><br>
                        <input type="radio" id="final" name="status" value="final">
                        <label for="final">Final</label><br>
                        <input type="radio" id="publish" name="status" value="publish">
                        <label for="publish">Publish</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <hr>
            <button type="submit" class="btn btn-primary">
                <i class="now-ui-icons ui-1_simple-add"></i>
                Add Article
            </button>
        </div>
        </form>
      </div>
    </div>
</div>

<!-- Modal Add Category -->
<div class="modal fade" id="addCategory" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><strong>Add Category</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/category/add" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <input type="text" class="form-control" name="category" id="category" placeholder="Category">
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

<!-- Modal Edit Category -->
<div class="modal fade" id="editCategory" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><strong>Edit Category</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/category/edit" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="category_id" id="category_id" placeholder="Category Id">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <input type="text" class="form-control" name="category" id="category" placeholder="Category">
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

<!-- Modal Delete Category -->
<div class="modal fade" id="deleteCategory" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><strong>Delete Category</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/category/delete" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <br>
                    <h5>Apakah anda yakin?</h5>
                    <br>
                    <div class="row">
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="category_id" id="category_id" placeholder="Category Id">
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

<!-- Modal Delete Article -->
<div class="modal fade" id="deleteArticle" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><strong>Delete Article</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="/admin/article/delete" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()}}
                <div class="modal-body">
                    <br>
                    <h5>Apakah anda yakin?</h5>
                    <br>
                    <div class="row">
                        <div class="col-md-12" hidden>
                            <div class="form-group">
                            <input type="text" class="form-control" name="article_id" id="article_id">
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
function textEditor() {
    tinymce.init({
        selector:'#content',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
    });
}
textEditor()
</script>

@endpush

@push('script')

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    function select2single() {
        $(document).ready(() => {
            $('.select-2-single').select2();
        });
    }
    function dataTables() {
        $(document).ready(function() {
            $('.datatables').DataTable();
        } );
    }
    dataTables()
    select2single()
</script>
<script>
    function categoryEdit() {
        $(document).ready(function() {
            $('#editCategory').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const category = Object(button.data('category'));
                console.log(category);
                let modal = $(this);
                modal.find('.modal-body #category_id').val(category.category_id);
                modal.find('.modal-body #category').val(category.category);
            });
        });
    }
    function categoryDelete() {
        $(document).ready(function() {
            $('#deleteCategory').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const category = Object(button.data('category'));
                console.log(category);
                let modal = $(this);
                modal.find('.modal-body #category_id').val(category.category_id);
            });
        });
    }
    function articleDelete() {
        $(document).ready(function() {
            $('#deleteArticle').on('show.bs.modal', (event) => {
                const button = $(event.relatedTarget);
                const article = Object(button.data('article'));
                console.log(article);
                let modal = $(this);
                modal.find('.modal-body #article_id').val(article.article_id);
            });
        });
    }
    categoryEdit();
    categoryDelete();
    articleDelete();
</script>
<script>
    function loadFile(event) {
        let output = document.getElementById('show_image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = () => {
            URL.revokeObjectURL(output.src) // free memory
        }
   }
</script>

@endpush
