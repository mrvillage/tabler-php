<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandVisualStudio extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-visual-studio';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 8l2 -1l10 13l4 -2v-12l-4 -2l-10 13l-2 -1z" />
        SVG;
    }
}