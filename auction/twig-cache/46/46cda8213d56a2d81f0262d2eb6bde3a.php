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

/* Main/getRegister.html */
class __TwigTemplate_f5a61ea4f60d799039d08a9e9b9fa657 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Main/getRegister.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container\">
 <div class=\"row\">
    <div class=\"col-6\">
<form action=\"";
        // line 7
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
    </div>
    <div class=\"mb-2\">
        <label for=\"username\" class=\"form-label\">Username</label>
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" >
      </div>
    <div class=\"mb-2\">
      <label for=\"password\" class=\"form-label\">Password</label>
      <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
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
        return "Main/getRegister.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/getRegister.html", "C:\\xampp\\htdocs\\auction\\views\\Main\\getRegister.html");
    }
}
