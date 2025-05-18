<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @formcreator/components/card/formanswer.requester-last.html.twig */
class __TwigTemplate_d0dae5828fee1b75d39acd512c2d742e extends Template
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
        // line 30
        yield "
";
        // line 31
        $context["rawKeyBase"] = ("ITEM_" . "PluginFormcreatorFormAnswer");
        // line 32
        $context["formanswer_url"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorFormAnswer::getSearchURL");
        // line 33
        yield "
<div id=\"plugin_formcreator_last_req_forms\" class=\"card mt-0 mt-sm-2\">
    <div class=\"card-title\">
        ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("My %1\$d last forms (requester)", "formcreator"), ($context["limit"] ?? null)), "html", null, true);
        yield "
    </div>
    ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["search"] ?? null), "data", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38) == 0)) {
            // line 39
            yield "        <div class=\"card-body text-center text-muted\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No form posted yet", "formcreator"), "html", null, true);
            yield "</div>
    ";
        } else {
            // line 41
            yield "        <div class=\"card-body\">
            <ul class=\"list-group\">
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_0 = (($__internal_compile_1 = ($context["search"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["data"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["rows"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 44
                yield "                    ";
                if (((($__internal_compile_2 = (($__internal_compile_3 = $context["row"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["raw"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[(($context["rawKeyBase"] ?? null) . "_8")] ?? null) : null) == Twig\Extension\CoreExtension::constant("PluginFormcreatorFormAnswer::STATUS_WAITING"))) {
                    // line 45
                    yield "                        ";
                    $context["status"] = Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING");
                    // line 46
                    yield "                    ";
                } elseif (((($__internal_compile_4 = (($__internal_compile_5 = $context["row"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["raw"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[(($context["rawKeyBase"] ?? null) . "_8")] ?? null) : null) == Twig\Extension\CoreExtension::constant("PluginFormcreatorFormAnswer::STATUS_REFUSED"))) {
                    // line 47
                    yield "                        ";
                    $context["status"] = Twig\Extension\CoreExtension::constant("Change::REFUSED");
                    // line 48
                    yield "                    ";
                } elseif (((($__internal_compile_6 = (($__internal_compile_7 = $context["row"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["raw"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[(($context["rawKeyBase"] ?? null) . "_8")] ?? null) : null) == Twig\Extension\CoreExtension::constant("PluginFormcreatorFormAnswer::STATUS_ACCEPTED"))) {
                    // line 49
                    yield "                        ";
                    $context["status"] = Twig\Extension\CoreExtension::constant("CommonITILObject::ACCEPTED");
                    // line 50
                    yield "                    ";
                } else {
                    // line 51
                    yield "                        ";
                    $context["status"] = (($__internal_compile_8 = (($__internal_compile_9 = $context["row"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["raw"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[(($context["rawKeyBase"] ?? null) . "_8")] ?? null) : null);
                    // line 52
                    yield "                    ";
                }
                // line 53
                yield "
                    <li data-itemtype=\"PluginFormcreatorFormanswer\" data-id=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_10 = (($__internal_compile_11 = $context["row"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["raw"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[(($context["rawKeyBase"] ?? null) . "_2")] ?? null) : null), "html", null, true);
                yield "\">
                        <i class=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject::getStatusClass", [($context["status"] ?? null)]), "html", null, true);
                yield "\"></i>
                        <a href=\"formanswer.form.php?id=";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_12 = (($__internal_compile_13 = $context["row"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["raw"] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[(($context["rawKeyBase"] ?? null) . "_2")] ?? null) : null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_14 = (($__internal_compile_15 = $context["row"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["raw"] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[(($context["rawKeyBase"] ?? null) . "_1")] ?? null) : null), "html", null, true);
                yield "</a>
                        <span class=\"plugin_formcreator_date\">";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_16 = (($__internal_compile_17 = $context["row"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["raw"] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[(($context["rawKeyBase"] ?? null) . "_6")] ?? null) : null)), "html", null, true);
                yield "</span>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "            </ul>
            <div class=\"text-center card-footer\">
                <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formanswer_url"] ?? null), "html", null, true);
            yield "?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::append_params", [($context["criteria"] ?? null), "&amp;"]), "html", null, true);
            yield "\">
                    ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All my forms (requester)", "formcreator"), "html", null, true);
            yield "
                </a>
            </div>
        </div>
    ";
        }
        // line 68
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@formcreator/components/card/formanswer.requester-last.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  142 => 68,  134 => 63,  128 => 62,  124 => 60,  115 => 57,  109 => 56,  105 => 55,  101 => 54,  98 => 53,  95 => 52,  92 => 51,  89 => 50,  86 => 49,  83 => 48,  80 => 47,  77 => 46,  74 => 45,  71 => 44,  67 => 43,  63 => 41,  57 => 39,  55 => 38,  50 => 36,  45 => 33,  43 => 32,  41 => 31,  38 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/components/card/formanswer.requester-last.html.twig", "/var/www/html/glpi/plugins/formcreator/templates/components/card/formanswer.requester-last.html.twig");
    }
}
