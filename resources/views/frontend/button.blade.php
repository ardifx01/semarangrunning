<style>

    body {
    font-family: 'Poppins', sans-serif;
}

.button-abgblora {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-family: 'Poppins', sans-serif; /* Tambah font Poppins */
    font-weight: 600; /* Tebal, bisa diganti 700 jika lebih tebal lagi */
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s;
    background: linear-gradient(120deg, navy, white, navy);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

    .button-abgblora:hover {
        color: black;
        background: white;
    }

    .button-permohonan {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-family: 'Poppins', sans-serif; /* Tambah font Poppins */
    font-weight: 600; /* Tebal, bisa diganti 700 jika lebih tebal lagi */
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s;
    background: linear-gradient(120deg, skyblue, white, skyblue);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

    .button-permohonan:hover {
        color: black;
        background: white;
    }

   .button-fungsi {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease-in-out;
    background: linear-gradient(120deg, #0606e7, #c5b1b1, #0606e7);
    background-size: 200% auto;
    animation: gradientMove 6s linear infinite;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.button-fungsi:hover {
    color: black;
    background: white;
    background-size: initial;
    animation: none;
    border: 1px solid #0606e7;
    transform: translateY(-2px);
}

/* Gradient animation */
@keyframes gradientMove {
    0% {
        background-position: 0% center;
    }
    100% {
        background-position: 200% center;
    }
}


</style>


<style>
    .button-belakang {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        font-weight:bold;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, #86bae7, white, #86bae7);
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-belakang:hover {
        color: black;
        background: white;
    }

    .button-kembali {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        font-weight:bold;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, #6c757d, white, #6c757d);
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-kembali:hover {
        color: black;
        background: white;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>


<style>
 .button-validasinew {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #4b5563, #9ca3af, #4b5563);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-validasinew:hover {
    background-color: white !important;
    color: #00ccff !important;
    background-image: none !important;
}

.button-kembalinew {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #4b5563, #9ca3af, #4b5563);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-kembalinew:hover {
    background-color: white !important;
    color: #00ccff !important;
    background-image: none !important;
}


@keyframes gradientMove {
    0% {
        background-position: 0% center;
    }
    100% {
        background-position: 200% center;
    }
}


   .button-lolos {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    font-weight: bold;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #28a745, #d4edda, #28a745); /* hijau modern */
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-lolos:hover {
    color: black;
    background: white;
    animation: none; /* supaya animasi background berhenti saat hover */
}
/*
.button-baru {

    border: 1px solid #c8dfff;
    padding: 8px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: bold;
    color: #003366;
    background: linear-gradient(145deg, #e1f0ff, #d6e9ff);
    display: inline-flex;
    align-items: center;
    margin-right: 10px;
    cursor: pointer;
    text-decoration: none;
    min-width: max-content;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-baru:hover {
    background: white;
    color: black;
} */


.button-simpan {
    border: 1px solid #c8dfff;
    padding: 8px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: bold;
    color: #003366;
    background: linear-gradient(145deg, skyblue);
    display: inline-flex;
    align-items: center;
    margin-right: 10px;
    cursor: pointer;
    text-decoration: none;
    min-width: max-content;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-simpan:hover {
    background: white;
    color: black;
}

.button-baru {
    background: linear-gradient(145deg, #e6f1ff, #d4e6ff);
    color: #003366;
    border: 1px solid #bfdcff;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-baru:hover {
    background: #ffffff !important;     /* Latar belakang putih */
    color: #000000 !important;          /* Teks jadi hitam */
    border: 1px solid #0d6efd !important; /* Border biru tua */
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.15);
    transform: translateY(-1px);
}

.button-berkas {
    background: linear-gradient(145deg, #ffe566, #ffd100);
    color: #333333;
    border: 1px solid #ffcc00;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-berkas:hover {
    background: #fffacd !important;             /* Hover jadi lebih soft kuning muda */
    color: #000000 !important;
    border: 1px solid #e6b800 !important;
    box-shadow: 0 4px 12px rgba(255, 209, 0, 0.25);
    transform: translateY(-1px);
}

.button-newvalidasi {
    background: linear-gradient(145deg, #dacccc); /* Abu-abu gradasi */
    color: #333333;                                         /* Teks abu gelap */
    border: 1px solid #cccccc;                              /* Border abu */
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-newvalidasi:hover {
    background: #ffffff !important;     /* Hover: putih */
    color: #000000 !important;          /* Hover: teks hitam */
    border: 1px solid #999999 !important;/* Hover: border abu-abu */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transform: translateY(-1px);
}


.button-hijau {
    background: linear-gradient(145deg, #6fdc8c, #43c768);
    color: #ffffff;
    border: 1px solid #3cbf5a;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-hijau:hover {
    background: #d0f3dd !important; /* Hijau muda saat hover */
    color: #14532d !important;
    border: 1px solid #3cbf5a !important;
    box-shadow: 0 4px 12px rgba(67, 199, 104, 0.25);
    transform: translateY(-1px);
}

.button-merah {
    background: linear-gradient(145deg, #b33c3c, #8b1c1c);
    color: #ffffff;
    border: 1px solid #7a1414;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-merah:hover {
    background: #f5cccc !important; /* Merah muda saat hover */
    color: #7a1414 !important;
    border: 1px solid #7a1414 !important;
    box-shadow: 0 4px 12px rgba(179, 60, 60, 0.25);
    transform: translateY(-1px);
}


.button-hitam {
    border: 1px solid #cacaca;
    padding: 8px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: bold;
    color: #003366;
    margin-right: 10px;
    background: linear-gradient(145deg, #889baf, #889baf);
    display: inline-flex;
    align-items: center;
    cursor: pointer;
    color: white;
    text-decoration: none;
    min-width: max-content;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-hitam:hover {
    background: white;
    color: black;
}


    .button-create {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, #28a745, #d4edda, #28a745); /* hijau modern */
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-create:hover {
        color: black;
        background: white;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>


<style>
    .button-dikembalikan {
        border: none;
        padding: 8px 20px;
        border-radius: 15px;
        font-size: 14px;
        color: white;
        font-weight:bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, red, white, red);
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-dikembalikan:hover {
        color: black;
        background: white;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>

<style>
    .button-pilih {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        font-weight:bold;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s, background-color 0.3s, border 0.3s;
        background: linear-gradient(120deg, rgb(2, 88, 248), silver, whitesmoke);
        background-size: 200% auto;
        animation: gradientMove 6s linear infinite;
    }

    .button-pilih:hover {
        color: midnightblue;
        background: white;
        border: 1px solid midnightblue;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>


<style>
    /* BUTTON PILIH (navy-silver) */
    /* BUTTON SUDAH (green elegant) */
    .button-sudah {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        font-weight:bold;
        background: linear-gradient(120deg, #006400, #32CD32, #90EE90); /* darkgreen to limegreen */
        background-size: 200% auto;
        animation: gradientMove 6s linear infinite;
        text-decoration: none;
        transition: background 0.3s, color 0.3s, border 0.3s;
        display: flex;
        align-items: center;
    }

    .button-sudah:hover {
        color: #006400;
        background: white;
        border: 1px solid #006400;
    }

    /* BUTTON BELUM (red elegant) */
    .button-belum {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        font-weight:bold;
        background: linear-gradient(120deg, #8B0000, #FF6347, #FFA07A); /* darkred to light salmon */
        background-size: 200% auto;
        animation: gradientMove 6s linear infinite;
        text-decoration: none;
        transition: background 0.3s, color 0.3s, border 0.3s;
        display: flex;
        align-items: center;
    }

    .button-belum:hover {
        color: #8B0000;
        background: white;
        border: 1px solid #8B0000;
    }

    /* Animasi gradasi */
    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }


    .button-download {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    font-weight:bold;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #001f4d, #004080, #001f4d); /* navy modern */
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-download:hover {
    color: black;          /* tulisan jadi hitam */
    background: white;     /* background jadi putih */
}

.button-statistika {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    font-weight:bold;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #dbba00, #ffffff, #dbba00); /* navy modern */
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-statistika:hover {
    color: black;          /* tulisan jadi hitam */
    background: white;     /* background jadi putih */
}

button-delete {
    border: 1px solid #c8dfff;
    padding: 8px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: bold;
    color: #003366;
    background: linear-gradient(145deg, #d85757, #d85757);
    display: inline-flex;
    align-items: center;
    margin-right: 10px;
    cursor: pointer;
    text-decoration: none;
    min-width: max-content;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-delete:hover {
    background: white;
    color: black;
}

.putih {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-size: 16px;
    color: black;
    cursor: pointer;
    font-weight: bold;
    display: flex;
    align-items: center;
    text-decoration: none;
    background-color: white;
    transition: background-color 0.3s;
}

.putih:hover {
    background-color: #f1f1f1; /* opsional: efek hover ringan */
}


/* Jika animasi gradientMove belum ada, tambahkan contoh animasinya: */
@keyframes gradientMove {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 200% 50%;
    }
}


</style>


<style>
    .zebra-table tbody tr:hover {
        background-color: #f5b041 !important; /* warna oranye PUPR */
        color: white;
        transition: background-color 0.3s ease;
    }
</style>

<script>
// Simpan posisi scroll terakhir
let scrollPosition = {
  top: window.scrollY,
  left: window.scrollX
};

// Update saat user scroll manual
window.addEventListener('scroll', () => {
  scrollPosition.top = window.scrollY;
  scrollPosition.left = window.scrollX;
});

// Fungsi untuk kunci scroll
function lockScroll() {
  window.scrollTo(scrollPosition.left, scrollPosition.top);
}

// Cegah <a href="#"> bikin naik ke atas
document.querySelectorAll('a[href="#"]').forEach(link => {
  link.addEventListener('click', e => e.preventDefault());
});

// Cegah form submit default (kalau gak sengaja ke-submit)
document.querySelectorAll('form').forEach(form => {
  form.addEventListener('submit', function(e) {
    if (!form.hasAttribute('data-allow-submit')) {
      e.preventDefault();
    }
  });
});

// Saat select berubah, jangan naik scroll
document.querySelectorAll('select').forEach(select => {
  select.addEventListener('change', () => {
    setTimeout(lockScroll, 50); // kasih delay biar aman
  });
});

// Tambahan: jika input/textarea berubah
document.querySelectorAll('input, textarea').forEach(input => {
  input.addEventListener('input', () => {
    setTimeout(lockScroll, 50);
  });
});
</script>


<style>
  .card-pbg {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 20px;
    max-width: 800px;
    margin: 0 auto;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
font-family: 'Poppins', sans-serif;

  }

  .card-pbg h2 {
    font-size: 18px;
    color: #4041DA;
    margin-bottom: 12px;
    font-weight: 600;
  }

  .card-pbg p {
    font-size: 15px;
    color: #333;
    line-height: 1.6;
    text-align: justify;
    margin-bottom: 12px;
  }

  .card-pbg ul {
    padding-left: 20px;
    margin-bottom: 12px;
  }

  .card-pbg li {
    font-size: 15px;
    color: #444;
    margin-bottom: 6px;
    line-height: 1.5;
  }

  .card-pbg li span {
    font-weight: 600;
  }

  .card-pbg .sub-list {
    padding-left: 20px;
    list-style-type: disc;
  }

  .card-pbg .section-title {
    font-size: 15px;
    color: #4041DA;
    font-weight: 600;
    margin-top: 20px;
    margin-bottom: 8px;
  }

  .card-pbg .manual-number {
    font-size: 15px;
    color: #444;
    margin-bottom: 8px;
    text-align: justify;
  }

  .card-pbg .manual-number span {
    font-weight: 600;
  }

  .button-maroon {
    background: linear-gradient(145deg, #800000, #5a0000); /* Merah maroon */
    color: #ffffff;
    border: 1px solid #4a0000;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-maroon:hover {
    background: #a52a2a !important; /* Merah maroon lebih terang saat hover */
    color: #ffffff !important;
    border: 1px solid #4a0000 !important;
    box-shadow: 0 4px 12px rgba(128, 0, 0, 0.25);
    transform: translateY(-1px);
}


</style>

