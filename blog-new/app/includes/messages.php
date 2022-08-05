<?php if (isset($_SESSION['message'])) : ?>
    <div class="container my-2">
        <div class="msg alert alert-<?php echo $_SESSION['type']; ?>" role="alert">
            <?php echo $_SESSION['message']; ?>
            <?php
            unset($_SESSION['message']);
            unset($_SESSION['type']);
            ?>
        </div>
    </div>
<?php endif; ?>

<script>
    setTimeout(function() {
        const msgElement = document.getElementsByClassName('msg');
        if (msgElement.length > 0) {
            msgElement[0].remove();
        }
    }, 3000);
</script>