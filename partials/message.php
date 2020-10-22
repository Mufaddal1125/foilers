<?php
if (isset($_SESSION['msg'])) {
?>
    <div class="alert alert-<?php echo $_SESSION['msg_type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['msg']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
    unset($_SESSION['msg']);
} ?>