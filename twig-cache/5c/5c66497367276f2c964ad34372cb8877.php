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

/* Category/show.html */
class __TwigTemplate_1672c8add9d32ac873394b4a7bcdb2ed extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Category/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container  mt-5\">
<h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 5));
        echo " <h1>
    <p>Spisak Aukcija u ovoj kateroiji je: <p>
        <ul>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["auctionsInCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 9
            echo "            <a href=\"/auction/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
                ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "title", [], "any", false, false, false, 10));
            echo "
                
            </a>
            <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "description", [], "any", false, false, false, 13));
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </ul>
    </div>

            ";
    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 21));
        echo "
";
    }

    public function getTemplateName()
    {
        return "Category/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  90 => 20,  83 => 15,  75 => 13,  69 => 10,  64 => 9,  60 => 8,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Category/show.html", "C:\\xampp\\htdocs\\views\\Category\\show.html");
    }
}
