<?php

/* blog.html.twig */
class __TwigTemplate_982901a2b1b841a3f868f28433d1d1a67d73e886fb9213103950fda7b8c2e9d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1769902420")->display($context);
        // line 45
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 45,  19 => 1,);
    }
}


/* blog.html.twig */
class __TwigTemplate_982901a2b1b841a3f868f28433d1d1a67d73e886fb9213103950fda7b8c2e9d0_1769902420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 4
        $context["base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 5
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 7
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 12
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "\t\t<div class=\"blog-header\">
\t\t\t";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>

\t\t";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 21
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 21)->display($context);
            // line 22
            echo "\t\t";
        }
        // line 23
        echo "
\t\t<div class=\"blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3\">
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 27
            echo "\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 27)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 28
            echo "\t\t\t    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                ";
        // line 30
        $this->displayBlock('pagination', $context, $blocks);
        // line 35
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 37
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 37)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null))));
        // line 38
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    // line 30
    public function block_pagination($context, array $blocks = array())
    {
        // line 31
        echo "                    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 32
            echo "                        ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 32)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 33
            echo "                    ";
        }
        // line 34
        echo "                ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 34,  171 => 33,  168 => 32,  165 => 31,  162 => 30,  156 => 38,  154 => 37,  150 => 35,  148 => 30,  145 => 29,  131 => 28,  128 => 27,  111 => 26,  106 => 23,  103 => 22,  100 => 21,  98 => 20,  92 => 17,  89 => 16,  86 => 15,  82 => 1,  79 => 12,  77 => 11,  74 => 8,  72 => 7,  70 => 5,  68 => 4,  66 => 3,  51 => 1,  21 => 45,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* 	{% set collection = page.collection() %}*/
/* 	{% set base_url = page.url %}*/
/* 	{% set feed_url = base_url %}*/
/* */
/*     {% if base_url == '/' %}*/
/*         {% set base_url = '' %}*/
/*     {% endif %}*/
/* */
/*     {% if base_url == base_url_relative %}*/
/*         {% set feed_url = base_url~'/'~page.slug %}*/
/*     {% endif  %}*/
/* */
/* 	{% block content %}*/
/* 		<div class="blog-header">*/
/* 			{{ page.content }}*/
/* 		</div>*/
/* */
/* 		{% if config.plugins.breadcrumbs.enabled %}*/
/* 			{% include 'partials/breadcrumbs.html.twig' %}*/
/* 		{% endif %}*/
/* */
/* 		<div class="blog-content-list grid pure-g">*/
/* 			<div id="listing" class="block pure-u-2-3">*/
/* 				{% for child in collection %}*/
/* 			        {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}*/
/* 			    {% endfor %}*/
/* */
/*                 {% block pagination %}*/
/*                     {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/*                         {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}*/
/*                     {% endif %}*/
/*                 {% endblock %}*/
/* 			</div>*/
/* 			<div id="sidebar" class="block size-1-3 pure-u-1-3">*/
/* 				{% include 'partials/sidebar.html.twig' with {'blog':page} %}*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endblock %}*/
/* */
/* */
/* */
/* {% endembed %}*/
/* */
/* */
/* */
