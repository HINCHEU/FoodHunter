<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/jlnavbar.html.twig */
class __TwigTemplate_09a859d0b38736d0351162489f89cf1a1c33fcdee1df361b97f71b6e1947bb30 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        try {            // line 2
            $context["menu"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "instance", [0 => ($context["particle"] ?? null)], "method");
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "<div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        $context["sec_id"] = twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "section", []));
        // line 8
        echo "
";
        // line 9
        if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && $this->getAttribute(($context["particle"] ?? null), "section", []))) {
            // line 10
            ob_start(function () { return ''; });
            // line 11
            echo "    jlUIkit.sticky('";
            echo twig_escape_filter($this->env, ($context["sec_id"] ?? null), "html", null, true);
            echo "', {
    ";
            // line 12
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) == "stickyonscroll")) {
                // line 13
                echo "    showOnUp: true,
    animation: 'jl-animation-slide-top',
    ";
            }
            // line 16
            echo "    ";
            if ($this->getAttribute(($context["particle"] ?? null), "media", [])) {
                // line 17
                echo "    media: '@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "media", []), "html", null, true);
                echo "',
    ";
            }
            // line 19
            echo "    top: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "top", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "top", []), 0)) : (0)), "html", null, true);
            echo "',
    offset: ";
            // line 20
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "offset", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "offset", []), 0)) : (0)), "html", null, true);
            echo "
} )
";
            $context["inline_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineScript", [0 => ($context["inline_js"] ?? null), 1 => 10, 2 => "footer"], "method");
        }
        // line 25
        echo "
";
        // line 26
        if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) || $this->getAttribute(($context["particle"] ?? null), "m_sticky", []))) {
            // line 27
            $context["sticky_navbar"] = ('' === $tmp = "html {height: auto;}") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 28
            $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["sticky_navbar"] ?? null), 1 => 0], "method");
        }
        // line 30
        ob_start(function () { return ''; });
        // line 31
        ob_start(function () { return ''; });
        // line 32
        if (($this->getAttribute(($context["particle"] ?? null), "main_nav_margin", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])))) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .g-container .g-main-nav { margin: 0; }";
        }
        // line 33
        if (($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_divider", []) && $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_divider_color", []))) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav.jl-nav-divider>:not(.jl-nav-header,.jl-nav-divider)+:not(.jl-nav-header,.jl-nav-divider) {border-top: 1px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_divider_color", []));
            echo ";}";
        }
        // line 34
        if ($this->getAttribute(($context["particle"] ?? null), "navbar_height", [])) {
            // line 35
            echo "    #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-item, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-nav>li>a,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-nav>li>div.g-menu-item-container,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-toggle {min-height: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_height", []));
            echo "}
";
        }
        // line 37
        if ($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) {
            // line 38
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_color", [])) {
                // line 39
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a {color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_color", []), "html", null, true);
                echo ";}
";
            }
            // line 41
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", [])) {
                // line 42
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-item:not(.jl-logo), #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-toggle { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", []), "html", null, true);
                echo "; }
";
            }
            // line 44
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", [])) {
                // line 45
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav > li > a{text-transform: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []), "html", null, true);
                echo ";}
";
            }
            // line 47
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", [])) {
                // line 48
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li:hover>a, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a.jl-open, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a:focus{color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", []), "html", null, true);
                echo ";}
";
            }
            // line 50
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_active_color", [])) {
                // line 51
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a:active, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li.jl-active>a{ color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
";
            }
            // line 53
            if (((($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []) || $this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []))) {
                // line 54
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown { 
        ";
                // line 55
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", [])) {
                    echo "background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []), "html", null, true);
                    echo ";";
                }
                // line 56
                echo "        ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_color", []), "html", null, true);
                    echo ";";
                }
                // line 57
                echo "        ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) {
                    echo "border-radius: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", []), "html", null, true);
                    echo ";";
                }
                // line 58
                echo "        ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_padding", [])) {
                    echo "padding: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []), "html", null, true);
                    echo ";";
                }
                // line 59
                echo "    }
";
            }
            // line 61
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", [])) {
                // line 62
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav>li>a { padding: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", []));
                echo "; }
";
            }
            // line 64
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                // line 65
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a { ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", []));
                    echo ";";
                }
                echo " }
";
            }
            // line 67
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []), "html", null, true);
                echo ";} ";
            }
            echo " 
";
            // line 68
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", [])) {
                // line 69
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a:focus, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a:hover{ color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", []));
                echo "; }
";
            }
            // line 71
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", [])) {
                // line 72
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li.jl-active>a{ color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", []));
                echo ";}
";
            }
            // line 74
            if ((($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_style", []) == "secondary") && $this->getAttribute(($context["particle"] ?? null), "dropdown_item_hover_background", []))) {
                // line 75
                echo "  #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav-secondary > li > a:hover, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav-secondary > li.jl-active > a {
    background-color: ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_item_hover_background", []));
                echo ";
  }
";
            }
        } else {
            // line 80
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_color", [])) {
                // line 81
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li>.g-menu-item-container,
#";
                // line 82
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-logo { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_color", []), "html", null, true);
                echo "; }
";
            }
            // line 84
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", [])) {
                // line 85
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel > li > .g-menu-item-container, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-toggle { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", []), "html", null, true);
                echo "; }
";
            }
            // line 87
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", [])) {
                // line 88
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel > li > .g-menu-item-container {text-transform: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []), "html", null, true);
                echo ";}
";
            }
            // line 90
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", [])) {
                // line 91
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li:hover>.g-menu-item-container,
#";
                // line 92
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li:hover>.g-menu-item-container {color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", []), "html", null, true);
                echo ";}
";
            }
            // line 94
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_active_color", [])) {
                // line 95
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li.active>.g-menu-item-container { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
#";
                // line 96
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li.active>.g-separator { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
";
                // line 97
                if (twig_test_empty($this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) {
                    // line 98
                    echo "    #";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo " .g-main-nav .g-toplevel > li:not(.g-menu-item-type-particle):not(.g-menu-item-type-module).active > .g-menu-item-container {color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                    echo ";}
";
                }
            }
            // line 101
            if (((($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []) || $this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []))) {
                // line 102
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-dropdown { 
";
                // line 103
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", [])) {
                    // line 104
                    echo "    background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []), "html", null, true);
                    echo ";
";
                }
                // line 106
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) {
                    // line 107
                    echo "    color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_color", []), "html", null, true);
                    echo ";
";
                }
                // line 109
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) {
                    // line 110
                    echo "    border-radius: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", []), "html", null, true);
                    echo ";
";
                }
                // line 112
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_padding", [])) {
                    // line 113
                    echo "    padding: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []), "html", null, true);
                    echo ";
";
                }
                // line 115
                echo " }
";
            }
            // line 117
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                // line 118
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", []));
                    echo ";";
                }
                echo " }
";
            }
            // line 120
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []), "html", null, true);
                echo ";} ";
            }
            echo " 
";
            // line 121
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", [])) {
                // line 122
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container:focus,#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container:hover { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", []));
                echo "; }
