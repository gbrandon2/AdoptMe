@extends("layouts.template")

<!--NavBar-->
@section("navBar")
<title>About</title>
@endsection
@section("container")
<!-- service part start-->
    <section class="service_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <img src="imagenes/icon_heart.png" alt="">
                        <h2>Bienvenidos a AdoptMe</h2>
                        <p>Sitio web para integrar a fundaciones y personas para encontrar compañeros de vida en Barranquilla.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part">
                        <img src="imagenes/adopt_icon_3.png" alt="#">
                        <h3>Productos</h3>
                        <p>Puedes ofrecer todos los productos de manera gratuita para el cuidado de las mascotas.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part">
                        <img src="imagenes/adopt_icon_1.png" alt="#">
                        <h3>Adopción</h3>
                        <p>Conoce las mascotas que ofrecen las fundaciones, así tendrás la oportunidad de cambiarles la vida.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part">
                        <img src="imagenes/adopt_icon_2.png" alt="#">
                        <h3>Servicios</h3>
                        <p>Como fundación puedes ofrecer productos y servicios para el cuidado de las mascotas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h3 class="mb-30">Left Aligned</h3>
				<div class="row">
					<div class="col-md-3">
						<img src="imagenes/valunteer_img.png" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20">
						<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to
							transfer money to them through any US bank or payment system. As a result of this law, most of the popular
							online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino
							players found themselves being chased by the Federal government. But, after a fortnight, the online casino
							industry came up with a solution and new online casinos started taking root. These began to operate under a
							different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major
							part of this was enlisting electronic banking systems that would accept this new clarification and start doing
							business with me. Listed in this article are the electronic banking systems that accept players from the United
							States that wish to play in online casinos.</p>
					</div>
				</div>
			</div>
				
	    </div>
	</div>
<!--Comment format-->
<section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div class="row">
        <div class="col-12">
          <h2 class="contact-title">¿Tienes algún comentario?</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escríbenos aquí'" placeholder = 'Escríbenos aquí'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" placeholder = 'Nombre'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo'" placeholder = 'Correo'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'" placeholder = 'Asunto'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">ENVIAR</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>barranquilla, Colombia.</h3>
              <p>Universidad del Norte</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>adoptme.soporte@gmail.com</h3>
              <p>¡Estamos disponibles!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

@endsection
<!--Footer-->
@section("footer")
@endsection