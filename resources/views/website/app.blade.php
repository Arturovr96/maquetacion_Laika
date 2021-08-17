<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Laika Mascotas - Universo peludo</title>
    <link rel="shortcut icon" href="img/LaikaMascotas.svg" />
    {{-- ESTILOS --}}
    <link rel="stylesheet" href="css/styles.css">
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    {{-- ICONOS --}}
    <script src="https://use.fontawesome.com/62b8208dfe.js"></script>
    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>
    @include('website.header')
    <!-- Vertically centered modal -->
    
    <section class="main">
        <div class="modal fade" id="modalCuenta" tabindex="-1" aria-labelledby="modalCuentaLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-centrado">
                {{-- contenido modal  --}}    
            </div>
        </div>
        <div class="section_member">
            <div class="row text-center">
                <div class="col-md-12">
                    <button class="btn btn-outline-secondary activo">Perros</button>
                    <button class="btn btn-outline-secondary">Gatos</button>
                </div>
                <div class="col-md-12 pt-1">
                    <img src="img/laika_member.png  " alt="">
                </div>
            </div>
        </div>
        @yield('content')
    </section>
    @include('website.footer')
    <script src="js/main.js"></script>
</body>
</html>