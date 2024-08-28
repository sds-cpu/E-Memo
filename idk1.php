<?php
$servername="localhost";
$username="root";
$password="";
$database="phplearning";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn==true)
{
  echo "Connection successful ";
}
else
{
  echo "Connection not successful";
}

?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
  

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-black" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="Idk.php" method="POST">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-black">Update Note Title</label>
            <input type="text" class="form-control " name="title" id="title" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-labe text-blackl">Update Note Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Note</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand " href="#">Notes4U</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container text-white" >
        <?php
          if($_SERVER['REQUEST_METHOD']=='POST'){
          $title=$_POST['title'];
          $description=$_POST['description'];
          $sql="INSERT INTO `notes`(`title`,`description`) VALUES ('$title','$description')";
          mysqli_query($conn,$sql);
          }

        ?>
      </div>

      <section class="bg-dark my-5">
        <div id="carouselExampleIndicators" class="carousel slide h-40">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="the-15-best-sports-manhwa-webtoons-to-binge-read.jpg" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
              <img src="comic-bright-strips-with-explosive-halftone-rays_225004-801.avif" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
              <img src="Best-Manga-of-All-Time.webp" class="d-block w-100 " alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <section class="container text-white my-5">
        <form action="Idk.php" method="POST">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Note Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Note Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
      </section>
     <div class="container">
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Sr.no.</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * from `notes`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
      echo "<tr>
      <th scope='row'>".$row['sno']."</th>
      <td>".$row['title']."</td>
      <td>".$row['description']."</td>
      <td><button type='button' class='btn btn-primary' data-bs-toggle=modal data-bs-target='#staticBackdrop'>Edit</button><button  class='btn btn-danger' >Delete</button></td>
    </tr>";
    }
    ?>
  </tbody>
</table>
     </div>
      
  </body>
</html>