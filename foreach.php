<!DOCTYPE html>
<html>
<head>
	<title>essai foreach</title>
</head>
<body>
<?php 
class test{
	public $publique1 = 'publique 1';
	public $publique2 = 'publique 2';
	public $publique3 = 'publique 3';

	protected $protegee = 'variable protégée';
	private $privee = 'variable privé';
}
 $test = new test();
   foreach ($test as $clef => $valeur){
   	echo $clef . "=> " .$valeur .'<br>';
   }
?>
</body>
</html>