";
            }
            // line 124
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", [])) {
                // line 125
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li:not(.g-menu-item-type-particle):not(.g-menu-item-type-module).active .g-menu-item-container { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", []));
                echo ";}
";
            }
            // line 127
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                // line 128
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container {font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []));
                echo ";}
";
            }
            // line 130
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", [])) {
                // line 131
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { padding: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", []));
                echo "; }
";
            }
        }
        // line 134
        if ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom") &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "ct_container_width", [])))) {
            // line 135
            echo "    #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .tm-header .g-container { max-width: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ct_container_width", []));
            echo "; }
";
        }
        // line 137
        if ($this->getAttribute(($context["particle"] ?? null), "nav_bg_color", [])) {
            // line 138
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-container:not(.jl-navbar-transparent) {
    background-color: ";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_bg_color", []), "html", null, true);
            echo ";
}
";
        }
        // line 142
        if ($this->getAttribute(($context["particle"] ?? null), "logo_color", [])) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-logo { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "logo_color", []), "html", null, true);
            echo ";}";
        }
        // line 143
        if ($this->getAttribute(($context["particle"] ?? null), "mobile_text_color", [])) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .tm-header-mobile .jl-logo { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "mobile_text_color", []), "html", null, true);
            echo ";}";
        }
        // line 144
        if (($this->getAttribute(($context["particle"] ?? null), "transparent_header", []) == "light")) {
            // line 145
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-search-toggle, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-toggle {color: rgba(255, 255, 255, 0.8);}#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-search-toggle:hover, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-search-toggle:focus, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-toggle:hover, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-toggle:focus {color: #ffffff;}#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li:hover > a, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a:focus, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a[aria-expanded=\"true\"]{color: #ffffff;}#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a:active, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li.jl-active > a{color: #ffffff;}
";
        }
        // line 147
        if (($this->getAttribute(($context["particle"] ?? null), "search_style", []) == "modal")) {
            // line 148
            echo "#js-search-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-search-large .jl-search-input {background: #f8f8f8;border: none;box-shadow:none}
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["inline_css"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 152
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["inline_css"] ?? null), 1 => 0], "method");
        // line 153
        echo "
";
        // line 154
        ob_start(function () { return ''; });
        // line 155
        echo "<a class=\"jl-navbar-toggle jl-navbar-toggle-animate mobile-toggle\" href=\"#mobile-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" jl-toggle=\"animation: jl-animation-fade\" aria-label=\"Open Menu\">
";
        // line 156
        if (($this->getAttribute(($context["particle"] ?? null), "menu_text", []) && ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right"))) {
            echo "<span class=\"jl-margin-small-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_text", []), "html", null, true);
            echo "</span>";
        }
        // line 157
        echo "<span jl-navbar-toggle-icon></span>
";
        // line 158
        if (($this->getAttribute(($context["particle"] ?? null), "menu_text", []) && ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left"))) {
            echo "<span class=\"jl-margin-small-left\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_text", []), "html", null, true);
            echo "</span>";
        }
        // line 159
        echo "</a>
";
        $context["menu_toggle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        echo "
";
        // line 162
        if ($this->getAttribute(($context["particle"] ?? null), "sc_link_target", [])) {
            // line 163
            echo "    ";
            $context["targetAttrib"] = ((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "sc_link_target", []))) . "\"");
            // line 164
            echo "    ";
            $context["targetAttrib"] = ((($this->getAttribute(($context["particle"] ?? null), "sc_link_target", []) == "_blank")) ? ((($context["targetAttrib"] ?? null) . " rel=\"noopener noreferrer\"")) : (($context["targetAttrib"] ?? null)));
        }
        // line 166
        echo "
";
        // line 168
        ob_start(function () { return ''; });
        // line 169
        echo "<ul class=\"jl-flex-inline jl-flex-middle jl-flex-nowrap";
        if ($this->getAttribute(($context["particle"] ?? null), "social_icon_gap", [])) {
            echo " jl-grid-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_icon_gap", []));
        }
        if ($this->getAttribute(($context["particle"] ?? null), "social_inverse", [])) {
            echo " jl-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_inverse", []), "html", null, true);
        }
        echo "\" jl-grid>
";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "social_items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 171
            echo "    ";
            $context["title"] = (( !twig_test_empty($this->getAttribute($context["item"], "social_title", []))) ? (twig_escape_filter($this->env, $this->getAttribute($context["item"], "social_title", []))) : (twig_escape_filter($this->env, $this->getAttribute($context["item"], "social_text", []))));
            // line 172
            echo "    ";
            $context["titleAttrib"] = (( !twig_test_empty(($context["title"] ?? null))) ? (((((" title=\"" . ($context["title"] ?? null)) . "\" aria-label=\"") . ($context["title"] ?? null)) . "\"")) : (""));
            // line 173
            echo "    <li>
        <a class=\"tm-icon";
            // line 174
            echo ((($this->getAttribute(($context["particle"] ?? null), "sc_icon_button", []) && twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "icons_only"]))) ? (" jl-icon-button") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "social_link", []));
            echo "\"";
            echo ($context["targetAttrib"] ?? null);
            echo ($context["titleAttrib"] ?? null);
            echo ">
            ";
            // line 175
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "icons_only"])) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "social_icon", []));
                echo "\"></span>";
            }
            // line 176
            echo "            ";
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "text_only"])) {
                echo "<span class=\"g-social-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "social_text", []));
                echo "</span>";
            }
            // line 177
            echo "        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "</ul>
";
        $context["social_icons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 182
        echo "
";
        // line 183
        $context["theme_container"] = ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("g-container") : (("jl-container" . ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])))) : ("")))));
        // line 184
        echo "
";
        // line 186
        ob_start(function () { return ''; });
        // line 187
        if (($this->getAttribute(($context["particle"] ?? null), "search_style", []) == "default")) {
            // line 188
            echo "  ";
            if ( !$this->getAttribute(($context["joomla"] ?? null), "checkVersion", [0 => "4.0"], "method")) {
                // line 189
                echo "    <form class=\"jl-search jl-search-default\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php"], "method"), "html", null, true);
                echo "\" method=\"post\">
      <span jl-search-icon class=\"";
                // line 190
                echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
      <input class=\"jl-search-input\" type=\"search\" name=\"searchword\" placeholder=\"";
                // line 191
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\">
      <input type=\"hidden\" name=\"task\" value=\"search\" />
      <input type=\"hidden\" name=\"option\" value=\"com_search\" />
      <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 194
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
    </form>
  ";
            } else {
                // line 197
                echo "    <form class=\"jl-search jl-search-default\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php?option=com_finder&view=search"], "method"), "html", null, true);
                echo "\" method=\"get\" role=\"search\">
      <span jl-search-icon class=\"";
                // line 198
                echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
      <input id=\"js-search-";
                // line 199
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-search-input\" type=\"search\" name=\"q\" placeholder=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\">
      <input type=\"hidden\" name=\"option\" value=\"com_finder\" />
      <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 201
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
    </form>  
  ";
            }
        } else {
            // line 205
            echo "<a href=\"#js-search-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-search-toggle\" jl-search-icon jl-toggle title=\"Search Icon\"></a>
<div id=\"js-search-";
            // line 206
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-modal-full jl-modal\" jl-modal>
  <div class=\"jl-modal-dialog jl-flex jl-flex-center jl-flex-middle\" jl-height-viewport>
    <button class=\"jl-modal-close-full jl-close-large\" type=\"button\" jl-close></button>
    ";
            // line 209
            if ( !$this->getAttribute(($context["joomla"] ?? null), "checkVersion", [0 => "4.0"], "method")) {
                // line 210
                echo "        <form class=\"jl-search jl-search-large\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php"], "method"), "html", null, true);
                echo "\" method=\"post\">
        <input class=\"jl-search-input jl-text-center\" type=\"search\" name=\"searchword\" placeholder=\"";
                // line 211
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\" autofocus>
        <input type=\"hidden\" name=\"task\" value=\"search\" />
        <input type=\"hidden\" name=\"option\" value=\"com_search\" />
        <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 214
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
        </form>
    ";
            } else {
                // line 217
                echo "        <form class=\"jl-search jl-search-large\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php?option=com_finder&view=search"], "method"), "html", null, true);
                echo "\" method=\"get\" role=\"search\">
        <input id=\"";
                // line 218
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-search-input jl-text-center\" type=\"search\" name=\"q\" placeholder=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\" autofocus>
        <input type=\"hidden\" name=\"option\" value=\"com_finder\" />
        <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 220
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
        </form>  
    ";
            }
            // line 223
            echo "  </div>
