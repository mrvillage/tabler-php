<?php
require_once(__DIR__ . '/../Icon.php');

class IconLogicBuffer extends Icon {
    public static function getName(): string {
        return 'logic-buffer';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 12h-5" />   <path d="M2 9h5" />   <path d="M2 15h5" />   <path d="M7 5l10 7l-10 7z" />
        SVG;
    }
}