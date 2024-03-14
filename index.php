<?php include 'inc/header.php'; ?>

<?php // require 'inc/header.php'; 
// if require is not found, it will stop the execution of the code
?>

<img src="img/mysql-logo.png" class="w-25 mb-3" alt="">
<h2>Epiphany</h2>
<p class="lead text-center">Leave ideas for Epiphany</p>
<form action="" class="mt-4 w-75">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Idea</label>
        <textarea class="form-control" id="body" name="body" placeholder="Share your idea"></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
</form>

<?php include 'inc/footer.php'; ?>