@extends('layouts.main')

@section('main-content')
  
  <h1 class="text-center display-4"> {{ $student['nome'] }} </h1>



  {{-- @dump($students) --}}


  <div href="{{ route('student.show', ['slug' => $student['slug'] ]) }}" class="student text-center">
    <header>
      <img class="rounded-circle" src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
      <div class="info mt-5">
        <h3>{{ $student['nome'] }} ({{ $student['eta'] }} anni)</h3>
        <h4>
          {{-- Operatore Ternario : (condizione) ? 'true' : 'false' --}}
          Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a' }}
          da {{ $student['azienda'] }} come {{ $student['ruolo'] }}  
        </h4>
      </div>
    </header>
    <p>{{ $student['descrizione'] }} </p>
  </div>

@endsection