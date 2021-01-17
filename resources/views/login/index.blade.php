@extends('lay.lay')
@section('title', 'Halaman Login')
@section('content')
<div class="container">
<div class="row mt-10 mb-5">
    <div class="col-md-6 mt-3">
    <img src="{{ url('asset/img/travelimg.jpg') }}" style="width:550px; border-radius:20px">
    </div>
    <div class="col-md-6">
    <form action="/proses_login" method="post" class="mt-5">
    @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" autocomplete="off" autofocus class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
</div>
</div>
@endsection
@section('footer')
