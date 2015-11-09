<?php
/**
 * Created by PhpStorm.
 * User: HiepLuong
 * Date: 11/9/15
 * Time: 2:41 AM
 * Store result returned from api request
 */

class Hn {

    private $_list_news;

    private $_pages;

    public function setListNews($l_news)
    {
        $this->_list_news = $l_news;

        return $this;
    }

    public function getListNews()
    {
        return $this->_list_news;
    }

    public function setPages($pages)
    {
        $this->_pages = $pages;

        return $this;
    }

    public function getPages()
    {
        return $this->_pages;
    }

    function __construct($l_news,$pages) {
        $this->_list_news = $l_news;
        $this->_pages = $pages;
    }
} 