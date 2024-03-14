<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM ideas';
$result = mysqli_query($conn, $sql);
$ideas = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2> Past Ideas </h2>
<?php if (empty($ideas)) : ?>
    <p class="lead mt-3">
        There is no idea.
    </p>
<?php endif; ?>

<?php foreach ($ideas as $idea) : ?>
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <?php echo $idea['body']; ?>
            <div class="text-secondary mt-2">
                By <?php echo $idea['name']; ?>
                On <?php echo $idea['date']; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>