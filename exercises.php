<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hola Tailwind!!!</title>
	<link rel="stylesheet" type="text/css" href="src/css/estilos.css">
</head>
<body>

	<article 
		class="w-5/6 max-w-screen-md my-24 mx-auto px-6 py-4 rounded-md text-center border-8">
		<img 			
			class="w-52 mx-auto mb-4 rounded-full object-cover"
			src="girl.jpg" 
			alt="Girl on computer">
		
		<h2 
			class="text-3xl mb-4 font-bold leading-relaxed">
			We love programming
		</h2>

		<p 
			class="lg mb-6 font-light mt-6 mb-8">
			Welcome to our universe
		</p>

		<a 
			class="bg-white text-violet-600 py-6 px-8 inline-block rounded-[50px]"
			href="#">
			Contact Me
		</a>
	</article>


	<nav 
		class="bg-violet-600 h-20 px-8 flex text-white justify-between items-center sticky top-0">
		<h1>Logo.</h1>

		<div class="flex gap-8">
			<a class="text-xl" href="#" title="Home">Home</a>
			<a class="text-xl" href="#" title="About">About</a>
			<a class="text-xl" href="#" title="Contact">Contact</a>
		</div>
	</nav>	



	<h2 class="text-3xl font-bold text-center my-12">Gallery</h2>

	<section class="w-[90%] mx-auto flex flex-wrap gap-y-8 gap-x-4 p-4">
		<img 
			class="w-52 h-52 grow object-cover"
			src="img/woman1.jpg" 
			alt="Woman">

		<img 
			class="w-52 h-52 grow object-cover"
			src="img/woman2.jpg" 
			alt="Woman">

		<img 
			class="w-52 h-52 grow object-cover"
			src="img/woman3.jpg" 
			alt="Woman">

		<img 
			class="w-52 h-52 grow object-cover"
			src="img/woman4.jpg" 
			alt="Woman">

		<img 
			class="w-52 h-52 grow object-cover"
			src="img/woman5.jpg" 
			alt="Woman">

		<img 
			class="w-52 h-52 grow object-cover"
			src="img/woman6.jpg" 
			alt="Woman">
	</section>



	<div class="text-center bg-indigo-800/50 p-5">
		
		<h1 class="text-center text-[white] text-[100px]">Hola Tailwind!!!</h1>

		<p class="text-white mb-2">I am Tiago =) Web and Game Developer</p>		

		<p class="text-white mb-2">I am buiding this page while I learn Tailwind</p>

		<p class="text-white mb-2">Tailwind CSS stands out as a groundbreaking framework revolutionizing how developers build and style web interfaces. Unlike traditional frameworks, it adopts a unique utility-first approach where styles are directly applied within HTML. This methodology offers unparalleled flexibility and granular control over design, enabling efficient creation of custom and responsive layouts.</p>

		<p class="text-white mb-2">One of Tailwind CSS's main strengths lies in its comprehensive set of predefined utility classes. Rather than starting from scratch with CSS, developers can effortlessly apply these classes directly to HTML elements, streamlining the styling process. With classes like <code>bg-blue-500</code>, <code>p-4</code>, <code>flex</code>, and others, colors, spacing, alignments, and more can be defined with just a few lines of code.</p>

		<p class="text-white mb-2">Beyond its ease of use, Tailwind promotes consistency and maintainability within codebases. Standardizing utility classes makes it easier for developers and teams to maintain a cohesive style across the entire application. This also fosters collaboration as different team members can work on the code without compromising the visual integrity of the project.</p>

		<p class="text-white mb-2">Another significant benefit of Tailwind is its ability to create responsive layouts in a simplified manner. By using classes such as <code>sm:</code>, <code>md:</code>, <code>lg:</code>, and <code>xl:</code>, specific styles can be defined for various screen sizes, ensuring a consistent user experience across devices, from smartphones to desktops.</p>

		<p class="text-white mb-2">Tailwind CSS also offers extensive customization. Developers can easily extend or modify the existing utility set, creating custom classes to meet the project's specific needs. This allows for flexible adaptation and the creation of unique designs without sacrificing the development efficiency provided by the framework.</p>

	</div>

</body>
</html>
