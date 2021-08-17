<html>
<head>
 <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
 <body>
      <h1>Mustakeem Laehlong 62107677</h1>
      <iframe src="https://thingspeak.com/channels/1458411/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" style="height:250px;width:500px;" title="HUMIDITY"></iframe>
      <span id="test"></span>
        <script type="text/javascript">
        $.getJSON("https://api.thingspeak.com/channels/1458411/fields/1.json?results=1", function(json) {
             //ตัวแปร json เป็น object อยู่แล้ว จะใช้ค่าอะไรก็เรียกมาใช้แบบ object ได้เลย เช่น ต้องการดึงค่า "thing" ที่อยู่ใน "with" ออกมาใช้
            var field1 = json.feeds.field1;
           //แสดงค่า thing ใน <span>
            document.getElementById("test").innerHTML = field1;
        });
    </script>

      <br>
      <iframe src="https://thingspeak.com/channels/1458411/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" style="height:250px;width:500px;" title="TEMPERATURE"></iframe>
      <br>
      <iframe src="https://thingspeak.com/channels/1458411/maps/channel_show" style="height:250px;width:500px;" title="LIGHT"></iframe>
</body>
</html>
