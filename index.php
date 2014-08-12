

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Favorite Songs on Groovheshark</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.custom.dist.css" media="screen">
  </head>
  <body>
  <div class="container">

    <div class="page-header" id="banner">
    <div class="row">
      <h1>My Favorite Songs on Groovheshark </h1>
      <p class="lead">
	<span class="pull-left">Song list with extra details</span>
        <span class="pull-right">
	<a href="https://twitter.com/htayyar" class="btn btn-sm btn-info">@htayyar</a> 
        <a href="https://github.com/hasantayyar/groove-favs" class="btn btn-sm btn-info">Fork at Github</a>
        </span> 
</p>
    </div>
  </div>

<?php
$data = json_decode(file_get_contents(__DIR__.'/data.json'),1);

echo '<div class="col-md-12">';
foreach($data['Songs']  as $song){
  echo '<div class="col-md-4">'.
  '<a href="#" class="btn btn-sm btn-defult">'.
  '<strong>'.$song['ArtistName'].'</strong> - '.$song['image'].
  ' <small> on <strong>'.$song['AlbumName'].'</small></a>'
  .'</div>';
}
echo '</div>';


?>
 
</body>
</html>
