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
			
			<nav class="flex h-20 md:bg-green-700 items-center justify-between">

				<a href="#" class="w-1/2 max-w-[200px]">
					<img 
						src="img/logo.png" 
						alt="Logo"
						class="block h-10 ml-4">
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

					<h1 class="text-4xl md:text-5xl">Hello! I am Tiago Lemes.</h1>

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





		<main>
			<section class="py-16 text-center">

				<h2 class="text-4xl md:text-5xl">
					About
				</h2>
				
				<p class="mt-8 mb-16 leading-normal text-gray-color md:w-4/5 md:mx-auto">
					An outstanding web developer adeptly creates responsive, user-friendly websites, implements cutting-edge technologies, troubleshoots effectively, and continually seeks to enhance their skills and expertise in the field
				</p>

				<div class="grid gap-8 justify-center justify-items-center md:grid-cols-3">
					
					<!-- email -->
					<article class="w-max grid justify-items-center">
						
						<div class="icons-container">
							
							<svg xmlns="http://www.w3.org/2000/svg" 
							viewBox="0 0 24 24" 
							class="icons"><circle cx="4.983" cy="5.009" r="2.188"></circle><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path></svg>

						</div>

						<h3 class="text-2xl mt-4 mb-2">LinkedIn</h3>
						<p class="font-light">https://www.linkedin.com/in/tiago-l-p-bordin-6909481a5/</p>

					</article>


					<!-- twitter -->
					<article class="w-max grid justify-items-center">
						
						<div class="icons-container">
							
							<svg 
								xmlns="http://www.w3.org/2000/svg" 
								class="icons" 
								viewBox="0 0 24 24"><path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path></svg>

						</div>

						<h3 class="text-2xl mt-4 mb-2">Twitter</h3>
						<p class="font-light">https://twitter.com/SkateDeveloper</p>

					</article>



					<!-- github -->
					<article class="w-max grid justify-items-center">
						
						<div class="icons-container">
							
							<svg 
								xmlns="http://www.w3.org/2000/svg" 
								viewBox="0 0 24 24" 
								class="icons"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path></svg>

						</div>

						<h3 class="text-2xl mt-4 mb-2">Github</h3>
						<p class="font-light">https://github.com/tiagoskaterock</p>

					</article>

				</div>

			</section>

		</main>

	</div>
	
</body>

</html>
