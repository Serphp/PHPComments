<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<?php 

if(isset($_POST["submit"])){
    if($_POST['title'] == '' OR $_POST['description'] == ''){
        echo 'no title or description.';
    }
    else {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $username = $_SESSION['username'];
        //conect
        $insert = $conn->prepare("INSERT INTO new(title, description, username) 
        VALUES (:title, :description, :username)");

        $insert->execute([
            ':title' => $title,
            ':description' => $description,
            ':username' => $username,
        ]);

        header("location: index-two.php");
    }
}

?>
<main class="form-signin w-50 m-auto">
    <form method="POST" action="create.php">
        <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <div class="container mb-5">
        <h1 class="h3 mt-5 fw-normal text-center"> Create Post </h1>
        </div>  

        <div class="form-floating mb-3">
            <input name="title" type="title" class="form-control" id="floatingInput" placeholder="title">
            <label for="floatingInput">Title</label>
        </div>

        <div class="form-floating mb-3">
            <textarea name="description" type="text" class="form-control" id="floatingInput" placeholder="Body"></textarea>
            <label for="floatingInput"> description </label>
        </div>

        <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit"> Post </button>

    </form>
</main>