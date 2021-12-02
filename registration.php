<?php require_once("header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Organizer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
   
<body background="https://lh5.googleusercontent.com/proxy/GiYImiH5aZ3XKytuiaFl3GdfNpB3FS5bY2yXSkiDW8Z9p4K_BcxQ70Hfe-GSG4ndfjLue8xOUMsBB_sZDqxZpbnmiSjsU9ewt84nYrMnAgq0LEykqmkr_2TyPxUmZMa4APZPiuwaafr7ytS2TA5rNrzC=s0-d">

<body>
<div class="container p-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-black"> <b>Registration Form</b></div>
                <div class="card-body">
                    <form action="actionRegistration.php" method="post">

                        <div class="form-group">
                            <label for="name"><b> Name :</b> </label>
                            <input class="form-control" type="text" name="name" placeholder=" Fill in name " required>
                        </div>

                        <div class="form-group">
                            <label for="matric_number"><b> Matric Number :</b> </label>
                            <input class="form-control" type="text" name="matric_number" placeholder=" Matric Number " required>
                        </div>

                        <div class="form-group">
                            <label for="faculty"><b> Faculty :</b> </label>
                            <select class="form-control" name="faculty" required>
                                <option value="" selected disabled>Choose your Faculty</option>
                                <option value="fst">FST</option>
                                <option value="fpqs">FPQS</option>
                                <option value="fem">FEM</option>
                                <option value="fsu">FSU</option>
                                <option value="fpsk">FPSK</option>
                                <option value="fkp">FKP</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="event"><b> Event Name :</b> </label>
                            <input class="form-control" type="text"  name="event" placeholder="event name"required>
</div>

                        

                        <div class="form-group">
                            <label for="email"><b> Email :</b> </label>
                            <input class="form-control" type="text"  name="email" placeholder="Email"required>
                        </div>

                        <div class="form-group">
                            <label for="phone_number"><b> Phone Number :</b> </label>
                            <input class="form-control" type="number"  name="phone_number" placeholder="Fill in Phone Number"required>
                        </div>

                        <!-- <div class="form-group">
                            <label for="payment_method"><b> Choose Your Payment Method:</b> </label>
                            <select class="form-control" id="payment_method" name= "payment_method" required>
                                <option value="" selected disabled>Choose your payment method</option>
                                <option value="walk_in">Walk in</option>
                                <option value="online">Online</option> 
                                </select> </div>

                                <script>
                  
                              $("#payment_method").change(function() {
                                 if ($(this).val() == "online") {
                                    $('#hijk').show();
                                     $('#payment_proof').attr('required', '');
                                     $('#payment_proof').attr('data-error', 'This field is required.');
                                    } else {
                                    $('#hijk').hide();
                                  $('#payment_proof').removeAttr('required');
                                      $('#payment_proof').removeAttr('data-error');
                                    }
                                     });
                                      $("#payment_method").trigger("change");
                                </script>

    <div class="form-group" id="hijk">
				
                <label for='payment_proof'><b>Payment Proof:</b></label> <br>
                <input id='payment_proof' class="form-control" name="payment_proof" type="file" multiple="multiple">

                </div> -->
                       <br> <input class="btn btn-primary btn-block text-white" type="submit" name="btnRegister" value="Register"></br>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>