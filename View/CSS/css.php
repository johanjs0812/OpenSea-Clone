<style>
    /*=============== GOOGLE FONTS ===============*/
@import url('https://fonts.googleapis.com/css2?family=Clicker+Script&family=Heebo:wght@300&family=Khand:wght@300&family=Poppins:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,500;1,300&display=swap');


/*=============== VARIABLES CSS ===============*/

* {
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    scroll-padding-top: 2rem;
}

:root{
    --color-trastion: rgba(255, 255, 255, 0.194);
    --color-icon-menu-text: white;
    --color-bold-menu: rgba(255, 255, 255, 0.231);
}

body{
    background-color: rgba(237, 249, 255, 0.991);
}

header{
    height: 72px;
    background-color: black;
    position: fixed;
    z-index: 10000;
    width: 100%;
}


div.menu-reponsive-vip{
    color: aliceblue;
    font-size: 30px;
    display: flex;
    align-items: center;
    margin-right: 13px;
    display: none;
}

header span{
    color: var(--color-icon-menu-text);
    font-weight: bolder;
    font-size: 100%;
}

header i {
    color: var(--color-icon-menu-text);
}

header p{
    color: var(--color-icon-menu-text);
    font-weight: bolder;
    font-size: 24px;
}

header ::placeholder{
    font-size: 15px;
    color: rgba(255, 255, 255, 0.596);
    font-weight: 300;
}

/* ===============================NAV LOGO======================= */

header div.bar-height-menu{
    height: 100%;
    max-width: 2560px;
    margin: auto;
    padding: 0 32px;
}

nav.menu-main{
    height: 100%;
    display: flex;
}

nav.menu-main div.logo-main{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
}

nav.menu-main div.logo-main img#hoan{
    width: 100%;
    height: 100%;
}

nav.menu-main div.textlogomain p{
   margin-left: 10px;
}

div.logo-drop-star{
    display: flex;
    align-items: center;
    margin-right: 32px;
}

.a-menu{
    display: flex;
    align-items: center;
}

div.padding{
    display: flex;
    align-items: center;
}

div.padding div.width-1px{
    width: 1px;
    background-color: white;
    height: 32px;
    margin-left: 24px;
    margin-right: 24px;
}

div.nav-one-two{
    display: flex;
    column-gap: 30px;
    
}

div.nav-one-two{
    width: max-content;
}


/* ===========================NAV SEARCH============================ */

div.search-nav{
    width: 100%;
    height: 100%;
}

div.search-nav-tang1{
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
}

div.search-nav-tang2{
    width: 100%;
    display: flex;
    align-items: center;
}

div.tanginput{
    width: 100%;
    padding: 10px;
    height: 48px;
    border-radius: 12px;
    margin-right: 12px;
    display: flex;
    align-items: center;
    background-color: var(--color-trastion);
}

div.tanginput div.search-icon{
    margin-right: 8px;
    font-size: 24px;
    max-width: 24px;
    display: flex;
    justify-content: center;
    
}

div.tanginput input{
    width: 100%;
    border: none;
    outline: none;
    background: none;
}

div.tanginput div.slash-nav{
   height: 26px;
   min-width: 26px;
   display: flex;
   justify-content: center;
   align-items: center;
   border-radius: 8px;
   background-color: var(--color-bold-menu);
   font-weight: 400;
   font-size: 12px;
   color: var(--color-icon-menu-text);
}

/* ===============================NAV CONTENT USER CART========================= */

ul.user-cart{
    display: flex;
    flex-shrink: 0;
}

div.nav-user-mail{
    display: flex;
}

div.tration-center-nav{
    display: flex;
}

div.tration-center-button{
    height: 100%;
    display: flex;
    align-items: center;
    padding-right: 12px;
    justify-content:center;
}

div.mail-content{
    display: flex;
    background-color: var(--color-trastion);
    border-radius: 8px;
}

div.mail-content button.button{
    display: flex;
    align-items: stretch;
    padding: 12px;
    height: 48px;
    column-gap: 12px;
    border: none;
    border-right: 1px solid white;
    background-color: var(--color-trastion);
    border-left: 8px;
    background: none;

}

div.mail-content button.button i{
    font-size: 24px;
   
}

div.mail-content button.button span.span{
    font-size: 100%;
    font-weight: 600;
    display: flex;
    align-items: center;
    
}

