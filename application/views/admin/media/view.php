
<script type="text/javascript">

  function resize() {

  width = document.getElementById('wid');
  height = document.getElementById('hei');

     document.getElementById('img').width = ""+width;
     document.getElementById('img').height = ""+height;
     display();
     
   }

   
</script><div class="container">
<img id="img" src="<?php echo base_url(); ?>uploads/images/<?php echo $image; ?>">
<div  class="gallery" id="display">
  
</div>
<form method="post">
  <label>height</label>
  <input type="text" name="height" placeholder="00" id="hei" value="" onkeyup="resize()">
  <label>width</label>
  <input type="text" name="width" placeholder="00" id="wid" value="" onkeyup="resize()">
  <input type="submit" value="resize" onclick="resize()">
</form>
</div>

