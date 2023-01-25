<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <title>Farmer Registration Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    <script>
        function state() {
            var a = document.getElementById('states').value;
            if (a === 'Oyo') {
                var array = ['Ibadan', 'Ibadan'];
            } else if (a === 'Damilola') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'ASSAM') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'BIHAR') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'GUJARAT') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'HARYANA') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'HIMACHAL PRADESH') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'JAMMU AND KASHMIR') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'KARNATAKA') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'KERALA') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'MADHYA PRADESH') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'MAHARASHTRA') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'TAMIL NADU') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'PUDUCHERRY') {
                var array = ['Yanam', 'Pondicherry', 'Mahe', 'Karaikal'];
            } else if (a === 'LAKSHADWEEP') {
                var array = ['Lakshadweep'];
            } else if (a === 'GOA') {
                var array = ['North Goa ', 'South Goa'];
            } else if (a === 'DADRA AND NAGAR HAVELI') {
                var array = ['Favour & Damilola'];
            } else if (a === 'DAMAN AND DIU') {
                var array = ['Diu', 'Daman'];
            } else if (a === 'CHHATTISGARH') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'JHARKAND') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'WEST BENGAL') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'MEGHALAYA') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'SIKKIM') {
                var array = ['North ', 'West', 'South', 'East'];
            } else if (a === 'UTTAR PRADESH') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'RAJASTHAN') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
                //check
            } else if (a === 'PUNJAB') {
                var array = ['Gurdaspur', 'Amritsar', 'Kapurthala', 'Jalandhar', 'Hoshiarpur', 'Nawanshahr *', 'Rupnagar', 'Fatehgarh Sahib *', 'Ludhiana', 'Moga *', 'Firozpur', 'Muktsar *', 'Faridkot', 'Bathinda', 'Mansa *', 'Sangrur', 'Patiala'];
            } else if (a === 'NAGALAND') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'TRIPURA') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'MIZORAM') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'ARUNACHAL PRADESH') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            } else if (a === 'CHANDIGARH') {
                var array = ['Chandigarh'];
            } else if (a === 'Ibadan') {
                var array = ['North West   *', 'North   *', 'North East   *', 'East   *', 'New Delhi', 'Central  *', 'West   *', 'South West   *', 'South  *'];
            } else if (a === 'Nigeria') {
                var array = ['ijebu', 'oyo', 'ekiti', 'enugu', 'lagos', 'bauchi', 'kogi', 'kwara', 'Abuja', 'nasarawa', 'ogun', 'osun',  'plateau', 'rivers', 'jos', 'sokoto'];
            }


            var string = "";
            for (let i = 0; i < array.length; i++) {
                string = string + "<option>" + array[i] + "</option>";

            }
            string = "<select nmae = 'lol'>" + string + "</select>"
            document.getElementById('district').innerHTML = string;
        }
    </script>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
    .myfooter {
        background-color: #292b2c;

        color: goldenrod;
        margin-top: 15px;
    }

    .aligncenter {
        text-align: center;
    }

    a {
        color: goldenrod;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        background-color: #292b2c;
    }

    .navbar-custom {
        background-color: #292b2c;
    }

    /* change the brand and text color */
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
        background-color: #292b2c;
    }

    .navbar-custom .navbar-nav .nav-link {
        background-color: #292b2c;
    }

    .navbar-custom .nav-item.active .nav-link,
    .navbar-custom .nav-item:hover .nav-link {
        background-color: #292b2c;
    }


    .mybtn {
        border-color: green;
        border-style: solid;
    }


    .right {
        display: flex;
    }

    .left {
        display: none;
    }

    .cart {
        /* margin-left:10px; */
        margin-right: -9px;
    }

    .profile {
        margin-right: 2px;

    }

    .login {
        margin-right: -2px;
        margin-top: 12px;
        display: none;
    }

    .searchbox {
        width: 60%;
    }

    .lists {
        display: inline-block;
    }

    .moblists {
        display: none;
    }

    .logins {
        text-align: center;
        margin-right: -30%;
        margin-left: 35%;
    }
  body{
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
    }

    .my-form, .login-form
    {
        font-family: Raleway, sans-serif;
    }

    .my-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        /* .mycarousel {
            display: none;
        }

        .firstimage {
            height: auto;
            width: 90%;
        }

        .card {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;

        }

        .col {
            margin-top: 20px;
        } */

        .right {
            display: none;
            background-color: #ff5500;
        }

        /* 
            .settings{
            margin-left:79%;
        } */
        .left {
            display: flex;
        }

        .moblogo {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: 35%;
            padding: 15px;
        }

        .searchbox {
            width: 95%;
            margin-right: 5%;
            margin-left: 0%;
        }

        .moblists {
            display: inline-block;
            text-align: center;
            width: 100%;
        }
        /* .pic{
        height:auto;
    } */
    
    /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
    }
    </style>
</head>

<body>
 
