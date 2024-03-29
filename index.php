<?php include 'inc/header.php'; ?>

<?php // require 'inc/header.php'; 
?>

<?php
$name = $email = $body = "";
$nameErr = $emailErr = $bodyErr = "";

// form submission
if (isset($_POST['submit'])) {
    // validate name
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    // validate email
    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    // validate body
    if (empty($_POST['body'])) {
        $bodyErr = 'Idea is required';
    } else {
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (!$nameErr && !$emailErr && !$bodyErr) {
        // add to the database
        $sql = "INSERT INTO ideas (name,email,body) VALUES ('$name','$email','$body') ";
        if (mysqli_query($conn, $sql)) {
            //success
            header('Location: ideas.php');
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>

<img src="img/mysql-logo.png" class="w-25 mb-3" alt="">
<h2>Epiphany</h2>
<p class="lead text-center">Leave ideas for Epiphany</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="mt-4 w-75">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo !$nameErr ?: 'is-invalid' ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
            <?php echo $nameErr; ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo !$emailErr ?: 'is-invalid' ?>" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback">
            <?php echo $emailErr; ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Idea</label>
        <textarea class="form-control  <?php echo !$bodyErr ?: 'is-invalid' ?>" id="body" name="body" placeholder="Share your idea"></textarea>
        <div class="invalid-feedback">
            <?php echo $bodyErr; ?>
        </div>
    </div>
    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
</form>

<?php include 'inc/footer.php'; ?>