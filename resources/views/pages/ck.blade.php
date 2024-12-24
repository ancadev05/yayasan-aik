<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor 5 - Quick start CDN</title>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.umd.js"></script>
    <!-- Add if you use premium features. -->
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5-premium-features/43.0.0/ckeditor5-premium-features.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5-premium-features.umd.js"></script>
    <!--  -->
    <style>
        .main-container {
            width: 795px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div id="editor">
            <p>Hello from CKEditor 5!</p>
        </div>
    </div>
    <script>
        const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } = CKEDITOR;
        const { FormatPainter } = CKEDITOR_PREMIUM_FEATURES;

        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NjY2MjA3OTksImp0aSI6ImU0NGEyYThjLTc3NmUtNDQyZS04YzFiLTdkMGJjMzEzOThmMyIsImxpY2Vuc2VkSG9zdHMiOlsiMTI3LjAuMC4xIiwibG9jYWxob3N0IiwiMTkyLjE2OC4qLioiLCIxMC4qLiouKiIsIjE3Mi4qLiouKiIsIioudGVzdCIsIioubG9jYWxob3N0IiwiKi5sb2NhbCJdLCJ1c2FnZUVuZHBvaW50IjoiaHR0cHM6Ly9wcm94eS1ldmVudC5ja2VkaXRvci5jb20iLCJkaXN0cmlidXRpb25DaGFubmVsIjpbImNsb3VkIiwiZHJ1cGFsIl0sImxpY2Vuc2VUeXBlIjoiZGV2ZWxvcG1lbnQiLCJmZWF0dXJlcyI6WyJEUlVQIl0sInZjIjoiNWM5NGNiZWMifQ.-ZQ1GFwsQI0ag8ym_U-PMEpJ-yvJZxLc3Td5eaYAq58dMhsfnXeO2C7fPXo3B9vFzD57wW0My9CgZNRbgksL8w',
                plugins: [ Essentials, Bold, Italic, Font, Paragraph, FormatPainter ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                    'formatPainter'
                ]
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>
</body>
</html>