</div>
";
        }
        $context["navbar_search"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 227
        echo "
";
        // line 235
        echo "
";
        // line 253
        echo "
";
        // line 264
        echo "
";
        // line 410
        echo "
";
        // line 438
        echo "
";
        // line 447
        echo "
";
        // line 479
        echo "
";
        // line 480
        $context["macro"] = $this;
        // line 481
        echo "
";
        // line 482
        $context["url"] = _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "url", [])), $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"));
        // line 483
        if ((($context["url"] ?? null) == $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"))) {
            $context["rel"] = "rel=\"home\"";
        }
        // line 484
        $context["logo_init"] = ($this->getAttribute(($context["particle"] ?? null), "image", []) || $this->getAttribute(($context["particle"] ?? null), "text", []));
        // line 485
        echo "
";
        // line 486
        ob_start(function () { return ''; });
        // line 487
        echo "
    ";
        // line 488
        $context["class"] = (($this->getAttribute(($context["particle"] ?? null), "class", [])) ? ((("class=\"" . $this->getAttribute(($context["particle"] ?? null), "class", [])) . "\"")) : (""));
        // line 489
        echo "    ";
        $context["height"] = (($this->getAttribute(($context["particle"] ?? null), "height", [])) ? ((("style=\"max-height: " . $this->getAttribute(($context["particle"] ?? null), "height", [])) . "\"")) : (""));
        // line 490
        echo "
    ";
        // line 491
        if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
            // line 492
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
            echo "\" ";
            echo ((array_key_exists("height", $context)) ? (_twig_default_filter(($context["height"] ?? null), "")) : (""));
            echo " alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\"";
            echo (($this->getAttribute(($context["particle"] ?? null), "svg_support", [])) ? (" jl-svg") : (""));
            echo ">
    ";
        } else {
            // line 494
            echo "        ";
            echo $this->getAttribute(($context["particle"] ?? null), "text", []);
            echo " 
    ";
        }
        // line 496
        echo "
";
        $context["logo_render"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 498
        echo "
";
        // line 499
        ob_start(function () { return ''; });
        // line 500
        echo "
    ";
        // line 501
        $context["class"] = (($this->getAttribute(($context["particle"] ?? null), "class", [])) ? ((("class=\"" . $this->getAttribute(($context["particle"] ?? null), "class", [])) . "\"")) : (""));
        echo "    
    ";
        // line 502
        $context["image_height"] = (($this->getAttribute(($context["particle"] ?? null), "image_height", [])) ? ((("style=\"max-height: " . $this->getAttribute(($context["particle"] ?? null), "image_height", [])) . "\"")) : (""));
        // line 503
        echo "
    ";
        // line 504
        if ($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) {
            // line 505
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])));
            echo "\" ";
            echo ((array_key_exists("image_height", $context)) ? (_twig_default_filter(($context["image_height"] ?? null), "")) : (""));
            echo " alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\"";
            echo (($this->getAttribute(($context["particle"] ?? null), "svg_support", [])) ? (" jl-svg") : (""));
            echo ">
    ";
        } else {
            // line 507
            echo "        ";
            echo $this->getAttribute(($context["particle"] ?? null), "text", []);
            echo " 
    ";
        }
        // line 509
        echo "
";
        $context["mobile_logo_render"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 511
        echo "
";
        // line 513
        echo "
";
        // line 514
        if ($this->getAttribute($this->getAttribute(($context["menu"] ?? null), "root", []), "count", [], "method")) {
            // line 515
            echo "
<div id=\"";
            // line 516
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"tm-header";
            echo (($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) ? (" menu-extended") : (" menu-simple"));
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "layout", []), [0 => "left", 1 => "center", 2 => "right"])) {
                echo " horizontal-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", []));
            }
            echo " jl-visible@";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
            if ($this->getAttribute(($context["particle"] ?? null), "transparent_header", [])) {
                echo " jl-header-overlay";
            }
            echo "\" jl-header>

";
            // line 518
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "section", [])))) {
                // line 519
                echo "<div jl-sticky media=\"@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
                echo "\"";
                echo ((($this->getAttribute(($context["particle"] ?? null), "sticky", []) == "stickyonscroll")) ? (" show-on-up animation=\"jl-animation-slide-top\"") : (""));
                if ($this->getAttribute(($context["particle"] ?? null), "top", [])) {
                    echo " top=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "top", []));
                    echo "\"";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "offset", [])) {
                    echo " offset=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offset", []));
                    echo "\"";
                }
                echo " cls-active=\"jl-navbar-sticky\"";
                if ($this->getAttribute(($context["particle"] ?? null), "transparent_header", [])) {
                    echo " cls-inactive=\"jl-navbar-transparent jl-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "transparent_header", []));
                    echo "\"";
                }
                echo " sel-target=\".jl-navbar-container\">
";
            }
            // line 521
            echo "
<div class=\"jl-navbar-container";
            // line 522
            if (($this->getAttribute(($context["particle"] ?? null), "transparent_header", []) &&  !$this->getAttribute(($context["particle"] ?? null), "sticky", []))) {
                echo " jl-navbar-transparent jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "transparent_header", []));
            }
            echo "\">

