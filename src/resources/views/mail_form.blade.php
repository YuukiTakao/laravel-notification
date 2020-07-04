<!-- /resources/views/alert.blade.php -->

<form action="{{ route('mail_form.register') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form_area">
    <ul>
      <li>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name" placeholder="John Smith" />
      </li>
      <li>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="user_email" placeholder="xxx@xxx.com" />
      </li>
      <li>
        <label for="password">Password:</label>
        <input type="password" id="password" name="user_password" />
      </li>
    </ul>
    <button type="submit" class="btn">Post</button>
    {{ $slot }}
  </div>
</form>