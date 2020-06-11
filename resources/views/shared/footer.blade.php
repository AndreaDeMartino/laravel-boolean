{{-- 
  /****************************************************
  * FOOTER
  ****************************************************/
 --}}

<footer class="main-footer 
  {{-- Add position Absloute on footer only on statics page --}}
  @if ( Request::route()->getName() == 'static-page.home' ||
        Request::route()->getName() == 'static-page.faq' ||
        Request::route()->getName() == 'static-page.privacy')
    footer-bottom
  @endif ">
  <nav class="nav-footer">
    <div class="footer-brand">
      <img src="https://www.boolean.careers/images/common/logo-white.png" alt="">
    </div>

    <ul>
      <li><a href="{{ route('static-page.home') }}">Home</a></li>
      <li><a href="{{ route('static-page.faq') }}">Domande Frequenti</a></li>
      <li><a href="{{ route('static-page.privacy') }}">Privacy</a></li>
    </ul>
  </nav>
</footer>

</body>
</html>