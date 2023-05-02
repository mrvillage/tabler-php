<?php
require_once('../Icon.php');

class IconLetterY extends Icon {
    public static function getName(): string {
        return 'letter-y';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 4l5 9l5 -9" />   <path d="M12 13l0 7" />
        SVG;
    }
}