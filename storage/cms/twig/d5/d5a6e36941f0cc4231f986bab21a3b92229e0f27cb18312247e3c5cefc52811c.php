<?php

/* /var/www/html/glovtex.com/themes/glovtex-v3/partials/about/about-us.htm */
class __TwigTemplate_90d96cea39bda1298b98fd2777aafb3cdee80495d823d0adfcfa740e035c3d75 extends Twig_Template
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
        echo "<section class=\"mbr-section mbr-parallax-background mbr-after-navbar\" id=\"msg-box5-z\" style=\"background-image: url(themes/glovtex-v3/assets/images/160516318-1-2000x1333.jpg); padding-top: 160px; padding-bottom: 40px;\">

    <div class=\"mbr-overlay\" style=\"opacity: 0.5; background-color: rgb(255, 255, 255);\">
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"mbr-table-md-up\">

              

              <div class=\"mbr-table-cell col-md-5 text-xs-center text-md-right content-size\">
                  <h3 class=\"mbr-section-title display-2\">Glovtex Oil and Gas</h3>
                  <div class=\"lead\">

                    <p>Glovtex Oil &amp; Gas Limited is an engineering company specializing in the development of Telco (Core/IN, Rollout and Maintenance) solutions for the GSM and wireless communication industry. It also serves in various engineering constructions and oil serving in several fields. We are dedicated to offering a customer-centric approach to Technology projects, Implementations and constructions in vivid contrast to the more traditional approach. Glovtex Oil &amp; Gas Limited serves several companies, all dominant players in their sectors: Telecom vendors, Service Providers, Mobile Operators, construction companies and other Information &amp; Communication businesses.<br></p>

                  </div>

                  <div><a class=\"btn btn-primary\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("more-about-us");
        echo "\">THE COMPANY</a></div>
              </div>

              <div class=\"mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size\" style=\"width: 60%;\">
                  <div class=\"mbr-figure\"><img src=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/about77-1400x793.jpg");
        echo "\"></div>
              </div>

            </div>
        </div>
    </div>

</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glovtex.com/themes/glovtex-v3/partials/about/about-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 23,  39 => 19,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"mbr-section mbr-parallax-background mbr-after-navbar\" id=\"msg-box5-z\" style=\"background-image: url(themes/glovtex-v3/assets/images/160516318-1-2000x1333.jpg); padding-top: 160px; padding-bottom: 40px;\">

    <div class=\"mbr-overlay\" style=\"opacity: 0.5; background-color: rgb(255, 255, 255);\">
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"mbr-table-md-up\">

              

              <div class=\"mbr-table-cell col-md-5 text-xs-center text-md-right content-size\">
                  <h3 class=\"mbr-section-title display-2\">Glovtex Oil and Gas</h3>
                  <div class=\"lead\">

                    <p>Glovtex Oil &amp; Gas Limited is an engineering company specializing in the development of Telco (Core/IN, Rollout and Maintenance) solutions for the GSM and wireless communication industry. It also serves in various engineering constructions and oil serving in several fields. We are dedicated to offering a customer-centric approach to Technology projects, Implementations and constructions in vivid contrast to the more traditional approach. Glovtex Oil &amp; Gas Limited serves several companies, all dominant players in their sectors: Telecom vendors, Service Providers, Mobile Operators, construction companies and other Information &amp; Communication businesses.<br></p>

                  </div>

                  <div><a class=\"btn btn-primary\" href=\"{{ 'more-about-us'|page }}\">THE COMPANY</a></div>
              </div>

              <div class=\"mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size\" style=\"width: 60%;\">
                  <div class=\"mbr-figure\"><img src=\"{{ 'assets/images/about77-1400x793.jpg'|theme }}\"></div>
              </div>

            </div>
        </div>
    </div>

</section>", "/var/www/html/glovtex.com/themes/glovtex-v3/partials/about/about-us.htm", "");
    }
}
