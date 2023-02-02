<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Anton&family=Open+Sans:wght@300&family=Orbitron&family=Oswald:wght@500&family=Playfair+Display:wght@500&family=Poppins:wght@300;400;500;600&family=Quicksand:wght@300&family=Roboto+Slab:wght@300;400&family=Rubik+Glitch&family=Rubik+Microbe&family=Russo+One&family=Signika:wght@300;400&family=Sora:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Anton&family=Open+Sans:wght@300&family=Orbitron&family=Oswald:wght@500&family=Roboto+Slab:wght@300;400&family=Rubik+Glitch&family=Rubik+Microbe&family=Sora:wght@300&display=swap');
    </style>


</head>

<body>

    <!-- -----------header--------------- -->
    <?php include 'include/header.php'; ?>
    <!-- -----home section------ -->
    <section class="home">
        <div class="inner-home">
            <div class="container">
                <div class="container1-item container1-form">
                    <form class="form1" action="">
                        <select name="car" id="car-select">
                            <option value="">Select Your Car Type</option>
                            <option value="VW Passat">VW Passat CC</option>
                            <option value="Mercedes">Mercedes-Benz GLK</option>
                            <option value="BMW">BMW 320 ModernLine</option>
                            <option value="Toyota">Toyota Camry</option>
                            <option value="Audi">Audi A1 S-LINE</option>
                            <option value="VW Golf ">VW Golf VII</option>
                        </select>

                        <div class="location loco">
                            <label for="pet-select"><i class="fa-sharp fa-solid fa-location-dot"></i>Pick-up
                                Location</label>

                            <select name="pets" id="location-select">
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Pokhara">Pokhara</option>
                                <option value="Birathnagar">Birathnagar</option>

                            </select>
                        </div>
                        <div class="location loco">
                            <label for="pet-select"><i class="fa-sharp fa-solid fa-location-dot"></i>Drop-of
                                Location</label>

                            <select name="pets" id="location-select">
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Pokhara">Pokhara</option>
                                <option value="Birathnagar">Birathnagar</option>

                            </select>
                        </div>
                        <div class="calander loco">
                            <label for="birthday"><i class="fa-regular fa-calendar-days"></i>Pick-up Date and
                                Time</label>
                            <input type="date" id="birthday" name="birthday">
                            <input type="time" id="appt" name="appt">
                        </div>
                        <div class="calander loco">
                            <label for="birthday"><i class="fa-regular fa-calendar-days"></i>Drop-up Date and
                                Time</label>
                            <input type="date" id="birthday" Mercedes-Benz GLKname="birthday">
                            <input type="time" id="appt" name="appt">
                        </div>



                        <button class="btn">submit</button>
                    </form>

                </div>

                <div class="container1-item container1-car" data-aos="fade-left">
                    <h1>GET 15% OFF ON YOUR RENTAL</h1>
                    <h2>Plan your trip now</H2>
                    <div class="carcover-fig"><img src="img/carcover.png" alt="" srcset=""></div>

                </div>
            </div>

        </div>
    </section>

    <!-- ----service section-------- -->
    <section class="services">
        <div class="container">
            <h1>Customer Services</h1>
            <h2>Best customer services in the world</h2>
            <ul class="services-grid-container">
                <li class="services-grid-item">
                    <a href="" class="services-item-link">
                        <h1 class="services-heading">Fule</h1>
                        <p class="services-discription">Lont quos voluptatibus commodi, Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. In ratione quisquam odit illum suscipit, perferendis
                            consequatur doloribus voluptatum sed amet cum labore at vitae odio maxime accusamus, illo
                            ducimus ut! dolorum cum, atque laudantium alias architecto odio aliquid accusantium tempore!
                        </p>
                    </a>

                </li>
                <li class="services-grid-item">
                    <a href="" class="services-item-link">

                        <h1 class="services-heading">Baby-Seat</h1>
                        <p class="services-discription">Lont quos voluptatibus commodi, Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. In ratione quisquam odit illum suscipit, perferendis
                            consequatur doloribus voluptatum sed amet cum labore at vitae odio maxime accusamus, illo
                            ducimus ut! dolorum cum, atque laudantium alias architecto odio aliquid accusantium tempore!
                        </p>

                    </a>


                </li>
                <li class="services-grid-item">
                    <a href="" class="services-item-link">

                        <h1 class="services-heading">Driver</h1>
                        <p class="services-discription">Lont quos voluptatibus commodi, Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. In ratione quisquam odit illum suscipit, perferendis
                            consequatur doloribus voluptatum sed amet cum labore at vitae odio maxime accusamus, illo
                            ducimus ut! dolorum cum, atque laudantium alias architecto odio aliquid accusantium tempore!
                        </p>

                    </a>

                </li>
                <li class="services-grid-item">
                    <a href="" class="services-item-link">

                        <h1 class="services-heading">Flexible-Booking</h1>
                        <p class="services-discription">Lont quos voluptatibus commodi, Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. In ratione quisquam odit illum suscipit, perferendis
                            consequatur doloribus voluptatum sed amet cum labore at vitae odio maxime accusamus, illo
                            ducimus ut! dolorum cum, atque laudantium alias architecto odio aliquid accusantium tempore!
                        </p>
                    </a>


                </li>
            </ul>
        </div>
    </section>
    <!-- -----vhecle model------ -->
    <section class="car-model">
        <div class="container">
            <h1>Vehicle Models - Our rental fleet at a glance</h1>
            <div class="model-flex-container">
                <ul class="model-name">
                    <li id="model1 ">VW Golf VII</li>
                    <hr>
                    <li id="model2 ">Audi A1 S-LINE</li>
                    <hr>
                    <li id="model3 ">Toyota Camry</li>
                    <hr>
                    <li id="model4 ">BMW 320 ModernLine</li>
                    <hr>
                    <li id="model5 ">Mercedes-Benz GLK</li>
                    <hr>
                    <li id="model6 ">VW Passat CC</li>

                </ul>
                <div class="model model1 ">
                    <div class="model-wrap ">
                        <img src="img/model/vehicle1.jpg " alt=" " srcset=" ">
                        <div class="table " data-aos="fade-left" 0Z>
                            <table>
                                <tr>
                                    <th colspan="2 ">RS.4999 Rent Per Day</th>

                                </tr>
                                <tr>
                                    <td>Model</td>
                                    <td>Limousine</td>
                                </tr>
                                <tr>
                                    <td>Door</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Seats</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Luggage</td>
                                    <td>2 Suitcases/2 Bags</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Automatic</td>
                                </tr>
                                <tr>
                                    <td>Air conditioning</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Minimum age</td>
                                    <td>25 years</td>
                                </tr>
                                <tr>
                                    <th colspan="2 " class="reserve"> <a href="">Reserve Now</a> </th>

                                </tr>

                            </table>
                        </div>
                    </div>
                </div>

                <div class="model model2 ">
                    <div class="model-wrap ">
                        <img src="img/model/vehicle2.jpg " alt=" " srcset=" ">
                        <div class="table ">
                            <table>
                                <tr>
                                    <th colspan="2 ">RS.5999 Rent Per Day</th>

                                </tr>
                                <tr>
                                    <td>Model</td>
                                    <td>Limousine</td>
                                </tr>
                                <tr>
                                    <td>Door</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Seats</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Luggage</td>
                                    <td>2 Suitcases/4 Bags</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Automatic</td>
                                </tr>
                                <tr>
                                    <td>Air conditioning</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Minimum age</td>
                                    <td>25 years</td>
                                </tr>
                                <tr>
                                    <th colspan="2 " class="reserve"> <a href="">Reserve Now</a> </th>

                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="model model3 ">
                    <div class="model-wrap ">
                        <img src="img/model/vehicle3.jpg " alt=" " srcset=" ">
                        <div class="table ">
                            <table>
                                <tr>
                                    <th colspan="2 ">RS.7999 Rent Per Day</th>

                                </tr>
                                <tr>
                                    <td>Model</td>
                                    <td>Limousine</td>
                                </tr>
                                <tr>
                                    <td>Door</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Seats</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Luggage</td>
                                    <td>4 Suitcases/2 Bags</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Automatic</td>
                                </tr>
                                <tr>
                                    <td>Air conditioning</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Minimum age</td>
                                    <td>25 years</td>
                                </tr>
                                <tr>
                                    <th colspan="2 " class="reserve"> <a href="">Reserve Now</a> </th>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="model model4 ">
                    <div class="model-wrap ">
                        <img src="img/model/vehicle4.jpg " alt=" " srcset=" ">
                        <div class="table ">
                            <table>
                                <tr>
                                    <th colspan="2 ">RS.6599 Rent Per Day</th>

                                </tr>
                                <tr>
                                    <td>Model</td>
                                    <td>Limousine</td>
                                </tr>
                                <tr>
                                    <td>Door</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Seats</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Luggage</td>
                                    <td>2 Suitcases/2 Bags</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Automatic</td>
                                </tr>
                                <tr>
                                    <td>Air conditioning</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Minimum age</td>
                                    <td>25 years</td>
                                </tr>
                                <tr>
                                    <th colspan="2 " class="reserve"> <a href="">Reserve Now</a> </th>

                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="model model5 ">
                    <div class="model-wrap ">
                        <img src="img/model/vehicle5.jpg " alt=" " srcset=" ">
                        <div class="table ">
                            <table>
                                <tr>
                                    <th colspan="2 ">RS.8599 Rent Per Day</th>

                                </tr>
                                <tr>
                                    <td>Model</td>
                                    <td>Limousine</td>
                                </tr>
                                <tr>
                                    <td>Door</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Seats</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Luggage</td>
                                    <td>2 Suitcases/2 Bags</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Automatic</td>
                                </tr>
                                <tr>
                                    <td>Air conditioning</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Minimum age</td>
                                    <td>25 years</td>
                                </tr>
                                <tr>
                                    <th colspan="2 " class="reserve"> <a href="">Reserve Now</a> </th>

                                </tr>
                            </table>

                        </div>
                    </div>

                </div>
                <div class="model model6 ">
                    <div class="model-wrap ">
                        <img src="img/model/vehicle6.jpg " alt=" " srcset=" ">
                        <div class="table ">
                            <table>
                                <tr>
                                    <th colspan="2 ">RS.4999 Rent Per Day</th>

                                </tr>
                                <tr>
                                    <td>Model</td>
                                    <td>Limousine</td>
                                </tr>
                                <tr>
                                    <td>Door</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Seats</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Luggage</td>
                                    <td>2 Suitcases/2 Bags</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Automatic</td>
                                </tr>
                                <tr>
                                    <td>Air conditioning</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Minimum age</td>
                                    <td>25 years</td>
                                </tr>
                                <tr>
                                    <th colspan="2 " class="reserve"> <a href="">Reserve Now</a> </th>

                                </tr>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
    </section>


    <!-- ----earn with us-------- -->
    <section class="earn-with-us">
        <div class="container">
            <h1>Earn with us as our partner</h1>
            <div class="earn-flex-container">
                <form action="">
                    <h2>Register Now</h2>
                    <label for="first ">First Name</label> <br>
                    <input type="text " id="first ">
                    <br>
                    <label for="last ">Last Name</label> <br>
                    <input type="text " id="first ">
                    <br>
                    <label for="mobile ">Mobile Number</label> <br>
                    <input type="tel " id="mobile "> <br><br>
                    <label for="city ">Choose your city</label>
                    <select id="cars " name="cars ">
                        <option value="ktm ">Kathmandu</option>
                        <option value="bir ">Birathnagar</option>
                        <option value="pok ">Pokhara</option>
                      </select> <br> <br>
                    <button class="btn">Submit</button>
                </form>
                <div class="earn-content">
                <h2><i class="fa-solid fa-coins"></i>Earn anytime, anywhere</h2>
                    <h5>Being with us means being on everytime earning platform</h5>
                    <p>-Register now to lease you car to us with a best offer and package so you can earn every time</p>
                </div>
            </div>
        </div>
    </section>
      <!-- -----------header--------------- -->
      <?php include 'include/footer.php'; ?>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js "></script>

    <script src="index.js"></script>
    <!-- <script src="wow.js"></script> -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300
        });
    </script>



</body>

</html>