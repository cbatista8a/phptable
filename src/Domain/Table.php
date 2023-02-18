<?php


namespace Cbatista8a\PhpTable\Domain;


class Table extends Element
{

    /**
     * @var Row[]
     */
    private $rows = [];

    /**
     * @var Header
     */
    private $header;

    /**
     * @var Footer
     */
    private $footer;

    public function __construct()
    {
        $this->header = new Header();
        $this->footer = new Footer();
    }

    /**
     * @param Row $row
     * @return Table
     */
    public function addRow(Row $row): Table
    {
        $this->rows[] = $row;
        return $this;
    }

    /**
     * @param Header $header
     * @return Table
     */
    public function setHeader(Header $header): Table
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @param Footer $footer
     * @return Table
     */
    public function setFooter(Footer $footer): Table
    {
        $this->footer = $footer;
        return $this;
    }

    /**
     * @return Header
     */
    public function getHeader(): Header
    {
       return $this->header;
    }

    /**
     * @return Row[]
     */
    public function getRows(): array
    {
        return $this->rows;
    }

    /**
     * @return Footer
     */
    public function getFooter(): Footer
    {
        return $this->footer;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $html = "<table {$this->renderHtmlAttributes()}>";
        $html .= $this->header->render();
        $html .= "<tbody>";
        foreach ($this->rows as $row){
            $html .= $row->render();
        }
        $html .= "</tbody>";
        $html .= $this->footer->render();
        $html .= "</table>";
        return $html;
    }
}
