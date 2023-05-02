<?php
require_once(__DIR__ . '/../Icon.php');

class IconShare extends Icon {
    public static function getName(): string {
        return 'share';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M8.7 10.7l6.6 -3.4" />   <path d="M8.7 13.3l6.6 3.4" />
        SVG;
    }
}