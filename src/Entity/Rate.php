<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Article;
use Exception;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rate")
 */
class Rate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;
    /**
     * @ORM\Column(type="integer")
     */
    private int $rate;
    /**
     * @ORM\Column(type="string")
     */
    private string $comment;
    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id", nullable = true)
     */
    private User $author;
    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="rate")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    private Article $article;
    public function __construct(int $r, ?string $c, User $a, Article $art)
    {
        $this->rate = $r;
        $this->comment = $c;
        $this->author = $a;
        $this->article = $art;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }



    /**
     * Get the value of rate
     *
     * @return int
     */
    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @param int $rate
     *
     * @return self
     */
    public function setRate(int $rate): self
    {
        if ($rate <= 5 || $rate >= 0) {
            $this->rate = $rate;
        } else throw new Exception("rate must be between 0 and 5.");

        return $this;
    }

    /**
     * Get the value of comment
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        if (empty(trim($comment))) $comment = null;
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of author
     *
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @param User $author
     *
     * @return self
     */
    public function setAuthor(User $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of article
     *
     * @return Article
     */
    public function getArticle(): Article
    {
        return $this->article;
    }

    /**
     * Set the value of article
     *
     * @param Article $article
     *
     * @return self
     */
    public function setArticle(Article $article): self
    {
        $this->article = $article;

        return $this;
    }
}
