<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eshop - One Stop To All Your Soution</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">

    @include('layouts.inc.style')
</head>

<body>
    <div class="page-wrapper">

        @include('layouts.inc.header')

        <main class="main">

            @yield('content')
          
        </main>

        @include('layouts.inc.footer')

    </div>

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>


    <div class="mobile-menu-overlay"></div>

    @include('components.signin')

    @include('layouts.responsive.mobile_menu')

    @include('components.subscription_popup')

    @include('layouts.inc.script')

</body>


</html>