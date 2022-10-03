<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="{{asset('/assets/images/logo.png')}}" type="image/x-icon" />
    <link rel="BUP" href="images/logo.png">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-dark">
        <ol class="">
            <a href="{{('/course')}}" class="text-light">Application form</a>
        </ol>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            @if($user)
            <div class="userItem"
                style="display: inline-block; width:100%; text-align:right; margin:auto; padding:5px;  ">
                <p style="display: inline-block; font-weight:600; text-align:center; color:#fff; "> {{$user->name}}</p>
                <img src="../assets/images/user.png" alt=""
                    style="display: inline-block; height:50px; width:50px; text-align:right  text-align: center; margin-left: auto; margin-right: auto;">

            </div>
            @endif

        </div>
    </nav>

    <div class="container">
        <form class="form" action="{{ route('infoRegister')}}" method="POST">
            @csrf
            @method("POST")
            <div class="step-forms step-forms-active">
              <h1>Fill up Form</h1>
                <div class="group-inputs">
                    <h1 class="bg-success text-light text-light text-center py-2">Basic Information</h1>

                </div>
                <div class="group-inputs">
                    <label for="fname">Father Name</label>
                    <input type="text" name="fname" />
                </div>
                <div class="group-inputs">
                    <label for="mname">Mother Name</label>
                    <input type="text" name="mname" />
                </div>
                <div class="group-inputs">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" />
                </div>


                
                    
                        <h1 class="bg-success text-light text-center py-2">SSC Information</h1>
                        <div class="group-inputs">
                            <label for="board">Board</label>
                            <input type="text" name="board" />
                        </div>

                        <div class="group-inputs">
                            <label for="group">Group</label>
                            <input type="text" name="group" />
                        </div>


                        <div class="group-inputs">
                            <label for="ID">Roll No</label>
                            <input type="number" name="roll" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">Registration No</label>
                            <input type="number" name="registrationNo" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">GPA (without additional subject)</label>
                            <input type="number" name="gpaaditional" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">GPA</label>
                            <input type="number" name="gpa" />
                        </div>

                   



                    
                        <h1 class="bg-success text-light text-light text-center py-2 ">HSC Information</h1>
                        <div class="group-inputs">
                            <label for="board">Board</label>
                            <input type="text" name="board" />
                        </div>

                        <div class="group-inputs">
                            <label for="group">Group</label>
                            <input type="text" name="group" />
                        </div>


                        <div class="group-inputs">
                            <label for="ID">Roll No</label>
                            <input type="number" name="roll" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">Registration No</label>
                            <input type="number" name="registrationNo" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">GPA (without additional subject)</label>
                            <input type="number" name="gpaaditional" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">GPA</label>
                            <input type="number" name="gpa" />
                        </div>
                    
                


                <div class="row">
                    <div class="col-sm-10"><input type="submit" value="Submit" class="btn" data-toggle="modal"
                            data-target="#emailSentModal" /></div>
                </div>

        </form>
    </div>
</body>

</html>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>