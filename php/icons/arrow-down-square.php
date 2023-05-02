<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowDownSquare extends Icon {
    public static function getName(): string {
        return 'arrow-down-square';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 7v14" />   <path d="M9 18l3 3l3 -3" />   <path d="M14 3v4h-4v-4z" />
        SVG;
    }
}