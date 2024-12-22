<?php

/* /var/www/html/glovtex.com/themes/glovtex/partials/home/footer.htm */
class __TwigTemplate_5d970176d1aa1a6a9f7a57ceddee87c66c9e285b3c02d43442db075a71fca47e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer id=\"footer\">
    <div class=\"footer-top wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
      <div class=\"container text-center\">
        <div class=\"footer-logo\">
          <a href=\"index.html\"><img class=\"img-responsive\" src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/glovtex.png");
        echo "\" alt=\"\"></a>
        </div>
        <div class=\"social-icons\">
          <ul>
            <li><a class=\"envelope\" href=\"#\"><i class=\"fa fa-envelope\"></i></a></li>
            <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
            <li><a class=\"dribbble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
            <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
            <li><a class=\"linkedin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
            <li><a class=\"tumblr\" href=\"#\"><i class=\"fa fa-tumblr-square\"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-bottom\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <p>&copy; ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Glovtex.</p>
          </div>
          <div class=\"col-sm-6\">
            <p class=\"pull-right\">Crafted by <a href=\"https://novajii.com/web/\" target=\"_blank\">Novaji Introserve</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glovtex.com/themes/glovtex/partials/home/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 23,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\">
    <div class=\"footer-top wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
      <div class=\"container text-center\">
        <div class=\"footer-logo\">
          <a href=\"index.html\"><img class=\"img-responsive\" src=\"{{ 'assets/images/glovtex.png'|theme }}\" alt=\"\"></a>
        </div>
        <div class=\"social-icons\">
          <ul>
            <li><a class=\"envelope\" href=\"#\"><i class=\"fa fa-envelope\"></i></a></li>
            <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
            <li><a class=\"dribbble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
            <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
            <li><a class=\"linkedin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
            <li><a class=\"tumblr\" href=\"#\"><i class=\"fa fa-tumblr-square\"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-bottom\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <p>&copy; {{ \"now\"|date(\"Y\") }} Glovtex.</p>
          </div>
          <div class=\"col-sm-6\">
            <p class=\"pull-right\">Crafted by <a href=\"https://novajii.com/web/\" target=\"_blank\">Novaji Introserve</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>", "/var/www/html/glovtex.com/themes/glovtex/partials/home/footer.htm", "");
    }
}
