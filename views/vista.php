<!-- FORMULARIO DE LA CALCULADORA  -->
<!DOCTYPE html>
<html>
  <head>
    <title>CALCULADORA POSTGRADO UDABOL</title>
  </head>
  <body>
    <center><h1>Calculadora en MVC UDABOL<h1></center>
    <center><form action= "../controllers/controlador.php"method="GET" accept-charset="utf.8">
      <table id="formulario" name "formulario" border="70">

     <tr>
      <td colspan=""rowspan=""headers="">
        <center>Ingrese los datos </center>
      </td>
     </tr>

    <tr>
      <td colspan=""rowspan=""headers=""><input type= "text" name="bs" value="" id="bs" placeholder="introduzca numero">
                                         <input type= "text" name="bs2" value="" id="bs2" placeholder="introduzca numero">
     </td>
    </tr>

    <tr>
      <td colspan=""rowspan=""headers="">Selecione la funcion que desea realizar</td>
    </tr>

  <tr>
    <td colspan=""rowspan=""headers="">
      <center>   <select name="opcion">
                 <option value="suma">sumar</option>
                 <option value="resta">restar</option>
                 <option value="multiplicar">multiplicar</option>
                 <option value="dividir">dividir</option></center>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan=""rowspan=""headers="">
      <center><input type="submit" name="calcular" value= "calcular" id= "calcular"></center>
   </td>
  </tr>


  </table>
</form>
</center>


  </body>
</html>
