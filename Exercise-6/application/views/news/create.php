<center>
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<table cellspacing="7" style="margin-top: -20px">
    <tr>
        <th><label for="first_name">First Name</label></th>
        <td><input type="input" name="first_name" size="50"/></td>
    </tr>
    <tr>
        <th><label for="last_name">Last Name</label></td>
        <td><input type="input" name="last_name" size="50"/></td>
    </tr>
    <tr>
        <th><label for="nickname">Nickname</label></th>
        <td><input type="input" name="nickname" size="50"/></td>
    </tr>
    <tr>
        <th><label for="email">E-mail</label></th>
        <td><input type="input" name="email" size="50"/></td>
    </tr>
    <tr>
        <th><label for="user_city">City</label></th>
        <td><input type="input" name="user_city" size="50"/></td>
    </tr>
    <tr>
        <th><label for="gender">Gender</label></th>
        <td><input type="input" name="gender" size="50"/></td>
    </tr>
    <tr>
        <th><label for="mobile">Mobile</label></th>
        <td><input type="input" name="mobile" size="50"/></td>
    </tr>
    <tr>
        <th><label for="comment">Comment</label></th>
        <td><textarea name="comment" rows="3" cols="40"></textarea></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="submit" value="Add news item" /></td>
    </tr>
</table>
</form>
</center>
