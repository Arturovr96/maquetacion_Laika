@extends('website/app')

@section('title', 'Consulta') 

@section('content')
    <div class="carrusel">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner3.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div> 
    @include('website.views.categorias')
    @include('website.views.destacados')
    <div class="row div_productos justify-content-center">
        <h4>Universo lleno de ofertas</h4>
        @for($i=0;$i<count($productos);$i++)
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-4">
            <div class="card productos">
                <a href="verproducto?id={{$productos[$i]->id}}" class="img_producto">
                    <img src="{{$productos[$i]->img}}" class="card-img-top img_producto" alt="">
                    <div class="card-body">
                        <p class="card-text producto_nombre" title="Pet Brunch Helado Centro De Res Cobertura Hígado De Ternera Y Chips De Avena">
                            {{$productos[$i]->product}}
                        </p>
                        <p>
                            @for($j=0;$j<$productos[$i]->stars;$j++)
                                <i class="fa fa-star" style="color: orange"></i>
                            @endfor
                            @php
                                $estrellas = 5-$productos[$i]->stars;
                            @endphp
                            @for ($k = 0; $k < $estrellas; $k++)
                                <i class="fa fa-star-o" style="color: orange"></i>
                            @endfor
                        </p>
                        <p class="precio">${{$precio[$i]}}</p>
                        <div class="precio_member">
                            <div>
                                <p>${{$precio_member[$i]}}</p>
                            </div>
                            <div>
                                <img src="img/laika_member.png" alt="">
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card-body card_boton">
                        <p class="card-text"><i class="fa fa-shopping-cart"></i> Agregar al carrito</p>
                    </div>
                </a>
            </div>
        </div>
        @endfor
    </div>
@endsection