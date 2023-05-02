<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowUp extends Icon {
    public static function getName(): string {
        return 'arrow-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5l0 14" />   <path d="M18 11l-6 -6" />   <path d="M6 11l6 -6" />
        SVG;
    }
}