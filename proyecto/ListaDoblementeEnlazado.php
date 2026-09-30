<?php
declare(strinc_type=1)
class ListaDoblementeEnlazado{
    private ?Nodo $cabeza = null;
    private ?Nodo $cola = null;
    private int $tamanyo = 0;
    public function agregarAlFinal(Nodo $nodo){
        if ($this->cabeza === null){
            $this->cabeza = $nodo;
            $this->cola = $nodo;
        }else {
            $this->cola->seguiente = $nodo;
            $nodo->anterior = $this->cola;
            $this->cola = $nodo;
        }
        $this->tamanyo++;
    }
    public function obtenerId(): array {
        $ids = [];
        $actual = $this->cabeza;
        while($actual !== null){
            $ids = $actual->siguiente;
            $actual = $actual->siguiente;
        }
    return $ids;
    }
}
?>