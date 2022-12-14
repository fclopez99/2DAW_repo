<?php
/**
 * Operaciones aritmeticas 2-2 - operaciones-aritmeticas-02-2.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2019 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2019-10-24
 * @link      https://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Convertidor de pies y pulgadas a centímetros (Resultado).
    Operaciones aritméticas. Con formularios.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Convertidor de pies y pulgadas a centímetros (Resultado)</h1>

<?php
function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

$pies     = recoge("pies");
$pulgadas = recoge("pulgadas");

$piesOk     = false;
$pulgadasOk = false;

if ($pies == "") {
    print "  <p class=\"aviso\">No ha escrito el número de pies.</p>\n";
    print "\n";
} elseif (!ctype_digit($pies)) {
    print "  <p class=\"aviso\">No ha escrito los pies como número entero positivo.</p>\n";
    print "\n";
} else {
    $piesOk = true;
}

if ($pulgadas == "") {
    print "  <p class=\"aviso\">No ha escrito el número de pulgadas.</p>\n";
    print "\n";
} elseif (!is_numeric($pulgadas)) {
    print "  <p class=\"aviso\">No ha escrito las pulgadas como número.</p>\n";
    print "\n";
} elseif ($pulgadas < 0) {
    print "  <p class=\"aviso\">Las pulgadas no pueden ser negativas.</p>\n";
    print "\n";
} else {
    $pulgadasOk = true;
}

if ($piesOk && $pulgadasOk) {
    $centimetros = round(($pies * 12 + $pulgadas) * 2.54, 2);
    print "  <p>$pies pies y $pulgadas pulgadas son $centimetros centímetros</p>\n";
    print "\n";
}
?>
    <p><a href="operaciones-aritmeticas-02-1.php">Volver al formulario.</a></p>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2022-06-09">9 de junio de 2022</time>
    </p>

    <p class="licencia">
      Este programa forma parte del curso <strong><a href="https://www.mclibre.org/consultar/php/">Programación
      web en PHP</a></strong> de <a href="https://www.mclibre.org/" rel="author">Bartolomé Sintes Marco</a>.<br>
      El programa PHP que genera esta página se distribuye bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.
    </p>
  </footer>
</body>
</html>
