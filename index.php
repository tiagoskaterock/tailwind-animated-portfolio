<!DOCTYPE html>
<html class="scroll-smooth">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tailwind Animated Portfolio</title>
	<link rel="stylesheet" type="text/css" href="src/css/estilos.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,700&family=Montserrat:wght@300;400;700&family=Mulish:wght@300;400;600&family=Poppins:wght@200;400&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

	<link rel="icon" href="favicon.ico" type="image/x-icon" />

</head>

<body class="font-dm-sans bg-color-background text-white">

	<div class="w-[90%] mx-auto overflow-hidden max-w-screen-xl">
		
		<header>
			
			<nav class="flex h-20 bg-red-800 items-center justify-between">

				<a href="#" class="w-1/2 max-w-[200px]">
					<img 
						src="img/logo.png" 
						alt="Logo"
						class="block w-full">
				</a>

				<input type="checkbox" id="menu" class="peer/menu hidden">

				<label 
					for="menu" 
					class="text-white w-10 h-10 bg-open-menu cursor-pointer bg-cover bg-center bg-green-color rounded-lg text-white peer-checked/menu:bg-close-menu transition-all z-40">
				</label>

				<ul class="fixed inset-0 bg-menu-color px-[5%] grid auto-rows-max content-center justify-items-center clip-circle-0 peer-checked/menu:clip-circle-full">
					<li>
						<a href="#">Home</a>
						<a href="#">About</a>
						<a href="#">Services</a>
						<a href="#">Contact</a>
					</li>
				</ul>

			</nav>

		</header>

	</div>
	
</body>

</html>
