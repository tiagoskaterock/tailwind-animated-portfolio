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
			
			<nav class="flex h-20 md:bg-red-800 items-center justify-between">

				<a href="#" class="w-1/2 max-w-[200px]">
					<img 
						src="img/logo.png" 
						alt="Logo"
						class="block w-full">
				</a>

				<input type="checkbox" id="menu" class="peer/menu hidden">

				<label 
					for="menu" 
					class="text-white w-10 h-10 bg-open-menu cursor-pointer bg-cover bg-center bg-green-color rounded-lg text-white peer-checked/menu:bg-close-menu transition-all z-40 md:hidden">
				</label>

				<ul class="fixed inset-0 bg-menu-color px-[5%] grid gap-6 auto-rows-max content-center justify-items-center clip-circle-0 peer-checked/menu:clip-circle-full transition-[clip-path] duration-500 md:clip-circle-full md:relative md:grid-flow-col md:py-0 md:bg-transparent">
					<li>
						<a href="#">Home</a>
					</li>

					<li>
						<a href="#">About</a>
					</li>

					<li>
						<a href="#">Services</a>
					</li>

					<li>
						<a href="#">Contact</a>
					</li>
				</ul>

			</nav>



			<section 
				class="pt-10 pb-16 md:flex justify-between items-center gap-8">
				<figure class="md:order-1">
					<img 
						class="w-[90%] aspect-square object-cover rounded-full max-w-sm mx-auto"
						src="girl.jpg" 
						alt="Background Image">
				</figure>

				<article class="text-center mt-8 md:w-1/2 md:text-left">

					<h1 class="text-4xl">Hello! I am Tiago Lemes.</h1>

					<p class="text-gray-color text-xl mt-3 mb-6">Web and Game Developer</p>

					<div class="grid grid-cols-[repeat(auto-fit,minmax(170px,1fr))] auto-rows-[60px] gap-8 max-w-lg mx-auto md:m-0">

						<a 
							href="#" 
							class="bg-green-color flex items-center justify-center">
							Download CV
						</a>

						<a 
							href="#"
							class="bg-transparent flex items-center justify-center border-white border">
							Learn More
						</a>

					</div>
				</article>

			</section>


		</header>

	</div>
	
</body>

</html>
