<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHomeLink extends Icon {
    public static function getName(): string {
        return 'home-link';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.085 11.085l-8.085 -8.085l-9 9h2v7a2 2 0 0 0 2 2h4.5" />   <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 1.807 1.143" />   <path d="M21 21m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M21 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M16 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M21 16l-5 3l5 2" />
        SVG;
    }
}