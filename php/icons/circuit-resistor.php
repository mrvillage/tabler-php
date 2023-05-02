<?php
require_once(__DIR__ . '../Icon.php');

class IconCircuitResistor extends Icon {
    public static function getName(): string {
        return 'circuit-resistor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 12h2l2 -5l3 10l3 -10l3 10l3 -10l1.5 5h2.5" />
        SVG;
    }
}