<?php if (!empty($_GET['error'])) { ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        Email Address already exist.
    </div>
<?php } ?>

<?php if (!empty($_GET['success'])) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        New Record Added Successfully.
    </div>
<?php } ?>

<?php if (!empty($_GET['delete'])) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        Record Deleted Successfully.
    </div>
<?php } ?>

<?php if (!empty($_GET['update'])) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        Record Updated Successfully.
    </div>
<?php } ?>

<?php if (!empty($_GET['deleteerror'])) { ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        Error Occurred While Deleting the Record.
    </div>
<?php } ?>

<?php if (!empty($_GET['statuschanged'])) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        Status Changed Successfully.
    </div>
<?php } ?>

<?php if (!empty($_GET['failed'])) { ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        Failed to perform the task.
    </div>
<?php } ?>

<?php if (!empty($_GET['order'])) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        Order Placed Successfully.
    </div>
<?php } ?>