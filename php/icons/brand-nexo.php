<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandNexo extends Icon {
    public static function getName(): string {
        return 'brand-nexo';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 3l5 3v12l-5 3l-10 -6v-6l10 6v-6l-5 -3z" />   <path d="M12 6l-5 -3l-5 3v12l5 3l4.7 -3.13" />
        SVG;
    }
}