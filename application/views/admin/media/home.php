

<?php 
?>

<div class="container">
  <div>
    <form enctype="multipart/form-data" method="post" action="">
      <input type="file" name="image">
      <input type="submit" name="upload" value="upload">
    </form>
  </div>
  <div class="gallery">
<?php 
  if ($images) {
    foreach ($images as $image) {
      ?>
      
      <a href="media/view/<?php echo $image['name']; ?>"><img src="<?php echo base_url()?>uploads/images/<?php echo $image['name']; ?>" height="150"></a>
      <small>size:<?php echo $image['size']; ?>KB</small>
      
      <?php
    }
  }
?>
</div>

</div>