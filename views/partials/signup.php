<div id="overlay" class="blur-effect"></div>

<div id="popupMenu">
  <form action="add_user.php" method="post">
    <div class="flabel">
      <label for="first_name" class="form-label text-white">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" />
    </div>
    <div class="flabel">
      <label for="name" class="form-label text-white">Name</label>
      <input type="text" class="form-control" id="name" name="name" />
    </div>
    <div class="flabel">
      <label for="email" class="form-label text-white">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" />
      <div id="emailHelp" class="form-text text-white">
        We'll never share your email with anyone else.
      </div>
    </div>
    <div class="flabel">
      <label for="tel" class="form-label text-white">Telephone number</label>
      <input type="tel" class="form-control" id="tel" name="tel" />
    </div>
    <!--pattern="[0-9]{8}"-->
    <div class="flabel">
      <label for="password" class="form-label text-white">Password</label>
      <input type="password" class="form-control" id="password" name="password" />
    </div>
    <div class="flabel">
      <label for="confirm_password" class="form-label text-white">Confirm password</label>
      <input type="password" class="form-control" id="confirm_password" name="confirm_password" />
    </div>
    <div class="flabel-btn">
      <button type="submit" class="btn btn-primary">Sign up</button>
      <button type="button" class="btn close-btn">Close</button>
    </div>
  </form>
</div>