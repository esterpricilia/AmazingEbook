@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-sm text-center">
                <thead>
                    <tr>
                      <th scope="col">Title</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($data as $item)
                        <tr>
                            <td>{{$item->title}}</td>
                            <td><a href="{{route('deleteCart',[$item->id, $item->user_id] )}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>    
                </table>
                <div style="text-align: right">
                    <a class="bg-warning" href="{{route('transaction', Auth::user()->id)}}" style="text-decoration: none; color: black;font-size: 20px; padding: 10px 20px">Submit</a>
                </div>
                
            </div>
    </div>
</div>
@endsection
