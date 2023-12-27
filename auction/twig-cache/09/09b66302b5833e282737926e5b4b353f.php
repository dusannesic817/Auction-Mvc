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

/* User/show.html */
class __TwigTemplate_c64654e0be296347763d06346d7108b0 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "User/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"row  mt-5\" style=\"background-color:  rgb(255, 233, 255);\">
    <div class=\"col-3 \" style=\"text-align: right;\"><i class=\"fa-solid fa-user-tie fa-2xl pt-5 pl-2\" style=\"color: #b2c2df;\"></i></div>
    <div class=\"col-3 \">
        <div class=\"d-flex flex-column mb-3\">
            <div class=\"p-1\" style=\"font-size: 14px;\">Broj pozitivnih</div>
            <div class=\"p-1\" style=\"font-size: 14px;\">Member from: dodati u bazi </div>
            <div class=\"p-1\" style=\"font-size: 14px;\">Poslednji oglas: napraviti funkciju</div>
          </div>
    </div>
    <div class=\"col-md-auto ms-auto \">Treći didasdasdasdv</div>
</div>

<div class=\"container mt-5\">


    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["single_user"]) {
            // line 20
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["single_user"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['single_user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "

</div>
";
    }

    // line 28
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "User/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 28,  82 => 23,  72 => 20,  68 => 19,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "User/show.html", "C:\\xampp\\htdocs\\auction\\views\\User\\show.html");
    }
}
