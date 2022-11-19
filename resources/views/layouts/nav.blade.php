<!-- Navbar goes here -->
<nav class="bg-gray-900 shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4 px-2">
								<img src="https://plancy.org/wp-content/uploads/2021/07/cropped-LOGO-720.png" alt="Logo" class="h-8 w-8 mr-2">
								
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
							<a href="{{ route('home') }}" class="py-4 px-2 text-white font-semibold hover:text-blue-500 transition duration-300">Home</a>
							<a href="" class="py-4 px-2 text-white font-semibold hover:text-blue-500 transition duration-300">Beach Store</a>
							<a href="" class="py-4 px-2 text-white font-semibold hover:text-blue-500 transition duration-300">Listings</a>
							<a href="{{ route('chat') }}" class="py-4 px-2 text-white font-semibold hover:text-blue-500 transition duration-300">Chatroom</a>
							<a href="" class="py-4 px-2 text-white font-semibold hover:text-blue-500 transition duration-300">About us</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
						@auth
						<a href="" class="py-2 px-2 font-medium text-white rounded hover:bg-blue-500 hover:text-white transition duration-300">{{ auth()->user()->name }}</a>
						<a href="{{ route('logout') }}" class="py-2 px-2 font-medium text-white bg-blue-500 rounded hover:bg-blue-400 transition duration-300">Log Out</a>	
						@endauth
						@guest
						<a href="{{ route('login') }}" class="py-2 px-2 font-medium text-white rounded hover:bg-blue-500 hover:text-white transition duration-300">Log In</a>
						<a href="{{ route('register') }}" class="py-2 px-2 font-medium text-white bg-blue-500 rounded hover:bg-blue-400 transition duration-300">Sign Up</a>
						@endguest
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-white hover:text-blue-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="{{ route('home') }}" class="block text-sm px-2 py-4 text-white font-semibold">Home</a></li>
					<li><a href="#services" class="block text-sm px-2 py-4 text-white hover:bg-blue-500 transition duration-300">Beach Store</a></li>
					<li><a href="#about" class="block text-sm px-2 py-4 text-white hover:bg-blue-500 transition duration-300">Listings</a></li>
					<li><a href="{{ route('chat') }}" class="block text-sm px-2 py-4 text-white hover:bg-blue-500 transition duration-300">Chatroom</a></li>
				</ul>
			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>