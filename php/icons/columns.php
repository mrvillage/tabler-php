<?php
require_once('../Icon.php');

class IconColumns extends Icon {
    public static function getName(): string {
        return 'columns';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6l5.5 0" />   <path d="M4 10l5.5 0" />   <path d="M4 14l5.5 0" />   <path d="M4 18l5.5 0" />   <path d="M14.5 6l5.5 0" />   <path d="M14.5 10l5.5 0" />   <path d="M14.5 14l5.5 0" />   <path d="M14.5 18l5.5 0" />
        SVG;
    }
}