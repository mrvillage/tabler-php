<?php
require_once(__DIR__ . '../Icon.php');

class IconLetterT extends Icon {
    public static function getName(): string {
        return 'letter-t';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 4l12 0" />   <path d="M12 4l0 16" />
        SVG;
    }
}