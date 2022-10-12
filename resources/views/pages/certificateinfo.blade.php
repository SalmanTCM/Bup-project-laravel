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
                            <label for="sel1">Examination</label>
                            <select class="form-control" id="sel1" name="ssc_exam">
                                <option>SSC</option>
                                <option>Dakhil</option>
                            </select>
                        </div>

                        <div class="group-inputs">
                            <label for="board">Board</label>
                            <select class="form-control" id="sel1" name="ssc_board">
                                <option>Dhaka</option>
                                <option>Rajshahi</option>
                                <option>Comilla</option>
                                <option>Jessore</option>
                                <option>Chittagong</option>
                                <option>Barisal</option>
                                <option>Sylhet</option>
                                <option>Dinajpur</option>
                                <option>Madrasah</option>
                            </select>
                        </div>

                        <div class="group-inputs">
                            <label for="passing year">Year</label>
                            <select class="form-control" id="sel1" name="ssc_year">
                            class="form-control">
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2016</option>
                                                            <option value="2015">2017</option>
                                                            <option value="2015">2018</option>
                                                            <option value="2015">2019</option>
                                                            <option value="2015">2020</option>
                            </select>
                        </div>

                        <div class="group-inputs">
                            <label for="group">Group</label>
                            <select class="form-control" id="sel1" name="ssc_group">
                                <option>Science</option>
                                <option>Commerce</option>
                            </select>
                        </div>


                        <div class="group-inputs">
                            <label for="ID">Roll No</label>
                            <input type="number" name="ssc_roll" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">Registration No</label>
                            <input type="number" name="ssc_registrationNo" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">GPA (without additional subject)</label>
                            <input type="number" name="ssc_gpaaditional" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">GPA</label>
                            <input type="number" name="ssc_gpa" />
                        </div>

                   



                    
                        <h1 class="bg-success text-light text-light text-center py-2 ">HSC Information</h1>
                        <div class="group-inputs">
                            <label for="sel1">Examination</label>
                            <select class="form-control" id="sel1" name="hsc_exam">
                                <option>HSC</option>
                                <option>Alim</option>
                            </select>
                        </div>
                        
                        
                        <div class="group-inputs">
                            <label for="board">Board</label>
                            <select class="form-control" id="sel1" name="hsc_board">
                                <option>Dhaka</option>
                                <option>Rajshahi</option>
                                <option>Comilla</option>
                                <option>Jessore</option>
                                <option>Chittagong</option>
                                <option>Barisal</option>
                                <option>Sylhet</option>
                                <option>Dinajpur</option>
                                <option>Madrasah</option>
                            </select>
                        </div>

                        <div class="group-inputs">
                            <label for="pyear">Year</label>
                            <select class="form-control" id="sel1" name="hsc_year">
                            class="form-control">
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2016</option>
                                                            <option value="2015">2017</option>
                                                            <option value="2015">2018</option>
                                                            <option value="2015">2019</option>
                                                            <option value="2015">2020</option>
                            </select>
                        </div>

                        <div class="group-inputs">
                            <label for="group">Group</label>
                            <select class="form-control" id="sel1" name="hsc_group">
                                <option>Science</option>
                                <option>Commerce</option>
                            </select>
                        </div>


                        <div class="group-inputs">
                            <label for="ID">Roll No</label>
                            <input type="number" name="hsc_roll" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">Registration No</label>
                            <input type="number" name="hsc_registrationNo" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">GPA (without additional subject)</label>
                            <input type="number" name="hsc_gpaaditional" />
                        </div>

                        <div class="group-inputs">
                            <label for="ID">GPA</label>
                            <input type="number" name="hsc_gpa" />
                        </div>
                    
                


                <div class="row">
                    <div class="col-sm-12"><input type="submit" value="Submit" class="btn btn-primary" data-toggle="modal"
                            data-target="#emailSentModal" /></div>
                </div>

        </form>
    </div>
</body>

</html>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>