<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_034936f5f494368d3d2a18e8ec34819add5fe85d26691280434e13fa0a710fd1 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  788 => 518,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 479,  698 => 477,  696 => 476,  692 => 474,  686 => 472,  682 => 470,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  289 => 196,  280 => 194,  276 => 193,  271 => 190,  251 => 182,  417 => 143,  411 => 140,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  377 => 129,  371 => 127,  359 => 123,  353 => 121,  350 => 120,  347 => 119,  338 => 116,  333 => 115,  328 => 113,  324 => 112,  315 => 111,  313 => 110,  308 => 109,  293 => 198,  281 => 98,  274 => 96,  262 => 188,  249 => 181,  237 => 91,  234 => 90,  232 => 89,  213 => 78,  210 => 77,  207 => 76,  186 => 72,  180 => 70,  172 => 68,  161 => 58,  152 => 54,  114 => 36,  356 => 122,  354 => 329,  351 => 328,  307 => 287,  70 => 26,  20 => 1,  113 => 40,  104 => 31,  100 => 36,  65 => 11,  97 => 41,  127 => 60,  110 => 22,  90 => 26,  84 => 27,  76 => 25,  53 => 15,  81 => 32,  77 => 20,  188 => 68,  184 => 63,  181 => 62,  170 => 9,  155 => 55,  58 => 14,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 138,  402 => 130,  398 => 136,  393 => 126,  387 => 122,  384 => 132,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 106,  341 => 117,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 288,  305 => 108,  298 => 91,  294 => 90,  285 => 100,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 187,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 69,  169 => 60,  140 => 55,  132 => 51,  128 => 42,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 68,  204 => 75,  179 => 69,  159 => 57,  143 => 56,  135 => 46,  119 => 42,  102 => 33,  71 => 23,  67 => 20,  63 => 18,  59 => 16,  93 => 27,  88 => 32,  78 => 19,  94 => 34,  89 => 30,  85 => 23,  75 => 18,  68 => 12,  56 => 11,  28 => 3,  38 => 7,  27 => 3,  201 => 74,  196 => 90,  183 => 71,  171 => 61,  166 => 71,  163 => 68,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 47,  136 => 56,  121 => 46,  117 => 37,  105 => 18,  91 => 33,  62 => 12,  49 => 11,  26 => 3,  24 => 2,  87 => 32,  46 => 10,  44 => 10,  31 => 4,  25 => 35,  21 => 2,  19 => 1,  79 => 21,  72 => 17,  69 => 16,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 64,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 38,  115 => 43,  111 => 37,  108 => 33,  101 => 30,  98 => 34,  96 => 30,  83 => 30,  74 => 27,  66 => 25,  55 => 13,  52 => 12,  50 => 18,  43 => 7,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 17,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 51,  144 => 49,  141 => 48,  133 => 45,  130 => 41,  125 => 41,  122 => 43,  116 => 41,  112 => 25,  109 => 34,  106 => 45,  103 => 44,  99 => 31,  95 => 27,  92 => 28,  86 => 28,  82 => 28,  80 => 27,  73 => 24,  64 => 13,  60 => 20,  57 => 20,  54 => 19,  51 => 13,  48 => 9,  45 => 9,  42 => 12,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
