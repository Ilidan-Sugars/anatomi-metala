<?php
$reviews = $args['items'];
$id = $args['id'];

?>
<div class="splide splide-reviews" id="splide-reviews-<?= $id ?>">
    <div class="splide__track">
        <ul class="splide__list">
            <?php foreach ($reviews as $review) { ?>
                <li class="splide__slide">
                    <div class="splide-reviews__item">
                        <div class="splide-reviews__title"><?= $review['author'] ?></div>
                        <div class="splide-reviews__body"><?= $review['content'] ?></div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>