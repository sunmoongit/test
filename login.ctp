<div class="container">
	<?php 
 			echo $this->Form->create('User', array('class' => 'form-signin'));
			echo '<div class="form-signin-heading text-center">';
				echo $this->Html->image('login-logo.png', array('alt' => 'Falcon'));
			echo '</div>';
			echo '<div class="login-wrap">';
			echo $this->Form->input('username',array(
				'label' => false,
				'class' => 'form-control',
				'placeholder' => 'User name',
				'div' => array('class' =>'form-group')
			));
			echo $this->Form->input('password',array(
				'label' => false,
				'class' => 'form-control',
				'value' => false,
				'placeholder' => 'Password',
				'div' => array('class' =>'form-group')
			));

			
			echo $this->Form->button('<i class="fa fa-sign-in"></i> Login', array('class' => "btn btn-lg btn-login btn-block"));

			echo $this->Session->flash();
			echo '</div>';
			echo $this->Form->end();
		?>
</div>

