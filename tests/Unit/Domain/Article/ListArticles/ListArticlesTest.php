<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: eliana.centamore
 * Date: 29-Nov-18
 * Time: 3:46 PM.
 */

namespace Tests\Unit\Domain\Article\ListArticles;

use LaravelDay\Article\UseCase\ListArticles\ListArticles;
use Tests\TestCase;

class ListArticlesTest extends TestCase
{
    /**
     * @test
     */
    public function shouldListArticle()
    {
        $handler = new ListArticles();
        $expectedData = [[
            'title' => 'Article 1',
            'body' => 'This is an article',
            'creationDate' => '2018-11-29 00:00:00',
        ]];
        $data = $handler();
        $this->assertEquals($expectedData, $data);
    }
}
