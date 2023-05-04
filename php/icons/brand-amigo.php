<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandAmigo extends Icon {
    public static function getName(): string {
        return 'brand-amigo';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M9.591 3.635l-7.13 14.082c-1.712 3.38 1.759 5.45 3.69 3.573l1.86 -1.81c3.142 -3.054 4.959 -2.99 8.039 .11l1.329 1.337c2.372 2.387 5.865 .078 4.176 -3.225l-7.195 -14.067c-1.114 -2.18 -3.666 -2.18 -4.77 0z" />
        SVG;
    }
}