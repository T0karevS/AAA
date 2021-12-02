<?php
//view (predstavlenie)
foreach (array_reverse($posts) as $post ):
?>
<div class="blog">
<h2><?= $post['title']?></h2>
<p class="blog_text"><?= $post['content'] ?></p>
<img src="<?= $post['image']?>" alt="kartinka posta" width="200" height="200">
</div>
<?php
endforeach;
?>
