function updateSize() {
  let $height   = $(window).height()
  let $width    = $(window).width()
  let cH        = $('#copy').height()
  let cW        = $('#copy').width()
  let mHeight   = $('#bg').height()
  let mWidth    = $('#bg').width()

  let tx      = 0, 
      ty      = 0,
      widthM  = 1

  let isWHmay = ($height > cH);
  let isWWmay = ($width > mWidth);

  if(isWHmay && isWWmay) {
    ty = isWHmay ? 0 : ( cH - $height) / 2
    tx = ($height < cH) ? 0 : ( cH - $height) / 2
    if(tx <= 0) {
      ty = tx;
      tx = 0;
    }
  } 
  else if(!isWHmay && isWWmay) {

  }
  else {
    ty = ( $height - cH) / 2
  }

  widthM   = ( $width / ( mWidth / 2) ) / 2

//  $('#content-background').css('transform', `matrix(${widthM},0,0,${widthM},${Math.abs(tx)},${Math.abs(ty)})`)
}




$(() => {
  updateSize()
  $('.item-map').hover(
    ev => {
      const value = $(ev.currentTarget).data('value')
      $(`#${value}`).fadeIn()
    },
    ev => {
      const value = $(ev.currentTarget).data('value')
      $(`#${value}`).fadeOut('slow')
    })
})

$( window ).resize(() => {
  updateSize()

})
