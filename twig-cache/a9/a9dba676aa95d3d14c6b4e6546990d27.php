<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Main/home.html */
class __TwigTemplate_48b673f7eda9c914f1268864b7f2d7ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "Main/home.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo "<div class=\"container\">
    <p class=\"mt-4 category_text\">List of categories</p>
    <div class=\"row mx-auto\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["uniqueCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["uniqueCategory"]) {
            // line 9
            echo "            <div class=\"col-3\">
                <ul class=\"items_list\">
                    <li>
                        <a href=\"/category/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uniqueCategory"], "category_id", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                            ";
            // line 13
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uniqueCategory"], "cat_name", [], "any", false, false, false, 13))), "html", null, true);
            echo "
                        </a>
                        <ul class=\"subitems_list\">
                            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["uniqueCategory"], "sub_categories", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 17
                echo "                                <li>
                                    <a href=\"/subcategory/";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "sub_id", [], "any", false, false, false, 18), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "subc_name", [], "any", false, false, false, 18))), "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                        </ul>
                    </li>
                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uniqueCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
</div>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "Main/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 4,  104 => 26,  94 => 21,  83 => 18,  80 => 17,  76 => 16,  70 => 13,  66 => 12,  61 => 9,  57 => 8,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/home.html", "C:\\xampp\\htdocs\\views\\Main\\home.html");
    }
}
