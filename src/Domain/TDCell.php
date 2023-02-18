<?php


namespace Cbatista8a\PhpTable\Domain;

class TDCell extends Element
{

    /**
     * @var mixed
     */
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
        return "<td {$this->renderHtmlAttributes()}>
                {$this->getValue()}
                </td>";
    }
}
