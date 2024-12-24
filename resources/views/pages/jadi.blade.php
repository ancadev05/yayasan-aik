<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CKEditor 5 - Quick start CDN</title>
		{{-- <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css"> --}}
        <link rel="stylesheet" href="{{ asset('/vendor/editor/ckeditor5.css') }}">
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
				{{-- <textarea>Hello from CKEditor 5!</textarea> --}}
                <p></p>
			</div>
		</div>
		{{-- <script src="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.umd.js"></script> --}}
        <script src="{{ asset('/vendor/editor/ckeditor5.umd.js') }}"></script>
		<script>
		const {
			ClassicEditor,
			Essentials,
			Bold,
			Italic,
			Font,
			Paragraph
		} = CKEDITOR;

		ClassicEditor
			.create( document.querySelector( '#editor' ), {
				licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NjY2MjA3OTksImp0aSI6ImU0NGEyYThjLTc3NmUtNDQyZS04YzFiLTdkMGJjMzEzOThmMyIsImxpY2Vuc2VkSG9zdHMiOlsiMTI3LjAuMC4xIiwibG9jYWxob3N0IiwiMTkyLjE2OC4qLioiLCIxMC4qLiouKiIsIjE3Mi4qLiouKiIsIioudGVzdCIsIioubG9jYWxob3N0IiwiKi5sb2NhbCJdLCJ1c2FnZUVuZHBvaW50IjoiaHR0cHM6Ly9wcm94eS1ldmVudC5ja2VkaXRvci5jb20iLCJkaXN0cmlidXRpb25DaGFubmVsIjpbImNsb3VkIiwiZHJ1cGFsIl0sImxpY2Vuc2VUeXBlIjoiZGV2ZWxvcG1lbnQiLCJmZWF0dXJlcyI6WyJEUlVQIl0sInZjIjoiNWM5NGNiZWMifQ.-ZQ1GFwsQI0ag8ym_U-PMEpJ-yvJZxLc3Td5eaYAq58dMhsfnXeO2C7fPXo3B9vFzD57wW0My9CgZNRbgksL8w', // Create a free account on https://portal.ckeditor.com/checkout?plan=free
				plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
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