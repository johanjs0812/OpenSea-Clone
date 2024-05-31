const giohangPaymentSpRieng = [];   
const cartBtnPay = document.getElementById('thankivaysao');
cartBtnPay.addEventListener('click', function(){
    
    const img = document.getElementById('johanfpolynay').src;

    const hoa  = document.getElementById('layoday').innerText;
    const chu = document.getElementById('namechu').innerText;

    let nhathoachigian = document.getElementById('laygiatri').innerText;
    let gia = new Number(nhathoachigian);

    const donvi = document.getElementById('donvi').innerText;

    showGioHangRieng (img, hoa, chu, gia, donvi);
    showQuantity();
    TongGia();

});
// -------------------------------------------------------------------------------------------------------------------------------
const gioHangCollections = [];   
const cartCollectionsAtPayment = document.querySelectorAll("button.cart-i");
cartCollectionsAtPayment.forEach(function(e,i){

    e.addEventListener('click', function(){

        let johandeptraivl = event.target.parentElement.parentElement.parentElement.parentElement;
        
        let checkimg = johandeptraivl.children[0].children[0].src;

        let checkName = johandeptraivl.children[1].children[0].children[0].innerText;

        const chu = document.getElementById('namechu').innerText;

        let hoaphudi = johandeptraivl.children[1].children[0].children[1].children[0].innerText;
        console.log(hoaphudi);

        let checkGia = new Number(hoaphudi);

        let checkDonVi = johandeptraivl.children[1].children[0].children[1].children[1].innerText;

        let thesuBtn = event.target.parentElement.children[0];

        console.log(thesuBtn)

        updateCartCollections(checkimg, checkName, chu, checkGia, checkDonVi, thesuBtn);

        showQuantity();
        TongGia();

    })
})

// ===============================SHOW GIO HANG==========================

function showGioHangRieng (img, hoa, chu, gia, donvi){
    changeBtn();
    let cartItem = document.querySelectorAll('div.main0ss');

    for (let index = 0; index < cartItem.length; index++) {
        let productTf = document.querySelectorAll('p.x47');
        if (productTf[index].innerHTML == hoa) {
            return;
        }
    }

    let johankieuy = `<div id="sethovervip" class="boxanh-ss"><img src="${img}" alt=""></div><div class="in4-sd"><p class="x47">${hoa}</p><p class="x45">${chu}</p><p class="x43">creator earning: <span>10</span>%</p></div><div class="pridsd"><div class="xsss58"><span class="tatcagiatien">${gia}</span><span>${donvi}</span><div class="the-i"><i class='thungrac bx bx-trash'></i></div></div></div>`;

    let taodiv = document.createElement('div');

    taodiv.className = "main0ss";

    taodiv.innerHTML = johankieuy;
    
    const themOK = document.getElementById("hopssss-add").append(taodiv);

    // REMOVE ITEM================================================================
    showQuantity();
    TongGia();

    const thungRac = document.querySelectorAll('i.thungrac');
    thungRac.forEach(function(e){
    e.addEventListener('click', function(){
            let johan = event.target.parentElement.parentElement.parentElement.parentElement;
            johan.remove();
            khoiphucBtn()
            showQuantity();
            TongGia();
        })
    })

    
}

function updateCartCollections(checkimg, checkName, chu, checkGia, checkDonVi, thesuBtn){

    thesuBtn.className = 'bx bxs-notification-off';

    let cartItem = document.querySelectorAll('div.main0ss');

    for (let index = 0; index < cartItem.length; index++) {
        let productTf = document.querySelectorAll('p.x47');
        if (productTf[index].innerHTML == checkName) {
            return;
        }
    }

    
    let johankieuy = `<div id="sethovervip" class="boxanh-ss"><img src="${checkimg}" alt=""></div><div class="in4-sd"><p class="x47">${checkName}</p><p class="x45">${chu}</p><p class="x43">creator earning: <span>10</span>%</p></div><div class="pridsd"><div class="xsss58"><span class="tatcagiatien">${checkGia}</span><span>${checkDonVi}</span><div class="the-i"><i class='thungrac bx bx-trash'></i></div></div></div>`;

    let taodiv = document.createElement('div');

    taodiv.className = "main0ss";

    taodiv.innerHTML = johankieuy;
    
    const themOK = document.getElementById("hopssss-add").append(taodiv);

    TongGia();

    // REMOVE ITEM================================================================

    const thungRac = document.querySelectorAll('i.thungrac');
    thungRac.forEach(function(e){
    e.addEventListener('click', function(){
            let johan = event.target.parentElement.parentElement.parentElement.parentElement;
            johan.remove();
            thesuBtn.className = 'bx bx-cart-alt';
            showQuantity();
            TongGia();
        })
    })

}
// ===============================END SHOW GIO HANG==========================

// ======================TOTAL PRICE=========================================


function TongGia (){
    
    let tongtiencoll = 0;

    let KiraMan = document.querySelectorAll('div.main0ss')

    for (let index = 0; index < KiraMan.length; index++) {
        
        let rows = KiraMan[index];

        let giadep = rows.querySelector('span.tatcagiatien').innerText;
        
        console.log(giadep)

        giadep = new Number(giadep);

        console.log(giadep)
        
        tongtiencoll += giadep;

    }

    document.getElementById('x1444').innerText = tongtiencoll.toFixed(3);


}
// ======================END TOTAL PRICE=========================================

// =======================SHOW QUANTITY index======================
function showQuantity(){

    let dem = 0;

    let johan = document.querySelectorAll('div.main0ss').length;

    document.getElementById('chisoindexcart').innerHTML = johan;
    document.getElementById('yeuthu').innerHTML = johan;
}

// ========================SHOW QUANTITY====================

// =====================XOA ALL ITEM========================================

const clearallPR = document.getElementById('clearall-pr');
clearallPR.addEventListener('click', function(){
    document.getElementById('hopssss-add').innerHTML = "";
    showQuantity();
    TongGia();
    khoiphucBtn();
    let canhoatu = document.querySelectorAll('button.cart-i i');
    for (let index = 0; index < canhoatu.length; index++) {
        document.querySelectorAll('button.cart-i i')[index].className = 'bx bx-cart-alt';
    }
})

// =====================XOA ALL ITEM========================================

// =================CHANGE STATUS CART BUTTON===============================
function changeBtn(){
    cartBtnPay.querySelector('i').className = 'bx bxs-notification-off';
}

function khoiphucBtn(){
    cartBtnPay.querySelector('i').className = 'bx bx-cart-alt';
}

// ==============================CHANGE STATUS CART BUTTON============================

// =================AN HIEN GIO CART==========================/
// const anthatsao = document.getElementById('uuphiencongai');
//     anthatsao.style.display = 'none';
//     const showgio = document.getElementById('hienlistmua');

//     showgio.addEventListener('click', function(){
        
//         anthatsao.style.display = 'block';
        
//         document.getElementById('andi-x').addEventListener('click', function(){
//             anthatsao.style.display = 'none';
//     })
    
// })    
// ===========================================LOAD PAGE============================================================
