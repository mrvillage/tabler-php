<?php
require_once('../Icon.php');

class IconShape extends Icon {
    public static function getName(): string {
        return 'shape';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 7l0 10" />   <path d="M7 5l10 0" />   <path d="M7 19l10 0" />   <path d="M19 7l0 10" />
        SVG;
    }
}