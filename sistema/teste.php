<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>

<script>
	tinyMCE.init({
        selector: "textarea.mce",
      entity_encoding: "raw",
		
		plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'media', 'table', 'help', 'wordcount'
  ],
      // toolbarl: 'insertfile undo redo | bold italic underline | alingleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink | print media image | forecolor backcolor | code',
      toolbar: 'undo redo | blocks | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help | code',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
         setup: function(editor) {
        editor.on('change', function() {
          tinymce.triggerSave();
        });
      },

		images_upload_url : 'upload.php',
		automatic_uploads : false,

		images_upload_handler : function(blobInfo, success, failure) {
			var xhr, formData;

			xhr = new XMLHttpRequest();
			xhr.withCredentials = false;
			xhr.open('POST', 'teste-upload.php');

			xhr.onload = function() {
				var json;

				if (xhr.status != 200) {
					failure('HTTP Error: ' + xhr.status);
					return;
				}

				json = JSON.parse(xhr.responseText);

				if (!json || typeof json.file_path != 'string') {
					failure('Invalid JSON: ' + xhr.responseText);
					return;
				}

				success(json.file_path);
			};

			formData = new FormData();
			formData.append('file', blobInfo.blob(), blobInfo.filename());

			xhr.send(formData);
		},
	});
</script>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <h2>PHP Image Upload using TinyMCE Editor</h2>
    <textarea class="mce"></textarea>
    </form>
</body>
</html>