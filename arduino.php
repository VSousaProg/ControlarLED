<!doctype php>
<?php
	$port = fopen('COM3', 'w+');
	if ($_POST['estado']=="ON")
	{
		echo "Ligou o LED";
		fwrite($port, "h");
	}
    if ($_POST['estado']=="OFF")
    {
        echo "Desligou o LED";
        fwrite($port, "l");
    }
	fclose($port);
?>