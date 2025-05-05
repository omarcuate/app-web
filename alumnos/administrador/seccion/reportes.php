<?php
ob_start();
?>
<style type="text/css">
  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }

  a {
    color: #5D6975;
    text-decoration: underline;
  }

  body {
    position: relative;
    width: 21.59cm;
    height: 27.94cm;
    margin: 2.54 cm;
    color: #001028;
    background: #FFFFFF;
    font-family: sans-serif;
    font-size: 12px;

  }

  header {
    padding: 0 0;
    margin-bottom: 30px;
  }

  #logo {
    text-align: center;
    margin-bottom: 30px;
    width: 90%;
  }

  #logo img {
    width: 200px;
    height: 100px;
  }

  h1 {
    border-top: 1px solid #5D6975;
    border-bottom: 1px solid #5D6975;
    color: #5D6975;
    font-size: 2.4em;
    line-height: 1.4em;
    font-weight: normal;
    text-align: center;
    margin: 0 0 20px 0;
    width: 90%;

  }

  #project {
    float: left;
  }

  #project span {
    color: #5D6975;
    text-align: right;
    width: 52px;
    margin-right: 10px;
    display: inline-block;
    font-size: 0.8em;
  }

  #company {
    float: right;
    text-align: right;
  }

  #project div,
  #company div {
    white-space: nowrap;
  }

  table {
    width: 90%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px;
  }

  table tr:nth-child(2n-1) td {
    background: #F5F5F5;
  }

  table th,
  table td {
    text-align: center;
  }

  table th {
    padding: 5px 20px;
    color: #5D6975;
    border-bottom: 1px solid #C1CED9;
    white-space: nowrap;
    font-weight: normal;
    font-size: 14;
  }

  table .service,
  table .desc {
    text-align: left;
  }

  table td {
    padding: 20px;
    text-align: center;
    font-size: 12;
  }

  table td.service,
  table td.desc {
    vertical-align: top;
  }

  table td.unit,
  table td.qty,
  table td.total {
    font-size: 1.2em;
  }

  table td.grand {
    border-top: 1px solid #5D6975;
    ;
  }

  #notices .notice {
    color: #5D6975;
    font-size: 1.2em;
  }

  footer {
    color: #5D6975;
    width: 100%;
    height: 30px;
    position: fixed;
    bottom: 0;
    border-top: 1px solid #C1CED9;
    padding: 8px 0;
    text-align: center;
    font-family: sans-serif;
  }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Listado Alumnos</title>


</head>

<body>
  <header class="clearfix">
    <div id="logo">
      <?php
      $nombreImagen = "..\..\media/UA.png";
      $imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
      ?>
      <img src="<?php echo $imagenBase64 ?>" />
    </div>
    <h1>Lista de Alumnos</h1>
  </header>

  <?php
  include('..\..\consultas.php');

  $consultar = "SELECT * FROM profesionista";
  $query = mysqli_query($conexion, $consultar);
  $array = mysqli_fetch_array($query);


  ?>

  <main>



    <table id="tabla">
      <!--encabesado de la tabla-->
      <thead>
        <tr class="head">
          <th>No. Control</th>
          <th>Nombre</th>
          <th>Primer Apellido</th>
          <th>Segundo Apellido</th>


        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($query as $row) { ?>

          <tr>
            <td><?php echo $row['NumeroControl']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['PrimerApellido']; ?></td>
            <td><?php echo $row['SegundoApellido']; ?></td>

          </tr>
      </tbody>
    <?php
        }
    ?>

    </table>

    <!-- comment     <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div> -->
  </main>
  <footer>
    Listado de Alumnos Universidad Alfa Lambda
  </footer>
</body>

</html>
<?php
$html = ob_get_clean();
//echo $html;
//exit;

require_once '..\libreria/dompdf/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('IsRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');
//$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream("Lista Alumnos.pdf", array("Attachment" => true));

?>