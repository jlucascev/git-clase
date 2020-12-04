<!DOCTYPE html>
<html>
<head>
	<title>Lista de archivos</title>
</head>
<body>

	@foreach($files as $file)
		<p><a href="descargar/{{ $file }}">{{ $file }}</a></p>
	@endforeach

	<a href="../public"><button>Volver</button></a>
</body>
</html>