<?php

require 'nbbc.php';
$bb=new bbcode();
$output='[b][i]yuva shree[/i][/b][br]';
echo $bb->Parse($output);
$color='[color=red]Red color text[/color][br]';
echo $bb->Parse($color);
$quote='[quote=yuva]A Novel[/quote][br]';
echo $bb->Parse($quote);

$bb->setDetectURLs(true);
$url='http://google.com[br]';
echo $bb->Parse($url);
$smile=':)[br]';
echo $bb->Parse($smile);
$bb->AddRule('php',array( //This function adds a new tag rule.
    'simple_start'=>'<pre class="php">',
    'simple_end'=>'</pre>',
    'class'=>'block',//blockis used if in case there are other lines
    'allow_in'=>null//gives errors if v dont use
));
$result='[php]<?php echo "some php code";?>[/php]';
echo $bb->Parse($result);

$bb->AddRule('youtube',array(
   'mode'=>BBCODE_MODE_ENHANCED,
    'template'=>'<iframe class="youtube-player" type="text/html" width="640" height="380" src="http://youtube.com/embed/{$_content}" frameborder="0"></iframe>',
    'class'=>'block',
    'allow_in'=>null
));
$view='[youtube]CAIoYsii4BI[/youtube]';
echo $bb->Parse($view);

