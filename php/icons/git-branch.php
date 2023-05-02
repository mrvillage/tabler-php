<?php
require_once(__DIR__ . '/../Icon.php');

class IconGitBranch extends Icon {
    public static function getName(): string {
        return 'git-branch';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 8l0 8" />   <path d="M9 18h6a2 2 0 0 0 2 -2v-5" />   <path d="M14 14l3 -3l3 3" />
        SVG;
    }
}