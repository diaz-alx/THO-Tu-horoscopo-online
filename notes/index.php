<?php
if (!isset($_COOKIE["idiomaUsuario"])){
    $pagina = "pedirIdioma.html";
} elseif ($_COOKIE["idiomaUsuario"] == "sp"){
    $pagina = "spanish.html";
} else{
    $pagina = "english.html";
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script languaje= "javascript" type="text/javascript">
        location.href = "<?php echo $pagina; ?>";
    </script>
</head>
<body>
    
</body>
</html>


<?php
namespace Phppot;

require_once ("./Model/NewsLetter.php");
use Phppot\DataSource;
$newsLetter = new NewsLetter();
$result = $newsLetter->getAllRecords();
?>
<html lang="<?php echo $lang; ?>">
<head>
<title>How to Enable Multi-language Support to Website using PHP</title>
<link href='./assets/css/phppot-style.css' rel='stylesheet'
    type='text/css' />
<link href='./assets/css/multi-lingual-page.css' rel='stylesheet'
    type='text/css' />
</head>
<body>
    <div class="phppot-container">
<?php require_once "./view/home.php"; ?>
</div>
</body>
</html>