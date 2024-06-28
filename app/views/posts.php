<?php
  require_once '../storage.php';
  
?>

<div class="row">
  <?php foreach($posts as $post): ?>
  <div class="col-sm-8">
    <div class="card my-3">
      <div class="card-body">
        <h5 class="card-title"><?php echo $post['title']; ?></h5>
        <p class="card-text"><?php echo $post['content']; ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>