<?php
require_once('../Icon.php');

class IconPencilMinus extends Icon {
    public static function getName(): string {
        return 'pencil-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 20l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4h4z" />   <path d="M13.5 6.5l4 4" />   <path d="M16 18h4" />
        SVG;
    }
}