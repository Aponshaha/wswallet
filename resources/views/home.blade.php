@extends('layouts.app')
@extends('layouts.menu')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>

	<div id="app">
         <router-link to="/buy">Go to buy</router-link>
         <router-link to="/sell">Go to sell</router-link>
		<div class="container">
			<router-view></router-view>
		</div>
		
	</div>
	<script src="./js/app.js"></script>
</body>
</html>
