<?php

abstract class Icon
{
    public float $size = 24;
    public float $strokeWidth = 2;
    public string $stroke = 'currentColor';
    public string $fill = 'none';
    public string $strokeLinecap = 'round';
    public string $strokeLinejoin = 'round';

    public function __construct()
    {
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
        return <<<EOT
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-$name"
            width="$size"
            height="$size"
            viewBox="0 0 24 24"
            stroke-width="$strokeWidth"
            stroke="$stroke"
            fill="$fill"
            stroke-linecap="$strokeLinecap"
            stroke-linejoin="$strokeLinejoin"
        >
            $svg
        </svg>
        EOT;
    }
}
