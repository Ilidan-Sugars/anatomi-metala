<?php
$projects = $args['items'];

?>
<div class="row" id="projects">

  <?php foreach ($projects as $project) { ?>
    <div class="col-4">
      <div class="project-item">

        <div class="project-item__img"><?= $project['img'] ?></div>
        <div class="project-item__body">
          <h5 class="project-item__title"><?= $project['author'] ?></h5>
          <p>
            <?= $project['content'] ?>
          </p>

          <a href="feedback-dialog" class="btn btn-primary btn-feedback mx-auto">Узнать цену</a>
        </div>
      </div>
    </div>
  <?php } ?>

</div>