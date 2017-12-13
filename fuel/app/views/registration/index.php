
<style>
    /* Full-width input fields */
    input{
        width: 100%;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    label {
        width: 100%;
    }
    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn,.signupbtn {
        float: left;
        width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
    }
</style>

<?php if(Session::get_flash('success')) :?>
    <div class="alert alert-success"><?php echo Session::get_flash('success');?></div>
<?php endif; ?>

    <?php echo Form::open('registration');?>
<div class="container">
    <?php
    echo Form::label('Asmens kodas', 'ssn');
    echo Form::input('ssn');

    echo Form::label('Vardas', 'first_name');
    echo Form::input('first_name');

    echo Form::label('Pavarde', 'last_name');
    echo Form::input('last_name');

    ?>
    <div class="actions">
        <?php echo Form::submit('send'); ?>
    </div>
</div>
    <?php echo Form::close(); ?>




<div id="registerBtn">

</div>
