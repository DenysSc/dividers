<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <h3>Введите число для поиска делителей</h3>
		<form>
			<input name="number"/>
			<input type="submit"/>
		</form>
		<?
			$number = $_GET['number'];
			$dividers = [];
			for($i = $number; $i >= 1; $i--){
				if($number % $i == 0 )
					$dividers[] = $i;
			}
			if(isset($number))
				echo 'Делители: '.implode(',',$dividers);
		?>
    </body>
</html>