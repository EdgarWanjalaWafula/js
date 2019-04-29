
    <!-- Header  -->
    <?php 
        require('partials/header.php'); 
    ?>  
        <div class="container">
            <form action="" id="formLoop">
                <div class="form-group">
                  <label for=""></label>
                  <input type="text" class="form-control" name="" id="name" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="form-group">
                  <label for=""></label>
                  <input type="email" class="form-control" name="" id="email" aria-describedby="emailHelpId" placeholder="">
                  <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>

                <button id="save" type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- Display  -->
            <p id="display"></p>
        </div>
    <!-- Footer  -->
    <?php 
        require('partials/footer.php'); 
    ?> 