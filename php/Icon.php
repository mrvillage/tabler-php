<?php

abstract class Icon
{
    /** @var float */
    public $size = 24;
    /** @var float */
    public $strokeWidth = 2;
    /** @var string */
    public $stroke = 'currentColor';
    /** @var string */
    public $fill = 'none';
    /** @var string */
    public $strokeLinecap = 'round';
    /** @var string */
    public $strokeLinejoin = 'round';
    /** @var string */
    public $style = '';
    /** @var string */
    public $class = '';

    public function __construct(?array $options = null)
    {
        if ($options) {
            foreach ($options as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    abstract public static function getSvg(): string;
    abstract public static function getName(): string;

    public function __toString(): string
    {
        $name = static::getName();
        $svg = static::getSvg();
        $size = $this->size;
        $strokeWidth = $this->strokeWidth;
        $stroke = $this->stroke;
        $fill = $this->fill;
        $strokeLinecap = $this->strokeLinecap;
        $strokeLinejoin = $this->strokeLinejoin;
        $style = $this->style;
        $class = $this->class;
        return <<<EOT
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-$name $class"
            width="$size"
            height="$size"
            viewBox="0 0 24 24"
            stroke-width="$strokeWidth"
            stroke="$stroke"
            fill="$fill"
            stroke-linecap="$strokeLinecap"
            stroke-linejoin="$strokeLinejoin"
            style="$style"
        >
            $svg
        </svg>
        EOT;
    }
}
