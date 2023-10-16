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

/* Auction/show.html */
class __TwigTemplate_cc60a3ccb8f7914a9ecf0396d6baa94e extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Auction/show.html", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "title", [], "any", false, false, false, 5));
        echo " <h1>
    <p>Opis:  ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "description", [], "any", false, false, false, 6));
        echo "<p>
    <p>Cena:  ";
        // line 7
        echo twig_escape_filter($this->env, ($context["lastOfferPrice"] ?? null), "html", null, true);
        echo " DINARA<p>
    <p>Pocetni Datum aukcije  ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "created_at", [], "any", false, false, false, 8), "j. n. Y."), "html", null, true);
        echo " <p>
    <p>Zavrsni Datum aukcije  ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "expires_at", [], "any", false, false, false, 9), "j. n. Y."), "html", null, true);
        echo " <p>
        <a href=\"/user/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "user_id", [], "any", false, false, false, 10), "html", null, true);
        echo "\">Contact</a>

    </div>

            ";
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 17));
        echo "
";
    }

    public function getTemplateName()
    {
        return "Auction/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  83 => 16,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Auction/show.html", "C:\\xampp\\htdocs\\views\\Auction\\show.html");
    }
}
