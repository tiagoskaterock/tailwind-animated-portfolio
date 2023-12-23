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
			<!-- about -->
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


			<!-- services -->
			<section class="py-4 text-center">

				<h2 class="text-4xl text-center mb-16 md:text-5xl">
					Software Development
				</h2>

				<div class="grid grid grid-cols-[repeat(auto-fit,minmax(220px,1fr))] gap-8">
					
					<!-- php -->
					<article class="bg-card-color py-12 px-8 border-b-2 border-transparent">

						<svg 
							xmlns="http://www.w3.org/2000/svg" 
							viewBox="0 0 24 24"
							class="icons w-24 mx-auto">

							<path d="M2.15 16.78h1.57a.14.14 0 0 0 .14-.12l.35-1.82h1.22a4.88 4.88 0 0 0 1.51-.2A2.79 2.79 0 0 0 8 14a3.18 3.18 0 0 0 .67-.85 3.43 3.43 0 0 0 .36-1 2.43 2.43 0 0 0-.41-2.16 2.64 2.64 0 0 0-2.09-.78h-3a.16.16 0 0 0-.15.13L2 16.6a.19.19 0 0 0 0 .13.17.17 0 0 0 .15.05zM5 10.62h1a1.45 1.45 0 0 1 1.08.29c.17.18.2.52.11 1a1.81 1.81 0 0 1-.57 1.12 2.17 2.17 0 0 1-1.33.33h-.8zm9.8-.95a2.7 2.7 0 0 0-1.88-.51h-1.19l.33-1.76a.15.15 0 0 0 0-.13.16.16 0 0 0-.11 0h-1.57a.14.14 0 0 0-.14.12l-1.38 7.27a.13.13 0 0 0 0 .12.13.13 0 0 0 .11.06h1.54a.14.14 0 0 0 .14-.13l.77-4.07h1.11c.45 0 .61.1.66.16a.81.81 0 0 1 0 .62l-.61 3.24a.13.13 0 0 0 0 .12.14.14 0 0 0 .11.06h1.56a.16.16 0 0 0 .15-.13l.64-3.4a1.7 1.7 0 0 0-.24-1.64zm4.52-.51h-3.13a.14.14 0 0 0-.15.13l-1.46 7.31a.16.16 0 0 0 0 .13.14.14 0 0 0 .11.05h1.63a.14.14 0 0 0 .15-.12l.37-1.82h1.27a5.28 5.28 0 0 0 1.56-.2 3 3 0 0 0 1.18-.64 3.31 3.31 0 0 0 .7-.85 3.45 3.45 0 0 0 .37-1 2.38 2.38 0 0 0-.42-2.16 2.81 2.81 0 0 0-2.18-.83zm.62 2.77a1.83 1.83 0 0 1-.6 1.12 2.28 2.28 0 0 1-1.37.33h-.8l.54-2.76h1a1.6 1.6 0 0 1 1.13.29c.16.18.16.52.1 1.02z">
							</path>

						</svg>
						<h3 class="text-2xl text-gray-color font-medium">
							Back End
						</h3>
						
					</article>


					<!-- javascript -->
					<article class="bg-card-color py-12 px-8 border-b-2 border-transparent">

						<svg 
							xmlns="http://www.w3.org/2000/svg" 
							viewBox="0 0 24 24" 
							class="icons w-24 mx-auto"><path d="M3 3h18v18H3V3zm16.525 13.707c-.131-.821-.666-1.511-2.252-2.155-.552-.259-1.165-.438-1.349-.854-.068-.248-.078-.382-.034-.529.113-.484.687-.629 1.137-.495.293.09.563.315.732.676.775-.507.775-.507 1.316-.844-.203-.314-.304-.451-.439-.586-.473-.528-1.103-.798-2.126-.775l-.528.067c-.507.124-.991.395-1.283.754-.855.968-.608 2.655.427 3.354 1.023.765 2.521.933 2.712 1.653.18.878-.652 1.159-1.475 1.058-.607-.136-.945-.439-1.316-1.002l-1.372.788c.157.359.337.517.607.832 1.305 1.316 4.568 1.249 5.153-.754.021-.067.18-.528.056-1.237l.034.049zm-6.737-5.434h-1.686c0 1.453-.007 2.898-.007 4.354 0 .924.047 1.772-.104 2.033-.247.517-.886.451-1.175.359-.297-.146-.448-.349-.623-.641-.047-.078-.082-.146-.095-.146l-1.368.844c.229.473.563.879.994 1.137.641.383 1.502.507 2.404.305.588-.17 1.095-.519 1.358-1.059.384-.697.302-1.553.299-2.509.008-1.541 0-3.083 0-4.635l.003-.042z"></path></svg>
						<h3 class="text-2xl text-gray-color font-medium">
							Front End
						</h3>
						
					</article>


					<!-- game -->
					<article class="bg-card-color py-12 px-8 border-b-2 border-transparent">

						<svg 
							xmlns="http://www.w3.org/2000/svg" 
							viewBox="0 0 24 24" 
							class="icons w-24 mx-auto"><path d="M12 22c3.719 0 7.063-2.035 8.809-5.314L13 12l7.809-4.686C19.063 4.035 15.719 2 12 2 6.486 2 2 6.486 2 12s4.486 10 10 10zm-.5-16a1.5 1.5 0 1 1-.001 3.001A1.5 1.5 0 0 1 11.5 6z"></path></svg>
						<h3 class="text-2xl text-gray-color font-medium">
							Game Development
						</h3>
						
					</article>



					<!-- database -->
					<article class="bg-card-color py-12 px-8 border-b-2 border-transparent">

						<svg xmlns="http://www.w3.org/2000/svg" class="icons w-24 mx-auto" viewBox="0 0 24 24"><path d="M10.74 12.89v-.11c.06-.15.12-.29.19-.43a5.15 5.15 0 0 0 .26-3.74.86.86 0 0 0-.66-.74 3.12 3.12 0 0 0-2.08.61v.18a11.34 11.34 0 0 1-.06 2.41 2.37 2.37 0 0 0 .62 2 2 2 0 0 0 1.43.63 8.05 8.05 0 0 1 .3-.81zM10 8.58a.36.36 0 0 1-.09-.23.19.19 0 0 1 .09-.12.74.74 0 0 1 .48-.07c.25 0 .5.16.48.34a.51.51 0 0 1-.49.33h-.06a.63.63 0 0 1-.41-.25z"></path><path d="M7.88 11a12.58 12.58 0 0 0 .06-2.3v-.28a7 7 0 0 1 1.54-4.55c-1-.32-3.4-1-4.87.1-.9.64-1.32 1.84-1.23 3.55a24.85 24.85 0 0 0 1 4.4c.68 2.22 1.45 3.62 2.11 3.85.1 0 .41.13.86-.41.64-.76 1.23-1.41 1.5-1.7l-.19-.19A2.89 2.89 0 0 1 7.88 11zm3.5 3.4c-.16-.06-.24-.1-.42.11a2.52 2.52 0 0 0-.29.35c-.35.43-.5.58-1.51.79a2 2 0 0 0-.4.11 1 1 0 0 0 .37.16 2.21 2.21 0 0 0 2.5-.8.41.41 0 0 0 0-.35.59.59 0 0 0-.25-.37zm6.29-5.82a5.29 5.29 0 0 0 .08-.79c-.66-.08-1.42-.07-1.72.36-.58.83.56 2.88 1 3.75a4.34 4.34 0 0 1 .26.48 1.79 1.79 0 0 0 .15.31 3.72 3.72 0 0 0 .16-2.13 7.51 7.51 0 0 1-.07-1.05 6 6 0 0 1 .14-.93zm-.56-.16a.6.6 0 0 1-.32.17h-.06a.47.47 0 0 1-.44-.3c0-.14.2-.24.44-.28s.48 0 .5.15a.38.38 0 0 1-.12.26z"></path><path d="M17 4.88a6.06 6.06 0 0 1 1.37 2.57.71.71 0 0 1 0 .15 5.67 5.67 0 0 1-.09 1.06 7.11 7.11 0 0 0-.09.86 6.61 6.61 0 0 0 .07 1 4 4 0 0 1-.36 2.71l.07.08c2.22-3.49 3-7.54 2.29-8.43a4.77 4.77 0 0 0-3.81-1.8 7.34 7.34 0 0 0-1.63.16A6.17 6.17 0 0 1 17 4.88z"></path><path d="M21.65 14c-.07-.2-.37-.85-1.47-.62a6.28 6.28 0 0 1-1 .13 19.74 19.74 0 0 0 2.06-4.88c.37-1.45.66-3.39-.11-4.38A5.91 5.91 0 0 0 16.37 2a8.44 8.44 0 0 0-2.46.35 9.38 9.38 0 0 0-1.45-.14 4.8 4.8 0 0 0-2.46.62 12.22 12.22 0 0 0-1.77-.44A5.44 5.44 0 0 0 4 3.05c-1.24.87-1.81 2.39-1.71 4.52a26.28 26.28 0 0 0 1 4.67A15.76 15.76 0 0 0 4.4 15a3.39 3.39 0 0 0 1.75 1.83 1.71 1.71 0 0 0 1.69-.37 2 2 0 0 0 1 .59 3.65 3.65 0 0 0 2.35-.14v.81a8.46 8.46 0 0 0 .31 2.36 1 1 0 0 1 0 .13 3 3 0 0 0 .71 1.24 2.08 2.08 0 0 0 1.49.56 3 3 0 0 0 .7-.08 3.27 3.27 0 0 0 2.21-1.27 7.34 7.34 0 0 0 .91-4v-.26h.17a5.24 5.24 0 0 0 2.4-.4c.45-.23 1.91-1 1.56-2zm-1.81 1.47a4.7 4.7 0 0 1-1.8.34 2.62 2.62 0 0 1-.79-.1c-.1.94-.32 2.69-.45 3.42a2.47 2.47 0 0 1-2.25 2.3 3.23 3.23 0 0 1-.66.07A2 2 0 0 1 12 20a16.77 16.77 0 0 1-.28-4.06 2.56 2.56 0 0 1-1.78.66 3.94 3.94 0 0 1-.94-.13c-.09 0-.87-.23-.86-.73s.66-.59.9-.64c.86-.18.92-.25 1.19-.59a2.79 2.79 0 0 1 .19-.24 2.56 2.56 0 0 1-1.11-.3c-.23.25-.86.93-1.54 1.74a1.43 1.43 0 0 1-1.11.63 1.23 1.23 0 0 1-.35 0C5.43 16 4.6 14.55 3.84 12a25.21 25.21 0 0 1-1-4.53c-.1-1.92.4-3.28 1.47-4 1.92-1.36 5-.31 5.7-.06a4 4 0 0 1 2.41-.66 5.58 5.58 0 0 1 1.4.18 7.51 7.51 0 0 1 2.5-.4 5.35 5.35 0 0 1 4.32 2c.69.88.23 3 0 3.89a18.84 18.84 0 0 1-2.41 5.41c.16.11.65.31 2 0 .46-.1.73 0 .82.25.22.55-.7 1.13-1.21 1.37z"></path><path d="M17.43 13.59a4 4 0 0 1-.62-1c0-.07-.12-.24-.23-.43-.58-1-1.79-3.22-1-4.34a2.16 2.16 0 0 1 2.12-.61 6.28 6.28 0 0 0-1.13-1.94 5.41 5.41 0 0 0-4.13-2 3.34 3.34 0 0 0-2.55.95A5.82 5.82 0 0 0 8.51 7.8l.15-.08A3.7 3.7 0 0 1 10 7.3a1.45 1.45 0 0 1 1.76 1.19 5.73 5.73 0 0 1-.29 4.09 3.29 3.29 0 0 0-.17.39v.11c-.1.27-.19.52-.25.73a.94.94 0 0 1 .57.07 1.16 1.16 0 0 1 .62.74v.16a.28.28 0 0 1 0 .09 22.22 22.22 0 0 0 .22 4.9 1.5 1.5 0 0 0 2 1.09A1.92 1.92 0 0 0 16.25 19c.15-.88.45-3.35.49-3.88 0-1.06.52-1.27.84-1.36z"></path><path d="m18 14.33-.08-.06h-.12c-.26.07-.5.14-.47.8a1.9 1.9 0 0 0 .93.12 4.29 4.29 0 0 0 1.38-.29 3 3 0 0 0 .79-.52 3.47 3.47 0 0 1-2.43-.05z"></path></svg>
						<h3 class="text-2xl text-gray-color font-medium">
							Databases
						</h3>
						
					</article>

				</div>
				
			</section>


			<!-- habilidades -->
			<section class="py-16 text-center">
				<h2 class="text-4xl mb-16 md:text-5xl">
					My Skills
				</h2>

				<div 
					class="bg-card-color grid py-12 px-8 grid text-gray-color gap-12 place-item-center grid-cols-[repeat(auto-fit,minmax(170px,1fr))]">
					<article class="space-y-4">
						<p class="text-5xl font-bold">95%</p>
						<h3 class="text-green-color text-2xl">HTML</h3>
					</article>

					<article class="space-y-4">
						<p class="text-5xl font-bold">92%</p>
						<h3 class="text-green-color text-2xl">CSS</h3>
					</article>

					<article class="space-y-4">
						<p class="text-5xl font-bold">90%</p>
						<h3 class="text-green-color text-2xl">PHP</h3>
					</article>

					<article class="space-y-4">
						<p class="text-5xl font-bold">85%</p>
						<h3 class="text-green-color text-2xl">SQL</h3>
					</article>
				</div>

			</section>




			<!-- form -->
			<section class="py-16">
				<h2 class="text-4xl mb-16 text-center md:text-5xl">Get in Touch</h2>

				<form class="flex flex-wrap justify-between gap-8 px-1 max-w-screen-xl mx-auto">
					<input 
						class="border-b px-2 py-4 flex-grow focus-input"
						type="text" placeholder="Name">

					<input 
						class="border-b px-2 py-4 flex-grow focus-input"
						type="email" placeholder="Email">

					<textarea 
						class="border px-4 py-6 min-w-full max-w-full min-h-[100px] max-h-60 flex-grow focus-input"
						placeholder="Message"></textarea>	

					<input 
						class="bg-green-color py-4 px-14 mx-auto cursor-pointer flex-grow"
						type="submit" value="Contact me">
				</form>
			</section>



		</main>


		<footer class="py-24 text-center">
			<p class="text-xl text-gray-color">
				&copy; Tiago Lemes <?= date('Y') ?>
			</p>
		</footer>

	</div>
	
</body>

</html>
