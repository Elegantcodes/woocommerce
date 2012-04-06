<?php
/**
 * Messages
 */
if (!$messages || !is_array($messages)) return;
foreach ($messages as $message) {
?>
<div class="woocommerce_message"><?php echo $messages; ?></div>
<?php
}