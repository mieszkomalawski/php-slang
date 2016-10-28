<?php

namespace PhpSlang\Tuple;

use PhpSlang\Collection\ListCollection;
use PhpSlang\Tuple\Get\Get01;
use PhpSlang\Tuple\Get\Get02;
use PhpSlang\Tuple\Get\Get03;
use PhpSlang\Tuple\Get\Get04;
use PhpSlang\Tuple\Get\Get05;
use PhpSlang\Tuple\Get\Get06;

class Tuple6 extends ListCollection
{
    use Get01;
    use Get02;
    use Get03;
    use Get04;
    use Get05;
    use Get06;

    public function __construct($it1, $it2, $it3, $it4, $it5, $it6)
    {
        parent::__construct([$it1, $it2, $it3, $it4, $it5, $it6]);
    }
}