<?php
require_once(__DIR__ . '../Icon.php');

class IconFileTextAi extends Icon {
    public static function getName(): string {
        return 'file-text-ai';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 3v4a1 1 0 0 0 1 1h4" />   <path d="M10 21h-3a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v3.5" />   <path d="M9 9h1" />   <path d="M9 13h2.5" />   <path d="M9 17h1" />   <path d="M14 21v-4a2 2 0 1 1 4 0v4" />   <path d="M14 19h4" />   <path d="M21 15v6" />
        SVG;
    }
}