<style>
    /* IPHONE 6S */
/* 414 x 736 */

:root{
    --rong-414: 414px;
    --dai-736: 736px;

    --rong-ipad: 1024px;
}

@media screen and (min-width: 414px) and (max-width: 736px){

    /* ====================HEADER====================== */


    header{
       max-width: var(--rong-414);
    }
    

    header div.bar-height-menu{
        padding: 15px;
        width: 100%;
    }

    div.menu-reponsive-vip{
        color: aliceblue;
        font-size: 40px;
        display: flex;
        align-items: center;
        margin-right: 13px;
        display: block;
    }

    .menu-reponsive-vip i{
        display: flex;
        align-items: center;
    }
    

    .logo-drop-star .dr-st{
        display: none;
    }

    div.tanginput div.slash-nav{
        display: none;
    }

    div.tanginput div.search-icon{
        margin: 0;
    }

    div.tanginput{
        width: auto;
        margin: 0;
        padding: 10px 12px;
        border-radius: 8px;
    }

    div.tanginput input{
        display: none;
    }

    div.mail-content{
        display: none;
    }

    div.search-nav{
        width: auto;
    }

    div.logo-drop-star{
        flex-grow: 2;
        margin: 0;
    }
       
    /* ====================HEADER====================== */


    /* ====================SECTION ONE====================== */

    main{
        max-width: var(--rong-414);
        overflow-x: auto;
    }

    div.nav-bar-section-one{
        padding: 0px;
        max-width: var(--rong-414);
        margin: 0;
        display: flex;
        justify-content: center;
    }

    div.trastion-nav-bar-section-one nav div ul div{
        justify-content: space-between;
        gap: 0;
    }

    div.mautext-sss-page-home li a span{
        font-size: small;
        font-weight: 600;
    }

    div.trastion-nav-bar-section-one nav div ul div li a{
        padding: 8px 16px;
        background-color: transparent;
    }

    .media-width-100phantram{
       max-width: var(--rong-414);
       width: var(--rong-414);
    }

    .padding-0{
        padding: 0px 0px;
    }
    
    div.trastion-nav-bar-section-one nav div ul{
        padding: 0;
        margin-block-start: 0;
        margin-block-end: 0;
        padding-inline-start: 0px;
        display: flex;
        justify-content: center;
    }
    
    .display-none{
        display: none;
    }

    div.trastion-nav-bar-section-one{
        width: var(--rong-414);
        max-width: var(--rong-414);
        padding-top: 24px;
    }

    /* --------------------- */

    div.banner-section-one{
        width: var(--rong-414);
        max-width: var(--rong-414);
        padding: 20px;
    }

    .btn-left, .btn-right{
        display: none;
    }

    div.content-button-of-banner{
        padding: 20px;
    }

    div.content-button-of-banner div.information-and-avt div.avt-banner{
        width: 50px;
        height: 50px;
    }

    div.display-h1-banner h1{
        font-size: 25px;
        font-weight: 600;
    }

    div.information-and-avt p{
        font-size: 15px;
        font-weight: 600;
    }

    /* ------bt */

    div.content-button-of-banner div.button-viewcourse button.view-drop-p{
        /* width: 150px;
        height: 60px;
        background-color: var(--color-bold-menu);
        opacity: 1.8;
        color: var(--color-icon-menu-text);
        border: none;
        font-weight: bold;
        border-radius: 10px;
        font-size: 15px; */
        display: none;
    }

    div.content-button-of-banner{
        display: block;
        display: flex;
        justify-content: flex-start;
    }
    
    .bell-caca{
        background: none;
        width: 45px;
        height: 45px;
        border-radius: 8px;
        background-color: var(--color-trastion); 
        outline: none;
        border: none;
        color: var(--color-icon-menu-text);
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 70px;
    }
    
    .bell-caca i{
        font-size: 20px;
    }    


    /* ---------sad */

    .timedown-product{
        padding-top: 25px;
        display: flex;
        gap: 10px;
    }
    
    .banner-times-hda{
        width: 45px;
        height: 45px;
        border-radius: 8px;
        background-color: var(--color-trastion);
      
    }
    
    .banner-times-hda div.x-center {
        height: 100%;
        width: 100%;
        text-align: center;
        padding: 8px;
    }
    .banner-times-hda div.x-center div {
        font-weight: 600;
        font-size: 10px;
    }

     /* ====================SECTION ONE====================== */

     /* ====================SECTION TWO====================== */

    div.trastion-nav-section-two{
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        width: var(--rong-414);
        max-width: var(--rong-414);
    }

    div.tredning-and-top h2{
        font-size: 18px;
        font-weight: 600;
    }


    .navbar-section2{
        display: block;
    }

    .times-of-view{
        display: block;
        position: relative;
        display: flex;
        height: 40px;
        justify-content: space-between;
        flex-direction: row-reverse;
    }

    .times-of-view .times{
        width: 49%;
        justify-content: space-between;
    }

    .times-of-view .times div.hours span{
        font-size: 15px;
    }

    .times-of-view .times div.hours-2,
    .times-of-view .times div.hours-3,
    .times-of-view .times div.days {
        display: none;
    }

    div.times div.display-none-temp{
        display: block;
        display: flex;
        align-items: center;
        
    }

    div.times div.display-none-temp i{
        font-size: 25px;
        font-weight: 600;
    }

    .select-box-all-chans div span{
        font-size: 15px;
    }

    div.select-box-all-chans{
        height: 40px;
        width: 49%;
        margin: 0px;
        justify-content: space-between;
    }

    div.viewall {
        height: 40px;
        right: 0;
        margin: 0;
        position: absolute;
        top: -65px;
        z-index: 5000;
    }

    div.viewall span{
        font-size: 15px;
    }

    .tredning-and-top{
        margin-top: 20px;
        margin-bottom: 30px;
    }
   
    /* hr------------------ */
    
    div.trastion-nav-section-two{
        position: relative;
        width: var(--rong-414);
        overflow: hidden;
    }

    .hoa-ab{
        position: absolute;
        top: 50px;
        z-index: 1000;
        max-width: var(--rong-414);
        width: 375px;
        overflow: hidden;
    }

    .hr{

        width: var(--rong-414);
        max-width: var(--rong-414);
        height: 1px;
        background-color: rgba(0, 0, 0, 0.219);
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .hr-js{
     background-color: black; height: 2px; width: 110px; top: -1px;
    }

    /* ----------rank table */
    
    div.two-charts{
        padding-left: 20px;
        padding-right: 20px;
        /* width: var(--rong-414);
        overflow-x: auto; */
        display: block;
        display: flex;
    }

    div.seconds-chart{
        padding: 0;
        width: 100%;
    }

    div.content-fl{
        width: 100%;
    }

    div.two-charts div.fristly-chart{
        padding-right: 0px; width: 100%; padding-right: 20px;
    }



    div.main-section-two{
        width: var(--rong-414);
        max-width: var(--rong-414);
    }

    div.table-chart div.chart-user a{
        width: 100%;
    }

    div.nav-fl{
       width: 100%;
    }

    div.plot{
        width: 100%;
    }

    div.chart-user{
        width: 100%;
    }

    div.nav-fl div span{
        font-size: 10px;
    }

    div.nav-fl div.floor-price-fl{
        display: none;
    }

    div.nav-fl:before{
        content: "#";
        font-size: 10px;
        display: flex; align-items: center; justify-content: flex-start;
    }

    /* ---chat user */

    div.two-charts{
        width: var(--rong-414);
        max-width: var(--rong-414);
        overflow-x: scroll;
    }

    div.table-chart div.chart-user a div.user-x125-all-1 div.reponsive-home-x125-a div.reponsive-home-x125-a-1 span.reponsive-home-x125-a-1-1{
        color: black; font-weight: 600; font-size: 15px;
    }
    
    .reponsive-home-x125-b-1{
        width: 60px; height: 60px;
    }

    .reponsive-home-x125-b-2-1 span .reponsive-home-x125-b-2-1-name-text .reponsive-home-x125-b-2-1-name-text-xxx{
        font-weight: 600; color: black; padding-right: 5px; font-size: 14px;
    }

    .user-x125-all-3 span div{
        font-weight: 600; color: black; font-size: 14px;
    }

    .user-x125-all-2 span div{
        font-size: 13px;
    }

    .user-x125-all-2 span:before{
        content: "Floor:";
        font-size: 15px;
        color: gray;
        margin-right: 1px;
        margin-bottom: 1px;
    }

    .user-x125-all-2 span{
        display: flex;
        align-items: center; gap: 2px;
    }

    div.table-chart div.chart-user a{
        position: relative;
        justify-content: space-between;
        width: 100%;
    }

    div.table-chart{
        width: 320px;
    }

    .user-x125-all-2{
        width: auto;
    }

    .user-x125-all-3{
        width: auto;
    }

    div.table-chart div.chart-user a div.user-x125-all-1{
        width: 0;
    }

    div.table-chart div.chart-user a div.user-x125-all-1 div.reponsive-home-x125-a div.reponsive-home-x125-a-1{
        width: 0;
        margin-right: 20px;
    }

    .reponsive-home-x125-b-2{
        padding-left: 10px;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align: left;
        word-break: break-all;
        overflow: hidden;
    }

    div.user-x125-all-2{
        position: absolute;
        top: 50%;
        left: 31%;
    }

    .reponsive-home-x125-b-2-1{
        position: absolute;
        top: 22%;
    }

    
    /* --svg */

    .reponsive-home-x125-b-2-1-svg-path{
        display: none;
    }
    
    /* ====================SECTION TWO====================== */

    /* ====================SECTION THREE====================== */
    .main-section-home{
        width: var(--rong-414);
        max-width: var(--rong-414);
    }

    .xsa-section{
        width: 100%; padding-left: 20px; padding-right: 20px;
    }

    .xsa-bb-page .title h2{
        font-weight: 600;
        font-size: 20px;
    }

    .slide-st-3 .johanchinh .sw-slides-margin{
        width: 250px;
    }

    .position-relactive-page-index-section-three{
        width: var(--rong-414);
        max-width: var(--rong-414);
        overflow-x: scroll;

    }

    .position-relactive-page-index-section-three button{
        display: none;
    }

    /* ====================SECTION THREE====================== */

    /* =====================FOOTER==================== */

    footer{
        margin-top: 40px; width: 100%; background-color: rgb(24, 104, 183);
    }

    .grid-footer{
        display: grid; row-gap: 0px;
    }
    

    .padding-content-footer{
        padding-left: 20px; padding-right: 20px; padding-top: 50px;
    }

    .footer-top {
        display: block;
        width: 100%;
    }

    .footer-top .stay-in-the-loop {
        text-align: center;
        width: 100%;
    }

    .footer-top .join-the-community{
        width: 100%;
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .join-the-community{
        width: 100%;

    }

    .title-join-the-cm{
        text-align: center;
    }

    div.rows-icon-community i{
        margin-right: 0px;
    }

    div.rows-icon-community{
        display: flex;
        justify-content: center;
        column-gap: 10px;
        row-gap: 10px;
        flex-wrap: wrap;
    }

    /* --------bot */

    div.footer-bottom{
        margin-top: 40px;
    }

    .grid-bot-ft {
        padding-top: 60px;
        width: 100%;
        display: block;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 30px;
    }

    .ft-bot-col-two{
        width: 45%;
    }

    .ft-bot-col-two .grid-row-col-two{
        text-align: center;
    }

    .footer-bottom .display-bot-ft{
        display: block;
    }

    .footer-bottom .display-bot-ft .ft-bot-col-one {
        width: 100%;
    }

    div.logo-and-name-brands{
        text-align: center;
    }

    div.logo-main-ft{
        margin-left: auto;
        margin-right: auto;
    }

    /* -------- */

    button.btn-right-banner{
        right: 10px;
    }

    div.banner-section-one{
        overflow: scroll;
    }
}  

/* 
================================IPAD PRO */

@media screen and (min-width: 1024px) and (max-width: 1366px) {

    .reponsive-home-x125-b-2-1 span .reponsive-home-x125-b-2-1-name-text .reponsive-home-x125-b-2-1-name-text-xxx{
        width: 100px;
    }

    div.banner-section-one{
        height: max-content;
    }

    div.logo-drop-star div.dr-st{
        display: none;
    }

    header div.bar-height-menu{
        padding: 0px 15px;
    }
    
    nav.menu-main:before{
        content: "☰";
        color: aliceblue;
        font-size: 30px;
        display: flex;
        align-items: center;
        margin-right: 13px;
    }
       
    header{
        max-width: var(--rong-ipad);
    }

    main{
        max-width: var(--rong-ipad);
    }

    div.main-trastion{
        max-width: var(--rong-ipad);
    }

    /* -----banner */

    div.banner-section-one{
        padding-top: 20px;
        padding-left: 15px;
        padding-right: 15px;
        
    }

    div.trastion-js-banner{
        height: max-content;
    }

    div.banner-container{
        height: 600px;
    }

    div.banner-all-home-page{
        display: grid;
        grid-template-columns: repeat(12, 236px);
        column-gap: 16px;
        height: 236px;
        width: 992px;
    }

    .banner-product-main-home{
        width: 236px;
        border-radius: 20px;
        
    }
    
    button.btn-left-banner{
        top: 40%;
        left: 20px;
    }

    button.btn-right-banner{
        top: 40%;
        right: 20px;
    }

    div.text-price-main-home-banner p.floor-weight {
        font-size: small;
    }


    /* =====================SECTION TWO============ */

    div.trastion-nav-section-two{
        padding: 0 20px 32px 20px;
        max-width: var(--rong-ipad);
    }

    div.two-charts {
        padding-left: 15px;
        padding-right: 15px;
        max-width: var(--rong-ipad);
    }

    /* --------------------- */

    .position-relactive-page-index-section-three{
        overflow-x: scroll;
    }

    .xsa-section{
        padding-left: 15px;
        padding-right: 15px;
        max-width: var(--rong-ipad);
    }

    .arr-st-3-left{
        z-index: 500;
        left: 20px;
    }

    .arr-st-3-right{
        z-index: 500;
        right: 22px;
    }
    
    div.sw-slides-margin div.s145{
        width: 236px;
        background-color: rgb(255, 255, 255);
    }

    div.img-sw-slides{
        width: 100%;
        height: 160px;
    }

    div.img-sw-slides span{
        width: 100%;
        height: 100%;
    }

    div.sw-slides-margin div.s145 a.cabb2 div.img-sw-slides span.chenxi img{
        width: 100%;
        height: 100%;
    }

    .reponsive-home-x125-b-1 span img{
        width: 100%;
        height: 100%;
    }

    /* -------------FOOTER------------- */

    
    
    .padding-content-footer{
        padding-left: 15px;
        padding-right: 15px;
    }
    
    .footer-top{
        display: block;
    }

    .footer-top .stay-in-the-loop{
        width: 100%;
        text-align: center;
        margin-bottom: 50px;
    }

    div.chen-input-footer button{
        width: 15%;
    }

    div.rows-icon-community i{
        margin-bottom: 8px;
    }


    /* -------------------- */

    .footer-top .join-the-community{
        width: 100%;
        text-align: center;
    }

    .footer-bottom .display-bot-ft .ft-bot-col-one{
        width: 35%;
    }

    div.logo-and-name-brands{
        padding-right: 50px;
    }

    .grid-bot-ft {
        display: flex;
        display: grid;
        grid-template-columns: 150px 150px 150px 150px;
        column-gap: 20px;
    }
}
</style>