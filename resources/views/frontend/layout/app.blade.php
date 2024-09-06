<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TYRE ZONE Tyeres</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightbox.min.css') }}">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    @yield('style')

</head>

<body>

    @yield('main')


    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/cart.js') }}"></script>


    @yield('customjs')

    <script>
        let alerts = document.querySelectorAll(".alert");

        setTimeout(() => {
            alerts.forEach(alert => {
                alert.classList.remove("show");
            });
        }, 3000);
        setTimeout(() => {
            alerts.forEach(alert => {
                alert.remove();
            });
        }, 3500);
    </script>

</body>

</html>
