<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lugstore - Admin</title>
    <meta name="description" content="Lugstore - Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- style  -->
   @stack('before-style')
   @include('includes.style')
   @stack('after-style')
</head>

<body>
    <!-- left panel atau sidebar -->
    @include('includes.sidebar')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- header atau navbar -->
        @include('includes.navbar')
        <!-- Content -->
        @yield('content')
        <div class="content">
            <!-- dashboard / animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->

    <!-- script -->
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>
</html>
