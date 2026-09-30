<?php
declare(strict_types=1);
require_once  'bd.php';
require_once  'Nodo.php';
require_once  'ListaDoblementeEnlazado.php';

$db = new Database();
$pdo = $db->getPdo();
<ROM productos ORDER BY precio DESC
$stmt = $pdo->query("SELECT * FROM productos ORDER BY precio DESC");
  $productos = $symt->fetchALL();
  $lista = new ListaDoblementeEnlazado();
  foreach($productos as $p)¨{
    $nodo = new Nodo(
                (int)$p['id'],
                $p['nombre'],
                (float)$p['precio'],
                (int)$p['stock']);
    $lista->agregarAlFinal($nodo);
  }
  
  echo "se insertaron los registros"+implode(', ', $lista->obternerIds());
  
?>





