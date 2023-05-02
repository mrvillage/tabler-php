<?php
require_once(__DIR__ . '/../Icon.php');

class IconOvalVerticalFilled extends Icon {
    public static function getName(): string {
        return 'oval-vertical-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5c-5.457 0 -10 3.028 -10 7s4.543 7 10 7s10 -3.028 10 -7s-4.543 -7 -10 -7z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}