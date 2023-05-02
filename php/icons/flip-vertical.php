<?php
require_once(__DIR__ . '/../Icon.php');

class IconFlipVertical extends Icon {
    public static function getName(): string {
        return 'flip-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3l0 18" />   <path d="M16 7l0 10l5 0l-5 -10" />   <path d="M8 7l0 10l-5 0l5 -10" />
        SVG;
    }
}