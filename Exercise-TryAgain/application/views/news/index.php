<center><h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>First Name</strong></td>
        <td><strong>Last Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>City</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Mobile</strong></td>
        <td><strong>Comment</strong></td>
        <td><strong>Action</strong></td>
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
                <a href="<?php echo site_url('news/'.$user_item['last_name']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$user_item['user_id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$user_item['user_id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table></center>