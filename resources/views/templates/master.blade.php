<!DOCTYPE html>
<html>
<head>
	<title>latihan template</title>
</head>
<body>
        <!-- menambahkan header -->
			@include('partials.header')
		<!-- tempat kosong yang bisa di isi  -->
			@yield('kontent')<br><br>
		<!--  menambahkan footer -->
			@include('partials.footer') 
</body>
</html>