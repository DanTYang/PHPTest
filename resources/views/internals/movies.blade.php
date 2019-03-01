@extends('layout')

@section('content')
<h1> Movies That have been Chosen </h1>

<ul>
    <?php
      foreach ($movies as $movies) {
        echo '<li>' . $movies . '</li>';
      }
      ?>
</ul>
@endsection
