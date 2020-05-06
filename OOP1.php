<?php

class Article
{
    public $title = 'Новая статья';
    public $titleFontSize = 20;
    public $articleBody = 'lorem lorem lorem';
    public $articleBodyFontSize = 14;
    public $border = '1px solid black';
    public $bg;

    public function printArticle() {
        echo "<div style='border: {$this->border}; font-size: {$this->articleBodyFontSize}px; 
                 background: {$this->bg}'><h2 style='font-size: {$this->titleFontSize}px'>
                {$this->title}</h2><span>{$this->articleBody}</span>
              </div>";
    }


}

$sportsNews = new Article();
$sportsNews2 = new Article();
$sportsNews3 = new Article();
$sportsNews2->title = 'Спортивная новость';
$sportsNews3->title = 'Новость про футбол';
$sportsNews->bg = 'red';
$sportsNews2->bg = 'yellow';
$sportsNews3->bg = 'blue';
$sportsNews->printArticle();
$sportsNews2->printArticle();
$sportsNews3->printArticle();

$test = new Article('Спортивная новость', '20',
'Текст', 11, '2px solid red', 'yellow');
$test->printArticle();









