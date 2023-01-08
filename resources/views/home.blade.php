<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
    <link rel="stylesheet" href="resources/css/master.css">
    <script src="resources/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js"></script>
</head>

<body>
    <nav class="navbar bg-salmon ">
        <div class="container-fluid ">
            <a class="navbar-brand fw-bold text-light" href="#">
                <i class="bi bi-card-heading"></i> Portofolio
            </a>
            <div class=" d-none d-lg-flex">
                <a class="animate__animated  btn border-0 fw-bold text-light" href="#home"><i class="bi bi-house-door-fill"></i> Home</a>
                <a class="animate__animated btn border-0 fw-bold text-light" href="#project"><i class="bi bi-box-fill"></i> My Project</a>
                <a class="animate__animated btn border-0 fw-bold text-light" href="#contact"><i class="bi bi-person-lines-fill"></i> Contact Me</a>
            </div>

            <div class=" d-flex d-sm-none ">
                <button class="border-0 navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item mb-5">
                            <a class="text-decoration-none fw-bold text-dark p-3 fs-5" href="#home"><i class="bi bi-house-door-fill"></i> Home</a>
                        </li>
                        <li class="nav-item mb-5">
                            <a class=" text-decoration-none fw-bold text-dark p-3  fs-5" href="#project"><i class="bi bi-box-fill"></i> My Project</a>
                        </li>
                        <li class="nav-item mb-5">
                            <a class=" text-decoration-none fw-bold text-dark p-3  fs-5" href="#contact"><i class="bi bi-person-lines-fill"></i> Contact Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="bg-salmon ">
        <div class="p-1 bg-light rounded-circle mb-3">
            <img class="rounded-circle" src="resources/img/man.png" width="300px" alt="">
        </div>
        <h1 class="fw-bold">Muhammad Rizal Pane</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ab accusantium enim iste consectetur ducimus quasi corporis eum voluptatum necessitatibus! A voluptates placeat quo doloremque ipsum voluptatum quia commodi dolor.</p>
        <h5><i class="bi bi-geo-alt-fill"></i> <span>Medan , Indonesia</span></h5>

    </section>
    <section id="project" class="bg-twitter text-dark ">
        <h1 class="fw-bold">This is My Personal Project</h1>
        <p class="mb-5"> you can visit my project on <i class="bi bi-github"> <a class="text-decoration-none fw-bold text-salmon" href="#"> github.com</a></i></p>

        <div class="row row-cols-1 row-cols-md-3 g-4 border-0 ">
            <div class="col border-0">
                <div class="card h-100 p-3 border-0 rounded-0">
                    <!-- <img src="resources/img/ai.png" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title fw-bold ">Open Chat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repellat eius ipsum doloremque quisquam aut, maiores voluptatem dolore iusto minus laboriosam doloribus quas harum aspernatur quam delectus reiciendis. Sint, autem?</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 p-3 border-0 rounded-0">
                    <!-- <img src="resources/img/code.png" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Multimedia Learning</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit tempore est fugit vel, libero magni corrupti ullam earum cum reprehenderit, repellendus commodi nobis et iste accusantium, ex praesentium perferendis eos?</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 p-3 border-0 rounded-0">
                    <!-- <img src="resources/img/file.png" class="card-img-top" alt="..."> -->
                    <div class="card-body ">
                        <h5 class="card-title fw-bold">Animate Effect</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel error fugit nemo! Iste harum praesentium, eos, non iusto aliquid commodi omnis modi consequuntur consequatur similique ipsam unde sed dignissimos iure!</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="contact" class="bg-salmon ">
        <h1 class="fw-bold">Contact Me</h1>
        <p>you can contact me on this form</p>

        <div>
            <div class="mb-3">
                <label for="message" class="form-label "><i class="bi bi-chat-left-text-fill"></i> Message</label>
                <textarea class="form-control rounded-0 " id="message" cols="100" rows="4"></textarea>
            </div>
            <div class="mb-5">
                <label for="email" class="form-label"><i class="bi bi-envelope-at-fill"></i> Email address</label>
                <input type="email" class="form-control rounded-0" id="email" placeholder="name@gmail.com">
            </div>
            <div>
                <input class="btn btn-twitter border-0 rounded-0 w-25 fw-bold" type="submit" value="Send">
            </div>
        </div>
    </section>

    <section id="footer" class="bg-twitter">
        <div class="text-center text-dark ">
            <div class="row row-cols-1 row-cols-lg-2 g-0">
                <div class="col  ">
                    <div class="p-3 fw-bold mb-3">Sosial Media</div>
                    <table class="table table-borderless">
                        <tr>
                            <td><a class="text-decoration-none text-dark" href="#"><i class="bi bi-instagram"></i> Instagram</a></td>
                            <td><a class="text-decoration-none text-dark" href="#"><i class="bi bi-facebook"></i> Facebook</a></td>
                            <td><a class="text-decoration-none text-dark" href="#"><i class="bi bi-twitter"></i> Twitter</a></td>
                            <td><a class="text-decoration-none text-dark" href="#"><i class="bi bi-linkedin"></i> LinkedIn</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col">
                    <div class="p-3 fw-bold">Quote</div>
                    <p>"sometimes we are just looking for a lantern in this life until we forget that there is a sun that is bigger than that, then what is the use of a lantern?"</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>