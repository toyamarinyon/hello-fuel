<?= Form::open('sessions/create', ['class' => 'form-horizontal']) ?>
<fieldset>
	<div class="form-group">
		<?= Form::label('Username', 'username', array('class'=>'control-label')) ?>
		<?= Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')) ?>
	</div>
	<div class="form-group">
		<?= Form::label('Password', 'password', array('class'=>'control-label')) ?>
		<?= Form::password('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'password')) ?>
	</div>
	<div class="form-group">
		<label class='control-label'>&nbsp;</label>
		<?= Form::submit('submit', 'Save', array('class' => 'btn btn-primary')) ?>
	</div>
</fieldset>
<?= Form::close() ?>