a div.box-user{
    display: flex;
    padding: 8px 12px;
    height: 100%;
    
}

a div.box-user div.icon-user{
    display: flex;
    height: 100%;
}

a div.box-user div.icon-user i{
    font-size: 28px;
}

div.cart-nav{
    display: flex;
    align-items: center;
}

div.box-cart{
    display: flex;
}

div.box-button-cart{
    display: flex;
    align-items: center;
    
}

div.box-button-cart button{
    padding: 12px;
    width: 48px;
    height: 48px;
    display: inline-flex;
    align-items: center;
    border: none;
    border-radius: 8px;
    background-color: var(--color-trastion);
}

div.box-button-cart button i{
   font-size: 24px;
}

/* ----------- */


/* =======================================================END HEADER======================================================= */

/* =======================================================START MAIN SECTION======================================================= */

div.main-trastion{
    height: 100%;
    display: flex;
    flex-direction: column;
}


/* ======GRID MAIN========= */

/* div.main-trastion div.main-grip-trastion-center{
    row-gap: 32px;
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-row-gap: 8px;
    grid-column-gap: 8px;
   
} */

/* ======GRID MAIN========= */

/* =============================START ONE SECTION=============================== */

div.nav-bar-section-one{
    padding: 24px 0px 0px 16px;
    display: flex;
    align-items: center;
    width: 100%;
    display: block; 
}

div.trastion-nav-bar-section-one{
    display: flex;
    width: 100%;
}

div.trastion-nav-bar-section-one nav{
    width: 100%;
}

div.trastion-nav-bar-section-one nav div{
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
}

div.trastion-nav-bar-section-one nav div ul{
    justify-content: left;
    width: 100%;
    margin: 0px;
    padding: 0px 8px;
    display: flex;
    overflow: auto;
}

div.trastion-nav-bar-section-one nav div ul div{
   display: flex;
   gap: 8px;
   /* background-color: black; */
}

div.trastion-nav-bar-section-one nav div ul div li a{
    display: flex;
    padding: 8px 16px;
    background-color: var(--color-trastion);
    border-radius: 10px;
    color: var(--color-icon-menu-text);
}

.mautext-sss-page-home span{
    color: black;
}

/* --------------BANNER---------------- */

div.banner-section-one{
    padding-top: 32px;
    padding-left: 30px;
    padding-right: 30px;
}

div.trastion-js-banner{
    height: 100%;
    width: 100%;
}

div.banner-container {
    overflow: hidden;
    height: 600px;
    border-radius: 20px;
    position: relative;
}

div.banner-container span img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    position: absolute;
    z-index: 1;
    
}

div.content-button-of-banner{
    position: absolute;
    height: 500px;
    width: 1460px;
    z-index: 2;
    top: 100px;
    color: white;
    padding: 40px;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
}

div.display-h1-banner{
    display: flex;
    align-items: center;
}

.svg{
    padding-left: 5px;
    height: 50px;
    width: 50px;
    display: flex;
    align-items: center;
    
}

.svg svg{
    padding-top: 10px;
    width: 100%;
    height: 100%;
}

div.content-button-of-banner div.information-and-avt{
    display: flex;
    flex-direction: column;
}

div.content-button-of-banner div.information-and-avt div.avt-banner{
    width: 60px;
    height: 60px;
    overflow: hidden;
    border-radius: 10px;
    border: 1px solid var(--color-icon-menu-text);
}

div.content-button-of-banner  div.information-and-avt div.avt-banner span.yohan img.yohanimg{
   height: 100%;
   width: 100%;
   object-fit: cover;
}

div.display-h1-banner h1{
    font-size: 50px;
    font-weight: 600;
}

div.information-and-avt p{
    font-size: 20px;
    font-weight: 600;
}

div.content-button-of-banner div.button-viewcourse button.view-drop-p{
    width: 150px;
    height: 60px;
    background-color: var(--color-bold-menu);
    opacity: 1.8;
    color: var(--color-icon-menu-text);
    border: none;
    font-weight: bold;
    border-radius: 10px;
    font-size: 15px;
}

.bell-caca{
    background: none;
    width: 60px;
    border-radius: 8px;
    background-color: var(--color-trastion); 
    outline: none;
    border: none;
    color: var(--color-icon-menu-text);
}

.bell-caca i{
    font-size: 30px;
}


button.btn-left, button.btn-right{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: none;
    position: absolute;
    z-index: 5;
    top: 50%;
}

