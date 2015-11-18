<<<<<<< HEAD
    <div id="footer">Copyright <?php echo date("Y"); ?>, Widget Corp</div>
=======
    <div id="footer">Copyright 20xx, Widget Corp</div>
>>>>>>> 41116fae71f75e5772990722d10b5f1f89de6afa

	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
