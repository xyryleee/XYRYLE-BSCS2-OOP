<?php

include "./models/get.php";
include "./models/post.php";
include "./models/put.php";
include "./models/del.php";
include "./models/patch.php";

$get = new Get();
$post = new Post();
$put = new Put();
$del = new Delete();
$pat = new Patch();

if (isset($_REQUEST["request"])) {
    $req = explode('/', rtrim(($_REQUEST["request"]), "/"));
}
else {
    $req = array("errorcatcher");
}

switch($_SERVER["REQUEST_METHOD"]){
    case "GET":
            switch($req[0]){
                case 'student':
                    echo $get->getStudents();
                    break;
                case 'faculty':
                    echo $get->getFaculty();
                    break;
                case 'login':
                    echo $get->logIn();
                    break;
                default:
                    echo "Not Valid";
                    break;
            }
        break;
    case "POST":
            switch($req[0]){
                case 'student':
                    echo $post->addStudents();
                    break;
                case 'faculty':
                    echo $post->addFaculty();
                    break;
                case 'login':
                    echo $post->logIn();
                    break;
                default:
                    echo "Not Valid";
                    break;
            }
        break;
    case "PUT":
            switch($req[0]){
                case 'student':
                    echo $put->putStudents();
                    break;
                case 'faculty':
                    echo $put->putFaculty();
                    break;
                case 'login':
                    echo $put->logIn();
                    break;
                default:
                    echo "Not Valid";
                    break;
            }
        break;
    case "DELETE":
            switch($req[0]){
                case 'student':
                    echo $del->delStudents();
                    break;
                case 'faculty':
                    echo $del->delFaculty();
                    break;
                case 'login':
                    echo $del->logIn();
                    break;
                default:
                    echo "Not Valid";
                    break;
            }
        break;
    case "PATCH":
            switch($req[0]){
                case 'student':
                    echo $pat->patchStudents();
                    break;
                case 'faculty':
                    echo $pat->patchFaculty();
                    break;
                case 'login':
                    echo $pat->logIn();
                    break;
                default:
                    echo "Not Valid";
                    break;
            }
        break;
}

?>
