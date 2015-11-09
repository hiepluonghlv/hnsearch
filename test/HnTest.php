<?php
/**
 * Created by PhpStorm.
 * User: HiepLuong
 * Date: 11/9/15
 * Time: 11:00 PM
 */

class HnTest extends PHPUnit_Framework_TestCase {

    public function testCreateHn()
    {
        // Arrange
        $a = new Hn(array(new News('a','b',123,'http://abc.com','2011-09-23T13:24:09.000Z')),123);

        // Assert
        $this->assertEquals(array(new News('a','b',123,'http://abc.com','2011-09-23T13:24:09.000Z')), $a->getListNews());
        $this->assertEquals(123, $a->getPages());

    }

}
 