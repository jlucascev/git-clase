<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<style type="text/css">
    
   


    @use postcss-preset-env {
  stage: 0
}

body {
  min-height: 100vh;
  display: grid;
  align-items: center;
}
input[type=text]:focus {
  border: 3px solid #555;
  padding: 14px 30px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=button], input[type=submit], input[type=file] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

 
</style>

<body>
<div class="login">
    
<center>
    @if( ! empty($msg))
    <p>{{$msg}}</p>
@endif  
    
<form action="upload" method="POST" class="formulario">

    @csrf
<input type="file" name="name" placeholder="Input your name">

<input type="submit" name="submit" value="Send">

</form>
<a href=""><button>Explorar</button></a>
</center>

</div>


</body>
</html>