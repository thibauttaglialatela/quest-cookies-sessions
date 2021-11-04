<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if (empty($_SESSION)) : ?>
            <?php header("Location: login.php"); ?>
        <?php else : ?>
            <?php $carts = [] ?>
            <?php $carts[] = $_SESSION['item'] ?>
            <?php foreach ($carts as $cart) : ?>
                <h2 class ="text-center">You chose</h2>
                <h3 class="card-title text-center"><?= $cart ?></h3>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>