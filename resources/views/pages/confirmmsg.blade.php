<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
</head>

<body>


    <div class="container pt-5">
        <div class="alert alert-success justify-center " role="alert">
            <h4 class="alert-heading">Well done!</h4>
            @if($user)
        <p class="bg-dark"> {{$user->name}}</p>    
        @endif
            <p>You have successfully registered. we will contact with you soon</p>
            <hr>
            <a href="{{url('/')}}" class="btn btn-primary" role="button">HOME</a> <br>
        </div>
    </div>
</body>

</html>