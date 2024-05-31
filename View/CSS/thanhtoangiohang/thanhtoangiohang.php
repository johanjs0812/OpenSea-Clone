<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

    *{
        font-family: 'Poppins', sans-serif;
        margin:0; padding:0;
        box-sizing: border-box;
        outline: none; border:none;
        text-transform: capitalize;
        transition: all .2s linear;
    }

    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        padding:25px;
        min-height: 110vh;
        /* background: linear-gradient(90deg, #2ecc71 60%, #27ae60 40.1%); */
    }

    .container form{
    border-radius: 8px;
    padding:20px;
    width:700px;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,.1);
    }

    .container form .row{
    display: flex;
    flex-wrap: wrap;
    gap:15px;
    }

    .container form .row .col{
    flex:1 1 250px;
    }

    .container form .row .col .title{
    font-size: 20px;
    color:#333;
    padding-bottom: 5px;
    text-transform: uppercase;
    }

    .container form .row .col .inputBox{
    margin:15px 0;
    }

    .container form .row .col .inputBox span{
    margin-bottom: 10px;
    display: block;
    }

    .container form .row .col .inputBox input{
    width: 100%;
    border:1px solid #ccc;
    padding:10px 15px;
    font-size: 15px;
    text-transform: none;
    }

    .container form .row .col .inputBox input:focus{
    border:1px solid #000;
    }

    .container form .row .col .flex{
    display: flex;
    gap:15px;
    }

    .container form .row .col .flex .inputBox{
    margin-top: 5px;
    }

    .container form .row .col .inputBox img{
    height: 34px;
    margin-top: 5px;
    filter: drop-shadow(0 0 1px #000);
    }

    .container form .submit-btn{
        width: 100%;
        padding:12px;
        font-size: 17px;
        background: rgb(32, 129, 226);
        color:#fff;
        margin-top: 5px;
        cursor: pointer;
        border-radius: 5px;
    }

    .container form .submit-btn:hover{
    background: blue;
    }

</style>

