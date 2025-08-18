<html>
  <head>
    <title>Vehicle Management and sell</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
  </head>
  <body>
  <section class="main-section">
     
    <nav class="navbar">
        <ul class="menu">

           <button class="hamburgerMenu"> 
            <div></div>
            <div></div>
            <div></div>
           </button>
      
           <li>
                <a href="{{ route('vehicle_form')}}">Add Vehicle</a>
            </li>
          
            <li>
                <a href="{{ route('vehicle_list')}}">Vehicles</a>
            </li>
            <li>
                <a href="">contact</a>
            </li>
            
            <li>
                <a href="">all_products</a>
            </li>
            <li>
                <a href="">login</a>
            </li>
           

        </ul>
       

    </nav>

      <div class="container">
        @if (session('message'))
          <p class="success">{{ session('message')}}</p>
        @endif

        @if ($errors->any())
            <ul>
              @foreach ($errors->all() as $one_error)
                  <li class="error">{{ $one_error }}</li>
              @endforeach
            </ul>
        
        @endif

        <section class="page">
              @yield('content')
        </section>
      </div>

  </section>
  </body>


</html>