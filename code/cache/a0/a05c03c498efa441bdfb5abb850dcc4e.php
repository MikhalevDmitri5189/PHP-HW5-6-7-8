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

/* user-auth.twig */
class __TwigTemplate_3eac30c5fdd0eb514a3df2404f466484 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (( !($context["auth"] ?? null) - ($context["success"] ?? null))) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, ($context["auth_error"] ?? null), "html", null, true);
            echo "
";
        }
        // line 4
        echo "

<form action=\"/user/login/\" method=\"post\">
    <input id=\"csrf_token\" type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">
    <p>
        <label for=\"user-login\">Логин:</label>
        <input id=\"user-login\" type=\"text\" name=\"login\">
    </p>
    <p>
        <label for=\"user-password\">Пароль:</label>
        <input id=\"user-password\" type=\"password\" name=\"password\">
    </p>
    <p><input type=\"submit\" value=\"Войти\"></p>
</form>";
    }

    public function getTemplateName()
    {
        return "user-auth.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-auth.twig", "/data/mysite.local/src/Domain/Views/user-auth.twig");
    }
}
