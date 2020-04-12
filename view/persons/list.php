<!-- view/music/list.php -->
<?php ob_start() ?>
	<br>
    <center><h1>Persons</h1></center>
	<br>
	<div class="table-responsive"> 
    <table class="table">
        <tr>
            <th>ID</th>
            <th>LastName</th>
            <th>FirstName</th>
            <th>Age</th>
            <th>Detail</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($persons as $row): ?>
        <tr>
            <td><?= $row['Personid'] ?></td>
            <td><?= $row['LastName'] ?></td>
            <td><?= $row['FirstName'] ?></td>
            <td><?= $row['Age'] ?></td>
            <td><a href="http://localhost/PHP_MVC/index.php/persons/detail?id=<?= $row['Personid'] ?>" class="btn btn-success btn-xs"> Detail</a></td>
            <td><a href="http://localhost/PHP_MVC/index.php/persons/edit?id=<?= $row['Personid'] ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
            <td><a href="http://localhost/PHP_MVC/index.php/persons/delete?id=<?= $row['Personid']?>" onclick="return confirm('Delete?')" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-trash"></span> Delete</a></td>
        </tr>
        <?php endforeach ?>
    </table>
	</div>
    <br>
    <a href="http://localhost/PHP_MVC/index.php/persons/create" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>Create</a>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>