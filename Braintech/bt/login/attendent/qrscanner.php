<!DOCTYPE html>
<html>

<head>
 <title>BrainTech QR Reader</title>
    <style>
      .result{
        background-color: green;
        color:#fff;
        padding:20px;
      }
      .row{
        display:flex;
      }
    </style>
      <script src="html5-qrcode.min.js"></script>
</head>
<body>


      <div style="width:100%;" id="reader"></div>
   


  <a href="Aregister.php"><button>Payments & Attendance Register</button></a>


  <script type="text/javascript">
    function onScanSuccess(qrCodeMessage) {
      location='registerDetails.php?STID='+qrCodeMessage+'&submit=QR';
    }
    function onScanError(errorMessage) {
      //handle scan error
    }
    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess, onScanError);
  </script>
</body>
</html>
