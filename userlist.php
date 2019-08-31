<!DOCTYPE html>
<html>
<head>
	<title>UseraccountLIST</title>
</head>
<body>
	<h2> Account Table Record</h2>
	<table>
		<tr>
        <td>First Name </td>
        <td>Account Number</td>			
        </tr>
<tr>
      <?php foreach($details as $user){?>
      <td><?php echo $user ['firstname'];?></td>
      <td><?php echo $user ['accountno'];?></td>

</tr>
       <?php } ?>
	</table>

</body>
</html>