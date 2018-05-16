<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<form action="/posts/update" method="post" accept-charset="utf-8">
  <input type="hidden" name="id" value="<?php echo $post['id'] ?>">

  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Post Body"><?php echo $post['body'];?></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
