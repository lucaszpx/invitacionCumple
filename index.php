<html>
 <head>
  <title>Demo - Docker variables</title>
 </head>

 <style>
/* Estilos para el contenedor principal */
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
  background-color: <?php echo $_ENV['Color']; ?>; /* Cambiar a tu color deseado */
}
/* Estilos para el recuadro blanco interno */
.inner-box {
  background-color: white;
  padding: 20px;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}
/* Estilos para el texto */
.text {
  font-size: 20px;
  line-height: 1.5;
}
/* Estilos para el nombre */
.name {
  font-weight: bold;
}
 </style>
 <body>
    <div class="container">
        <div class="outer-box">
            <div class="inner-box">
    <h1>Te invito a mi fiesta</h1>
    <p class="text"></p>
  <p class="text">Para: <strong><?php echo $_ENV['NOMBRE']; ?></strong></p>
  <p class="text"></p>
  <p class="text">Te invito a celebrar mi cumpleaños en <strong><?php echo $_ENV['LUGAR']; ?></strong> El día <strong><?php echo $_ENV['FECHA']; ?></strong> a partir de las <strong><?php echo $_ENV['HORARIO']; ?></strong> horas
  <p class="text"></p>
  <p class="text"></p>
  <p class="text"></p>
  <?php echo $_ENV['FIRMA']; ?>
            </div>
        </div>
    </div>
</body>
</html>