<center>
<h2><?php echo $title; ?></h2>
<br>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
  <div  class="transbox" style="margin-top:-20px">
    <p>
    <br><label for="first_name">First Name</label><br>
    <br><input type="input" name="first_name" size="50"/><br>

    <br><label for="last_name">Last Name</label><br>
    <br><input type="input" name="last_name" size="50"/><br>

        <br><label for="nickname">Nickname</label><br>
        <br><input type="input" name="nickname" size="50"/><br>

        <br><label for="email">E-mail</label><br>
        <br><input type="input" name="email" size="50"/><br>

        <br><label for="user_city">City</label><br>
        <br><input type="input" name="user_city" size="50"/><br>

        <br><label for="gender">Gender</label><br>
        <br><input type="input" name="gender" size="50"/><br>

        <br><label for="mobile">Mobile</label><br>
        <br><input type="input" name="mobile" size="50"/><br>

        <br><label for="comment">Comment</label><br>
        <br><textarea name="comment" rows="3" cols="40"></textarea><br>
        <br>
        <input type="submit" name="submit" value="Add news item" /><br>
      </p>
    </div>
  </form>
</center>
