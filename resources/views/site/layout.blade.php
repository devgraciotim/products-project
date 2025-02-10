<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <ul id='dropdown1' class='dropdown-content'>
        @foreach ($categoriesMenu as $category)

            <li><a href="{{ route('site.category', $category->id) }}">{{ $category->name }}</a></li>

        @endforeach
    </ul>

    @php
        use Darryldecode\Cart\Facades\CartFacade;
    @endphp


    <nav class="red">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo left">Products API</a>
          <ul id="nav-mobile" class="right">
            <li><a href="{{ route('site.index') }}">Home</a></li>
            <li><a href="" class="dropdown-trigger" data-target='dropdown1'>Categories<i class="material-icons right">expand_more</i></a></li>
            <li><a href="{{ route('site.cart') }}">Cart <span class="new badge blue" data-badge-caption=""> {{ CartFacade::getContent()->count() }} </span></a></li>
          </ul>
        </div>
      </nav>

    @yield('content')

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(elems, {
                coverTrigger: false,
                constrainWidth: false,
                alignment: 'right'
            });
        });
    </script>
</body>
</html>
