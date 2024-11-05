<?php
if (isset($_GET['page'])) {
$page = $_GET['page'];
switch ($page) {
case 'home':
include "includes/home.php";
break;
case 'about':
include "includes/about.php";
break;
case 'contact':
include "includes/contact.php";
break;
case 'tabel':
include "includes/datatables.php";
break;
case 'Wtabel':
include "includes/worldtable.php";
break;
case 'msitabel':
include "includes/msitable.php";
break;
case 'lcktabel':
include "includes/lcktable.php";
break;
case 'form':
include "includes/form.php";
break;

}
} else {
include "includes/home.php";
}