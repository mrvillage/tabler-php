<?php
require_once(__DIR__ . '/../Icon.php');

class IconActivity extends Icon {
    public static function getName(): string {
        return 'activity';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12h4l3 8l4 -16l3 8h4" />
        SVG;
    }
}