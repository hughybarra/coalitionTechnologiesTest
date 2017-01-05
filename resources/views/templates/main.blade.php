<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bing SEO Verification -->
    <meta name="msvalidate.01" content="" />
    @section('header')

    @show

    <link rel='shortcut icon' href='/img/favicon.ico' type='image/x-icon'/ >
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->





    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/cyborg.bootswatch.bootstrap.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Analytics -->
    <script>
        // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        // })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        // ga('create', 'xxxxxxxx', 'auto');
        // ga('send', 'pageview');
    </script>
	


</head>

<body>



    <div class="template-container">
        @yield('content')
    </div><!-- end template containers -->
    <div class="myButton"></div>


    <!-- Scripts -->
    <script type="text/javascript" src="{{ elixir('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>



</body>

</html>
