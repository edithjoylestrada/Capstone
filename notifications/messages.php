<?php
session_start();
?>

<!-- Include Toastr CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
$(document).ready(function() {
    <?php if(isset($_SESSION['success'])): ?>
        toastr.success('<?php echo addslashes($_SESSION['success']); unset($_SESSION['success']); ?>');
    <?php endif; ?>
    
    <?php if(isset($_SESSION['error'])): ?>
        toastr.error('<?php echo addslashes($_SESSION['error']); unset($_SESSION['error']); ?>');
    <?php endif; ?>
});
</script>
