<?php
require_once(__DIR__ . '../Icon.php');

class IconBaguette extends Icon {
    public static function getName(): string {
        return 'baguette';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.628 11.283l5.644 -5.637c2.665 -2.663 5.924 -3.747 8.663 -1.205l.188 .181a2.987 2.987 0 0 1 0 4.228l-11.287 11.274a3 3 0 0 1 -4.089 .135l-.143 -.135c-2.728 -2.724 -1.704 -6.117 1.024 -8.841z" />   <path d="M9.5 7.5l1.5 3.5" />   <path d="M6.5 10.5l1.5 3.5" />   <path d="M12.5 4.5l1.5 3.5" />
        SVG;
    }
}