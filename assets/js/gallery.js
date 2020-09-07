$(document).ready(() => {
    $('.lightbox').hide()
    $('.image-gallery').children('div').each(function (index) {
        $(this).addClass(`img-${index+1}`)
        $(this).css('background-image', `url("./assets/img/gallery/${index+1}.jpg")`)
        $(this).css('grid-area', `img-${index+1}`)
        $(this).on('click',()=>{
            $('.lightbox').children('div').children('img').attr('src',`./assets/img/gallery/${index+1}.jpg`)
            $('.lightbox').fadeIn()
        })
    })
    
    $('.lightbox').on('click',()=>{
        $('.lightbox').fadeOut()
    })
})
