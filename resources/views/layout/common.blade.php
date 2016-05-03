<!doctype html>

<html lang="en" class="no-js">
<head>
<title>
    {{ Config::get('GlobalMart.name') }} - @section('title') @show
</title>
@include('common.header')
</head>
<body>

<!-- Container -->
<div id="container">
    <!-- Header ================================================== -->
    <header class="clearfix">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            @include('common.info')
            @include('common.menu')
        </nav>
    </header>

    @section('content')
    @show

    @include('common.footer')
</div>

</body>
</html>


