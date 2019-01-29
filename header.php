// автозагрузка классов
spl_autoload_register(function ($name)
{
// конвертируем полный путь в пространстве имён с \ в /
$name = str_replace('\\', '/', $name);

require_once($name.'.php');
});
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style/style.css" rel="stylesheet" />
    <title>Главная страница</title>
</head>
<body>

