<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSquareRoot2 extends Icon {
    public static function getName(): string {
        return 'square-root-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 12h1c1 0 1 1 2.016 3.527c.984 2.473 .984 3.473 1.984 3.473h1" />   <path d="M12 19c1.5 0 3 -2 4 -3.5s2.5 -3.5 4 -3.5" />   <path d="M3 12h1l3 8l3 -16h10" />
        SVG;
    }
}