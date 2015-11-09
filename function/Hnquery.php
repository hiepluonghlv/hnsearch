<?php
/**
 * Created by PhpStorm.
 * User: HiepLuong
 * Date: 11/9/15
 * Time: 10:16 PM
 */
include 'entity/News.php';
include 'entity/Hn.php';


class Hnquery {

    //Call HN API
    public function getNews($query,$attributes,$filters,$page,$hits){
        $jsonurl = 'http://hn.algolia.com/api/v1/search_by_date?query='.$query.'&restrictSearchableAttributes='.$attributes.'&numericFilters='.$filters.'&page='.$page.'&hitsPerPage='.$hits;
        $content = file_get_contents($jsonurl);
        $json = json_decode($content);
        $news = $json->{'hits'};
        $l_news = array();
        if(count($news) > 0){
            foreach ($news as $n) {
                array_push($l_news,new News($n->{'title'},$n->{'author'},$n->{'points'},$n->{'url'},$n->{'created_at'}));
            }
        }
        $hn = new Hn($l_news,$json->{'nbPages'});
        return $hn;
    }

} 