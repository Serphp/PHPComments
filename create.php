<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

?>
<main class="form-signin w-50 m-auto">
    <form method="POST" action="register.php">
        <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="h3 mt-5 fw-normal text-center"> Create Post </h1>

        <div class="form-floating">
            <input name="title" type="title" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Title</label>
        </div>

        <div class="form-floating">
            <textarea name="" type="text" class="form-control" id="floatingInput" placeholder="Body"></textarea>
            <label for="floatingInput"> description </label>
        </div>

        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <h6 class="mt-3">Aleardy have an account? <a href="login.php">Login</a></h6>

    </form>
</main>