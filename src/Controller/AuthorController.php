<?php

namespace App\Controller;

use App\Helpers\EntityManagerHelper;
use App\Entity\Author;

class AuthorController
{
    public function create()
    {
        include './src/View/AuthorForm.php';
        if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'])) {
            $_POST = array_map('trim', array_map('strip_tags', $_POST));
            var_dump($_POST);
            $em = EntityManagerHelper::getEntityManager();
            $author = new Author($_POST['email'], $_POST['firstname'], $_POST['lastname']);
            $em->persist($author);
            try {
                $em->flush();
            } catch (\Throwable $e) {
                $msg = $e->getMessage();
                $code = $e->getCode();
                echo "Error $code : $msg";
            }
        }
    }
}
