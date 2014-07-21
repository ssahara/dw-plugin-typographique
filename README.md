DokuWiki plugin Typographique
=============================

Extended version of [Typography plugin](http://treecode.pl/typography.html) developed by Paweł Piekarski.

Sometimes there is need for nice looking slogan, quotation or article paragraph. For full control you need full control over font displaing as CSS can give. Typography plugin extends DokuWiki markup by typesetting abilities. It brings all font related directives from CSS as wiki syntax.

It gives ability to adjust settings for text look, but does not influence subtle stuff like text baseline or vertical alignment.


Syntax
------

`<typo parameters>`beautiful looking test`</typo>` where parameters are semicolon separated name:value;

| functionality  | parameter syntax |
|:--             |:--               |
|font family     | `<typo ff:Coma separated, font famliy names, can contain spaces;>`Text`</typo>` |
|font variant    | `<typo fv:smallcaps;>`Text`</typo>` |
|font size       | `<typo fs:20px;>`Text`</typo>` |
|line height     | `<typo lh:20px;>`Text`</typo>` |
|letter spacing  | `<typo ls:20px;>`Text`</typo>` |
|spacing between word  | `<typo ws:20px;>`Text`</typo>` |


----
Licensed under the GNU Public License (GPL) version 2