button.btn-left i, button.btn-right i{
   font-size: 30px;
   padding-top: 5px;
}

button.btn-left{
   left: -24px;
}

button.btn-right{
    right: -24px;
}


.timedown-product{
    padding-top: 25px;
    display: flex;
    gap: 10px;
}

.banner-times-hda{
    width: 65px;
    height: 65px;
    border-radius: 12px;
    background-color: var(--color-trastion);
  
}

.banner-times-hda div.x-center {
    height: 100%;
    width: 100%;
    text-align: center;
    padding: 10px;
}
.banner-times-hda div.x-center div {
    font-weight: 600;
    font-size: 14px;
}

/* ===========================END SECTION BANNER ONE=================== */

/* ==================================START SECTION TWO============================/ */

div.times{
    border-radius: 10px;
    background-color: white;
    border: 1px solid black;
}

div.times div{
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 600;
}

div.select-box-all-chans{
    background-color: white;
    border: 1px solid black;
    border-radius: 10px;
    height: 48px;
}

div.select-box-all-chans div.all-chans, div.icon-select{
    display: flex;
    align-items: center;
}

div.select-box-all-chans div.all-chans span{
    font-weight: 600;
    padding: 0 10px 0 20px;
}

div.select-box-all-chans div.icon-select i{
    font-weight: 600;
    font-size: 25px;
    padding-right: 20px;
}

div.viewall{
    height: 48px;
    display: flex;
    align-items: center;
    border: 1px solid black;
    background-color: white;
    border-radius: 10px;
}

div.viewall div span{
    font-weight: 600;
    padding-left: 20px;
    padding-right: 20px;
}

/* <!-- ===============END NAV SECTION TWO=============== --> */

/* <!-- ==================START CHART SECTION TWO============= --> */

div.nav-fl div span {
    font-weight: 600;
    font-size: 12px;
}

div.sw-slides-margin div.s145 {
    width: 100%;
    margin-top: 4px;
    border-radius: 12px;
    background-color: white;
}

div.sw-slides-margin div.s145 a.cabb2{
    width: 100%;
    
}

/* div.sw-slides-margin div a div{
    width: 100%;
} */

