<!DOCTYPE html>
<html lang="es">
<head>
<title>TiendaOnlineAndahuaylas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="tienda online andahuaylas" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/PrincipalAliniar.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/PrincipalEstilos.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/PrincipalAnimacion.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/PrincipalFuentes.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/EstilosPagina1.css">
<script src="js/PrincipalVentanas.js"></script>


<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head> 
<body>
         <!--para carrito -->
	<script type="text/javascript" src="js/PrincipalAliniar.js"></script>
	<div class="carritoInicio" id="home1">
		<div class="contenedor">
			<div class="carrito carrito box_1">
                <!--para el logo carrito-->
				<form action="#" method="post" class="FormularioCarrito"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="LogoCarrito" type="submit" name="submit" value=""><i class="fa carrito4" aria-hidden="true"></i></button>
				</form>   
			</div>  
		</div>
	</div>
 <!--termina logo carrito -->
	<nav class="menu" id="menu">
        
            <h3>Bienvenidos a</h3>
        <h1>TiendaOnline</h1>
        <!--<img src="img/FREDY.png" class="fredy">-->
		<div class="contenedor contenedor-botones-menu">
			<button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
			<button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
		</div>

		<div class="contenedor contenedor-enlaces-nav">
			<div class="btn-departamentos" id="btn-departamentos">
				<p>Todos los <span>Productos</span></p>
				<i class="fas fa-caret-down"></i>
			</div>

			<div class="enlaces">
				<a href="#">Mi Cuenta</a>
				<a href="#">Promociones</a>
				<a href="#">Contactar</a>
				<a href="index.html">Cerrar Sesión</a>
			</div>
		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">Categorias</h3>
                     <a href="Productos.php">MOSTRAR TODOS</a>
					<a href="#" data-categoria="tecnologia-y-computadoras">Tecnología y Computadoras <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="libros">Libros <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="ropa-y-accesorios">Ropa y Accesorios <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="hogar-y-cocina">Hogar y Cocina <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="juegos-y-juguetes">Juegos y Juguetes <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="salud-y-belleza">Salud y Belleza <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="alimentos-y-bebidas">Alimentos y Bebidas <i class="fas fa-angle-right"></i></a>
				</div>

				<div class="contenedor-subcategorias">
					<div class="subcategoria " data-categoria="tecnologia-y-computadoras">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Tecnología y Computadoras</h3>
							<a href="Productos.php">Laptops</a>
							<a href="Productos.php">Tablets</a>
							<a href="Productos.php">Computadoras de Escritorio</a>
							<a href="Productos.php">Monitores</a>
							<a href="Productos.php">Componentes</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./img/tecnologia-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./img/tecnologia-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="./img/tecnologia-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="./img/tecnologia-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="./img/tecnologia-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="libros">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Libros</h3>
							<a href="Productos.php">de  escritores peruanos</a>
							<a href="Productos.php">Ciencia Ficcion</a>
							<a href="Productos.php">Fantasia</a>
							<a href="Productos.php">ficcion</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./img/libros-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./img/libros-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="./img/libros-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="./img/libros-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="./img/libros-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="ropa-y-accesorios">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Ropa y Accesorios</h3>
							<a href="Productos.php">Ropa</a>
							<a href="Productos.php">Zapatos</a>
							<a href="Productos.php">Accesorios</a>
							<a href="Productos.php">Relojes</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./img/ropa-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./img/ropa-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="./img/ropa-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="./img/ropa-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="./img/ropa-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="hogar-y-cocina">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Hogar y Cocina</h3>
							<a href="Productos.php">Cocina</a>
							<a href="Productos.php">Electrodomesticos</a>
	
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./img/hogar-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./img/hogar-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="./img/hogar-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="./img/hogar-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="./img/hogar-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="juegos-y-juguetes">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Juegos y Juguetes</h3>
							<a href="Productos.php">Juguetes</a>
							<a href="Productos.php">Juegos de Mesa</a>
			
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./img/juegos-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./img/juegos-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="./img/juegos-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="./img/juegos-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="./img/juegos-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="salud-y-belleza">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Salud y Belleza</h3>
							<a href="Productos.php">Maquillaje</a>
							<a href="Productos.php">Shampoo</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./img/belleza-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./img/belleza-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="./img/belleza-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="./img/belleza-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="./img/belleza-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="alimentos-y-bebidas">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Alimentos y Bebidas</h3>
							<a href="#">Alimentos de la zona</a>
							<a href="#">Bebidas de la zona</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./img/comida-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./img/comida-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="./img/comida-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="./img/comida-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="./img/comida-galeria-4.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
 
    <!--termina barra de  navegacion -->

	<!-- banner -->
	<div class="banner">
		<div class="contenedor">
			<h3>Bienvenidos a tienda online, <span>Andahuaylas</span></h3>
		</div>
	</div>
	<!--para buttones de escoger productos -->
			<div class="unajma epis">
                
				<div class="mostrador1 mostrador2" role="tabpanel" data-example-id="MostrarProducto">
					<ul id="opciones" class="opciones1 opciones2" role="tablist">
						<li role="presentacion" class="activar"><a href="#inicio" id="opcion1" role="tab" data-toggle="tab" aria-controls="home">Celulares</a></li>
						<li role="presentation"><a href="#seleccion1" role="tab" id="opcion2" data-toggle="tab" aria-controls="audio">Audio & parlante</a></li>          
						<li role="presentation"><a href="#seleccion2" role="tab" id="opcion3" data-toggle="tab" aria-controls="video">Computadoras</a></li>          
						<li role="presentation"><a href="#" role="tab" id="opcion4" data-toggle="tab" aria-controls="tv">tv</a></li>                       
						<li role="presentation"><a href="#" role="opcion5" id="kitchen-tab" data-toggle="tab" aria-controls="kitchen">Cocina</a></li>       
					</ul>
					<div id="ContenidoPestaña" class="pestaña1">
						<div role="paneles02" class="Mostrar4 fade active in" id="inicio" aria-labelledby="opcion1">
							<div class="MostrarPestañas">
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/c1.jpg" alt=" " class="img-responsive" />
										<img src="img/c2.jpg" alt=" " class="img-responsive" />
										<img src="img/c3.jpg" alt=" " class="img-responsive" />
										<img src="img/c4.jpg" alt=" " class="img-responsive" />
										<img src="img/c1.jpg" alt=" " class="img-responsive" />
										<img src="img/c2.jpg" alt=" " class="img-responsive" />
										<img src="img/c4.jpg" alt=" " class="img-responsive" />
										<img src="img/c3.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
                                                    <!--glyphicon glyphicon-eye-open-->
												</li>
											</ul>
										</div>
									</div> 
									<h5><a>Samsung J7</a></h5>
									<div class="paraCarrito">
                                        <!--simpleCart_shelfItem-->
										<p><span>s/480</span> <i class="PrecioProducto">s/450</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Samsung J7" /> 
											<input type="hidden" name="amount" value="450.00" />   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>  
									</div>
								</div>
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/c5.jpg" alt=" " class="img-responsive" />
										<img src="img/c6.jpg" alt=" " class="img-responsive" />
										<img src="img/c7.jpg" alt=" " class="img-responsive" />
										<img src="img/c8.jpg" alt=" " class="img-responsive" />
										<img src="img/c6.jpg" alt=" " class="img-responsive" />
										<img src="img/c5.jpg" alt=" " class="img-responsive" />
										<img src="img/c7.jpg" alt=" " class="img-responsive" />
										<img src="img/c8.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito1"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a>huawei p20</a></h5>
									<div class="paraCarrito">
										<p><span>s/750</span> <i class="PrecioProducto">s/730</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="huawei p20" /> 
											<input type="hidden" name="amount" value="730.00" />   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/c9.jpg" alt=" " class="img-responsive" />
										<img src="img/c10.jpg" alt=" " class="img-responsive" />
										<img src="img/c11.jpg" alt=" " class="img-responsive" />
										<img src="img/c12.jpg" alt=" " class="img-responsive" />
										<img src="img/c10.jpg" alt=" " class="img-responsive" />
										<img src="img/c9.jpg" alt=" " class="img-responsive" />
										<img src="img/c12.jpg" alt=" " class="img-responsive" />
										<img src="img/c11.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito3"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a>nokia 5.1 plus</a></h5>
									<div class="paraCarrito">
										<p><span>s/850</span> <i class="PrecioProducto">s/745</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="nokia 5.1 plus" /> 
											<input type="hidden" name="amount" value="745.00"/>   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="Mostrar4 fade" id="seleccion1" aria-labelledby="audio-tab">
							<div class="MostrarPestañas">
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/a1.jpg" alt=" " class="img-responsive" />
										<img src="img/a2.jpg" alt=" " class="img-responsive" />
										<img src="img/a3.jpg" alt=" " class="img-responsive" />
										<img src="img/a4.jpg" alt=" " class="img-responsive" />
										<img src="img/a2.jpg" alt=" " class="img-responsive" />
										<img src="img.jpg" alt=" " class="img-responsive" />
										<img src="img/a4.jpg" alt=" " class="img-responsive" />
										<img src="img/a3.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito4"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a >Audifono Sony</a></h5>
									<div class="paraCarrito">
										<p><span>s/75</span> <i class="PrecioProducto">s/65</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Audifono Sony" /> 
											<input type="hidden" name="amount" value="65.00"/>   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/a5.jpg" alt=" " class="img-responsive" />
										<img src="img/a6.jpg" alt=" " class="img-responsive" />
										<img src="img/a7.jpg" alt=" " class="img-responsive" />
										<img src="img/a8.jpg" alt=" " class="img-responsive" />
										<img src="img/a6.jpg" alt=" " class="img-responsive" />
										<img src="img.jpg" alt=" " class="img-responsive" />
										<img src="img/a8.jpg" alt=" " class="img-responsive" />
										<img src="img/a7.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito5"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a>parlante sony</a></h5>
									<div class="paraCarrito">
										<p><span>s/480</span> <i class="PrecioProducto">s/450</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="parlante sony" /> 
											<input type="hidden" name="amount" value="450.00" />   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/a9.jpg" alt=" " class="img-responsive" />
										<img src="img/a10.jpg" alt=" " class="img-responsive" />
										<img src="img/a11.jpg" alt=" " class="img-responsive" />
										<img src="img/a12.jpg" alt=" " class="img-responsive" />
										<img src="img/a11.jpg" alt=" " class="img-responsive" />
										<img src="img/a9.jpg" alt=" " class="img-responsive" />
										<img src="img/a12.jpg" alt=" " class="img-responsive" />
										<img src="img/a10.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
								<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito6"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a>Audifono Gamer</a></h5>
									<div class="paraCarrito">
										<p><span>s/220</span> <i class="PrecioProducto">s/180</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Audifono Gamer" /> 
											<input type="hidden" name="amount" value="180.00"/>   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="Mostrar4 fade" id="seleccion2" aria-labelledby="video-tab">
							<div class="MostrarPestañas">
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/pc1.jpg" alt=" " class="img-responsive" />
										<img src="img/pc2.jpg" alt=" " class="img-responsive" />
										<img src="img/pc3.jpg" alt=" " class="img-responsive" />
										<img src="img/pc4.jpg" alt=" " class="img-responsive" />
										<img src="img/pc2.jpg" alt=" " class="img-responsive" />
										<img src="img/pc1.jpg" alt=" " class="img-responsive" />
										<img src="img/pc4.jpg" alt=" " class="img-responsive" />
										<img src="img/pc3.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito7"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a>CPU GAMER</a></h5>
									<div class="paraCarrito">
										<p><span>s/2880</span> <i class="PrecioProducto">s/2850</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="CPU GAMER" /> 
											<input type="hidden" name="amount" value="2850.00" />   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/pc5.jpg" alt=" " class="img-responsive" />
										<img src="img/pc6.jpg" alt=" " class="img-responsive" />
										<img src="img/pc7.jpg" alt=" " class="img-responsive" />
										<img src="img/pc8.jpg" alt=" " class="img-responsive" />
										<img src="img/pc5.jpg" alt=" " class="img-responsive" />
										<img src="img/pc7.jpg" alt=" " class="img-responsive" />
										<img src="img/pc8.jpg" alt=" " class="img-responsive" />
										<img src="img/pc6.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito8"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a>Laptop Gamer</a></h5>
									<div class="paraCarrito">
										<p><span>s/3290</span> <i class="PrecioProducto">s/3280</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Laptop Gamer" /> 
											<input type="hidden" name="amount" value="3280.00" />   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/pc9.jpg" alt=" " class="img-responsive" />
										<img src="img/pc10.jpg" alt=" " class="img-responsive" />
										<img src="img/pc11.jpg" alt=" " class="img-responsive" />
										<img src="img/pc12.jpg" alt=" " class="img-responsive" />
										<img src="img/pc9.jpg" alt=" " class="img-responsive" />
										<img src="img/pc11.jpg" alt=" " class="img-responsive" />
										<img src="img/pc12.jpg" alt=" " class="img-responsive" />
										<img src="img/pc10.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito9"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a>Teclado Gamer</a></h5>
									<div class="paraCarrito">
										<p><span>s/220</span> <i class="PrecioProducto">s/220</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Teclado Gamer" /> 
											<input type="hidden" name="amount" value="220.00" />   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
                        
						<div role="tabpanel" class="Mostrar4 fade" id="seleccion3" aria-labelledby="tv-tab">
							<div class="MostrarPestañas">
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/14.jpg" alt=" " class="img-responsive" />
										<img src="img/15.jpg" alt=" " class="img-responsive" />
										<img src="img/16.jpg" alt=" " class="img-responsive" />
										<img src="img/14.jpg" alt=" " class="img-responsive" />
										<img src="img/15.jpg" alt=" " class="img-responsive" />
										<img src="img/16.jpg" alt=" " class="img-responsive" />
										<img src="img/14.jpg" alt=" " class="img-responsive" />
										<img src="img/15.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito3"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a >Refrigerador</a></h5>
									<div class="paraCarrito">
										<p><span>s/950</span> <i class="PrecioProducto">s/820</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Refrigerador" /> 
											<input type="hidden" name="amount" value="820.00" />   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="img/15.jpg" alt=" " class="img-responsive" />
										<img src="img/14.jpg" alt=" " class="img-responsive" />
										<img src="img/16.jpg" alt=" " class="img-responsive" />
										<img src="img/14.jpg" alt=" " class="img-responsive" />
										<img src="img/15.jpg" alt=" " class="img-responsive" />
										<img src="img/16.jpg" alt=" " class="img-responsive" />
										<img src="img/14.jpg" alt=" " class="img-responsive" />
										<img src="img/15.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito3"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a>LED Tv</a></h5>
									<div class="paraCarrito">
										<p><span>S/700</span> <i class="PrecioProducto">S/680</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="LED Tv"/> 
											<input type="hidden" name="amount" value="680.00"/>   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito3"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a >NOMBRE TV</a></h5>
									<div class="paraCarrito">
										<p><span>S/520</span> <i class="PrecioProducto">S/510</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="NOMBRE TV" /> 
											<input type="hidden" name="amount" value="510.00" />   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="Mostrar4 fade" id="seleccion4" aria-labelledby="kitchen-tab">
							<div class="MostrarPestañas">
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito4"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a> COCINA</a></h5>
									<div class="paraCarrito">
										<p><span>S/460</span> <i class="PrecioProducto">S/450</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="NOMBRE COCINA" /> 
											<input type="hidden" name="amount" value="450.00" />   
											<button type="submit" class="ParaCarrito2">Agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito4"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a>nombre producto cocina</a></h5>
									<div class="paraCarrito">
										<p><span>s/390</span> <i class="PrecioProducto">s/350</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="nombre producto cocina" /> 
											<input type="hidden" name="amount" value="350.00" />   
											<button type="submit" class="ParaCarrito2">agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="panel1 panel01">
									<div class="imagenes01">
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<div class="ButtonDetalles">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#detallito4"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a>nombre producto cocina</a></h5>
									<div class="paraCarrito">
										<p><span>s/250</span> <i class="PrecioProducto">s/220</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="nombre producto cocina" /> 
											<input type="hidden" name="amount" value="220.00" />   
											<button type="submit" class="ParaCarrito2">agregar al carrito</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="clearfix"> </div>
		<!--</div>
	</div>
	<!-- //banner-bottom --> 
	<!-- para mostrar detalles en una ventana de cada producto-->
	<div class="detalles1 cuadro1 vista1" id="detallito" tabindex="-1" role="dialog" aria-labelledby="detallito">
		<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/c1.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>Samsung J7</h4>
							<p>Samsung J7 ram 4
                                memoria 16gb
                                camara 32px. </p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/450</i></p>
								<form action="#" method="post">   
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Samsung J7"> 
									<input type="hidden" name="amount" value="450.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>                     
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="detalles1 cuadro1 vista1" id="detallito1" tabindex="-1" role="dialog" aria-labelledby="detallito1">
		<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/c8.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>huawei p20</h4>
                            <p>ram 4gb,  memoria 16gb.....</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 730</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="huawei p20"> 
									<input type="hidden" name="amount" value="730.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="detalles1 cuadro1 vista1" id="detallito2" tabindex="-1" role="dialog" aria-labelledby="detallito2">
		<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/11.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>nombre del producto</h4>
							<p>discripcion.............................</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 850</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Laptop"> 
									<input type="hidden" name="amount" value="850.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="detalles1 cuadro1 vista1" id="detallito3" tabindex="-1" role="dialog" aria-labelledby="detallito3">
		<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/c9.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>nokia 5.1 plus</h4>
							<p>Ram 4gb, cámara 16px......</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 745</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="nokia 5.1 plus"> 
									<input type="hidden" name="amount" value="745.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="detalles1 cuadro1 vista1" id="detallito4" tabindex="-1" role="dialog" aria-labelledby="detallito4">
		<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/a1.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>Audifono Sony</h4>
							<p>Bluetooth, Transmite tus canciones favoritas de manera inalámbrica .................</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 65</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Audifono Sony"> 
									<input type="hidden" name="amount" value="65.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="detalles1 cuadro1 vista1" id="detallito5" tabindex="-1" role="dialog" aria-labelledby="detallito5">
		<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/a5.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>parlante sony</h4>
							<p>Bluetooth, Transmite tus canciones favoritas de manera inalámbrica..................</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 450</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="parlante sony"> 
									<input type="hidden" name="amount" value="450.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="detalles1 cuadro1 vista1" id="detallito6" tabindex="-1" role="dialog" aria-labelledby="detallito6">
	<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/a11.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>Audifono Gamer</h4>
							<p>Audifono Gamer con entradas usb..........</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 180</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Audifono Gamer"> 
									<input type="hidden" name="amount" value="180.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
    <!--otros detalles-->
    	<div class="detalles1 cuadro1 vista1" id="detallito7" tabindex="-1" role="dialog" aria-labelledby="detallito7">
	<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/pc4.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>CPU GAMER</h4>
							<p>Ram 16gb, Intel i7, 8gb Video, ............................</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 2850</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="CPU GAMER"> 
									<input type="hidden" name="amount" value="2850.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
    	<div class="detalles1 cuadro1 vista1" id="detallito8" tabindex="-1" role="dialog" aria-labelledby="detallito8">
	<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/pc8.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>Laptop Gamer</h4>
							<p>Ram 16gb, Intel i7, 8gb Video,..................................................</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 3280</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Laptop Gamer"> 
									<input type="hidden" name="amount" value="3280.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
    	<div class="detalles1 cuadro1 vista1" id="detallito9" tabindex="-1" role="dialog" aria-labelledby="detallito9">
	<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/pc12.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>Teclado Gamer</h4>
							<p>discripcion del productos..................................................</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 220</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Teclado Gamer"> 
									<input type="hidden" name="amount" value="220.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
    	<div class="detalles1 cuadro1 vista1" id="detallito10" tabindex="-1" role="dialog" aria-labelledby="detallito10">
	<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/tv1.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>Tv LG</h4>
							<p>discripcion del producto..................................................</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 1200</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Tv LG"> 
									<input type="hidden" name="amount" value="1200.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
    	<div class="detalles1 cuadro1 vista1" id="detallito11" tabindex="-1" role="dialog" aria-labelledby="detallito11">
	<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/c15.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>Samsung j5</h4>
							<p>discripcion del producto..................................................</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 370</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Samsung j5"> 
									<input type="hidden" name="amount" value="370.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
    	<div class="detalles1 cuadro1 vista1" id="detallito12" tabindex="-1" role="dialog" aria-labelledby="detallito12">
	<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/cam1.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>Camara Cannon</h4>
							<p>discripcion del productos..................................................</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 1000</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Camara Cannon"> 
									<input type="hidden" name="amount" value="1000.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
    <div class="detalles1 cuadro1 vista1" id="detallito13" tabindex="-1" role="dialog" aria-labelledby="detallito13">
	<div class="VentanaDetalles" role="document">
			<div class="ContenidoCuadro1">
				<div class="paraButton">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="InfoProductos">
						<div class="InfoImagen fotoInfo">
							<img src="img/co3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="Discripcion1 Posicion02">
							<h4>estractor</h4>
							<p>discripcion del productos..................................................</p>
							<div class="verCarrito PosicionCarrito">
								<p><span>Precio: </span> <i class="PrecioProducto">s/ 480</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="estractor"> 
									<input type="hidden" name="amount" value="480.00">   
									<button type="submit" class="ParaCarrito2">agregar al carrito</button>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
