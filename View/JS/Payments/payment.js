// ===========================BTN SEE LES=====================================

const hoachiBTN = document.getElementById('btn-thunhat-uphahoa');

const vanngasss = document.getElementById('donglaino-traint-hachoa');
vanngasss.className = 'list-all-item by-main-user-border-1px-top display-btn-none';

const daulong = document.getElementById('nhatduonghoa');
daulong.className = 'bx bx-chevron-down'

hoachiBTN.addEventListener('click', function(){

    if ( vanngasss.className == 'list-all-item by-main-user-border-1px-top display-btn-none') {
        vanngasss.className = 'list-all-item by-main-user-border-1px-top';
        daulong.className = 'bx bx-chevron-up';
    }
    else{
        vanngasss.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
        daulong.className = 'bx bx-chevron-down';
    }

})


// ------------ABOUT-----------------------

const nghichtu = document.getElementById('btnlayra-up');
// ---button-----

const canhduong = document.getElementById('khongthuvi');
canhduong.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
// -------content--------

const nhasdsd = document.getElementById('maccamsuu');
nhasdsd.className = 'bx bx-chevron-down';
// --------icon----------

nghichtu.addEventListener('click', function(){

    if ( canhduong.className == 'list-all-item by-main-user-border-1px-top display-btn-none') {
        canhduong.className = 'list-all-item by-main-user-border-1px-top'
        nhasdsd.className = 'bx bx-chevron-up'
    }
    else{
        canhduong.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
        nhasdsd.className = 'bx bx-chevron-down'
    }

})

// ------------DETAIL-----------------------

const nghichthan = document.getElementById('thientuegia');
// ---button-----

const taothao = document.getElementById('vanvatquytong');
taothao.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
// -------content--------

const bachthan = document.getElementById('nhuccaidaau');
bachthan.className = 'bx bx-chevron-down';
// --------icon----------

nghichthan.addEventListener('click', function(){

    if ( taothao.className == 'list-all-item by-main-user-border-1px-top display-btn-none') {
        taothao.className = 'list-all-item by-main-user-border-1px-top'
        bachthan.className = 'bx bx-chevron-up'
    }
    else{
        taothao.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
        bachthan.className = 'bx bx-chevron-down'
    }

})


// ------------PRICE HISTORY-----------------------

const vuongchinam = document.getElementById('nghesimandan');
// ---button-----

const dongtrac = document.getElementById('price-history-content');
dongtrac.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
// -------content--------

const vode = document.getElementById('canhmagrs');
vode.className = 'bx bx-chevron-down';
// --------icon----------
vuongchinam.addEventListener('click', function(){

    if ( dongtrac.className == 'list-all-item by-main-user-border-1px-top display-btn-none') {
        dongtrac.className = 'list-all-item by-main-user-border-1px-top'
        vode.className = 'bx bx-chevron-up'
    }
    else{
        dongtrac.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
        vode.className = 'bx bx-chevron-down'
    }

})




// ------------LISTINGS-----------------------

const vodanhs = document.getElementById('canhmatroimoc');
// ---button-----

const lyty = document.getElementById('thandaodanton');
lyty.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
// -------content--------

const matoc = document.getElementById('ngambinhminh');
matoc.className = 'bx bx-chevron-down';
// --------icon----------
vodanhs.addEventListener('click', function(){

    if ( lyty.className == 'list-all-item by-main-user-border-1px-top display-btn-none') {
        lyty.className = 'list-all-item by-main-user-border-1px-top'
        matoc.className = 'bx bx-chevron-up'
    }
    else{
        lyty.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
        matoc.className = 'bx bx-chevron-down'
    }

})

// ------------OFFERS-----------------------

const huyenlenh = document.getElementById('canhcaothetu');
// ---button-----

const thaibinh = document.getElementById('kekiemvaoco');
thaibinh.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
// -------content--------

