<!DOCTYPE html>
<html lang="en">
<head>
  [[ $headSection ]]
</head>
<body>
    [[ $nav ]]
  <header>
    
  </header>
  <div class="container">
    [[ *content ]]

    [[!msProducts?
      &tpl=`categoryTpl`
    ]]

  </div>
  [[ $scriptConnection ]]
</body>
</html>
