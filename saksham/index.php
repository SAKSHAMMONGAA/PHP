<?php
  // Include database file
  include 'database.php';
  $customerObj = new database();
  // Delete record from table
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $customerObj->deleteRecord($deleteId);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FOODIE</title>
    <meta name="description" content=" building a CREATE and READ CRUD system with PDO">
    <meta name="robots" content="noindex, nofollow">
    <!--  Add our Google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <!--  Add our Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--  Add our custom CSS  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
          <img src="./img/getfit.png" width="60" height="50" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Contact us</a>
              </li>


          </ul>

      </div>
  </nav>

  <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/img1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5> Eat what you want, Don't let your tongue crave for the taste</h5>
                <p>Food is the ultimate happiness, eat to be happy, eat to try new foods, kill your appetite</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/img2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Different Foods
                    Foods from different parts of the world.</h5>
                <p>Enjoy the food when you are alone or sad but don't let anything overcomes you except food.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/img3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>BURGERS = Happiness with awesome taste</h5>
                <p> Over 800 easy-to-follow recipes including snacks, quick meals and mouth-watering mains – all catering to a wide range of palatable things.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <br>
      <div  class="heading">
        <h3>Site with some info.
            A world-class site to suggest you new places for your tongue.
            </h3>
      </div>
      <section class="down">
        <div class="card-group">
            <div class="card">
              <img src="./img/img4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Tanmay Sharma</h5>
                <p class="card-text">Veggie Paaji’s real name is Tanmay Sharma. He is a YouTube Content Creator, Food & Travel Vlogger, and Social Media Influencer. While graduating in economics, he decided to make videos on food and restaurant reviews. He uploaded his first YouTube video on 30th December 2017 when he was in his final year of college and at present, his main channel has 1.2 Million subscribers and more than a billion views.</p>
                <p class="card-text"><small class="text-muted">Foodie #1</small></p>
              </div>
            </div>
            <div class="card">
              <img src="./img/img5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Priyanka Sharma</h5>
                <p class="card-text">Priyanka Sharma is a famous Food Vlogger, YouTuber and a Social Media Influencer. She is well known for her food related blogging videos with her friend. She is famous on various social media platforms such as YouTube, Facebook, TikTok and Instagram. She is extremely passionate about Blogging. Priyanka Sharma has collaborated with multiple reputed and renowned brands. She has bagged a massive fan following on her social media platforms</p>
                <p class="card-text"><small class="text-muted">Foodie #2</small></p>
              </div>
            </div>
            <div class="card">
              <img src="./img/img6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pujneet Singh</h5>
                <p class="card-text">Bhooka denotes hunger for success and Saand stands for power and stamina. Pujneet throughout his career has worked with numerous renowned food chains including Pizza-hut for Policy Bazaar, Pepsi, Lipton, Domino's, Chayos, Likee app, Filmora, Colgate, Magicpin, Kwality walls and others. Pujneet, after gaining much recognition with Bhooka Saand, was invited as a speaker at YouTube fanfest 2019.</p>
                <p class="card-text"><small class="text-muted">Foodie #3</small></p>
              </div>

          </div>
    </section>


       <!-- Remove the container if you want to extend the Footer to full width. -->




</div>
<!-- End of .container -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

  <main class="container">









    <?php
      if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration added successfully
            </div>";
      }
      if (isset($_GET['msg2']) == "update") {
        echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration updated successfully
            </div>";
      }
      if (isset($_GET['msg3']) == "delete") {
       echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Record deleted successfully
            </div>";
      }
    ?>
    <section>
      <h2>Become foddie
      <a href="add.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
      </h2>
      <table class="table table-hover table-dark table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>phone</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $foodie = $customerObj->displayData();
        foreach ($foodie as $customer) {
          ?>
          <tr>
            <td><?php echo $customer['id'] ?></td>
            <td><?php echo $customer['name'] ?></td>
            <td><?php echo $customer['email'] ?></td>
            <td><?php echo $customer['phone'] ?></td>
            <td>
              <button class="btn btn-primary mr-2"><a href="edit.php?editId=<?php echo $customer['id'] ?>">
                  <i class="fa fa-pencil text-white" aria-hidden="true"></i></a></button>
              <button class="btn btn-danger"><a href="index.php?deleteId=<?php echo $customer['id'] ?>" onclick="confirm(' Want to delete this record')">
                  <i class="fa fa-trash text-white" aria-hidden="true"></i>
                </a></button>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </section>


</main>

<footer class="text-center text-lg-start" style="background-color: #ffffff;">
  </footer>
</body>
</html>
