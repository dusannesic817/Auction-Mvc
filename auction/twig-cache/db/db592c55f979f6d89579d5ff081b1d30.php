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

/* _global/index.html */
class __TwigTemplate_35346ef7087793cfaf05069785cb5cf5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js\" integrity=\"sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " - Auctiondo</title>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "public/css/style.css\">
   <script src=\"https://kit.fontawesome.com/3f1d14d928.js\" crossorigin=\"anonymous\"></script>
</head>
<body>

  <header>
    <nav class=\"navbar navbar-expand-lg\" style=\"background-color: #4B0082;\">
      <div class=\"container-fluid\">
        <div class=\"margine_left\" >
        <a class=\"navbar-brand \" href=\"#\" style=\"border: 1px solid black; display: inline-block;\">
          <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "public/images/logo.png\" alt=\"Logo\" width=\"100\" height=\"50\" class=\"d-inline-block align-text-top\">
        </a>
        <p class=\"navbar_text\" style=\"border: 1px solid black; display: inline-block;\">Auction</p>

      </div>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse margine_right\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
            <li class=\"nav-item\">
              <a class=\"nav-link navbar_text_green \" aria-current=\"page\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/register/\">Register</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link navbar_text_orange\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "log-in\">Login</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link navbar_text\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "profile\">Profile</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link navbar_text\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "log-out\">LogOut</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div style=\" background-color: #280144;\" class=\"navbar navbar-expand-lg\">
      <div class=\"container-fluid margine_left\">
        <form class=\"d-flex\" role=\"search\">
            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success navbar_text_orange\" type=\"submit\">Search</button>
          </form>
        </div>
      <div class=\"collapse navbar-collapse margine_right\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          <li class=\"nav-item\">
            <a class=\"nav-link navbar_text\" aria-current=\"page\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "home\">Home</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link navbar_text\" href=\"#\">Link</a>
          </li>
          
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              Categories
            </a>
           
            <ul class=\"dropdown-menu\">
              ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 70
            echo "              <li><a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "              
            </ul>
            
          </li>
        
        </ul>
        </div>
    </div>
  </header>

  
  
        <main>
            ";
        // line 85
        $this->displayBlock('main', $context, $blocks);
        // line 88
        echo "        </main>

        <footer>
            &copy; 2023 Auciondo
        </footer>
       
</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Home";
    }

    // line 85
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "            
            ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 86,  185 => 85,  178 => 10,  167 => 88,  165 => 85,  150 => 72,  137 => 70,  133 => 69,  118 => 57,  99 => 41,  93 => 38,  87 => 35,  81 => 32,  67 => 21,  54 => 11,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\xampp\\htdocs\\auction\\views\\_global\\index.html");
    }
}
