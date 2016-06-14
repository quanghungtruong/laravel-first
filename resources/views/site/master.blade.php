<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/site_css.css')}}">
</head>
<body>
<div class="container">
   <section class="header">

   </section>
   <section class="content">
        <aside class="left-sidebar"></aside>
        <div class="main-content">
            @yield('content')
        </div>
   </section>
   <section class="footer">

   </section>
</div>
</body>
</html>
