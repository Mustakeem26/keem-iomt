<html>
<head>
 <script>
async function getDataFromAPI() {
// คา สั่งส่ง request
let response = await fetch('https://api.thingspeak.com/channels/1458411/fields/1.json?results=1')
let rawData = await response.text() // รับผลลัพธ์
let data = JSON.parse(rawData) // แปลงผลลัพธ์เป็ น object
console.log(rawData) // ทดสอบแสดงค่า
//data.forEach(temp => { // วนลูปดึงค่าจาก object แสดงผลใน console
//console.log(temp.feeds.field1)
//});
}
</script>
</head>
 <body>
      <h1>Mustakeem Laehlong 62107677</h1>
      <iframe src="https://thingspeak.com/channels/1458411/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" style="height:250px;width:500px;" title="HUMIDITY"></iframe>
      <span id="test"></span>
      <script>document.getDataFromAPI("test").innerHTML = field1;</script>
      <br>
      <iframe src="https://thingspeak.com/channels/1458411/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" style="height:250px;width:500px;" title="TEMPERATURE"></iframe>
      <br>
      <iframe src="https://thingspeak.com/channels/1458411/maps/channel_show" style="height:250px;width:500px;" title="LIGHT"></iframe>
</body>
</html>
