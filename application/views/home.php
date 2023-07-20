
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap cdn link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

     <!--Icons link-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     
    <title>Victor Charles</title>
    <link rel="stylesheet" href="/css/main.css">
    <style>
      .error{
        color : red;
      }
      .success{
        color: #ff9966;
        text-align: centre;
        font-weight: bold;
        font-size: 14px;
      }
     
    </style>
    
</head>
<body>
    <!--Navigation Bar start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container-lg">
            <a href="#intro" class="navbar-brand">
                <span class="fw-bold">Victor Simiyu</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#resume">
                <span class="border-end border-secondary px-2 ">Resume</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="#projects">Projects</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contact">
                <span class="border-start border-secondary ps-2">Contact</span>
            </a>
            </li>
        </ul>
        </div>
        </div>
    </nav>
    <!--Navigation Bar end-->

    <!--Home page and intro start-->
    <section id="intro" class="my-5">
        <div class="container-lg">
            <div class="row justify-content-center my-5 align-items-center">
                
                <div class="col-md-5">
                    <h3 class="display-3 fw-bolder">Hello</h3>
                    <h4 class="lead fw-bold text-muted">A Bit About Me</h4>
                    <p class="lead text-muted">I am a professional Web Developer with more than 3 years experience .<br>With a strong foundation in HTML, CSS, Bootstrap and JavaScript,
                         I combine my technical skills with a keen eye for design to deliver exceptional web experiences.</p>
                    <div class="text-center">
                    <a href="#resume">
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
                        </a>
                        <a href="#projects">
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
                        <a href="#contact">
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
                    <img class="img-fluid rounded-circle" src="assets/profile-pic.jpg" alt="picture">
                </div>
            </div>
        </div>
    </section>

    <!--Resume page starts here-->
    
    <section id="resume">
        <!--Work-->
        <div class="container-lg border-bottom">
            <h3 class="fw-bold my-4">Resume</h3>
            <div class="row justify-content-center ">
                <div class="col-md-2">
                    <h3 class="fw-bold">Work <br>Experience</h3>
                </div>
                <div class="col-md-8">
                    <div class="row my-2">
                        <div class="col-md">
                            <p class="text-muted">2019- Present</p>
                        </div>
                        <div class="col">
                            <h4 class="fw-bold">Sales Agent</h4>
                            <p class="text-muted">
                                Online Sales Agent for SES ict and litecom technologies, specialising in marketing
                                and selling of laptops, smartphones, tvs and several other products.
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="row my-2">
                        <div class="col-md">
                            <p class="text-muted">2021 October- December</p>
                        </div>
                        <div class="col">
                            <h4 class="fw-bold">Attachee</h4>
                            <p class="text-muted">
                                Worked as an Attachee at reeve technologies, help in several projects and learnt a lot
                                about new technologies. Helped develop several personal and work skills such as team-work, 
                                commitment, proper work ethics and generally how to conduct oneself.
                            </p>
                            <button class="btn btn-outline-secondary my-3"> Recommendation</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <!--Education-->
        <div class="container-lg  my-5">
            <div class="row justify-content-center ">
                <div class="col-md-2">
                    <h3 class="fw-bold">Education</h3>
                </div>
                <div class="col-md-8">
                    <div class="row my-2">
                        <div class="col-md">
                            <p class="text-muted">2018-2022</p>
                        </div>
                        <div class="col">
                            <h4 class="fw-bold">Maseno University | <br>
                                BSc.Computer Science
                            </h4>
                            <p class="text-muted">
                                Four years of immense training and proper nurturing, leading to an intrest in web development
                                and sofware-engineering.
                            </p>  
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="row my-2">
                        <div class="col-md">
                            <p class="text-muted">2014 - 2017</p>
                        </div>
                        <div class="col">
                            <h4 class="fw-bold">St.Joseph's School Kitale | <br>
                                Highschool
                            </h4>
                            <p class="text-muted">
                                Build the basic skills required to undertake a BSc. Computer Science
                            </p>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row justify-content-center ">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-8">
                    <div class="row my-2">
                        <div class="col-md">
                            <p class="text-muted">2006-2013</p>
                        </div>
                        <div class="col">
                            <h4 class="fw-bold">Timleen Academy | <br>
                                Primary Education
                            </h4>
                            <p class="text-muted">
                               Sat for my KCPE here
                            </p>  
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>         
            </div>
        </div>
    </section>
  
    <!---Resume page ends herex--->

    <!---Projects page starts here-->
      
    <section id="projects">
        <div class="container-lg my-2">
            <h3 class="fw-bold">Projects</h3>
            <div class="row justify-content-center my-5 border-bottom">
                <div class="col-md-5">
                    <h3 class="fw-bold">E-Commerce Website</h3>
                    <p class="text-muted my-2"> 
                        A basic e-commerce website designed using PHP. Functionalities include an admin section to add and delete
                        product categories, products and deleting of users.
                        The users are able to view the various products, add to cart, delete from cart before ordering.
                        Javascript was used to enhanve several functionalities , show a successfull login, show why you cant login 
                        and also when a deletion is done.
                    </p>
                </div>
                <div class="col-md-5 d-md-block">
                    <img class="img-fluid" src="../assets/shopper.png" alt="e-commerce">
                    <a href="" class="btn btn-outline-secondary my-3 text-center">View in Github</a>
                </div>
                
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-md-5">
                    <h3 class="fw-bold">My-Portfolio</h3>
                    <p class="text-muted my-2"> 
                        Designed with the help of bootstrap, the portfolio is a simple design to showcase my web design abilities 
                        and other skills I will be adding on.
                        The Portfolio also uses php CodeIgniter 4 at the back end
                    </p>
                </div>
                <div class="col-md-5 d-md-block">
                    <img class="img-fluid" src="../assets/Portfolio-1.png" alt="e-commerce">
                    <a href="" class="btn btn-outline-secondary my-3 text-center">View in Github</a>
                </div>
                
            </div>
        </div>
    </section>
    
  
    <!---Projects page ends here--->

    <!----Contact page starts here--->
      
    <!--Contact Form-->
    <section id="contact">
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
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name"  placeholder=" e.g James Bond">
                            <label for="name">Name</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="email"  placeholder="email">
                            <label for="email"> e.g name@example.com</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="subject"  placeholder=" Subject">
                            <label for="name">Subject</label>
                          </div>
                          <div class="form-floating my-3">
                            <textarea class="form-control" name="query"  style="height: 140px;"></textarea>
                            <label for="query" class="form-label">Your Query ...</label>
                          </div>
                          <button type="submit" class="btn btn-outline-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    


    <!---Contact page ends here--->
<!--Footer section-->
<section id="footer">
        <div class="container-xl my-5 border-top ">
            <div class="row justify-content-center alignt-items-center my-5">
                <div class="col-md-3">
                    <h4 class="fw-bold">
                        Phone
                    </h4>
                    <p class="lead text-muted">
                        +254-798-161654
                    </p>
                </div>
                <div class="col-md-3">
                    <h4 class="fw-bold">
                        Email
                    </h4>
                    <p class="lead text-muted">
                        simiyuvic@outlook.com
                    </p>
                </div>
                <div class="col-md-3 text-decoration-none">
                    <h4 class="fw-bold">
                        Socials
                    </h4>
                    <a href="#" class="px-3 icon-link">
                        <span><i class="bi bi-linkedin"></i></span>
                    </a>
                    <a href="www.twitter.com/CharlesVickiey" class="icon-link">
                        <span><i class="bi bi-twitter"></i></span>
                    </a>
                </div>
                <div class="col-md-3 my-3">
                    <p class="text-muted lead">
                        © 2023
                    </p>
                </div>
            </div>
        </div>
    </section>
   

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>