const chudu = document.getElementById('coymuuphan');
chudu.className = 'bx bx-chevron-down';
// --------icon----------
huyenlenh.addEventListener('click', function(){

    if ( thaibinh.className == 'list-all-item by-main-user-border-1px-top display-btn-none') {
        thaibinh.className = 'list-all-item by-main-user-border-1px-top'
        chudu.className = 'bx bx-chevron-up'
    }
    else{
        thaibinh.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
        chudu.className = 'bx bx-chevron-down'
    }

})

// ------------Item Acitivity-----------------------

const chieudieu = document.getElementById('bachkinhhoangdong');
// ---button-----

const daocanhhoangde = document.getElementById('hieutrieuthienha');
daocanhhoangde.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
// -------content--------

const tonquyen = document.getElementById('thankinhhoangvi');
tonquyen.className = 'bx bx-chevron-down';
// --------icon----------
chieudieu.addEventListener('click', function(){

    if ( daocanhhoangde.className == 'list-all-item by-main-user-border-1px-top display-btn-none') {
        daocanhhoangde.className = 'list-all-item by-main-user-border-1px-top'
        tonquyen.className = 'bx bx-chevron-up'
    }
    else{
        daocanhhoangde.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
        tonquyen.className = 'bx bx-chevron-down'
    }

})


// ------------View Collections-----------------------

const hoangton = document.getElementById('kiemchamcuuthien');
// ---button-----

const nhatthongthienha = document.getElementById('vinhhoaaces');
nhatthongthienha.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
// -------content--------

const TaoPhi = document.getElementById('cachhoatuyvan');
TaoPhi.className = 'bx bx-chevron-down';
// --------icon----------
hoangton.addEventListener('click', function(){

    if ( nhatthongthienha.className == 'list-all-item by-main-user-border-1px-top display-btn-none') {
        nhatthongthienha.className = 'list-all-item by-main-user-border-1px-top'
        TaoPhi.className = 'bx bx-chevron-up'
    }
    else{
        nhatthongthienha.className = 'list-all-item by-main-user-border-1px-top display-btn-none';
        TaoPhi.className = 'bx bx-chevron-down'
    }

})


// ===========================================CHUYEN TRANG================================

// const chuyentrangWindowns = document.getElementById('chuyentrangWindowns');

// chuyentrangWindowns.addEventListener('click', function(){

// })


// -----------------------------------VIEW COLLECTIONS------------------------

const vwcol = document.querySelectorAll('div#canhvantathan-mon235 div.product-items-johan-xyh div.cover-img-xyh img');

const yeuem = [
    {name: 'GAIVS IVLIVS CAESAR', price: 5},
    {name: 'SERVIVS SVLPICIVS GALBA', price: 2},
    {name: 'GAIVS IVLIVS CAESAR', price: 5},
    {name: 'TIBERIVS CLAVDIVS CAESAR', price: 8},
    {name: 'MARCVS SALVIVS OTHO CAESAR', price: 3}
]

for (let index = 0; index < vwcol.length; index++) {
    vwcol[index].src = `/img/collec${index}.jpg`;
    document.querySelectorAll('div#canhvantathan-mon235 div.product-items-johan-xyh div.khung-content-text div div.name-part-top')[index].innerText = yeuem[index].name;
    document.querySelectorAll('div#canhvantathan-mon235 div.product-items-johan-xyh div.khung-content-text div div span.giatricuapro')[index].innerText = yeuem[index].price;
}


// =========================================THA TYM===========================================

// const addTym = document.querySelectorAll('.canhoatu-41s-reponsive .canhoatu-41-2s-reponsive i.fa-regular.fa-heart')[0];



// var tym = 0;
// addTym.addEventListener('click', function(){

//     tym++;
//     localStorage.setItem(tym, tym);
//     let kjos = LocalStorage.getItem(tym);
//     alert(kjos)
//     // document.getElementById('fakelove').innerText = kjos;

// })