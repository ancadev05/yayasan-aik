<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CKEditor 5 - Quick start ZIP</title>
        <link rel="stylesheet" href="{{ asset('vendor/ckeditor5/ckeditor5.css') }}">
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
                {{-- <p>Hello from CKEditor 5!</p> --}}
                <textarea name="" id="edfditor" cols="30" rows="10" >fdsfd</textarea>
            </div>
        </div>
        <script type="importmap">
            {
                "imports": {
                    "ckeditor5": "{{ asset('vendor/ckeditor5/ckeditor5.js') }}",
                    "ckeditor5/": "{{ asset('vendor/ckeditor5/') }}"
                }
            }
        </script>
        <script type="module">
            import {
                ClassicEditor,
                Essentials,
                Paragraph,
                Bold,
                Italic,
                Font
            } from 'ckeditor5';

            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NjY2MjA3OTksImp0aSI6ImU0NGEyYThjLTc3NmUtNDQyZS04YzFiLTdkMGJjMzEzOThmMyIsImxpY2Vuc2VkSG9zdHMiOlsiMTI3LjAuMC4xIiwibG9jYWxob3N0IiwiMTkyLjE2OC4qLioiLCIxMC4qLiouKiIsIjE3Mi4qLiouKiIsIioudGVzdCIsIioubG9jYWxob3N0IiwiKi5sb2NhbCJdLCJ1c2FnZUVuZHBvaW50IjoiaHR0cHM6Ly9wcm94eS1ldmVudC5ja2VkaXRvci5jb20iLCJkaXN0cmlidXRpb25DaGFubmVsIjpbImNsb3VkIiwiZHJ1cGFsIl0sImxpY2Vuc2VUeXBlIjoiZGV2ZWxvcG1lbnQiLCJmZWF0dXJlcyI6WyJEUlVQIl0sInZjIjoiNWM5NGNiZWMifQ.-ZQ1GFwsQI0ag8ym_U-PMEpJ-yvJZxLc3Td5eaYAq58dMhsfnXeO2C7fPXo3B9vFzD57wW0My9CgZNRbgksL8w', // Or 'GPL'.
                    plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
                    toolbar: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    </body>
</html>
