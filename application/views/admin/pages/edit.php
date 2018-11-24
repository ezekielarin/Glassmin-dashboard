
<div class="col-md-5">
  <form action="" method="post">
    <div class="form-group"><label>Title</label>
      <input class="form-control" type="text" name="title" value="<?php echo $pages->title?>">
    </div>
    <div class="form-group"><label>Url Slug: </label> <span> <?php echo $pages->slug?></span>
       <?php 
      switch ($pages->slug) {
        case 'about-us': echo "<input class='form-control' type='hidden' name='slug' value='$pages->slug'>";
          break;
        case 'terms-and-conditions': echo "<input class='form-control' type='hidden' name='slug' value='$pages->slug'";
          break;
        default: echo "<input class='form-control' type='text' name='slug' value='$pages->slug' >";
          break;
      }
      ?>
    </div>
    <div class="form-group"><label>Content</label>
     
      <textarea id="pell" class="pell form-control" cols="20" name="content"><?php echo $pages->content?></textarea>
    </div>
    <div class="form-group">
      <input class="btn btn-success" type="submit"  name="update" value="update">
    </div>
  </form>
</div>
</div>
