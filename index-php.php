<!DOCTYPE html>
<html lang="cs">
    <head>
            <meta chareset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="Width=device-wirdth, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <h1>Čas</h1>
<?php
date_default_timezone_set("Europe/Prague");
echo "<p>";
echo date ("H:i:s");
echo "<p>";
echo "<ul>";
$hodiny = intval(date("h"));
$minuty = intval(date("m"));
$sekundy = intval(date("s"));
echo "<li>M:";
for ($i = 0; $i < $hodiny; $i++)    {
    echo("h");
}

for ($i = 0; $i < $minuty; $i++)    {
    echo("m");
}

for ($i = 0; $i < $sekundy; $i++)    {
    echo("s");
}
?>
</body>
</html>