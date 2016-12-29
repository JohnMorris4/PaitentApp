<div class="index large-4 mdeium4 large-offset-4 mdeium-offset-4 columns content">
    <div class="panel">
        <h3 class="text-center">PatientCare Admin Login </h3>
        <?= $this->Form->create(); ?>
        <?= $this->Form->input('email'); ?>
        <?= $this->Form->input('password', array('type'=>'password' )); ?>
        <?= $this->Form->submit('Login', array('class' => 'button')); ?>
        <?= $this->Form->end(); ?>
    </div>

</div>
