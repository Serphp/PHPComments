<?php require "includes/header.php"; ?>
<?php require "db/config.php"; ?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $comments = $conn->query("SELECT * FROM new WHERE id = $id");
        $comments->execute();
        $post = $comments->fetch(PDO::FETCH_OBJ);
    }
?>

<main class="container w-50 m-auto mt-3">

    <body>
        <div class="card">
            <div class="card-body">

                <h2 class="card-title"><?php echo $post->title; ?></h2>
                <p class="card-text"><?php echo $post->description; ?></p>

            </div>
        </div>
    </body>

    <form method="POST" id="comment_here">
        <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <div class="container mb-3">
        <h1 class="h3 mt-4 fw-normal text-center"> Comments </h1>
        </div>  

        <div class="form-floating mb-3">
            <textarea name="comment" type="text" class="form-control" id="floatingInput"></textarea>
            <label for="floatingInput"> Comment </label>
        </div>

        <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit"> Post </button>

    </form>
</main>
<?php require "includes/footer.php"; ?>

<script>
    $(document).ready(function(){
        $('#submit').click(function(){
            var comment = $('#comment_here').val();
            if(comment == ''){
                alert("Please write a comment");
                return false;
            }else{
                $.ajax({
                    url: "sendpost.php",
                    method: "post",
                    data: formdata,
                    //data: {comment:comment},
                    dataType: "text",
                    success: function(strMessage){
                        $('#comment_here').val('');
                        $('#comment_message').text(strMessage);
                    }
                });
            }
        });
    });
</script>