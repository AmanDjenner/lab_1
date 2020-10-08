<?php
    class Post 
    {
        private $title;
        private $text;
        private $autor;
        private $age = NULL;
        
        public function __construct (string $title, string $text, string $autor, int $age)
        {
            $this->title = $title;
            $this->text = $text;
            $this->autor = $autor;
             if ($this->checkMinimumAge($age)) {
                $this->age = $age;
             }
        }

        public function getTitle()
        {
            return $this->title;
        }

        public function getText()
        {
            return $this->text;
        }

        public function getAge($age)
        {
            return $this->age;
        }

        public function setTitle($title): void
        {
            $this->title = $title;
        }

        public function setText($text): void
        {
            $this->text = $text;
        }

        public function setAutor($autor): void
        {
            $this->autor = $autor;
        }

        public function setAge(int $age)
        {
             if ($this->checkMinimumAge($age)) {
                $this->age = $age;
             }
        }
       
        public function checkMinimumAge(int $age){
            return $age >= 16;
        }

        public function getPost(){
           echo "Titlul : " .$this->title;
           echo "| Textul : " .$this->text;
           echo "| Autorul : " .$this->autor;
           echo "| Virsta sutorului : " .$this->age;
        }
           
    }

   

    $objects = [
        new Post ('TITLUL 1', 'TEXTUL 1', "Verdes Gheorghi", 15 ),
        new Post('TITLUL 2', 'TEXTUL 2', "Vasile Cristel", 25 ),
        new Post('TITLUL 3', 'TEXTUL 3', "Mihai Eminescu", 35 )
    ];

// echo ('<pre>');
//  $post = new Post('TITLUL 1', 'TEXTUL 1', "Verdes Gheorghi", 25);

//  echo  $post->getPost();
// var_dump($post);
foreach ($objects as $object)
{
    echo $object->getPost();
        echo '<br>';
}
// echo ('</pre>');