// ------------------UPDATE IMG---------------------------/
function updateImg(){
    const allImg = document.querySelectorAll('div.product-list div.product-sp div.imgss img');

    for (let index = 0; index < allImg.length; index++) {
        allImg[index].src = `/img/dr${[index]}.jpg`;
    }
}

addEventListener('load', updateImg);

// ------------------UPDATE IMG---------------------------/

// ------------------COUNT ---------------------------/

let endDate = new Date("06/30/2023 00:00:00").getTime();

let check = setInterval(function(){
    
    let now = new Date().getTime();
    let distance = endDate - now;
    let day = Math.floor(distance / (24*60*60*1000));
    let hour = Math.floor((distance % (24*60*60*1000)) / (60* 60*1000));
    let minute = Math.floor((distance % (60* 60*1000)) / (60*1000));
    let seconds = Math.floor((distance % (60*1000)) / 1000);
    document.getElementById('day').innerText = day;
    document.getElementById('hour').innerText = hour;
    document.getElementById('minute').innerText = minute;
    document.getElementById('seconds').innerText = seconds;
    if(distance <= 0){
        clearInterval(check);
    }
}, 1000);