<!DOCTYPE html>
<html lang="en">

<head>
    <title>404</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="author" content="">


    <!-- FontAwesome JS-->
    <script defer src="{{ asset('ereur/assets/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('ereur/assets/css/portal.css') }}">

</head>

<body class="app app-404-page">

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-11 col-lg-7 col-xl-6 mx-auto">
                <div class="app-branding text-center mb-5">
                    <a class="app-logo" href="{{ url('/') }}"><img
                            src="{{ asset('assets/images/logo.png') }}" alt="logo" width="100%" height="100px"  >
                </div>
                <!--//app-branding-->
                <div class="app-card p-5 text-center shadow-sm mt-5">
                    <h1 class="page-title mb-4">404<br><span class="font-weight-light">Page Not Found</span></h1>
                    <div class="mb-4">
                        Sorry, we can't find the page you're looking for.
                    </div>
                    <a class="btn app-btn-primary" href="{{ url('/') }}">Go to home page</a>
                </div>
            </div>
            <!--//col-->
        </div>
        <!--//row-->
    </div>
    <!--//container-->



    <!--//app-footer-->

    <!-- Javascript -->
    <script src="{{ asset('ereur/assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('ereur/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>





    <!-- Charts JS -->
    <script src="{{ asset('ereur/assets/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('ereur/assets/js/charts-custom.js') }}"></script>

    <!-- Page Specific JS -->
    <script src="{{ asset('ereur/assets/js/app.js') }}"></script>

</body>

</html>
