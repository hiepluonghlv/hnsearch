<?php
/**
 * Created by PhpStorm.
 * User: HiepLuong
 * Date: 11/9/15
 * Time: 11:04 PM
 */

class HnqueryTest extends PHPUnit_Framework_TestCase {

    public function testCanGetNews()
    {

        // Arrange
        $hnquery = new Hnquery();
        $hn = $hnquery->getNews('github','url','points>1000',0,'4');

        // Assert
        $this->assertGreaterThan(0,count($hn->getListNews()));
        $this->assertGreaterThan(0, $hn->getPages());
    }

}
 