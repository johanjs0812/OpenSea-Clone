<style>

    div.body--signup{
        min-height: 110vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    div.body--signup .wrapper{
        position: relative;
        max-width: 430px;
        width: 100%;
        background: #fff;
        padding: 34px;
        border-radius: 6px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    }
    div.body--signup .wrapper h2{
        position: relative;
        font-size: 22px;
        font-weight: 600;
        color: #333;
    }
    div.body--signup .wrapper h2::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 28px;
        border-radius: 12px;
        background: #4070f4;
    }
    div.body--signup .wrapper form{
        margin-top: 30px;
    }
    div.body--signup .wrapper form .input-box{
        height: 52px;
        margin: 18px 0;
    }
    div.body--signup form .input-box input{
        height: 100%;
        width: 100%;
        outline: none;
        padding: 0 15px;
        font-size: 17px;
        font-weight: 400;
        color: #333;
        border: 1.5px solid #C7BEBE;
        border-bottom-width: 2.5px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }
    div.body--signup .input-box input:focus,
    div.body--signup .input-box input:valid{
        border-color: #4070f4;
    }
    div.body--signup form .policy{
        display: flex;
        align-items: center;
    }
    div.body--signup form h3{
        color: #707070;
        font-size: 14px;
        font-weight: 500;
        margin-left: 10px;
    }
    div.body--signup .input-box.button input{
        color: #fff;
        letter-spacing: 1px;
        border: none;
        background: #4070f4;
        cursor: pointer;
    }
    div.body--signup .input-box.button input:hover{
        background: #0e4bf1;
    }
    div.body--signup form .text h3{
        color: #333;
        width: 100%;
        text-align: center;
    }
    div.body--signup form .text h3 a{
        color: #4070f4;
        text-decoration: none;
    }
    div.body--signup form .text h3 a:hover{
        text-decoration: underline;
    }

</style>