<center>
<table  cellspacing="7" style="margin-top: -20px">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Nickname</th>
		<th>Email</th>
		<th>City</th>
		<th>Gender</th>
		<th>Mobile</th>
		<th>Comment</th>
	</tr>
	<tr>
        <td><?php echo $user_item['first_name']; ?></td>
        <td><?php echo $user_item['last_name']; ?></td>
        <td><?php echo $user_item['nickname']; ?></td>
        <td><?php echo $user_item['email']; ?></td>
        <td><?php echo $user_item['user_city']; ?></td>
        <td><?php echo $user_item['gender']; ?></td>
        <td><?php echo $user_item['mobile']; ?></td>
        <td><?php echo $user_item['comment']; ?></td>
    </tr>
