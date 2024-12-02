<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Hola bienvenido a TravelPE</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Ver vuelos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Informacion</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">        
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image (dentro de un marco redondo fijo) -->
                <div class="avatar-container mb-5">
                    <img id="avatar" class="masthead-avatar" src="assets/img/avataaars.png" alt="..." />
                </div>

                <!-- Image Upload Button -->
                <div class="text-center mt-3">
                    <label for="imageUpload" class="btn btn-outline-light btn-lg rounded-pill shadow-lg">
                        <i class="fas fa-upload me-2"></i> Subir Nueva Imagen
                    </label>
                    <input type="file" id="imageUpload" accept="image/*" class="d-none" />
                </div>

                <!-- Display Unique ID -->
                <div class="text-center mt-3">
                    <p id="uniqueId" class="text-white"></p>
                </div>
            </div>

            <script>
                document.getElementById('imageUpload').addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            document.getElementById('avatar').src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });

                // Function to generate a unique ID and display it
                function generateUniqueId() {
                    const uniqueId = 'ID-' + Date.now() + Math.floor(Math.random() * 1000);
                    document.getElementById('uniqueId').textContent = 'Tu ID único es: ' + uniqueId;
                }

                // Call the function to generate and display the unique ID when the page loads
                window.onload = generateUniqueId;
            </script>

            <style>
                .avatar-container {
                    width: 150px; /* Tamaño fijo del contorno */
                    height: 150px; /* Tamaño fijo del contorno */
                    border-radius: 50%; /* Marco redondo */
                    overflow: hidden; /* Ocultar cualquier parte de la imagen fuera del marco */
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border: 4px solid #fff; /* Borde blanco alrededor del círculo */
                    background-color: #f0f0f0; /* Fondo gris claro */
                }

                .masthead-avatar {
                    width: 100%; /* Ajusta la imagen al tamaño del contenedor */
                    height: 100%; /* Ajusta la imagen al tamaño del contenedor */
                    object-fit: cover; /* Asegura que la imagen cubra todo el espacio sin distorsionarse */
                }
            </style>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Tus vuelos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    @yield('content')
                </div>
                <!-- Button to /reservations -->
                <div class="text-center mt-4">
                    <a href="/reservations" class="btn btn-primary btn-xl mt-3">Reservar o editar una reservacion</a>
                </div>
            </div>
        </section>



        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading -->
                <h2 class="page-section-heading text-center text-uppercase text-white">Información</h2>
                <!-- Icon Divider -->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content -->
                <div class="row">
                    <div class="col-lg-4 ms-auto">
                        <p class="lead">
                            TravelPE es una aerolínea comprometida con brindar experiencias de vuelo excepcionales. Ofrecemos rutas nacionales e internacionales con un enfoque en comodidad, puntualidad y un servicio al cliente de primera clase. Nuestro objetivo es conectar a las personas con los destinos de sus sueños, promoviendo un viaje seguro y agradable. ¡Viajar con TravelPE es más que un vuelo, es una experiencia inolvidable!
                        </p>
                    </div>
                    <div class="col-lg-4 me-auto">
                        <p class="lead">
                            TravelPE nació en 1995 gracias a la visión de su fundador, Carlos Aguirre, un apasionado piloto peruano que soñaba con conectar las maravillas de Perú con el resto del mundo. Inspirado por los paisajes únicos de su tierra natal, Carlos comenzó con un pequeño avión y rutas locales, pero su dedicación y pasión lo llevaron a construir una aerolínea reconocida internacionalmente. Hoy, TravelPE ofrece vuelos a más de 50 destinos, combinando tecnología de punta y un servicio cálido que refleja la hospitalidad peruana. ¡Viajar con TravelPE es explorar el mundo con el corazón de Perú!
                        </p>
                    </div>
                </div>
                <!-- Flight Class Benefits Section -->
                <div class="row mt-5">
                    <div class="col-lg-4 text-center">
                        <img src="path/to/primera-clase.jpg" alt="Primera Clase" class="img-fluid rounded mb-3">
                        <h3 class="text-uppercase text-white">Primera Clase</h3>
                        <p class="lead">
                            Disfruta del lujo con asientos reclinables totalmente, gastronomía gourmet, bebidas premium y entretenimiento personalizado. Prioridad de embarque, equipaje adicional y acceso exclusivo a nuestras salas VIP.
                        </p>
                        <ul class="list-unstyled text-white">
                            <li><i class="fas fa-chair"></i> Asientos reclinables</li>
                            <li><i class="fas fa-utensils"></i> Gastronomía gourmet</li>
                            <li><i class="fas fa-wifi"></i> Conexión Wi-Fi gratuita</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="path/to/clase-comun.jpg" alt="Clase Común" class="img-fluid rounded mb-3">
                        <h3 class="text-uppercase text-white">Clase Común</h3>
                        <p class="lead">
                            Vive comodidad y eficiencia con asientos amplios, snacks y bebidas de cortesía, y un sistema de entretenimiento variado. Perfecto para quienes buscan un equilibrio entre confort y precio.
                        </p>
                        <ul class="list-unstyled text-white">
                            <li><i class="fas fa-chair"></i> Asientos cómodos</li>
                            <li><i class="fas fa-cookie"></i> Snacks y bebidas</li>
                            <li><i class="fas fa-tv"></i> Entretenimiento a bordo</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="path/to/clase-economica.jpg" alt="Clase Económica" class="img-fluid rounded mb-3">
                        <h3 class="text-uppercase text-white">Clase Económica</h3>
                        <p class="lead">
                            Obtén una experiencia de viaje accesible con servicios esenciales como asientos ergonómicos, opciones de refrigerios económicos y un servicio atento que asegura un viaje agradable.
                        </p>
                        <ul class="list-unstyled text-white">
                            <li><i class="fas fa-chair"></i> Asientos ergonómicos</li>
                            <li><i class="fas fa-cookie-bite"></i> Refrigerios económicos</li>
                            <li><i class="fas fa-heart"></i> Servicio amable</li>
                        </ul>
                    </div>
                </div>
                <!-- Testimonials -->
                <div class="row text-center mt-5">
                    <div class="col-lg-12">
                        <h3 class="text-uppercase text-white">Lo que dicen nuestros pasajeros</h3>
                        <p class="lead text-white">"Un viaje inolvidable. La atención en Primera Clase superó todas mis expectativas." - Ana M.</p>
                        <p class="lead text-white">"Clase Común es perfecta para viajes familiares. Cómodo y accesible." - Pedro G.</p>
                    </div>
                </div>
                <!-- Call to Action -->
                <div class="text-center mt-4">
                    <a href="/register" class="btn btn-lg btn-light text-primary">REGISTRATE YAAA!!!!!</a>
                </div>
            </div>
        </section>


        <!-- Contact Section-->
        

        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading -->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contáctanos por algún problema</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form -->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- Contact Form -->
                        <form id="contactForm" onsubmit="showSuccessMessage(event)">
                            <!-- Name input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Ingresa tu nombre..." required />
                                <label for="name">Tu nombre completo</label>
                                <div class="invalid-feedback">No has ingresado tu nombre.</div>
                            </div>
                            <!-- Email address input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" required />
                                <label for="email">Correo electrónico</label>
                                <div class="invalid-feedback">Un correo electrónico es necesario.</div>
                            </div>
                            <!-- Phone number input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" required />
                                <label for="phone">Número de teléfono</label>
                                <div class="invalid-feedback">Un número de teléfono es necesario.</div>
                            </div>
                            <!-- Message input -->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" placeholder="Escribe tu mensaje aquí..." style="height: 10rem" required></textarea>
                                <label for="message">Mensaje</label>
                                <div class="invalid-feedback">Un mensaje es necesario.</div>
                            </div>
                            <!-- Submit success message -->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center text-success mb-3">
                                    El mensaje se ha enviado correctamente. Nos comunicaremos de 3 a 5 días. En caso de no responder, por favor escríbanos de nuevo. Muchas gracias, esperamos su comprensión.
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <script>
            function showSuccessMessage(event) {
                event.preventDefault(); // Evitar el envío real del formulario
                document.getElementById('submitSuccessMessage').classList.remove('d-none'); // Mostrar el mensaje de éxito
                document.getElementById('contactForm').reset(); // Reiniciar el formulario
            }
        </script>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Nos localizamos en</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
        </div>
        <!-- Portfolio Modals-->
       

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
