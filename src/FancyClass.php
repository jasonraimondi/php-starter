<?php
namespace Jmondi\Guts;

class FancyClass
{
    /**
     * @var string
     */
    private $something;

    /**
     * FancyClass constructor.
     *
     * @param string $something
     */
    public function __construct(string $something)
    {
        $this->something = $something;
    }

    /**
     * @return string
     */
    public function getSomething(): string
    {
        return $this->something;
    }
}