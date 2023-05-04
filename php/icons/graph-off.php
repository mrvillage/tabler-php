<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGraphOff extends Icon {
    public static function getName(): string {
        return 'graph-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h10a2 2 0 0 1 2 2v10m-.586 3.414a2 2 0 0 1 -1.414 .586h-12a2 2 0 0 1 -2 -2v-12c0 -.547 .22 -1.043 .576 -1.405" />   <path d="M7 14l3 -3l2 2l.5 -.5m2 -2l.5 -.5l2 2" />   <path d="M3 3l18 18" />
        SVG;
    }
}