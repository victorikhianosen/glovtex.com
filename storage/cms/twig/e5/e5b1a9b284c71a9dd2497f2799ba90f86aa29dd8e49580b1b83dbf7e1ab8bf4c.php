<?php

/* /mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/pages/about-us.htm */
class __TwigTemplate_a9be47fcf1b3678160653b7e33a2e0af7411e7d9b13ecab810f63e438a9e3aa5 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("about/about-us"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("about/what-we-do"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("about/our-solutions"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/pages/about-us.htm";
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
        return new Twig_Source("{% partial 'about/about-us' %}
{% partial 'about/what-we-do' %}
{% partial 'about/our-solutions' %}", "/mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/pages/about-us.htm", "");
    }
}