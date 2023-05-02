<?php
require_once(__DIR__ . '../Icon.php');

class IconBarrierBlockOff extends Icon {
    public static function getName(): string {
        return 'barrier-block-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 7h8a1 1 0 0 1 1 1v7c0 .27 -.107 .516 -.282 .696" />   <path d="M16 16h-11a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h2" />   <path d="M7 16v4" />   <path d="M7.5 16l4.244 -4.244" />   <path d="M13.745 9.755l2.755 -2.755" />   <path d="M13.5 16l1.249 -1.249" />   <path d="M16.741 12.759l3.259 -3.259" />   <path d="M4 13.5l4.752 -4.752" />   <path d="M17 17v3" />   <path d="M5 20h4" />   <path d="M15 20h4" />   <path d="M17 7v-2" />   <path d="M3 3l18 18" />
        SVG;
    }
}