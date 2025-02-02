<?php
$success    = $this->session->flashdata('success');
$error      = $this->session->flashdata('error');
$warning    = $this->session->flashdata('warning');

if ($success) {
    $alert_status   = 'alert-success';
    $status         = 'success!';
    $message        = $success;
}

if ($error) {
    $alert_status   = 'alert-danger';
    $status         = 'error!';
    $message        = $error;
}

if ($warning) {
    $alert_status   = 'alert-warning';
    $status         = 'warning!';
    $message        = $warning;
}
?>

<?php
if ($success || $error || $warning): ?>
    <div class="rows">
        <div class="col-md-12">
            <div class="alert <?= $alert_status ?> alert-dismissible fade show role=" alert">
                <strong><?= $status ?></strong> <?= $message ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif ?>