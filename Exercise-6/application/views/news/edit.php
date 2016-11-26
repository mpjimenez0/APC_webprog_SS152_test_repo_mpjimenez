<center><h2><?php echo $title; ?></h2>
<br>

<?php echo validation_errors(); ?>

<?php echo form_open('news/edit/'.$user_item['user_id']); ?>
            <div class="transbox" style="margin-top:-20px">
            <p>
            <br><label for="first_name">First Name</label><br>
            <br><input type="input" name="first_name" size="50" value="<?php echo $user_item['first_name'] ?>" /><br>
            <br><label for="last_name">Last Name</label><br>
            <br><input type="input" name="last_name" size="50" value="<?php echo $user_item['last_name'] ?>" /><br>
            <br><label for="nickname">Nickname</label><br>
            <br><input type="input" name="nickname" size="50" value="<?php echo $user_item['nickname'] ?>" /><br>
            <br><label for="email">E-mail</label><br>
            <br><input type="input" name="email" size="50" value="<?php echo $user_item['email'] ?>" /><br>
            <br><label for="user_city">City</label><br>
            <br><input type="input" name="user_city" size="50" value="<?php echo $user_item['user_city'] ?>" /><br>
            <br><label for="gender">Gender</label><br>
            <br><input type="input" name="gender" size="50" value="<?php echo $user_item['gender'] ?>" /><br>
            <br><label for="mobile">Mobile</label><br>
            <br><input type="input" name="mobile" size="50" value="<?php echo $user_item['mobile'] ?>" /><br>
            <br><label for="comment">Comment</label><br>
            <br><textarea name="comment" rows="3" cols="40"><?php echo $user_item['comment'] ?></textarea><br>
            <br><input type="submit" name="submit" value="Edit news item" /><br>
            </p>
          </div>
</form>
</center>
