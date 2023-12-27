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

/* Main/postRegister.html */
class __TwigTemplate_c7a3353f1300b7a7f7c8ab830fb66b2f extends Template
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
        // line 2
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "Main/postRegister.html", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"container\">
 <div class=\"row\">
    <div class=\"col-6\">
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/register/\" method=\"POST\">
    <div class=\"mb-2\">
        <label for=\"forename\" class=\"form-label\">First Name</label>
        <input type=\"text\" class=\"form-control\" id=\"forename\" name=\"forename\" >
        
      </div>
      <div class=\"mb-2\">
        <label for=\"surename\" class=\"form-label\">Last Name</label>
        <input type=\"text\" class=\"form-control\" id=\"surename\" name=\"surename\" >
      </div>
    <div class=\"mb-2\">
      <label for=\"email\" class=\"form-label\">Email address</label>
      <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" >
        <div id=\"\" class=\"form-text\">
            ";
        // line 22
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"mb-2\">
        <label for=\"username\" class=\"form-label\">Username</label>
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" >
        <div id=\"\" class=\"form-text\">
            ";
        // line 29
        echo twig_escape_filter($this->env, ($context["usern"] ?? null), "html", null, true);
        echo "
        </div>
      </div>
    <div class=\"mb-2\">
      <label for=\"password\" class=\"form-label\">Password</label>
      <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
      <div id=\"passwordHelpBlock\" class=\"form-text\">
       ";
        // line 36
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"mb-2\">
        <label for=\"password1\" class=\"form-label\">Password again</label>
        <input type=\"password\" class=\"form-control\"  name=\"password1\" id=\"password1\">
      </div>
      <div class=\"mb-2\">
        <label for=\"adress\" class=\"form-label\">Adress</label>
        <input type=\"text\" class=\"form-control\" id=\"adress\" name=\"adress\" >
      </div>
      <div class=\"mb-2\">
        <label for=\"phone\" class=\"form-label\">Number</label>
        <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\">
      </div>
    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
  </form>
</div> 
</div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "Main/postRegister.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  82 => 29,  72 => 22,  55 => 8,  50 => 5,  46 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/postRegister.html", "C:\\xampp\\htdocs\\auction\\views\\Main\\postRegister.html");
    }
}
