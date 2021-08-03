<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=B612:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom Styling -->
    <!-- <link rel="stylesheet" href="../../css/style.css"> -->

    <!-- Admin Styling -->
    <link rel="stylesheet" href="/css/doctor-nav.css" />
    <link rel="stylesheet" href="/css/doctor-table.css" />
    <link rel="stylesheet" href="/css/doctor.css" />

    <title>Dashboard</title>
    <link rel="icon" href="../images/hms.svg">
  </head>

  <body>
    <header class="header-area">
      <div class="title">
      <a href="{{route('dashBoard')}}"><h1>E-Health Care</h1></a>
      </div>
      <div class="navigation">
        <nav class="menu" align="right">
              <a href="{{route('logout')}}">Logout</a>
        </nav>
      </div>
    </header>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
      <!-- Left Sidebar -->
      <div class="left-sidebar">
        <ul>
          <li><a href="{{route('doctorProfile')}}">Profile</a></li>
          <li><a href="{{route('patientDetails')}}">Patient Details</a></li>
          <li><a href="{{route('approveAppointment')}}">Approve Apointment</a></li>
          <li><a href="{{route('apointmentHistory')}}">Apointment History</a></li>
          <li><a href="{{route('operationTheatres')}}">Operation Theatres</a></li>
          <li><a href="{{route('hospitalAuthority')}}">Hospital Authority</a></li>
          <li><a href="{{route('feedbackReview')}}">Feedback & Review</a></li>
          <li><a href="{{route('help')}}">Help</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">
            <div class="col-4 text-center">
                <h1>  <a href="{{route('icuRoom')}}">ICU</a> </h1> <br/>
                Room
            </div>

            <div class="col-4 text-center">
                <h1><a href="{{route('emergencyRoom')}}">Emergency </a></h1> <br/>
                Room
            </div>
            <br><br>
            <b>____________________________________Emergency _____________________________________</>
            <table class="">
                    <tr>
                        <td rowspan=8 align="center">
                         <form action="">
                         <table>
                          <tr>
                            <th>Room No.</th> 
                            <td><input type="text" name="vat" value=""></td>
                            
                          </tr>
                          <tr>
                           <th>Patient Name</th> 
                           <td><input type="text" name="vat" value=""></td>
                          </tr>
                          <tr>
                            <td><input type="submit" name="submit" value="Book" class="btn-secondary"></td>
                          </tr>

                         </table>
                         
                         </form>
                       </td>
                    </tr>
                    
                    <tr>
                        <th>Room No. </th>
                        <th>Status</th>
                    </tr>
                   
                    <tr>
                        <td>0001 </td>
                        <td>booked</td>
                    </tr>

                    <tr>
                        <td>0002 </td>
                        <td>avaible</td>
                    </tr>
                  
                    <tr>
                        <td>0001 </td>
                        <td>booked</td>
                    </tr>

                    <tr>
                        <td>0002 </td>
                        <td>avaible</td>
                    </tr>
                    
                </table>
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
