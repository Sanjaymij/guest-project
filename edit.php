<?php
    include 'database.php';
	
    session_start();

	$id = $_GET['id'];
	$sql = "select * from `test_db` where id = $id";
	$run = mysqli_query($db,$sql);
	
	if(!$run)
	{
		die("Unable to run the query" . mysqli_error($db));
	}

while($row = mysqli_fetch_object($run)){?>
    <form method="post" action="update.php">
        <input type="hidden" value="<?php echo $id;?>" name="id" />
        <div>Change Password:
            <input type="password" name="password" value='' />
        </div>
        <div>
            <input type="submit" name="edit" value="Update" />
        </div>
    </form>
    <div><a href="index.php">Cancel</a></div>
    <?php
}
?>