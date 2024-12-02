<?php

namespace App\Services;

class StackService
{
    protected $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    /**
     * Agrega un elemento al tope de la pila.
     *
     * @param mixed $item
     * @return void
     */
    public function push($item)
    {
        array_push($this->stack, $item);
    }

    /**
     * Elimina y devuelve el elemento del tope de la pila.
     *
     * @return mixed
     */
    public function pop()
    {
        if ($this->isEmpty()) {
            return null; // Manejar caso de pila vacía
        }
        return array_pop($this->stack);
    }

    /**
     * Devuelve el elemento en el tope de la pila sin eliminarlo.
     *
     * @return mixed
     */
    public function top()
    {
        return end($this->stack);
    }

    /**
     * Verifica si la pila está vacía.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->stack);
    }

    /**
     * Devuelve todos los elementos de la pila.
     *
     * @return array
     */
    public function getStack()
    {
        return $this->stack;
    }
}
