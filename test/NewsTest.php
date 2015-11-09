<?php
/**
 * Created by PhpStorm.
 * User: HiepLuong
 * Date: 11/9/15
 * Time: 10:43 PM
 */

class NewsTest extends PHPUnit_Framework_TestCase {


    public function testCreateNews()
    {
        // Arrange
        $a = new News('a','b',123,'http://abc.com','2011-09-23T13:24:09.000Z');

        // Assert
        $this->assertEquals('a', $a->getTitle());
        $this->assertEquals('b', $a->getAuthor());
        $this->assertEquals(123, $a->getPoints());
        $this->assertEquals('http://abc.com', $a->getLink());
        $this->assertEquals('2011-09-23T13:24:09.000Z', $a->getDate());
    }

}
 