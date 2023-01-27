<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<?php
// "hello " . $_SESSION['username'];
    $comments = $conn->query("SELECT * FROM new");
    $comments->execute();
    $rows = $comments->fetchAll(PDO::FETCH_OBJ);
?>

<main class="container w-50 m-auto mt-3">
    <section class="container mb-5">
<h1> Serph Comments </h1>
<a href="create.php"> Create Post</a>
    </section>
    <?php foreach($rows as $row) : ?>
        <body>
            <div class="card">
                <div class="card-body">

                <h2 class="card-title"><?php echo $row->title; ?></h2>
                <p class="card-text"><?php echo $row->description; ?></p>
                <a href="show.php?id=<?php echo $row->id;?>"> Ir al post</a>

    </div>
    </div>
        </body>
    <?php endforeach; ?>
</main>
<?php require "includes/footer.php"; ?>