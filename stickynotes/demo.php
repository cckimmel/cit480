<?php


// Removing notes that are older than an hour: (UNCOMMENT IF 24 HOUR DELETION IS WANTED)
//mysql_query("DELETE FROM notes WHERE id>0 AND dt<SUBTIME(NOW(),'0 24:0:0')");

$query = mysqli_query($link,"SELECT * FROM notes ORDER BY id DESC");

$notes = '';
$left='';
$top='';
$zindex='';

while($row=mysqli_fetch_assoc($query))
{
	// The xyz column holds the position and z-index in the form 200x100x10:
	list($left,$top,$zindex) = explode('x',$row['xyz']);

	$notes.= '
	<div class="note '.$row['color'].'" style="left:'.$left.'px;top:'.$top.'px;z-index:'.$zindex.'">
		'.htmlspecialchars($row['text']).'
		<div class="author">'.htmlspecialchars($row['name']).'</div>
		<span class="data">'.$row['id'].'</span>
		<a href="'.$row['id'].'" class="Trash">Trash</a>
	</div>';
}

?>
<h1>Home Page notes Demo</h1>


<div id="main">
	<a id="addButton" class="green-button" href="stickynotes/add_note.html">Add a note</a>
    
	<?php echo $notes?>
    
</div>