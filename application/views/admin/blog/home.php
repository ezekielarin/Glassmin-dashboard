

<div>
	<a class="btn btn-primary" href="blog/manage">Manage</a>
</div>
<div>
	<a class="" href="blog/new_post/">New</a>
	<table class="table table-striped">
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Post Date</th>
		</tr>

		<?php 
		 foreach($blogs as $blog) {
		?>
		<tr>
			<td><a href="blog/edit/<?php echo $blog->id?>"><?php echo $blog->title?></td>
			<td><?php echo $blog->first_name?><span> </span><?php echo $blog->last_name?></td>
			<td><?php echo $blog->post_date?></td>
			<td><a href="blog/delete/<?=$blog->id?>">delete</a></td>
		</tr>

        <?php 
		}
		?>
	</table>
</div>