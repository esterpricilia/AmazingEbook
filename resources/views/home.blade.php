@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-sm">
                <thead>
                    <tr>
                      <th scope="col">Author</th>
                      <th scope="col">Title</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($data as $item)
                        <tr>
                            <td>Author {{$item->id}}</td>
                            <td><a href="{{route('detail', $item['id'])}}">[The title of the e-book {{$item->id}} goes here]</a></td>
                        </tr>
                      @endforeach
                    
                  </tbody>    
            </table>
        </div>
    </div>
</div>
@endsection
