<?php
    include('header.php');
    include('./validation/validation.php');
?>
    <!--Contact Form-->
    <div class="container-lg my-3">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
                <h3 class="fw-bold">
                    Contact
                </h3>
                <p class="text-muted">Looking Forward to hearing from you</p>
                <h4 class="fw-bold">
                    Phone
                </h4>
                <p class="text-muted">
                    +254 -798-161654
                </p>
                <h4 class="fw-bold">
                    Email
                </h4>
                <p class="text-muted">
                    simiyuvic@outlook.com
                </p>
            </div>
            <div class="col-md-5 my-3">
                <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder=" e.g James Bond">
                        <div class="error"> <?php echo $name_error ?> </div>
                        <label for="name">Name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="email">
                        <div class="error"> <?php echo $email_error ?> </div>
                        <label for="email"> e.g name@example.com</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="subject" value="<?php echo $subject; ?>" placeholder=" Subject">
                        <div class="error"> <?php echo $subject_error ?> </div>
                        <label for="name">Subject</label>
                      </div>
                      <div class="form-floating my-3">
                        <textarea class="form-control" name="query" value="<?php echo $query; ?>" style="height: 140px;"></textarea>
                        <div class="error"> <?php echo $query_error ?> </div>
                        <label for="query" class="form-label">Your Query ...</label>
                      </div>
                      <button type="submit" class="btn btn-outline-secondary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<?php
    include('footer.php');
?>