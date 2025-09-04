<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>

<body>
    {{-- OPEN NAV --}}
    <nav class="navbar navbar-expand-lg navbar-dark font-monospace fixed-top">
        <div class="container">
            <a class="navbar-brand judul fw-bold fs-2 text-decoration-line-through" href="#">My Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Close Nav --}}
    {{-- Open Hero --}}
    <section id="Hero">
        <div class="hero container-fluid">
            <div class="container text-center text-wrap" id="hero">
                <h1>Selamat Datang di Web Ku</h1>
                <p class="font-monospace">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum quisquam
                    officiis
                    a aliquam, laudantium eos accusantium sint veniam nam eveniet enim, dolores, iusto animi voluptates
                    fugit doloribus! Perspiciatis, atque cumque.</p>
            </div>
        </div>
    </section>
    {{-- Close Hero --}}
    {{-- Open Project --}}
    <section id="Project">
        <div class="project-container container-fluid pt-5 pb-5 border-bottom border-gray">
            <div class="container text-center pt-5">
                <div class="container gap-5 text-white">
                    <h1>My Project</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="project col-md-4 d-flex justify-content-center" data-aos="fade-right"
                        data-aos-delay="0">
                        <div class="card" style="width: 18rem; height: 12rem;">
                            <img src="{{ asset('Images/f18.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Boeing F/A18 Super Hornet</p>
                            </div>
                        </div>
                    </div>
                    <div class="project col-md-4 d-flex justify-content-center" data-aos="fade-right"
                        data-aos-delay="100">
                        <div class="card" style="width: 18rem;  height: 12rem;">
                            <img src="{{ asset('Images/f22raptor.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Lockheed F22 Raptor</p>
                            </div>
                        </div>
                    </div>
                    <div class="project col-md-4 d-flex justify-content-center" data-aos="fade-right"
                        data-aos-delay="300">
                        <div class="card" style="width: 18rem;  height: 12rem;">
                            <img src="{{ asset('Images/gripen.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">JAS 39 Gripen</p>
                            </div>
                        </div>
                    </div>
                    <div class="project col-md-4 d-flex justify-content-center" data-aos="fade-right"
                        data-aos-delay="500">
                        <div class="card" style="width: 18rem; height: 12rem;">
                            <img src="{{ asset('Images/su47.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Sukhoi Su-47 Berkut</p>
                            </div>
                        </div>
                    </div>
                    <div class="project col-md-4 d-flex justify-content-center" data-aos="fade-right"
                        data-aos-delay="700">
                        <div class="card" style="width: 18rem; height: 12rem;">
                            <img src="{{ asset('Images/su37.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Sukhoi Su-37 Terminator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Close Project --}}
    {{-- Open Profile --}}
    <section id="Profile">
        <div class="profile py-5 font-monospace">
            <div class="container pt-5 text-white" id="profile">
                <div class="text-center py-2">
                    <h4>My Profile</h4>
                    <p>Orang yang buat ni website</p>
                </div>
                <div class="row d-flex justify-content-between align-items-center mx-5">
                    <div class="col image" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('Images/WIN_20250701_14_56_11_Pro.jpg') }}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="col d-flex flex-column" data-aos="fade-left" data-aos-delay="300">
                        <h4 class="text-uppercase font-monospace fs-1">Pahri</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia rerum impedit voluptatem
                            labore. Sed distinctio quisquam, sunt quidem sint ipsum?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- OPEN SKILLS --}}
    <section id="Skills">
        <div class="container-fluid skills font-monospace pb-5">
            <div class="container">
                <div class="text-white text-center">
                    <h2>My Skills</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quo!</p>
                </div>
                <div class="row d-flex justify-content-center g-4" data-aos="flip-down">
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <i class="fa-solid fa-cookie-bite fs-1 mb-3" style="color: #ff9500;"></i>
                                <p class="card-text">Gegares</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <i class="fa-solid fa-bed fs-1 mb-3" style="color: #B197FC;"></i>
                                <p class="card-text">Tidur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <i class="fa-solid fa-gamepad fs-1 mb-3" style="color: #002aff;"></i>
                                <p class="card-text">Ngegame</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- CLOSE SKILLS --}}
    {{-- OPEN CONTACT --}}
    <section id="Contact">
        <div class="contact container-fluid">
            <div class="container text-center pt-2">
                <div class="container">
                    <h3 class="display-3 font-monospace">Contact</h3>
                    <div class="row d-flex align-items-center mt-5">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="label w-full d-flex justify-start">
                                    <label for="exampleFormControlInput1" class="form-label mx-2">Email
                                        address</label>
                                </div>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <div class="label w-full d-flex justify-start">
                                    <label for="exampleFormControlInput1" class="form-label mx-2">Text Area</label>
                                </div>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3 w-full">
                                <button type="button" class="btn btn-primary w-100">Kirim</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d991.3241926470422!2d106.99173504461808!3d-6.355616890116119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1756956077123!5m2!1sid!2sid"
                                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- CLOSE CONTACT --}}
    {{-- OPEN FOOTER --}}
    <section class="footer" id="Footer">
        <div class="card bg-transparent text-white">
            <div class="card-header border-bottom border-white py-3 d-flex justify-content-center">
                <a href="https://www.instagram.com/moehamadfahri58/" target="_blank"
                    class="fa-brands fa-square-instagram text-decoration-none fs-1"></a>
            </div>
            <div class="card-body border-trasnparent">
                <blockquote class="blockquote mb-0">
                    <p>Ini adalah dummy portofolio website</p>
                    <figcaption class="blockquote-footer">Pahri<cite title="Source Title">
                            est.
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                    </figcaption>
                </blockquote>
            </div>
        </div>
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 230" version="1.1"
            xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(62, 113.206, 243, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(168.076, 10.667, 225.283, 0.5)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                d="M0,161L40,145.7C80,130,160,100,240,80.5C320,61,400,54,480,46C560,38,640,31,720,49.8C800,69,880,115,960,145.7C1040,176,1120,192,1200,180.2C1280,169,1360,130,1440,126.5C1520,123,1600,153,1680,141.8C1760,130,1840,77,1920,65.2C2000,54,2080,84,2160,88.2C2240,92,2320,69,2400,80.5C2480,92,2560,138,2640,164.8C2720,192,2800,199,2880,203.2C2960,207,3040,207,3120,172.5C3200,138,3280,69,3360,57.5C3440,46,3520,92,3600,103.5C3680,115,3760,92,3840,69C3920,46,4000,23,4080,15.3C4160,8,4240,15,4320,19.2C4400,23,4480,23,4560,30.7C4640,38,4720,54,4800,76.7C4880,100,4960,130,5040,126.5C5120,123,5200,84,5280,72.8C5360,61,5440,77,5520,72.8C5600,69,5680,46,5720,34.5L5760,23L5760,230L5720,230C5680,230,5600,230,5520,230C5440,230,5360,230,5280,230C5200,230,5120,230,5040,230C4960,230,4880,230,4800,230C4720,230,4640,230,4560,230C4480,230,4400,230,4320,230C4240,230,4160,230,4080,230C4000,230,3920,230,3840,230C3760,230,3680,230,3600,230C3520,230,3440,230,3360,230C3280,230,3200,230,3120,230C3040,230,2960,230,2880,230C2800,230,2720,230,2640,230C2560,230,2480,230,2400,230C2320,230,2240,230,2160,230C2080,230,2000,230,1920,230C1840,230,1760,230,1680,230C1600,230,1520,230,1440,230C1360,230,1280,230,1200,230C1120,230,1040,230,960,230C880,230,800,230,720,230C640,230,560,230,480,230C400,230,320,230,240,230C160,230,80,230,40,230L0,230Z">
            </path>
            <defs>
                <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(14.248, 0, 255, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(184.301, 0, 177.233, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)"
                d="M0,46L40,38.3C80,31,160,15,240,15.3C320,15,400,31,480,61.3C560,92,640,138,720,145.7C800,153,880,123,960,107.3C1040,92,1120,92,1200,76.7C1280,61,1360,31,1440,38.3C1520,46,1600,92,1680,92C1760,92,1840,46,1920,46C2000,46,2080,92,2160,103.5C2240,115,2320,92,2400,99.7C2480,107,2560,146,2640,164.8C2720,184,2800,184,2880,184C2960,184,3040,184,3120,168.7C3200,153,3280,123,3360,95.8C3440,69,3520,46,3600,53.7C3680,61,3760,100,3840,126.5C3920,153,4000,169,4080,172.5C4160,176,4240,169,4320,164.8C4400,161,4480,161,4560,134.2C4640,107,4720,54,4800,38.3C4880,23,4960,46,5040,80.5C5120,115,5200,161,5280,168.7C5360,176,5440,146,5520,141.8C5600,138,5680,161,5720,172.5L5760,184L5760,230L5720,230C5680,230,5600,230,5520,230C5440,230,5360,230,5280,230C5200,230,5120,230,5040,230C4960,230,4880,230,4800,230C4720,230,4640,230,4560,230C4480,230,4400,230,4320,230C4240,230,4160,230,4080,230C4000,230,3920,230,3840,230C3760,230,3680,230,3600,230C3520,230,3440,230,3360,230C3280,230,3200,230,3120,230C3040,230,2960,230,2880,230C2800,230,2720,230,2640,230C2560,230,2480,230,2400,230C2320,230,2240,230,2160,230C2080,230,2000,230,1920,230C1840,230,1760,230,1680,230C1600,230,1520,230,1440,230C1360,230,1280,230,1200,230C1120,230,1040,230,960,230C880,230,800,230,720,230C640,230,560,230,480,230C400,230,320,230,240,230C160,230,80,230,40,230L0,230Z">
            </path>
            <defs>
                <linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(64.871, 0, 250.328, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(216.176, 10.235, 194.325, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)"
                d="M0,46L40,38.3C80,31,160,15,240,26.8C320,38,400,77,480,84.3C560,92,640,69,720,84.3C800,100,880,153,960,180.2C1040,207,1120,207,1200,191.7C1280,176,1360,146,1440,134.2C1520,123,1600,130,1680,130.3C1760,130,1840,123,1920,115C2000,107,2080,100,2160,80.5C2240,61,2320,31,2400,38.3C2480,46,2560,92,2640,111.2C2720,130,2800,123,2880,99.7C2960,77,3040,38,3120,46C3200,54,3280,107,3360,122.7C3440,138,3520,115,3600,111.2C3680,107,3760,123,3840,115C3920,107,4000,77,4080,72.8C4160,69,4240,92,4320,111.2C4400,130,4480,146,4560,130.3C4640,115,4720,69,4800,46C4880,23,4960,23,5040,53.7C5120,84,5200,146,5280,161C5360,176,5440,146,5520,138C5600,130,5680,146,5720,153.3L5760,161L5760,230L5720,230C5680,230,5600,230,5520,230C5440,230,5360,230,5280,230C5200,230,5120,230,5040,230C4960,230,4880,230,4800,230C4720,230,4640,230,4560,230C4480,230,4400,230,4320,230C4240,230,4160,230,4080,230C4000,230,3920,230,3840,230C3760,230,3680,230,3600,230C3520,230,3440,230,3360,230C3280,230,3200,230,3120,230C3040,230,2960,230,2880,230C2800,230,2720,230,2640,230C2560,230,2480,230,2400,230C2320,230,2240,230,2160,230C2080,230,2000,230,1920,230C1840,230,1760,230,1680,230C1600,230,1520,230,1440,230C1360,230,1280,230,1200,230C1120,230,1040,230,960,230C880,230,800,230,720,230C640,230,560,230,480,230C400,230,320,230,240,230C160,230,80,230,40,230L0,230Z">
            </path>
        </svg>
    </section>
    {{-- CLOSE FOOTER --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
