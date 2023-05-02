<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowDownBar extends Icon {
    public static function getName(): string {
        return 'arrow-down-bar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3v18" />   <path d="M9 18l3 3l3 -3" />   <path d="M9 3h6" />
        SVG;
    }
}