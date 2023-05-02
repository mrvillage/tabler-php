<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowDownRhombus extends Icon {
    public static function getName(): string {
        return 'arrow-down-rhombus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 8v13" />   <path d="M15 18l-3 3l-3 -3" />   <path d="M14.5 5.5l-2.5 -2.5l-2.5 2.5l2.5 2.5z" />
        SVG;
    }
}