<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlant2Off extends Tabler\Icon {
    public static function getName(): string {
        return 'plant-2-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 9c0 5.523 4.477 10 10 10a9.953 9.953 0 0 0 5.418 -1.593m2.137 -1.855a9.961 9.961 0 0 0 2.445 -6.552" />   <path d="M12 19c0 -1.988 .58 -3.84 1.58 -5.397m1.878 -2.167a9.961 9.961 0 0 1 6.542 -2.436" />   <path d="M2 9a10 10 0 0 1 10 10" />   <path d="M12 4a9.7 9.7 0 0 1 3 7.013" />   <path d="M9.01 11.5a9.696 9.696 0 0 1 .163 -2.318m1.082 -2.942a9.696 9.696 0 0 1 1.745 -2.24" />   <path d="M3 3l18 18" />
        SVG;
    }
}