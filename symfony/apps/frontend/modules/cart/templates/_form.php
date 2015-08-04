<form action="<?php echo url_for('cart/' method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<input type="submit" value="Save" />
<?php echo $form ?>
</form>
