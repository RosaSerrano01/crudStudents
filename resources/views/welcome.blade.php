<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <title>Página principal-Estudiantes.</title>
    </head>
    <body class="bg-dark p-2" style="--bs-bg-opacity: .4;">
    @include('students.navbar')

    <div id="main" class="bg-dark p-2" style="--bs-bg-opacity: .2;">
    <div class="alert alert-dark text-center" role="alert">
    <h1>Estudiantes.</h1>
    </div>
    <br>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://eitrawmaterials.eu/wp-content/uploads/2019/05/Label-brochure-1.jpg" class="d-block w-50" alt="">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.studyinjapan.go.jp/en/_mt/2020/05/kv_01.jpg" id="carousel2" class="d-block w-50" alt="...">
      <div class="carousel-caption d-none d-md-block">

      </div>
    </div>
    <div class="carousel-item">
      <img src="https://regionalcollegepa.org/wp-content/uploads/2020/06/shutterstock_660004024.jpg" class="d-block w-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </body>
</html>

<style>
#main
{
margin-left:2%;
margin-right:2%;
margin-top:2%;
margin-bottom:2%;
border-radius:0.5em;
}
img{
margin-left:25%;
margin-right:10%;
  height: 400px;
  width: 2500px;
  }
</style>
