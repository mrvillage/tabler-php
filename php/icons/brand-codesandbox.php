<?php
require_once('../Icon.php');

class IconBrandCodesandbox extends Icon {
    public static function getName(): string {
        return 'brand-codesandbox';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 7.5v9l-4 2.25l-4 2.25l-4 -2.25l-4 -2.25v-9l4 -2.25l4 -2.25l4 2.25z" />   <path d="M12 12l4 -2.25l4 -2.25" />   <path d="M12 12l0 9" />   <path d="M12 12l-4 -2.25l-4 -2.25" />   <path d="M20 12l-4 2v4.75" />   <path d="M4 12l4 2l0 4.75" />   <path d="M8 5.25l4 2.25l4 -2.25" />
        SVG;
    }
}