@extends('layouts.admin')

@section('contents')

<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Add to Gallery</h3>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('gallery.store') }}" role="form" enctype="multipart/form-data">
          @csrf
            <div class="modal-header">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload image</label>
                        <input type="file" class="form-control-file"
                            id="exampleFormControlFile1" name="picture">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Enter topic" name="name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
        </form>
    </div>
</div>
 
@endsection