<!--para banner de oferta -->
	<div class="ofertaEpis">
		<div class="buttOferta">
			<div class="caja1 cajita1">
				<h3>Gran oferta solo esta semana<span>20% <i>De Descuento</i></span></h3>
				<a href="#">Comprar </a>
			</div>
		</div>
	</div>

	<!-- nuevos productos -->
	<div class="NuevosProductos">
		<div class="contenedor"> 
			<h3>Nuevos productos</h3>
			<div class="ParaNuevosProductos">
				<div class="aliniar03 aliniarNuevoProducto">
					<div class="panel01 aliniarNuevoProducto1">
						<div class="imagenes01 Aliniando04">
							<img src="img/tv1.jpg" alt=" " class="img-responsive" />
							<img src="img/tv2.jpg" alt=" " class="img-responsive" />
							<img src="img/tv3.jpg" alt=" " class="img-responsive" />
							<img src="img/tv4.jpg" alt=" " class="img-responsive" />
							<img src="img/tv2.jpg" alt=" " class="img-responsive" /> 
							<div class="ButtonDetalles ButtonDetalles3">
                                                        <!--w3_hs_bottom_sub  --> 
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#detallito10"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a>Tv LG</a></h5>
						<div class="paraCarrito">
							<p><span>s/ 1220</span> <i class="PrecioProducto">s/ 1200</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Tv LG"> 
								<input type="hidden" name="amount" value="1200.00">   
								<button type="submit" class="ParaCarrito2">agregar al carrito</button>
							</form>
						</div>
					</div>
				</div>
				<div class="aliniar03 aliniarNuevoProducto">
					<div class="panel01 aliniarNuevoProducto1">
						<div class="imagenes01 Aliniando04">
                            <img src="img/c13.jpg" alt=" " class="img-responsive" />
							<img src="img/c14.jpg" alt=" " class="img-responsive" />
							<img src="img/c15.jpg" alt=" " class="img-responsive" />
							<img src="img/c16.jpg" alt=" " class="img-responsive" />
							<img src="img/c17.jpg" alt=" " class="img-responsive" /> 
							<div class="ButtonDetalles ButtonDetalles3">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#detallito11"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a>Samsung j5</a></h5>
						<div class="paraCarrito">
							<p><span>s/ 380</span> <i class="PrecioProducto">s/ 370</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Samsung j5"> 
								<input type="hidden" name="amount" value="370.00">   
								<button type="submit" class="ParaCarrito2">agregar al carrito</button>
							</form>
						</div>
					</div>
				</div>
				<div class="aliniar03 aliniarNuevoProducto">
					<div class="panel01 aliniarNuevoProducto1">
						<div class="imagenes01 Aliniando04">
							<img src="img/cam1.jpg" alt=" " class="img-responsive" />
							<img src="img/cam2.jpg" alt=" " class="img-responsive" />
							<img src="img/cam3.jpg" alt=" " class="img-responsive" />
							<img src="img/cam4.jpg" alt=" " class="img-responsive" />
							<img src="img/cam5.jpg" alt=" " class="img-responsive" /> 
							<div class="ButtonDetalles ButtonDetalles11">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#detallito12"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a >Camara Cannon</a></h5>
						<div class="paraCarrito">
							<p><span>s/ 1150</span> <i class="PrecioProducto">s/ 1000</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Camara Cannon"> 
								<input type="hidden" name="amount" value="1000.00">   
								<button type="submit" class="ParaCarrito2">agregar al carrito</button>
							</form>
						</div>  
					</div>
				</div>
				<div class="aliniar03 aliniarNuevoProducto">
					<div class="panel01 aliniarNuevoProducto1">
						<div class="imagenes01 Aliniando04">
							<img src="img/co3.jpg" alt=" " class="img-responsive" />
							<img src="img/co2.jpg" alt=" " class="img-responsive" />
							<img src="img/co1.jpg" alt=" " class="img-responsive" />
							<img src="img/co2.jpg" alt=" " class="img-responsive" />
							<img src="img/co3.jpg" alt=" " class="img-responsive" /> 
							<div class="ButtonDetalles ButtonDetalles3">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#detallito13"><span class="IconoOjo AbrirIconoOjo" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a>estractor</a></h5>
						<div class="paraCarrito">
							<p><span>s/. 480</span> <i class="PrecioProducto">s/. 480</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="estractor"> 
								<input type="hidden" name="amount" value="480.00">   
								<button type="submit" class="ParaCarrito2">agregar al carrito</button>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<div class="ParaMarcas">
		<div class="contenedor">
			<h3>vendemos las mejores marcas</h3>
			<div class="ParaAnimar">
				<ul id="AnimarImagenes">
					<li>
						<img src="img/tb1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="img/tb2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="img/tb3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="img/tb4.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="img/tb5.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
            <!-- script para slider de AnimarImagenes  -->
			<script type="text/javascript">
					$(window).load(function() {
						$("#AnimarImagenes").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="js/PrincipalAnimacion.js"></script>
		</div>
	</div>
	
	<div class="Contactar">
		<div class="contenedor">
			<div class="Contactar01 AliniarContacto">
				<h3>Contactar con administrador</h3>
                <p>atencion las 24 horas al dia y 7 dias a la semana.</p>
                <p>© © 2021 TIENDA ONLINE ANDAHUYLAS-APURIMA Copyright Este sitio se publica bajo licencia Creative Adrich </p>
			</div>
			<div class="Contactar01 AliniarContacto1">
				<form action="#" method="post">
					<input type="email" name="#" placeholder="Correo Electrónico" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
 
	<!-- carrito js-->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script> 
    	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<script src="js/pagina1.js"></script>
</body>
</html>