<!DOCTYPE html>
<html>
<head>

    <title></title>
</head>
<body>
    <form action="<?=site_url('Excel_Controller/UsuarioUploader')?>" method="post" enctype="multipart/form-data">
        <input type="file"  name="file">
        <button type="submit">VerExcel</button>
    </form>
    
</body>
</html>