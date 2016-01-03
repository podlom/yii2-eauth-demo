<?php

use yii\helpers\Html;

/**
 * @var yii\base\View $this
 * @var string $name
 * @var string $message
 * @var Exception $exception
 */

$this->title = $name;
?>
<div class="site-error">

	<h1><?php echo Html::encode($this->title); ?></h1>

	<div class="alert alert-danger">
		<?php echo nl2br(Html::encode($message)); ?>
	</div>

	<p>
		The above error occurred while the Web server was processing your request.
	</p>
	<p>
		Please contact us if you think this is a server error. Thank you.
	</p>

</div>