<!-- view/music/form.php -->
<?php
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

// Set form action
if ($uri[1] === 'edit') {
    $judul = 'Sửa';
    $form_action = "http://localhost/PHP_MVC/index.php/music/edit?id=" . $_GET['id'];
} else {
    $judul = 'Thêm';
    $form_action = "http://localhost/PHP_MVC/index.php/music/create";
}

$valNama = isset($music['LastName']) ? $music['LastName'] : '';
$valJudul = isset($music['FirstName']) ? $music['FirstName'] : '';
$valAlbum = isset($music['Age']) ? $music['Age'] : '';
$valId = isset($music['Personid']) ? $music['Personid'] : '';
?>

<?php ob_start() ?>
    <h1><?= $judul ?></h1>

    <form action="<?= $form_action ?>" method="post">
        <?php if ($valId): ?>
            <input type="hidden" name="id" value="<?= $valId ?>">
        <?php endif ?>

        <div class="form-group">
            <label for="LastName">LastName</label>
            <input name="LastName" type="text" value="<?= $valNama ?>" class="form-control" id="lastName" placeholder="LastName">
        </div>

        <div class="form-group">
            <label for="FirstName">FirstName</label>
            <input name="FirstName" type="text" value="<?= $valJudul ?>" class="form-control" id="firstName" placeholder="FirstName">
        </div>

        <div class="form-group">
            <label for="Age">Age</label>
            <input name="Age" type="text" value="<?= $valAlbum ?>" class="form-control" id="age" placeholder="Age">
        </div>    
		

        <button class="btn btn-primary" type="submit">ok</button>
    </form>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>