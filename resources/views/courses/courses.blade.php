@extends('layouts.app')

@section('content')
<body>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Cursos</h1>
      <p class="lead">Aprende lo que quieras, cuando quieras!</p>
    </div>


<!-- -------------------Carta de Curso---------------------- -->

<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    @foreach $courses as $course
        @include ('courseCard')
    @endforeach
</div>

<!-- --------------------Fin de la Carta--------------------- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
@endsection