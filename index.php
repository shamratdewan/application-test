<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task # 1</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<?php 
/*
Position: Web Developer
MD. Salahuddin Dewan                                                               
20 Moorecroft Crescent,
Scarborough, ON M1K 3V1
Email: shamratdewan@yahoo.com
Mobile: +1 6479044522
*/

?>

<?php 
// The Array
$people = array(
   array('id'=>0, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>1, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>2, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>3, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>4, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

?>


<script type="text/javascript">

var People_js = JSON.parse( '<?php echo json_encode($people); ?>' );

$(document).ready(function() { 
	$(".button_press").click(function(){
		var newid = $(this).attr('id');
		var idNum = parseInt(newid);
		alert(People_js[idNum].first_name+" "+People_js[idNum].last_name+" "+People_js[idNum].email);
	});
});

</script>

</head>

<body style="margin-top:10%; margin-left:10%;">

	<table>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php 
		foreach ($people as $person) {
			?>
			<tr>
				<td><?php echo $person[id]+1; ?></td>
				<td><?php echo $person[first_name]; ?></td>
				<td><?php echo $person[last_name]; ?></td>
				<td><?php echo $person[email]; ?></td>
				<td><input type="button" id="<?php echo $person[id]; ?>" value="Click here" class="button_press"></td>
			</tr>
		
	
	<?php 
		} 
		?>
  
	</table>
</body>

</html>
	
	