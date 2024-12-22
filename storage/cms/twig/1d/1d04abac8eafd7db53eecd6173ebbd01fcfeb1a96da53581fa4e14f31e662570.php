<?php

/* /var/www/html/glovtex.com/themes/glovtex/pages/home.htm */
class __TwigTemplate_c1c91a22be4716c04e1b76f661a27d0b006cff04fe584518d385b17daccd0f88 extends Twig_Template
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
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("home/slides.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 2
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("home/services.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("home/about.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glovtex.com/themes/glovtex/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% content 'home/slides.htm' %}
{% content 'home/services.htm' %}
{% content 'home/about.htm' %}", "/var/www/html/glovtex.com/themes/glovtex/pages/home.htm", "");
    }
}
