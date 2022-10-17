@if($user)
<div class="col-lg-12 p-3 d-flex justify-content-end overflow-hidden pr-5">
  <nav class=" navbar-expand-lg navbar-light bg-light pr-5">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <div class="dropdown ">
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
            </a>
            <ul class="dropdown-menu dropdown-menu-end pr-5">
                <li>
                    <a class="dropdown-item text-success pr-5">{{$user->name}}</a>
                </li>
               
                <li>
                <a class="dropdown-item pr-5" href="{{ route('signout') }}"></span> logout <span
                    ></span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- <div class="userItem flex" style="display: inline-block; width:100%; text-align:right; margin:auto; padding:5px;  ">
    <ul class="nav navbar-nav navbar-right text-right">
        <li>
            <p style="display: inline-block; font-weight:600;"> {{$user->name}}</p>
            <img src="../assets/images/user.png" alt="" style="display: inline-block; height:40px; width:40px; text-align:right margin-left: auto;
  margin-right: auto;
  ">
        </li>

        <li><a href="{{ route('signout') }}"><span class="glyphicon glyphicon-user"></span> logout <span
                    class="caret"></span></a>
        </li>
    </ul>

</div> -->
@endif

@extends('layout.master')

@section('content')
<!-- <h1>Step 2</h1> -->
<br>
<div class="container">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Course</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">CSE</th>
                <td><a href="{{url('/certificateinfo')}}" style="height:50px; width:150px">apply now</a></td>

            </tr>
            <tr>
                <th scope="row">EEE</th>
                <td><a href="" style="height:50px; width:150px">apply now</a></td>

            </tr>
            <tr>
                <th scope="row">ECE</th>
                <td><a href="" style="height:50px; width:150px">apply now</a></td>

            </tr>
        </tbody>
    </table>

</div>

<style>
#carouselExampleControls {
    visibility: hidden;
    overflow: hidden;
    display: none;
}

.navbar {
    visibility: hidden;
    overflow: hidden;
    display: none;
}

.btnn {
    visibility: hidden;
    overflow: hidden;
    display: none;
}
</style>
<!-- <script>
    $(".carouselExampleControls").hide();
</script> -->

@endsection