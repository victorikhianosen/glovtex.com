<?php

/* /mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/pages/management.htm */
class __TwigTemplate_20e8335bf1183d29142655d34942c835373ebb9fb5d012ed28f2c11755fac4f9 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->partialFunction("home/management"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/pages/management.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'home/management' %}", "/mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/pages/management.htm", "");
    }
}
