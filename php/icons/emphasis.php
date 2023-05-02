<?php
require_once('../Icon.php');

class IconEmphasis extends Icon {
    public static function getName(): string {
        return 'emphasis';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 5h-8v10h8m-1 -5h-7" />   <path d="M6 20l0 .01" />   <path d="M10 20l0 .01" />   <path d="M14 20l0 .01" />   <path d="M18 20l0 .01" />
        SVG;
    }
}