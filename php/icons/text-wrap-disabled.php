<?php
require_once('../Icon.php');

class IconTextWrapDisabled extends Icon {
    public static function getName(): string {
        return 'text-wrap-disabled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6l10 0" />   <path d="M4 18l10 0" />   <path d="M4 12h17l-3 -3m0 6l3 -3" />
        SVG;
    }
}