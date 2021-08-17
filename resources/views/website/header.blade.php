<header>
    <div class="header_container">
        <div class="box">
            <div class="info">
                    <span><img src="img/secure_mc.svg" alt=""> Compras seguras online</span>
                    <span id="border"><img src="img/wallet_mc.svg" alt=""> Pago contra entrega</span>
                    <span><img src="img/truck_mc.svg" alt=""> Entregas el mismo día</span>
            </div>
            <div class="redes">
                    <span id="border">LLámanos &nbsp;&nbsp; 3009108496</span>
                    <span>Escribenos</span>
                    <a href="https://www.youtube.com/watch?v=gchln4oix68" target="_blank"><img src="img/youtube_mc.svg" alt=""></a>
                    <a href="https://www.facebook.com/Laikamascotascolombia" target="_blank"><img src="img/facebook_mc.svg" alt=""></a>
                    <a href="https://www.instagram.com/laikamascotas/?hl=es-la" target="_blank"><img src="img/instagram_mc.svg" alt=""></a>
            </div>
        </div>
        <div class="box2">
            <div class="logo">
                <img src="img/LaikaMascotas.svg" alt="Logo laika">
            </div>
            <div class="buscador">
                <input type="text" placeholder="Encuentra lo mejor para tu mascota" class="input_search">
                <button>
                    <img src="img/logo_colombia.png" alt="bandera colombia">
                    <span>BOG</span>
                    <i class="fa fa-chevron-down"></i>
                </button>
            </div>
            <div class="cuenta">
                <div class="icon_user">
                    {{-- <img src="img/user_icon.png" alt="Logo usuario"> --}}
                    <button type="button" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Mi cuenta &nbsp;</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalCuenta" onclick="modal_cuenta(1)">Iniciar sesión</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalCuenta" onclick="modal_cuenta(2)">Crear cuenta</a></li>
                    </ul>
                </div>
                <div class="icon_shopping-cart">
                    <img src="img/cart_mc.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="header_container2">
        <div class="contenedor">
            <div class="primera_fila">
                <div class="menu">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="logo_laika"><img src="img/LaikaMascotas.svg" alt=""></div>
                <div class="ciudades_shop">
                    <button>
                        <img src="img/logo_colombia.png" alt="">
                        <span>BOG</span>
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <div class="logo_cart">
                        <img src="img/cart_mc.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="segunda_fila">
                <input type="text" placeholder="Encuentra lo mejor para tu mascota" class="input_search">
            </div>
        </div>
    </div>
    <div class="header_laika_member">
        <div class="opciones">
            <button>Compra para perro <i class="fa fa-chevron-right"></i></button>
            <button>Compra para gato <i class="fa fa-chevron-right"></i></button>
            <button>Ofertas <i class="fa fa-chevron-right"></i></button>
            <button>Servicios <i class="fa fa-chevron-right"></i></button>
            <button>Blog</button>
        </div>
        <div class="member">
            <img src="img/laika_member.png" alt="">
        </div>
    </div>
    
</header>