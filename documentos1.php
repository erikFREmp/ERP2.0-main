<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ventas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="assets/js/jquery-1.12.4.js" type="text/javascript"></script>
 
        <link href="assets/css/select2.min.css" rel="stylesheet" />
        <script src="assets/js/select2.min.js"></script>
        <link rel="stylesheet" href="assets/css/styles.css">
        <script src="assets/js/motor.js"defer></script>
    </head>
 <body>
    <?php require_once "Views/shared/Menu1View.php"; ?>
    <?php require_once "Views/documentos1/documentos1View1.php"; ?>
    <?php require_once "Views/shared/Footer1View.php"; ?>
 </body>
 <script type="text/javascript">
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
  $('.js-example-basic-single').select2();
});
</script>
</html>