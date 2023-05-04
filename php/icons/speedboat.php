<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSpeedboat extends \Tabler\Icon {
    public static function getName(): string {
        return 'speedboat';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 17h13.4a3 3 0 0 0 2.5 -1.34l3.1 -4.66h0h-6.23a4 4 0 0 0 -1.49 .29l-3.56 1.42a4 4 0 0 1 -1.49 .29h-3.73h0h-1l-1.5 4z" />   <path d="M6 13l1.5 -5" />   <path d="M6 8h8l2 3" />
        SVG;
    }
}