<meta charset="[[ ++modx_charset ]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="[[ ++site_url ]]" />
<title>[[ !pdoTitle? &outputSeparator=`|` &cache=`1` ]] | [[ ++site_name ]]</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

[[MinifyX?
    &minifyCss=`1`
    &registerCss=`1`
    &cssSources=`
      /assets/build/css/index.css,
    `
    &minifyJs=`1`
    &registerJs=`1`
    &jsSources=`
      /assets/build/js/index.js
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
