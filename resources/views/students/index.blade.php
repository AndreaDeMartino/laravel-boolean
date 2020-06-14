@extends('layouts.main')

@section('main-content')
  
  <h1 class="display-4 text-center mb-5">I nostri ex studenti</h1>

  {{-- Students Filter --}}

  <div class="students-filter my-3 text-center">
    <select class= "browser-default custom-select" name="filter" id="filter">
      @foreach($genders as $gender)
      <option value="{{ $gender }}"> 
        @if ($gender == 'all')
          Tutti 
        @elseif ($gender == 'm')
          Uomo
        @elseif ($gender == 'f')
          Donna
        @endif
      </option>
      @endforeach
    </select>
  </div>

  
  
  <div class="students text-center">
    @foreach($students as $student)
      {{-- Redirect into Student Show by clicked ID --}}
      <a href="{{ route('student.show', ['slug' => $student['slug'] ]) }}" class="student">
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

  {{-- Handlebars --}}
  @include('shared.handlebars.student')

@endsection

{{-- Add my scripts only in this page --}}
@section('scripts')
  <script src="{{ asset('js/app.js') }}"></script>
@endsection