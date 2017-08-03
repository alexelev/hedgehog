<?php  return array (
  'resourceClass' => 'msCategory',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Ежесайт',
    'longtitle' => 'Наши колючие питомцы',
    'description' => 'Декоративные ежи - лучшие домашние питомцы! Выберите своего любимца из Мариуполя.',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1501241778,
    'editedby' => 1,
    'editedon' => 1501610420,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => 'Питомцы ищут хозяев',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'msCategory',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="http://hedgehog/" />
<title>[[ !pdoTitle? &outputSeparator=`|` &cache=`1` ]] | Ах ты ж ЕЖ!</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">



<!-- You can add theme from bootswatch.com: just add it into &cssSources=``.
For example: /assets/components/themebootstrap/css/slate/bootstrap.min.css-->


<!-- <script src="/assets/components/themebootstrap/js/jquery.min.js"></script> -->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="http://hedgehog/">
      <img src="/assets/build/img/logo.png" alt="hedgehog logo" width="80px">
      <span class="logo-title">Ах ты ж ЕЖ!</span>
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

        <ul class="navbar-nav"><li class="nav-item active"><a href="/"  class="nav-link">Питомцы ищут хозяев</a></li><li class="nav-item"><a href="collection/"  class="nav-link">Наша коллекция</a></li><li class="nav-item"><a href="contacts"  class="nav-link">Контакты</a></li></ul>

    </div>
</nav>



  <header>
    
  </header>
  <div class="container">
    

    [[!msProducts?
      &tpl=`categoryTpl`
    ]]

  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>
',
    '_isForward' => false,
    '_sjscripts' => 
    array (
      0 => '<link rel="stylesheet" href="/assets/components/minifyx/cache/styles_5685348cc0.min.css" type="text/css" />',
    ),
    '_jscripts' => 
    array (
      0 => '<script type="text/javascript" src="/assets/components/minifyx/cache/scripts_da39a3ee5e.min.js"></script>',
    ),
    '_loadedjscripts' => 
    array (
      '/assets/components/minifyx/cache/scripts_da39a3ee5e.min.js' => true,
      '/assets/components/minifyx/cache/styles_5685348cc0.min.css' => true,
    ),
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[MinifyX?
    &minifyCss=`1`
    &registerCss=`1`
    &cssSources=`
      /assets/build/css/index.css,
    `
    &minifyJs=`1`
    &registerJs=`1`
    &jsSources=`
      /assets/build/css/index.js
    `
  ]]' => '',
    '[[ $headSection ]]' => '<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="http://hedgehog/" />
<title>[[ !pdoTitle? &outputSeparator=`|` &cache=`1` ]] | Ах ты ж ЕЖ!</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">



<!-- You can add theme from bootswatch.com: just add it into &cssSources=``.
For example: /assets/components/themebootstrap/css/slate/bootstrap.min.css-->


<!-- <script src="/assets/components/themebootstrap/js/jquery.min.js"></script> -->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
',
    '[[ ~1 ]]' => 'http://hedgehog/',
    '[[pdoMenu?
        	&parents=`0`
        	&firstClass=`0`
        	&lastClass=`0`
        	&outerClass=`navbar-nav`
        	&innerClass=`nav-link`
            &rowClass=`nav-item`
            &tpl=`@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]] class="nav-link">[[+menutitle]]</a>[[+wrapper]]</li>`
        ]]' => '<ul class="navbar-nav"><li class="nav-item active"><a href="/"  class="nav-link">Питомцы ищут хозяев</a></li><li class="nav-item"><a href="collection/"  class="nav-link">Наша коллекция</a></li><li class="nav-item"><a href="contacts"  class="nav-link">Контакты</a></li></ul>',
    '[[ $nav ]]' => '<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="http://hedgehog/">
      <img src="/assets/build/img/logo.png" alt="hedgehog logo" width="80px">
      <span class="logo-title">Ах ты ж ЕЖ!</span>
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

        <ul class="navbar-nav"><li class="nav-item active"><a href="/"  class="nav-link">Питомцы ищут хозяев</a></li><li class="nav-item"><a href="collection/"  class="nav-link">Наша коллекция</a></li><li class="nav-item"><a href="contacts"  class="nav-link">Контакты</a></li></ul>

    </div>
</nav>


',
    '[[ $scriptConnection ]]' => '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
',
    '[[pdoCrumbs?showLog=``&fastMode=``&from=`0`&to=`1`&limit=`3`&exclude=``&outputSeparator=`|`&toPlaceholder=``&includeTVs=``&prepareTVs=`1`&processTVs=``&tvPrefix=`tv.`&where=``&showUnpublished=``&showDeleted=``&showHidden=`1`&hideContainers=``&tpl=`@INLINE [[+menutitle]]`&tplCurrent=`@INLINE [[+menutitle]]`&tplMax=``&tplHome=``&tplWrapper=`@INLINE [[+output]]`&wrapIfEmpty=``&showCurrent=`0`&showHome=`0`&showAtHome=`0`&hideSingle=``&direction=`rtl`&scheme=``&useWeblinkUrl=`1`&id=`0`&titleField=`longtitle`&cache=`1`&cacheTime=`0`&tplPages=`@INLINE [[%pdopage_page]] [[+page]] [[%pdopage_from]] [[+pageCount]]`&pageVarKey=`page`&tplSearch=`@INLINE «[[+mse2_query]]»`&queryVarKey=`query`&minQuery=`3`&registerJs=``]]' => '',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'headSection' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'headSection',
          'description' => 'Секция head',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<meta charset="[[ ++modx_charset ]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="[[ ++site_url ]]" />
<title>[[ !pdoTitle? &outputSeparator=`|` &cache=`1` ]] | [[ ++site_name ]]</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

[[MinifyX?
    &minifyCss=`1`
    &registerCss=`1`
    &cssSources=`
      /assets/build/css/index.css,
    `
    &minifyJs=`1`
    &registerJs=`1`
    &jsSources=`
      /assets/build/css/index.js
    `
  ]]

<!-- You can add theme from bootswatch.com: just add it into &cssSources=``.
For example: [[++assets_url]]components/themebootstrap/css/slate/bootstrap.min.css-->
[[-
  [[MinifyX?
    &minifyCss=`1`
    &registerCss=`1`
    &cssSources=`
      [[++assets_url]]components/themebootstrap/css/bootstrap.min.css,
      [[++assets_url]]components/themebootstrap/css/add.css
    `
    &minifyJs=`1`
    &registerJs=`1`
    &jsSources=`
      [[++assets_url]]components/themebootstrap/js/bootstrap.min.js
    `
  ]]
]]

<!-- <script src="[[++assets_url]]components/themebootstrap/js/jquery.min.js"></script> -->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/static/chunks/headSection.chunks.tpl',
          'content' => '<meta charset="[[ ++modx_charset ]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="[[ ++site_url ]]" />
<title>[[ !pdoTitle? &outputSeparator=`|` &cache=`1` ]] | [[ ++site_name ]]</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

[[MinifyX?
    &minifyCss=`1`
    &registerCss=`1`
    &cssSources=`
      /assets/build/css/index.css,
    `
    &minifyJs=`1`
    &registerJs=`1`
    &jsSources=`
      /assets/build/css/index.js
    `
  ]]

