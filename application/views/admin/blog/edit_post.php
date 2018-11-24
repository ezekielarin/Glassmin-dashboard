


<div class="col-md-5">
  <h3><strong>Edit your Post</strong> </h3>
  <form action="/admin/blog/update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="user_id" value="<?=$user_id?>">
    <input type="hidden" name="id" value="<?=$blog->id?>">
    <div>
      <span>Post Url : <?=$blog->slug?></span>
    </div>
    <div class="form-group"><label>Page Title</label>

      <input class="form-control" type="text" name="title" value="<?=$blog->title?>">
    </div>
    <div class="form-group"><label>Page Content</label>
      <textarea class="form-control" cols="20" name="post"><?=$blog->post?></textarea>
    </div>

    <div class="form-group"><label>Tag</label>
      <input type="text" class="form-control" cols="20" name="tag" value="<?=$blog->tag?>">
    </div>
    <div class="form-group">
      <input class="btn btn-success" type="submit"  name="update" value="update">
    </div>
  </form>
</div>

<div>
  <div class="col-md-5">
    <img src="<?=base_url()?>/uploads/images/<?=$blog->image?>" width="300" width="50%">
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-3 "><label>Upload Post Image</label>
      <input type="file" class="form-control"  name="picture"" >
    
      <input class="btn btn-success" type="submit"  name="update" value="update">
    </div>
  </form>
</div>