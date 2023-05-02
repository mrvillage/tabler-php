<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowRightSquare extends Icon {
    public static function getName(): string {
        return 'arrow-right-square';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 12l14 0" />   <path d="M18 15l3 -3l-3 -3" />   <path d="M3 10h4v4h-4z" />
        SVG;
    }
}