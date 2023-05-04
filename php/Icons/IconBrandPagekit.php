<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandPagekit extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-pagekit';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.077 20h-5.077v-16h11v14h-5.077" />
        SVG;
    }
}