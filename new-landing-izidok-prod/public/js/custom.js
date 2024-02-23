let preloader = $('#preloader');
if (preloader) {
    window.addEventListener('load', () => {
        preloader.remove()
    });
}

$('.play-image').click(function(){
    window.open("https://youtu.be/gC-k51pxP8A?si=QlYxDNDUI3XjgUfj", '_blank');
});

$(".number").on("keypress keyup blur",function (event) {    
    $(this).val($(this).val().replace(/[^\d].+/, ""));
     if ((event.which < 48 || event.which > 57)) {
         event.preventDefault();
     }
 }); 

$('.show-more-1').click(function(){
    if($(this).html() == 'Lihat Selengkapnya'){
        $('.hide-price-1').slideDown()
        $(this).html('Lihat Lebih Sedikit')
    }else{
        $('.hide-price-1').slideUp()
        $(this).html('Lihat Selengkapnya')
    }
})
$('.show-more-2').click(function(){
    if($(this).html() == 'Lihat Selengkapnya'){
        $('.hide-price-2').slideDown()
        $(this).html('Lihat Lebih Sedikit')
    }else{
        $('.hide-price-2').slideUp()
        $(this).html('Lihat Selengkapnya')
    }
})
$('.show-more-3').click(function(){
    if($(this).html() == 'Lihat Selengkapnya'){
        $('.hide-price-3').slideDown()
        $(this).html('Lihat Lebih Sedikit')
    }else{
        $('.hide-price-3').slideUp()
        $(this).html('Lihat Selengkapnya')
    }
})


let items = document.querySelectorAll('#testimoni-carousel .carousel-item')
		items.forEach((el) => {
			const minPerSlide = 3
			let next = el.nextElementSibling
			for (var i=1; i<minPerSlide; i++) {
				if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

let itemsEvent = document.querySelectorAll('#event-carousel .carousel-item')
		itemsEvent.forEach((el) => {
			const minPerSlide = 3
			let next = el.nextElementSibling
			for (var i=1; i<minPerSlide; i++) {
				if (!next) {
            // wrap carousel by using first child
            next = itemsEvent[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})