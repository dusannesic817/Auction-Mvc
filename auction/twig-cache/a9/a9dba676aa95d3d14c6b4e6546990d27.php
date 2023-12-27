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
        echo "<div class=\"container\">
    <p class=\"mt-4 category_text\">List of categories</p>
    <div class=\"row\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["uniqueCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["uniqueCategory"]) {
            // line 8
            echo "            <div class=\"col-md-3 col-sm-6\">
                <ul class=\"items_list\">
                    <li>
                        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uniqueCategory"], "category_id", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
                            ";
            // line 12
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uniqueCategory"], "cat_name", [], "any", false, false, false, 12))), "html", null, true);
            echo "
                        </a>
                        <ul class=\"subitems_list\">
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["uniqueCategory"], "sub_categories", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 16
                echo "                                <li>
                                    <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
                echo "subcategory/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "sub_id", [], "any", false, false, false, 17), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "subc_name", [], "any", false, false, false, 17))), "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                        </ul>
                    </li>
                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uniqueCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</div>
";
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
        return array (  106 => 25,  96 => 20,  83 => 17,  80 => 16,  76 => 15,  70 => 12,  64 => 11,  59 => 8,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/home.html", "C:\\xampp\\htdocs\\auction\\views\\Main\\home.html");
    }
}