<main class="my-form">
		<div class="cotainer">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header" style="background-color:#292b2c"><h4 style="font-style:bold;color:goldenrod">Farmer Registration<h4></div>
						<div class="card-body border border-dark">
							<form name="my-form" action="FarmerRegister.php" method="post">
								<div class="form-group row">
									<label for="full_name" class="col-md-4 col-form-label text-md-right"><i class="fas fa-user mr-2"></i><b>Full Name</b></label>
									<div class="col-md-6">
										<input type="text" id="full_name" class="form-control border border-dark" name="name" placeholder="Enter Your Name" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"><i class="fas fa-phone-alt mr-2"></i><b>Phone Number</b></label>
									<div class="col-md-6">
										<input type="text" id="phone_number" class="form-control border border-dark" name="phonenumber" placeholder="Phone Number" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="present_address" class="col-md-4 col-form-label text-md-right"><i class="fas fa-home mr-2"></i><b>Present Address</b></label>
									<div class="col-md-6">
										<textarea type="text" id="present_address" class="form-control border border-dark" rows="4" name="address" placeholder="Address" required></textarea>
									</div>
								</div>	
							
                                <div class="form-group row">
                                    <label for="states" class="col-md-4 col-form-label text-md-right"><b><i class="fas fa-globe-americas mr-2"></i>State</b></label>
                                    <div class="col-md-6">
                                        <select name="statevalue" id="states" onchange="state()" class="form-control border border-dark">
                                            <option value="0">--Select State--</option>
                                            
                                            <option value="Oyo">Oyo</option>
                                            <!-- <option value="Ibadan">ARUNACHAL PRADESH</option>
                                            <option value="ASSAM">ASSAM</option>
                                            <option value="BIHAR">BIHAR</option>
                                            <option value="CHANDIGARH">CHANDIGARH</option>
                                            <option value="CHHATTISGARH">CHHATTISGARH</option>
                                            <option value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
                                            <option value="DAMAN AND DIU">DAMAN AND DIU</option>
                                            <option value="DELHI">DELHI</option>
                                            <option value="GOA">GOA</option>
                                            <option value="GUJARAT">GUJARAT</option>
                                            <option value="HARYANA">HARYANA</option>
                                            <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                                            <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
                                            <option value="JHARKAND">JHARKAND</option>
                                            <option value="KARNATAKA">KARNATAKA</option>
                                            <option value="KERALA">KERALA</option>
                                            <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                                            <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                            <option value="MAHARASHTRA">MAHARASHTRA</option>
                                            <option value="MANIPUR">MANIPUR</option>
                                            <option value="MEGHALAYA">MEGHALAYA</option>
                                            <option value="MIZORAM">MIZORAM</option>
                                            <option value="NAGALAND">NAGALAND</option>
                                            <option value="ODISHA">ODISHA</option>
                                            <option value="PUDUCHERRY">PUDUCHERRY</option>
                                            <option value="PUNJAB">PUNJAB</option>
                                            <option value="RAJASTHAN">RAJASTHAN</option>
                                            <option value="SIKKIM">SIKKIM</option>
                                            <option value="TAMIL NADU">TAMIL NADU</option>
                                            <option value="TELANGANA">TELANGANA</option>
                                            <option value="TRIPURA">TRIPURA</option>
                                            <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                            <option value="UTTARAKHAND">UTTARAKHAND</option>
                                            <option value="UTTARANCHAL">UTTARANCHAL</option>
                                            <option value="WEST BENGAL">WEST BENGAL</option> -->
                                        </select>
                                    </div>
                                </div>    
                                <div class="form-group row">
                                    <label for="states" class="col-md-4 col-form-label text-md-right"><b><i class="fas fa-globe-americas mr-2"></i>District</b></label>
                                    <div class="col-md-6">
                                        <select name="district" id="district" class="form-control border border-dark">>
                                            <option>Select District</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
									<label for="account2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-pencil-alt mr-2"></i><b>PAN No.</b></label>
									<div class="col-md-6">
										<input type="text" id="account2" class="form-control border border-dark" name="pan" placeholder="Pan number" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="account1" class="col-md-4 col-form-label text-md-right"><i class="fas fa-university mr-2"></i><b>Bank Account No.</b></label>
									<div class="col-md-6">
										<input type="text" id="account1" class="form-control border border-dark" name="account" placeholder="Bank Account number" required>
									</div>
								</div>


								<div class="form-group row">
									<label for="p1" class="col-md-4 col-form-label text-md-right"><i class="fas fa-lock mr-2"></i><b>Password</b></label>
									<div class="col-md-6">
										<input id="p1" class="form-control border border-dark" type="password" name="password" placeholder="Password" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="p2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-lock mr-2"></i><b>Confirm Password</b></label>
									<div class="col-md-6">
										<input id="p2" class="form-control border border-dark" type="password" name="confirmpassword" placeholder="Confirm Password" required>
									</div>
								</div>

								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary " style="background-color:#292b2c;color:goldenrod"   name="register" value="Register">
										Register
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
   
</body>

</html>


<?php

include("../Includes/db.php");

$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '2345678910111211';
$encryption_key = "DE";

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $account = mysqli_real_escape_string($con, $_POST['account']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
    $district = mysqli_real_escape_string($con, $_POST['district']);
    $state = mysqli_real_escape_string($con, $_POST['statevalue']);

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );
    // echo $encryption;

    if (strcmp($password, $confirmpassword) == 0) {

        $query = "insert into farmerregistration (farmer_name,farmer_phone,
                farmer_address, farmer_state, farmer_district,
                farmer_pan,farmer_bank,farmer_password) 
                values ('$name','$phonenumber','$address',
                '$state','$district','$pan','$account',
                '$encryption')";

        $run_register_query = mysqli_query($con, $query);
        echo "<script>console.log('SucessFully Inserted');</script>";
        echo "<script>window.open('FarmerLogin.php','_self')</script>";
    } else if (strcmp($password, $confirmpassword) != 0) {
        echo "<script>
				alert('Password and Confirm Password Should be same');
			</script>";
    }
}

?>