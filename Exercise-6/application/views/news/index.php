<center><h2><?php echo $title; ?></h2>

<table cellspacing="7" style="margin-top: -20px">
    <tr>
        <th><strong>First Name</strong></th>
        <th><strong>Last Name</strong></th>
        <th><strong>Nickname</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>City</strong></th>
        <th><strong>Gender</strong></th>
        <th><strong>Mobile</strong></th>
        <th><strong>Comment</strong></th>
        <th><strong>Action</strong></th>
    </tr>
<?php foreach ($users as $user_item): ?>
        <tr>
            <td><?php echo $user_item['first_name']; ?></td>
            <td><?php echo $user_item['last_name']; ?></td>
            <td><?php echo $user_item['nickname']; ?></td>
            <td><?php echo $user_item['email']; ?></td>
            <td><?php echo $user_item['user_city']; ?></td>
            <td><?php echo $user_item['gender']; ?></td>
            <td><?php echo $user_item['mobile']; ?></td>
            <td><?php echo $user_item['comment']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$user_item['user_id']); ?>">View</a> |
                <a href="<?php echo site_url('news/edit/'.$user_item['user_id']); ?>">Edit</a> |
                <a href="<?php echo site_url('news/delete/'.$user_item['user_id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table></center>
