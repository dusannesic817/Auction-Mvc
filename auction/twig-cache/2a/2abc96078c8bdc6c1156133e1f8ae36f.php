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

/* Subcategory/show.html */
class __TwigTemplate_1004034428f12e322c701a49e8aadcf4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("_global/index.html", "Subcategory/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container mt-5\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 6
            echo "    <div class=\"row justify-content-center align-items-center\">
        <div class=\"col-12 col-md-4 mb-3\">
            <div class=\"border\">
                <img src=\"\" height=\"50\" alt=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "alt_text", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
            </div>
        </div>
        <div class=\"col-12 col-md-4 mb-3\">
            <div class=\"border\" style=\"width: 100%;\">
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auction/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "auction_id", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
                    <p style=\"font-size: 20px;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                </a>
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <td scope=\"row\"><p>Started Price:</p></td>
                            <td><p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "max_price", [], "any", false, false, false, 21), "html", null, true);
            echo "</p></td>
                        </tr>
                        <tr>
                            <td scope=\"row\"><p>Stanje:</p></td>
                            <td><p>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "condition", [], "any", false, false, false, 25), "html", null, true);
            echo "</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col-12 col-md-4 mb-3\">
            <div class=\"border\">
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "user/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "user", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                    <i class=\"fa-solid fa-user-tie fa-lg\" style=\"color: #d78c00;\"></i> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "username", [], "any", false, false, false, 34), "html", null, true);
            echo "
                </a>
                <div><i class=\"fa-solid fa-clock fa-lg\" style=\"color: #d78c00;\"></i> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "days", [], "any", false, false, false, 36), "html", null, true);
            echo "</div>
            </div>
        </div>
    </div>
    <hr class=\"my-3\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>
";
    }

    // line 45
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 46));
        echo "
";
    }

    public function getTemplateName()
    {
        return "Subcategory/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  132 => 45,  127 => 42,  115 => 36,  110 => 34,  104 => 33,  93 => 25,  86 => 21,  77 => 15,  71 => 14,  63 => 9,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Subcategory/show.html", "C:\\xampp\\htdocs\\auction\\views\\Subcategory\\show.html");
    }
}
