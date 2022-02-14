@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ( $data as $item )
            <h5 style="text-decoration: underline">E-Book Detail</h5>
            <table class="table table-borderless">
                  <tbody>
                        
                        <tr>
                            <td>Title:</td>
                            <td>{{$item->title}}</td>
                        </tr>
                        <tr>
                            <td>Author:</td>
                            <td>{{$item->author}}</td>
                        </tr>
                        <tr>
                            <td>Description:</td>
                            <td>{{$item->description}}</td>
                        </tr>
                        
                  </tbody>

            </table>
            <div style="text-align: right">
                <a class="bg-warning" href="{{route('storeCart' ,[$item->id, Auth::user()->id])}}" style="text-decoration: none; color: black;font-size: 20px; padding: 10px 20px">Rent</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
