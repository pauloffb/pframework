<?php require APPROOT . '/views/partials/header.php'; ?>
<h1><?php echo $data['title']; ?></h1>
    <p>App Root is: <?php echo APPROOT; ?></p>
    <p>URL Root is: <?php echo URLROOT; ?></p>
    <ul>
    <?php foreach ($data['posts'] as $post) : ?>
    <li>
    <?= $post->title; ?>
</li>
<?php endforeach; ?>

    </ul>
<?php require APPROOT . '/views/partials/footer.php'; ?>
