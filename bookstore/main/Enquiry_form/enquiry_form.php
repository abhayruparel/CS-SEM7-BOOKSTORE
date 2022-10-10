<?php
include("enquiry_header.php");
?>
<head>
    <link href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/bower_components/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="enquiry_form_style.php"/>
    <!--Form CSS Start-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <!--Form CSS End-->
    
    <script src = "enquiry_validation.js"></script>
</head>





<br>


<div id="page-wrapper">
  
            <div class="container-fluid">
                <!--
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Welcome Students</h4>
                        <ol class="breadcrumb">
                        
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard 1</li>
                        
                        </ol>
                    </div>
                     /.col-lg-12 
                </div>
                -->

                <!-- /.row -->
                <div class="row">
                    <div class="wrapper wrapper--w790">
                        <div class="card card-5">
                            <div class="card-heading">
                                <h2 class="title">Registration Form</h2>
                            </div>
                            <div class="card-body">
                                <form name='registration' onSubmit="return formValidation();" action="enquiry_form_connect.php" method="POST">
                                    <div class="form-row m-b-55">
                                        <div class="name">Name</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="fname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Email ID</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Contact No.</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Interested Field</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="courses">
                                                        <option disabled="disabled" selected="selected">Select Interested Field</option>
                                                        <option>B.Tech UG</option>
                                                        <option>M.Tech</option>
                                                        <option>BCA</option>
                                                        <option>MCA</option>
                                                        <option>BSC/MSC</option>
                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn--radius-2 btn--blue" type="submit">Register</button> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<script>
function formValidation()
{
    var fnam = document.registration.fname;
    var umobile = document.registration.phone;
    var ucourses = document.registration.courses;
    var mail = document.registration.email;


        if(allLetter(fnam))
        {
            if(countryselect(ucourses))
                {
                    if(ValidateEmail(mail))
                        {
                            if(isPhone(umobile)) {

                            }
                        }
                }
        }

    return false;

}
function allLetter(fnam)
{
    var letters = /^[A-Za-z]+$/;
    if(fnam.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Username must have alphabet characters only');
        fnam.focus();
        return false;
    }
}

function countryselect(ucourses)
{
    if(ucourses.value == "Default")
    {
        alert('Select your course from the list');
        ucourses.focus();
        return false;
    }
    else
    {
        return true;
    }
}

function ValidateEmail(mail)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(mail.value.match(mailformat))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!");
        mail.focus();
        return false;
    }
}
function isPhone(umobile){
    var phoneno = /^\d{10}$/;
    if((umobile.value.match(phoneno))) {
        //return true;
        alert('Form Succesfully Submitted');
        window.location.reload()
        return true;
    }
    else
    {
        alert("Invalid number");
        umobile.focus();
        return false;
    }
    
    
        
    
}
</script>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

<?php
include("enquiry_footer.php");
?>