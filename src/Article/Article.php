<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: eliana.centamore
 * Date: 29-Nov-18
 * Time: 3:17 PM.
 */

namespace LaravelDay\Article;

// con final la classe non può essere modificata
final class Article
{
    private $title;
    /**
     * @var string
     */
    private $body;
    /**
     * @var \DateTime
     */
    private $creationDate;
    /**
     * @var int
     */
    private $id;

    public function __construct(int $id, string $title, string $body, \DateTimeImmutable $creationDate)
    {
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate(): \DateTimeImmutable
    {
        return $this->creationDate;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getArticle(): string
    {
    }
}
