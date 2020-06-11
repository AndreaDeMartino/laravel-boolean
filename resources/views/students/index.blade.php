@extends('layouts.main')

@section('main-content')
  
  <h1>I nostri ex studenti</h1>

  <div class="students">
    @foreach($students as $student)
      {{-- Redirect into Student Show by clicked ID --}}
      <a href="{{ route('student.show', ['id' => $student['id'] ]) }}" class="student">
        <header>
          <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
          <div class="info">
            <h3>{{ $student['nome'] }} ({{ $student['eta'] }} anni)</h3>
            <h4>
              {{-- Ternary operator : (condition) ? 'true' : 'false' --}}
              Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a' }}
              da {{ $student['azienda'] }} come {{ $student['ruolo'] }}  
            </h4>
          </div>
        </header>
        <p>{{ $student['descrizione'] }} </p>
      </a>
    @endforeach
  </div>

@endsection