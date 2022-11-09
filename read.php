<?php
        include("header.php");
      ?>

      <!-- NavBar section Started -->
      <div class="container-fluid">
        <div class="row navelement">
          <div class="col-3">
            <a href="index.php"><h4>INSERT</h4></a>
          </div>
          <div class="col-3">
          <a href="delete.php"> <h4>DELETE</h4></a>
          </div>
          <div class="col-3">
          <a href="update.php"> <h4>UPDATE</h4></a>
          </div>
          <div class="col-3 active">
          <a href="read.php"><h4>READ</h4></a>
          </div>
        </div>
      </div>
      <!-- NavBar section End -->

      <div class="container-fluid my-3">
        <div class="table-responsive">
          <table class="table table-dark table-striped">
            <thead>
              <th>Id</th>
              <th>Name</th>
              <th>Address</th>
              <th>Class</th>
              <th>Phone</th>
              <th>Action</th>
            </thead>
            <tbody>
              <tr>
                <td>heel</td>
                <td>heel</td>
                <td>Parasia</td>
                <td>jkjkjkjkjkjkjkjk</td>
                <td>heel</td>
                <td>
                  <a href="" class="btn btn-warning my-2"><i class="bi bi-pen-fill"></i></a>
                  <a href="" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
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
