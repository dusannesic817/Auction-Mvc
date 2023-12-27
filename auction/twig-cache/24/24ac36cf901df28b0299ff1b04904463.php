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
        echo "    

    <div class=\"container mt-5\">
        <div class=\"row\" style=\"height: 500px;\">
            <div class=\"col-sm-12 col-md-6 col-lg-3 border\">
                <div class=\"border\" style=\"height: 350px;\">main image</div>
                <div class=\"border d-flex justify-content-evenly mt-3\">
                    <div class=\"border\" style=\"height: 80px;\">image1</div>
                    <div class=\"border\">image2</div>
                    <div class=\"border\">image3</div>
                    <div class=\"border\">image4</div>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-6 border\">
                <h3  class=\"border\" style=\"text-align: center;\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "title", [], "any", false, false, false, 17));
        echo "</h3>
                <div class=\"border info-container d-flex flex-column mb-3\">
                    <div class=\"border p-2\">
                       Trenutna cena: ";
        // line 20
        echo twig_escape_filter($this->env, ($context["lastOfferPrice"] ?? null), "html", null, true);
        echo " din
                    </div>
                    <div class=\"border p-2\">
                       
                          <div class=\"input-group mb-3\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Licitiraj\" aria-label=\"Recipient's username\" aria-describedby=\"button-addon2\">
                            <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"button-addon2\" style=\"color: white; background-color:  rgb(250, 179, 47);\" >Licitiraj</button>
                          </div>
                          
                    </div>
                    <div class=\"border p-2\">
                        
                        <div class=\"d-flex justify-content-between\">
                            <div>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "created_at", [], "any", false, false, false, 33), "j. n. Y."), "html", null, true);
        echo "//</div>
                            <div>Koliko ima ponuda za ovu auciju</div>
                          </div>
                    </div>
                    <div class=\"border p-2\">
                        <i class=\"fa-regular fa-eye fa-xl\" style=\"color: rgb(12, 176, 12);;\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "views", [], "any", false, false, false, 38));
        echo "
                    </div>
                </div>       
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-3 border\">
                <div class=\"card\" style=\"background-color: rgb(255, 233, 255);\">
                    <div class=\"card-body\">
                        <h5>Prodavac</h5>
                        <div class=\"d-flex flex-column mb-3\"></div>
                        <div class=\"p-2\"><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "user_id", [], "any", false, false, false, 47), "html", null, true);
        echo "\"> <i class=\"fa-solid fa-user-tie fa-2xl\" style=\"color: #f1aa26;\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "username", [], "any", false, false, false, 47), "html", null, true);
        echo "</a></div>
                        
                            <div class=\"p-2\"><h6>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "forename", [], "any", false, false, false, 49), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "surname", [], "any", false, false, false, 49), "html", null, true);
        echo "</h6></div>
                            <div class=\"p-2\"><i class=\"fa-regular fa-thumbs-up fa-lg\"></i> %</div>
                            <div class=\"p-2\"><i class=\"fa-regular fa-thumbs-up fa-lg\"></i> Number of positive</div>
                            <div class=\"p-2\"><i class=\"fa-solid fa-location-dot fa-lg\"></i> ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "adress", [], "any", false, false, false, 52), "html", null, true);
        echo "</div>
                            <div class=\"p-2\"><i class=\"fa-solid fa-phone fa-lg\"></i> ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "phone", [], "any", false, false, false, 53), "html", null, true);
        echo "</div>
                          </div>
                    </div>
                  </div>
            </div>

        </div>
    </div>
    <div class=\"container\">
        <div class=\"row mt-5\" style=\"height: 300px;\">
           
            <div class=\" col-md-4 border\">
                <div>Info</div>
                <div>
                    <table class=\"table\" style=\"background-color: rgb(255, 233, 255);\">
                        <tbody>
                          <tr>
                            <td scope=\"row\" class=\"\"><p style=\"margin-left:  3.125rem;\">Condition</p></td>
                            <td><p style=\"margin-left: -12.5rem;\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "condition", [], "any", false, false, false, 71), "html", null, true);
        echo "</p></td>
                          </tr>
                          <tr>
                            <td scope=\"row\"><p style=\"margin-left:  3.125rem;\">Other:</p></td>
                            <td><p style=\"margin-left: -12.5rem;\">??</p></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            <div class=\" col-md-8 border\">
                <div >
                    <div>Description:</div>
                    ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "description", [], "any", false, false, false, 84));
        echo "
                </div>    
                <div>Payment</div>    
            </div>

        </div>
    </div>




            ";
    }

    // line 97
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 98));
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
        return array (  186 => 98,  182 => 97,  166 => 84,  150 => 71,  129 => 53,  125 => 52,  117 => 49,  108 => 47,  96 => 38,  88 => 33,  72 => 20,  66 => 17,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Auction/show.html", "C:\\xampp\\htdocs\\auction\\views\\Auction\\show.html");
    }
}
