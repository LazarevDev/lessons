<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script>
        $(document).ready(function () {
            $("p").dblclick(function () {
                $(this).hide();
            });
        });
    </script>
</head>
<body>
    <p>If you double-click on me, I will disappear.</p>
    <p>Click me away!</p>
    <p>Click me too!</p>
</body>
</html>