";
            // line 524
            if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
                // line 525
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, ($context["theme_container"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 526
                echo ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("<div class=\"navbar-wrapper\">") : (""));
                echo "
";
            }
            // line 528
            echo "
    <nav class=\"jl-navbar";
            // line 529
            echo (($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) ? (" jl-main-nav") : (" g-main-nav"));
            echo "\"";
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) {
                echo " jl-navbar=\"boundary: #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar;";
                ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_alignment", []))) ? (print (twig_escape_filter($this->env, ((" align: " . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_alignment", []))) . ";"), "html", null, true))) : (print ("")));
                echo (((($this->getAttribute(($context["particle"] ?? null), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "hoverExpand", []), "true")) : ("true"))) ? ("") : (" mode: click"));
                echo "\"";
            } else {
                echo (($this->getAttribute(($context["particle"] ?? null), "mobileTarget", [])) ? (" data-g-mobile-target") : (""));
                echo " data-g-hover-expand=\"";
                echo (((($this->getAttribute(($context["particle"] ?? null), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "hoverExpand", []), "true")) : ("true"))) ? ("true") : ("false"));
                echo "\"";
            }
            echo ">

        ";
            // line 531
            if ((($context["logo_init"] ?? null) || ($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left"))) {
                // line 532
                echo "        <div class=\"jl-navbar-left\">

        ";
                // line 534
                if (($context["logo_init"] ?? null)) {
                    // line 535
                    echo "            <a class=\"jl-navbar-item jl-logo\" href=\"";
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "text", [])) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                        echo "\"";
                    }
                    echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
                    echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                    echo ">
                ";
                    // line 536
                    echo twig_escape_filter($this->env, ($context["logo_render"] ?? null), "html", null, true);
                    echo "
            </a>
        ";
                }
                // line 539
                echo "
        ";
                // line 540
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left")) {
                    // line 541
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 542
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 545
                echo "
        ";
                // line 546
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 547
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 548
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 551
                echo "
        ";
                // line 552
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 553
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child custom\">
                ";
                    // line 555
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 559
                echo "
        </div>
        ";
            }
            // line 562
            echo "
        ";
            // line 563
            if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center")) {
                // line 564
                echo "
        <div class=\"jl-navbar-center\">

        ";
                // line 567
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center")) {
                    // line 568
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 569
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 572
                echo "
        ";
                // line 573
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 574
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 575
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 578
                echo "
        ";
                // line 579
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 580
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 582
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 586
                echo "
        </div>
        ";
            }
            // line 589
            echo "
        ";
            // line 590
            if ((((($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "header") || ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "header")) || ($this->getAttribute(($context["particle"] ?? null), "html_pos", []) == "header")) || ($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right"))) {
                // line 591
                echo "        <div class=\"jl-navbar-right\">

        ";
                // line 593
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right")) {
                    // line 594
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 595
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 598
                echo "
        ";
                // line 599
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 600
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 601
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 604
                echo "
        ";
                // line 605
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 606
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 608
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 612
                echo "
        ";
                // line 613
                if (($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "header")) {
                    // line 614
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 615
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 618
                echo "
        ";
                // line 619
                if ((($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "header") && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 620
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 622
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 626
                echo "
        </div>
        ";
            }
            // line 629
            echo "
    </nav>

";
            // line 632
            if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
                // line 633
                echo "        ";
                echo ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("</div>") : (""));
                echo "
    </div>
";
            }
            // line 636
            echo "</div>

";
            // line 638
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "section", [])))) {
                // line 639
                echo "</div>
";
            }
            // line 641
            echo "
</div>
";
        }
        // line 644
        echo "
";
        // line 646
        echo "
<div class=\"";
        // line 647
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            echo "tm-header-mobile ";
        }
        echo "jl-hidden@";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
        echo "\">

";
        // line 649
        if ($this->getAttribute(($context["particle"] ?? null), "m_sticky", [])) {
            // line 650
            echo "<div jl-sticky";
            echo ((($this->getAttribute(($context["particle"] ?? null), "m_sticky", []) == "stickyonscroll")) ? (" show-on-up animation=\"jl-animation-slide-top\"") : (""));
            if ($this->getAttribute(($context["particle"] ?? null), "ms_top", [])) {
                echo " top=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ms_top", []));
                echo "\"";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "ms_offset", [])) {
                echo " offset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ms_offset", []));
                echo "\"";
            }
            echo " cls-active=\"jl-navbar-sticky\" sel-target=\".jl-navbar-container\">
";
        }
        // line 652
        echo "
<div class=\"jl-navbar-container\">

    ";
        // line 655
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            // line 656
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["theme_container"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 658
        echo "
        <nav class=\"jl-navbar\" jl-navbar=\"container: .tm-header-mobile\">

            ";
        // line 661
        if ((($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "left") || ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left"))) {
            // line 662
            echo "
                <div class=\"jl-navbar-left\">

                    ";
            // line 665
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "left")) {
                // line 666
                echo "                    <a class=\"jl-navbar-item jl-logo\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\"";
                if ($this->getAttribute(($context["particle"] ?? null), "text", [])) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                    echo "\"";
                }
                echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
                echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                echo ">
                        ";
                // line 667
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
                echo "
                    </a>
                    ";
            }
            // line 670
            echo "
                    ";
            // line 671
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left")) {
                // line 672
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["menu_toggle"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 674
            echo "
                </div>
            ";
        }
        // line 677
        echo "
            ";
        // line 678
        if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "center")) {
            // line 679
            echo "                <div class=\"jl-navbar-center\">
                    <a class=\"jl-navbar-item jl-logo\" href=\"";
            // line 680
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\"";
            if ($this->getAttribute(($context["particle"] ?? null), "text", [])) {
                echo " title=\"";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                echo "\"";
            }
            echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
            echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
            echo ">
                        ";
            // line 681
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
        }
        // line 685
        echo "
            ";
        // line 686
        if ((($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "right") || ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right"))) {
            // line 687
            echo "                <div class=\"jl-navbar-right\">
                    ";
            // line 688
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "right")) {
                // line 689
                echo "                    <a class=\"jl-navbar-item jl-logo\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\"";
                if ($this->getAttribute(($context["particle"] ?? null), "text", [])) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                    echo "\"";
                }
                echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
                echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                echo ">
                        ";
                // line 690
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
                echo "
                    </a>
                    ";
            }
            // line 693
            echo "
                    ";
            // line 694
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right")) {
                // line 695
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["menu_toggle"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 697
            echo "                </div>
            ";
        }
        // line 699
        echo "
        </nav>

    ";
        // line 702
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            // line 703
            echo "        </div>
    ";
        }
        // line 705
        echo "
</div>

";
        // line 708
        if (($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) == "dropdown")) {
            // line 709
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate("@particles/jlnavcanvas.html.twig", "@particles/jlnavbar.html.twig", 709);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
        }
        // line 711
        if ($this->getAttribute(($context["particle"] ?? null), "m_sticky", [])) {
            // line 712
            echo "</div>
";
        }
        // line 714
        echo "
";
        // line 715
        if (($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) != "dropdown")) {
            // line 716
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
            try {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =                 $this->loadTemplate("@particles/jlnavcanvas.html.twig", "@particles/jlnavbar.html.twig", 716);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
            }
        }
        // line 718
        echo "
