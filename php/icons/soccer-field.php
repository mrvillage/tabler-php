<?php
require_once(__DIR__ . '../Icon.php');

class IconSoccerField extends Icon {
    public static function getName(): string {
        return 'soccer-field';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M3 9h3v6h-3z" />   <path d="M18 9h3v6h-3z" />   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M12 5l0 14" />
        SVG;
    }
}