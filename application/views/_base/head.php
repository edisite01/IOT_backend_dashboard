<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<base href="<?php echo $base_url; ?>" />
        <!--<link rel="shortcut icon" type="image/png" href="<?php echo $base_url.'../assets/ehfavicon.png'?>"/>-->
        <link rel="shortcut icon" href="../assets/favicon-fbf7b3c7.ico"/>
        <title>ENDRESS+HAUSER | PDAM-SEMARANG | <?php echo strtoupper($page_title); ?></title>
        
	<?php
		foreach ($meta_data as $name => $content)
		{
			if (!empty($content))
				echo "<meta name='$name' content='$content'>".PHP_EOL;
		}

		foreach ($stylesheets as $media => $files)
		{
			foreach ($files as $file)
			{
				$url = starts_with($file, 'http') ? $file : base_url($file);                                	
				echo "<link href='$url  ' rel='stylesheet' media='$media'>".PHP_EOL;	
			}
		}
		
		foreach ($scripts['head'] as $file)
		{
			$url = starts_with($file, 'http') ? $file : base_url($file);
			echo "<script src='$file'></script>".PHP_EOL;
		}
	?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="<?php echo $body_class; ?>" oncontextmenu="return false">