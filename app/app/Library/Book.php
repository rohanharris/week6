<?php

namespace App\Library;

class Book
{
    private $title;
    private $numOfPages;
    private $pageNum = 1;

    public function __construct($title, $numOfPages)
    {
        $this->title = $title;
        $this->numOfPages = $numOfPages;
    }

    public function read($numOfPages)
    {
       $this->pageNum += $numOfPages;
       return $this;

    }

    public function currentPage()
    {
        return $this->pageNum;
    }


}