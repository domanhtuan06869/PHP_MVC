<!-- view/music/form.php -->
<?php
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

// Set form action
if ($uri[1] === 'edit') {
    $action = 'Sửa';
    $form_action = "http://localhost/PHP_MVC/index.php/persons/edit?id=" . $_GET['id'];
} else {
    $action = 'Thêm';
    $form_action = "http://localhost/PHP_MVC/index.php/persons/create";
}

$lastName = isset($person ['LastName']) ? $person['LastName'] : '';
$firstName = isset($person ['FirstName']) ? $person['FirstName'] : '';
$age = isset($person ['Age']) ? $person['Age'] : '';
$id = isset($person['Personid']) ?$person['Personid'] : '';
?>

<?php ob_start() ?>
    <h1><?= $action ?></h1>

    <form action="<?= $form_action ?>" method="post">
        <?php if ($id): ?>
            <input type="hidden" name="id" value="<?= $id ?>">
        <?php endif ?>

        <div class="form-group">
            <label for="LastName">LastName</label>
            <input name="LastName" type="text" value="<?= $lastName ?>" class="form-control" id="lastName" placeholder="LastName">
        </div>

        <div class="form-group">
            <label for="FirstName">FirstName</label>
            <input name="FirstName" type="text" value="<?= $firstName ?>" class="form-control" id="firstName" placeholder="FirstName">
        </div>

        <div class="form-group">
            <label for="Age">Age</label>
            <input name="Age" type="text" value="<?= $age ?>" class="form-control" id="age" placeholder="Age">
        </div>    
		

        <button class="btn btn-primary" type="submit">ok</button>
    </form>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>