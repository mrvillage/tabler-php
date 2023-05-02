<?php
require_once(__DIR__ . '../Icon.php');

class IconInfoSmall extends Icon {
    public static function getName(): string {
        return 'info-small';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 9h.01" />   <path d="M11 12h1v4h1" />
        SVG;
    }
}