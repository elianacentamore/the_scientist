<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: eliana.centamore
 * Date: 29-Nov-18
 * Time: 3:02 PM.
 */

namespace LaravelDay\Article\UseCase\ListArticles;

class ListArticles
{
    /**
     * ListArticles constructor.
     */
    public function __invoke(): array
    {
        return [
            [
                'title' => 'Article 1',
                'body' => 'This is an article',
                'creationDate' => '2018-11-29 00:00:00',
            ],
        ];
    }
}
