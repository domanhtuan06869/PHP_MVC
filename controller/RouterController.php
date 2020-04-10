<?php

if ($uri0 && $uri1 && $uri[0] === 'music' && $uri[1] === 'detail') {         // Detail
    $id = $_GET['id'];
    $controller->detail($id);
} elseif ($uri0 && $uri1 && $uri[0] === 'music' && $uri[1] === 'edit') {     // Edit
    $id = $_GET['id'];
    $controller->edit($id);
} elseif ($uri0 && $uri1 && $uri[0] === 'music' && $uri[1] === 'delete') {   // Delete
    $id = $_GET['id'];
    $controller->delete($id);
} elseif ($uri0 && $uri1 && $uri[0] === 'music' && $uri[1] === 'create') {   // Create
    $controller->create();
} elseif ($uri0 && $uri1 && $uri[0] === 'music' && $uri[1] === 'search') {   // Search
    // $controller->search();
} elseif ($uri[0] === 'music') {                                             // Index
    $controller->index();
} else {                                                                       // 404
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>404</h1><br><br><h2><center>Halaman yang anda cari tidak ada</center></h2></body></html>';
}
