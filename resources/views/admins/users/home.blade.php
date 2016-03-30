@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
<!--                    --><?php //echo '<pre>'; print_r($allUsers);      ?>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Username</th>

                            <th>Email</th>
                            {{--<th>Password</th>--}}
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>roles</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data['allUsers'] as $key => $user)
                                <tr  @if($key % 3 == 0) class="success" @elseif($key % 2 == 0) class="info" @else class="danger" @endif >
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->created_at}}
                                    </td>
                                    <td>
                                        {{$user->updated_at}}
                                    </td>
                                     <td>
                                         @if(isset($user->roles[0]) && !empty($user->roles[0]))
                                            {{ $user->roles[0]['name'] }}
                                         @endif
                                    </td>
                                </tr>
                            @endforeach
                         </tbody>
                    </table>


                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