div.sw-slides-margin div.s145 a.cabb2 div.img-sw-slides span.chenxi img{
    width: 100%;
    height: 185.462px;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

div.johanchinh div.sw-slides-margin {
    width: 278.200px;
    border-radius: 12px;
    margin-right: 16px;
  
}


div.text-sw-slides{
    padding: 16px;
}


div.clomnss{
    display: flex;
    flex-direction: column;
}

div.yohan-sl{
    padding-bottom: 16px;
    display: flex;
    flex-grow: 1;

}

div.yohan-sl div.ct-yohan-sl{
   font-weight: 600;
   text-overflow: ellipsis;
   white-space: nowrap;
   text-align: left;
   word-break: break-all;
   overflow: hidden;
   color: black;

   
}

div.clip-path-tick{
    width: 32px;
    display: flex;
    justify-content: center;


}

div.clip-path-tick div.anna{
    margin-left: 4px;
    margin-right: 4px;
    width: 32px;
}


div.clip-path-tick div.anna svg{
   width: 32px;
   fill: blue;
   height: 28px;
}

div.vantaxi{
    
    display: flex;
    flex-grow: 1;
    width: 100%;
}

div.benzema{
    flex: 1 1 0px;
}

div.benzema .kens{
    display: flex;
    align-items: center;
}

div.benzema-x{
    flex: 1 1 0px;
}

div.benzema-x div{
    padding-left: 8px;
}

div.benzema-x .kens-x{
    display: flex;
    align-items: center;
}

div.benzema .leos{
    display: flex;
    align-items: center;
}


div.benzema-x .leos-x{
    display: flex;
    align-items: center;
}

/* =======================SECTION THREE==================== */

.arr-st-3-left{
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: none;
    top: 48%;
    left: 10px;
}

.arr-st-3-right{
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: none;
    top: 48%;
    right: 10px;
}

.arr-st-3-right i, .arr-st-3-left i{
    font-size: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.position-relactive-page-index-section-three{
    overflow-x: scroll;
}

.position-relactive-page-index-section-three::-webkit-scrollbar {
    background: none;
}

div.xsa-section{
    position: relative;
}

div.benzema .kens{
    font-size: small;
    color: grey;
}

div.benzema-x .kens-x{
    font-size: small;
    color: grey;
}

div.benzema .leos{
    font-weight: 600;
}

div.benzema-x .leos-x{
    font-weight: 600;
}

/* =======================SECTION THREE==================== */


/* ============================================FOOTER===================================== */

.footer-top{
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
}

.footer-top .stay-in-the-loop{
    width: 45%;
}

div.div-title-stitl span.title-stay-itl{
    font-size: 20px;
    font-weight: 600;
    color: var(--color-icon-menu-text);
}

div.describle-stay-itl span.join-our-discrible{
    color: var(--color-icon-menu-text);
    font-size: 16px;
}

div.describle-stay-itl{
    padding-top: 15px;
    
}

div.chen-input-footer{
    padding-top: 15px;
    display: flex;
    justify-content: space-between;
}

div.chen-input-footer div {
    width: 100%;
    padding-right: 20px;
}


div.chen-input-footer div input{
    padding: 15px;
    border-radius: 12px;
    border: none;
    width: 100%;
    outline: none;
}


div.chen-input-footer button{
    padding: 14px;
    border-radius: 12px;
    border: none;
    outline: none;
    background-color: rgb(32, 129, 226);
    width: 30%;
}

div.chen-input-footer button span{
  font-size: 15px;
  color: var(--color-icon-menu-text);
  font-weight: 600;
}

/* 
<!-- ----------stay in the loop----------- -->
<!-- ----------Join the community----------- --> */

.footer-top .join-the-community{
    width: 45%;
}

div.title-join-the-cm span.text-title-join-the-cm{
    font-size: 20px;
    font-weight: 600;
    color: var(--color-icon-menu-text);
}

div.rows-icon-community{
    padding-top: 20px;
}

div.rows-icon-community i{
    color: var(--color-icon-menu-text);
    font-size: 25px;
    padding: 15px;
    border-radius: 12px;
    background-color: rgb(32, 129, 226);
    margin-right: 8px;
}

/* ===============================FOOTER BOTTOM=============================== */

div.logo-and-name-brands{
    display: grid;
    row-gap: 10px;
}

div.logo-main-ft{
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background-image: url(../View/img/logo.jpg);
    background-size: cover;
}


div.textlogomain-ft p{
    font-size: 24px;
    font-weight: bold;
    color: var(--color-icon-menu-text);
 }


div.describle-ft-bt span{
    font-size: 15px;
    color: var(--color-icon-menu-text);
}

/* ===========================col-two==================== */

div.ft-bot-col-two div.grid-row-col-two{
    display: grid;
    row-gap: 15px;
}

div.ft-bot-col-two div.grid-row-col-two div{
    color: var(--color-icon-menu-text);
}

div.ft-bot-col-two div.grid-row-col-two div a{
    color: var(--color-icon-menu-text);
    font-weight: 400;
    font-size: 14px;
}

div.ft-bot-col-two div.grid-row-col-two div.Marketplace-ft{
    font-weight: bold;
    padding-bottom: 10px;
}

div.ft-bot-col-two div.grid-row-col-two div.My-Account-ft{
    font-weight: bold;
    padding-bottom: 10px;
}

div.ft-bot-col-two div.grid-row-col-two div.Stats-ft{
    font-weight: bold;
    padding-bottom: 10px;
    padding-top: 50px;
}

/* =========================FOOTER X================= */

div.footer-x div.banquyen-ft div.button-ft-x a{
    color: var(--color-icon-menu-text);
}


/* =======================================================REPONSIVE BO SUNG======================================================== */



div.trastion-nav-section-two{
    padding: 0 32px 32px 32px;
    width: 100%;
}

.navbar-section2{
    display: flex;
    justify-content: space-between;
}

.times-of-view{
    display: flex;
}

.viewall{
    margin-left: 20px;
}

.times-of-view .times{
    display: flex;
}

div.times div.display-none-temp{
    display: none;
}

.select-box-all-chans{
    display: flex;
    margin-left: 20px;
}

div.tredning-and-top{
    display: flex;
}

.hr{
    position: relative;
    width: 100%;
    height: 1px;
    background-color: rgba(0, 0, 0, 0.219);
    margin-top: 10px;
    margin-bottom: 10px;
}

.hr-js{
    position: absolute; background-color: black; height: 2px; width: 110px; top: -1px;
}


/* ------------ */

div.seconds-chart{
    padding-left: 50px; width: 50%;
}

div.content-fl{
    width: 100%;
}

div.two-charts{
    padding-left: 32px; padding-right: 32px; display: flex;
}

div.two-charts div.fristly-chart {
    padding-right: 50px; width: 50%;
}

div.floor-price-fl{
    width: 20%; display: flex; align-items: center; justify-content: flex-end;
}

div.volume-fl{
    width: 20%; display: flex; align-items: center; justify-content: flex-end;
}

div.nav-fl div.floor-price-fl{
    width: 20%; display: flex; align-items: center; justify-content: flex-end;
}

div.nav-fl{
    padding: 4px 8px 0 8px; display: flex; width: 100%; justify-content: space-between;
}

div.collection-fl{
    width: 60%; display: flex; align-items: center;
}

/* -----------user chart */

div.table-chart{
    width: 100%; max-width: 100%; max-height: 480px; height: 480px;
}

div.table-chart div.chart-user a{
    padding: 12px 8px; width: 100%; display: flex;
}

div.table-chart div.chart-user a div.user-x125-all-1{
    width: 60%; display: flex; align-items: center; justify-content: flex-start;
}

div.table-chart div.chart-user a div.user-x125-all-1 div.reponsive-home-x125-a div.reponsive-home-x125-a-1{
    width: 23px; margin-right: 9px; display: flex; align-items: center;
}

div.table-chart div.chart-user a div.user-x125-all-1 div.reponsive-home-x125-a div.reponsive-home-x125-a-1 span.reponsive-home-x125-a-1-1{
    color: black; font-weight: 600; font-size: 20px;
}

/* ----------- */

.reponsive-home-x125-b{
    display: flex;
}

.reponsive-home-x125-b-1{
    width: 72px; height: 72px;
}

.reponsive-home-x125-b-1 span{
    overflow: hidden; width: 100%; height: 100%;
}

.reponsive-home-x125-b-1 span img{
    object-fit: cover; max-width: 100%; max-height: 100%; border-radius: 10px;    
}

.reponsive-home-x125-b-2{
    padding-left: 24px; display: flex; align-items: center;
}

.reponsive-home-x125-b-2-1{
    display: flex;
}

.reponsive-home-x125-b-2-1 span{ 
    display: flex;
}

.reponsive-home-x125-b-2-1 span .reponsive-home-x125-b-2-1-name-text{
    display: flex; align-items: center;
}

.reponsive-home-x125-b-2-1 span .reponsive-home-x125-b-2-1-name-text .reponsive-home-x125-b-2-1-name-text-xxx{
    font-weight: 600; color: black; padding-right: 5px;
}

/* ----svg */

.reponsive-home-x125-b-2-1-svg-path{
    display: flex; align-items: center;
}
.reponsive-home-x125-b-2-1-svg-path svg{
    height: 32px; width: 32px;
}


/* ----------------- */

.user-x125-all-2{
    width: 20%; display: flex; align-items: center; justify-content: flex-end;
}

.user-x125-all-2 span div{
    width: 100%; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; font-weight: 600; color: black;
}

/* --- */

.user-x125-all-3 {
    width: 20%; display: flex; align-items: center; justify-content: flex-end;
}

.user-x125-all-3 span div{
    font-weight: 600; color: black;
}

/* ------------------ */

/* =====================THREE============== */

.main-section-home{
    width: 100%;
}

.xsa-bb-page{
    width: 100%;
}

.xsa-bb-page .title{
    padding-bottom: 20px;
}

.xsa-bb-page .title h2{
    font-weight: 600;
}


.xsa-section{
    width: 100%; padding-left: 32px; padding-right: 32px;
}

.position-relactive-page-index-section-three{
    width: 100%;
}

.padding-20px{
    padding-left: 20px;
    padding-right: 20px;
}

.width-100-phantram{
    width: 100%;
}

.slide-st-3{
    width: 1450px;
}


.slide-st-3 .johanchinh{
    width: 1450px;
    display: flex; overflow: hidden;
}

.slide-st-3 .johanchinh .sw-slides-margin{
    width: 278.2px;
}

.kanta-s .vantaxi .benzema .kens .kens-a div{
    color: gray;
}


/* ================FOOTER================= */

footer{
    margin-top: 40px; width: 100%; background-color: rgb(24, 104, 183);
}

.padding-content-footer{
    padding-left: 34px; padding-right: 34px; padding-top: 50px;
}

.grid-footer{
    display: grid; row-gap: 40px;
}

.footer-bottom .display-bot-ft{
    display: flex; justify-content: space-between;
}

.footer-bottom .display-bot-ft .ft-bot-col-one {
    width: 32%;
}

.grid-bot-ft{
    display: flex; display: grid; grid-template-columns: 200px 200px 200px 200px;  column-gap: 20px;
}

/* ---------------BANNER */

div.banner-section-one{
    padding-top: 30px;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 32px;
    width: max-content;
    position: relative;
    height: max-content;
}

div.banner-all-home-page{
    display: grid;
    grid-template-columns: repeat(12, 345px);
    column-gap: 16px;
    /* overflow-x: scroll; */
    height: 345px;
    width: 1428px;
    max-width: 1430px;
}

div.banner-all-home-page::-webkit-scrollbar{
    background-color:  black;
}

.banner-product-main-home{
    width: 345px;
    height: 100%;
    overflow: hidden;
    border-radius: 20px;
    position: relative;
}

.banner-product-main-home .imgs-main-home-banner{
    width: 100%;
    height: 100%;
}

.banner-product-main-home .imgs-main-home-banner img{
    width: 100%;
    height: 100%;
}

div.text-price-main-home-banner {
    position: absolute;
    z-index: 200;
    bottom: 0px;
    padding: 10px 15px;
}

div.bg-black{
    position: absolute;
    background-color: rgba(0, 0, 0, 0.274);
    height: 100%;
    width: 100%;
    z-index: 100;
    bottom: 0;
}

div.text-price-main-home-banner p.Inter-weight{
    font-weight: 600;
}

div.text-price-main-home-banner p {
    color: white;
}


/* ========================== */


button.btn-left-banner{
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: none;
    font-size: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    top: 40%;
    left: 10px;
    background-color: white;
    z-index: 500;
}

button.btn-right-banner{
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: none;
    background: none;
    font-size: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    top: 40%;
    right: 30px;
    background-color: white;
    z-index: 500;
}


/* ============================================== */

/* ========================TEST JS===================== */
.reponsive-home-x125-b-1 span img{
    width: 100%;
    height: 100%;
}
.reponsive-home-x125-b-2-1 span .reponsive-home-x125-b-2-1-name-text .reponsive-home-x125-b-2-1-name-text-xxx{
    text-overflow: ellipsis;
    white-space: nowrap;
    word-break: break-all;
    overflow: hidden;
}

div.sw-slides-margin div.s145 a.cabb2 div.img-sw-slides span.chenxi img{
    width: 278px;
}

div#eightsectionHome div.vantaxi{
    display: none;
}

div#eightsectionHome div.clip-path-tick{
    display: none;
}

