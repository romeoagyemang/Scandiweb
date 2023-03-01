<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Product Add</a>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-warning" type="submit">Save</button>
      </form>
    </div>
  </div>
</nav><br><br>
  

  <form class="form-group" action="" method="get" id="product_form">
    SKU    <input class="form-control" name="" id="sku">
    Name   <input class="form-control" name="" id="name">
    Price($) <input type="text">
    Type Switcher
  </form>


  <form class="form-group">
  
    SKU      <input type="email" class="form-control" id="inputEmail4">
 
  <div class="col-md-2">
    
    Name     <input type="password" class="form-control input-sm" id="inputPassword4">
  </div>
  <div class="col-md-2">
    
    Price($)   <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
 
  <div class="col-md-2">
    <label for="inputState" class="form-label">Type Switcher</label>
    <select id="inputState" class="form-select">
      <option selected></option>
      <option></option>
      <option></option>
    </select>
  </div>
  
</form>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>