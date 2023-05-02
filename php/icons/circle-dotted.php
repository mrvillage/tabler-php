<?php
require_once(__DIR__ . '/../Icon.php');

class IconCircleDotted extends Icon {
    public static function getName(): string {
        return 'circle-dotted';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7.5 4.21l0 .01" />   <path d="M4.21 7.5l0 .01" />   <path d="M3 12l0 .01" />   <path d="M4.21 16.5l0 .01" />   <path d="M7.5 19.79l0 .01" />   <path d="M12 21l0 .01" />   <path d="M16.5 19.79l0 .01" />   <path d="M19.79 16.5l0 .01" />   <path d="M21 12l0 .01" />   <path d="M19.79 7.5l0 .01" />   <path d="M16.5 4.21l0 .01" />   <path d="M12 3l0 .01" />
        SVG;
    }
}