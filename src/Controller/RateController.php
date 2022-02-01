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
    public function all($id)
    {
        $em = EntityManagerHelper::getEntityManager();
        $ratesRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Rate"));
        $rates = $ratesRepository->findAll();

        include './src/View/AllRates.php';
    }

    public function add($id)
    {
        $em = EntityManagerHelper::getEntityManager();
        $articleRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Article"));
        $article = $articleRepository->find($id);
        $userRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\User"));
        $user = $userRepository->find($_SESSION['id']);
        if (!empty($_POST)) {
            $rate = new Rate($_POST['rate'], (empty($_POST['comment'])) ? null : $_POST['comment'], $user, $article);
            $em->persist($rate);
            try {
                $em->flush();
                echo "article rated";
            } catch (Exception $e) {
                $msg = $e->getMessage();
                $code = $e->getCode();
                echo "Error $code : $msg";
            }
        }
        include './src/View/RateArticle.php';
    }

    public function modify($rateId)
    {
        $em = EntityManagerHelper::getEntityManager();
        $rateRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Rate"));
        $rate = $rateRepository->find($rateId);
        if (!empty($_POST)) {
            $rate->setRate($_POST["rate"]);
            $rate->setComment($_POST["comment"]);
            if(empty($_POST["comment"])) $rate->setComment(null);
            try {
                $em->flush();
                echo "rate updated";
            } catch (\Throwable $th) {
                $msg = $th->getMessage();
                $code = $th->getCode();
                echo "Error $code : $msg";
            }
        }
        include './src/View/EditRate.php';
    }

    public function delete($id)
    {
        $em = EntityManagerHelper::getEntityManager();
        $rateRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Rate"));
        $rate = $rateRepository->find($id);
        $em->remove($rate);
        try {
            $em->flush();
            echo "rate deleted";
        } catch (Exception $e) {
            $msg = $e->getMessage();
            $code = $e->getCode();
            echo "Error $code : $msg";
        }
    }
}
