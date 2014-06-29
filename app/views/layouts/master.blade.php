<!-- Stored in app/views/layouts/master.blade.php -->

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.3/css/foundation.min.css">
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.3/js/foundation.min.js"></script>
       
  </head>

    <body>
        @section('sidebar')
             <div class="row">
    <div class="large-3 columns">
      <h1><img src="http://placehold.it/400x100&text=Logo"></h1>
    </div>
    <div class="large-9 columns">
      <ul class="button-group right">
        <li><a href="#" class="button">Link 1</a></li>
        <li><a href="#" class="button">Link 2</a></li>
        <li><a href="#" class="button">Link 3</a></li>
        <li><a href="#" class="button">Link 4</a></li>
        <li>{{ isset(Auth::user()->nick) ? '<a href="#" data-reveal-id="myModal" class="button">'.Auth::user()->nick.'</a>' :  '<a href="#" data-reveal-id="myModal" class="button">Login</a>' }}</li>
      </ul>
    </div>
  </div>
 
        @show
 
 <div class="container">
            @yield('content')


@include('login')

        </div>
  <footer class="row">
    <div class="large-12 columns">
      <hr/>
      <div class="row">
        <div class="large-6 columns">
          <p>© Copyright no one at all. Go to town.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>




  
        
       <script>
  $(document).foundation();
</script>
    </body>
</html>