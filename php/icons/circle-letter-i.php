<?php
require_once('../Icon.php');

class IconCircleLetterI extends Icon {
    public static function getName(): string {
        return 'circle-letter-i';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 8v8" />
        SVG;
    }
}