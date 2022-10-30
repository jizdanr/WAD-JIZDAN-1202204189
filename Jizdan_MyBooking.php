<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<body style="background-color:#F5F5F5; ">
    <nav class="navbar-light fixed-top " style="background-color:#395B64;" >
      <ul class="nav justify-content-center">

        <li class="nav-item ">
            <h6 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="Jizdan_Home.php">
            Home
          </a>
            </h6>
        </li>
        <li class="nav-item ">
            <h6 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="Jizdan_Booking.php">
            Booking
          </a>
          </h6>
        </li>
      </ul>
    </nav>
    <br>
    <br>
    <br>

    <div class = "container style="text-align: center; padding-top: 0.2cm;">
            <br>
            <div class="class text-left mb-5 text-light">
            <p   style="text-align:center;color:black">
            <b>
                Thank you JIZDAN_1202204189 for Reserving
                <br>
                Please double check your reservation details
            </b> 
            </p>
            </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">
          <b>
              Booking Number
          </b>
      </th>
      <th scope="col">
          <b>
              Name
          </b>
      </th>
      <th scope="col">
          <b>
              Check-in
          </b>
      </th>
      <th scope="col">
          <b>
                Check-out
          </b>
      </th>

      <th scope="col">
          <b>
                Car Type
          </b>
      </th>

      <th scope="col">
          <b>
                Phone Number
          </b>
      </th>

      <th scope="col">
          <b>
                Service(s)
          </b>
      </th>

      <th scope="col">
          <b>
                Total Price
          </b>
      </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
          <?php 
          echo rand();
          ?></th>
      <td>Jizdan_1202204189</td>
      <td>11-10-2022 10:00:00</td>
      <td>12-10-2022 10:00:00</td>
      <td>Alphard</td>
      <td>081381796079</td>
      <td>- Health protocol
        <br>
        - Full Filled
      </td>
      <td>Rp. 1.275.000</td>
    </tr>
<br>
<br>
<br>
  </tbody>
</table>
<footer class="bg-light text-center text-lg-start fixed-bottom">
  <div class="text-center p-2" style="background-color:#395B64">
  <h6 style="text-align: center;color:antiquewhite">
    Created by Jizdan_1202204189
  </div>
</footer>
</body>
</html>