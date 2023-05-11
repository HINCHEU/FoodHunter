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

/* @particles/jlnavcanvas.html.twig */
class __TwigTemplate_451358c403875d626ad3cb4d1a1dbebed18175058b34ea8eedaff1ae5c5ca922 extends \Twig\Template
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
            echo "    ";
            $context["menu"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "instance", [0 => ($context["particle"] ?? null)], "method");
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "    <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        $context["nav_init"] = (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) : ("default"));
        // line 8
        $context["cv_nav_init"] = (($this->getAttribute(($context["particle"] ?? null), "cv_nav_style", [])) ? ($this->getAttribute(($context["particle"] ?? null), "cv_nav_style", [])) : ("default"));
        // line 9
        echo "
";
        // line 10
        ob_start(function () { return ''; });
        // line 11
        if ($this->getAttribute(($context["particle"] ?? null), "offcanvas_minheight", [])) {
            // line 12
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle {min-height:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offcanvas_minheight", []), "html", null, true);
            echo "px; }
";
        }
        // line 14
        if ($this->getAttribute(($context["particle"] ?? null), "toggle_color", [])) {
            // line 15
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle {color:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "toggle_color", []), "html", null, true);
            echo "; }
";
        }
        // line 17
        if ($this->getAttribute(($context["particle"] ?? null), "toggle_color_hover", [])) {
            // line 18
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle:focus,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle:hover {color:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "toggle_color_hover", []), "html", null, true);
            echo ";}
";
        }
        // line 20
        if ($this->getAttribute(($context["particle"] ?? null), "customize_bar_background", [])) {
            // line 21
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .tm-nav-mobile { background: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "customize_bar_background", []), "html", null, true);
            echo "; }
