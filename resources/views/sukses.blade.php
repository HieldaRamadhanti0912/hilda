@extends('layouts.app')

@section('title')
    Checkout Success
@endsection
 @section('content')
 <main style="color: black;">
    <div class="section section-success d-flex align-items-center">
      <div class="col" style="margin-left:200px;">
        <img src="{{ url('bckend/img/ic_mail.png') }}" alt="">
        <h1 style="margin-left: 30px;">Yay! Success</h1>
        <p style="margin-left: 20px;">
          We've sent you email for trip Instructions
          <br style="margin-left: 30px;">
          please read ot as well
        </p>
        <a href="{{ route('home') }}" class="btn btn-primary mt-3 px-5" style="margin-left: 30px;
        color: #fff;">
          Home Page
        </a>
      </div>
    </div>
  </main>
   
 @endsection