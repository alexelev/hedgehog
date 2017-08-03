<div class="row ms2_product">

<!-- главная картинка -->
  <div class="col-md-3 text-center">
    <a rel="fancybox" href="[[+url:default=`/assets/components/minishop2/img/web/ms2_big.png`]]" target="_blank">
      <!-- <img src="[[+thumb:default=`[[++assets_url]]components/minishop2/img/web/ms2_small.png`]]" width="200" height="150" /> -->
    </a>
  </div>

  <div class="col-md-7">
    
    <div class="row">
      <div class="col-md-12">
        <!-- <pre> -->
        [[!msOptions?
          &product=`[[ +id ]]`
          &options=`sex, color`
          &tpl=`productOptionsTpl`
        ]]
        <!-- </pre> -->
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        [[-
        [[ !msGallery? 
          &product=`[[ +id ]]`
          &offset=`1`
          &limit=`5`
          &tpl=`galleryTpl`
        ]]
        ]]
      </div>
      
    </div>
  </div>

<!-- форма заказа -->
  <div class="col-md-2">
    <form method='post' class="ms2_form">
      <div class="price">[[+price]] [[%ms2_frontend_currency]]</div>
      <div><button class="btn btn-success">[[%ms2_frontend_add_to_cart]]</button></div>
      <input type="hidden" name="id" value="[[+id]]">
      <input type="hidden" name="count" value="1">
      <input type="hidden" name="options" value="[]">
    </form>

    <div class="row">
        <div class="col-md-12">
          <div>Дата рождения</div>
          [[ !msProductOptions? 
            &product=`[[ +id ]]`
            &onlyOptions=`birthdate`
            &tpl=`@INLINE <div>{$birthdate.0}</div>`
          ]]
        </div>
      </div>
  </div>

</div>
