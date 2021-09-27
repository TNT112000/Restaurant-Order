<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>restaurant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="base.css" class="">
  <link rel="stylesheet" href="grid.css" class="">
  <link rel="stylesheet" href="style.css" class="">
  <link rel="stylesheet" href="fonts/fontawesome-free-5.15.4-web/css/all.min.css" class="">
  <link rel="stylesheet" href="responsive.css" class="">
</head>

<body>
  <div class="main">
    <div class="grid wide">
      <nav class="navbar navbar-expand-lg navbar-light bg-light edit-navbar edit-navbar">
        <div class="container-fluid container">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="" class="navbar-logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse edit-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link edit-nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link edit-nav-link" href="#">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link edit-nav-link" href="#">Foods</a>
              </li>
              <li class="nav-item">
                <a class="nav-link edit-nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="content">
      <div class="content-box">
        <img src="images/bg.jpg" alt="" class="content-img content-img-1 ">
        <img src="images/bg-edit.jpg" alt="" class="content-img content-img-2">
        <div class="content-form content-form-width">
          <form class="form-1" action="/action_page.php">
            <fieldset>
              <legend>Selected Food</legend>
              <div class="form-tab">
                <img src="images/menu-burger.jpg" alt="" class="menu-img form-img">
                <div class="food-content food-content-form">
                  <div class="food-name food-name-form">Smoky Burger</div>
                  <div class="food-rice">$2.3</div>
                  <div class="food-text food-text-form ">Quantity</div>
                  <input class="form-number" type="number" min="1" max="infinity">
                </div>
              </div>
            </fieldset>
          </form>
          <form class="form-2">
            <fieldset>
              <legend>Delivery Details</legend>
              <div class="delivery-form">
                <div class="delivery-list">
                  <label class="form-label" for="">FullName</label><br>
                  <input class="delivery-form-input" type="text" placeholder="E.g Vijay Thapa">
                </div>
                <div class="delivery-list">
                  <label class="form-label" for="">Phone Number</label><br>
                  <input type="text" class="delivery-form-input" placeholder="E.g 9843xxxxxx">
                </div>
                <div class="delivery-list">
                  <label class="form-label" for="">Email</label><br>
                  <input type="email" class="delivery-form-input" placeholder="E.g hi@vijaythapa.com">
                </div>
                <div class="delivery-list">
                  <label class="form-label" for="">Address</label><br>
                  <textarea class="delivery-form-input" name="" id="" cols="30" rows="8"
                    placeholder="E.g Street. City. Country"></textarea>
                </div>
                <button class="form-btn">Confirm Order</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="">
        <div class="footer-item">
          <i class="footer-icon icon-fb fab fa-facebook"></i>
          <i class="footer-icon icon-ig fab fa-instagram-square"></i>
          <i class="footer-icon icon-tw fab fa-twitter"></i>
        </div>
        <div class="footer-item">
          <p class="footer-text">
            All rights reserved. Designed By <span class="footer-text-color">CSE.TLU</span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>