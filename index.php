
<?php
 include('./templates/header.php'); 
 
 ?>
    <!--Home page % intro start-->
    <section id="intro my-4">
        <div class="container-lg ">
            <div class="row justify-content-center my-5 align-items-center">
                
                <div class="col-md-5">
                    <h3 class="display-3 fw-bolder">Hello</h3>
                    <h4 class="lead fw-bold text-muted">A Bit About Me</h4>
                    <p class="lead text-muted">I am a professional Web Developer with more than 3 years experience .<br>With a strong foundation in HTML, CSS, Bootstrap and JavaScript,
                         I combine my technical skills with a keen eye for design to deliver exceptional web experiences.</p>
                    <div class="text-center">
                        <button  class="btn btn-outline-primary" 
                        style="
                        width: 100px;
                        height: 100px;
                        padding: 13px 18px;
                        border-radius: 60px;
                        font-size: 15px;
                        text-align: center;">
                        Resume
                        </button>
                        <a href="./templates/projects.php">
                            <button  class="btn btn-outline-warning" 
                            style="
                            width: 100px;
                            height: 100px;
                            padding: 13px 18px;
                            border-radius: 60px;
                            font-size: 15px;
                            text-align: center;">
                            Projects
                            </button>
                        </a>    
                        <a href="./templates/contact.php">
                            <button  class="btn btn-outline-success" 
                            style="
                            width: 100px;
                            height: 100px;
                            padding: 13px 18px;
                            border-radius: 60px;
                            font-size: 15px;
                            text-align: center;">Contact</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 d-md-5 text-center">
                    <img class="img-fluid rounded-circle" src="./assets/profile-pic.jpg" alt="picture">
                </div>
            </div>
        </div>
    </section>

   <?php
    include('./templates/footer.php');
   ?>