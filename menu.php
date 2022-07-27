<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Envolope/index.html">Your Mail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <!--  HTML CODE For Split NAV (NW)
  
    <div class="navbar">
	<div class="container">
		<div class="left-container">
		<ul class="nav-left">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<div class="right-container">
		<ul class="nav-right">
			<li><a href="#">Sign In</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Sign Out</a></li>
		</ul>
	</div>
	</div>
</div>

<div class="hero">
		<div class="content">
			<h1>Some Text</h1>
			<h2>With a</h2>
			<button>Call To Action</button>
		</div>
</div>
	
  CSS CODE

.navbar {
	display: flex;
	flex-flow: row nowrap;
	justify-content: space-around;
	position: relative;
	width: 100%;
	height: 60px;
	border-bottom: 1px solid hsla(0, 0%, 100%, 0.2);
	z-index: 1;
}

.container {
	display: flex;
	flex-flow: row nowrap;
	width: 100%;
	max-width: 1500px;
	justify-content: space-around;
	align-items: center;
}

.left-container,
.right-container {
	display: flex;
	flex-flow: row nowrap;
	width: 300px;
	z-index: 1;
}

.left-container {
	justify-content: flex-start;
}

.right-container {
	justify-content: flex-end;
}

.nav-left,
.nav-right {
	display: flex;
	flex-flow: row nowrap;
	justify-content: space-around;
	flex-basis: 300px;
	align-items: center;
	color: #fff;
}

.hero {
	display: flex;
	flex-flow: row nowrap;
	justify-content: center;
	position: relative;
	height: 700px;
	margin-top: -90px;
	z-index: 0;
	font-family: sans-serif;
}

.gradient {
	background-image: linear-gradient(163deg,#270530 10%,#196d82 36%,#fff 70%);
	width: 100%;
	display: flex;
	flex-flow: column nowrap;
	justify-content: flex-start;
	align-items: center;
	height: 100vh;
}

.content {
	color: hsla(0, 0%, 100%, 0.8);
	margin-top: 150px;
	text-align: center;
}

button {
	background-image: linear-gradient(163deg, #da52ff, #7e18ff);
	border: none;
	padding: 10px;
	border-radius: 6px;
	color: hsla(0, 0%, 100%, 0.9);
	box-shadow: 2px 2px 4px 1px hsla(0, 0%, 0%, 0.7);
}

button:hover {
	cursor: pointer;
}

button:focus {
	outline: none;
}

button:active {
	box-shadow: 1px 1px 2px 0 hsla(0, 0%, 0%, 0.5);
	transform: translate3d(1px, 1px, 0);
}

a {
	text-decoration: none;
	font-family: sans-serif;
	color: hsla(0, 0%, 100%, 0.7);
}

a:hover {
	color: #fff;
}

ul {
	list-style: none;
}

body {
	padding: 0;
	margin: 0;
}
  -->