div#ninesectionHome div.vantaxi{
    display: none;
}

div#ninesectionHome div.clip-path-tick{
    display: none;
} 

div#eightsectionHome div.yohan-sl div.ct-yohan-sl{
    text-overflow:clip;
    white-space: normal;
    word-break: normal;
    overflow: visible;
}


div#ninesectionHome div.yohan-sl div.ct-yohan-sl{
    text-overflow:clip;
    white-space: normal;
    word-break: normal;
    overflow: visible;
}


/* ------------------ */

div.banner-all-home-page{
    position: relative;
    overflow: hidden;
    scroll-behavior: smooth;
}


div.banner-all-home-page.dragging{
    scroll-behavior: auto;
    cursor: grab;
    user-select: none;
}

div.banner-section-one{
    height: 400px;
    width: 100%;
}



/* ===========================ADD CART================================== */

#uuphiencongai{
    border-radius: 12px;
    width: max-content;
    border: 1px solid black;
    background-color: white;
    top: 0;
    margin-top: 20px;
    right: 20px;
    position: fixed;
    z-index: 11000;
}

.padding-full-all{
    padding: 30px;
}

.duongmieu{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid black;
    padding-bottom: 20px;
}

.sopss{
    font-size: 20px;
    font-weight: 600;
}

.duongmieu i{
    font-size: 30px;
}

