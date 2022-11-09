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
          <div class="col-3 active">
          <a href="update.php"> <h4>UPDATE</h4></a>
          </div>
          <div class="col-3">
          <a href="read.php"><h4>READ</h4></a>
          </div>
        </div>
      </div>
    <!-- NavBar section End -->

    <div class="container mycon">
        <div class="formbox my-1">
            <form>
                <div class="form-group my-2">
                  <label for="sid">ID</label>
                  <input type="text" class="form-control" placeholder="ID" id="sid">
                </div>
                <button type="submit" class="btn button">SEARCH</button>
              </form>
        </div>
    </div>
    <div class="container mycon">
        <div class="formbox my-3">
            <form>
                <div class="form-group my-2">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" placeholder="First name" id="name" name="sname">
                </div>
                <div class="form-group my-2">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Address" name="saddress">
                </div>
                <div class="form-group my-2">
                    <label for="address">Class</label>
                    <select class="form-select" name="sclass" aria-label="Default select example">
                        <option selected disabled>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  </div>
           
                  <div class="form-group my-2">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile number" name="smobile">
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
