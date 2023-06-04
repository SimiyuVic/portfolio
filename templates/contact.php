<?php
    include('header.php');
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
                <form action="">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder=" e.g James Bond">
                        <label for="name">Name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="email">
                        <label for="email"> e.g name@example.com</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="subject" placeholder=" Subject">
                        <label for="name">Subject</label>
                      </div>
                      <div class="form-floating my-3">
                        <textarea class="form-control" id="query" style="height: 140px;"></textarea>
                        <label for="query" class="form-label">Your Query ...</label>
                      </div>
                      <a href="#" class="btn btn-outline-secondary">Submit</a>
                </form>
            </div>
        </div>
    </div>

<?php
    include('footer.php');
?>