/* ---------- */

.huynhs{
    display: flex;
    column-gap: 5px;
}

.ngocthu{
    display: flex;
    justify-content: space-between;
    font-weight: 600;
    font-size: 15px;
    padding-top: 20px;
    padding-bottom: 20px;
}

.main0ss{
    display: flex;
    align-items: center;
    margin-top: 10px;
    margin-bottom: 10px;
    width: max-content;
    height: max-content;
}

.main0ss .boxanh-ss{
    width: 70px;
    height: 70px;
    background-color: blue;
    border-radius: 8px;
    overflow: hidden;
    margin-right: 15px;
}

.main0ss .boxanh-ss img{
    width: 100%;
    height: 100%;
}

.x47{
    font-weight: 600;
}

.x45{
    font-weight: 400;
    color: grey;
}

.x43{
    font-size: small;
    color: grey;
}

.xsss58{
    color: grey;
}

.hop-love{
    padding-bottom: 10px;
    border-bottom: 1px solid black;
}

/* ------------/ */



.phantongtien{
    display: flex;
    justify-content: space-between;
    padding-top: 20px;
    padding-bottom: 50px;
}

.koquantam{
    font-weight: 600;
}

.bussssw button.nhuhoanhumong{
    width: 100%;
    padding: 20px;
    border-radius: 8px;
    outline: none;
    border: none;
    background-color: blue;
    color: aliceblue;
    font-weight: 600;
    font-size: 15px;
}

