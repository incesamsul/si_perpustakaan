<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Perpus web</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('bostorek/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('bostorek/css/responsive.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
</head>

<body>

    @if (session('message'))
        {{ sweetAlert(session('message'), 'success') }}
    @endif
    @if (session('error'))
        {{ sweetAlert(session('error'), 'warning') }}
    @endif
    <div class="hero_area">
        <!-- header section strats -->
        <nav class="navbar-small d-none d-lg-flex">
            <div class="left text-secondary">
                <span class="mr-5"><i class="far fa-envelope"></i> perpus@mail.com</span>
                <span><i class="fas fa-phone"></i> +0397434678</span>
            </div>
            <div class="right text-secondary">

                <a class="text-inherit mr-3" href="{{ URL::to('/keranjang') }}"><i
                        class="fa-solid fa-cart-shopping"></i>
                    <?php
                    if (auth()->user()) {
                        $cart = App\Models\Keranjang::where('id_user', auth()->user()->id)->get();
                    }
                    
                    ?>
                    @if (auth()->user())
                        <sup class="badge badge-warning ml-2">{{ count($cart) > 0 ? count($cart) : 0 }}</sup>
                    @endif

                </a>
                @if (auth()->user())
                    <a class="text-inherit" href="{{ URL::to('/login') }}"><i class="far fa-user"></i>
                        <span>{{ auth()->user()->name }}</span></a>
                @else
                    <a class="text-inherit" href="{{ URL::to('/login') }}"><i class="far fa-user"></i></a>
                @endif

            </div>
        </nav>
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ URL::to('/') }}">
                        <span>
                            Perpusweb
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link pl-lg-0" href="{{ URL::to('/') }}">Beranda <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/#buku') }}"> Buku</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/#kategori') }}"> Kategori</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/#tentang_kami') }}">Tentang kami</a>
                            </li>
                            <li class="nav-item only-mobile">
                                <a class="nav-link" href="{{ URL::to('/login') }}">Akun saya</a>
                            </li>
                            <li class="nav-item only-mobile">
                                <a class="nav-link" href="{{ URL::to('/keranjang') }}">Keranjang</a>
                            </li>
                        </ul>
                        {{-- <from class="search_form">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from> --}}
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        @yield('content')
        <!-- footer section -->
        <footer class="footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="">perpus</a>
                </p>
            </div>
        </footer>
        <!-- footer section -->
        <!-- Sweet Alert -->
        <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- jQery -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>

        {{-- scanner --}}
        <script src="{{ asset('plugins/scanner/html5-qrcode.min.js') }}"></script>

        <script src="{{ asset('plugins/qrcodejs/jquery.min.js') }}"></script>
        <script src="{{ asset('plugins/qrcodejs/qrcode.min.js') }}"></script>

        @yield('script')

</body>

</html>
