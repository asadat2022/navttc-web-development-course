<?php

if (empty($_REQUEST['page'])) {
    $_REQUEST['page'] = null;
}
switch ($_REQUEST['page']) {
    case 'user':
        include  './pages/user-list.php';
        break;
    case 'post':
        include  './pages/post-list.php';
        break;
    default:
        include  './pages/user-list.php';
        break;
}
?>