";
        }
        // line 23
        if ($this->getAttribute(($context["particle"] ?? null), "nav_cv_color", [])) {
            // line 24
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li>a,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub a{color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_cv_color", []), "html", null, true);
            echo ";}
";
        }
        // line 26
        if ($this->getAttribute(($context["particle"] ?? null), "nav_color_active", [])) {
            // line 27
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li>a:focus,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li>a:hover,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li.jl-active>a,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub a:focus,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub a:hover,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub li.jl-active > a {color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_color_active", []));
            echo ";}
";
        }
        // line 29
        if ($this->getAttribute(($context["particle"] ?? null), "nav_color_header", [])) {
            // line 30
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-header {color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_color_header", []), "html", null, true);
            echo ";}
";
        }
        // line 32
        if ($this->getAttribute(($context["particle"] ?? null), "toggle_text_fontsize", [])) {
            // line 33
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle { font-size: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "toggle_text_fontsize", []), "html", null, true);
            echo "px; }
";
        }
        $context["inline_mc_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["inline_mc_style"] ?? null), 1 => 0], "method");
        // line 37
        echo "
";
        // line 55
        echo "
";
        // line 66
        echo "
";
        // line 165
        echo "
";
        // line 175
        echo "
";
        // line 184
        echo "
";
        // line 195
        echo "
";
        // line 197
        $context["attrs_menu"] = ((("tm-nav-mobile jl-offcanvas-bar" . (($this->getAttribute(($context["particle"] ?? null), "nav_center", [])) ? (" jl-text-center") : (""))) . (($this->getAttribute(($context["particle"] ?? null), "modal_vertically", [])) ? (" jl-flex") : (""))) . (($this->getAttribute(($context["particle"] ?? null), "offcanvas_inverse", [])) ? ((" jl-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offcanvas_inverse", [])))) : ("")));
        // line 198
        echo "
";
        // line 199
        $context["attrs_menu"] = ((($context["attrs_menu"] ?? null)) ? (((" class=\"" . twig_trim_filter(($context["attrs_menu"] ?? null))) . "\"")) : (""));
        // line 200
        echo "
";
        // line 201
        $context["macro"] = $this;
        // line 202
        echo "
";
        // line 203
        if (($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) == "offcanvas")) {
            // line 204
            $pageblockVariables = [];
            if ($pageblockVariables && !is_array($pageblockVariables)) {
                throw new UnexpectedValueException('{% pageblock with x %}: x is not an array');
            }
            $location = "body_bottom";
            if ($location && !is_string($location)) {
                throw new UnexpectedValueException('{% pageblock in x %}: x is not a string');
            }
            $priority = isset($pageblockVariables['priority']) ? $pageblockVariables['priority'] : 0;
            ob_start();
            // line 205
            echo "<div id=\"mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" jl-offcanvas=\"mode: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation_mode", []), "html", null, true);
            echo ";";
            echo (($this->getAttribute(($context["particle"] ?? null), "flip_offcanvas", [])) ? (" flip: true;") : (""));
            echo (($this->getAttribute(($context["particle"] ?? null), "overlay", [])) ? (" overlay: true;") : (""));
            echo "\">
    <div";
            // line 206
            echo ($context["attrs_menu"] ?? null);
            echo ">

    ";
            // line 208
            if ($this->getAttribute(($context["particle"] ?? null), "close_button", [])) {
                // line 209
                echo "        <button class=\"jl-offcanvas-close\" type=\"button\" jl-close aria-label=\"Close Menu\"></button>
    ";
            }
            // line 211
            echo "
        ";
            // line 212
            if ($this->getAttribute(($context["particle"] ?? null), "modal_vertically", [])) {
                // line 213
                echo "            <div class=\"jl-margin-auto-vertical jl-width-1-1\">
        ";
            }
            // line 215
            echo "
            <div class=\"jl-child-width-1-1\" jl-grid>
                
                ";
            // line 218
            if ($this->getAttribute($this->getAttribute(($context["menu"] ?? null), "root", []), "count", [], "method")) {
                // line 219
                echo "                <div>
                    <ul class=\"jl-nav jl-nav-";
                // line 220
                echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
                echo (($this->getAttribute(($context["particle"] ?? null), "nav_center", [])) ? (" jl-nav-center") : (" jl-text-left"));
                echo (($this->getAttribute(($context["particle"] ?? null), "nav_divider", [])) ? (" jl-nav-divider") : (""));
                echo "\" jl-nav=\"targets: > .js-accordion\">
                        ";
                // line 221
                echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                echo "
                    </ul>
                </div>
                ";
            }
            // line 225
            echo "                
                ";
            // line 226
            if ($this->getAttribute(($context["particle"] ?? null), "module_id", [])) {
                // line 227
                echo "                    <div>
                     ";
                // line 228
                echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "displayModule", [0 => $this->getAttribute(($context["particle"] ?? null), "module_id", []), 1 => ["style" => (($this->getAttribute(($context["particle"] ?? null), "chrome", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "chrome", []), "gantry")) : ("gantry")), "position" => "particle"]], "method");
                echo "
                    </div>
                ";
            }
            // line 231
            echo "
            </div>

        ";
            // line 234
            if ($this->getAttribute(($context["particle"] ?? null), "modal_vertically", [])) {
                // line 235
                echo "            </div>
        ";
            }
            // line 237
            echo "
    </div>
