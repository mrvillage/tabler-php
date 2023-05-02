<?php
require_once(__DIR__ . '../Icon.php');

class IconCircleChevronsUp extends Icon {
    public static function getName(): string {
        return 'circle-chevrons-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 15l3 -3l3 3" />   <path d="M9 11l3 -3l3 3" />   <path d="M12 21a9 9 0 1 0 -.265 0l.265 0z" />
        SVG;
    }
}