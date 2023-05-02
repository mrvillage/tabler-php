<?php
require_once(__DIR__ . '/../Icon.php');

class IconMinusVertical extends Icon {
    public static function getName(): string {
        return 'minus-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5v14" />
        SVG;
    }
}