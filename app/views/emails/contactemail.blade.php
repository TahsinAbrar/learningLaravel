<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Form</title>
</head>
<body>
  <h2>Contact Form</h2>
  <div>Someone just contacted us:</div>
  <div>
      Subject: {{ $subject }}
  </div>
  <div>
      Message: {{ $emailmessage }}
  </div>
</body>
</html>