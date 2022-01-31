<?php

namespace App\Controller;

use Exception;
use App\Helpers\EntityManagerHelper;
use App\Models\AbstractRepository;
use App\Entity\Article;
use App\Entity\Author;
use App\Entity\Editor;

use Doctrine\ORM\Mapping\ClassMetadata;

class ArticleController
{
    public function all()
    {
        $em = EntityManagerHelper::getEntityManager();
        $articleRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Article"));
        $articles = $articleRepository->findAll();
        include './src/View/AllArticles.php';
    }
    public function create()
    {
        if (!empty($_POST)) {
            var_dump($_POST);
            $_POST = array_map('trim', array_map('strip_tags', $_POST));
            $em = EntityManagerHelper::getEntityManager();
            $editor = new Editor($_POST['editor_mail'], $_POST['editor']);
            $author = new Author($_POST['author_mail'], $_POST['author_fname'], $_POST["author_lname"]);
            $article = new Article($_POST['isbn'], $_POST['title'], $_POST['resume'], $author, $editor);
            $em->persist($author);
            $em->persist($editor);
            $em->persist($article);
            try {
                $em->flush();
                echo "article created";
            } catch (\Throwable $th) {
                $msg = $th->getMessage();
                $code = $th->getCode();
                echo "Error $code : $msg";
            }
        }
        include './src/View/ArticleForm.php';
    }

    public function modify($id)
    {


        $em = EntityManagerHelper::getEntityManager();
        $articleRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Article"));
        $article = $articleRepository->find($id);
        if (!empty($_POST)) {
            $article->setTitle($_POST['title']);
            $article->setResume($_POST['resume']);
            try {
                $em->flush();
                echo "article modified";
            } catch (Exception $e) {
                $msg = $e->getMessage();
                $code = $e->getCode();
                echo "Error $code : $msg";
            }
        }
        include './src/View/EditArticle.php';
    }
    public function delete($id)
    {
        $em = EntityManagerHelper::getEntityManager();
        $articleRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Article"));
        $article = $articleRepository->find($id);
        $em->remove($article);
        try {
            $em->flush();
            echo "article deleted";
        } catch (Exception $e) {
            $msg = $e->getMessage();
            $code = $e->getCode();
            echo "Error $code : $msg";
        }
    }
}