</div>
";
    }

    // line 228
    public function getgetCustomWidth($__item__ = null, $__menu__ = null, $__mode__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "mode" => $__mode__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 229
            if ((((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") &&  !((($context["dropdown_type"] ?? null) == "fullwidth") && ($this->getAttribute(($context["item"] ?? null), "level", []) > ($context["start_level"] ?? null))))) {
                // line 230
                if ((($context["mode"] ?? null) == "item")) {
                    echo " style=\"position: relative;\"";
                } elseif ((                // line 231
($context["mode"] ?? null) == "submenu")) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", []), "html", null, true);
                    echo ";\" data-g-item-width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", []), "html", null, true);
                    echo "\"";
                }
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 236
    public function getdisplayParticle($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 237
            echo "    ";
            try {                // line 238
                echo "    ";
                $context["in_particle"] = (((($this->getAttribute(($context["context"] ?? null), "in_particle", [], "any", true, true) &&  !(null === $this->getAttribute(($context["context"] ?? null), "in_particle", [])))) ? ($this->getAttribute(($context["context"] ?? null), "in_particle", [])) : (0)) + 1);
                // line 239
                echo "    ";
                if ((($context["in_particle"] ?? null) > 5)) {
                    // line 240
                    echo "        ";
                    throw new \RuntimeException("Particle loop detected"                    ,                     500                    );
                    // line 241
                    echo "    ";
                }
                // line 242
                echo "
    ";
                // line 243
                $context["context"] = twig_array_merge(($context["context"] ?? null), ["particle" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "in_particle" => ($context["in_particle"] ?? null)]);
                // line 244
                echo "    ";
                $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "block", []), "class", []);
                // line 245
                echo "    <div class=\"menu-item-particle";
                ((($context["classes"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["classes"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
        ";
                // line 246
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = null;
                try {
                    $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =                     $this->loadTemplate([0 => (("particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig")], "@particles/jlnavbar.html.twig", 246);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) {
                    $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b->display(twig_to_array(                    // line 247
($context["context"] ?? null)));
                }
                // line 248
                echo "    </div>
    ";
            } catch (\Exception $e) {
                if ($context['gantry']->debug()) throw $e;
                if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
                $context['e'] = $e;
                // line 250
                echo "        <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
                echo "</div>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 254
    public function getdisplayTitle($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 255
            echo "    ";
            if (( !$this->getAttribute(($context["item"] ?? null), "icon_only", []) ||  !($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) {
                // line 256
                echo "        ";
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", [])) {
                    // line 257
                    echo "        <div>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        <div class=\"jl-navbar-subtitle\">";
                    // line 258
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", []), "html", null, true);
                    echo "</div></div>
        ";
                } else {
                    // line 260
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        ";
                }
                // line 262
                echo "    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 265
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 266
            echo "    ";
            $context["self"] = $this;
            // line 267
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "particle") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "enabled", []))) {
                // line 268
                echo "        ";
                $context["enabled"] = 0;
                // line 269
                echo "    ";
            }
            // line 270
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "visible", []) && $this->getAttribute(($context["item"] ?? null), "enabled", [])) && ((array_key_exists("enabled", $context)) ? (_twig_default_filter(($context["enabled"] ?? null), 1)) : (1)))) {
                // line 271
                echo "        ";
                $context["title"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) || $this->getAttribute(($context["item"] ?? null), "link_title", []))) ? (((" title=\"" . twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "link_title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "link_title", []), $this->getAttribute(($context["item"] ?? null), "title", []))) : ($this->getAttribute(($context["item"] ?? null), "title", []))))) . "\"")) : (""));
                // line 272
                echo "        ";
                $context["label"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) && ($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) ? (((" aria-label=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []))) . "\"")) : (""));
                // line 273
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 274
                    echo "        ";
                    $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" jl-active") : (""));
                    // line 275
                    echo "        ";
                } else {
                    // line 276
                    echo "        ";
                    $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" active") : (""));
                    // line 277
                    echo "        ";
                }
                // line 278
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", []) == ($context["start_level"] ?? null))) ? ((" g-" . $this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method"))) : (""));
                // line 279
                echo "        ";
                $context["parrentIcon"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "parrentIcon", []);
                // line 280
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 281
                    echo "        ";
                    $context["parent"] = ((($this->getAttribute(($context["item"] ?? null), "hasChildren", [], "method") &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) ? (" jl-parent") : (""));
                    // line 282
                    echo "        ";
                } else {
                    // line 283
                    echo "        ";
                    $context["parent"] = ((($this->getAttribute(($context["item"] ?? null), "hasChildren", [], "method") &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) ? (" g-parent") : (""));
                    // line 284
                    echo "        ";
                }
                echo "        
        
        ";
                // line 286
                $context["target"] = (((($this->getAttribute(($context["item"] ?? null), "target", []) != "_self") || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "forceTarget", []))) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", []))) . "\"")) : (""));
                // line 287
                echo "        ";
                $context["rel"] = $this->getAttribute(($context["item"] ?? null), "rel", []);
                // line 288
                echo "
        ";
                // line 289
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_blank")) {
                    // line 290
                    echo "            ";
                    if (!twig_in_filter("noopener", ($context["rel"] ?? null))) {
                        // line 291
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 292
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noopener");
                        // line 293
                        echo "            ";
                    }
                    // line 294
                    echo "            ";
                    if (!twig_in_filter("noreferrer", ($context["rel"] ?? null))) {
                        // line 295
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 296
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noreferrer");
                        // line 297
                        echo "            ";
                    }
                    // line 298
                    echo "        ";
                }
                // line 299
                echo "
        ";
                // line 300
                $context["listAttributes"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["item"] ?? null), "attributes", []));
                // line 301
                echo "        ";
                $context["linkAttributes"] = "";
                // line 302
                echo "
        ";
                // line 303
                if ($this->getAttribute(($context["item"] ?? null), "link_attributes", [])) {
                    // line 304
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "link_attributes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 305
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attribute"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 306
                            echo "                    ";
                            if (($context["key"] == "rel")) {
                                // line 307
                                echo "                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $context["value"], " "));
                                foreach ($context['_seq'] as $context["_key"] => $context["hVal"]) {
                                    // line 308
                                    echo "                            ";
                                    if (!twig_in_filter($context["hVal"], ($context["rel"] ?? null))) {
                                        // line 309
                                        echo "                                ";
                                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                                        // line 310
                                        echo "                                ";
                                        $context["rel"] = (($context["rel"] ?? null) . $context["hVal"]);
                                        // line 311
                                        echo "                            ";
                                    }
                                    // line 312
                                    echo "                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hVal'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 313
                                echo "                    ";
                            } else {
                                // line 314
                                echo "                        ";
                                $context["linkAttributes"] = (((((($context["linkAttributes"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                                // line 315
                                echo "                    ";
                            }
                            // line 316
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 317
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 318
                    echo "        ";
                }
                // line 319
                echo "
        ";
                // line 321
                echo "        ";
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_nonav")) {
                    // line 322
                    echo "            ";
                    $context["target"] = "target=\"_blank\"";
                    // line 323
                    echo "            ";
                    $context["linkAttributes"] = (($context["linkAttributes"] ?? null) . " onclick=\"window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes'); return false;\"");
                    // line 324
                    echo "        ";
                }
                // line 325
                echo "
        ";
                // line 326
                $context["rel"] = ((($context["rel"] ?? null)) ? (((" rel=\"" . twig_escape_filter($this->env, ($context["rel"] ?? null), "html_attr")) . "\"")) : (""));
                // line 327
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 328
                    echo "        <li class=\"item-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    if ($this->getAttribute(($context["item"] ?? null), "class", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    }
                    if ( !($context["parent"] ?? null)) {
                        if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "separator") && ($this->getAttribute(($context["item"] ?? null), "level", []) != 1))) {
                            echo " jl-nav-divider";
                        } elseif ((($this->getAttribute(($context["item"] ?? null), "type", []) == "heading") && ($this->getAttribute(($context["item"] ?? null), "level", []) != 1))) {
                            echo " jl-nav-header";
                        }
                    }
                    echo "\"";
                    // line 329
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null));
                    // line 330
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
                ";
                    // line 331
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 332
                        echo "                    <a";
                        if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                            echo " class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "anchor_class", []), "html", null, true);
                            echo "\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        if ($this->getAttribute(($context["item"] ?? null), "hash", [])) {
                            echo " jl-scroll";
                        }
                        echo ">
                        ";
                        // line 333
                        if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                            // line 334
                            echo "                            <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                            echo "\" />
                        ";
                        } elseif ($this->getAttribute(                        // line 335
($context["item"] ?? null), "icon", [])) {
                            // line 336
                            echo "                            <i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                            echo "\" aria-hidden=\"true\"></i>
                        ";
                        }
                        // line 338
                        echo "                        ";
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "
                        ";
                        // line 339
                        if (((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) && ($context["parrentIcon"] ?? null))) {
                            // line 340
                            echo "<span jl-navbar-parent-icon></span>";
                        }
                        // line 342
                        echo "                    </a>
                ";
                    } else {
                        // line 344
                        echo "                    ";
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) || ($this->getAttribute(($context["item"] ?? null), "level", []) == 1))) {
                            // line 345
                            echo "                        <a href=\"#\" role=\"button\" class=\"menu__";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "type", []), "html", null, true);
                            if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "anchor_class", []), "html", null, true);
                            }
                            echo "\"";
                            echo (((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                            if ((( !twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) && ($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) && (($this->getAttribute(($context["item"] ?? null), "type", []) == "heading") || ($this->getAttribute(($context["item"] ?? null), "type", []) == "separator")))) {
                                echo " aria-haspopup=\"true\" aria-expanded=\"false\" tabindex=\"0\"";
                            }
                            echo ">
                    ";
                        }
                        // line 347
                        echo "                    ";
                        if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                            // line 348
                            echo "                        ";
                            echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                            echo "
                    ";
                        } elseif (($this->getAttribute(                        // line 349
($context["item"] ?? null), "type", []) == "heading")) {
                            // line 350
                            echo "                        ";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "
                    ";
                        } else {
                            // line 352
                            echo "                    
                    ";
                            // line 353
                            if ((($this->getAttribute(($context["item"] ?? null), "level", []) == 1) || ($context["parent"] ?? null))) {
                                // line 354
                                echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            }
                            // line 356
                            echo "
                    ";
                        }
                        // line 358
                        echo "
                    ";
                        // line 359
                        if (((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) && ($context["parrentIcon"] ?? null))) {
                            // line 360
                            echo "<span jl-navbar-parent-icon></span>";
                        }
                        // line 362
                        echo "
                    ";
                        // line 363
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) || ($this->getAttribute(($context["item"] ?? null), "level", []) == 1))) {
                            // line 364
                            echo "                        </a>
                    ";
                        }
                        // line 366
                        echo " 
                ";
                    }
                    // line 368
                    echo "
        ";
                } else {
                    // line 370
                    echo "        <li class=\"g-menu-item g-menu-item-type-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "type", []), "html", null, true);
                    echo " g-menu-item-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["dropdown"] ?? null), "html", null, true);
                    echo " ";
                    if (($this->getAttribute(($context["item"] ?? null), "url", []) && ($context["parent"] ?? null))) {
                        if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                            echo "g-menu-item-link-parent";
                        }
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    echo "\"";
                    // line 371
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null));
                    // line 372
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
            ";
                    // line 373
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 374
                        echo "                <a class=\"g-menu-item-container";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, (" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        echo ">
            ";
                    } else {
                        // line 376
                        echo "                <div class=\"g-menu-item-container";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, (" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\" data-g-menuparent=\"\"";
                        echo ($context["label"] ?? null);
                        echo ">";
                    }
                    // line 377
                    echo "                ";
                    if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                        // line 378
                        echo "                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\" />
                ";
                    } elseif ($this->getAttribute(                    // line 379
($context["item"] ?? null), "icon", [])) {
                        // line 380
                        echo "                    <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
                ";
                    }
                    // line 382
                    echo "                ";
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 383
                        echo "                    <span class=\"g-menu-item-content\">
                        ";
                        // line 384
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "
                    </span>
                    ";
                        // line 386
                        if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            // line 387
                            echo "<span class=\"g-menu-parent-indicator\" data-g-menuparent=\"\"></span>";
                        }
                        // line 389
                        echo "                ";
                    } else {
                        // line 390
                        echo "                    ";
                        if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                            // line 391
                            echo "                        ";
                            echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                            echo "
                    ";
                        } elseif (($this->getAttribute(                        // line 392
($context["item"] ?? null), "type", []) == "heading")) {
                            // line 393
                            echo "                        <span class=\"g-nav-header g-menu-item-content\"";
                            echo ($context["title"] ?? null);
                            echo ">";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "</span>
                    ";
                        } else {
                            // line 395
                            echo "                        <span class=\"g-separator g-menu-item-content\"";
                            echo ($context["title"] ?? null);
                            echo ">";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "</span>
                    ";
                        }
                        // line 397
                        echo "                    ";
                        if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            // line 398
                            echo "<span class=\"g-menu-parent-indicator\"></span>";
                        }
                        // line 400
                        echo "                ";
                    }
                    // line 401
                    echo "            ";
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        echo "</a>
            ";
                    } else {
                        // line 402
                        echo "</div>";
                    }
                    // line 403
                    echo "            ";
                }
                // line 404
                echo "            ";
                if (($context["parent"] ?? null)) {
                    // line 405
                    echo $context["self"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                }
                // line 407
                echo "        </li>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 411
    public function getdisplayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 412
            echo "    ";
            $context["self"] = $this;
            // line 413
            echo "    ";
            $context["groups"] = ((($this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method") == "standard")) ? ([0 => ($context["item"] ?? null)]) : ($this->getAttribute(($context["item"] ?? null), "groups", [])));
            // line 414
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                // line 415
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                    // line 416
                    echo "        ";
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo "<div>";
                    }
                    // line 417
                    echo "            ";
                    if (($this->getAttribute(($context["item"] ?? null), "level", []) >= 2)) {
                        // line 418
                        echo "                <ul class=\"jl-nav-sub\">
            ";
                    } else {
                        // line 420
                        echo "                <ul class=\"jl-nav jl-nav-";
                        echo (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_nav_style", [])) ? ("secondary") : ("default"));
                        echo (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_nav_divider", [])) ? (" jl-nav-divider") : (""));
                        echo " jl-navbar-dropdown-nav\">
            ";
                    }
                    // line 422
                    echo "                ";
                    echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
            </ul>
        ";
                    // line 424
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo "</div>";
                    }
                    // line 425
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "    
    ";
            } else {
                // line 427
                echo "        <div class=\"g-grid\">
        ";
                // line 428
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                    // line 429
                    echo "            <div class=\"g-block ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('toGrid')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "columnWidth", [0 => $context["column"]], "method")]), "html", null, true);
                    echo "\">
                <ul class=\"g-sublevel\">
                    ";
                    // line 431
                    echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
                </ul>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 435
                echo "        </div>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 439
    public function getdisplayItems($__items__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 440
            echo "    ";
            $context["self"] = $this;
            // line 441
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 442
                echo "        ";
                $context["start_level"] = (($context["start_level"]) ?? ((($context["root_level"]) ?? ($this->getAttribute($context["item"], "level", [])))));
                // line 443
                echo "        ";
                $context["dropdown"] = (($context["dropdown_type"]) ?? ($this->getAttribute($context["item"], "dropdown", [])));
                // line 444
                echo "        ";
                echo $context["self"]->getdisplayItem($context["item"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown"] ?? null), ($context["start_level"] ?? null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 448
    public function getdisplaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 449
            echo "    ";
            $context["self"] = $this;
            // line 450
            echo "    ";
            if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                // line 451
                echo "        ";
                $context["animation"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method"), "g-fade")) : ("g-fade"));
                // line 452
                echo "        ";
                $context["dropdown_offset"] = ((twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_offset", []))) ? ((("offset: " . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_offset", []))) . ";")) : (""));
                // line 453
                echo "        ";
                $context["dropdown_alignment"] = (((twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_alignment", [])) &&  !$this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_stretch", []))) ? ((("pos: bottom-" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_alignment", []))) . ";")) : (""));
                // line 454
                echo "        ";
                $context["navbar_animation"] = (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", [])) ? ((("animation: " . $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", [])) . "; animate-out: true;")) : (""));
                // line 455
                echo "        ";
                $context["dropdown_stretch"] = (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_stretch", [])) ? ("stretch: x; flip: false;") : (""));
                // line 456
                echo "        ";
                if (((((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) == 1) && ( !($context["dropdown_type"] ?? null) == "fullwidth")) || (($context["dropdown_type"] ?? null) == "standard")) || (((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") && (($context["dropdown_type"] ?? null) == "fullwidth")))) {
                    // line 457
                    echo "            ";
                    $context["dropdown_dir"] = ("g-dropdown-" . (($this->getAttribute(($context["item"] ?? null), "dropdown_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "dropdown_dir", []), "right")) : ("right")));
                    // line 458
                    echo "        ";
                }
                // line 459
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 460
                    echo "        ";
                    if (($this->getAttribute(($context["item"] ?? null), "level", []) >= 2)) {
                        // line 461
                        echo "            ";
                        echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                        echo "
        ";
                    } else {
                        // line 463
                        echo "        <div class=\"jl-navbar-dropdown";
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                            echo " jl-navbar-dropdown-width-";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])), "html", null, true);
                        }
                        if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", [])) {
                            echo " jl-text-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", []));
                        }
                        echo "\"";
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 3)) {
                            echo " jl-drop=\"target: #";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "id", []), "html", null, true);
                            echo " .jl-navbar;flip: false;";
                            echo (((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "hoverExpand", []), "true")) : ("true"))) ? ("") : (" mode: click;"));
                            echo twig_escape_filter($this->env, ($context["dropdown_alignment"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["navbar_animation"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_stretch"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_offset"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        if (((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) <= 3) && ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", []) || $this->getAttribute(($context["context"] ?? null), "dropdown_offset", [])))) {
                            echo " jl-dropdown=\"";
                            echo twig_escape_filter($this->env, ($context["navbar_animation"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_stretch"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_alignment"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_offset"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                        echo ">
            ";
                        // line 464
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                            echo "<div class=\"jl-navbar-dropdown-grid jl-child-width-1-";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])), "html", null, true);
                            echo "\" jl-grid>";
                        }
                        // line 465
                        echo "                ";
                        echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                        echo "
            ";
                        // line 466
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                            echo "</div>";
                        }
                        // line 467
                        echo "        </div>
        ";
                    }
                    // line 469
                    echo "        ";
                } else {
                    // line 470
                    echo "        <ul class=\"g-dropdown g-inactive ";
                    echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["dropdown_dir"] ?? null), "html", null, true);
                    if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", [])) {
                        echo " jl-text-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", []));
                    }
                    echo "\"";
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo ">
            <li class=\"g-dropdown-column\">
               ";
                    // line 472
                    echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
            </li>
        </ul>        
        ";
                }
                // line 476
                echo "
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@particles/jlnavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2462 => 476,  2455 => 472,  2441 => 470,  2438 => 469,  2434 => 467,  2430 => 466,  2425 => 465,  2419 => 464,  2386 => 463,  2380 => 461,  2377 => 460,  2374 => 459,  2371 => 458,  2368 => 457,  2365 => 456,  2362 => 455,  2359 => 454,  2356 => 453,  2353 => 452,  2350 => 451,  2347 => 450,  2344 => 449,  2328 => 448,  2306 => 444,  2303 => 443,  2300 => 442,  2295 => 441,  2292 => 440,  2276 => 439,  2259 => 435,  2249 => 431,  2243 => 429,  2239 => 428,  2236 => 427,  2227 => 425,  2223 => 424,  2217 => 422,  2210 => 420,  2206 => 418,  2203 => 417,  2198 => 416,  2193 => 415,  2190 => 414,  2187 => 413,  2184 => 412,  2168 => 411,  2151 => 407,  2148 => 405,  2145 => 404,  2142 => 403,  2139 => 402,  2133 => 401,  2130 => 400,  2127 => 398,  2124 => 397,  2116 => 395,  2108 => 393,  2106 => 392,  2101 => 391,  2098 => 390,  2095 => 389,  2092 => 387,  2090 => 386,  2085 => 384,  2082 => 383,  2079 => 382,  2073 => 380,  2071 => 379,  2064 => 378,  2061 => 377,  2054 => 376,  2043 => 374,  2041 => 373,  2032 => 372,  2030 => 371,  2011 => 370,  2007 => 368,  2003 => 366,  1999 => 364,  1997 => 363,  1994 => 362,  1991 => 360,  1989 => 359,  1986 => 358,  1982 => 356,  1979 => 354,  1977 => 353,  1974 => 352,  1968 => 350,  1966 => 349,  1961 => 348,  1958 => 347,  1943 => 345,  1940 => 344,  1936 => 342,  1933 => 340,  1931 => 339,  1926 => 338,  1920 => 336,  1918 => 335,  1911 => 334,  1909 => 333,  1892 => 332,  1890 => 331,  1881 => 330,  1879 => 329,  1860 => 328,  1857 => 327,  1855 => 326,  1852 => 325,  1849 => 324,  1846 => 323,  1843 => 322,  1840 => 321,  1837 => 319,  1834 => 318,  1828 => 317,  1822 => 316,  1819 => 315,  1816 => 314,  1813 => 313,  1807 => 312,  1804 => 311,  1801 => 310,  1798 => 309,  1795 => 308,  1790 => 307,  1787 => 306,  1782 => 305,  1777 => 304,  1775 => 303,  1772 => 302,  1769 => 301,  1767 => 300,  1764 => 299,  1761 => 298,  1758 => 297,  1755 => 296,  1752 => 295,  1749 => 294,  1746 => 293,  1743 => 292,  1740 => 291,  1737 => 290,  1735 => 289,  1732 => 288,  1729 => 287,  1727 => 286,  1721 => 284,  1718 => 283,  1715 => 282,  1712 => 281,  1709 => 280,  1706 => 279,  1703 => 278,  1700 => 277,  1697 => 276,  1694 => 275,  1691 => 274,  1688 => 273,  1685 => 272,  1682 => 271,  1679 => 270,  1676 => 269,  1673 => 268,  1670 => 267,  1667 => 266,  1651 => 265,  1635 => 262,  1629 => 260,  1624 => 258,  1619 => 257,  1616 => 256,  1613 => 255,  1601 => 254,  1582 => 250,  1575 => 248,  1572 => 247,  1564 => 246,  1559 => 245,  1556 => 244,  1554 => 243,  1551 => 242,  1548 => 241,  1545 => 240,  1542 => 239,  1539 => 238,  1537 => 237,  1524 => 236,  1502 => 231,  1499 => 230,  1497 => 229,  1481 => 228,  1475 => 718,  1464 => 716,  1462 => 715,  1459 => 714,  1455 => 712,  1453 => 711,  1442 => 709,  1440 => 708,  1435 => 705,  1431 => 703,  1429 => 702,  1424 => 699,  1420 => 697,  1414 => 695,  1412 => 694,  1409 => 693,  1403 => 690,  1390 => 689,  1388 => 688,  1385 => 687,  1383 => 686,  1380 => 685,  1373 => 681,  1361 => 680,  1358 => 679,  1356 => 678,  1353 => 677,  1348 => 674,  1342 => 672,  1340 => 671,  1337 => 670,  1331 => 667,  1318 => 666,  1316 => 665,  1311 => 662,  1309 => 661,  1304 => 658,  1298 => 656,  1296 => 655,  1291 => 652,  1275 => 650,  1273 => 649,  1264 => 647,  1261 => 646,  1258 => 644,  1253 => 641,  1249 => 639,  1247 => 638,  1243 => 636,  1236 => 633,  1234 => 632,  1229 => 629,  1224 => 626,  1217 => 622,  1213 => 620,  1211 => 619,  1208 => 618,  1202 => 615,  1199 => 614,  1197 => 613,  1194 => 612,  1187 => 608,  1183 => 606,  1181 => 605,  1178 => 604,  1172 => 601,  1169 => 600,  1167 => 599,  1164 => 598,  1158 => 595,  1153 => 594,  1151 => 593,  1147 => 591,  1145 => 590,  1142 => 589,  1137 => 586,  1130 => 582,  1126 => 580,  1124 => 579,  1121 => 578,  1115 => 575,  1112 => 574,  1110 => 573,  1107 => 572,  1101 => 569,  1096 => 568,  1094 => 567,  1089 => 564,  1087 => 563,  1084 => 562,  1079 => 559,  1072 => 555,  1068 => 553,  1066 => 552,  1063 => 551,  1057 => 548,  1054 => 547,  1052 => 546,  1049 => 545,  1043 => 542,  1038 => 541,  1036 => 540,  1033 => 539,  1027 => 536,  1014 => 535,  1012 => 534,  1008 => 532,  1006 => 531,  987 => 529,  984 => 528,  979 => 526,  974 => 525,  972 => 524,  964 => 522,  961 => 521,  937 => 519,  935 => 518,  919 => 516,  916 => 515,  914 => 514,  911 => 513,  908 => 511,  904 => 509,  898 => 507,  886 => 505,  884 => 504,  881 => 503,  879 => 502,  875 => 501,  872 => 500,  870 => 499,  867 => 498,  863 => 496,  857 => 494,  845 => 492,  843 => 491,  840 => 490,  837 => 489,  835 => 488,  832 => 487,  830 => 486,  827 => 485,  825 => 484,  821 => 483,  819 => 482,  816 => 481,  814 => 480,  811 => 479,  808 => 447,  805 => 438,  802 => 410,  799 => 264,  796 => 253,  793 => 235,  790 => 227,  784 => 223,  778 => 220,  771 => 218,  766 => 217,  760 => 214,  754 => 211,  749 => 210,  747 => 209,  741 => 206,  736 => 205,  729 => 201,  722 => 199,  718 => 198,  713 => 197,  707 => 194,  701 => 191,  697 => 190,  692 => 189,  689 => 188,  687 => 187,  685 => 186,  682 => 184,  680 => 183,  677 => 182,  673 => 180,  665 => 177,  658 => 176,  652 => 175,  643 => 174,  640 => 173,  637 => 172,  634 => 171,  630 => 170,  618 => 169,  616 => 168,  613 => 166,  609 => 164,  606 => 163,  604 => 162,  601 => 161,  597 => 159,  591 => 158,  588 => 157,  582 => 156,  577 => 155,  575 => 154,  572 => 153,  570 => 152,  562 => 148,  560 => 147,  532 => 145,  530 => 144,  522 => 143,  514 => 142,  508 => 139,  503 => 138,  501 => 137,  493 => 135,  491 => 134,  482 => 131,  480 => 130,  472 => 128,  470 => 127,  462 => 125,  460 => 124,  450 => 122,  448 => 121,  439 => 120,  427 => 118,  425 => 117,  421 => 115,  415 => 113,  413 => 112,  407 => 110,  405 => 109,  399 => 107,  397 => 106,  391 => 104,  389 => 103,  384 => 102,  382 => 101,  373 => 98,  371 => 97,  365 => 96,  358 => 95,  356 => 94,  349 => 92,  344 => 91,  342 => 90,  334 => 88,  332 => 87,  322 => 85,  320 => 84,  313 => 82,  308 => 81,  306 => 80,  299 => 76,  292 => 75,  290 => 74,  282 => 72,  280 => 71,  270 => 69,  268 => 68,  258 => 67,  246 => 65,  244 => 64,  236 => 62,  234 => 61,  230 => 59,  223 => 58,  216 => 57,  209 => 56,  203 => 55,  198 => 54,  196 => 53,  186 => 51,  184 => 50,  172 => 48,  170 => 47,  162 => 45,  160 => 44,  148 => 42,  146 => 41,  138 => 39,  136 => 38,  134 => 37,  120 => 35,  118 => 34,  110 => 33,  104 => 32,  102 => 31,  100 => 30,  97 => 28,  95 => 27,  93 => 26,  90 => 25,  87 => 23,  81 => 20,  76 => 19,  70 => 17,  67 => 16,  62 => 13,  60 => 12,  55 => 11,  53 => 10,  51 => 9,  48 => 8,  46 => 7,  43 => 6,  37 => 4,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlnavbar.html.twig", "C:\\wamp64\\www\\hincheu\\templates\\jl_finance_lite\\particles\\jlnavbar.html.twig");
    }
}
