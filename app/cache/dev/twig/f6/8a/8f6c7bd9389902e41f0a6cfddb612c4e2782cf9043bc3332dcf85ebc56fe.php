<?php

/* NenadTestBundle:Default:email.html.twig */
class __TwigTemplate_f68a8f6c7bd9389902e41f0a6cfddb612c4e2782cf9043bc3332dcf85ebc56fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Contact owner";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"contact_form\">
\t\t<form method=\"post\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("email.php"), "html", null, true);
        echo "\">
\t\t<div class=\"single_form\">
\t\t\t\t<label> Name </label>
\t\t\t\t<input type=\"text\" placeholder=\"Name\" name=\"name\">
\t\t\t\t<label> Email </label>\t\t\t\t
\t\t\t\t<input  type=\"text\" placeholder=\"Email\" name=\"email\">
\t\t\t\t<label> Subject </label>
\t\t\t\t<input  type=\"text\" placeholder=\"Subject\" name=\"subject\">
\t\t</div>
\t\t<div class=\"message\">
\t\t\t\t<label> Message </label>
\t\t\t\t<textarea name=\"message\" placeholder=\"Message\" id=\"Message\"></textarea>
\t\t\t\t<input class=\"submit\" type=\"submit\" value=\"Send Message\" name=\"submit\">
\t\t</div>
\t\t</form>\t
\t\t\t
\t</div>

";
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("nenad_test_homepage");
        echo "\">Return to Homepage</a>";
    }

    public function getTemplateName()
    {
        return "NenadTestBundle:Default:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  42 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}
