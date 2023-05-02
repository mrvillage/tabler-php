<?php
require_once('../Icon.php');

class IconHttpConnect extends Icon {
    public static function getName(): string {
        return 'http-connect';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 10a2 2 0 1 0 -4 0v4a2 2 0 1 0 4 0" />   <path d="M17 16v-8l4 8v-8" />   <path d="M12 8a2 2 0 0 1 2 2v4a2 2 0 1 1 -4 0v-4a2 2 0 0 1 2 -2z" />
        SVG;
    }
}