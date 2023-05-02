<?php
require_once(__DIR__ . '/../Icon.php');

class IconPrompt extends Icon {
    public static function getName(): string {
        return 'prompt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 7l5 5l-5 5" />   <path d="M13 17l6 0" />
        SVG;
    }
}