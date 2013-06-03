<div class="grid_4">&nbsp;</div>

<div class="grid_4">
  
  <?= validation_errors() ?>

  <?= form_open("/admin/login") ?>

    <label for="username">
      Admin Login:
    </label>
    <br />
    <input type="text" name="username">

    <br />

    <label for="username">
      Admin Password:
    </label>
    <br />
    <input type="password" name="password">

    <input type="submit" value="login">
    
  </form>

</div>


<div class="grid_4">&nbsp;</div>