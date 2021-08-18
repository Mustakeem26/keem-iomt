<html>
<head>
 <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
 <body>
      <h1>Mustakeem Laehlong 62107677</h1>
      <iframe src="https://thingspeak.com/channels/1458411/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" style="height:250px;width:500px;" title="HUMIDITY"></iframe>
          <?php
$api_url = 'https://api.thingspeak.com/channels/1458411/fields/1.json?results=1';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$user_data = $response_data->feeds;

// Cut long data into small & select only first 10 records
$user_data = array_slice($user_data, 0);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
foreach ($user_data as $user) {
	echo "name: ".$user->field1;
}

?>
      <br>
      <iframe src="https://thingspeak.com/channels/1458411/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" style="height:250px;width:500px;" title="TEMPERATURE"></iframe>
      <br>
      <iframe src="https://thingspeak.com/channels/1458411/maps/channel_show" style="height:250px;width:500px;" title="LIGHT"></iframe>
</body>
</html>
