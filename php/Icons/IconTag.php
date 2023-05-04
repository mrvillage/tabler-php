<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTag extends \Tabler\Icon {
    public static function getName(): string {
        return 'tag';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <circle cx="8.5" cy="8.5" r="1" fill="currentColor" />   <path d="M4 7v3.859c0 .537 .213 1.052 .593 1.432l8.116 8.116a2.025 2.025 0 0 0 2.864 0l4.834 -4.834a2.025 2.025 0 0 0 0 -2.864l-8.117 -8.116a2.025 2.025 0 0 0 -1.431 -.593h-3.859a3 3 0 0 0 -3 3z" />
        SVG;
    }
}