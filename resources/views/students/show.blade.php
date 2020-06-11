@extends('layouts.main')

@section('main-content')
  
  <h1> {{ $student['nome'] }} </h1>



  {{-- @dump($students) --}}


  <div href="{{ route('student.show', ['id' => $student['id'] ]) }}" class="student">
    <header>
      <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
      <div class="info">
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