.x5444{
    display: flex;
    column-gap: 5px;
    font-weight: 600;
}

.cocss{
    margin-right: 2px;
}

.meteee{
    font-size: small;
    color: grey;
    text-align: right;
}

/* -------------------------SUPPORT JS---------------------------- */

.vucanhky{
    display: block;
}

.display-btn-none{
    display: none;
}



/* ---------------- */

.ngocngoc{
    border-radius: 50%;
    position: absolute;
    right: 5px;
    top: 5px;
    color: aliceblue;
    font-weight: 500;
    padding: 5px;
    font-size: 10px;
    width: 18px;
    height: 18px;
    background-color: rgb(157, 127, 255);
    display: flex;
    align-items: center;
    justify-content: center;
}

.box-cart{
    position: relative;
}

/* -----------------------------------------GIOI HAN HEIGHT----------------------------- */

.gioihanheight{
    height: 100px;
    overflow: hidden;
}

.height-vohan{
    height: max-content;
}

.mautoihonty{
    background-color: beige;
}

.mausanghoty{
    background-color: rgba(247, 247, 247, 0);
}

.main0ss:hover{
    background-color: rgba(219, 219, 219, 0.783);
    border-radius: 8px;
}


.the-i{
    width: 70px;
    display: flex;
    justify-content: right;
    align-items: center;
    display: none;
}

i.thungrac{
    font-size: 30px;
}

.main0ss:hover .pridsd span{
    display: none;
} 

.main0ss:hover .the-i{
    display: flex;
}

/* .pridsd{
    width: 10%;
} */

.tatcagiatien{
    margin-right: 3px;
}

p.x47{
    width: 100px;
    text-overflow: ellipsis;
    overflow: hidden;
    word-break: break-all;
    white-space: nowrap;
    
}

.overflow-text-this{
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    word-break: break-all;
}


/* ======================================================MENU REPONSIVE======================================== */


.menucuareponsive-click{
    background-color: rgb(177, 218, 205);
    width: 414px;
    max-width: 414px;
    height: 736px;
    max-height: 680px;
    z-index: 2000;
    position: absolute;
    display: none;
}

div.changePage-reponsive{
    padding-top: 30px;
    display: flex ;
    flex-direction: column;
    row-gap: 30px;
    border-bottom: 0.5px solid rgba(0, 0, 0, 0.4);
    padding-bottom: 30px;
}

div.drop-1547{
    display: flex;
    justify-content: space-between;
    padding-left: 15px;
    padding-right: 15px;

}

div.flex-drop{
    display: flex;
    align-items: center;
}

div.bachtuchi{
    font-size: 30px;
    display: flex;
    align-items: center;
}

div.phuckien{
    margin-left: 5px;
    font-weight: 600;
}

div.nhatniemthanhhoa{
    font-size: 30px;
    display: flex;
    align-items: center;
}

div.johanfpt-icon-rponseee{
    padding-left: 15px;
    padding-right: 15px;
    display: flex;
    padding-top: 25px;  
    justify-content: space-between;

}

div.johanfpt-icon-rponseee i{
    font-size: 30px;
}
</style>