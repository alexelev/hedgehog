<div class="row" id="[[ +alias ]]">

<!-- главная картинка -->
  <div class="col-md-4">
    
    <div class="row">
      <div class="col-md-12">
        [[!msOptions?
          &product=`[[ +id ]]`
          &options=`sex, color, birthdate`
          &tpl=`productOptionsTpl`
        ]]
      </div>
      <div class="col-md-12">
          <div class="price">[[+price]] [[%ms2_frontend_currency]]</div>
          <!--<button class="btn btn-primary btn-lg btn-block" data-id="[[ +id ]]">[[%ms2_frontend_add_to_cart]]</button>-->
          <a href="#animatedModal" class="btn btn-primary btn-lg btn-block modal-link" data-id="[[ +id ]]">[[%ms2_frontend_add_to_cart]]</a>
      </div>
    </div>
    
  </div>

  <div class="col-md-8">

    <div class="row">
      <div class="col-md-12">
        <!-- <div>[[ +introtext ]]</div> -->
        [[ !msGallery? 
          &product=`[[ +id ]]`
          &offset=`0`
          &limit=`10`
          &tpl=`galleryTpl`
        ]]
      </div>
      
    </div>
  </div>

</div>

[[ $modalTpl ]]
