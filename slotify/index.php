<?php include("includes/header.php"); ?>

<h1 class="pageHeadingBig">You Might Also Like</h1>

<hr>

<div class="gridViewContainer">
	<?php 
		$albumQuery=mysqli_query($con,"SELECT * from albums order by rand() limit 10");

		while ($row = mysqli_fetch_array($albumQuery)) {
			echo "<div class='gridViewItem'>

				<a href='album.php?id=" . $row['id'] . "'>

				<img src='". $row['artworkPath'] ."'>

				<div class ='gridViewInfo'>" . $row['title'] . "</div>

				</a>

			 </div>";
		}


	 ?>
</div>

<?php include("includes/footer.php"); ?>

	   		
	   		
		   