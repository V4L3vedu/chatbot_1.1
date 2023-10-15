<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>
<body>
    <input type="text" id="chat_box">
    <button type="button" id="submit_btn" onclick="ask($('#chat_box').val())">Submit</button>
    <div class="data" id="display"></div>



    <script src="javascript.js"></script>
</body>
</html>