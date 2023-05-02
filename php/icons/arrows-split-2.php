<?php
require_once('../Icon.php');

class IconArrowsSplit2 extends Icon {
    public static function getName(): string {
        return 'arrows-split-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 17h-5.397a5 5 0 0 1 -4.096 -2.133l-.514 -.734a5 5 0 0 0 -4.096 -2.133h-3.897" />   <path d="M21 7h-5.395a5 5 0 0 0 -4.098 2.135l-.51 .73a5 5 0 0 1 -4.097 2.135h-3.9" />   <path d="M18 10l3 -3l-3 -3" />   <path d="M18 20l3 -3l-3 -3" />
        SVG;
    }
}