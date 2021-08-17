<html>
<head>
<script>
var request = new XMLHttpRequest();
request.open('GET', 'https://api.thingspeak.com/channels/1458411/fields/1.json? 
api_key=RIAQ3PEGDT6ZR84N&results=1', true);

request.onload = function() {
  if (request.status >= 200 && request.status < 400) {
    var data = JSON.parse(request.responseText);
    var dia = date.getDate();
    var mes = date.getMonth();
    mes++;
    var ano = date.getFullYear();
    var hora = date.getHours();
    var minuto = date.getMinutes();
    document.getElementById("camb").innerHTML = "Câmbio Dólar: R$ " + data.feeds[0].field1 +  " | 
    Atualizado em " + dia + "/" + mes + "/" + ano + " às " + hora + ":" + minuto;
    } else {
     }
     };

    request.send();
 </script>
 </head>
 <body>
      <h1>Mustakeem Laehlong 62107677</h1>
      <iframe src="https://thingspeak.com/channels/1458411/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" style="height:250px;width:500px;" title="HUMIDITY"></iframe>
   <div  width = "100%" id="camb" style="font-size:15px; text-align:left; color: white; margin- 
     left: -300px; background-color: red; border-left: 300px solid red; border-bottom: 5px solid red; 
     border-top: 300px solid red; overflow: hidden;  margin-top: -300px; font-family: Brandon, 
     Grotesque, sans-serif;"></div>
      <br>
      <iframe src="https://thingspeak.com/channels/1458411/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" style="height:250px;width:500px;" title="TEMPERATURE"></iframe>
      <br>
      <iframe src="https://thingspeak.com/channels/1458411/maps/channel_show" style="height:250px;width:500px;" title="LIGHT"></iframe>
</body>
</html>
