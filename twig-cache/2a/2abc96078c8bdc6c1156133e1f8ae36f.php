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
        echo "<div class=\"container  mt-5\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["subcategories"]);
        foreach ($context['_seq'] as $context["_key"] => $context["subcategories"]) {
            // line 6
            echo "    <div class=\"d-flex justify-content-around\" style=\"border: 1px solid black;\">
        <div style=\"border: 1px solid black;\">
            image
        </div>
        <div class=\"d-flex flex-column mb-3\" style=\"border: 1px solid black; width: 500px;\">
            <div  class=\"p-2\"><h3>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategories"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</h3></div>
            <div  class=\"p-2\">
            <table class=\"table table-striped\">
                <tbody>
                  <tr>
                    <td scope=\"row\">Started Price:</td>
                    <td>Mark</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class=\"d-flex flex-column mb-3\" style=\"border: 1px solid black;\">
            <div class=\"p-2\"><i class=\"bi bi-person-circle\"></i>  ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategories"], "username", [], "any", false, false, false, 24), "html", null, true);
            echo "</div>
            <div class=\"p-2\"> <i class=\"bi bi-clock\"></i> preostalo vreme</div>
            <div class=\"p-2\">";
            // line 26
            echo twig_escape_filter($this->env, ($context["offer"] ?? null), "html", null, true);
            echo " Offers</div>
        </div>
    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategories'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    
</div>
            ";
    }

    // line 36
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 37));
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
        return array (  107 => 37,  103 => 36,  97 => 31,  86 => 26,  81 => 24,  65 => 11,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Subcategory/show.html", "C:\\xampp\\htdocs\\views\\Subcategory\\show.html");
    }
}
