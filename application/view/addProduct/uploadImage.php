<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>bootstrap-fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $base_url ?>bootstrap-fileinput/css/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo $base_url ?>bootstrap-fileinput/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="<?php echo $base_url ?>bootstrap-fileinput/js/fileinput.js" type="text/javascript"></script>
    <script src="<?php echo $base_url ?>bootstrap-fileinput/themes/explorer-fas/theme.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container kv-main">
    <div class="page-header">
        <h1>Upload Product Images
        </h1>
    </div>
    <form enctype="multipart/form-data">
        <div class="form-group">
            <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
        </div>

    </form>

</div>

<script>

    $("#file-1").fileinput({
        uploadUrl: '<?php echo $add_product_url?>uploadItem', // you must set a valid URL here else you will get an error
        allowedFileExtensions: ['jpg', 'png', 'gif', 'jpeg'],
        overwriteInitial: false,
        maxFileSize: 5000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });
</script>
</html>

