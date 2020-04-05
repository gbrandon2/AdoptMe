@extends("layouts.template")


@section("navBar")
<title>Home</title>
@endsection
@section("container")
<section class="breadcrumb breadcrumb_bg" style= " background-image: url({{ asset('/imagenes/banner_bg.png')}})">
      <div class="container" >
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb_iner">
              <div class="breadcrumb_iner_item" >  
                <h3>Encuentra a tu nuevo compañero</h3>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>

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

     <!-- counter adopt number here -->
    <section class="abopt_number_counter section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-6">
                    <div class="counter_text">
                        <h2>Adopta y cambia vidas</h2>
                        <p>Necesitamos de tu ayuda para cambiar vidas.</p>
                        <div class="counter_number">
                            <div class="single_counter_number">
                                <img src="imagenes/adopt_icon_1.png" alt="#">
                                 <h3><span class="count">590</span>+</h3>
                                <p>Mascotas disponibles</p>
                            </div>
                            <div class="single_counter_number">
                                <img src="imagenes/adopt_icon_2.png" alt="#">
                                <h3><span class="count">300</span>+</h3>
                                <p>Clientes felices</p>
                            </div>
                        </div>
                        <a href="#" class="btn_1">Conócelos</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="adopt_image">
                        <img src="imagenes/adopt_img.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section("footer")

@endsection