<?php


namespace Cbatista8a\PhpTable\Domain;

class Footer extends Element
{
    /**
     * @var TDCell[] array
     */
    private $cells = [];

    public function __construct()
    {
    }

    /**
     * @param TDCell $cell
     * @return $this
     */
    public function addColumn(TDCell $cell): self
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
        if (empty($this->cells)){
            return '';
        }
        $header = "<tfoot {$this->renderHtmlAttributes()}><tr>";
        foreach ($this->cells as $cell){
            $header .= $cell->render();
        }
        $header .= "</tr></tfoot>";
        return $header;
    }
}