</div>
";
            $content = ob_get_clean();
            Gantry\Framework\Gantry::instance()['document']->addHtml($content, $priority, $location);
        }
    }

    // line 38
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
            // line 39
            echo "    ";
            try {                // line 40
                echo "    ";
                $context["in_particle"] = (((($this->getAttribute(($context["context"] ?? null), "in_particle", [], "any", true, true) &&  !(null === $this->getAttribute(($context["context"] ?? null), "in_particle", [])))) ? ($this->getAttribute(($context["context"] ?? null), "in_particle", [])) : (0)) + 1);
                // line 41
                echo "    ";
                if ((($context["in_particle"] ?? null) > 5)) {
                    // line 42
                    echo "        ";
                    throw new \RuntimeException("Particle loop detected"                    ,                     500                    );
                    // line 43
                    echo "    ";
                }
                // line 44
                echo "
    ";
                // line 45
                $context["context"] = twig_array_merge(($context["context"] ?? null), ["particle" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "in_particle" => ($context["in_particle"] ?? null)]);
                // line 46
                echo "    ";
                $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "block", []), "class", []);
                // line 47
                echo "    <div class=\"menu-item-particle";
                ((($context["classes"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["classes"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
        ";
                // line 48
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
                try {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                     $this->loadTemplate([0 => (("particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig")], "@particles/jlnavcanvas.html.twig", 48);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display(twig_to_array(                    // line 49
($context["context"] ?? null)));
                }
                // line 50
                echo "    </div>
    ";
            } catch (\Exception $e) {
                if ($context['gantry']->debug()) throw $e;
                if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
                $context['e'] = $e;
                // line 52
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

    // line 56
    public function getdisplayTitle($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 57
            echo "    ";
            if (( !$this->getAttribute(($context["item"] ?? null), "icon_only", []) ||  !($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) {
                // line 58
                echo "        ";
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", [])) {
                    // line 59
                    echo "        <div>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        <div class=\"jl-nav-subtitle\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", []), "html", null, true);
                    echo "</div></div>
        ";
                } else {
                    // line 62
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        ";
                }
                // line 64
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

    // line 67
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 68
            echo "    ";
            $context["self"] = $this;
            // line 69
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "particle") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "enabled", []))) {
                // line 70
                echo "        ";
                $context["enabled"] = 0;
                // line 71
                echo "    ";
            }
            // line 72
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "visible", []) && $this->getAttribute(($context["item"] ?? null), "enabled", [])) && ((array_key_exists("enabled", $context)) ? (_twig_default_filter(($context["enabled"] ?? null), 1)) : (1)))) {
                // line 73
                echo "        ";
                $context["title"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) || $this->getAttribute(($context["item"] ?? null), "link_title", []))) ? (((" title=\"" . twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "link_title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "link_title", []), $this->getAttribute(($context["item"] ?? null), "title", []))) : ($this->getAttribute(($context["item"] ?? null), "title", []))))) . "\"")) : (""));
                // line 74
                echo "        ";
                $context["label"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) && ($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) ? (((" aria-label=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []))) . "\"")) : (""));
                // line 75
                echo "        ";
                $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" jl-active") : (""));
                // line 76
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) ? ((" g-" . $this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method"))) : (""));
                // line 77
                echo "        ";
                $context["parent"] = ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", []))) ? (" jl-parent") : (""));
                // line 78
                echo "        ";
                $context["target"] = (((($this->getAttribute(($context["item"] ?? null), "target", []) != "_self") || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "forceTarget", []))) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", []))) . "\"")) : (""));
                // line 79
                echo "        ";
                $context["rel"] = $this->getAttribute(($context["item"] ?? null), "rel", []);
                // line 80
                echo "
        ";
                // line 81
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_blank")) {
                    // line 82
                    echo "            ";
                    if (!twig_in_filter("noopener", ($context["rel"] ?? null))) {
                        // line 83
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 84
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noopener");
                        // line 85
                        echo "            ";
                    }
                    // line 86
                    echo "            ";
                    if (!twig_in_filter("noreferrer", ($context["rel"] ?? null))) {
                        // line 87
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 88
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noreferrer");
                        // line 89
                        echo "            ";
                    }
                    // line 90
                    echo "        ";
                }
                // line 91
                echo "
        ";
                // line 92
                $context["listAttributes"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["item"] ?? null), "attributes", []));
                // line 93
                echo "        ";
                $context["linkAttributes"] = "";
                // line 94
                echo "        
        ";
                // line 95
                if ($this->getAttribute(($context["item"] ?? null), "link_attributes", [])) {
                    // line 96
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "link_attributes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 97
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attribute"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 98
                            echo "                    ";
                            if (($context["key"] == "rel")) {
                                // line 99
                                echo "                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $context["value"], " "));
                                foreach ($context['_seq'] as $context["_key"] => $context["hVal"]) {
                                    // line 100
                                    echo "                            ";
                                    if (!twig_in_filter($context["hVal"], ($context["rel"] ?? null))) {
                                        // line 101
                                        echo "                                ";
                                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                                        // line 102
                                        echo "                                ";
                                        $context["rel"] = (($context["rel"] ?? null) . $context["hVal"]);
                                        // line 103
                                        echo "                            ";
                                    }
                                    // line 104
                                    echo "                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hVal'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 105
                                echo "                    ";
                            } else {
                                // line 106
                                echo "                        ";
                                $context["linkAttributes"] = (((((($context["linkAttributes"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                                // line 107
                                echo "                    ";
                            }
                            // line 108
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 109
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "        ";
                }
                // line 111
                echo "
        ";
                // line 113
                echo "        ";
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_nonav")) {
                    // line 114
                    echo "            ";
                    $context["target"] = "target=\"_blank\"";
                    // line 115
                    echo "            ";
                    $context["linkAttributes"] = (($context["linkAttributes"] ?? null) . " onclick=\"window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes'); return false;\"");
                    // line 116
                    echo "        ";
                }
                // line 117
                echo "        ";
                $context["item_accordion"] = (((((($this->getAttribute(($context["item"] ?? null), "type", []) == "separator") || ($this->getAttribute(($context["item"] ?? null), "type", []) == "heading")) && ($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) && ($context["parent"] ?? null))) ? (" js-accordion") : (""));
                // line 118
                echo "        ";
                $context["rel"] = ((($context["rel"] ?? null)) ? (((" rel=\"" . twig_escape_filter($this->env, ($context["rel"] ?? null), "html_attr")) . "\"")) : (""));
                // line 119
                echo "        <li class=\"item-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["item_accordion"] ?? null), "html", null, true);
                }
                echo ((((($context["parent"] ?? null) && ($context["item_accordion"] ?? null)) && ($context["active"] ?? null))) ? (" jl-open") : (""));
                echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
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
                // line 120
                if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "\"";
                }
                echo ($context["listAttributes"] ?? null);
                echo ">
            ";
                // line 121
                if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                    // line 122
                    echo "                <a";
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
                    // line 123
                    if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                        // line 124
                        echo "                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\" />
                    ";
                    } elseif ($this->getAttribute(                    // line 125
($context["item"] ?? null), "icon", [])) {
                        // line 126
                        echo "                        <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
                    ";
                    }
                    // line 128
                    echo "                    ";
                    echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                    echo "
                    ";
                    // line 129
                    if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                        // line 130
                        echo "<span jl-nav-parent-icon></span>";
                    }
                    // line 132
                    echo "                </a>
            ";
                } else {
                    // line 134
                    echo "                ";
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) || ($this->getAttribute(($context["item"] ?? null), "level", []) == 1))) {
                        // line 135
                        echo "                    <a href=\"#\" role=\"button\" class=\"menu__";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "type", []), "html", null, true);
                        if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
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
                    // line 137
                    echo "                ";
                    if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                        // line 138
                        echo "                    ";
                        echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                        echo "
                ";
                    } elseif (($this->getAttribute(                    // line 139
($context["item"] ?? null), "type", []) == "heading")) {
                        // line 140
                        echo "                    ";
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "
                ";
                    } else {
                        // line 142
                        echo "                
                ";
                        // line 143
                        if (($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) {
                            // line 144
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        }
                        // line 146
                        echo "
                ";
                    }
                    // line 148
                    echo "
                ";
                    // line 149
                    if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                        // line 150
                        echo "<span jl-nav-parent-icon></span>";
                    }
                    // line 152
                    echo "
                ";
                    // line 153
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) || ($this->getAttribute(($context["item"] ?? null), "level", []) == 1))) {
                        // line 154
                        echo "                    </a>
                ";
                    }
                    // line 156
                    echo "
            ";
                }
                // line 158
                echo "            ";
                if (($context["parent"] ?? null)) {
                    // line 159
                    echo $context["self"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                }
                // line 161
                echo "          </li>

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

    // line 166
    public function getdisplayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 167
            echo "\t";
            $context["self"] = $this;
            // line 168
            echo "\t";
            $context["groups"] = ((($this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method") == "standard")) ? ([0 => ($context["item"] ?? null)]) : ($this->getAttribute(($context["item"] ?? null), "groups", [])));
            // line 169
            echo "\t<ul class=\"jl-nav-sub\">
\t\t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                // line 171
                echo "\t\t\t";
                echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "\t</ul>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 176
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
            // line 177
            echo "    ";
            $context["self"] = $this;
            // line 178
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 179
                echo "        ";
                $context["start_level"] = (($context["start_level"]) ?? ((($context["root_level"]) ?? ($this->getAttribute($context["item"], "level", [])))));
                // line 180
                echo "        ";
                $context["dropdown"] = (($context["dropdown_type"]) ?? ($this->getAttribute($context["item"], "dropdown", [])));
                // line 181
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

    // line 185
    public function getdisplaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 186
            echo "\t";
            $context["self"] = $this;
            // line 187
            echo "\t";
            if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                // line 188
                echo "\t\t";
                $context["animation"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method"), "g-fade")) : ("g-fade"));
                // line 189
                echo "\t\t";
                if (((((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) == 1) && ( !($context["dropdown_type"] ?? null) == "fullwidth")) || (($context["dropdown_type"] ?? null) == "standard")) || (((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") && (($context["dropdown_type"] ?? null) == "fullwidth")))) {
                    // line 190
                    echo "\t\t\t";
                    $context["dropdown_dir"] = ("g-dropdown-" . (($this->getAttribute(($context["item"] ?? null), "dropdown_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "dropdown_dir", []), "right")) : ("right")));
                    // line 191
                    echo "\t\t";
                }
                // line 192
                echo "\t\t";
                echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
\t";
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
        return "@particles/jlnavcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  920 => 192,  917 => 191,  914 => 190,  911 => 189,  908 => 188,  905 => 187,  902 => 186,  887 => 185,  865 => 181,  862 => 180,  859 => 179,  854 => 178,  851 => 177,  835 => 176,  819 => 173,  810 => 171,  806 => 170,  803 => 169,  800 => 168,  797 => 167,  782 => 166,  764 => 161,  761 => 159,  758 => 158,  754 => 156,  750 => 154,  748 => 153,  745 => 152,  742 => 150,  740 => 149,  737 => 148,  733 => 146,  730 => 144,  728 => 143,  725 => 142,  719 => 140,  717 => 139,  712 => 138,  709 => 137,  695 => 135,  692 => 134,  688 => 132,  685 => 130,  683 => 129,  678 => 128,  672 => 126,  670 => 125,  663 => 124,  661 => 123,  644 => 122,  642 => 121,  633 => 120,  612 => 119,  609 => 118,  606 => 117,  603 => 116,  600 => 115,  597 => 114,  594 => 113,  591 => 111,  588 => 110,  582 => 109,  576 => 108,  573 => 107,  570 => 106,  567 => 105,  561 => 104,  558 => 103,  555 => 102,  552 => 101,  549 => 100,  544 => 99,  541 => 98,  536 => 97,  531 => 96,  529 => 95,  526 => 94,  523 => 93,  521 => 92,  518 => 91,  515 => 90,  512 => 89,  509 => 88,  506 => 87,  503 => 86,  500 => 85,  497 => 84,  494 => 83,  491 => 82,  489 => 81,  486 => 80,  483 => 79,  480 => 78,  477 => 77,  474 => 76,  471 => 75,  468 => 74,  465 => 73,  462 => 72,  459 => 71,  456 => 70,  453 => 69,  450 => 68,  435 => 67,  419 => 64,  413 => 62,  408 => 60,  403 => 59,  400 => 58,  397 => 57,  385 => 56,  366 => 52,  359 => 50,  356 => 49,  348 => 48,  343 => 47,  340 => 46,  338 => 45,  335 => 44,  332 => 43,  329 => 42,  326 => 41,  323 => 40,  321 => 39,  308 => 38,  298 => 237,  294 => 235,  292 => 234,  287 => 231,  281 => 228,  278 => 227,  276 => 226,  273 => 225,  266 => 221,  260 => 220,  257 => 219,  255 => 218,  250 => 215,  246 => 213,  244 => 212,  241 => 211,  237 => 209,  235 => 208,  230 => 206,  220 => 205,  209 => 204,  207 => 203,  204 => 202,  202 => 201,  199 => 200,  197 => 199,  194 => 198,  192 => 197,  189 => 195,  186 => 184,  183 => 175,  180 => 165,  177 => 66,  174 => 55,  171 => 37,  169 => 36,  160 => 33,  158 => 32,  148 => 30,  146 => 29,  116 => 27,  114 => 26,  100 => 24,  98 => 23,  90 => 21,  88 => 20,  78 => 18,  76 => 17,  68 => 15,  66 => 14,  58 => 12,  56 => 11,  54 => 10,  51 => 9,  49 => 8,  47 => 7,  44 => 6,  38 => 4,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlnavcanvas.html.twig", "C:\\wamp64\\www\\hincheu\\templates\\jl_finance_lite\\particles\\jlnavcanvas.html.twig");
    }
}
