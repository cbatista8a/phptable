<?php


namespace Cbatista8a\PhpTable\Domain;

class Header extends Element
{
    /**
     * @var THCell[] array
     */
    private $cells = [];
    /**
     * @var string[]
     */
    private $columns = [];

    public function __construct()
    {
    }

    /**
     * @param THCell $cell
     * @return $this
     */
    public function addColumn(THCell $cell): self
    {
        $this->cells[] = $cell;
        $this->columns[] = (string)$cell->getValue();
        return $this;
    }

    /**
     * @return THCell[]
     */
    public function getCells(): array
    {
        return $this->cells;
    }

    /**
     * @return string[]
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $header = "<thead {$this->renderHtmlAttributes()}><tr>";
        foreach ($this->cells as $cell){
            $header .= $cell->render();
        }
        $header .= "</tr></thead>";
        return $header;
    }
}
