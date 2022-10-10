@if($user)
    <div class="userItem" style="display: inline-block; width:100%; text-align:right; margin:auto; padding:5px;  ">
        <p  style="display: inline-block; font-weight:600; text-align:center"> {{$user->name}}</p> 
        <img src="../assets/images/user.png" alt="" style="display: inline-block; height:50px; width:50px; text-align:right  text-align: center; margin-left: auto;
  margin-right: auto;
  ">
       
    </div>  
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
      <td><a href="{{url('/certificateinfo')}}"  style="height:50px; width:150px">apply now</a></td>
    
    </tr>
    <tr>
      <th scope="row">EEE</th>
      <td><a href=""  style="height:50px; width:150px">apply now</a></td>
    
    </tr>
    <tr>
      <th scope="row">ECE</th>
      <td><a href=""  style="height:50px; width:150px">apply now</a></td>
      
    </tr>
  </tbody>
</table>
    
</div>

<style>
    #carouselExampleControls{
        visibility: hidden;
        overflow: hidden;
        display: none;
    }
    .navbar{
        visibility: hidden;
        overflow: hidden;
        display: none;
    }
</style>
<!-- <script>
    $(".carouselExampleControls").hide();
</script> -->

@endsection