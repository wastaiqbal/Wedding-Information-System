    <section class="kuy-all">
        <div class="container d-flex ">
            <div id="kuy-card" class="kuy-card" style="" >
                <div class="konten">
                    <div class="w-100 mb-5 d-flex justify-content-center">
                        <img class="kuy-img text" src="<?= base_url(); ?>assets/home/images/save_the_date_bl.gif" alt="" height="210">
                    </div>
                    <div class="kuy-isi mt-5 d-flex justify-content-center">
                        <div class="kuy-kata row justify-content-center" style="margin-top:-40px !important">
                            <h5><?= $product['title']; ?></h5>
                            <p>Mengundang Anda untuk datang ke Pernikahan Kami</p>
                            <div class="kuy-btn"> 
                                <a href="<?= base_url(); ?>" >Detail Lengkap</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>

<style>
    body {
        background-size: 100%; 
        background-image:url(<?= base_url(); ?>assets/home/images/back5.jpg); 
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    #kuy-card {
        background-position: center;
        background-repeat: no-repeat;
 background-image:url(<?= base_url(); ?>assets/home/images/undangan2.jpg); 
    }

    .kuy-kata  {
        margin-block-end: 0px !important;
        margin-block-start: 20px !important;
        margin-bottom: 10px;
        min-width: 300px;
    }

    .kuy-kata h6 {
        margin-top: 20px;
    }

    .kuy-btn {
        margin-top: 20px;
    }
    .kuy-btn a{
        font-weight: bold;
        padding: 15px 20px;
        background-color: white;
        color: #ac8ca4;
        border-radius: 10px;
        transition: ease-in-out .2s;
        cursor: pointer;
    }

    .kuy-btn a:hover{
        padding: 15px 20px;
        background-color: rgb(255, 255, 255, .1);
        border: 2px solid white;
        color: #4a4a4a;
        border-radius: 10px;
    }
   
    .tengah {
        display: flex;
        justify-content: center;
        border: 2px solid red;
        margin-top: 50px;
    }

    .kuy-img {
        display: flex;
        justify-content: center;
    }
 
    .kuy-all .container {
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        position: absolute;
    }
    .kuy-card {
        width: 525px;
        max-height: 90vh;
        min-height: 500px;
        -webkit-background-size: cover;
        background-size: cover;
        position: relative;
        left: 50%;
        transform: translateY(0) translateX(-50%);
        border-radius: 20px;
        overflow: hidden;
        text-align: center;
        padding: 120px 140px;
        color: #000;
        -webkit-box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
        -moz-box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
        box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }
	.kuy-card:hover {
		-webkit-box-shadow: 0px 9px 32px -1px rgba(0,0,0,0.2);
        -moz-box-shadow: 0px 9px 32px -1px rgba(0,0,0,0.2);
        box-shadow: 0px 9px 32px -1px rgba(0,0,0,0.2);
        transform:translateY(-10px) translateX(-50%);
	}
    
</style>
