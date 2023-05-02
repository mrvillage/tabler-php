<?php
require_once(__DIR__ . '../Icon.php');

class IconBoxMargin extends Icon {
    public static function getName(): string {
        return 'box-margin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8h8v8h-8z" />   <path d="M4 4v.01" />   <path d="M8 4v.01" />   <path d="M12 4v.01" />   <path d="M16 4v.01" />   <path d="M20 4v.01" />   <path d="M4 20v.01" />   <path d="M8 20v.01" />   <path d="M12 20v.01" />   <path d="M16 20v.01" />   <path d="M20 20v.01" />   <path d="M20 16v.01" />   <path d="M20 12v.01" />   <path d="M20 8v.01" />   <path d="M4 16v.01" />   <path d="M4 12v.01" />   <path d="M4 8v.01" />
        SVG;
    }
}