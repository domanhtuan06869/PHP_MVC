<!-- view/music/detail.php -->
<?php $title = 'Detail' ?>

<?php ob_start() ?>
    <h1>Detail</h1>

    <dl>
        <dt>LastName: </dt>
        <dd><?= $person ['LastName'] ?></dd>
        <dt>FirstName : </dt>
        <dd><?= $person ['FirstName'] ?></dd>
        <dt>Age : </dt>
        <dd><?= $person['Age'] ?></dd>
    </dl>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>