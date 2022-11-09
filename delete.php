<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="header">
        <h1>CRUD</h1>
      </div> -->

      <?php
        include("header.php");
      ?>

      <!-- NavBar section Started -->
      <div class="container-fluid">
        <div class="row navelement">
          <div class="col-3 ">
            <a href="index.php"><h4>INSERT</h4></a>
          </div>
          <div class="col-3 active">
          <a href="delete.php"> <h4>DELETE</h4></a>
          </div>
          <div class="col-3">
          <a href="update.php"> <h4>UPDATE</h4></a>
          </div>
          <div class="col-3">
          <a href="read.php"><h4>READ</h4></a>
          </div>
        </div>
      </div>
    <!-- NavBar section End -->

    <div class="container mycon">
        <div class="formbox my-5">
            <form>
                <div class="form-group my-2">
                  <label for="sid">ID</label>
                  <input type="text" class="form-control" placeholder="ID" id="sid">
                </div>
                <button type="submit" class="btn button">Submit</button>
              </form>
        </div>
    </div>



    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="/javaScript/index.js"></script>
  </body>
</html>
