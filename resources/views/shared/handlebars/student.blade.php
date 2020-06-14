<script id="student-template" type="text/x-handlebars-template">

  {{-- Show and Redirect content with Handlebars --}}
  <a href="{{ url('students/show') }} / @{{ slug }}" class="student">
    <header>
      <img class="rounded-circle" src=" @{{ img }}" alt=" @{{ nome }}">
      <div class="info mt-3">
        <h3 class="text-info my-4"> @{{ nome }} ( @{{ eta }} anni)</h3>
        <h4>
          @{{ assunzione }} da @{{ azienda }} come @{{ ruolo }}
        </h4>
      </div>
    </header>
    <p class="text-muted">@{{ descrizione }} </p>
  </a>
  
</script>