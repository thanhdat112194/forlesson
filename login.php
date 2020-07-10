
<?php include("header.php"); ?>
<div class="main__login">

<div class="container">
    <div class="jumbotron disable">
  <form action="control.php" method="POST" class="px-4 py-3">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Username</label>
      <input type="text" name="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com or +48...">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit"  name="submit"  class="btn btn-warning">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="regis.php">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
  </div>
</div>
</div>
<?php include("footer.php"); ?>
