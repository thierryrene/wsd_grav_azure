<?php

/* partials/base.html.twig */
class __TwigTemplate_fcb88cb99bd7a1d5bd1aa1f96a6332120f3d7623b3999f53680092ee6bf9309b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
";
        // line 4
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "</head>
<body id=\"top\" class=\"";
        // line 47
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 82
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 82)->display($context);
        // line 83
        echo "        </div>
    </div>
    ";
        // line 85
        $this->displayBlock('bottom', $context, $blocks);
        // line 100
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 14
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 18
        echo "
        ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lightbox", array())) {
            // line 20
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/featherlight.min.css"), "method");
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        ";
        // line 23
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 24
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        ";
        // line 27
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 28
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/nucleus-ie9.css", 1 => 99), "method");
            // line 29
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/html5shiv-printshiv.min.js", 1 => 99), "method");
            // line 30
            echo "        ";
        }
        // line 31
        echo "    ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 37
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 38
        echo "
        ";
        // line 39
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lightbox", array())) {
            // line 40
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/featherlight.min.js"), "method");
            // line 41
            echo "        ";
        }
        // line 42
        echo "    ";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "        <header id=\"header\">
                <div class=\"logo-surround\">
                    <a href=\"";
        // line 52
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\" id=\"logo\"></a>
                    <span class=\"logo-accent\"></span>
                </div>
                <div id=\"navbar\">
                    ";
        // line 56
        $this->displayBlock('header_extra', $context, $blocks);
        // line 57
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 58
            echo "                    ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 58)->display($context);
            // line 59
            echo "                    ";
        }
        // line 60
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 63
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 56
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 60
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 61
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 61)->display($context);
        // line 62
        echo "                    ";
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        // line 68
        echo "        <section id=\"body\">
            ";
        // line 69
        $this->displayBlock('sidebar', $context, $blocks);
        // line 70
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "        </section>
        ";
    }

    // line 69
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
        echo "        <footer id=\"footer\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </footer>
        ";
    }

    // line 85
    public function block_bottom($context, array $blocks = array())
    {
        // line 86
        echo "    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
        ";
        // line 94
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lightbox", array())) {
            // line 95
            echo "        \$('a[rel=\"lightbox\"]').featherlight();
        ";
        }
        // line 97
        echo "    });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 97,  304 => 95,  302 => 94,  292 => 86,  289 => 85,  282 => 75,  279 => 74,  274 => 70,  269 => 69,  264 => 71,  261 => 70,  259 => 69,  256 => 68,  253 => 67,  249 => 62,  246 => 61,  243 => 60,  238 => 56,  231 => 63,  228 => 60,  225 => 59,  222 => 58,  219 => 57,  217 => 56,  210 => 52,  206 => 50,  203 => 49,  199 => 42,  196 => 41,  193 => 40,  191 => 39,  188 => 38,  185 => 37,  182 => 36,  179 => 35,  176 => 34,  172 => 31,  169 => 30,  166 => 29,  163 => 28,  161 => 27,  158 => 26,  155 => 25,  152 => 24,  150 => 23,  147 => 22,  144 => 21,  141 => 20,  139 => 19,  136 => 18,  133 => 17,  130 => 16,  127 => 15,  124 => 14,  121 => 13,  118 => 12,  110 => 43,  108 => 34,  102 => 32,  100 => 12,  95 => 10,  92 => 9,  90 => 8,  82 => 7,  79 => 6,  76 => 5,  70 => 100,  68 => 85,  64 => 83,  62 => 82,  57 => 79,  55 => 74,  52 => 73,  49 => 67,  47 => 49,  42 => 47,  39 => 46,  37 => 5,  35 => 4,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/* */
/*     {% block stylesheets %}*/
/*         {% do assets.add('theme://css/pure-0.5.0/grids-min.css',103) %}*/
/*         {% do assets.add('theme://css-compiled/nucleus.css',102) %}*/
/*         {% do assets.add('theme://css-compiled/template.css',101) %}*/
/*         {% do assets.add('theme://css/font-awesome.min.css',100) %}*/
/*         {% do assets.add('theme://css/slidebars.min.css') %}*/
/* */
/*         {% if page.header.lightbox %}*/
/*             {% do assets.add('theme://css/featherlight.min.css') %}*/
/*         {% endif %}*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie10.css') %}*/
/*         {% endif %}*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             {% do assets.add('theme://css/nucleus-ie9.css',99) %}*/
/*             {% do assets.add('theme://js/html5shiv-printshiv.min.js',99) %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.add('jquery',101) %}*/
/*         {% do assets.add('theme://js/modernizr.custom.71422.js',100) %}*/
/*         {% do assets.add('theme://js/slidebars.min.js') %}*/
/* */
/*         {% if page.header.lightbox %}*/
/*             {% do assets.add('theme://js/featherlight.min.js') %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/* */
/* {% endblock head%}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*     <div id="sb-site">*/
/*         {% block header %}*/
/*         <header id="header">*/
/*                 <div class="logo-surround">*/
/*                     <a href="{{ base_url == '' ? '/' : base_url }}" id="logo"></a>*/
/*                     <span class="logo-accent"></span>*/
/*                 </div>*/
/*                 <div id="navbar">*/
/*                     {% block header_extra %}{% endblock %}*/
/*                     {% if config.plugins.langswitcher.enabled %}*/
/*                     {% include 'partials/langswitcher.html.twig' %}*/
/*                     {% endif %}*/
/*                     {% block header_navigation %}*/
/*                     {% include 'partials/navigation.html.twig' %}*/
/*                     {% endblock %}*/
/*                     <span class="panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars"></span>*/
/*                 </div>*/
/*         </header>*/
/*         {% endblock %}*/
/*         {% block body %}*/
/*         <section id="body">*/
/*             {% block sidebar %}{% endblock %}*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*         <footer id="footer">*/
/*             <p><a href="http://getgrav.org">Grav</a> was <i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by <a href="http://www.rockettheme.com">RocketTheme</a>.</p>*/
/*         </footer>*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="sb-slidebar sb-left sb-width-thin">*/
/*         <div id="panel">*/
/*         {% include 'partials/navigation.html.twig' %}*/
/*         </div>*/
/*     </div>*/
/*     {% block bottom %}*/
/*     <script>*/
/*     $(function () {*/
/*         $(document).ready(function() {*/
/*           $.slidebars({*/
/*             hideControlClasses: true,*/
/*             scrollLock: true*/
/*           });*/
/*         });*/
/*         {% if page.header.lightbox %}*/
/*         $('a[rel="lightbox"]').featherlight();*/
/*         {% endif %}*/
/*     });*/
/*     </script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
