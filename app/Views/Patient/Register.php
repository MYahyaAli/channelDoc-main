<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/Registration.css') ?>">
  <title>ChannelDoc</title>
</head>
<body>
      <form action="<?php echo site_url('Register/PatCreate')?>" method="post">
        <!-- add action -->
        <div class="container">
          <center>  <h1> Patient Registeration Form</h1> </center>

          <div class="p-2">
            <a href="<?php echo base_url('Login/index')?>" class="btn btn-secondary border profile-button btn-lg">Back</a>    
          </div>
          <!-- redirect back button -->
          <hr>
          <label> Firstname </label> 
            <input type="text" name="firstname" placeholder= "Firstname" size="15" required /> 
          <!-- <label> Middlename: </label> 
            <input type="text" name="middlename" placeholder="Middlename" size="15" required />  -->
          <label> Lastname: </label>  
            <input type="text" name="lastname" placeholder="Lastname" size="15"required /> 


          <label>Mobile Number</label>
            <input type="text" name="phone" placeholder="Phone"  value="+94" size="12"/>
          <label>Email</label>
            <input type="text" name="email" placeholder="Email" size="25"required /> 
          <label> NIC </label> 
            <input type="text" name="nic" placeholder= "NIC No." size="15" required /> 
          Current Address :
          <textarea cols="80" name="address" rows="5" placeholder="Current Address" value="address" required></textarea>

          <label> Password </label> 
            <input type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least 8 characters, an uppercase letter, a number, a lowercase letter" name="password" placeholder= "Password" size="20" required /> 
          <label> Confirm Password </label> 
            <input type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least 8 characters, an uppercase letter, a number, a lowercase letter" name="confirmpassword" placeholder="Confirm Password" size="20" required /> 

            <div class="text-center p-3">
              <button class="btn btn-secondary profile-button btn-lg">Submit</button>    
            </div>
        </div>
      </form>










    </body>

</html>