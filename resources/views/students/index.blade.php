@extends('layouts.main')

@section('main-content')
  
  <h1 class="display-4 text-center mb-5">I nostri ex studenti</h1>

  <div class="students text-center">
    @foreach($students as $student)
      {{-- Redirect into Student Show by clicked ID --}}
      <a href="{{ route('student.show', ['id' => $student['id'] ]) }}" class="student">
        <header>
          <img class="rounded-circle" src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
          <div class="info mt-3">
            <h3 class="text-info my-4">{{ $student['nome'] }} ({{ $student['eta'] }} anni)</h3>
            <h4>
              {{-- Ternary operator : (condition) ? 'true' : 'false' --}}
              Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a' }}
              da {{ $student['azienda'] }} come {{ $student['ruolo'] }}  
            </h4>
          </div>
        </header>
        <p class="text-muted">{{ $student['descrizione'] }} </p>
      </a>
    @endforeach
  </div>

@endsection