<!-- You can add theme from bootswatch.com: just add it into &cssSources=``.
For example: [[++assets_url]]components/themebootstrap/css/slate/bootstrap.min.css-->
[[-
  [[MinifyX?
    &minifyCss=`1`
    &registerCss=`1`
    &cssSources=`
      [[++assets_url]]components/themebootstrap/css/bootstrap.min.css,
      [[++assets_url]]components/themebootstrap/css/add.css
    `
    &minifyJs=`1`
    &registerJs=`1`
    &jsSources=`
      [[++assets_url]]components/themebootstrap/js/bootstrap.min.js
    `
  ]]
]]

<!-- <script src="[[++assets_url]]components/themebootstrap/js/jquery.min.js"></script> -->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'nav' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'nav',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="[[ ~1 ]]">
      <img src="/assets/build/img/logo.png" alt="hedgehog logo" width="80px">
      <span class="logo-title">[[ ++site_name ]]</span>
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

        [[pdoMenu?
        	&parents=`0`
        	&firstClass=`0`
        	&lastClass=`0`
        	&outerClass=`navbar-nav`
        	&innerClass=`nav-link`
            &rowClass=`nav-item`
            &tpl=`@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]] class="nav-link">[[+menutitle]]</a>[[+wrapper]]</li>`
        ]]

    </div>
</nav>


',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/static/chunks/nav.chunks.tpl',
          'content' => '<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="[[ ~1 ]]">
      <img src="/assets/build/img/logo.png" alt="hedgehog logo" width="80px">
      <span class="logo-title">[[ ++site_name ]]</span>
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

        [[pdoMenu?
        	&parents=`0`
        	&firstClass=`0`
        	&lastClass=`0`
        	&outerClass=`navbar-nav`
        	&innerClass=`nav-link`
            &rowClass=`nav-item`
            &tpl=`@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]] class="nav-link">[[+menutitle]]</a>[[+wrapper]]</li>`
        ]]

    </div>
</nav>


