@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Owner or Admin can visit this page.</h2>
                <div class="panel panel-default content-panel">
                    <div class="panel-heading">Welcome</div>
                    <div class="panel-body">
                        <form  action="{{ url('/admin/add-news') }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="row choose_an_image">
                                <div class="col-lg-4">
                                    <div id="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image" id="image-upload" />
                                    </div>
                                </div>
                                <div class="col-lg-8" style="padding-left: 30px">
                                    <div class="form-group">
                                        <label for="title-news">Title</label>
                                        <input type="text" name="title" class="form-control" id="title-news" placeholder="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="text-news">News</label>
                                        <textarea rows="10" class="form-control" name="text" id="text-news"></textarea>
                                    </div>
                                    <input type="submit" class="btn pull-right btn-success"  value="Upload"  />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--$('.choose_an_image').on('click',function(){--}}
{{--$('.choose_image').click();--}}
{{----}}
{{--});--}}