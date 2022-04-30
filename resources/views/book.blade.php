@extends('layouts.main')
@php
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;
@endphp
@section('page-view')
<div class="container-fluid bg-info">
    <div class="row">
     <div class="col-4"> <H3>Book Details</H3> </div>
     @if (session('msg'))
     <div class="alert-success">
       {{session('msg')}}
     </div>
     @endif
    <div class="col-8 bouter">
      @if (Auth::check())
        {{ Auth::user()->email }}
      @endif
      <a href="/logout"><button type="button" class="btn btn-dark logout">logout</button></a>
    </div>
    </div>
    <div class="row py-3 ">
      @foreach ($book as $bookval)
      
      <div class="col-sm-4 card-group my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              {{ $bookval->book_name }}
            </h5>
            <p class="card-text"> {{ $bookval->book_author }}</p>
            
             @foreach ($purchased_book[0]['book'] as $value)
               @if($bookval->id == $value['id'])
               <a href="purchases" class="btn btn-success disabled">purchased</a>
               @else
               <a href="{{url('purchases/'.$bookval->id)}}" class="btn btn-danger">puchases</a>
               @endif  
             @endforeach
          </div>
        </div>
      </div>
      @endforeach
    </div>     
</div>
@endsection