
$(document).ready(function(){

    // SCROLLING-----------------------------------
    let scrollcontainer = document.querySelector('.banner-all-home-page'), 
    backbtn = document.querySelector('#btnleft-banner-home-page'), 
    nextbtn = document.querySelector('#btnright-banner-home-page');

    // scrollcontainer.addEventListener('wheel', (e)=>{
    //     e.preventDefault();
    //     scrollcontainer.scrollLeft += e.deltaY;
    // });

    nextbtn.addEventListener('click', ()=>{
        scrollcontainer.scrollLeft += 1000;
    });
    backbtn.addEventListener('click', ()=>{
        scrollcontainer.scrollLeft -= 1000;
        
    });

    // ==================SCOLLING FOR TRENDING SESSION HOME========================

    let scrollcontainerX123 = document.querySelectorAll('.johanchinh'), 
    backbtnX123 = document.querySelectorAll('.arr-st-3-left'), 
    nextbtnX123 = document.querySelectorAll('.arr-st-3-right');  
    nextbtnX123.forEach((e) =>{
        e.addEventListener('click', ()=> {
            let bb = event.currentTarget;
            let cc = bb.parentElement.children[1].children[0];
            cc.scrollLeft += 500;
        })
    })
    backbtnX123.forEach((e) =>{
        e.addEventListener('click', ()=> {
            let bb = event.currentTarget;
            let cc = bb.parentElement.children[1].children[0];
            cc.scrollLeft -= 500;
        })
    })

    // -------------HIDE OR SHOW BTN--------------------

    const bannerItems = document.querySelectorAll('.banner-product-main-home');
    if (bannerItems.length < 5) {
        nextbtn.style.display = "none";
        backbtn.style.display = "none";
    }
    else{
        nextbtn.style.display = "block";
        backbtn.style.display = "block";
    }
    
    $('.johanchinh').each(function() {
        const v = $(this).parent().parent().children().first();
        const k = $(this).parent().parent().children().eq(2);
    
        if ($(this).children().length <= 5){
            v.hide();
            k.hide();
        }
        else{
            v.show();
            k.show();
        }
    });    

    console.log('scrolling done!');
})