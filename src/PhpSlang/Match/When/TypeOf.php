<?php
namespace PhpSlang\Match\When;

class TypeOf extends AbstractWhen
{
    /**
     * @param $subject
     *
     * @return bool
     */
    public function matches($subject): bool
    {
        return $subject instanceof $this->case;
    }
}
