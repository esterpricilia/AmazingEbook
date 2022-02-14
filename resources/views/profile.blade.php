@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($data as $item)
            <div>
                <div>
                    <img src="{{url('/images')}}/{{$item->display_picture_link}}" class="card-img-top" alt="..." width="288px" height="288px" style="object-fit: cover">
                </div>
                <div>
                    <table class="table table-borderless">
                        <tbody> 
                            <tr>
                                <td>First Name:</td><td>{{$item->first_name}}</td>
                            </tr>
                            <tr>
                                <td>Last Name:</td><td>{{$item->last_name}}</td>
                            </tr>
                            <tr>
                                <td>Gender:</td><td>{{$item->last_name}}</td>
                            </tr>
                              
                        </tbody>
      
                  </table>
                </div>
                <div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
