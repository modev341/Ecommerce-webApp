@extends("master")
@section('content')
<br><br>
<style>
    body{
      position: fixe;
      left: 0;
      top: 0;
      width: 100%;
      height: 70%;
      background: url({{ URL::asset('img/bg.jpg') }}) no-repeat center center fixed;
      background-size: cover;
    }
        .form{
            height: 500px;
            padding-top: 100px;
        }
    </style>
<div class="container form ">
    <div class="row d-flex justify-content-center">
        
        <div class="col-sm-4 ">
            <h3 class="text-white"> Login</h3>
            <form action="/login" method="POST">
                <div class="mb-3">
                    @csrf
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"> 
                </div>
                <div class="mb-3">
                  <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label text-white" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
    </div>
</div>

@endsection