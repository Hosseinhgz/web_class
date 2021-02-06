<!doctype html>
<html lang="en">
    <head>

        <!--fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="landingpage-styling.css" rel="stylesheet">
        <title>simple form</title>
        <style>
            .card-title{
                background-color: #7E655A;
                color:#C2B9B0;
                width:20rem;
                margin: -1rem -1rem auto;
                height: 3rem;
                padding-top: 4%;
            }
            .card{
                text-align: center;
            }
            .contact-us{
                text-align: center;
            }
            h2 {
                color:#E7717D;
                width: 80%;
                margin: 10px auto;
                text-align: center;
            }
            .describe{
                color: #7E655A;
                width: 60%;
                margin: 20px auto 20px auto;
                text-align: center;

            }

            .flex-property-usage{
                display: flex;
                justify-content:center;
                flex-wrap:wrap;

            }
            .review-title{
                padding-bottom: 0rem;
                padding-top: 0rem;
                background-color: #afd275 !important;
                display: flex;
                justify-content: center;
                width: 100%;
                margin: 0 auto;
                color:#7E655A; 
                font-style: bold;
                padding-bottom: 8px;
                padding-top: 8px;

            }
            .menu-describtion{
                padding-bottom: 1rem;
                padding-top: 1rem;
                display: flex;
                justify-content: center;
                width: 100%;
                margin: 0 auto; 
                font-style: italic;  
            }
            .carousel-review{
                padding-top: 1rem;
                color: #7E655A;
                width: 50%;
                font-style: italic ;
                height: auto;
                margin: 0 auto;
                font-size: smaller;
            }
            .card-img-top{
                height: 200px;
            }

            body{
                background-color: #C2CAD0;
                font-family: 'Poppins','Times New Roman', Times, serif;
            }


            /* Navigation bar */

            nav {   
                background-color:  #7E655A;
                z-index: 2;
            }

            .mynav{
                background-color: #7E655A;
            }

            .navbar{
                background-color: transparent !important;
            }

            .nav-link{
                color: #ffffff !important;
            }
            .nav-link:hover{
                color:#afd275 !important;   
            }

            /* Buttons */

            .btn-outline-success {
                background-color: #E7717D;
                color: #ffffff;
                border-color: #E7717D;
            }
            .btn-outline-success:hover{
                background-color: #ffffff;
                color: #E7717D;
                border-color: #E7717D;
            }

            .btn-primary{
                background-color: #E7717D;
                border-color:#E7717D;
                color: #ffffff;
            }
            .btn-primary:hover{
                background-color: #ffffff;
                border-color:#E7717D;
                color: #E7717D;
            }


            /* Footer */

            footer {
                padding-left: 4%;
                padding-top: 3%;
                padding-bottom: 3%;
                background-color: #7E655A;
                color: #C4C4C4;
                text-align: left;
                left: 0;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <header>
              <!-- Navigation bar -->
             <div class="mynav">  <!-- Start of navbar-->        
              <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
                  <div class="container">
                    <logo class="company-logo">Original Trombones</logo>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">ROOMS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">RESTAURANT</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#">PARKING</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#">MEETINGS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#">CONTACT</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav> 
              </div> <!-- end of navbar-->
            </header>
            <main>
                <div class="row">
                </div>
                <div class="contact-us">          
                    <h1 class="contact-us"><br>Complete Your Information</h1>
                    <p>___</p>
                </div>

                <form name="personalinfo" method="POST" action="insert.php">
                    First Name: <input type="text" name="first_name" palceholer="First Name" required><br>        <!-- for name refer to table names -->
                    Last Name: <input type="text" name="last_name" palceholer="Last Name" required><br>
                    City: <input type="text" name="city" palceholer="city"><br>
                    Your Group id: 
                    <select name="group_id">
                        <option value="BBCAP19"> BBCAP19 </option>
                        <option value="BBCAP20"> BBCAP20 </option>
                        <option value="BBCAP21"> BBCAP21 </option>
                    </select><br>
                    <input type="submit" value="Save data">
                </form>





                <div class="flex-property-usage"><!---------- using flexbox --------------->

                        <div class="card h-100 mx-2 my-1" style="width: 20rem;">
                            <div class="card-body">
                              <h5 class="card-title">HAME HOTEL</h5>
                              <p><br></p>
                              <p class="card-text">Vuorikatu 19<br>
                                00100 Helsinki, Finland<br>
                                <br>
                                +358 9 173 441<br>
                                reception@hotelarthur.fi</p>
                            </div>
                          </div>

                        <div class="card h-100 mx-2 my-1" style="width: 20rem;">
                            <div class="card-body">
                              <h5 class="card-title">SALES DEPARTMENT</h5>
                              <p><br></p>
                              <p class="card-text">Open Mon-Fri 08.00-16.00<br>
                                <br>
                                <br>
                                +358 9 173 44200<br>
                                sales@hotelarthur.fi</p>
                            </div>
                        </div>

                </div><!------------ end of using flexbox------------->
                
            </main>
            <div class="row">
                <div class="col-md-12">
                    <footer>
                        <address>
                            Phone number: +358401234567<br>
                            Address: 28 Visamäentie, Hämeenlinna,<br>
                            Country: Finland
                        </address>
                    </footer>
                </div>
            
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            </div> 
        </div> <!--end of container-fluid-->
    </body>

</html>