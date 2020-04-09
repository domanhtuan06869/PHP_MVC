<!-- view/music/detail.php -->
<?php $judul = 'Detail Lagu/Album/Artist' ?>

<?php ob_start() ?>
    <h1>Detail</h1>

    <dl>
        <dt>LastName: </dt>
        <dd><?= $music['LastName'] ?></dd>
        <dt>FirstName : </dt>
        <dd><?= $music['FirstName'] ?></dd>
        <dt>Age : </dt>
        <dd><?= $music['Age'] ?></dd>
    </dl>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>