',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'scriptConnection' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scriptConnection',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/static/chunks/scriptConnection.chunks.tpl',
          'content' => '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'MinifyX' => 
      array (
        'fields' => 
        array (
          'id' => 47,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'MinifyX',
          'description' => 'MinifyX is a snippet the allows you to combine and minify JS and CSS files',
          'editor_type' => 0,
          'category' => 13,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
if (!$modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {return;}
/** @var MinifyX $MinifyX */
$MinifyX = new MinifyX($modx, $scriptProperties);
if (!$MinifyX->prepareCacheFolder()) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'[MinifyX] Could not create cache dir "\'.$MinifyX->config[\'cacheFolder\'].\'"\');
	return;
}
$cacheFolderUrl = MODX_BASE_URL . str_replace(MODX_BASE_PATH, \'\', $MinifyX->config[\'cacheFolder\']);

$array = array(
	\'js\' => trim($modx->getOption(\'jsSources\', $scriptProperties, \'\', true)),
	\'css\' => trim($modx->getOption(\'cssSources\', $scriptProperties, \'\', true)),
);

foreach ($array as $type => $value) {
	if (empty($value)) {continue;}
	$filename = $MinifyX->config[$type.\'Filename\'] . \'_\';
	$extension = $MinifyX->config[$type.\'Ext\'];
	$register = $MinifyX->config[\'register\'.ucfirst($type)];
	$placeholder = !empty($MinifyX->config[$type.\'Placeholder\'])
		? $MinifyX->config[$type.\'Placeholder\']
		: \'\';

	$files = $MinifyX->prepareFiles($value);
	$properties = array(
		\'minify\' => $MinifyX->config[\'minify\'.ucfirst($type)]
				? \'true\'
				: \'false\',
	);

	$result = $MinifyX->Munee($files, $properties);
	$file = $MinifyX->saveFile($result, $filename, $extension);

	// Register file on frontend
	if (!empty($file) && file_exists($MinifyX->config[\'cacheFolder\'] . $file)) {
		if ($register == \'placeholder\' && $placeholder) {
			$tag = $type == \'css\'
				? \'<link rel="stylesheet" href="\' . $cacheFolderUrl .  $file . \'" type="text/css" />\'
				: \'<script type="text/javascript" src="\' . $cacheFolderUrl . $file . \'"></script>\';
			$modx->setPlaceholder($placeholder, $tag);
		}
		else {
			if ($type == \'css\') {
				$modx->regClientCSS($cacheFolderUrl . $file);
			}
			else {
				if ($register == \'startup\') {
					$modx->regClientStartupScript($cacheFolderUrl . $file);
				}
				else {
					$modx->regClientScript($cacheFolderUrl . $file);
				}
			}
		}
	}
}
return;',
          'locked' => false,
          'properties' => 
          array (
            'jsSources' => 
            array (
              'name' => 'jsSources',
              'desc' => 'minifyx_prop_jsSources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Список JS файлов для обработки. Можно указывать *.js и *.coffee.',
              'area_trans' => '',
            ),
            'cssSources' => 
            array (
              'name' => 'cssSources',
              'desc' => 'minifyx_prop_cssSources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Список CSS файлов для обработки. Можно указывать *.css, *.less и *.scss.',
              'area_trans' => '',
            ),
            'minifyJs' => 
            array (
              'name' => 'minifyJs',
              'desc' => 'minifyx_prop_minifyJs',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Включить минификацию JS?',
              'area_trans' => '',
            ),
            'minifyCss' => 
            array (
              'name' => 'minifyCss',
              'desc' => 'minifyx_prop_minifyCss',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Включить минификацию CSS?',
              'area_trans' => '',
            ),
            'jsFilename' => 
            array (
              'name' => 'jsFilename',
              'desc' => 'minifyx_prop_jsFilename',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'scripts',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Базовое имя готового JS файла.',
              'area_trans' => '',
            ),
            'cssFilename' => 
            array (
              'name' => 'cssFilename',
              'desc' => 'minifyx_prop_cssFilename',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'styles',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Базовое имя готового CSS файла.',
              'area_trans' => '',
            ),
            'registerJs' => 
            array (
              'name' => 'registerJs',
              'desc' => 'minifyx_prop_registerJs',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'placeholder',
                  'text' => 'Placeholder',
                  'name' => 'Placeholder',
                ),
                1 => 
                array (
                  'value' => 'startup',
                  'text' => 'Startup script',
                  'name' => 'Startup script',
                ),
                2 => 
                array (
                  'value' => 'default',
                  'text' => 'Default',
                  'name' => 'Default',
                ),
              ),
              'value' => 'placeholder',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Подключение javascript: можно сохранить в плейсхолдер (placeholder), вызвать в теге "head" (startup) или разместить перед закрывающим "body" (default).',
              'area_trans' => '',
            ),
            'jsPlaceholder' => 
            array (
              'name' => 'jsPlaceholder',
              'desc' => 'minifyx_prop_jsPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'MinifyX.javascript',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера javascript. Используется, если &registerJs=`placeholder`',
              'area_trans' => '',
            ),
            'registerCss' => 
            array (
              'name' => 'registerCss',
              'desc' => 'minifyx_prop_registerCss',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'placeholder',
                  'text' => 'Placeholder',
                  'name' => 'Placeholder',
                ),
                1 => 
                array (
                  'value' => 'default',
                  'text' => 'Default',
                  'name' => 'Default',
                ),
              ),
              'value' => 'placeholder',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Подключение сss: можно сохранить в плейсхолдер (placeholder) или вызвать в теге "head" (default).',
              'area_trans' => '',
            ),
            'cssPlaceholder' => 
            array (
              'name' => 'cssPlaceholder',
              'desc' => 'minifyx_prop_cssPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'MinifyX.css',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера css. Используется,если &registerCss=`placeholder`',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/minifyx/elements/snippets/snippet.minifyx.php',
          'content' => '/** @var array $scriptProperties */
if (!$modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {return;}
/** @var MinifyX $MinifyX */
$MinifyX = new MinifyX($modx, $scriptProperties);
if (!$MinifyX->prepareCacheFolder()) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'[MinifyX] Could not create cache dir "\'.$MinifyX->config[\'cacheFolder\'].\'"\');
	return;
}
$cacheFolderUrl = MODX_BASE_URL . str_replace(MODX_BASE_PATH, \'\', $MinifyX->config[\'cacheFolder\']);

$array = array(
	\'js\' => trim($modx->getOption(\'jsSources\', $scriptProperties, \'\', true)),
	\'css\' => trim($modx->getOption(\'cssSources\', $scriptProperties, \'\', true)),
);

foreach ($array as $type => $value) {
	if (empty($value)) {continue;}
	$filename = $MinifyX->config[$type.\'Filename\'] . \'_\';
	$extension = $MinifyX->config[$type.\'Ext\'];
	$register = $MinifyX->config[\'register\'.ucfirst($type)];
	$placeholder = !empty($MinifyX->config[$type.\'Placeholder\'])
		? $MinifyX->config[$type.\'Placeholder\']
		: \'\';

	$files = $MinifyX->prepareFiles($value);
	$properties = array(
		\'minify\' => $MinifyX->config[\'minify\'.ucfirst($type)]
				? \'true\'
				: \'false\',
	);

	$result = $MinifyX->Munee($files, $properties);
	$file = $MinifyX->saveFile($result, $filename, $extension);

	// Register file on frontend
	if (!empty($file) && file_exists($MinifyX->config[\'cacheFolder\'] . $file)) {
		if ($register == \'placeholder\' && $placeholder) {
			$tag = $type == \'css\'
				? \'<link rel="stylesheet" href="\' . $cacheFolderUrl .  $file . \'" type="text/css" />\'
				: \'<script type="text/javascript" src="\' . $cacheFolderUrl . $file . \'"></script>\';
			$modx->setPlaceholder($placeholder, $tag);
		}
		else {
			if ($type == \'css\') {
				$modx->regClientCSS($cacheFolderUrl . $file);
			}
			else {
				if ($register == \'startup\') {
					$modx->regClientStartupScript($cacheFolderUrl . $file);
				}
				else {
					$modx->regClientScript($cacheFolderUrl . $file);
				}
			}
		}
	}
}
return;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 39,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пункта меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, какие разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoTitle' => 
      array (
        'fields' => 
        array (
          'id' => 40,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoTitle',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
if (empty($outputSeparator)) {
    $outputSeparator = \' / \';
}
if (empty($titleField)) {
    $titleField = \'longtitle\';
}
if (!isset($pageVarKey)) {
    $pageVarKey = \'page\';
}
if (!isset($queryVarKey)) {
    $queryVarKey = \'query\';
}
if (empty($tplPages)) {
    $tplPages = \'@INLINE [[%pdopage_page]] [[+page]] [[%pdopage_from]] [[+pageCount]]\';
}
if (empty($tplSearch)) {
    $tplSearch = \'@INLINE «[[+mse2_query]]»\';
}
if (empty($minQuery)) {
    $minQuery = 3;
}
if (empty($id)) {
    $id = $modx->resource->id;
}
if (empty($cacheKey)) {
    $cacheKey = \'title_crumbs\';
}
if (!isset($cacheTime)) {
    $cacheTime = 0;
}
/** @var pdoTools $pdoTools */
$fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
$path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoTools = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$modx->lexicon->load(\'pdotools:pdopage\');

/** @var modResource $resource */
$resource = ($id == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject(\'modResource\', $id);
if (!$resource) {
    return \'\';
}

$title = array();
$pagetitle = trim($resource->get($titleField));
if (empty($pagetitle)) {
    $pagetitle = $resource->get(\'pagetitle\');
}

// Add search request if exists
if (!empty($_GET[$queryVarKey]) && strlen($_GET[$queryVarKey]) >= $minQuery && !empty($tplSearch)) {
    $pagetitle .= \' \' . $pdoTools->getChunk($tplSearch, array(
            $queryVarKey => $modx->stripTags($_GET[$queryVarKey]),
        ));
}
$title[] = $pagetitle;

// Add pagination if exists
if (!empty($_GET[$pageVarKey]) && !empty($tplPages)) {
    $title[] = $pdoTools->getChunk($tplPages, array(
        \'page\' => intval($_GET[$pageVarKey]),
    ));
}

// Add parents
$cacheKey = $resource->getCacheKey() . \'/\' . $cacheKey;
$cacheOptions = array(\'cache_key\' => $modx->getOption(\'cache_resource_key\', null, \'resource\'));
$crumbs = \'\';
if (empty($cache) || !$crumbs = $modx->cacheManager->get($cacheKey, $cacheOptions)) {
    $crumbs = $pdoTools->runSnippet(\'pdoCrumbs\', array_merge(
        array(
            \'to\' => $resource->id,
            \'outputSeparator\' => $outputSeparator,
            \'showHome\' => 0,
            \'showAtHome\' => 0,
            \'showCurrent\' => 0,
            \'direction\' => \'rtl\',
            \'tpl\' => \'@INLINE [[+menutitle]]\',
            \'tplCurrent\' => \'@INLINE [[+menutitle]]\',
            \'tplWrapper\' => \'@INLINE [[+output]]\',
            \'tplMax\' => \'\',
            \'tplHome\' => \'\',
        ), $scriptProperties
    ));
}
if (!empty($crumbs)) {
    if (!empty($cache)) {
        $modx->cacheManager->set($cacheKey, $crumbs, $cacheTime, $cacheOptions);
    }
    $title[] = $crumbs;
}

if (!empty($registerJs)) {
    $config = array(
        \'separator\' => $outputSeparator,
        \'tpl\' => str_replace(array(\'[[+\', \']]\'), array(\'{\', \'}\'), $pdoTools->getChunk($tplPages)),
    );
    $modx->regClientStartupScript(\'<script type="text/javascript">pdoTitle = \' . json_encode($config) . \';</script>\',
        true);
}

return implode($outputSeparator, $title);',
          'locked' => false,
          'properties' => 
          array (
            'id' => 
            array (
              'name' => 'id',
              'desc' => 'pdotools_prop_id',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор ресурса.',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'pdotools_prop_exclude',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список id ресурсов, которые нужно исключить из выборки.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_title_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Лимит выборки родителей ресурса.',
              'area_trans' => '',
            ),
            'titleField' => 
            array (
              'name' => 'titleField',
              'desc' => 'pdotools_prop_titleField',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'longtitle',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Поле текущего ресурса для вывода в заголовке страницы.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_title_cache',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование выборки родителей ресурса для заголовка страницы.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'tplPages' => 
            array (
              'name' => 'tplPages',
              'desc' => 'pdotools_prop_tplPages',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE [[%pdopage_page]] [[+page]] [[%pdopage_from]] [[+pageCount]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Шаблон оформления пагинации в заголовке страницы.',
              'area_trans' => '',
            ),
            'pageVarKey' => 
            array (
              'name' => 'pageVarKey',
              'desc' => 'pdotools_prop_pageVarKey',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'page',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя переменной для поиска номера страницы в url.',
              'area_trans' => '',
            ),
            'tplSearch' => 
            array (
              'name' => 'tplSearch',
              'desc' => 'pdotools_prop_tplSearch',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE «[[+mse2_query]]»',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Шаблон оформления поискового запроса в заголовке страницы.',
              'area_trans' => '',
            ),
            'queryVarKey' => 
            array (
              'name' => 'queryVarKey',
              'desc' => 'pdotools_prop_queryVarKey',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'query',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя переменной поискового запроса в url.',
              'area_trans' => '',
            ),
            'minQuery' => 
            array (
              'name' => 'minQuery',
              'desc' => 'pdotools_prop_minQuery',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Минимальная длина поискового запроса для вывода в заголовке страницы.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_title_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ' / ',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель элементов в заголовке страницы.',
              'area_trans' => '',
            ),
            'registerJs' => 
            array (
              'name' => 'registerJs',
              'desc' => 'pdotools_prop_registerJs',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вставить на страницу javascript с переменными для поддержки &ajaxMode сниппета pdoPage.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdotitle.php',
          'content' => '/** @var array $scriptProperties */
if (empty($outputSeparator)) {
    $outputSeparator = \' / \';
}
if (empty($titleField)) {
    $titleField = \'longtitle\';
}
if (!isset($pageVarKey)) {
    $pageVarKey = \'page\';
}
if (!isset($queryVarKey)) {
    $queryVarKey = \'query\';
}
if (empty($tplPages)) {
    $tplPages = \'@INLINE [[%pdopage_page]] [[+page]] [[%pdopage_from]] [[+pageCount]]\';
}
if (empty($tplSearch)) {
    $tplSearch = \'@INLINE «[[+mse2_query]]»\';
}
if (empty($minQuery)) {
    $minQuery = 3;
}
if (empty($id)) {
    $id = $modx->resource->id;
}
if (empty($cacheKey)) {
    $cacheKey = \'title_crumbs\';
}
if (!isset($cacheTime)) {
    $cacheTime = 0;
}
/** @var pdoTools $pdoTools */
$fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
$path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoTools = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$modx->lexicon->load(\'pdotools:pdopage\');

/** @var modResource $resource */
$resource = ($id == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject(\'modResource\', $id);
if (!$resource) {
    return \'\';
}

$title = array();
$pagetitle = trim($resource->get($titleField));
if (empty($pagetitle)) {
    $pagetitle = $resource->get(\'pagetitle\');
}

// Add search request if exists
if (!empty($_GET[$queryVarKey]) && strlen($_GET[$queryVarKey]) >= $minQuery && !empty($tplSearch)) {
    $pagetitle .= \' \' . $pdoTools->getChunk($tplSearch, array(
            $queryVarKey => $modx->stripTags($_GET[$queryVarKey]),
        ));
}
$title[] = $pagetitle;

// Add pagination if exists
if (!empty($_GET[$pageVarKey]) && !empty($tplPages)) {
    $title[] = $pdoTools->getChunk($tplPages, array(
        \'page\' => intval($_GET[$pageVarKey]),
    ));
}

// Add parents
$cacheKey = $resource->getCacheKey() . \'/\' . $cacheKey;
$cacheOptions = array(\'cache_key\' => $modx->getOption(\'cache_resource_key\', null, \'resource\'));
$crumbs = \'\';
if (empty($cache) || !$crumbs = $modx->cacheManager->get($cacheKey, $cacheOptions)) {
    $crumbs = $pdoTools->runSnippet(\'pdoCrumbs\', array_merge(
        array(
            \'to\' => $resource->id,
            \'outputSeparator\' => $outputSeparator,
            \'showHome\' => 0,
            \'showAtHome\' => 0,
            \'showCurrent\' => 0,
            \'direction\' => \'rtl\',
            \'tpl\' => \'@INLINE [[+menutitle]]\',
            \'tplCurrent\' => \'@INLINE [[+menutitle]]\',
            \'tplWrapper\' => \'@INLINE [[+output]]\',
            \'tplMax\' => \'\',
            \'tplHome\' => \'\',
        ), $scriptProperties
    ));
}
if (!empty($crumbs)) {
    if (!empty($cache)) {
        $modx->cacheManager->set($cacheKey, $crumbs, $cacheTime, $cacheOptions);
    }
    $title[] = $crumbs;
}

if (!empty($registerJs)) {
    $config = array(
        \'separator\' => $outputSeparator,
        \'tpl\' => str_replace(array(\'[[+\', \']]\'), array(\'{\', \'}\'), $pdoTools->getChunk($tplPages)),
    );
    $modx->regClientStartupScript(\'<script type="text/javascript">pdoTitle = \' . json_encode($config) . \';</script>\',
        true);
}

return implode($outputSeparator, $title);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'msProducts' => 
      array (
        'fields' => 
        array (
          'id' => 56,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'msProducts',
          'description' => '',
          'editor_type' => 0,
          'category' => 15,
          'cache_type' => 0,
          'snippet' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'miniShop2\');
$miniShop2->initialize($modx->context->key);
/** @var pdoFetch $pdoFetch */
if (!$modx->loadClass(\'pdofetch\', MODX_CORE_PATH . \'components/pdotools/model/pdotools/\', false, true)) {
    return false;
}
$pdoFetch = new pdoFetch($modx, $scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded.\');

if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}

// Start build "where" expression
$where = array(
    \'class_key\' => \'msProduct\',
);
if (empty($showZeroPrice)) {
    $where[\'Data.price:>\'] = 0;
}
// Add grouping
$groupby = array(
    \'msProduct.id\',
);

// Join tables
$leftJoin = array(
    \'Data\' => array(\'class\' => \'msProductData\'),
    \'Vendor\' => array(\'class\' => \'msVendor\', \'on\' => \'Data.vendor=Vendor.id\'),
);

$select = array(
    \'msProduct\' => !empty($includeContent)
        ? $modx->getSelectColumns(\'msProduct\', \'msProduct\')
        : $modx->getSelectColumns(\'msProduct\', \'msProduct\', \'\', array(\'content\'), true),
    \'Data\' => $modx->getSelectColumns(\'msProductData\', \'Data\', \'\', array(\'id\'), true),
    \'Vendor\' => $modx->getSelectColumns(\'msVendor\', \'Vendor\', \'vendor.\', array(\'id\'), true),
);

// Include thumbnails
if (!empty($includeThumbs)) {
    $thumbs = array_map(\'trim\', explode(\',\', $includeThumbs));
    foreach ($thumbs as $thumb) {
        if (empty($thumb)) {
            continue;
        }
        $leftJoin[$thumb] = array(
            \'class\' => \'msProductFile\',
            \'on\' => "`{$thumb}`.product_id = msProduct.id AND `{$thumb}`.rank = 0 AND `{$thumb}`.path LIKE \'%/{$thumb}/%\'",
        );
        $select[$thumb] = "`{$thumb}`.url as `{$thumb}`";
        $groupby[] = "`{$thumb}`.url";
    }
}

// Include linked products
$innerJoin = array();
if (!empty($link) && !empty($master)) {
    $innerJoin[\'Link\'] = array(
        \'class\' => \'msProductLink\',
        \'on\' => \'msProduct.id = Link.slave AND Link.link = \' . $link,
    );
    $where[\'Link.master\'] = $master;
} elseif (!empty($link) && !empty($slave)) {
    $innerJoin[\'Link\'] = array(
        \'class\' => \'msProductLink\',
        \'on\' => \'msProduct.id = Link.master AND Link.link = \' . $link,
    );
    $where[\'Link.slave\'] = $slave;
}

// Add user parameters
foreach (array(\'where\', \'leftJoin\', \'innerJoin\', \'select\', \'groupby\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Add filters by options
$joinedOptions = array();
if (!empty($scriptProperties[\'optionFilters\'])) {
    $filters = json_decode($scriptProperties[\'optionFilters\'], true);
    foreach ($filters as $key => $value) {
        $option = preg_replace(\'#\\:.*#\', \'\', $key);
        $key = str_replace($option, $option . \'.value\', $key);
        if (!in_array($option, $joinedOptions)) {
            $leftJoin[$option] = array(
                \'class\' => \'msProductOption\',
                \'on\' => "`{$option}`.product_id = Data.id AND `{$option}`.key = \'{$option}\'",
            );
            $joinedOptions[] = $option;
            $where[$key] = $value;
        }
    }
}

// Add sort by options
if (!empty($scriptProperties[\'sortbyOptions\'])) {
    $sorts = array_map(\'trim\', explode(\',\', $scriptProperties[\'sortbyOptions\']));
    foreach ($sorts as $sort) {
        $sort = explode(\':\', $sort);
        $option = $sort[0];
        if (preg_match("#\\b{$option}\\b#", $scriptProperties[\'sortby\'], $matches)) {
            $type = \'string\';
            if (isset($sort[1])) {
                $type = $sort[1];
            }
            switch ($type) {
                case \'number\':
                case \'decimal\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS DECIMAL(13,3))";
                    break;
                case \'int\':
                case \'integer\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS UNSIGNED INTEGER)";
                    break;
                case \'date\':
                case \'datetime\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS DATETIME)";
                    break;
                default:
                    $sortbyOptions = "`{$option}`.`value`";
                    break;
            }
            $scriptProperties[\'sortby\'] = preg_replace($matches[0], $sortbyOptions, $scriptProperties[\'sortby\']);
            $groupby[] = "`{$option}`.value";
        }
        print_r($scriptProperties[\'sortby\']);

        if (!in_array($option, $joinedOptions)) {
            $leftJoin[$option] = array(
                \'class\' => \'msProductOption\',
                \'on\' => "`{$option}`.product_id = Data.id AND `{$option}`.key = \'{$option}\'",
            );
            $joinedOptions[] = $option;
        }

    }
}

$default = array(
    \'class\' => \'msProduct\',
    \'where\' => $where,
    \'leftJoin\' => $leftJoin,
    \'innerJoin\' => $innerJoin,
    \'select\' => $select,
    \'sortby\' => \'msProduct.id\',
    \'sortdir\' => \'ASC\',
    \'groupby\' => implode(\', \', $groupby),
    \'return\' => !empty($returnIds)
        ? \'ids\'
        : \'data\',
    \'nestedChunkPrefix\' => \'minishop2_\',
);
// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

// Process rows
$output = array();
if (!empty($rows) && is_array($rows)) {
    $c = $modx->newQuery(\'modPluginEvent\', array(\'event:IN\' => array(\'msOnGetProductPrice\', \'msOnGetProductWeight\')));
    $c->innerJoin(\'modPlugin\', \'modPlugin\', \'modPlugin.id = modPluginEvent.pluginid\');
    $c->where(\'modPlugin.disabled = 0\');

    $modifications = $modx->getOption(\'ms2_price_snippet\', null, false, true) ||
        $modx->getOption(\'ms2_weight_snippet\', null, false, true) || $modx->getCount(\'modPluginEvent\', $c);
    if ($modifications) {
        /** @var msProductData $product */
        $product = $modx->newObject(\'msProductData\');
    }
    $pdoFetch->addTime(\'Checked the active modifiers\');

    $opt_time = 0;
    foreach ($rows as $k => $row) {
        if ($modifications) {
            $product->fromArray($row, \'\', true, true);
            $tmp = $row[\'price\'];
            $row[\'price\'] = $product->getPrice($row);
            $row[\'weight\'] = $product->getWeight($row);
            if ($row[\'price\'] != $tmp) {
                $row[\'old_price\'] = $tmp;
            }
        }
        $row[\'price\'] = $miniShop2->formatPrice($row[\'price\']);
        $row[\'old_price\'] = $miniShop2->formatPrice($row[\'old_price\']);
        $row[\'weight\'] = $miniShop2->formatWeight($row[\'weight\']);
        $row[\'idx\'] = $pdoFetch->idx++;

        $opt_time_start = microtime(true);
        $options = $modx->call(\'msProductData\', \'loadOptions\', array(&$modx, $row[\'id\']));
        $row = array_merge($row, $options);
        $opt_time += microtime(true) - $opt_time_start;

        $tpl = $pdoFetch->defineChunk($row);
        $output[] = $pdoFetch->getChunk($tpl, $row);
    }
    $pdoFetch->addTime(\'Time to load products options\', $opt_time);
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="msProductsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds) && is_string($rows)) {
    $modx->setPlaceholder(\'msProducts.log\', $log);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $rows);
    } else {
        return $rows;
    }
} elseif (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    if (empty($outputSeparator)) {
        $outputSeparator = "\\n";
    }
    $output[\'log\'] = $log;
    $output = implode($outputSeparator, $output);

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(
            \'output\' => $output,
        ));
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'ms2_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.msProducts.row',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления для каждого результата',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'ms2_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Лимит выборки результатов',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'ms2_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов с начала выборки',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'ms2_prop_depth',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Глубина поиска товаров от каждого родителя.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'ms2_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'id',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Сортировка выборки. Для сортировки по полям товара нужно добавить префикс "Data.", например: "&sortby=`Data.price`"',
              'area_trans' => '',
            ),
            'sortbyOptions' => 
            array (
              'name' => 'sortbyOptions',
              'desc' => 'ms2_prop_sortbyOptions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Указывает по каким опциям и как сортировать среди перечисленного в &sortby. Передаются строкой, например, "optionkey:integer,optionkey2:datetime"',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'ms2_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'ms2_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'ms2_prop_toSeparatePlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Если вы укажете слово в этом параметре, то ВСЕ результаты будут выставлены в разные плейсхолдеры, начинающиеся с этого слова и заканчивающиеся порядковым номером строки, от нуля. Например, указав в параметре "myPl", вы получите плейсхолдеры [[+myPl0]], [[+myPl1]] и т.д.',
              'area_trans' => '',
            ),
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'ms2_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контексте "mgr".',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'ms2_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Список категорий, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'ms2_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Список товаров, через запятую, для вывода в результатах. Если id товара начинается с минуса, этот товар исключается из выборки.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'ms2_prop_includeContent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Выбирать поле "content" у товаров.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'ms2_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'includeThumbs' => 
            array (
              'name' => 'includeThumbs',
              'desc' => 'ms2_prop_includeThumbs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Список размеров превьюшек для выборки, через запятую. Например: "small,medium" дадут плейслолдеры [[+small]] и [[+medium]]. Картинки должны быть заранее сгенерированы в галерее товара.',
              'area_trans' => '',
            ),
            'optionFilters' => 
            array (
              'name' => 'optionFilters',
              'desc' => 'ms2_prop_optionFilters',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Фильтры по опциям товаров. Передаются JSON строкой, например, {"optionkey:>":10}',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'ms2_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Строка, закодированная в JSON, с дополнительными условиями выборки.',
              'area_trans' => '',
            ),
            'link' => 
            array (
              'name' => 'link',
              'desc' => 'ms2_prop_link',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Id связи товаров, который присваивается автоматически при создании новой связи в настройках.',
              'area_trans' => '',
            ),
            'master' => 
            array (
              'name' => 'master',
              'desc' => 'ms2_prop_master',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Id главного товара. Если указаны и "master" и "slave" - выборка пройдёт по master.',
              'area_trans' => '',
            ),
            'slave' => 
            array (
              'name' => 'slave',
              'desc' => 'ms2_prop_slave',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Id подчиненного товара. Если указан "master" - эта опция игнорируется.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'ms2_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ плейсхолдеров, например "tv.". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'ms2_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
              'area_trans' => '',
            ),
            'returnIds' => 
            array (
              'name' => 'returnIds',
              'desc' => 'ms2_prop_returnIds',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Возвращать строку с id товаров, вместо оформленных чанков.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'ms2_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные товары.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'ms2_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые товары.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'ms2_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Показывать товары, скрытые в меню.',
              'area_trans' => '',
            ),
            'showZeroPrice' => 
            array (
              'name' => 'showZeroPrice',
              'desc' => 'ms2_prop_showZeroPrice',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Показывать товары с нулевой ценой.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'ms2_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/minishop2/elements/snippets/snippet.ms_products.php',
          'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'miniShop2\');
$miniShop2->initialize($modx->context->key);
/** @var pdoFetch $pdoFetch */
if (!$modx->loadClass(\'pdofetch\', MODX_CORE_PATH . \'components/pdotools/model/pdotools/\', false, true)) {
    return false;
}
$pdoFetch = new pdoFetch($modx, $scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded.\');

if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}

// Start build "where" expression
$where = array(
    \'class_key\' => \'msProduct\',
);
if (empty($showZeroPrice)) {
    $where[\'Data.price:>\'] = 0;
}
// Add grouping
$groupby = array(
    \'msProduct.id\',
);

// Join tables
$leftJoin = array(
    \'Data\' => array(\'class\' => \'msProductData\'),
    \'Vendor\' => array(\'class\' => \'msVendor\', \'on\' => \'Data.vendor=Vendor.id\'),
);

$select = array(
    \'msProduct\' => !empty($includeContent)
        ? $modx->getSelectColumns(\'msProduct\', \'msProduct\')
        : $modx->getSelectColumns(\'msProduct\', \'msProduct\', \'\', array(\'content\'), true),
    \'Data\' => $modx->getSelectColumns(\'msProductData\', \'Data\', \'\', array(\'id\'), true),
    \'Vendor\' => $modx->getSelectColumns(\'msVendor\', \'Vendor\', \'vendor.\', array(\'id\'), true),
);

// Include thumbnails
if (!empty($includeThumbs)) {
    $thumbs = array_map(\'trim\', explode(\',\', $includeThumbs));
    foreach ($thumbs as $thumb) {
        if (empty($thumb)) {
            continue;
        }
        $leftJoin[$thumb] = array(
            \'class\' => \'msProductFile\',
            \'on\' => "`{$thumb}`.product_id = msProduct.id AND `{$thumb}`.rank = 0 AND `{$thumb}`.path LIKE \'%/{$thumb}/%\'",
        );
        $select[$thumb] = "`{$thumb}`.url as `{$thumb}`";
        $groupby[] = "`{$thumb}`.url";
    }
}

// Include linked products
$innerJoin = array();
if (!empty($link) && !empty($master)) {
    $innerJoin[\'Link\'] = array(
        \'class\' => \'msProductLink\',
        \'on\' => \'msProduct.id = Link.slave AND Link.link = \' . $link,
    );
    $where[\'Link.master\'] = $master;
} elseif (!empty($link) && !empty($slave)) {
    $innerJoin[\'Link\'] = array(
        \'class\' => \'msProductLink\',
        \'on\' => \'msProduct.id = Link.master AND Link.link = \' . $link,
    );
    $where[\'Link.slave\'] = $slave;
}

// Add user parameters
foreach (array(\'where\', \'leftJoin\', \'innerJoin\', \'select\', \'groupby\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Add filters by options
$joinedOptions = array();
if (!empty($scriptProperties[\'optionFilters\'])) {
    $filters = json_decode($scriptProperties[\'optionFilters\'], true);
    foreach ($filters as $key => $value) {
        $option = preg_replace(\'#\\:.*#\', \'\', $key);
        $key = str_replace($option, $option . \'.value\', $key);
        if (!in_array($option, $joinedOptions)) {
            $leftJoin[$option] = array(
                \'class\' => \'msProductOption\',
                \'on\' => "`{$option}`.product_id = Data.id AND `{$option}`.key = \'{$option}\'",
            );
            $joinedOptions[] = $option;
            $where[$key] = $value;
        }
    }
}

// Add sort by options
if (!empty($scriptProperties[\'sortbyOptions\'])) {
    $sorts = array_map(\'trim\', explode(\',\', $scriptProperties[\'sortbyOptions\']));
    foreach ($sorts as $sort) {
        $sort = explode(\':\', $sort);
        $option = $sort[0];
        if (preg_match("#\\b{$option}\\b#", $scriptProperties[\'sortby\'], $matches)) {
            $type = \'string\';
            if (isset($sort[1])) {
                $type = $sort[1];
            }
            switch ($type) {
                case \'number\':
                case \'decimal\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS DECIMAL(13,3))";
                    break;
                case \'int\':
                case \'integer\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS UNSIGNED INTEGER)";
                    break;
                case \'date\':
                case \'datetime\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS DATETIME)";
                    break;
                default:
                    $sortbyOptions = "`{$option}`.`value`";
                    break;
            }
            $scriptProperties[\'sortby\'] = preg_replace($matches[0], $sortbyOptions, $scriptProperties[\'sortby\']);
            $groupby[] = "`{$option}`.value";
        }
        print_r($scriptProperties[\'sortby\']);

        if (!in_array($option, $joinedOptions)) {
            $leftJoin[$option] = array(
                \'class\' => \'msProductOption\',
                \'on\' => "`{$option}`.product_id = Data.id AND `{$option}`.key = \'{$option}\'",
            );
            $joinedOptions[] = $option;
        }

    }
}

$default = array(
    \'class\' => \'msProduct\',
    \'where\' => $where,
    \'leftJoin\' => $leftJoin,
    \'innerJoin\' => $innerJoin,
    \'select\' => $select,
    \'sortby\' => \'msProduct.id\',
    \'sortdir\' => \'ASC\',
    \'groupby\' => implode(\', \', $groupby),
    \'return\' => !empty($returnIds)
        ? \'ids\'
        : \'data\',
    \'nestedChunkPrefix\' => \'minishop2_\',
);
// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

// Process rows
$output = array();
if (!empty($rows) && is_array($rows)) {
    $c = $modx->newQuery(\'modPluginEvent\', array(\'event:IN\' => array(\'msOnGetProductPrice\', \'msOnGetProductWeight\')));
    $c->innerJoin(\'modPlugin\', \'modPlugin\', \'modPlugin.id = modPluginEvent.pluginid\');
    $c->where(\'modPlugin.disabled = 0\');

    $modifications = $modx->getOption(\'ms2_price_snippet\', null, false, true) ||
        $modx->getOption(\'ms2_weight_snippet\', null, false, true) || $modx->getCount(\'modPluginEvent\', $c);
    if ($modifications) {
        /** @var msProductData $product */
        $product = $modx->newObject(\'msProductData\');
    }
    $pdoFetch->addTime(\'Checked the active modifiers\');

    $opt_time = 0;
    foreach ($rows as $k => $row) {
        if ($modifications) {
            $product->fromArray($row, \'\', true, true);
            $tmp = $row[\'price\'];
            $row[\'price\'] = $product->getPrice($row);
            $row[\'weight\'] = $product->getWeight($row);
            if ($row[\'price\'] != $tmp) {
                $row[\'old_price\'] = $tmp;
            }
        }
        $row[\'price\'] = $miniShop2->formatPrice($row[\'price\']);
        $row[\'old_price\'] = $miniShop2->formatPrice($row[\'old_price\']);
        $row[\'weight\'] = $miniShop2->formatWeight($row[\'weight\']);
        $row[\'idx\'] = $pdoFetch->idx++;

        $opt_time_start = microtime(true);
        $options = $modx->call(\'msProductData\', \'loadOptions\', array(&$modx, $row[\'id\']));
        $row = array_merge($row, $options);
        $opt_time += microtime(true) - $opt_time_start;

        $tpl = $pdoFetch->defineChunk($row);
        $output[] = $pdoFetch->getChunk($tpl, $row);
    }
    $pdoFetch->addTime(\'Time to load products options\', $opt_time);
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="msProductsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds) && is_string($rows)) {
    $modx->setPlaceholder(\'msProducts.log\', $log);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $rows);
    } else {
        return $rows;
    }
} elseif (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    if (empty($outputSeparator)) {
        $outputSeparator = "\\n";
    }
    $output[\'log\'] = $log;
    $output = implode($outputSeparator, $output);

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(
            \'output\' => $output,
        ));
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'msOptions' => 
      array (
        'fields' => 
        array (
          'id' => 60,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'msOptions',
          'description' => '',
          'editor_type' => 0,
          'category' => 15,
          'cache_type' => 0,
          'snippet' => '/** @var modX $modx */
/** @var array $scriptProperties */
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.msOptions\');
if (!empty($input) && empty($product)) {
    $product = $input;
}
if (!empty($name) && empty($options)) {
    $options = $name;
}

$product = !empty($product) && $product != $modx->resource->id
    ? $modx->getObject(\'msProduct\', $product)
    : $modx->resource;
if (!($product instanceof msProduct)) {
    return "[msOptions] The resource with id = {$product->id} is not instance of msProduct.";
}

$names = array_map(\'trim\', explode(\',\', $options));
$options = array();
foreach ($names as $name) {
    if (!empty($name) && $option = $product->get($name)) {
        if (!is_array($option)) {
            $option = array($option);
        }
        if (!empty($option[0])) {
            $options[$name] = $option;
        }
    }
}

/** @var pdoTools $pdoTools */
$pdoTools = $modx->getService(\'pdoTools\');

return $pdoTools->getChunk($tpl, array(
    \'id\' => $product->id,
    \'options\' => $options,
));',
          'locked' => false,
          'properties' => 
          array (
            'product' => 
            array (
              'name' => 'product',
              'desc' => 'ms2_prop_product',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор товара. Если не указан, используется id текущего документа.',
              'area_trans' => '',
            ),
            'options' => 
            array (
              'name' => 'options',
              'desc' => 'ms2_prop_options',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Список опций для вывода, через запятую.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'ms2_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.msOptions',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления для каждого результата',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/minishop2/elements/snippets/snippet.ms_options.php',
          'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.msOptions\');
if (!empty($input) && empty($product)) {
    $product = $input;
}
if (!empty($name) && empty($options)) {
    $options = $name;
}

$product = !empty($product) && $product != $modx->resource->id
    ? $modx->getObject(\'msProduct\', $product)
    : $modx->resource;
if (!($product instanceof msProduct)) {
    return "[msOptions] The resource with id = {$product->id} is not instance of msProduct.";
}

$names = array_map(\'trim\', explode(\',\', $options));
$options = array();
foreach ($names as $name) {
    if (!empty($name) && $option = $product->get($name)) {
        if (!is_array($option)) {
            $option = array($option);
        }
        if (!empty($option[0])) {
            $options[$name] = $option;
        }
    }
}

/** @var pdoTools $pdoTools */
$pdoTools = $modx->getService(\'pdoTools\');

return $pdoTools->getChunk($tpl, array(
    \'id\' => $product->id,
    \'options\' => $options,
));',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'msGallery' => 
      array (
        'fields' => 
        array (
          'id' => 59,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'msGallery',
          'description' => '',
          'editor_type' => 0,
          'category' => 15,
          'cache_type' => 0,
          'snippet' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'miniShop2\');
$miniShop2->initialize($modx->context->key);
/** @var pdoFetch $pdoFetch */
if (!$modx->loadClass(\'pdofetch\', MODX_CORE_PATH . \'components/pdotools/model/pdotools/\', false, true)) {
    return false;
}
$pdoFetch = new pdoFetch($modx, $scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded.\');

$extensionsDir = $modx->getOption(\'extensionsDir\', $scriptProperties, \'components/minishop2/img/mgr/extensions/\', true);
$limit = $modx->getOption(\'limit\', $scriptProperties, 0);
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.msGallery\');

/** @var msProduct $product */
$product = !empty($product) && $product != $modx->resource->id
    ? $modx->getObject(\'msProduct\', $product)
    : $modx->resource;
if (!$product || !($product instanceof msProduct)) {
    return "[msGallery] The resource with id = {$product->id} is not instance of msProduct.";
}

$where = array(
    \'product_id\' => $product->id,
    \'parent\' => 0,
);
if (!empty($filetype)) {
    $where[\'type:IN\'] = array_map(\'trim\', explode(\',\', $filetype));
}
if (empty($showInactive)) {
    $where[\'active\'] = 1;
}
$select = array(
    \'msProductFile\' => \'*\',
);

// Add user parameters
foreach (array(\'where\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
    \'class\' => \'msProductFile\',
    \'where\' => $where,
    \'select\' => $select,
    \'limit\' => $limit,
    \'sortby\' => \'rank\',
    \'sortdir\' => \'ASC\',
    \'fastMode\' => false,
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'minishop2_\',
);
// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$pdoFetch->addTime(\'Fetching thumbnails\');

$resolution = array();
/** @var msProductData $data */
if ($data = $product->getOne(\'Data\')) {
    if ($data->initializeMediaSource()) {
        $properties = $data->mediaSource->getProperties();
        if (isset($properties[\'thumbnails\'][\'value\'])) {
            $fileTypes = json_decode($properties[\'thumbnails\'][\'value\'], true);
            foreach ($fileTypes as $k => $v) {
                if (!is_numeric($k)) {
                    $resolution[] = $k;
                } elseif (!empty($v[\'name\'])) {
                    $resolution[] = $v[\'name\'];
                } else {
                    $resolution[] = @$v[\'w\'] . \'x\' . @$v[\'h\'];
                }
            }
        }
    }
}

// Processing rows
$files = array();
foreach ($rows as $row) {
    if (isset($row[\'type\']) && $row[\'type\'] == \'image\') {
        $c = $modx->newQuery(\'msProductFile\', array(\'parent\' => $row[\'id\']));
        $c->select(\'product_id,url\');
        $tstart = microtime(true);
        if ($c->prepare() && $c->stmt->execute()) {
            $modx->queryTime += microtime(true) - $tstart;
            $modx->executedQueries++;
            while ($tmp = $c->stmt->fetch(PDO::FETCH_ASSOC)) {
                if (preg_match("#/{$tmp[\'product_id\']}/(.*?)/#", $tmp[\'url\'], $size)) {
                    $row[$size[1]] = $tmp[\'url\'];
                }
            }
        }
    } elseif (isset($row[\'type\'])) {
        $row[\'thumbnail\'] =
        $row[\'url\'] = file_exists(MODX_ASSETS_PATH . $extensionsDir . $row[\'type\'] . \'.png\')
            ? MODX_ASSETS_URL . $extensionsDir . $row[\'type\'] . \'.png\'
            : MODX_ASSETS_URL . $extensionsDir . \'other.png\';
        foreach ($resolution as $v) {
            $row[$v] = $row[\'thumbnail\'];
        }
    }

    $files[] = $row;
}

$output = $pdoFetch->getChunk($tpl, array(
    \'files\' => $files,
));

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="msGalleryLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'product' => 
            array (
              'name' => 'product',
              'desc' => 'ms2_prop_product',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор товара. Если не указан, используется id текущего документа.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'ms2_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.msGallery',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления для каждого результата',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'ms2_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Лимит выборки результатов',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'ms2_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов с начала выборки',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'ms2_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'rank',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Сортировка выборки. Для сортировки по полям товара нужно добавить префикс "Data.", например: "&sortby=`Data.price`"',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'ms2_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'ms2_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'ms2_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контексте "mgr".',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'ms2_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Строка, закодированная в JSON, с дополнительными условиями выборки.',
              'area_trans' => '',
            ),
            'filetype' => 
            array (
              'name' => 'filetype',
              'desc' => 'ms2_prop_filetype',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Тип файлов для выборки. Можно использовать "image" для указания картинок и расширения для остальных файлов. Например: "image,pdf,xls,doc".',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/minishop2/elements/snippets/snippet.ms_gallery.php',
          'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'miniShop2\');
$miniShop2->initialize($modx->context->key);
/** @var pdoFetch $pdoFetch */
if (!$modx->loadClass(\'pdofetch\', MODX_CORE_PATH . \'components/pdotools/model/pdotools/\', false, true)) {
    return false;
}
$pdoFetch = new pdoFetch($modx, $scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded.\');

$extensionsDir = $modx->getOption(\'extensionsDir\', $scriptProperties, \'components/minishop2/img/mgr/extensions/\', true);
$limit = $modx->getOption(\'limit\', $scriptProperties, 0);
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.msGallery\');

/** @var msProduct $product */
$product = !empty($product) && $product != $modx->resource->id
    ? $modx->getObject(\'msProduct\', $product)
    : $modx->resource;
if (!$product || !($product instanceof msProduct)) {
    return "[msGallery] The resource with id = {$product->id} is not instance of msProduct.";
}

$where = array(
    \'product_id\' => $product->id,
    \'parent\' => 0,
);
if (!empty($filetype)) {
    $where[\'type:IN\'] = array_map(\'trim\', explode(\',\', $filetype));
}
if (empty($showInactive)) {
    $where[\'active\'] = 1;
}
$select = array(
    \'msProductFile\' => \'*\',
);

// Add user parameters
foreach (array(\'where\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
    \'class\' => \'msProductFile\',
    \'where\' => $where,
    \'select\' => $select,
    \'limit\' => $limit,
    \'sortby\' => \'rank\',
    \'sortdir\' => \'ASC\',
    \'fastMode\' => false,
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'minishop2_\',
);
// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$pdoFetch->addTime(\'Fetching thumbnails\');

$resolution = array();
/** @var msProductData $data */
if ($data = $product->getOne(\'Data\')) {
    if ($data->initializeMediaSource()) {
        $properties = $data->mediaSource->getProperties();
        if (isset($properties[\'thumbnails\'][\'value\'])) {
            $fileTypes = json_decode($properties[\'thumbnails\'][\'value\'], true);
            foreach ($fileTypes as $k => $v) {
                if (!is_numeric($k)) {
                    $resolution[] = $k;
                } elseif (!empty($v[\'name\'])) {
                    $resolution[] = $v[\'name\'];
                } else {
                    $resolution[] = @$v[\'w\'] . \'x\' . @$v[\'h\'];
                }
            }
        }
    }
}

// Processing rows
$files = array();
foreach ($rows as $row) {
    if (isset($row[\'type\']) && $row[\'type\'] == \'image\') {
        $c = $modx->newQuery(\'msProductFile\', array(\'parent\' => $row[\'id\']));
        $c->select(\'product_id,url\');
        $tstart = microtime(true);
        if ($c->prepare() && $c->stmt->execute()) {
            $modx->queryTime += microtime(true) - $tstart;
            $modx->executedQueries++;
            while ($tmp = $c->stmt->fetch(PDO::FETCH_ASSOC)) {
                if (preg_match("#/{$tmp[\'product_id\']}/(.*?)/#", $tmp[\'url\'], $size)) {
                    $row[$size[1]] = $tmp[\'url\'];
                }
            }
        }
    } elseif (isset($row[\'type\'])) {
        $row[\'thumbnail\'] =
        $row[\'url\'] = file_exists(MODX_ASSETS_PATH . $extensionsDir . $row[\'type\'] . \'.png\')
            ? MODX_ASSETS_URL . $extensionsDir . $row[\'type\'] . \'.png\'
            : MODX_ASSETS_URL . $extensionsDir . \'other.png\';
        foreach ($resolution as $v) {
            $row[$v] = $row[\'thumbnail\'];
        }
    }

    $files[] = $row;
}

$output = $pdoFetch->getChunk($tpl, array(
    \'files\' => $files,
));

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="msGalleryLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);