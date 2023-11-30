<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Загрузка файла</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Загрузка файла</h1>
    <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="file" id="fileInput">
        <br>
        <input type="button" value="Загрузить" onclick="uploadFile()">
    </form>
    <div id="response"></div>

    <script>
        function uploadFile() {
            var fileInput = document.getElementById("fileInput");
            var file = fileInput.files[0];
            var formData = new FormData();
            formData.append("file", file);

            $.ajax({
                url: "upload.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $("#response").html(response);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }
    </script>
</body>
</html>