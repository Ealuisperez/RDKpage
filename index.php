<?php 
session_start();
include 'Intranet/sesion.php'; 
$usuarioLogeado = isset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>RCK Restaurant</title>
    <link rel="stylesheet" href="css/style.css">
	
	<!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    
	<!-- jsdelivr -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
	<!-- locales -->
    <script src="js/javascript.js"></script>
	
			<meta charset="UTF-8">
        <title>Pie de página</title>
		
		<!--estilos-->
        <link href="css/pie de página.css" rel="stylesheet" type="text/css">
		
		<!--fuente de letra-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=PT+Sans:wght@400;700&family=Questrial&family=Nunito:wght@200;300;400;600;700;800;900&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
        <script type="text/javascript">WebFont.load({google: {families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "PT Sans:400,400italic,700,700italic", "Questrial:regular", "Nunito:200,300,regular,600,700,800,900", "Playfair Display:regular,500,600,700"]}});</script>
</head>
<body>

    <!-- Archivo de audio -->
		<audio id="startSound" src="Audio/opera.mp3" preload="auto"></audio>
		<!-- fIN DEL AUDIO -->
	
        <div id="main-content" style="margin: 0; padding: 0;">
		<iframe id="content-frame" src="" style="width:100%; border:0; height:auto;"></iframe>
	</div>
    
    <header class="header" id="a">
        <div class="menu container">
            <img src="Imagenes/logoRestaurante.jpg" class="logo" alt="">
            <input type="checkbox" id="menu">
            <label for="menu">
                <img class="menu-icono" src="Imagenes/menu.png" alt="">
            </label>

            <h3 class="Circun">Av. Circunvalacion del Golf 908, La Molina, Lima, Perú</h3>
            <h3 class="Abierto">Abierto: 8:00 am hasta 12:00 am</h3>

            <nav class="navbar">
                <ul class="menu-hori">
                    <li>
                        <a onclick="Volver()">Inicio</a>
                        <ul class="menu-verti">
                            <li><a href="#platosEstrellas">Platos</a></li>
                            <li><a href="#Contacto">Contactos</a></li>
                            <li><a href="#Historia">Historia</a></li>
                        </ul>
                    </li>
                    <li><a href="#" onclick="CargarIframe('./Platos/Platos.php')">Platos</a></li>
                    <li><a href="#" onclick="CargarIframe('./servicios/paginaServicios.php')">Servicios</a></li>
                    <li><a href="#" onclick="CargarIframe('./Redes/Redes.php')">Redes Sociales</a></li>
                    <li><a href="#" onclick="CargarIframe('./Mapas/Mapas.php')">Mapas</a></li>
                    <li><a href="#" onclick="CargarIframe('./Contacto/Contacto.php')">Contacto</a></li>
                    <li><a href="#" onclick="CargarIframe('./Intranet/Menu.php')">Intranet</a></li>
                    
                </ul>
            </nav>
			<div class="profile-container" style="display: <?php echo $usuarioLogeado ? 'block' : 'none'; ?>;">
				<svg aria-label="Tu perfil" role="img" width="50" height="50" id="profileImage">
					<defs>
						<clipPath id="clip-circle">
							<circle cx="25" cy="25" r="25"/>
						</clipPath>
					</defs>
					<image
						x="0"
						y="0"
						width="50"
						height="50"
						href="Imagenes/usuario1.jpg"
						clip-path="url(#clip-circle)"
						preserveAspectRatio="xMidYMid slice"/>
				</svg>
			</div>
			<!-- Ventanaza -->
			<div id="myModal" class="modal2">
				<div class="modal-content2">
					<div class="profile-container">
						<span class="cerrarX">&times;</span>
						<img src="Imagenes/usuario1.jpg" alt="Profile Picture" style="width: 55px; height: 55px; border-radius: 50%;">
						<div style="font-family: sans-serif;font-size: 20px; font-weight: bold; margin:12px;"><?php echo htmlspecialchars($nombre); ?></div>
					</div><br>
					<form action="Intranet/logout.php" method="POST">
						<button type="submit" style="font-size: 18px; color: #007bff; text-decoration: none; background: none; border: none; cursor: pointer;">Cerrar sesión</button>
					</form>

				</div>
			</div>
			
        </div>
		
		<script>
			var modal = document.getElementById("myModal");
			var img = document.getElementById("profileImage");
			var span = document.getElementsByClassName("cerrarX")[0];

			img.onclick = function() {
				modal.style.display = "block";
			}

			span.onclick = function() {
				modal.style.display = "none";
			}

			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		</script>
		
        <div class="header-content container">
            <div id="header">
            <h3 class="h3">Delicioso y selecto</h3>
            
            <div class="line1"></div>
            <h1 class="h1">DELEITATE CON NUESTROS<br><span class="typed"></span></h1>
                    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
                    <script src="js/Letra.js"></script>
            
            <div class="line2"></div>
            <p>
                ¡Descubre la alegría en cada sabor que probamos!
            </p>
			</div>
			<div id="contenidoPorDefecto">
            <a href="#Contacto" class="btn-1">Atencion al cliente</a>

            <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=GTvVlcSMTFCXWwPQFWsXVlCXmzDtVgxjcmGwbZWTQNTrltHGxqDGMcRLFDJHwssmhFqCpJkKqWFdJ"
                title="Correo Ele." target="_blank" class="button email-button">

                <img src="Imagenes/iconoCorreo.png" alt="correo" class="email-icon">
            </a>
            <a href="tel:+51940409615" title="Llamar Deli." target="_blank" class="button phone-button">
                <img src="Imagenes/iconoLlamada.png" alt="llamada" class="phone-icon">
            </a>
            </div>
        </div>
        
    </header>

	<div id="contenidoDeHome">
	<!-- <link rel="stylesheet" href="Chefs/Chefs.css"/> -->
	<section class="CONTAINER_SLIDER">
		<br><br><br><br>
		<h2>Nuestros chefs mas famosos</h2>
		<br>
		<div class="slider-box">
		  <ul>
			<li>
			  <img src="Chefs/CHEFS/CHEF1.jpg" alt="" />
			  <div class="texto">
				<h2>Isabella García Martínez</h2>
				<p>Perú</p>
			  </div>
			</li>


			<li>
				<img src="Chefs/CHEFS/CHEF2 (1).jpg" alt="" />
				<div class="texto">
				  <h2>José Andrés López</h2>
				  <p>Chile</p>
				</div>
			  </li>

			  <li>
				<img src="Chefs/CHEFS/CHEF3.jpg" alt="" />
				<div class="texto">
				  <h2>Li Weiying</h2>
				  <p>China</p>
				</div>
			  </li>

			  <li>
			  <img src="Chefs/CHEFS/CHEF4.jpg" alt="" />
			  <div class="texto">
				<h2>Gastón Acurio Jaramillo</h2>
				<p>Perú</p>
			  </div>
			</li>
			
		  </ul>
		</div>

	</section>



    <main class="services" id="Contacto">
        <div class="services-content container" >
            <h2>Reservas Cliente</h2>
            <form id="reservation-form" class="reservation-form">
                <div class="mb-3">
                    <label for="table-number" class="form-label">Número de Mesa</label>
                    <select id="table-number" class="form-select" required>
                        <option value="" selected disabled>Selecciona una mesa</option>
                        <option value="1">Mesa 1</option>
                        <option value="2">Mesa 2</option>
                        <option value="3">Mesa 3</option>
                        <option value="4">Mesa 4</option>
                        <option value="5">Mesa 5</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="dish" class="form-label">Elige tu Plato</label>
                    <select id="dish" class="form-select" required>
                        <option value="" selected disabled>Selecciona un plato</option>
                        <option value="filete-mignon">Filete Mignon</option>
                        <option value="salmon-parrilla">Salmón a la Parrilla</option>
                        <option value="camarones-guizado">Camarones Guizado</option>
                        <option value="huevos-benedictinos">Huevos Benedictinos</option>
                        <option value="panqueques-arandanos">Panqueques de Arándanos</option>
                        <option value="ensalada-cesar">Ensalada César a la Parrilla</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Fecha</label>
                    <input type="date" id="date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Reservar</button>
            </form>
        </div>
    </main>
        <!-- Modal de confirmación -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmación de Reserva: </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="confirmationText"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/Reserva.js"></script>
    

    <section class="general" id="Historia"> 

        <div class="general-1">
            <h2>Historia</h2>
            <p>
                En RDK Restaurant, llevamos 15 años creando momentos especiales a
				través de nuestra deliciosa comida y eventos memorables. Desde el
				primer día, nos comprometimos a ofrecer una experiencia excepcional
				a nuestros clientes en un ambiente cómodo y limpio. Nos inspiramos
				en la diversidad de la cocina peruana, y nos esforzamos por tener
				los mejores cocineros y meseros para garantizar un servicio
				impecable. Con el paso de los años, hemos notado la preferencia de
				nuestros clientes y la creciente demanda de eventos especiales en
				nuestro restaurante. Por eso, en 2019, inauguramos un local
				exclusivo para eventos, convirtiéndonos en el lugar perfecto para
				celebrar cualquier ocasión, desde cumpleaños hasta eventos
				personalizados.
            </p>
            <a href="#" class="btn-1">Informacion</a>
        </div>
        <div class="general-2">
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Hsw9WIjL5A0?si=5HkbpBRXp9upoXIb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        
    </section>

    <section class="general"> 

        <div class="general-3"></div>

        <div class="general-1">
            <h2>MISION Y VISION</h2>
            <p>
                En RDK Restaurant, nuestra misión es ofrecerte una experiencia
                gastronómica y social excepcional. Nos destacamos por la calidad de
                nuestra comida y los eventos que organizamos en nuestros locales.
                Estamos comprometidos a brindarte momentos inolvidables, donde
                puedas disfrutar de deliciosos platos y crear recuerdos especiales
                junto a tu familia.
                <br />
                <br />
                Por otro lado, nuestra visión es ser reconocidos como un símbolo de
                innovación y excelencia en la gastronomía. Buscamos sorprender a
                nuestros clientes con experiencias culinarias únicas que fusionen
                creatividad y tradición. En CRK Restaurant, nos comprometemos a
                elevar constantemente el estándar de calidad y a satisfacer las
                expectativas más exigentes. ¡Únete a nosotros y descubre la
                excelencia en CRK Restaurant!
            </p>
            <a href="#" class="btn-1">Informacion</a>
        </div>
        
        
    </section>

    <section class="blog container">

        <h2>Blogs</h2>
        <p>Nuevos anuncios coorporativos</p>

        <div class="blog-content">
            <div class="blog-1">
                <img src="Imagenes/blog2.jpg" alt="">
                <h3>Blog 1</h3>
                <p>
                    En RDK Restaurant, nuestro reciente evento "Noche de Sabores Exóticos" fue un éxito rotundo. Invitamos a nuestros comensales a un viaje culinario por diferentes culturas, presentando platos únicos y creativos que fusionaron lo mejor de la cocina internacional con ingredientes locales. ¡Gracias a todos los que asistieron y disfrutaron de una noche memorable con nosotros!
                </p>
            </div>

            <div class="blog-1">
                <img src="Imagenes/blog2.jpg" alt="">
                <h3>Blog 2</h3>
                <p>
                    En RDK Restaurant, lanzamos nuestra nueva serie de eventos "Cenas Temáticas". Cada semana, te invitamos a disfrutar de una experiencia gastronómica diferente, desde noches italianas hasta cenas de tapas españolas. Ven y descubre cómo fusionamos tradición y modernidad en cada plato, creando momentos especiales que recordarás para siempre.
                </p>
            </div>

            <div class="blog-1">
                <img src="Imagenes/blog3.jpg" alt="">
                <h3>Blog 3</h3>
                <p>Lorem ipsum dolor, sit amet consectetur 
                    adipisicing elit. Ab saepe aliquid tempore eaque 
                    voluptate cumque quis voluptas debitis! Quam voluptatum ab molestias! Molestias sunt dolores modi ratione 
                    impedit cum veritatis.
                </p>
            </div>

        </div>

        <a href="#" class="btn-1"> Informacion</a>

    </section>
	</div>
	
    <div class="footer-dark">
            <div class="footer-wrapper"><!--estos id ayudan a que todo este en orden (estilos en pie de página.css)-->
			
                <div id="elemento1" class="logo-wrapper"><img src= "./Imagenes/logoRestaurante.jpg" Style="border-radius: 50px;" width="100" alt=""></div>
				
                <div id="elemento2" class="footer-text-wrapper"><a href="" class="footer-link-block title-footer w-inline-block w--current"><h4 class="footer-head light-text">Inicio</h4></a></div>
				
                <div id="elemento3" class="footer-text-wrapper"><a href="" class="footer-link-block w-inline-block"><div class="footer-text">SOBRE NOSOTROS</div></a></div>
				
                <div id="elemento4" class="footer-text-wrapper"><a href="" class="footer-link-block w-inline-block"><div class="footer-text">Menu</div></a></div>
				
                <div id="elemento5" class="footer-text-wrapper"><a href="" class="footer-link-block w-inline-block"><div class="footer-text">GALERIA DE CHEFS</div></a></div>
				
                <div id="elemento6" class="footer-text-wrapper"><a href="" class="footer-link-block w-inline-block"><div class="footer-text">PLATOS</div></a></div>
				
                <div id="elemento7" class="footer-text-wrapper"><a href="" class="footer-link-block title-footer w-inline-block"><h4 class="footer-head light-text">CONTACTO</h4></a></div>
				
                <div id="elemento8" class="footer-text-wrapper"><a href="" class="footer-link-block w-inline-block"><div class="footer-text">378 Victoria Ave,</div></a></div>
				
				<div id="elemento9" class="footer-text-wrapper"><a href="" class="footer-link-block w-inline-block"><div class="footer-text">MONTREAL, QC</div></a></div>
				
				<div id="elemento10" class="footer-text-wrapper"><a href="" class="footer-link-block w-inline-block"><div class="footer-text">+51 987654321</div></a></div>
				
				<div id="elemento11" class="footer-text-wrapper"><a href="" class="footer-link-block w-inline-block"><div class="footer-text">info@RDK.com</div></a></div>
				
				<div id="elemento12" class="footer-text-wrapper"><a href="" class="footer-link-block title-footer w-inline-block"><h4 class="footer-head light-text">creditos</h4></a></div>
				
				<div id="elemento13" class="footer-text-wrapper"><a href="" class="footer-link-block w-inline-block"><div class="footer-text">Profe de P. Web</div></a></div>
			</div>
		</div>
    
	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>