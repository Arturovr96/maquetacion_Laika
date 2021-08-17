@extends('website/app')

@section('title', $producto[0]->product) 
@section('content')
    <div class="contenedor_producto">
        <div class="imagen">
            <img src="{{$producto[0]->img}}" alt="">
        </div>
        <div class="contenido">
            <div class="info_producto">
                <div class="datos_producto">
                    <p class="titulo">{{$producto[0]->product}}</p>
                    <p class="marca">Marca: {{$producto[0]->brand}}</p>
                    <div class="calificacion">
                        @for($j=0;$j<$producto[0]->stars;$j++)
                            <i class="fa fa-star" style="color: orange"></i>
                        @endfor
                        @php
                            $estrellas = 5-$producto[0]->stars;
                        @endphp
                        @for ($k = 0; $k < $estrellas; $k++)
                                <i class="fa fa-star-o" style="color: orange"></i>
                        @endfor
                    </div>
                    <div class="precio_normal">
                        <p>Precio normal</p>
                        <h3>${{$precio[0]}}</h3>
                    </div>
                    <hr>
                    <div class="precio_mebresia">
                        <p>Precio para</p>   
                        <div>
                            <h3>${{$precio_member[0]}}</h3>
                            <img src="img/laika_member.png" alt="">
                        </div>
                    </div>
                    <p>Cantidad:@if($producto[0]->stock!=0)<b>DISPONIBLE</b>@else <b class="red">NO DISPONIBLE TEMPORALMENTE</b>@endif</p>
                    <div class="referencia">
                        <p>Seleccione su referencia</p>
                        <button>{{$producto[0]->reference}}</button>
                    </div>
                </div>
                <div class="cantidad_producto"></div>
            </div>
            <div class="descripcion_producto">
                <div class="titulo_descripcion">
                    <img src="img/logo_informacion.png" alt="">
                    <p>Información de producto</p>
                </div>
                <div>
                    <div class="info_botones">
                        <button id="boton1" class="active" onclick="informacion(1)">Beneficios <i class="fa fa-chevron-down"></i></button>
                        <button id="boton2" onclick="informacion(2)">Caracteristicas <i class="fa fa-chevron-down"></i></button>
                        <button id="boton3" onclick="informacion(3)">Descripción <i class="fa fa-chevron-down"></i></button>
                    </div>
                    <div class="caja_info">
                        <p id="beneficios">{{$producto[0]->benefices}}</p>
                        <p id="caracteristicas" class="none">{{$producto[0]->spects}}</p>
                        <p id="descripcion" class="none">{{$producto[0]->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intereses">
        <h4>Tambien te puede interesar</h4>
    </div>         
@endsection