<p>message: </p>

<?php if(isset($subject)): ?>
	<p>name: <?= $name ?></p>
	<p>email: <?= $email ?></p>
	<p>subject: <?= $subject ?></p>
	<p>message: <?= $message ?></p>
<?php endif; ?>