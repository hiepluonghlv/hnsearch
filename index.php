<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'function/Hnquery.php';
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$hnquery = new Hnquery();

//call api to get news
$hn = $hnquery->getNews('github','url','points>1000',$page,'4');

//show news
if(count($hn->getListNews()) > 0){
    foreach ($hn->getListNews() as $n) {
        echo date_format(date_create($n->getDate()),"d/m/Y");
        echo ('<br/>');
        echo $n->getTitle();
        echo ('<br/>');
        echo $n->getAuthor();
        echo ('<br/>');
        echo $n->getPoints();
        echo ('<br/>');
        echo $n->getLink();
        echo ('<br/>');
        echo ('<br/>');
    }
}

?>
<br/>
<ul class="pagination">
    <?php
    //show paging
    for ($x = 0; $x < $hn->getPages(); $x++)  {
        $li = '<li class="'.($x==intval($page) ? 'active' : '').'">';
        $li = $li.'<a href="index.php?page='.$x.'">'.$x.'</a></li>';
        echo $li;
    }
    ?>
</ul>
</body>
</html>
