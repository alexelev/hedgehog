<div class="row ms2_product" id="[[ +alias ]]">

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
        <form method='post' class="ms2_form">
          <div class="price">[[+price]] [[%ms2_frontend_currency]]</div>
          <div><button class="btn btn-primary btn-lg btn-block">[[%ms2_frontend_add_to_cart]]</button></div>
          <input type="hidden" name="id" value="[[+id]]">
          <input type="hidden" name="count" value="1">
          <input type="hidden" name="options" value="[]">
        </form>
      </div>
    </div>
    
  </div>

  <div class="col-md-8">
    
    

    <div class="row">
      <div class="col-md-12">
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
