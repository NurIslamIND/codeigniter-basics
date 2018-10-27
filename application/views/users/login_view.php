<div class="panel panel-success">
    <h3 class="panel-heading">Login Form</h3>



<?php $attributes = array('id' =>'login_form' , 'class'=> 'form-horizontal' ); ?>

<?php if($this->session->flashdata('errors')): ?>
<?php echo $this->session->flashdata('errors'); ?>
<?php endif; ?>

<?php echo form_open('users/login', $attributes); ?>

<div class="panel-body">
    <?php echo form_label('Username') ?>

    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter username'
        );
    ?>
    <?php echo form_input($data) ?>
</div>
<div class ="panel-body">

    <?php echo form_label('Password') ?>

    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter password'
        );
    ?>
    <?php echo form_password($data) ?>

</div>
<div class ="panel-body">

    <?php echo form_label('Confirm Password') ?>

    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Enter password again'
        );
    ?>
    <?php echo form_password($data) ?>

</div>
<div class ="panel-body">


    <?php
        $data = array(
            'class' => 'btn btn-success',
            'name' => 'submit',
            'value' => 'Login'

        );
    ?>
    <?php echo form_submit($data) ?>

</div>


<?php echo form_close(); ?>

</div>
