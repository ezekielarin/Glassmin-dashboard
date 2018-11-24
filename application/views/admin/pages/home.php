
<div>
  <a class="btn btn-success" href="pages/addnew">New</a>
</div>
<table class="table">
  <tr>
    <th><input type="checkbox" name=""></th>
    <th>title</th>
    <th>slug</th>
  </tr>
<?php
 foreach ($pages as $pages) {
  ?>
  <tr>
    <td><input type="checkbox" name=""></td>
    <td><a href="pages/edit/<?php echo $pages->id?>"><?php echo $pages->title?></a></td> 
    <td><?php echo $pages->slug?></td> 
    <td><a href="pages/delete/<?=$pages->id?>">delete</a></td> 
  </tr>

  <?php
 }
?>
</table>
