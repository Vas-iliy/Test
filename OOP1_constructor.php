<?php
class Article
{
    public $title;
    public $titleFontSize;
    public $articleBody;
    public $articleBodyFontSize;
    public $border;
    public $bg;

//Это конструктор
    public function __construct($title, $articleBody, $border, $bg,
                                $titleFontSize = 14, $articleBodyFontSize = 20)
    {
        $this->title = $title;
        $this->titleFontSize = $titleFontSize;
        $this->articleBody = $articleBody;
        $this->articleBodyFontSize = $articleBodyFontSize;
        $this->border = $border;
        $this->bg = $bg;
    }


    public function printArticle() {
        echo "<div style='border: {$this->border}; font-size: {$this->articleBodyFontSize}px; 
                 background: {$this->bg}'><h2 style='font-size: {$this->titleFontSize}px'>
                {$this->title}</h2><span>{$this->articleBody}</span>
              </div>";
    }


}

$test2 = new Article('Заголовок', 'lorem222',
    '2px solid green', 'blue');
$test2->printArticle();
$test = new Article('Спортивная новость', 'апрол',
    '2px solid green', 'green');
$test->printArticle();