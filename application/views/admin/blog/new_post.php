


<div class="col-md-5">
  <form action="/admin/blog/add" method="post" enctype="multipart/form-data">
    <input type="hidden" name="user_id" value="<?=$user_id?>">
    <div class="form-group"><label>Page Title</label>
      <input class="form-control" type="text" name="title">
    </div>
    <div class="form-group"><label>Page Content</label>
      <textarea class="form-control" cols="20" name="post"></textarea>
    </div>
    
    <div class="form-group"><label>Upload Post Image</label>
      <input type="file" class="form-control"  name="picture">
    </div>
    <div class="form-group"><label>Tag</label>
      <input type="text" class="form-control" cols="20" name="tag">
    </div>
    <div class="form-group">
      <input class="btn btn-success" type="submit"  name="update" value="add">
    </div>
  </form>
</div>