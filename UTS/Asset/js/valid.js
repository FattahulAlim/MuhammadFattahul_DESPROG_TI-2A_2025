document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector(".form-input");
    const nama = document.getElementById("nama");
    const kategori = document.getElementById("kategori");
    const stok = document.getElementById("stok");
    const harga = document.getElementById("harga");
    const buttonTambah = document.getElementById("btn-tambah");
    const buttonLogout = document.getElementById("btn-logout");

    
    form.addEventListener("submit", (e) => {
        let isValid = true;
        clearErrors();


        if (nama.value.trim() === "") {
            showError(nama, "Field nama tidak boleh kosong");
            isValid = false;
        }

        if (kategori.value.trim() === "") {
            showError(kategori, "Field kategori tidak boleh kosong");
            isValid = false;
        }

        const stokValue = stok.value.trim();
        if (stokValue === "") {
            showError(stok, "Field stok tidak boleh kosong");
            isValid = false;
        }

         if (isNaN(stokValue) || stokValue < 1) {
            showError(stok, "Stok harus bernilai lebih dari 0");
            isValid = false;
        }

        const hargaValue = harga.value.trim();
        if (hargaValue === "") {
            showError(harga, "Field harga tidak boleh kosong");
            isValid = false;
        } else 

        if (isNaN(hargaValue) || hargaValue < 500) {
            showError(harga, "Barang minimal harus berharga Rp 500");
            isValid = false;
        }

        //Sementara bisa tapi ubah pesannya

        if (!isValid) e.preventDefault();
    });


    function showError(input, message) {
        input.classList.add("error");
        const error = document.createElement("span");
        error.className = "error-message";
        error.style.color = "red";
        error.style.fontSize = "12px";
        error.style.display = "block";
        error.textContent = message;
        input.after(error);
    }

    function clearErrors() {
        document.querySelectorAll(".error-message").forEach(e => e.remove());
        document.querySelectorAll(".error").forEach(el => el.classList.remove("error"));
    }

    
    if (buttonTambah) {
        buttonTambah.style.transition = "all 0.2s ease";

        buttonTambah.addEventListener("mouseenter", () => {
            buttonTambah.style.transform = "scale(1.05)";
            buttonTambah.style.backgroundColor = "#1d67c8ff";
        });

        buttonTambah.addEventListener("mouseleave", () => {
            buttonTambah.style.transform = "scale(1)";
            buttonTambah.style.backgroundColor = "";
        });

        buttonTambah.addEventListener("mousedown", () => {
            buttonTambah.style.transform = "scale(0.95)";
        });

        buttonTambah.addEventListener("mouseup", () => {
            buttonTambah.style.transform = "scale(1.05)";
        });
    }

    
    if (buttonLogout) {
        buttonLogout.style.transition = "all 0.2s ease";

        buttonLogout.addEventListener("mouseenter", () => {
            buttonLogout.style.transform = "scale(1.05)";
            buttonLogout.style.backgroundColor = "#e2e2e2ff";
        });

        buttonLogout.addEventListener("mouseleave", () => {
            buttonLogout.style.transform = "scale(1)";
            buttonLogout.style.backgroundColor = "";
        });

        buttonLogout.addEventListener("mousedown", () => {
            buttonLogout.style.transform = "scale(0.95)";
        });

        buttonLogout.addEventListener("mouseup", () => {
            buttonLogout.style.transform = "scale(1.05)";
        });

        
        buttonLogout.addEventListener("click", () => {
            window.location.href = "index.html";
        });
    }
});
