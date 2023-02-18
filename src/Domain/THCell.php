<?php


namespace Cbatista8a\PhpTable\Domain;

class THCell extends Element
{

    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return "<th {$this->renderHtmlAttributes()}>
                {$this->getValue()}
                </th>";
    }
}
