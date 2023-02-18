<?php

use Cbatista8a\PhpTable\Domain\Attribute;
use Cbatista8a\PhpTable\Domain\Header;
use Cbatista8a\PhpTable\Domain\Row;
use Cbatista8a\PhpTable\Domain\Table;
use Cbatista8a\PhpTable\Domain\TDCell;
use Cbatista8a\PhpTable\Domain\THCell;

require_once "vendor/autoload.php";

$table = new Table();

$table->addAttribute(new Attribute('class', 'table table-bordered border-primary table-striped'))
    ->addAttribute(new Attribute('id', 'example-table'))
    ->setHeader(
        (new Header())
            ->addAttribute(new Attribute('class','table-dark'))
            ->addColumn(new THCell('Name'))
            ->addColumn(new THCell('Lastname'))
            ->addColumn(new THCell('Age'))
            ->addColumn(new THCell('Actions'))
    )
    ->addRow(
        (new Row())
            ->addCell(new TDCell('Pipo'))
            ->addCell(new TDCell('Perez'))
            ->addCell(new TDCell('30'))
            ->addCell(
                (new TDCell('<a href="example.php">Save</a>'))->addAttribute(
                    new Attribute('class', 'btn-link')
                )
            )
    )
    ->addRow(
        (new Row())
            ->addCell(new TDCell('Rolo'))
            ->addCell(new TDCell('Perez'))
            ->addCell(new TDCell('15'))
            ->addCell(
                (new TDCell('<a href="example.php">Save</a>'))->addAttribute(
                    new Attribute('class', 'btn-link')
                )
            )
    );

//this is only for example presentation purposes and you should load your styles from your html view
echo "
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>
";

echo "<div class='container m-2 p-2'>";
echo $table->render();
echo "</div>";