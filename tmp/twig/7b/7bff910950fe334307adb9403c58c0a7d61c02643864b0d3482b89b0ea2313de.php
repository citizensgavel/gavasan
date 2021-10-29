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

/* user/user-view.twig */
class __TwigTemplate_b8e8fc28f51d0634dfa397c88f326b373a8b00a1a61dcf1df22825bac93d0709 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/layout.twig", "user/user-view.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div id=\"content\" class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-12\">
            ";
        // line 9
        $this->loadTemplate("layout/flash.twig", "user/user-view.twig", 9)->display($context);
        // line 10
        echo "        </div>

        <div class=\"col-md-12\">
            <h1><i class=\"fas fa-user\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User"), "html", null, true);
        echo "</h1>
            <hr>
            <form>
                <div class=\"form-group\">
                    <label>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User-ID"), "html", null, true);
        echo ":</label>
                    <label>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</label>
                </div>
                <div class=\"form-group\">
                    <label for=\"username\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 22), "html", null, true);
        echo "\" class=\"form-control\" readonly>
                </div>
                <div class=\"form-group\">
                    <label for=\"email\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("E-Mail"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "\" class=\"form-control\" readonly>
                </div>
                <!-- <button type=\"submit\" class=\"btn btn-primary\">Submit</button> -->
            </form>
            <p></p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/user-view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  91 => 25,  85 => 22,  81 => 21,  75 => 18,  71 => 17,  64 => 13,  59 => 10,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/user-view.twig", "C:\\xampp\\htdocs\\api.theplurg\\templates\\user\\user-view.twig");
    }
}
