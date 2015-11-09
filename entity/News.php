<?php
/**
 * Created by PhpStorm.
 * User: HiepLuong
 * Date: 11/9/15
 * Time: 2:14 AM
 * Store News information
 */

class News {
    private $_title;
    private $_author;
    private $_points;
    private $_link;
    private $_date;

    public function setTitle($title)
    {
        $this->_title = $title;

        return $this;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setAuthor($author)
    {
        $this->_author = $author;

        return $this;
    }

    public function getAuthor()
    {
        return $this->_author;
    }

    public function setPoints($points)
    {
        $this->_points = $points;

        return $this;
    }

    public function getPoints()
    {
        return $this->_points;
    }

    public function setLink($link)
    {
        $this->_link = $link;

        return $this;
    }

    public function getLink()
    {
        return $this->_link;
    }

    public function setDate($date)
    {
        $this->_date = $date;

        return $this;
    }

    public function getDate()
    {
        return $this->_date;
    }

    function __construct($title,$author,$points,$link,$date) {
        $this->_title = $title;
        $this->_author = $author;
        $this->_points = $points;
        $this->_link = $link;
        $this->_date = $date;
    }
} 