@extends('admin.master.master')
@section('title', 'Edit Article | Sektor Kreatif Admin')
@section('active1', 'active2')
@section('big_title', 'Article')
@section('content')
<div class="row">
    {{-- Category --}}
    <div class="col-lg-12">
      <div class="card  card-tasks">
        <div class="card-header ">
          <h5 class="card-title">Edit Article</h5>
        </div>
        <form action="/admin/article/{{$article->article_id}}/edit" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="card-body ">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$article->title}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="cat_id" id="cat_id" style="width: 100%">
                            @foreach ($category as $cat)
                                @if ($article->category_id == $cat->category_id)
                                <option value="{{$cat->category_id}}" selected>{{$cat->category}}</option>
                                @else
                                <option value="{{$cat->category_id}}">{{$cat->category}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Publish At</label>
                        <input type="date" class="form-control" id="published_at" name="published_at" value="{{$article->published_at}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Expired At</label>
                        <input type="date" class="form-control" id="expired_at" name="expired_at" value="{{$article->expired_at}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="content" id="content">{!!$article->content!!}</textarea>
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
                    <img src="{{$article->image}}" name="show_image" id="show_image" alt="" style="width: 720px">
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

                        <input type="radio" id="draft" name="status" value="draft" @if ($article->status == 'draft') checked @endif>
                        <label for="draft">Draft</label><br>
                        <input type="radio" id="final" name="status" value="final" @if ($article->status == 'final') checked @endif>
                        <label for="final">Final</label><br>
                        <input type="radio" id="publish" name="status" value="publish" @if ($article->status == 'publish') checked @endif>
                        <label for="publish">Publish</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <hr>
            <button type="submit" class="btn btn-primary">
                <i class="now-ui-icons ui-1_simple-add"></i>
                Edit Article
            </button>
        </div>
        </form>
      </div>
    </div>
</div>

@endsection

@push('style')
<script src="https://cdn.tiny.cloud/1/oe0tboyl0qxghgtam2ir59yymlxayru21bwgrk83ewn8t50x/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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

<script>
    function loadFile(event) {
        let output = document.getElementById('show_image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = () => {
            URL.revokeObjectURL(output.src) // free memory
        }
   }
   loadFile()
</script>

@endpush
