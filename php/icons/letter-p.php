<?php
require_once(__DIR__ . '../Icon.php');

class IconLetterP extends Icon {
    public static function getName(): string {
        return 'letter-p';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 20v-16h5.5a4 4 0 0 1 0 9h-5.5" />
        SVG;
    }
}