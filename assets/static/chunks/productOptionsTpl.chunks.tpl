<h2 class="text-center">
  {* <a href="[[~[[+id]]]]"> *}
    [[ +pagetitle ]]
  {* </a> *}
</h2>
<div class="col-md-12">
  <div>Пол:</div>
  <h4 class="text-center">{$options.sex.0}</h4>
</div>
<div class="col-md-12">
  <div>Окрас: </div>
  <h4 class="text-center">{$options['color'][0]}</h4>
</div>
<div class="col-md-12">
  <div>Дата рождения:</div>
  <div>
    <h4 class="text-center">{$dt = $.php.date_create_from_format('Y-m-d', $options.birthdate.0)} {$.php.date_format($dt, 'd-m-Y')}</h4>
  </div>
</div>
<div class="col-md-12">
  <div>Родители</div>
  <div class="row">
    [[ !msProducts?
      &parents=`0`
      &link=`1`
      &slave=`[[ +id ]]`
      &tpl=`parentOptionsTpl`
    ]]
  </div>
</div>
