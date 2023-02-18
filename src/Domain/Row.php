<?php


namespace Cbatista8a\PhpTable\Domain;

class Row extends Element
{
    /**
     * @var TDCell[] array
     */
    private $cells = [];

    public function __construct()
    {

    }

    public function addCell(TDCell $cell)
    {
        $this->cells[] = $cell;
        return $this;
    }

    /**
     * @return TDCell[]
     */
    public function getCells(): array
    {
        return $this->cells;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $header = "<tr {$this->renderHtmlAttributes()}>";
        foreach ($this->cells as $cell){
            $header .= $cell->render();
        }
        $header .= "</tr>";
        return $header;
    }
}
