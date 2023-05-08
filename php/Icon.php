<?php

namespace Tabler;

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

    public function size(float $size)
    {
        $this->size = $size;
        return $this;
    }

    public function strokeWidth(float $strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;
        return $this;
    }

    public function stroke(string $stroke)
    {
        $this->stroke = $stroke;
        return $this;
    }

    public function fill(string $fill)
    {
        $this->fill = $fill;
        return $this;
    }

    public function strokeLinecap(string $strokeLinecap)
    {
        $this->strokeLinecap = $strokeLinecap;
        return $this;
    }

    public function strokeLinejoin(string $strokeLinejoin)
    {
        $this->strokeLinejoin = $strokeLinejoin;
        return $this;
    }
}
