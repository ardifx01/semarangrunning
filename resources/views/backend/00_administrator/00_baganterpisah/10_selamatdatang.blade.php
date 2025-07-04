<div class="row">
    <div class="col-sm-12">
        <marquee behavior="scroll" direction="left" scrollamount="12">
            <h6 class="mb-0" style="font-family: 'Poppins', sans-serif; font-size: 16px;">
                Selamat datang!
                <span style="color: orange; font-weight: 800;">
                    {{ Auth::user()->name  ?? '-'}}
                </span>
                di Dashboard
                <span style="color: orange; font-weight: 800;">
                    {{ Auth::user()->statusadmin->status ?? '-' }}
                </span>
                ABG Blora Bangunan Gedung Kabupaten Blora
            </h6>
        </marquee>
    </div>
</div>
