@extends('layouts.app')

@section('content')
    @if(count($data)>0)
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">News</div>
                        <div class="panel-body content-panel">
                            @foreach($data as $row)
                                <h1><center>{{$row->title}}</center></h1>
                                <div class="row choose_an_image">
                                    <div class="col-lg-4">
                                        <div id="image-preview">
                                            <img  class="image-news" src="{{ URL::asset('/images/' . $row->image) }}" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-lg-8" style="padding-left: 30px">
                                        {{$row->text}}
                                    </div>
                                </div>

                            @endforeach
                                {!! $data->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
