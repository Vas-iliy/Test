<?php
abstract class Article
{
    public $title;
    public $titleFontSize;
    public $articleBody;
    public $articleBodyFontSize;
    public $border;
    public $bg;

//Это конструктор
// добавляем тип данных около каждого свойства
    public function __construct(string $title, string $articleBody, string$border, string$bg,
                                int $titleFontSize = 24, int $articleBodyFontSize = 14)
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

class SportsArticle extends Article
{
    public $image;
    public function __construct(string $title, string $articleBody, string $border, string $bg,
                                string $image, int $titleFontSize = 24, int $articleBodyFontSize = 14)
    {
        $this->image = $image;
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
    }
    public function printArticle()
    {
        echo "<div style='border: {$this->border}; font-size: {$this->articleBodyFontSize}px; 
                 background: {$this->bg}'><h2 style='font-size: {$this->titleFontSize}px'>
                {$this->title}</h2><span>{$this->articleBody}</span>
                <img src='{$this->image}' alt='Картинка' width='100'>
              </div>";
    }
}
//сейчас делаем разные виды статей, втавляем разные вещи туда
class WeatherArticle extends Article
{
    public $temperature;
    public function __construct(string $title, string $articleBody, string $border, string $bg, $temperature, int $titleFontSize = 24, int $articleBodyFontSize = 14)
    {
        $this->temperature = $temperature;
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
    }
    public function printArticle() {
        echo "<div style='border: {$this->border}; font-size: {$this->articleBodyFontSize}px; 
                 background: {$this->bg}'><h2 style='font-size: {$this->titleFontSize}px'>
                {$this->title}</h2><span>{$this->articleBody}</span>
                <span>{$this->temperature}<span/>
              </div>";
    }
}
class PolitikArticle extends Article
{
    public $link;
    public function __construct(string $title, string $articleBody, string $border, string $bg, string $link, int $titleFontSize = 24, int $articleBodyFontSize = 14)
    {
        $this->link = $link;
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
    }
    public function printArticle() {
        echo "<div style='border: {$this->border}; font-size: {$this->articleBodyFontSize}px; 
                 background: {$this->bg}'><h2 style='font-size: {$this->titleFontSize}px'>
                {$this->title}</h2><span>{$this->articleBody}</span>
                <a href='{$this->link}'>{$this->link}</a>
              </div>";
    }
}

$sportsNews = new SportsArticle('Заголовок статьи про спорт', 'Текст...',
    '3px solid red', 'whight', 'https://www.interfax.ru/ftproot/textphotos/2013/05/13/ga.jpg');
$sportsNews->printArticle();
$weatherNews = new WeatherArticle('Заголовок статьи про погоду', 'Текст...',
    '10px solid red', 'green', '+20');
$weatherNews->printArticle();
$politiksNews = new PolitikArticle('Заголовок статьи про политику и пидоров', 'Текст...',
    '3px solid red', 'whight', 'https:google.com');
$politiksNews->printArticle();

/*$test2 = new Article('Заголовок', 'lorem222',
    '2px solid green', 'blue');
$test2->printArticle();
$test = new Article('Спортивная новость', 'апрол',
    '2px solid green', 'green');
$test->printArticle();*/