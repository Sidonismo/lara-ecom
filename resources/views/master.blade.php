<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Ecomm project</title>
</head>

<body>
  <h1>Ecomm project</h1>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
<style>
  .custom-login{
    height: 500px;
    padding-top: 100px;
  }
  img.slider-img{
    height: 400px !important;
  }
  .custom-product{
    height: 100%;
  }
  .carousel-item{
    background-color: grey;
  }
  .carousel-caption{
    background-color: blue;
  }
  .trending-image{
    max-height: 100px;
  }
  .trending-item{
    display: flex;
    flex-direction: column;
    margin: 20px;
  }
  .trending-wrapper{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    flex-wrap: wrap;
  }
  .trending-item:nth-child(3n) {
  page-break-after: always; /* CSS 2.1 syntax */
  break-after: always; /* New syntax */
  }
  .search-item:nth-child(2n) {
  page-break-after: always; /* CSS 2.1 syntax */
  break-after: always; /* New syntax */
  }
  .detail-img{
    height: 200px;
  }
  .cart-list-devider
  {
    margin-bottom: 50px;
    border-bottom: 1px;
    border-color: black;
  }
  .cart-list-devider:nth-child(1n) {
  page-break-after: always; /* CSS 2.1 syntax */
  break-after: always; /* New syntax */
  }
</style>
</html>