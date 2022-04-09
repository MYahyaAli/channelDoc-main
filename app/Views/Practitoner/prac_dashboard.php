<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChannelDoc</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dash.css')?>">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>

<!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                        <!--Use the users name here-->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
  </nav>

<div class="wrapper">
    <div class="sidebar">
      <div class="logo_content">
        <div class="logo">
          <div class="logo_name">
            <h3 class="pic">My Profile</h3>
            <!-- upload image -->
            <!-- <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');">
                    </div>
                </div>
            </div> -->
            <!-- end of upload image -->
            <h4 class="name">Name</h4>
            <p >Specialization</p>
          </div>
        </div>
      </div><br>
  
    <!--directions of the navigation buttons-->
      <div class="side_nav">
        <ul>
          <li>
          <a href="#">
            <i class='bx bx-user-circle' ></i>
            <span class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">Create Profile</span>
          </a>
          </li>
          <li>
          <a href="#">
            <i class='bx bx-group' ></i>
            <span class="tablinks" onclick="openCity(event, 'My Bookings')">My Bookings</span>
          </a>
          </li>
          <li>
          <a href="#">
            <i class='bx bxs-report'></i>
            <span class="tablinks" onclick="openCity(event, 'Reports')">My Reports</span>
          </a>
          </li>
          <li>
          <a href="#">
            <i class='bx bx-history' ></i>
            <span class="tablinks" onclick="openCity(event, 'History')">History</span>
          </a>
          </li>
          <li>
            <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name"> Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    
    <div class="main">
      <!--Create Profile content-->
      <div id="Profile" class="tabcontent">
        
        <h2>Schedule your Appointements </h2><br>
        <!--starting of the form and table-->
        <form action="">
          
        <div class="hos">
          <label for="hospital"> Hospital/Center: </label>
          <select name="place" id="hospital">
            <option value="Allergy and Asthma center-Colombo 05">Allergy and Asthma center-Colombo 05</option>
            <option value="Asia Hospital-Kotte">Asia Hospital-Kotte</option>
            <option value="Asia Hospital-Maharagama">Asia Hospital-Maharagama</option>
            <option value="Asiri Central-Colombo 10">Asiri Central-Colombo 10</option>
            <option value="Asiri Surgical-Colombo 05">Asiri Surgical-Colombo 05</option>
            <option value="Asiri Hospital-Galle">Asiri Hospital-Galle</option>
            <option value="Asiri Hospital-Kandy">Asiri Hospital-Kandy</option>
            <option value="Blue Cross Medical Center -Rajagiriya">Blue Cross Medical Center -Rajagiriya</option>
            <option value="CDEM Hospital-Colombo 10">CDEM Hospital-Colombo 10</option>
            <option value="Ceymed Healthcare Services-Nugegoda">Ceymed Healthcare Services-Nugegoda</option>
            <option value="Child Eye (Pvt)Ltd-Rajagiriya">Child Eye (Pvt)Ltd-Rajagiriya</option>
            <option value="Dental Square-Colombo 06">Dental Square-Colombo 06</option>
            <option value="Dr.Neville Fernando Teaching Hospital-Malabe">Dr.Neville Fernando Teaching Hospital-Malabe</option>
            <option value="Durdans Hospital-Colombo 03">Durdans Hospital-Colombo 03</option>
            <option value="Durdans Medical Center-Negombo">Durdans Medical Center-Negombo</option>
            <option value="Durdans Medical Center-Anuradhapura">Durdans Medical Center-Anuradhapura</option>
            <option value="Durdans Medical Center-Moratuwa">Durdans Medical Center-Moratuwa</option>
            <option value="Family Dental Services-Colombo 03">Family Dental Services-Colombo 03</option>
            <option value="Family Planning Association-Colombo 07">Family Planning Association-Colombo 07</option>
            <option value="Golden Key Hospital-Rajagiriya">Golden Key Hospital-Rajagiriya</option>
            <option value="Heart Aird Center-Colombo 07">Heart Aird Center-Colombo 07</option>
            <option value="Hemas Hospital-Thalawatugoda">Hemas Hospital-Thalawatugoda</option>
            <option value="Hemas Hospital-Wattala">Hemas Hospital-Wattala</option>
            <option value="Imperial Healthcare-Colombo 07">Imperial Healthcare-Colombo 07</option>
            <option value="Kings Hospital-Colombo 05">Kings Hospital-Colombo 05</option>
            <option value="Lanka Hospital-Colombo 05">Lanka Hospital-Colombo 05</option>
            <option value="LEEDS Healthcare-Thalapathpitiya">LEEDS Healthcare-Thalapathpitiya</option>
            <option value="Lush Skin Clinique-Battaramulla">Lush Skin Clinique-Battaramulla</option>
            <option value="MediHelp Hospital-Horana">MediHelp Hospital-Horana</option>
            <option value="MediHelp Hospital-Beruwala">MediHelp Hospital-Beruwala</option>
            <option value="MediHelp Hospital-Piliyandala">MediHelp Hospital-Piliyandala</option>
            <option value="Metro Medicare-Pitakotte">Metro Medicare-Pitakotte</option>
            <option value="Metro Medicare-Kurunegala">Metro Medicare-Kurunegala</option>
            <option value="Nawaloka Hospital-Colombo">Nawaloka Hospital-Colombo</option>
            <option value="Nawaloka Hospital-Negombo">Nawaloka Hospital-Negombo</option>
            <option value="Nawaloka Medical Center-Battaramulla">Nawaloka Medical Center-Battaramulla</option>
            <option value="Nawaloka Medical Center-Kiribathgoda">Nawaloka Medical Center-Kiribathgoda</option>
            <option value="Nawaloka Medical Center-Mt.Lavinia">Nawaloka Medical Center-Mt.Lavinia</option>
            <option value="Nawaloka Medical Center-Panadura">Nawaloka Medical Center-Panadura</option>
            <option value="Ninewells Hospital">Ninewells Hospital</option>
            <option value="Pannipitiya Private Hospital">Pannipitiya Private Hospital</option>
            <option value="Royal Hospital-Colombo 06">Royal Hospital-Colombo 06</option>
            <option value="Santa Dora Hospital-Battaramulla">Santa Dora Hospital-Battaramulla</option>
            <option value="Specialist Dermatology(Skin) Clinic-Thalawathugoda">Specialist Dermatology(Skin) Clinic-Thalawathugoda</option>
            <option value="Suwasewana Hospital-Awissawella">Suwasewana Hospital-Awissawella</option>
            <option value="Vision Care Opticals-Colombo">Vision Care Opticals-Colombo</option>
            <option value="Vision Care Opticals-Mt.Lavinia">Vision Care Opticals-Mt.Lavinia</option>
            <option value="Vision Care Opticals-Negombo">Vision Care Opticals-Negombo</option>
            <option value="Vision Care Opticals-Panadura">Vision Care Opticals-Panadura</option>
            <option value="Vision Care Opticals-Ratnapura">Vision Care Opticals-Ratnapura</option>
            <option value="Western Hospital-Colombo 08">Western Hospital-Colombo 08</option>
            <option value="Zenith Dentistry-Dehiwala">Zenith Dentistry-Dehiwala</option>

          </select>
          <br><br></div>

          <div class="date">
            <label for="date"> Available Date: </label>
            <input type="date" id="date">
            <br><br>
          </div>

          <div class="time">
            <label for="time"> Available Time Slot: </label><br>
            <select name="time" id="time">
                <option value="6.00am - 8.00am">6.00am - 8.00am</option>
                <option value="8.00am - 10.00am">8.00am - 10.00am</option>
                <option value="10.00am - 12.00pm">10.00am - 12.00pm</option>
                <option value="12.00pm - 2.00pm">12.00pm - 2.00pm</option>
                <option value="2.00pm - 4.00pm">2.00pm - 4.00pm</option>
                <option value="4.00pm - 6.00pm">4.00pm - 6.00pm</option>
                <option value="6.00pm - 8.00pm">6.00pm - 8.00pm</option>
                <option value="8.00pm - 10.00pm">8.00pm - 10.00pm</option>
            </select>
              <br><br>
            </div>

          <div class="ppl">
            <label for="num">No of People: </label>
            <select name="people" id="num">
              <option value="10">10</option>
              <option value="15">15</option>
              <option value="20">20</option>
              <option value="25">25</option>
              <option value="30">30</option>
              <option value="35">35</option>
              <option value="40">40</option>
            </select>
            <br><br>
          </div>


          <div class="fee">
            <label for="fee">Fee: </label>
            <select name="fee" id="fee">
              <option value="LKR 1500.00">LKR 1500.00</option>
              <option value="LKR 1800.00">LKR 1800.00</option>
              <option value="LKR 2100.00">LKR 2100.00</option>
              <option value="LKR 2500.00">LKR 2500.00</option>
              <option value="LKR 3000.00">LKR 3000.00</option>
              <option value="LKR 3500.00">LKR 3500.00</option>
              <option value="LKR 4000.00">LKR 4000.00</option>
            </select>
            <br><br>
          </div>

          <div class="btn">
            <input type="button" id="submit" class="sub" value="Submit">
            <br><br>
          </div>
        </form>

        <!--starting of the table-->
        <table id="table">
          <tr>
            <th>Hospital/Center</th>
            <th>Date</th>
            <th>Time Slots</th>
            <th>No of People</th>
            <th>Fee</th>
          </tr>
        </table>
      </div>
  
      <!--My Bookings content-->
      <div id="My Bookings" class="tabcontent">
        <h2>Patients who have channelled you </h2>
        <p>Paris is the capital of France.</p> 
      </div>

      <!-- My Reports content-->
      <div id="Reports" class="tabcontent">
        <h3>My Reports</h3>
        <p>Paris is the capital of France.</p> 
      </div>
  
      <!--History content-->
      <div id="History" class="tabcontent">
        <h3>My History</h3>
        <p>Tokyo is the capital of Japan.</p>
      </div>
    </div>
    
  </div>

  <!-- Footer -->
  <div class="container">
        <div class="row">
            <div class="col">
             <div class="row row-cols-2">
                 <div class="col">
                    <!--Logo-->
                 </div>
                 <div class="col">
                     <p>We provide the best Doctors for your care as you desire.</p>
                 </div>
             </div>
            </div>
            <div class="col">
                <!--
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                -->
            </div>
            <div class="col">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Appointments</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        Telephone :- <br>0114523659
                    </li>
                    <li>
                        Address :- <br>Colombo, Sri Lanka
                    </li>
                    <li>
                        Email :- <br>channeldoc@yahoo.com
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <a href="#">Privacy</a>
                    </li>
                    <li>
                        <a href="#">Policy</a>
                    </li>
                    <li>
                        <a href="#">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="#">Partners</a>
                    </li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-footer text-muted">
                All rights Reserved to Group 3
        </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>

        // //imgage upload js
        // function readURL(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             $('#imagePreview').css('background-image', 'url('+e.target.result +')');
        //             $('#imagePreview').hide();
        //             $('#imagePreview').fadeIn(650);
        //         }
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }
        // // $("#imageUpload").change(function() {
        // //     readURL(this);
        // // });



        // Move to the different pages by buttons in navigation side bar
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();


        //Getting form data into the table
        document.getElementById("submit").onclick = function () {
          document.getElementById("table");

          var table = document.getElementById("table");
          var row = table.insertRow(-1);
          var hospital = row.insertCell(0);
          var date = row.insertCell(1);
          var time = row.insertCell(2);
          var num = row.insertCell(3);
          var fee = row.insertCell(4);
          hospital.innerHTML = document.getElementById("hospital").value;
          date.innerHTML = document.getElementById("date").value;
          time.innerHTML = document.getElementById("time").value;
          num.innerHTML = document.getElementById("num").value;
          fee.innerHTML = document.getElementById("fee").value;

          return false;
        }

    </script>

  

</body>
</html>