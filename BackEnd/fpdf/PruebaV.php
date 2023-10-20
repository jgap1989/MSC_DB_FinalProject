<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      //include '';//llamamos a la conexion BD
	  $conn= mysqli_connect("127.0.0.1:3307", "root", "smgm1304", "ac_bodyshop_tallermec");

      $consulta_info = $conn->query(" select *from cliente_c ");//traemos datos de la empresa desde BD
      $dato_info = $consulta_info->fetch_object();
      $this->Image('logo1.png', 185, 5, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(45); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('ACE BODY SHOP'), 1, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      /* ID CLIENTE (FOLIO) */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("FOLIO : $dato_info->id_C"), 0, 0, '', 0);
      $this->Ln(5);

      /* NOMBRE */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode("Nombre : $dato_info->nombre_C $dato_info->apellido_C"), 0, 0, '', 0);
      $this->Ln(5);

      /* CORREO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Correo : $dato_info->correo_C"), 0, 0, '', 0);
      $this->Ln(5);

      /* FECHA DE LA CITA */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Fecha : $dato_info->fechadisp_C"), 0, 0, '', 0);
      $this->Ln(10);

      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(228, 100, 0);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("REPORTE DE CARRO "), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(228, 100, 0); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(30, 10, utf8_decode('Linea'), 1, 0, 'C', 1);
      $this->Cell(13, 10, utf8_decode('Año'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('Marca'), 1, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('Color'), 1, 0, 'C', 1);
      $this->Cell(35, 10, utf8_decode('Tipo'), 1, 0, 'C', 1);
      $this->Cell(35, 10, utf8_decode('Placas'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

$conn= mysqli_connect("127.0.0.1:3307", "root", "smgm1304", "ac_bodyshop_tallermec");
/* CONSULTA INFORMACION DEL HOSPEDAJE */

$pdf = new PDF();
$pdf->AddPage(); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

$consulta_reporte_carro = $conn->query(" SELECT linea_A, anio_A, marca_A, color_A, tipo_A, placas_A FROM automovil_a ");

while ($datos_reporte = $consulta_reporte_carro->fetch_object()) {     
$i = $i + 1;
/* TABLA */
$pdf->Cell(30, 10, utf8_decode("$datos_reporte->linea_A"), 1, 0, 'C', 0);
$pdf->Cell(13, 10, utf8_decode("$datos_reporte->anio_A"), 1, 0, 'C', 0);
$pdf->Cell(30, 10, utf8_decode("$datos_reporte->marca_A"), 1, 0, 'C', 0);
$pdf->Cell(25, 10, utf8_decode("$datos_reporte->color_A"), 1, 0, 'C', 0);
$pdf->Cell(35, 10, utf8_decode("$datos_reporte->tipo_A"), 1, 0, 'C', 0);
$pdf->Cell(35, 10, utf8_decode("$datos_reporte->placas_A"), 1, 1, 'C', 0);
   }
$pdf->Output('Prueba.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
