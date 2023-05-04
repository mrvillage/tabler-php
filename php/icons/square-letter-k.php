<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSquareLetterK extends Tabler\Icon {
    public static function getName(): string {
        return 'square-letter-k';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M10 8v8" />   <path d="M14 8l-2.5 4l2.5 4" />   <path d="M10 12h1.5" />
        SVG;
    }
}