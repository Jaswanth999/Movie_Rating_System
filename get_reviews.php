<html>
<head>
<title>Reviews</title>
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <div class="jumbotron">
           <h3 align="center">Success!!!Reviews are fetched from Movie database.</h3><hr>
        </div>
    </div>
</div>



<?php
$id=$_GET['movie_id'];
echo $id;
if($id=="209112")
   $url="https://api.themoviedb.org/3/movie/209112/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="246655")
	 	$url="https://api.themoviedb.org/3/movie/246655/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="102899")
	 	$url="https://api.themoviedb.org/3/movie/102899/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="374720")
	 	$url="https://api.themoviedb.org/3/movie/374720/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="263115")
	 	$url="https://api.themoviedb.org/3/movie/263115/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="118340")
	 	$url="https://api.themoviedb.org/3/movie/118340/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="333339")
	 	$url="https://api.themoviedb.org/3/movie/333339/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="269149")
	 	$url="https://api.themoviedb.org/3/movie/269149/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="126889")
	 	$url="https://api.themoviedb.org/3/movie/126889/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="135397")
	 	$url="https://api.themoviedb.org/3/movie/135397/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="49026")
	$url="https://api.themoviedb.org/3/movie/49026/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="181808")
	$url="https://api.themoviedb.org/3/movie/181808/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="157336")
	$url="https://api.themoviedb.org/3/movie/157336/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="315635")
	$url="https://api.themoviedb.org/3/movie/315635/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="315837")
	$url="https://api.themoviedb.org/3/movie/315837/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="339964")
	$url="https://api.themoviedb.org/3/movie/339964/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="460885")
	$url="https://api.themoviedb.org/3/movie/460885/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="297762")
	$url="https://api.themoviedb.org/3/movie/297762/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="271110")
	$url="https://api.themoviedb.org/3/movie/271110/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="335984")
	$url="https://api.themoviedb.org/3/movie/335984/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="141052")
	$url="https://api.themoviedb.org/3/movie/141052/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="293660")
	$url="https://api.themoviedb.org/3/movie/293660/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="273248")
	$url="https://api.themoviedb.org/3/movie/273248/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="297761")
	$url="https://api.themoviedb.org/3/movie/297761/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="330459")
	$url="https://api.themoviedb.org/3/movie/330459/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="383498")
	$url="https://api.themoviedb.org/3/movie/383498/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="284054")
	$url="https://api.themoviedb.org/3/movie/284054/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="70160")
	$url="https://api.themoviedb.org/3/movie/70160/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="299536")
	$url="https://api.themoviedb.org/3/movie/299536/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="284052")
	$url="https://api.themoviedb.org/3/movie/284052/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="76341")
	$url="https://api.themoviedb.org/3/movie/76341/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="353081")
	$url="https://api.themoviedb.org/3/movie/353081/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="283995")
	$url="https://api.themoviedb.org/3/movie/283995/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="245891")
	$url="https://api.themoviedb.org/3/movie/245891/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="198663")
	$url="https://api.themoviedb.org/3/movie/198663/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="338970")
	$url="https://api.themoviedb.org/3/movie/338970/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="329865")
	$url="https://api.themoviedb.org/3/movie/329865/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="321612")
	$url="https://api.themoviedb.org/3/movie/321612/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="127585")
	$url="https://api.themoviedb.org/3/movie/127585/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="286217")
	$url="https://api.themoviedb.org/3/movie/286217/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="419430")
	$url="https://api.themoviedb.org/3/movie/419430/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="207703")
	$url="https://api.themoviedb.org/3/movie/207703/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="137113")
	$url="https://api.themoviedb.org/3/movie/137113/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="68718")
	$url="https://api.themoviedb.org/3/movie/68718/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="381288")
	$url="https://api.themoviedb.org/3/movie/381288/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="293167")
	$url="https://api.themoviedb.org/3/movie/293167/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="679")
	$url="https://api.themoviedb.org/3/movie/679/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="157350")
	$url="https://api.themoviedb.org/3/movie/157350/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="259316")
	$url="https://api.themoviedb.org/3/movie/259316/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="99861")
	$url="https://api.themoviedb.org/3/movie/99861/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else 
	echo $id;
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{}",
));
$res_database = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err)
{
	header("location:error.php?err=$err");
  echo "cURL Error #:" . $err;
} 
else 
{
	function escapeJsonString($value)//convert string response to array
	{ 
		$escapers = array("\'");
		$replacements = array("\\/");
		$result = str_replace($escapers, $replacements, $value);
		return $result;
	}

$res_database = escapeJsonString($res_database);
$res_database = json_decode($res_database,true);
}
$i=0;
$response=array();
$res_database=$res_database['results'];
foreach ($res_database as $value)
{
	$response['reviews'][$i]=$value['content'];
	$i++;
}
echo '<pre>';print_r($response);
//$fp = fopen("reviews/BatmanVsSuperman.txt", "w");//open a file to write data
if($id=="209112")
	file_put_contents('reviews/BatmanVsSuperman.json', json_encode($response));
