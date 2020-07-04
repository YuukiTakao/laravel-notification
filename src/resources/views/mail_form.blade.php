<!-- /resources/views/alert.blade.php -->

<form action="{{ route('mail_form.register') }}" method="post">
  <div class="">
    {{ $slot }}
  </div>
</form>