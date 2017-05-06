<!DOCTYPE html>
<html @yield('html_class','') lang="en">
<head>
@section('headerfile_unauth')
    
    <title>@yield('title', 'PRODUCT MANAGER')</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Olaosebikan Rotimi : olaosebeikanrotimi@gmail.com">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/font-awesome/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/form-elements.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}" type="text/css">

    

    @show  
</head>

    <body @yield('bodyClass','')>

        
        @section('contentData')
        
        @show

       

        @section('footerJs')
        <script src="{{URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/scripts.js')}}"></script>
        <script src="{{URL::asset('assets/js/bind.js')}}"></script>
        <script src="{{URL::asset('assets/js/loadfile.js')}}"></script>

        <script>

$(document).ready(function(){

  document.getElementById('add-new-product').addEventListener('click', function(){
  var token = '{{Session::token()}}';
  LoadDb.init("{{route('add-new-product')}}","#add-form","responseBar","Process-state","POST",token);

  });
  
});
</script>

        @show
    </body>
</html>