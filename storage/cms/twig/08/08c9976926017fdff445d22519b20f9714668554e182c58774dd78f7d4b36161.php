<?php

/* /var/www/html/glovtex.com/themes/glovtex/partials/home/nav.htm */
class __TwigTemplate_b23d4190f5bf0c68161a83dd72fd4adfd8992fa8e89d56f1f1e653e73b745607 extends Twig_Template
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
        echo "<div class=\"main-nav\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"index.html\">
            <img class=\"img-responsive\" src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/glovtex.fw.png");
        echo "\" alt=\"logo\">
          </a>                    
        </div>
        <div class=\"collapse navbar-collapse nav-text\">
          <ul class=\"nav navbar-nav navbar-right nav-list\">                 
            <li class=\"scroll active\"><a href=\"#home\">Home</a></li>
            <li class=\"scroll\"><a href=\"#services\">Service</a></li> 
            <li class=\"scroll\"><a href=\"#about-us\">About Us</a></li>                     
            <li class=\"scroll\"><a href=\"#portfolio\">Portfolio</a></li>
            <li class=\"scroll\"><a href=\"#team\">Team</a></li>
            <li class=\"scroll\"><a href=\"#blog\">Blog</a></li>
            <li class=\"scroll\"><a href=\"#contact\">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glovtex.com/themes/glovtex/partials/home/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"main-nav\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"index.html\">
            <img class=\"img-responsive\" src=\"{{ 'assets/images/glovtex.fw.png'|theme }}\" alt=\"logo\">
          </a>                    
        </div>
        <div class=\"collapse navbar-collapse nav-text\">
          <ul class=\"nav navbar-nav navbar-right nav-list\">                 
            <li class=\"scroll active\"><a href=\"#home\">Home</a></li>
            <li class=\"scroll\"><a href=\"#services\">Service</a></li> 
            <li class=\"scroll\"><a href=\"#about-us\">About Us</a></li>                     
            <li class=\"scroll\"><a href=\"#portfolio\">Portfolio</a></li>
            <li class=\"scroll\"><a href=\"#team\">Team</a></li>
            <li class=\"scroll\"><a href=\"#blog\">Blog</a></li>
            <li class=\"scroll\"><a href=\"#contact\">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->", "/var/www/html/glovtex.com/themes/glovtex/partials/home/nav.htm", "");
    }
}
