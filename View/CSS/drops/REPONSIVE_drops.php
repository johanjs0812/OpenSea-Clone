<style>
    :root{
    --rong-414: 414px;
    --text-mini-reponsive-title: 16px;
    --text-mini-reponsive-1: 15px;
    --rong-ipad: 1024px;
}

@media screen and (min-width: 414px) and (max-width: 736px) {
    
     div.main-section-one div.drops-h1{
        padding: 40px 20px 0px 20px ;
    }


    div.main-section-one div.drops-h1 h1{
        font-size: 25px;
    }
    
    div.display-h1-banner h1{
        font-size: 25px;
    }

    div.information-and-avt p{
        font-size: var(--text-mini-reponsive-1);
    }

    div.information-and-avt p.po-366{
        font-size: var(--text-mini-reponsive-1);
    }

    div.box-count-times{
        padding: 6px 10px;
        border-radius: 8px;
    }

    div.information-and-avt p.p-t1{
        font-size: 13px;
        font-weight: bold;
    }

    div.box-count-times p.p-b1{
        font-size: 10px;
        font-weight: bold;
    }

    .content-button-of-banner div.button-viewcourse button{
        display: none;
    }

    div.content-button-of-banner{
        justify-content: space-between;
        height: max-content;
        padding-top: 95px;
    }

    .content-button-of-banner div.button-viewcourse button.bell-box{
        padding: 13.5px 13.5px;
        border-radius: 8px;
    }

    div.banner-container{
        height: 450px;
    }

    div.information-and-avt p.po-366{
        margin-bottom: 20px;
    }

    div.main-section-two-drops div.hatang-1{
        padding-left: 20px;
        padding-right: 20px;
    }

    div.main-section-two-drops div.hatang-1 div.product-list{
        display: grid;
        width: 100%;
        grid-template-columns: repeat(2, minmax(0,1fr));
        gap: 24px 16px;
    }

    div.product-list div.product-sp{
        width: auto;
    }

    div.text-sddd{
        font-size: 14px;
    }

    div.xcnaodi div.hoathan-ss5{
        font-size: 14px;
    }

    div.product-list div.product-sp div.imgss{
        height: 110px;
    }

    div.show-in4-product-drops{
        padding: 15px;
    }

}


/* ===========================TABLET PRO===================== */


@media screen and (min-width: 1024px) and (max-width: 1366px) {
    div.main-section-one div.drops-h1{
        padding-left: 15px;
        padding-right: 15px;
    }

    div.banner-container{
        height: 350px;
    }

    div.content-button-of-banner{
        top: 0px;
        height: max-content;
    }

    div.main-section-two-drops div.hatang-1{
        padding-left: 15px;
        padding-right: 15px;
    }

    div.product-list div.product-sp{
        width: 230px;
    }

    div.product-list div.product-sp div.imgss{
        height: 140px;
    }
}
</style>