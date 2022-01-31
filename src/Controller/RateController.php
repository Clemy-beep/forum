<?php

namespace App\Controller;

use App\Helpers\EntityManagerHelper;
use App\Models\AbstractRepository;
use App\Entity\User;
use Doctrine\ORM\Mapping\ClassMetadata;
use App\Entity\Rate;
use Exception;

class RateController
{

    public function add($id)
    {
        $em = EntityManagerHelper::getEntityManager();
        $articleRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Article"));
        $article = $articleRepository->find($id);
        $user = new User($_POST['usermail'], $_POST['firstname'], $_POST['lastname'], $_POST['username']);
        $rate = new Rate($_POST['rate'], (empty($_POST['comment'])) ? null : $_POST['comment'], $user, $article);
        $em->persist($user);
        $em->persist($rate);
        try {
            $em->flush();
            echo "article rated";
        } catch (Exception $e) {
            $msg = $e->getMessage();
            $code = $e->getCode();
            echo "Error $code : $msg";
        }
        include './src/View/RateArticle.php';
    }

    public function delete($id)
    {
        $em = EntityManagerHelper::getEntityManager();
        $rateRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Rate"));
        $rate = $rateRepository->find($id);
        $em->remove($rate);
        try {
            $em->flush();
            echo "rate modified";
        } catch (Exception $e) {
            $msg = $e->getMessage();
            $code = $e->getCode();
            echo "Error $code : $msg";
        }
    }
}
