<center><h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$user_item['user_id']); ?>
    <table>
        <tr>
            <td><label for="first_name">First Name</label></td>
            <td><input type="input" name="first_name" size="50" value="<?php echo $user_item['first_name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="last_name">Last Name</label></td>
            <td><input type="input" name="last_name" size="50" value="<?php echo $user_item['last_name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="nickname">Nickname</label></td>
            <td><input type="input" name="nickname" size="50" value="<?php echo $user_item['nickname'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="email">E-mail</label></td>
            <td><input type="input" name="email" size="50" value="<?php echo $user_item['email'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="user_city">City</label></td>
            <td><input type="input" name="user_city" size="50" value="<?php echo $user_item['user_city'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="input" name="gender" size="50" value="<?php echo $user_item['gender'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="mobile">Mobile</label></td>
            <td><input type="input" name="Mobile" size="50" value="<?php echo $user_item['mobile'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="comment">Comment</label></td>
            <td><textarea name="comment" rows="3" cols="40"><?php echo $user_item['comment'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>
</center>