else if($id=="246655")
		file_put_contents('reviews/X-men.json', json_encode($response));
else if($id=="102899")
		file_put_contents('reviews/AntMan.json', json_encode($response));
else if($id=="374720")
	 	file_put_contents('reviews/Dunkrik.json', json_encode($response));
else if($id=="263115")
	 	file_put_contents('reviews/Logan.json', json_encode($response));
else if($id=="118340")
	 	file_put_contents('reviews/Gaurdian of Galaxy.json', json_encode($response));
else if($id=="333339")
	 	file_put_contents('reviews/Ready Player One.json', json_encode($response));
else if($id=="269149")
	 	file_put_contents('reviews/Zoutopia.json', json_encode($response));
else if($id=="126889")
	 	file_put_contents('reviews/Alient Covenant.json', json_encode($response));
else if($id=="135397")
	 	file_put_contents('reviews/Jurrasic World.json', json_encode($response));
else if($id=="49026")
	file_put_contents('reviews/The Dark Night Raises.json', json_encode($response));	
else if($id=="181808")
	file_put_contents('reviews/Star Wars.json', json_encode($response));
else if($id=="157336")
	file_put_contents('reviews/Interstellar.json', json_encode($response));
else if($id=="315635")
	file_put_contents('reviews/Spider Man.json', json_encode($response));
else if($id=="315837")
	file_put_contents('reviews/Ghost in the Shell.json', json_encode($response));
else if($id=="339964")
	file_put_contents('reviews/Valeria.json', json_encode($response));
else if($id=="460885")
	file_put_contents('reviews/	MANDY.json', json_encode($response));
else if($id=="297762")
	file_put_contents('reviews/Wonder Women.json', json_encode($response));
else if($id=="271110")
	file_put_contents('reviews/	Captain America.json', json_encode($response));
else if($id=="335984")
	file_put_contents('reviews/Blade Runner.json', json_encode($response));
else if($id=="141052")
	file_put_contents('reviews/Justice League.json', json_encode($response));
else if($id=="293660")
	file_put_contents('reviews/	Dead Pool.json', json_encode($response));
else if($id=="273248")
	file_put_contents('reviews/The Hateful Eight.json', json_encode($response));
else if($id=="297761")
	file_put_contents('reviews/Sucide Squad.json', json_encode($response));
else if($id=="330459")
	file_put_contents('reviews/	Rouge One.json', json_encode($response));
else if($id=="383498")
	file_put_contents('reviews/Dead Pool2.json', json_encode($response));
else if($id=="284054")
	file_put_contents('reviews/Black Panther.json', json_encode($response));
else if($id=="70160")
	file_put_contents('reviews/The Hunger Games.json', json_encode($response));
else if($id=="299536")
	file_put_contents('reviews/Avengers:Infinity War.json', json_encode($response));
else if($id=="284052")
	file_put_contents('reviews/	Doctor Strange.json', json_encode($response));
else if($id=="76341")
	file_put_contents('reviews/Mad Max.json', json_encode($response));
else if($id=="353081")
	file_put_contents('reviews/	Mission:Impossible.json', json_encode($response));
else if($id=="283995")
	file_put_contents('reviews/Gaurdians Of Galaxy Vol.2.json', json_encode($response));
else if($id=="245891")
	file_put_contents('reviews/John Wick.json', json_encode($response));
else if($id=="198663")
	file_put_contents('reviews/Maze Runner	.json', json_encode($response));
else if($id=="338970")
	file_put_contents('reviews/Tomb raider.json', json_encode($response));
else if($id=="329865")
	file_put_contents('reviews/Arrival.json', json_encode($response));
else if($id=="321612")
	file_put_contents('reviews/Beauty & Beast.json', json_encode($response));
else if($id=="127585")
	file_put_contents('reviews/	X-Men:Days of Future Past.json', json_encode($response));
else if($id=="286217")
	file_put_contents('reviews/The Martian.json', json_encode($response));
else if($id=="419430")
	file_put_contents('reviews/Get Out.json', json_encode($response));
else if($id=="207703")
	file_put_contents('reviews/Kings Man.json', json_encode($response));
else if($id=="137113")
	file_put_contents('reviews/Edge Of Tomorrow.json', json_encode($response));
else if($id=="68718")
	file_put_contents('reviews/Django Unchained.json', json_encode($response));
else if($id=="381288")
	file_put_contents('reviews/Split.json', json_encode($response));
else if($id=="293167")
	file_put_contents('reviews/Kong_Skull Island.json', json_encode($response));
else if($id=="679")
	file_put_contents('reviews/Aliens.json', json_encode($response));
else if($id=="157350")
	file_put_contents('reviews/Divergent.json', json_encode($response));
else if($id=="259316")
	file_put_contents('reviews/Fantastic Beasts.json', json_encode($response));
else if($id=="99861")
	file_put_contents('reviews/Avengers_Age of Ultron.json', json_encode($response));


//file_put_contents('reviews/BatmanVsSuperman.txt', json_encode($response));
//echo '<pre>';print_r($response['results']);
//echo '<pre>';print_r($reviews_array);
?>
</body>
</html>